<!DOCTYPE html>
<?php
if(isset($_SESSION['id'])){
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
	$name = $row['name'];
	$id = $row['id'];
	$phone = $row['phone'];
}
 ?>
<html>
	<head>
		<meta charset="utf-8">
		<link type="text/css" rel="stylesheet" href="hongchong_customercenter.css?ver=10">
	</head>
	<body>
		<?php
	  if(is_file("../union/navBar/index.php")){
	    require("../union/navBar/index.php");
	  }
	  else if(is_file("union/navBar/index.php")){
	    require("union/navBar/index.php");
	  }
	  ?>
		<form method="get" action="send.php">
		 <div class="img">
        	<div class="content">
           	 <h1>CS CENTER</h1>
        	</div>
        	<div class="img-cover"></div>
    	</div>
		<br>
		<div class = 'body'>
		<table width="1500" cellpadding="3" align="center">
			<div>
				<tr>
					<td width="500" height="80">
						<font id="menu"><b>&nbsp;Tel.XXXX-XXXX</b><br></font>
						<font id="intro">&nbsp;Mon~Fri 10:00 ~ 18:00&nbsp;(lunch 12:00 ~ 13:00)</font>
					</td>
					<td width="500" bgcolor="#dcdcdc">
						<a id="at" href="hongchong_customercenter.php">
							<font id="menu" color="black"><b>&nbsp;1:1&nbsp;Q&A</b><br></font>
							<font id="intro">&nbsp;&nbsp;Please check the FAQ before asking questions.</font>
						</a>

					</td>
					<td width="500">
						<a id="at" href="hongchong_faq.php">
							<font id="menu" color="black"><b>&nbsp;FAQ</b><br></font>
							<font id="intro">&nbsp;a frequent question</font>
						</a>
					</td>
				</tr>
			</div>
		</table>
		<br>
		<b><font id="menu">&nbsp;&nbsp;1:1 Q&A</font><br></b>
		<font id="content">
			&nbsp;&nbsp;&nbsp;- You can check the processing details of 1:1. <br>
		</font>
		<br>
		<font id="menu"><b>&nbsp;&nbsp;Member Information</b></font><br>
		<table class="tbt" border="1" width="1200" cellpadding="3" height="40" >
			<div>
				<tr>
					<th width="200" bgcolor="#dcdcdc">
						&nbsp;NAME
					</th>
					<td width="400">
						&nbsp;&nbsp;
						<?php
						if(isset($_SESSION['id'])){
				      echo $name;
						}
			      ?>
					</td>
					<th width="200" bgcolor="#dcdcdc">
						&nbsp;ID
					</th>
					<td width="400">
						&nbsp;&nbsp;<?php
						if(isset($_SESSION['id'])){
				      echo $id;
						}
			      ?>
					</td>
				</tr>
				<tr>
					<th colspan="1" width="200" bgcolor="#dcdcdc">
						&nbsp;E-MAIL
					</th>
					<td colspan="3" width="1000">
						<input type="email" name="email" size="20">
						<script type="text/javascript">
						function showfield(name){
  						if(name=='directinput')document.getElementById('div1').innerHTML='<input type="text" name="directinput" />';
  						else document.getElementById('div1').innerHTML='';
						}
						function doOpenCheck(chk){
    					var obj = document.getElementsByName("etype");
    					for(var i=0; i<obj.length; i++){
        						if(obj[i] != chk){
            			obj[i].checked = false;
       				 }
    					}
						}

						</script>
						<font id="div1"></font>
					</td>
				</tr>
				<tr>
					<th colspan="1" width="200" bgcolor="#dcdcdc">
						&nbsp;CALL NUMBER
					</th>
					<td colspan="3" width="1000">
						<input type="tel" name="phoneNumber" size="10" maxlength="11" placeholder="01000000000" value ='<?php
						if(isset($_SESSION['id'])){
							echo $phone;
						}

						?>'>
					</td>
				</tr>
			</div>
		</table>
		<br>
		<br>
		<font id="menu"><b>&nbsp;&nbsp;Enter Enquiry Information</b></font><br>
		<table class="tbt" border="1" width="1200" cellpadding="3" height="40" >
			<div>
				<tr>
					<th colspan="1" width="200" bgcolor="#dcdcdc">
						&nbsp;TYPE OF ENQUIRY
					</th>
					<td colspan="3" width="1000">
						<input type="checkbox" name="etype" value="member" onclick="doOpenCheck(this);" checked>Member
						<input type="checkbox" name="etype" value="payment" onclick="doOpenCheck(this);">Payment
						<input type="checkbox" name="etype" value="refund" onclick="doOpenCheck(this);">Refund
						<input type="checkbox" name="etype" value="sell" onclick="doOpenCheck(this);">Sell
						<input type="checkbox" name="etype" value="etc" onclick="doOpenCheck(this);">ETC
					</td>
				</tr>
				<tr height="300">
					<th colspan="1" width="200" bgcolor="#dcdcdc" >
						<br><br><br><br><br>
						&nbsp;CONTENT
					</th>
					<td colspan="3" width="1000" >
						<textarea name="cnt" width="980px" cols="100" rows="20"></textarea>
					</td>
				</tr>
				<tr>
					<th colspan="1" width="200" bgcolor="#dcdcdc">
						&nbsp;ATTACHMENT
					</th>
					<td colspan="3" width="1000" >
						&nbsp;
						<input type="file" name="FileName">
					</td>
				</tr>
			</div>
		</table>
		<br>
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;<input class="sb" type="submit" value="send" align="center" style="height:50px; width:70px;">

	</form>
	</div>
	</body>
</html>
