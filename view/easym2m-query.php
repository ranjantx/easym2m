<?php
include "email_sending_api.php";
?>
<?php
	if(isset($_POST['contact-us'])) 
	{		
		$contacttype = $_POST['contact-type'];
		$contactperson = $_POST['cp-name'];
		//echo "$contactperson";
		$cpemail = $_POST['cp-emailid'];
		$cporgname = $_POST['cp-org-name'];
		$cpmobile = $_POST['cp-mobile'];
		$cpmessage = $_POST['cp-message'];
		//echo "$cpmessage";
		
		/******************************************************************
		Start of Code for Sending Auto-Email
		******************************************************************/
		
		$email_subject = "[$contactperson | $cporgname] Response From EasyM2M.";
			
		$to =$cpemail;   
		
		$email_body = '<html><body>';
		$email_body = '
		<Div style="background-color:#fff; width:750px; padding: 15px 20px 15px 20px;"> <font size = "2px" color = "#000" font-size:15px; face="Times New Roman">
		Dear Customer, <Br><Br>
		Thank you so much for writing to us.<Br><Br>
		Our Team is working on details submitted by you and shall revert through a Call or Email within 2 working days. 
		If we require more time for further more details, we will keep you informed.<Br><br>
		2. For faster tracking of your future communication, please revert to us without changing this subject line.<Br><Br>

		<B>#DETAILS AS RECEIVED</B><Br><Br>
		<table rules="all" style="border-color:#fff; color:#000;" cellpadding="10">
		<tr><td><B>Contact Type </B></td><td>' . $contacttype . '</td></tr>
		<tr><td><B>Name </B></td><td>' . $contactperson . '</td></tr>
		<tr><td><B>Phone </B></td><td>' . $cpmobile . '</td></tr>
		<tr><td><B>Email </B> </td><td>' . $cpemail . '</td></tr>
		<tr><td><B>Message </B> </td><td>' . $cpmessage . '</td></tr></table><Br><Br>
		At Easym2m, we are committed to make your life simple and we thank you for giving us this opportunity to serve you.<Br><Br>

		Yours Sincerely,<Br><Br>

		EasyM2M Team<Br>
		easym2m.in<Br></font></Div><Br>
		<div>
			<a href="http://www.facebook.com/EasyM2M" title="Like us on facebook" target="_blank">Facebook</a>&nbsp;
			<a href="http://twitter.com/easym2m" title="Follow us on twitter" target="_blank">Twitter</a>&nbsp;
			<a href="https://plus.google.com/104477377444188565175" title="Add us in your circle" target="_blank">Google+</a>&nbsp;
			<a href="http://www.linkedin.com/company/easym2m-technologies" title="Find us at linked-in" target="_blank">LinkedIn</a>&nbsp;
			<a href="http://www.youtube.com/user/RANJANTECHIE" title="Find us at youtube" target="_blank">YouTube</a>

		</div>
		';
		$email_body .= ' </body></html>';

		//send the email
		//mail($to,$email_subject,$email_body,$headers);
		//Syntax: function sendEmail($from, $to, $bcc, $email_subject, $email_body)..
		sendEmail("info@easym2m.in", $to, "info@easym2m.in,nakul.n@easym2m.in", $email_subject, $email_body);	
		?>
		<center><div style="color:green;  height:100%; margin:20% 40%; font-size:20px; font-weight:600;"><?php
		echo ('Thank you for contacting us. Our team will contact you soon');?><br>
		<a href="./index.php">Back to Home</a><center>
		</div>
		
		<?php
		?>
		
		<script>
			window.setTimeout('window.location="./index.php"; ',7000);
		</script>;
		<?php }
	 ?>
		
	<?php

	/*
	===================================================
	============subscribtion form======================
	*/

	if(isset($_POST['subscribe'])) 
	{		
		$subsemail = $_POST['subs-email'];
		
		
		/******************************************************************
		Start of Code for Sending Auto-Email
		******************************************************************/
		//$email_from = 'ranjandear@gmail.com';//<== update the email address
		$email_subject = "Thank You For Subscribe At EasyM2M.";
			
		$to =$subsemail;   
		
		$email_body = '<html><body>';
		$email_body = '
		<Div style="background-color:#fff; width:750px; padding: 15px 20px 15px 20px;"> <font size = "2px" color = "#000" font-size:15px; face="Times New Roman">
		Dear Customer, <Br><Br>
		Thank you so much for subscribing us.<Br>
		Now you are entitled to get regular updates about easym2m and the marvellous work being done in our respective field. <br>
		<B>#DETAILS AS RECEIVED</B><Br>
		<table rules="all" style="border-color: #ffff; color:#000;" cellpadding="10">
		
		<tr><td><B>Email </B> </td><td>' . $to . '</td></tr>
		</table><Br>
		At Easym2m, we are committed to make your life safe and we thank you for giving us this opportunity to serve you.<Br><Br>
		Yours Sincerely,<Br>

		EasyM2M Team<Br>
		easym2m.in<Br></font></Div><Br>
		<div>
			<a href="http://www.facebook.com/EasyM2M" title="Like us on facebook" target="_blank">Facebook</a>&nbsp;
			<a href="http://twitter.com/easym2m" title="Follow us on twitter" target="_blank">Twitter</a>&nbsp;
			<a href="https://plus.google.com/104477377444188565175" title="Add us in your circle" target="_blank">Google+</a>&nbsp;
			<a href="http://www.linkedin.com/company/easym2m-technologies" title="Find us at linked-in" target="_blank">LinkedIn</a>&nbsp;
			<a href="http://www.youtube.com/user/RANJANTECHIE" title="Find us at youtube" target="_blank">YouTube</a>

		</div>

		';
		$email_body .= ' </body></html>';

		//send the email
		//mail($to,$email_subject,$email_body,$headers);
		//Syntax: function sendEmail($from, $to, $bcc, $email_subject, $email_body)..
		sendEmail("info@easym2m.in", $to, "info@easym2m.in,nakul.n@easym2m.in", $email_subject, $email_body);
		?>
		<center><div style="color:green;  height:100%; margin:20% 40%; font-size:20px; font-weight:600;"><?php
		echo ('Thank you for Subscribing us.');?><br>
		<a href="./index.php">Back to Home</a><center>
		</div>
		
		<script>    	
			window.setTimeout('window.location="./index.php"; ',7000);
		</script>

		<?php /*echo "<script> window.location='../index.php';
					</script>";*/			
	}
	
	?>