$(document).ready(function(){
  $('#nav-toggle').on('click', function(){
    $('body').toggleClass('nav-open');
    var navButton = $(this);
    $(this).next('nav').slideToggle(function(){
      navButton.toggleClass('open');
    });
  });

  $('#home-slide').slick({
    autoplay: true,
    autoplaySpeed: 2000,
    dots: false,
    arrows: false,
    infinite: true,
    speed: 500,
    fade: true,
    cssEase: 'linear'
  });

  $('.ai1ec-views-dropdown').on('click', function(){
    $(this).find('.ai1ec-dropdown-menu').toggle();
  });
});
