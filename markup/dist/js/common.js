$(document).ready(function() {

  // mobile icon hamburger
  // $('#nav-icon1').click(function(){
  //   $(this).toggleClass('open');
  // });
  // mobile top menu open
  $('.page-header__mobile-menu-btn').on('click', function(){
    $('.page-header__middle-menu-list').slideToggle(200);
    $('#nav-icon1').toggleClass('open');
  });

    // mobile search open
  $('.page-header__search--mob-btn').on('click', function(){
    $('.page-header__search-form--mob').slideToggle(200);
  });

  // open header bottom menu
  $('.page-header__bottom--mob').on('click', function(){
    $('.page-header__bottom--mob').toggleClass('open');
    $('.page-header__bottom-menu-list').slideToggle(200);
  });

  // hide dropdown second level menu after click beyond its area
  $(document).click(function (e){ // событие клика по веб-документу
    var div = $(".dropdown-menu"); // тут указываем ID элемента
    if (!div.is(e.target) // если клик был не по нашему блоку
        && div.has(e.target).length === 0) { // и не по его дочерним элементам
      div.hide(); // скрываем его
    }
  });

  $('html').on('touchstart', function(e) {
    $('.dropdown-menu').hide();
  })
  $(".dropdown-menu").on('touchstart',function(e) {
      e.stopPropagation();
  });

  // animation of the phone number
  $('.phone-number__icon, .phone-number__text').hover(
    function() { $('.phone-number__icon').addClass('animated tada')},
    function() { $('.phone-number__icon').removeClass('animated tada')}
  );

  // animation of the search button
  $('.page-header__search-submit, .cart-popup__window-top-close-btn, .standart-button').hover(
    function() { $(this).addClass('animated pulse')},
    function() { $(this).removeClass('animated pulse')}
  );

   // animation of the email icon
  $('.page-footer__top-right-email').hover(
    function() { $('.page-footer__top-right-email-icon').addClass('animated tada')},
    function() { $('.page-footer__top-right-email-icon').removeClass('animated tada')}
  );

  // animation of the button
  $('.page__button').hover(
    function() { $('.page__button-link').addClass('animated pulse')},
    function() { $('.page__button-link').removeClass('animated pulse')}
  );


  // page-header dropdown menu
  $('.page-header__navbar--bottom a').on('click', function(e){
    e.preventDefault();
  });
     
  $('.page-header__bottom-menu-list li').hover(function () {
     clearTimeout($.data(this,'timer'));
     $('.dropdown-menu',this).stop(true,true).fadeIn(200);
  }, function () {
    $.data(this,'timer', setTimeout($.proxy(function() {
      $('.dropdown-menu',this).stop(true,true).fadeOut(500);
    }, this), 100));
  });
 

  // hero
  $("#carouselHero").owlCarousel({
  	items: 1,
  	nav: true,
  	dots: true,
  	loop: true
  });


  // ales-bloc slider
  $("#carouselList").owlCarousel({
  	items: 4,
    responsive:{
      0: {
        items: 1
      },
      768: {
        items: 3
      },
      769: {
        items: 4
      }
    },
  	margin: 10,
  	nav: true,
  	dots: false,
  	loop: true
  });

  // click to cart (sales-block)
  // magnific-popup
  $(function () {
    $('.popup-modal').magnificPopup({
      type: 'inline',
      alignTop: true,
      preloader: 200,
      focus: '#username',
      modal: true
    });
    $(document).on('click', '.cart-popup__window-top-close-btn, .cart-popup__window-buttons-left', function (e) {
      e.preventDefault();
      $.magnificPopup.close();
    });
  });

// end	
});