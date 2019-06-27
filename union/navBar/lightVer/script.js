$(document).ready(function() {
  //첫 오프닝
  $('.razor').animate({
      width: '2000px'
    }, 250)
    .fadeOut(200);
  //뒷배경 삭제
  setTimeout(function() {
    $('.blackBackground').fadeOut(200);
  }, 200);
  //아이콘 표시
  setTimeout(function() {
    $('#facebook').animate({left : '48px', opacity : '1'}, 800);
  }, 400);
  setTimeout(function() {
    $('#instagram').animate({left : '48px', opacity : '1'}, 800);
  }, 400);
  setTimeout(function() {
    $('.loginIcon').animate({left : '1645px', opacity : '1'}, 800);
  }, 400);
  //로고 / 번호표 표시
  setTimeout(function() {
    $('.menuButton').animate({top : '40px'}, 600);
  }, 900);
  setTimeout(function() {
    $('.companyIcon').animate({top : '40px'}, 600);
  }, 900);
});
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
    $('.menuBtnUpLine').css('border-top', '3px solid white');
    $('.menuBtnBottomLine').css('border-top', '3px solid white');
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
