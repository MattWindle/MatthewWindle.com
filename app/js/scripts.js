

/*************
SCRIPT TO ANIMATE BURGER NAV
**************/

$('.nav-trigger').on('click', function(){
  $('.nav-links').toggleClass('open');
  $('nav .nav-trigger span:nth-child(1)').toggleClass('rotate-top');
  $('nav .nav-trigger span:nth-child(2)').toggleClass('hide-menu');
  $('nav .nav-trigger span:nth-child(3)').toggleClass('rotate-bottom');

});

/*************
SCROLL TOP FUNCTION
**************/

$(window).scroll(function(){

  var wScroll = $(this).scrollTop();
  console.log(wScroll);

  if(wScroll >= 250){
    $('.back-to-top').addClass('open');
  }
  else {
    $('.back-to-top').removeClass('open');

  }


});

/*******************
  Smooth Scroll - Provided by CSS-Tricks (https://css-tricks.com/snippets/jquery/smooth-scrolling/)
*******************/
$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 750);
        return false;
      }
    }
  });
});

/*************
FOCUS SKIP LINKS
**************/

$('.skip-link').focus(function(){
  $('.skip-links-wrapper').css({ 'top' : '0px', 'position' : 'relative' });
});

$('.nav-links a').focus(function(){
  $('.skip-links-wrapper').css({ 'top' : '-70px', 'position' : 'absolute' });
});


$('html').on('click', function(){
  if ($('.skip-links-wrapper').css('position') == 'relative')
  {
    $('.skip-links-wrapper').css({ 'top' : '-70px', 'position' : 'absolute' });
  }
});
