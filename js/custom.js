
// preloader
$(window).load(function(){
    $('.preloader').fadeOut(1000); // set duration in brackets    
});

/* HTML document is loaded. DOM is ready. 
-------------------------------------------*/
$(function(){

  // ------- WOW ANIMATED ------ //
  wow = new WOW(
  {
    mobile: false
  });
  wow.init();

  // ------- JQUERY PARALLAX ---- //
  function initParallax() {
    $('#home').parallax("100%", 0.1);
    $('#pakej').parallax("100%", 0.3);
    $('#itinerari').parallax("100%", 0.2);
    $('#galeri').parallax("100%", 0.3);
	$('#korporat').parallax("100%", 0.3);
    $('#book').parallax("100%", 0.1);

  }
  initParallax();

  // HIDE MOBILE MENU AFTER CLIKING ON A LINK
  $('.navbar-collapse a').click(function(){
        $(".navbar-collapse").collapse('show');
    });

  // NIVO LIGHTBOX
  $('#pakej a').nivoLightbox({
        effect: 'fadeScale',
    });

});

