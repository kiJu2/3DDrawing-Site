<!DOCTYPE html>
<html>
<head>
  <link href = "../css/styles.css?ver=11" rel = "stylesheet">
  <meta charset="utf-8">
  <link href="https://fonts.googleapis.com/css?family=Fjalla+One&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Archivo+Black&display=swap" rel="stylesheet">
</head>
<body>

  <?php
  if(is_file("../union/navBar/lightVer/index.php")){
    require("../union/navBar/lightVer/index.php");
  }
  else if(is_file("union/navBar/lightVer/index.php")){
    require("union/navBar/lightVer/index.php");
  }
  ?>
  <div class = "searchZone">
    <div class = "inSearchBox">
      <div class = "textBox">
        <p class = "searchText"><span class = "bd">THINK</span> YOUR <span class = "bd">THINGS</span></p>
        <!-- <p class = "searchText">What do you want?</p> -->
      </div>
      <div class = "searchBox">
        <form action = "search.php" method="POST">
          <input class = "searchBar" name="search" placeholder="Search for a 3D printable object"></input>
          <input class = "searchButton" type = "button" value = "Search">
        </form>
      </div>
    </div>
  </div>
  <!-- <div class = "categoryZone">
    <table class = "category">
      <tr>
          <td class = "cell">
            <a href = "#">
              <div class = "clickZone">
                <img class = "iconImg" src = "imgs/icon/all.png">
                <p class = "iconText">All</p>
              </div>
            </a>
          </td>
          <td class = "cell">
            <a href = "#">
              <div class = "clickZone">
                <img class = "iconImg" src = "imgs/icon/home.png">
                <p class = "iconText">Home</p>
              </div>
            </a>
          </td>
          <td class = "cell">
            <a href = "#">
              <div class = "clickZone">
                <img class = "iconImg" src = "imgs/icon/electronics.png">
                <p class = "iconText">Electronics</p>
              </div>
            </a>
          </td>
          <td class = "cell">
            <a href = "#">
              <div class = "clickZone">
                <img class = "iconImg" src = "imgs/icon/physical.png">
                <p class = "iconText">Physical</p>
              </div>
            </a>
          </td>
      </tr>
      <tr>
          <td class = "cell">
            <a href = "#">
              <div class = "clickZone">
                <img class = "iconImg" src = "imgs/icon/sport.png">
                <p class = "iconText">Sport</p>
              </div>
            </a>
          </td>
          <td class = "cell">
            <a href = "#">
              <div class = "clickZone">
                <img class = "iconImg" src = "imgs/icon/toy.png">
                <p class = "iconText">Toy</p>
              </div>
            </a>
          </td>
          <td class = "cell">
            <a href = "#">
              <div class = "clickZone">
                <img class = "iconImg" src = "imgs/icon/education.png">
                <p class = "iconText">Education</p>
              </div>
            </a>
          </td>
          <td class = "cell">
            <a href = "#">
              <div class = "clickZone">
                <img class = "iconImg" src = "imgs/icon/accessory.png">
                <p class = "iconText">Accessory</p>
              </div>
            </a>
          </td>
      </tr>
    </table>
  </div> -->
  <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
  <script>
  //첫 실행 화면
  $(function() {
    $(".textBox").animate({top : '0px', opacity : '1'}, 800);

    setTimeout(function(){
      $(".searchBox").animate({opacity : '1'}, 800);
    }, 800)
  });
  </script>
</body>
</html>
