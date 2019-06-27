var mouseWheelEvent = 0;
//첫 실행
$(document).ready(function() {
  setTimeout(function() {
    $('#title').animate({top : '0px', opacity : '1'}, 1000);
  }, 300);
  $('.topBox').hide();

  $('.drawingBox').each(function(){
    $(this).mouseenter(function(){
      $(this).children('.topBox').stop().fadeIn(200);
    });
    $(this).mouseleave(function(){
      $(this).children('.topBox').stop().fadeOut(200);
    });
  });

});
