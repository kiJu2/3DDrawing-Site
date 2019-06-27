<?php
// var_dump($_POST);

$userId = $_POST['userId'];
$userPassword = $_POST['userPassword'];

$db_host = "localhost";
$db_user = "root";
$db_password = "dPtskfdPtwjrtksrltmfrdptkfdkTejstksrhdiddl";
$db_name = "think_things";

$con = mysqli_connect($db_host, $db_user, $db_password, $db_name);

//접속 실패
if(mysqli_connect_error($con)){
  echo "EORRO<br>";
  echo "EORRO_CODE : ".mysqli_connect_error();
  exit();
}
//접속 성공

$check = "SELECT * FROM member WHERE id = '$userId'";
$result = $con -> query($check);

if($result -> num_rows == 1){
  $row = $result -> fetch_array(MYSQLI_ASSOC); //하나의 열을 배열로 가져옴
  // var_dump($row);
  if($row['pw'] == $userPassword){                //필드명으로 첨자 가능함.
    $_SESSION['id'] = $userId;
    if(isset($_SESSION['id'])){
      header('Location: /TermProject');
      echo "<script>alert(\"Welcome\");</script>";
    }
    else {
      echo "<script>alert(\"Fail\");</script>";
      // header('Location: /TermProject/login/hongchong_login.php');
    }
  }
  else {
    echo "<script>alert(\"wrong ID / PW\");</script>";
    // header('Location: /TermProject/login/hongchong_login.php');
  }
}
else {
  echo "<script>alert(\"wrong ID / PW\");</script>";
  echo "Fail login.";
  // header('Location: /TermProject/login/hongchong_login.php');
}
mysqli_close($con);
?>
