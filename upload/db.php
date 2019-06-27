<html>
<head>
<?php
      $name = $_POST['name'];
      $kind = $_POST['index'];
      $price = $_POST['price'];
      $imag = $_POST['title'];
      $url = $_POST['URL'];

      $db_host = "localhost";
      $db_user = "root";
      $db_password = "dPtskfdPtwjrtksrltmfrdptkfdkTejstksrhdiddl";
      $db_name = "think_things";

      $connect = mysqli_connect($db_host, $db_user, $db_password, $db_name);

      echo $name;

      $sql = "INSERT INTO  product (name, kind, price, imag,url) values ('$name', '$kind', $price, '$imag', '$url');";

      $result = $connect->query($sql);
      $item = $result;
      var_dump($result);

   if($result)
      echo "success";
      else {
        echo "Fail".mysqli_error($connect);
      }

      echo"<br>";
      $connect -> close();
?>
