<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link type="text/css" rel="stylesheet" href="hongchong_login.css?ver=8">
	</head>
	<body>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script type="text/javascript">
			$(document).on('click', '.modalOpen', function(event){
				$("#modal").fadeIn(1000);
			});
        	$(".modalOpen").click(function(){
  				$("#modal").show();
			});

			$(".modalClose").click(function(){
 				$("#modal").hide();
			})

			$(document).on('click', '.modalOpen2', function(event){
				$("#modal2").fadeIn(1000);
			});
        	$(".modalOpen2").click(function(){
  				$("#modal2").show();
			});

			$(".modalClose2").click(function(){
 				$("#modal2").hide();
			})

     	</script>
		<form method="post" action="">
			<div id="bottom">
				<table class="tableset" align="center">
					<tr width="350" height="377.8" >
						<td width="350" align="center" height="377.8">
					<p>
						<img src="/TermProject/login/image/mainlogo2.png" width="250" height="100"  >
					</p>
					<div style="padding-bottom: 5px;">
						<input class="inputsize" type="text" name="ID"  placeholder="Enter ID" >
					</div>
					<div>
						<input class="inputsize" type="password" name="password"  placeholder="Enter Password" >
					</div>
					<br>
					&nbsp;<input class="inputsub" type="submit" value="Login" align="center" >
					<br><br>
					<div class="line" ></div>
					<br>
			</form>

					<a href="#" class="modalOpen" style="text-decoration: none; color: black;">Forgot your ID?</a>

					<br>
					<br>
					<a href="#" class="modalOpen2" style="text-decoration: none; color: black;">Forgot your Password?</a>
					<br><br><br>
					</td>
					</tr>
				</table>
				<br><br>
				<table class="tableset" align="center">
				<tr width="365" height="50" >
					<td width="365" align="center" height="80">
					Don't have an account yet?&nbsp;&nbsp;<br>

					<a id="at" href="hongchong_join.php" style="color:blue;">
						<font class="find">Join now.</font>
					</a>
					</td>
					</tr>
				</table>
			</div>

			<div id="modal">
				<div>
					<img src="/TermProject/login/image/mainlogo2.png" width="100" height="40"  >
    				 <h2>Find Your ID</h2>
   				  	<fonr style="color:#b2b2b2;">Enter your name and Call number. </font>
   				  	<br><br>
   				  	<input class="inputsize2" type="text" name="name" placeholder="name">
   				  	<p></p>
   				  	<input class="inputsize2" type="text" name="phone" placeholder="call number without '-'">
   				  	<br>
   				  	<br>
   				  	<br>

   				  	<div style="width: 280px;height: 45px;background-color:#000000; margin: auto; border-radius: 3px;">
   				  		<input type="submit" value="Check" align="center" style="color: #FFFFFF; font-size: 25px;background-color: black; border:none; margin-top: 2%">

   				  	</div>
   				  	<br>
   					<button class="modalClose"><b>Close</b></button>
  				</div>
			</div>

			<div id="modal2">
				<div>
					<img src="/TermProject/login/image/mainlogo2.png" width="100" height="40"  >
    				 <h2>RESET PASSWORD</h2>
   				  	<fonr style="color:#b2b2b2;">Enter your call number and ID, answers to a question prepared when you signed up for membership. </font>
   				  	<br><br>
   				  	<input class="inputsize2" type="text" name="id" placeholder="ID">
   				  	<p></p>
   				  	<select name="question" style="width: 280px;height: 37px;" >
							<option>
								<font>--------------------select--------------------</font></option>
							<option value="What is my first pet name?">What is my first pet name?</option>
							<option value="Where is my hometown?">Where is my hometown?</option>
							<option value="What is your favorite food?">What is your favorite food?</option>
							<option value="Which country would you like to go on a trip?">Which country would you like to go on a trip?</option>
							<option value="What is your favorite franchise?">What is your favorite franchise?</option>
						</select>
   				  	<p></p>
   				  	<input class="inputsize2" type="text" name="answer" placeholder="Answer">
   				  	<br>
   				  	<br>
   				  	<br>

   				  	<div style="width: 280px;height: 45px;background-color:#000000; margin: auto; border-radius: 3px;">
   				  		<input type="submit" value="Check" align="center" style="color: #FFFFFF; font-size: 25px;background-color: black; border:none; margin-top: 2%">

   				  	</div>
   				  	<br>
   					<button class="modalClose2"><b>Close</b></button>
  				</div>
			</div>

	</body>
</html>
