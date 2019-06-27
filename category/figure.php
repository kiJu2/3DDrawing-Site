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
		<script src="script.js?ver=5"></script>
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
		<div class = "banner">
			<p id = "title">MAKE ANYTHING<br>WE PROVIDE WHAT<br> YOU WANT.</p>
		</div>

    <ul>
			<li class = 'category'><a href = 'index.php'>All</a></li>
			<li class = 'category'><a href = 'practical.php'>Practical</a></li>
			<li class = 'category'><a href = 'figure.php'>Figure</a></li>
			<li class = 'category'><a href = 'decoration.php'>Decoration</a></li>
			<li class = 'category'><a href = 'toy.php'>Toy</a></li>
		</ul>
		<div class = 'horizen'></div>
		<!-- 새로운 도면들 -->
		<p class = 'Drawings'>Figure</p>
		<div class = 'Box'>
			<?php
      $db_host = "localhost";
      $db_user = "root";
      $db_password = "dPtskfdPtwjrtksrltmfrdptkfdkTejstksrhdiddl";
      $db_name = "think_things";

      $con = mysqli_connect($db_host, $db_user, $db_password, $db_name);
      // var_dump($_SESSION);
      $check = "SELECT * FROM product WHERE kind = 'figure';";
      $result = $con -> query($check);
      while($row = $result -> fetch_array(MYSQLI_ASSOC)){
				// echo "<div class = 'drawing' style = 'background-image: url(".$row['imag'].");'></div>";
				$price = $row['price'];
				$image = $row['imag'];
				$n_like = $row['n_like'];
				$num = $row['num'];
				$url = $row['url'];
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
	</body>
</html>
