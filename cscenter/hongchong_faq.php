<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link type="text/css" rel="stylesheet" href="hongchong_customercenter.css?ver=3">
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
		<script type="text/javascript">
			var old_menu = '';
			function menuclick(submenu) {

			if( old_menu !='' ) {
  				 old_menu.style.display = 'none';
 			}
 			submenu.style.display = '';
 			old_menu = submenu;
 			}
		</script>
		<div class="img">
        	<div class="content">
           	 <h1>CS CENTER</h1>
        	</div>
        	<div class="img-cover"></div>
    	</div>
		<br>
		<table width="1500" cellpadding="3" align="center">
			<div>
				<tr>
					<td width="500" height="80">
						<font id="menu"><b>&nbsp;Tel.XXXX-XXXX</b><br></font>
						<font id="intro">&nbsp;Mon~Fri 10:00 ~ 18:00&nbsp;(lunch 12:00 ~ 13:00)</font>
					</td>
					<td width="500" >
						<a id="at" href="hongchong_customercenter.php">
							<font id="menu" color="black"><b>&nbsp;1:1&nbsp;Q&A</b><br></font>
							<font id="intro">&nbsp;&nbsp;Please check the FAQ before asking questions.</font>
						</a>

					</td>
					<td width="500" bgcolor="#dcdcdc">
						<a id="at" href="hongchong_faq.php">
							<font id="menu" color="black"><b>&nbsp;FAQ</b><br></font>
							<font id="intro">&nbsp;a frequent question</font>
						</a>
					</td>
				</tr>
			</div>
		</table>
		<br>
		<br>
		<table width="1000" cellpadding="3" align="center">
			<div>
				<tr>
					<td width="200" height="40">
						<a id="at" href="hongchong_faq.php">
							<font id="menu" color="black">&nbsp;MEMBER<br></font>
						</a>
					</td>
					<td width="200" height="40">
						<a id="at" href="hongchong_faq_payment.php">
							<font id="menu" >&nbsp;PAYMENT<br></font>
						</a>
					</td><td width="200" height="40">
						<a id="at" href="hongchong_faq_refund.php">
							<font id="menu">&nbsp;REFUND<br></font>
						</a>
					</td><td width="200" height="40">
						<a id="at" href="hongchong_faq_sell.php">
							<font id="menu">&nbsp;SELL<br></font>
						</a>
					</td><td width="200" height="40">
						<a id="at" href="hongchong_faq_etc.php">
							<font id="menu">&nbsp;ETC<br></font>
						</a>
					</td>
				</tr>
			</div>
		</table>
		<p>
			<br>
		</p>
		<p>
			<br>
		</p>
		<hr style="width:90%">
		<br>
		<div style="margin-left: 10%;margin-right: 10%">
			<a id ="at_list" href="javascript:menuclick(faq1);" onFocus="this.blur()" ><font class="at_list" color="blue">Q</font>. <font class="at_list">I lost my ID and Password.</font></a>
 			<dd id="faq1" style="display:none;">
 				<br>
 				<font color="red" >A</font>.
 				First, Please check your ID and password directly through the menu below.<br>
 				<br>
 				////아이디찾기하이퍼링크넣기////<br>
 				////비밀번호찾기하이퍼링크넣기////<br>
 				<br>
 				You can find your ID and password through the method below.<br><br>

 				1. When you don't know your ID<br>

 				<font color="#848484"> &nbsp;&nbsp;&nbsp; You can find it with the name and mobile phone number entered when you sign up.<br>&nbsp;&nbsp;&nbsp; If you match, you can check your ID.</font>

 				<br><br>

 				2. you know your ID, but when you don't know your password.<br>

 				<font color="#848484">&nbsp;&nbsp;&nbsp; If you enter and match your ID, you can check your password if the correct answers match through the questions you registered at the time of entering your membership information. <br></font>

 				<br><br>

 				3. When you don't know your answers<br>

 				<font color="#848484">&nbsp;&nbsp;&nbsp;If you lose the correct answer to the questions you registered for your membership information, please contact the Hongchong Venture Customer Center or email us. <br></font>

 				<br><br>

 				In accordance with the Act on Promotion of Information and Communication Network Utilization and Information Protection, ThinkThinngs <br>
				For the past year, only members with no login record and no charge balance have been deleted on the 7th of each month after the mail notification.<br>

				<br><br>
				If you haven't logged in to ThinkThings in over a year,
				It is classified as dormant account and information is deleted just like membership withdrawal.<br>
				You need to use the service through a new subscription, so please refer to the service.<br>

				<br><br>
				If you have any more questions, please ask <a id="at" color="blue" href="hongchong_customercenter.php" >[1:1]</a>.

 			</dd>

 			<br>
 			<p></p>

 			<a id ="at_list" href="javascript:menuclick(faq2);" onFocus="this.blur()" ><font class="at_list" color="blue">Q</font>. <font class="at_list">When I logged in, the amount of charge and purchase details disappeared.</font></a>

 			<dd id="faq2" style="display:none;">
 				<br>
 				<font color="red" >A</font>.
 				First, When you log in, log in with a different ID to make sure you have not paid for it.<br>

 				<br><br>

 				 If the amount of charge is missing from the paid ID, please contact the customer center or e-mail.<br>

 				 <br><br>
				If you have any more questions, please ask <a id="at" href="hongchong_customercenter.php" >[1:1]</a>.

 			</dd>

 			<br>
 			<p></p>

 			<a id ="at_list" href="javascript:menuclick(faq3);" onFocus="this.blur()" ><font class="at_list" color="blue">Q</font>. <font class="at_list">Can I use multiple IDs?.</font></a>

 			<dd id="faq3" style="display:none;">
 				<br>
 				<font color="red" >A</font>.
 				ThinkThings only uses one ID per person.<br>

 				<br><br>

 				If multiple accounts are used since charging method is operated, balance tube may be difficult and redundancy payment may also occur. <br>


 				<br><br>

 				In addition, if the proceeds are generated by selling the drawings, the proceeds will be collected, but if the amount of proceeds is collected in a given amount for a year, the company will report the tax.<br>

 				<br><br>

 				In this case, the total sum of the proceeds generated by each ID is reported, making it difficult to manage the amount and, in some cases, additional taxes.<br>

 				 <br><br>
				If you have any more questions, please ask <a id="at" href="hongchong_customercenter.php" >[1:1]</a>.

 			</dd>
 			<br>
 			<p></p>

 			<a id ="at_list" href="javascript:menuclick(faq4);" onFocus="this.blur()" ><font class="at_list" color="blue">Q</font>. <font class="at_list">I'd like to modify the information that I registered when I signed up for membership.</font></a>

 			<dd id="faq4" style="display:none;">
 				<br>
 				<font color="red" >A</font>.
 				You can view or modify your information at any time on your [My Page].<br>

 				<br><br>

 				In case of incorrect registration of member information when subscribing to membership, you can also modify it directly to . <br>


 				<br><br>

 				When modifying membership information, the password is checked once again to protect personal information. The password can be changed on My Page.<br>

 				<br><br>

 				Even if your contact number and email address have changed, you must modify it with the changed information to ensure smooth service use.<br>
 				Please update it with the latest information so that the previous subscription information is not lost and service use is not restricted.<br>

 				<br><br>

 				If it is difficult to modify the information through the website, please let us know at the customer center <a id="at" href="hongchong_customercenter.php" >[1:1]</a> and we will modify the information ourselves.<br>


 				 <br><br>
				If you have any more questions, please ask <a id="at" href="hongchong_customercenter.php" >[1:1]</a>.
 				<br>
 			</dd>

 			<br>
 			<p></p>

 			<a id ="at_list" href="javascript:menuclick(faq5);" onFocus="this.blur()" ><font class="at_list" color="blue">Q</font>. <font class="at_list">What is the charge and return on withdrawal?</font></a>

 			<dd id="faq5" style="display:none;">
 				<br>
 				<font color="red" >A</font>.
 				If you withdraw from membership without applying for a balance refund first, all remaining balance will be deleted and cannot be restored.<br>

 				<br><br>

 				The present membership to your account page can be found in the remaining proceeds are terminating your membership, and Charging fee. <br>


 				<br><br>

 				//사진넣어보자~.<br>

 				<br><br>

 				Be sure to receive [request for balance refund] through [1:1 inquiry] before leaving the company.<br>

 				<br><br>

 				If you enter the account number and bank of your name, the deposit will be processed on the next business day. You can withdraw after checking the deposit.<br>


 				 <br><br>
				If you have any more questions, please ask <a id="at" href="hongchong_customercenter.php" >[1:1]</a>.
 				<br>
 			</dd>
 		</div>
 		<br>
 		<hr style="width:90%">



	</body>
</html>
