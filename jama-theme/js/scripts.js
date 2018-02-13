$(document).ready(function(){
  $('#nav-toggle').on('click', function(){
    $('body').toggleClass('nav-open');
    var navButton = $(this);
    $(this).next('nav').slideToggle(function(){
      navButton.toggleClass('open');
    });
  });
});
