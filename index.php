<!DOCTYPE html>
<html>
<head>
  <link href = "styles.css?ver=20" rel = "stylesheet">
  <meta charset="utf-8">
  <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=Archivo+Black&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lalezar&display=swap" rel="stylesheet">
  <!-- <script
  src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
  integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
  crossorigin="anonymous"></script> -->
  <script src="script.js?ver=12"></script>
</head>
<body>
  <div class = "blackBackground">
    <div class = "razor"></div>
  </div>
  <!-- fixed -->
  <div class = "menu">
    <div class = "menuLeft">
      <p class = "menuText" id = "menuIntro">Intro</p>
      <p class = "menuText" id = "menuProduct">Content</p>
      <p class = "menuText" id = "menuCounceling">Counceling</p>
    </div>
    <div class = "menuRight">
      <div class = "menuRightBox">
        <div class = "menuUpLine"></div>
        <p class = "menuRightText"><b>1600, Chungjeol-ro, Byeongcheon-myeon, Dongnam-gu, Cheonan-si, Chungcheongnam-do, Republic of Korea</b></p>
        <br>
        <br>
        <p class = "menuRightText">T 000 - 000 - 0000</p>
        <p class = "menuRightText">E thdydehfdl12@gmail.com</p>
      </div>
    </div>
  </div>
  <a href = "#"><img class = "companyIcon" src = '/TermProject/imgs/HongchongIcon.png'></a>
  <div class = "pageNumberBox"><p class = "pageNumber"><span class = "pageNumberValue">01</span> / 03</p></div>
  <a href = "https://github.com/kiJu2" target = "_blank"><img src = "/TermProject/imgs/github.png" class = "icon" id = "facebook"></a>
  <a href = "https://www.instagram.com/lick_it_u/?hl=ko" target = "_blank"><img src = "/TermProject/imgs/instagram.png" class = "icon" id = "instagram"></a>
  <img src = "/TermProject/imgs/arrow.gif" class = "arrow">
  <div class = "menuButton">
    <div class = "menuBtnUpLine"></div>
    <div class = "menuBtnBottomLine"></div>
  </div>
  <!-- slider -->
  <div
  <ul class = "slider">
    <li class = "page" id = "page1" alt="">
      <p class = "title" id = "introTitle">Intro</p>
      <p class = "headLine" id = "introHeadLine">
        <span class = "bdText">THINK</span> YOUR <span class = "bdText">THINGS</span><br>
        EVERYTHING<br>
        YOU THINK OF.<br>
      </p>
      <div class = "moreLine" id = "introMore"><a href = "/TermProject/door/door.php" class = "more">more</a>
        <div class = "moreBorderLine"></div>
      </div>
    </li>
    <li class = "page" id = "page2" alt="">
      <p class = "title" id = "productTitle">Content</p>
      <p class = "headLine" id = "productHeadLine">
        MAKE ANYTHING<br>
        WE PROVIDE <br>
        WHAT YOU WANT.
      </p>
      <div class = "moreLine" id = "productMore"><a href = "/TermProject/category/index.php" class = "more">more</a>
        <div class = "moreBorderLine"></div>
      </div>
    </li>
  </li>
  <li class = "page" id = "page3" alt="">
    <p class = "title" id = "councelingTitle">Counceling</p>
    <p class = "headLine" id = "councelingHeadLine">
      WE ARE ALWAYS WAITING FOR YOU.
    </p>
    <div class = "moreLine" id = "councelingMore"><a href = "/TermProject/cscenter/hongchong_customercenter.php" class = "more">more</a>
      <div class = "moreBorderLine"></div>
    </div>
  </li>
    <!-- <li class = "page" id = "page4" alt=""></li> -->
  </ul>
</body>
</html>
