$(document).ready(function() {

  // mobile top menu open
  $('.page-header__mobile-menu-btn').on('click', function(){
    $('.page-header__middle-menu-list').slideToggle(200);
  });

    // mobile search open
  $('.page-header__search--mob-btn').on('click', function(){
    $('.page-header__search-form--mob').slideToggle(200);
  });

  // open header bottom menu
  $('.page-header__bottom--mob').on('click', function(){
    $('.page-header__bottom-menu-list').slideToggle(200);
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

  // animation of the carousel arrows
  // $('.owl-nav, .owl-next').hover(
  //   function() { $(this).addClass('animated pulse')},
  //   function() { $(this).removeClass('animated pulse')}
  // );



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
 


  $("#carouselHero").owlCarousel({
  	items: 1,
  	nav: true,
  	dots: true,
  	loop: true
  });

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
  	// navText: ['<i class="fas fa-angle-left"></i>', '<i class="fas fa-angle-right"></i>'],
  	dots: false,
  	loop: true
  });


// end	
});