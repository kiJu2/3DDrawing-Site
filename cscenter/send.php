
 <?php
 // 메일발송 시작
 ini_set('SMTP', "server.com");
ini_set('smtp_port', "25");
ini_set('sendmail_from', "email@domain.com");

 $to = "thdydehfdl12@gmail.com";
$subject = "I am ThinkThings member. I wanna counceling.".$_GET['phoneNumber'];
$contents = $_GET['cnt'];
$headers = 'From:'.$_GET['email']."\r\n";

mail($to, $subject, $contents, $headers);
?>
<script>
   alert("Complete send to HC.");
</script>
<body>
  <a href = 'hongchong_customercenter.php'>Back</a>
</body>
