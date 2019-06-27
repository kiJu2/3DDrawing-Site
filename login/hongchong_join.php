<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link type="text/css" rel="stylesheet" href="hongchong_join.css?ver=3">
		<script type="text/javascript">
			var pw_passed = true;
			function fn_pw_check() {
				var pw=document.getElementById("password1").value;
				var pw2=document.getElementById("password2").value;
				var id=document.getElementById("userid").value;

				pw_passed = true;

				var pattern1 = /[0-9]/;
				var pattern2 = /[a-zA-Z]/;
				var pattern3 = /[~!@\#$%<>^&*]/;     // 원하는 특수문자 추가 제거
				var pw_msg = "";

				if(id.length == 0) {
					alert("Please enter your ID");
					return false;
				}
				else {}

				if(!pattern2.test(id)||!pattern1.test(id)){
					alert("The ID must be in English or number only.")
					return false;
				}

				if(pw.length == 0) {
					alert("Please enter your password");
					return false;
				} else {
					if( pw  !=  pw2) {
						alert("Password doesn't match.");
						return false;
					}
				}

				if(!pattern1.test(pw)||!pattern2.test(pw)||!pattern3.test(pw)||pw.length<8||pw.length>50){
					alert("Must consist of at least 8 digits of English + Numeric + Special Symbols");
					return false;
				}
				if(pw.indexOf(id) > -1) {
					alert("Password cannot contain ID.");
					return false;
				}

				alert("It has been verified.");
				return true;
			}
		</script>
	</head>
	<body>
		<form method="post" action="member_check.php" >
		<table align="center">
			<tr>
				<td>
					<p>
						<br>
					</p>
					<h2 align="center">BECOME A THINKTHINGS MEMBER</h2>
					<br>
					<div class="word" align="center">
						Create your accout and get access to member<br>
					</div>
					<p>
						<br>
					</p>
					<div>
						<input class="inputsize" type="text" name="userid" id="userid" minlength="8" maxlength="15" placeholder="ID" ><br>
						<font class="condition">Min 8 characters, Max 15 characters </font>
					</div>
					<p>
					</p>
					<div>
						<input class="inputsize" type="password" name="password1" id="password1" minlength="8" placeholder="PassWord" ><br>
						<font class="condition">Min 8 characters using Eng + Num + A special symbol </font>
					</div>
					<p>
					</p>
					<div>
						<input class="inputsize" type="password" name="password2" id="password2" minlength="8" placeholder="Check password redundancy" ><br>
					</div>
					<div style="text-align: center;padding-top: 3px;">
						<a href="#" onclick="fn_pw_check()" class="check">ID & PW Duplicate Verification</a>
					</div>
   				  	<p>
					</p>
					<div>
						<input class="inputsize" type="text" name="name"  placeholder="Name" ><br>
					</div>
					<p>
					</p>
					<div>
						<input class="inputsize" type="tel" name="phone"  pattern="[0-9]{3}-[0-9]{4}-[0-9]{4}" placeholder="Phone number with '-' " ><br>
					</div>
					<p>
					</p>
					<div>
						<select name="question" style="width: 455px;height: 37px; font-size: 12pt;" >
							<option >
								<font>------------------------------------select------------------------------------</font></option>
							<option value="1">What is my first pet name?</option>
							<option value="2">Where is my hometown?</option>
							<option value="3">What is your favorite food?</option>
							<option value="4">Which country would you like to go on a trip?</option>
							<option value="5">What is your favorite franchise?</option>
						</select>
					</div>
					<p>
					</p>
					<div>
						<input class="inputsize" type="text" name="answers"  placeholder="Answers to a question" ><br>
					</div>
					<br><br>
					<div style="width: 455px;height: 45px;background-color:#000000; margin: auto; border-radius: 3px; text-align: center;">
   				  		<input type="submit" value="Create Account" align="center"  style="color: #FFFFFF; font-size: 25px;background-color: black; border:none; margin-top: 2%; ">
					</form>


   				  	</div>
   				  	<br>
   				  	<div class="already">
   				  		Already a member? <ins><a href="hongchong_login.php" style="text-decoration:none; color:black;">Sign in</a></ins>
   				  	</div>

   				  	<br><br><br><br><br><br>


				</td>
			</tr>
		</table>


	</body>
</html>
