$(document).ready(function(){
  $('#nav-toggle').on('click', function(){
    console.log('yup');
    $(this).next('nav').slideToggle(function(){
      
    });
  });
});
