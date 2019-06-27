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
		<table width="1000" cellpadding="3" align="center" >
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
							<font id="menu">&nbsp;REFUND<br></font>
						</a>
					</td><td width="200" height="40">
						<a id="at" href="hongchong_faq_sell.php">
							<font id="menu" color="black">&nbsp;SELL<br></font>
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
			<a id ="at_list" href="javascript:menuclick(faq1);" onFocus="this.blur()" ><font class="at_list" color="blue">Q</font>. <font class="at_list">What materials can I upload and should I not register?</font></a>
 			<dd id="faq1" style="display:none;">
 				<br>
 				<font color="red" >A</font>.
 				All copyrighted works can be uploaded in the form of a document.<br>
 				<br>
 				<br>
 				The person who downloads it at registration can also register as a word processor file and a compressed file that is used by default to create the report.<br>

 				<br><br>

 				<font color="red">* Please check the information below about materials that should not be registered.</font><br>

 				<br><br>
 				*********************************************************<br>

 				1. Data including research results from various research institutes<br>
 				2. Extracting content from blogs and homepages<br>
 				3. Excerpts from designs posted on the Web<br>
 				4. Problem Solving Materials for Various Books<br>
 				5. Data with personal information inserted<br>
 				6. Other person's work; materials not copyrighted by himself<br>
 				7. DataAccording to a specific company's confidential documents or materials that may be libeled<br>
 				8. Other materials that are not sure of copyright or are potentially problematic when disclosed in content <br>
 				9. Other copyrighted materials, etc.<br>
 				<br>
 				*********************************************************<br>

 				<br><br>
 				When checking the data, we check the file's error and content consistency, content in the file, and image missing. <br>
 				The inspection process does not determine the authenticity of the copyright. <br>

				<br><br>
				Therefore, as stated in the terms and conditions of the agreement, the seller has responsibility and rights for the copyright, and you must register only the materials that are copyrighted.<br>

				<br><br>
				If you have any more questions, please ask <a id="at" href="hongchong_customercenter.php" >[1:1]</a>.

 			</dd>

 			<br>
 			<p></p>

 			<a id ="at_list" href="javascript:menuclick(faq2);" onFocus="this.blur()" ><font class="at_list" color="blue">Q</font>. <font class="at_list">I can't see the uploaded data.</font></a>

 			<dd id="faq2" style="display:none;">
 				<br>
 				<font color="red" >A</font>.
 				ThinkThings is conducting an inspection of all uploaded data.<br>

 				<br><br>
 				The data registration status is checked by checking the editing status of the data, consistency of the title and contents, copyright, and redundancy of the data.<br>
 				The data is exposed through a unified search when the data is registered after the data is completed.<br>

 				<br><br>

 				All inspection work is completed, and all non-problematic materials are formally registered. <br>
 				Data takes about 6 hours to reflect normally in the search results.<br>

 				<br><br>
				If you have any more questions, please ask <a id="at" href="hongchong_customercenter.php" >[1:1]</a>.

 			</dd>

 			<br>
 			<p></p>

 			<a id ="at_list" href="javascript:menuclick(faq3);" onFocus="this.blur()" ><font class="at_list" color="blue">Q</font>. <font class="at_list">It was registered normally today, but it doesn't appear in the search results.</font></a>

 			<dd id="faq3" style="display:none;">
 				<br>
 				<font color="red" >A</font>.
 				Data that has been inspected by the data management team and notified of registration will take up to six hours to be reflected in the search results.<br>

 				<br><br>

 				It is reflected in the search engine within 24 hours of registration and the result can be checked. <br>


 				<br><br>

 				Please understand that if a large amount of data is temporarily registered all at once, there may be a delay before the search is reflected.<br>

 				<br><br>

 				If you have any data that will not be retrieved after that, please contact the Customer Center [1:1 Inquiry] with the exact title of the data. <br>
 				I'll check and let you know if there are any other problems.<br>

 				 <br><br>
				If you have any more questions, please ask <a id="at" href="hongchong_customercenter.php" >[1:1]</a>.

 			</dd>
 			<br>
 			<p></p>

 			<a id ="at_list" href="javascript:menuclick(faq4);" onFocus="this.blur()" ><font class="at_list" color="blue">Q</font>. <font class="at_list">I'd like to delete (stop selling) registered data.</font></a>

 			<dd id="faq4" style="display:none;">
 				<br>
 				<font color="red" >A</font>.
 				If you go to [Mypage], you can see the list of materials you have registered.<br>

 				<br><br>

 				If you press the "Sold Stop" or "Request to delete" button at the bottom of the sales stop or data to delete, the data will not be immediately suspended or exposed.<br>


 				<br><br>

 				Data requested for deletion will be deleted from the DB en masse after a certain period of time in case of deletion due to customer's negligence or error.<br>

 				<br><br>

 				If it is difficult to modify the information through the website, please let us know at the customer center <a id="at" href="hongchong_customercenter.php" >[1:1]</a> and we will modify the information ourselves.<br>


 				 <br><br>
				If you have any more questions, please ask <a id="at" href="hongchong_customercenter.php" >[1:1]</a>.
 				<br>
 			</dd>

 			<br>
 			<p></p>

 			<a id ="at_list" href="javascript:menuclick(faq5);" onFocus="this.blur()" ><font class="at_list" color="blue">Q</font>. <font class="at_list">I want to know who buy my design.</font></a>

 			<dd id="faq5" style="display:none;">
 				<br>
 				<font color="red" >A</font>.
 				All member information in ThinkThings are managed through ID.<br>
 				So we don't show your personal information without your agreement.<br>
 				Detail informations are not provided because of Infringement of personal information.<br>

 				<br><br>

 				When there isn't a customer who buy your designs, We notify that there are no downloaded members  <br>

 				 <br><br>

				If you have any more questions, please ask <a id="at" href="hongchong_customercenter.php" >[1:1]</a>.
 				<br>
 			</dd>
 		</div>
 		<br>
 		<hr style="width:90%">



	</body>
</html>
