$(document).ready(function() {

  // animation of the phone number
  $('.phone-number__icon, .phone-number__text').hover(
    function() { $('.phone-number__icon').addClass('animated tada')},
    function() { $('.phone-number__icon').removeClass('animated tada')}
  );

  // animation of the search button
  $('.page-header__search-submit').hover(
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



  // $('.page-header__navbar--bottom a').on('click', function(e){
  //   e.preventDefault();
  // });
     
  // $('#menuFurniture').hover(function () {
  //    clearTimeout($.data(this,'timer'));
  //    $('#dropMenu',this).stop(true,true).slideDown(200);
  // }, function () {
  //   $.data(this,'timer', setTimeout($.proxy(function() {
  //     $('#dropMenu',this).stop(true,true).slideUp(200);
  //   }, this), 100));
  // });
 


  $("#carouselHero").owlCarousel({
  	items: 1,
  	nav: true,
  	// navText: ['<i class="fas fa-angle-left fa-10x"></i>', '<i class="fas fa-angle-right fa-10x"></i>'],
  	dots: true,
  	loop: true
  });

  $("#carouselList").owlCarousel({
  	items: 4,
  	margin: 10,
  	nav: true,
  	// navText: ['<i class="fas fa-angle-left"></i>', '<i class="fas fa-angle-right"></i>'],
  	dots: false,
  	loop: true
  });


// end	
});