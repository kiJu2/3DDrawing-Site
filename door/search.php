<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Archivo+Black&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin+Condensed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css?ver=12">
    <script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>
    <script src="script.js?ver=6"></script>
</head>
<body>
      <?php
      if(isset($_SESSION['id'])){
        if($_SESSION['id'] == 'HongChong'){
          echo '<a href = "/TermProject/upload/pan.html">upload</a>';
        }
      }
     ?>
    <?php
    if(is_file("../union/navBar/index.php")){
      require("../union/navBar/index.php");
    }
    else if(is_file("union/navBar/index.php")){
      require("union/navBar/index.php");
    }
    ?>
    <!-- 배너 및 카테고리 -->
    <div style=" height: 600px;
  width: 100%;

  background-image: url('imgs/light.jpg');
  background-position: bottom;">
  <div style="z-index: 1; padding: 55px 0 0 240px;">
    <form action = "search.php" method="POST">
      <input  style="width: 700px; height: 55px; border-radius: 2px; border:none;" name="search" placeholder="Search for a 3D printable object"></input>
      <input  style="width: 100px; height: 55px; background-color: #1884e6; border: none; color:white;" type = "button" value = "Search">
    </form>
  </div>
  <div style="padding: 215px 0 0 150px;">
        <p id = "title">
          <font style="color:#1393ce;">THING</font> YOUR <font style="color:#1393ce;">THINGS</font><br>
          EVERYTHING<br>
          YOU THINK OF</p>
        </div>
    </div>

    <p class = 'Drawings'>Search</p>
    <div class = 'Box'>
      <?php
      $db_host = "localhost";
      $db_user = "root";
      $db_password = "dPtskfdPtwjrtksrltmfrdptkfdkTejstksrhdiddl";
      $db_name = "think_things";

      $con = mysqli_connect($db_host, $db_user, $db_password, $db_name);
      // var_dump($_SESSION);
      $search=$_POST['search'];

      $check = "SELECT * FROM product where name like '%".$search."%' order by num desc ";
      $result = $con -> query($check);
      while($row = $result -> fetch_array(MYSQLI_ASSOC)){
        // echo "<div class = 'drawing' style = 'background-image: url(".$row['imag'].");'></div>";
        $price = $row['price'];
        $image = $row['imag'];
        $n_like = $row['n_like'];
        $num = $row['num'];
        $url = $row['url'];
        $content=$row['content'];
        $isMember = false;
        if(isset($_SESSION['id'])){
					$isMember = true;
				}
        if($isMember){
					echo "<a href ='$url'><div class = 'drawingBox'>";
					echo "<img src = '".$image."' class = 'drawing'></img>";
					// echo "<div class = 'drawing'></div>";
					echo "<div class = 'topBox'><p class = 'price'>$price$</p><img src = '/TermProject/imgs/like.png' class = 'like'><p class = 'number'>$n_like </p></div>";
					echo "</div></a>";
				}
				else{
					echo "<div class = 'drawingBox'>";
					echo "<img src = '".$image."' class = 'drawing'></img>";
					// echo "<div class = 'drawing'></div>";
					echo "<div class = 'topBox'><p class = 'price'>$price$</p><img src = '/TermProject/imgs/like.png' class = 'like'><p class = 'number'>$n_like </p></div>";
					echo "</div>";
				}
      }
      ?>
    </div>

</body>
</html>
