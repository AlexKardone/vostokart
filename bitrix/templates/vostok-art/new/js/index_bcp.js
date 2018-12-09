$(function() {
    var $window = $(window);
    var $mainMenu = $('.main-menu');

    var menuStartPosition = $mainMenu.position().top;

    $window.scroll(function () {
        if ($window.scrollTop() > menuStartPosition) {
            $mainMenu.addClass('fixed');
        } else {
            $mainMenu.removeClass('fixed');
        }
    });

    var prices = $('.price');
    $.each(prices, function (key, val) {
        var price = $(val).text();
        var splitPrice = price.split('.00');
        if(splitPrice[0] != splitPrice[0].split(' ')[0]) {
            return;
        }
        var resPrice = numberWithSpaces(splitPrice[0]);
        $(val).text(resPrice + splitPrice[1]);
    });
    var prices = $('.price_old');
    $.each(prices, function (key, val) {
        var price = $(val).text();
        var splitPrice = price.split('.00');
        if(splitPrice[0] != splitPrice[0].split(' ')[0]) {
            return;
        }
        var resPrice = numberWithSpaces(splitPrice[0]);
        $(val).html('<s>'+resPrice + splitPrice[1]+'</s>');
    });

    $('[data-type=mobile-menu-button]').on('click', function () {
        $('[data-type=main-menu]').addClass('show');
        return false;
    });

    $('[data-type=close-menu-button]').on('click', function () {
        $('[data-type=main-menu]').removeClass('show');
        return false;
    });

    $('.popup-to-card').on('click', function () {
        var name = $(this).attr('data-name');
        var picture = $(this).attr('data-picture');
        $('[data-type=add-to-card-popup]').addClass('show');
        $('[data-type=add-to-card-popup] .label.name').css('display', 'block');
        $('[data-type=add-to-card-popup] .label.name').html(name);
        $('[data-type=add-to-card-popup] h2').html('Добавлено в корзину');
        console.log(picture);
        addToCard({name:name, url:location.href, count:1, picture_url:picture});

        drawCardList();

        return false;
    });

    $('.card-button').on('click', function () {
        var name = $(this).attr('data-name');
        $('[data-type=add-to-card-popup]').addClass('show');
        $('[data-type=add-to-card-popup] .label.name').css('display', 'none');
        $('[data-type=add-to-card-popup] h2').html('Корзина');
        drawCardList();
        return false
    });

    $('[data-type=add-to-card-popup]').click(function(e){
        if (e.target === this) {
            $('[data-type=add-to-card-popup]').removeClass('show');
            return false;
        }
    });

    $('[data-type=add-to-card-popup] .place-next').on('click', function () {
        $('[data-type=add-to-card-popup]').removeClass('show');
        return false;
    });
    $('[data-type=add-to-card-popup] .close-bt').on('click', function () {
        $('[data-type=add-to-card-popup]').removeClass('show');
        return false;
    });
    $('[data-type=add-to-card-popup] .place-order').on('click', function () {
        $('[data-type=add-to-card-popup]').removeClass('show');
    });
    addRemoveAction();
    updateCardNum();
});

function addRemoveAction() {
    $('[data-card-action="remove"]').off('click');
    $('[data-card-action="remove"]').on('click', function () {
        var href = $(this).attr('href');
        removeFromCard(href);
        drawCardList();
        return false;
    });
}

function drawCardList() {
    var lis = "";
    var orderList = "";
    $.each(getFromCard().arr, function (key, value) {
        lis += "<li><img src='"+value.picture_url+"' alt=''><div class='about'><a href='" + value.url + "'>" + value.name + "</a> <a href='" + value.url + "' data-card-action='remove'>Удалить</a></div></li>";
        orderList += value.name + ", ";
    });
    $('[data-type=add-to-card-popup] .card-list').html(lis);
    $('[data-type=add-to-card-popup] .place-order').attr("data-name", orderList);

    addRemoveAction();
    updateCardNum();
}

function numberWithSpaces(x) {
    var parts = x.toString().split(".");
    parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, " ");
    return parts.join(".");
}

function updateCardNum() {
    var cardCount = getFromCard().arr.length;
    var numText = 'Корзина';
    if (cardCount != 0) {
        numText = 'Корзина (' + cardCount + ')';
    }

    $('.card-button').html(numText);
}

function addToCard(object) {
    var card = getFromCard();
    var isExistsFlag = false;
    $.each(card['arr'], function (key, value) {
        if (object.url == value.url) {
            isExistsFlag = true;
        }
    });
    if (isExistsFlag) {
        return;
    }

    card['arr'].push(object);
    $.cookie("card", JSON.stringify(card), {
            expires: 10,
            path: '/'
        }
    );
}

function getFromCard() {
    var card = $.cookie("card");
    if (!card) {
        card = {arr:[]};
    } else {
        card = JSON.parse(card);
    }
    return card;
}

function removeFromCard(href) {
    var card = getFromCard();
    var cardNewArr = [];
    $.each(card['arr'], function (key, value) {
        if (href != value.url) {
            cardNewArr.push(value);
        }
    });
    card.arr = cardNewArr;

    $.cookie("card", JSON.stringify(card), {
            expires: 10,
            path: '/'
        }
    );
}