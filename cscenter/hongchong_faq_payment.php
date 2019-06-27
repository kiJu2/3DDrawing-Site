<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link type="text/css" rel="stylesheet" href="hongchong_customercenter.css?ver=6">
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
							<font id="menu">&nbsp;MEMBER<br></font>
						</a>
					</td>
					<td width="200" height="40">
						<a id="at" href="hongchong_faq_payment.php">
							<font id="menu" color="black">&nbsp;PAYMENT<br></font>
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
			<a id ="at_list" href="javascript:menuclick(faq1);" onFocus="this.blur()" ><font class="at_list" color="blue">Q</font>. <font class="at_list">I couldn't apply the coupon when I bought the materials.</font></a>
 			<dd id="faq1" style="display:none;">
 				<br>
 				<font color="red" >A</font>.
 				If you fail to use the coupon when purchasing the data, contact [1:1] or the customer center to apply it immediately.<br>

 				<br><br>

 				You can find your coupons at [My Page > My Activity Details > Coupons].<br>
				Please check the validity of the coupon and request it.<br>
				<br><br>
				If you have any more questions, please ask <a id="at" href="hongchong_customercenter.php" >[1:1]</a>.

 			</dd>

 			<br>
 			<p></p>

 			<a id ="at_list" href="javascript:menuclick(faq2);" onFocus="this.blur()" ><font class="at_list" color="blue">Q</font>. <font class="at_list">Tell me how to pay for the data.</font></a>

 			<dd id="faq2" style="display:none;">
 				<br>
 				<font color="red" >A</font>.
 				When using ThinkThings paid materials, you must charge the amount in advance.<br>

 				<br><br>
 				&lt;How to pay&gt;<br>
 				Please select the charge amount on the charge payment page first.<br>

 				<br><br>

 				 Please choose your preferred payment method: credit card, mobile phone, account transfer, cultural gift certificate, Kakao Pay, PayPal, Toss or Payco.<br>
 				 The payment agent page will open according to the selected payment method. If you proceed in order, the payment will be completed.<br>

 				 <br><br>
				If you have any more questions, please ask <a id="at" href="hongchong_customercenter.php" >[1:1]</a>.

 			</dd>

 			<br>
 			<p></p>

 			<a id ="at_list" href="javascript:menuclick(faq3);" onFocus="this.blur()" ><font class="at_list" color="blue">Q</font>. <font class="at_list">Why did you charge five dollars and then six dollars was paid?</font></a>

 			<dd id="faq3" style="display:none;">
 				<br>
 				<font color="red" >A</font>.
 				Due to the high cost structure of small payment and the hassle of having to pay for each data purchase,
ThinkThings operates on a minimum charge of 5,000 won and charges will be incurred for charging.<br>

 				<br><br>

 				A charge of $5.00 will be charged a 20% charge for charging and a $6 charge will be paid. <br>

 				 <br><br>
				If you have any more questions, please ask <a id="at" href="hongchong_customercenter.php" >[1:1]</a>.

 			</dd>
 			<br>
 			<p></p>

 			<a id ="at_list" href="javascript:menuclick(faq4);" onFocus="this.blur()" ><font class="at_list" color="blue">Q</font>. <font class="at_list">Why is this all the charge left?</font></a>

 			<dd id="faq4" style="display:none;">
 				<br>
 				<font color="red" >A</font>.
 				If you put the data in the shopping cart first, click the [Selective data payment] button, and go to the [Charge/Payment] page to make the payment,
If you click the Download button on the Data Details page to go to the Charge/Payment page and make a payment:
When payment (charging) is completed, the data is purchased and the amount of data is deducted from the charge immediately.<br>

 				<br><br>

 				You can check the purchased data at [My Page] → [Purchased data], and you can download and access the data. <br>


 				<br><br>

 				If the data that was not scheduled for purchase is included in the shopping cart and paid, do not click the Download button. <br>

 				<br><br>

 				Please request a refund of the data to the customer center [1:1 enquiry].<br>

 				<br><br>

 				<font color="red">Materials that have not been downloaded are refundable, so please do not download the wrong materials or open the file.<br>
 				Once the download record is confirmed, you cannot cancel/refund it. Please check the data information accurately before purchasing.<br></font>



 				 <br><br>
				If you have any more questions, please ask <a id="at" href="hongchong_customercenter.php" >[1:1]</a>.
 				<br>
 			</dd>

 			<br>
 			<p></p>

 		</div>
 		<br>
 		<hr style="width:90%">
	</body>
</html>
