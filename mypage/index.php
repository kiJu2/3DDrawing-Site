<!DOCTYPE html>
<html>
<head>
  <link href = "styles.css?ver=7" rel = "stylesheet">
  <meta charset="utf-8">
  <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=Archivo+Black&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Cabin+Condensed&display=swap" rel="stylesheet">
  <!-- <script
  src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
  integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
  crossorigin="anonymous"></script> -->
  <script src="script.js?ver=12"></script>
</head>
<body>
  <div class = 'form-box'>
    <img src = '/TermProject/imgs/HongchongIcon.png' class = 'logo'>
    <ul>
      <div class = 'liBox'>
        <li class = 'category' id = 'information'>Information</li>
  			<li class = 'category' id = 'modify'>Modify</li>
  			<li class = 'category' id = 'purchase'>Purchase</li>
  			<li class = 'category' id = 'logout'><a href = 'logout.php'>Logout</a></li>
      </div>
		</ul>
    <div class = 'horizen'></div>
    <div class = 'here'>
      <script>
        $(document).on('click', '#modify', function(){
          $('.here').load('modify.php');
        });
        $(document).on('click', '#purchase', function(){
          $('.here').load('purchase.php');
        });
        $(document).on('click', '#information', function(){
          $('.here').load('information.php');
        });
      </script>
      

    </div>
  </div>
</body>
</html>
