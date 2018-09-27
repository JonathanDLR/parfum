(function($){

  function menuHide() {
    if (window.matchMedia("(max-width: 700px)").matches) {
      $(document.body).click(function(e) {
        if(!$(e.target).is("#BUTmenu")) {
          $('body').removeClass('slide');
        }
      });
    }
    else {
      $('.menu').mouseleave(function(){
        $('body').removeClass('slide');
      });
    }
  }

  menuHide();
  $(window).resize(menuHide);

  $('.menu a').click(function(){
      $('body').removeClass('slide');
  });

  $('a[href^="#"]').click(function() {
    var the_id = $(this).attr("href");
    if (the_id === '#') {
      return;
    }
    $('html, body').animate({
			scrollTop:$(the_id).offset().top
		}, 'slow');
		return false;
  });

  $('#BUTmenu').click(function(){
      $('body').addClass('slide');
  });

  $('.line').click(function(){
    $('.border').toggleClass('opened');
  });

  $('.menu-bottom').hover(function(){
      $('.infos').slideToggle();
  });

  $('.login').click(function(){
      $('.slide-usermenu').slideToggle();
      $('.login').toggleClass('background-login');
      $('.arrow').toggleClass('image-login');
  });

  $('.button-login').click(function(){
      $('.slide-login').fadeToggle(400);
      $('.button-login').toggleClass('login-hover');
      $('.button-register').removeClass('register-hover');
      $('.slide-register').fadeOut(400);
  });

  $('body:not(.logout)').click(function(){
      $('.button-login').removeClass('login-hover');
  });


  $('.button-register').click(function(){
      $('.slide-register').fadeToggle(400);
      $('.button-register').toggleClass('register-hover');
      $('.button-login').removeClass('login-hover');
      $('.slide-login').fadeOut(400);
  });

  $('.success').hide().slideDown(800).delay(5000).slideUp();
  $('.error').hide().slideDown(800).delay(5000).slideUp();
  $('.info').hide().slideDown(800).delay(5000).slideUp();
  $('.alert').hide().slideDown(800).delay(5000).slideUp();

})(jQuery);
