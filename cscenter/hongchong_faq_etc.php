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
		<div class = 'body'>
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
							<font id="menu" >&nbsp;MEMBER<br></font>
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
							<font id="menu" color="black" >&nbsp;ETC<br></font>
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
			<a id ="at_list" href="javascript:menuclick(faq1);" onFocus="this.blur()" ><font class="at_list" color="blue">Q</font>. <font class="at_list">If I have difficulty using ThinkThings, who should I contact?</font></a>
 			<dd id="faq1" style="display:none;">
 				<br>
 				<font color="red" >A</font>.
 				<b>ThinkThings</b> is always open to your suggestions and inconveniences.<br>
 				<br><br>

 				Please forward various comments such as praise for using ThinkThings, improvement and suggestions (ideas), and site errors through [1:1 inquiry], e-mail or customer center.<br>
 				The service improvement and suggestions (ideas) will be reflected in the ThinkThings service overhaul as much as possible.<br>

 				<br><br>

 				I sincerely appreciate all the members who care about ThinkThings, and I will always try my best to repay them<font color="red">♥</font><br>
 				I look forward to your valuable opinion.<br>


				<br><br>
				If you have any more questions, please ask <a id="at" href="hongchong_customercenter.php" >[1:1]</a>.

 			</dd>
 		</div>
 		<br>
 		<hr style="width:90%">
	</div>
	</body>
</html>
