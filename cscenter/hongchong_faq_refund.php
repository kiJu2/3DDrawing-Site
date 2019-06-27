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
							<font id="menu" >&nbsp;PAYMENT<br></font>
						</a>
					</td><td width="200" height="40">
						<a id="at" href="hongchong_faq_refund.php">
							<font id="menu" color="black">&nbsp;REFUND<br></font>
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
			<a id ="at_list" href="javascript:menuclick(faq1);" onFocus="this.blur()" ><font class="at_list" color="blue">Q</font>. <font class="at_list">Is the remaining charge refundable?</font></a>
 			<dd id="faq1" style="display:none;">
 				<br>
 				<font color="red" >A</font>.
 				If you no longer need to purchase data, you can refund the remaining charge. <br>
 				On the [1:1 Q&A], select the inquiry type as [Refund].<br>
 				Enter the bank of your name and the refund account to receive it.<br>

 				<br><br>

 				The payment used to win the event is excluded from the deposit amount. <br>
 				The amount of charge and deposit you have confirmed may differ when requesting a return of the charge, and will be deposited into the account of the bank you applied for the next business day.<br>

 				<br><br>

 				If you wish to cancel after receipt, you can cancel the payment/resumption details directly at [Customer Center]-[1:1 Inquiry].<br>

 				<br><br>

 				<font color="red">
 					※Cancellation is possible only when a request for a return charge is pending<br>
 					※Cancellation can only be made before 8 a.m. next day (except weekends and holidays)<br>
 				</font>

				<br><br>
				If you have any more questions, please ask <a id="at" href="hongchong_customercenter.php" >[1:1]</a>.

 			</dd>

 			<br>
 			<p></p>

 			<a id ="at_list" href="javascript:menuclick(faq2);" onFocus="this.blur()" ><font class="at_list" color="blue">Q</font>. <font class="at_list">Can I get a refund after paying the data?</font></a>

 			<dd id="faq2" style="display:none;">
 				<br>
 				<font color="red" >A</font>. <b>
 				We will refund you if you are disadvantaged by misinformation about the purchased materials.</b><br>
 				However, because digital data makes it easy to replicate, the seller may be disadvantaged by exploiting it. <br>
 				Please note that you can request a refund only if the refund conditions below apply.<br>

 				<br><br>

 				<b>1. File error</b><br>
 				If the file is broken, download error, or if the file has a virus.<br>
 				If you open the material with an incorrect program and it appears that the file has an error, it is not eligible for a refund.<br>

 				<br><br>

 				<b>2. Duplicate  File</b><br>
 				70% or more of the other data are the same.<br>
 				Please let me know the exact title of the duplicated materials and the overlapping parts, and I'll check and process them.<br>
 				Even if there is more than 70% redundancy, the rest of the non-redundant parts may be excluded from the refund if they are deemed original.<br>

 				<br><br>

 				<b>3. No Copyright</b><br>
 				It's a case of stealing data from other sites, research institutes, schools, books, etc. on the Internet. <br>
 				Please let me know the exact Internet address or source from which you can check the original and I'll check and process it.<br>

 				<br><br>

 				<b>4. Mismatch between description and actual content</b><br>
 				The parts in the description of the material (tables, body overview, etc.) are not present in the actual material or are out of line. <br>
 				If you tell me the discrepancies, I'll check and take care of them.<br>

 				<br><br>

				If you have any more questions, please ask <a id="at" href="hongchong_customercenter.php" >[1:1]</a>.

 			</dd>
 		</div>
 		<br>
 		<hr style="width:90%">



	</body>
</html>
