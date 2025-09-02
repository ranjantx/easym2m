<?php


##################################################
# PHP CODE TO SEND EMAIL
##################################################

		function IsInjected($str)
		{
		  $injections = array('(\n+)','(\r+)','(\t+)','(%0A+)','(%0D+)','(%08+)','(%09+)');
		  $inject = join('|', $injections);
		  $inject = "/$inject/i";
		  if(preg_match($inject,$str))
			{
			return true;
		  }
		  else
			{
			return false;
		  }
		}
		
		function sendEmail($from, $to, $bcc, $email_subject, $email_body)
		{		
			if(IsInjected($to))
			{
				echo "Bad email value!";
				exit;
			}	
			//create a boundary string. It must be unique so we use the MD5 algorithm to generate a random hash
			$random_hash = md5(date('r', time())); 
				
			$headers = "From: $from" . "\r\n" .
			$headers = "BCC: $bcc \r\n";
			$headers .= "Reply-To: info@easym2m.in \r\n";

			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";


			mail($to,$email_subject,$email_body,$headers);
			/*if(mail($to,$email_subject,$email_body,$headers)) 
			{
				echo " SUCCESS.. ";
			}
			else {
				echo " Email Sending Failure.. ";
			}
			*/			
		}
?>
