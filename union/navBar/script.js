// 메뉴 출력
var isMenuClick = false;
$(document).on('click', '.menuButton', function(event) {
  if(isMenuClick == false){
    $('.menu').animate({left : '1440px'}, 500);
    $('.menuBtnUpLine').css('border-top', '3px solid white');
    $('.menuBtnBottomLine').css('border-top', '3px solid white');
    isMenuClick = true;
  }
  else {
    $('.menu').animate({left : '1760px'}, 500);
    $('.menuBtnUpLine').css('border-top', '3px solid black');
    $('.menuBtnBottomLine').css('border-top', '3px solid black');
    isMenuClick = false;
  }
});
// 메뉴 마우스 hover 애니메이션
$(function(){
  $('.menuText').each(function(){
    $('.menuText').mouseenter(function(){
      $(this).stop().animate({opacity : "1", left : '30px'}, 300);
    });
    $('.menuText').mouseleave(function(){
      $(this).stop().animate({opacity : "0.5", left : '0px'}, 300);
    });
  });
});
// 메뉴 버튼 아래 길이 조정(hover)
$(function(){
  $('.menuButton').mouseenter(function(){
    $('.menuBtnBottomLine').stop().animate({width : '99%'}, 300);
  });
  $('.menuButton').mouseleave(function(){
    $('.menuBtnBottomLine').stop().animate({width : '50%'}, 300);
  });
});
