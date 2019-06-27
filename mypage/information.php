<table>
  <tr>
    <td style = 'width : 200px;'>
      <p class = 'infoText'>Name</p>
      <p class = 'infoText'>ID</p>
      <p class = 'infoText'>Charge</p>
      <p class = 'infoText'>H.P</p>
    </td>
    <td>
      <?php
      $db_host = "localhost";
      $db_user = "root";
      $db_password = "dPtskfdPtwjrtksrltmfrdptkfdkTejstksrhdiddl";
      $db_name = "think_things";

      $con = mysqli_connect($db_host, $db_user, $db_password, $db_name);
      // var_dump($_SESSION);
      $check = "SELECT * FROM member WHERE id = '".$_SESSION['id']."'";
      $result = $con -> query($check);
      $row = $result -> fetch_array(MYSQLI_ASSOC);
      // var_dump($row);
      echo $row['name'].'<br>';
      echo $row['id'].'<br>';
      echo $row['charge'].'<br>';
      echo $row['phone'].'<br>';
      ?>
    </td>
  </tr>
</table>
