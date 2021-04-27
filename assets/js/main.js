jQuery(document).ready(function ($) {
  //Mob-menu
  $("#header-burger").on("click", function (e) {
    $(this).toggleClass("active");
    $("#menu-wrapper").toggleClass("active");
    $("body").toggleClass("overflow-h");
  });



  //Height is equal to width
  function equalHeight (elem){
    var widthElement = $(elem).width();
    $(elem).css({
      'height': widthElement + 'px'
    });
  }
  
  equalHeight('.grid-square__item');
  $( window ).resize(function() {
    equalHeight('.grid-square__item');
  });
 
  
});