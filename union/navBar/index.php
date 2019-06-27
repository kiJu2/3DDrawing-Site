<!DOCTYPE html>
<?php
  if(!isset($_SESSION))
  {
      session_start();
  }
?>
<html>
<head>
  <link href = "/TermProject/union/navBar/styles.css?ver=41" rel = "stylesheet">
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
  <script src="/TermProject/union/navBar/script.js?ver=22"></script>
</head>
<body>
  <!-- fixed -->
  <div class = "menu">
    <div class = "menuLeft">
      <a href="/TermProject/door/door.php"><p class = "menuText">Search</p></a>
      <a href="/TermProject/category/index.php"><p class = "menuText" id = "menuProduct">Content</p></a>
      <a href="/TermProject/aboutHongChong/hongchong_introduction.php"><p class = "menuText" id = "menuIntro">About us</p></a>
      <a href="/TermProject/cscenter/hongchong_customercenter.php"><p class = "menuText" id = "menuIntro">CS Center</p></a>
      <div class = "copyrightLine"></div>
      <p class = "copyright">COPYRIGHT<br> (C) Think-Things ALL RIGHTS</p>
    </div>
  </div>

  <!-- <a href="/TermProject/login/hongchong_login.php" onClick="window.open(this.href, '', 'width=800, height=600'); return false;"><img class = "loginIcon" src = "/TermProject/union/navBar/login.png"></a> -->
  <?php
  if(isset($_SESSION['id'])){ //세션이 있냐? 로그인중이냐?
    echo '<a href="/TermProject/mypage/index.php"><img class = "loginIcon" src = "/TermProject/union/navBar/lightVer/login.png"></a>';
  }
  else{
    echo '<a href="/TermProject/login/hongchong_login.php"><img class = "loginIcon" src = "/TermProject/union/navBar/lightVer/login.png"></a>';
  }
   ?>
  <div class = 'companyBox'>
    <a href = "/TermProject/index.php"><img class = "companyIcon" src = '/TermProject/imgs/HongchongIcon.png'></a>
</div>
  <a href = "https://github.com/kiJu2" target = "_blank"><img src = "/TermProject/imgs/githubDark.png" class = "icon" id = "facebook"></a>
  <a href = "https://www.instagram.com/lick_it_u/?hl=ko" target = "_blank"><img src = "/TermProject/imgs/instagramDark.png" class = "icon" id = "instagram"></a>
  <div class = "menuButton">
    <div class = "menuBtnUpLine"></div>
    <div class = "menuBtnBottomLine"></div>
  </div>
</body>
</html>
