<?php


class email
{
	function __construct() 
	{
		$mail  = new phpmailer();
		
		$mail->IsSMTP();
		//$mail->IsMail();
		
		$mail->SMTPAuth   = true;                   // enable SMTP authentication
		$mail->SMTPSecure = "ssl";                  // sets the prefix to the servier
		$mail->Host       = SMTP_HOST;      		// sets GMAIL as the SMTP server
		$mail->Port       = SMTP_PORT;              // set the SMTP port for the GMAIL server
		$mail->Username   = SMTP_USERNAME; 			// GMAIL username
		$mail->Password   = SMTP_PASSWORD;          // GMAIL password
		
		$mail->AddReplyTo(EMAIL_FROM,"");
		$mail->From       = EMAIL_FROM;
		$mail->FromName   = EMAIL_FROM_NAME;
		
		$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
		$mail->WordWrap   = 50; // set word wrap
	
		$this->_mail = $mail; 
	}
	
	function sendmail($to, $subject, $body, $attachment='')
	{
		$this->_mail->Subject = $subject;
		
		$body = eregi_replace("[\]",'',$body);
		
		$this->_mail->MsgHTML($body);
		$this->_mail->AddAddress($to, "");
		//$this->_mail->AddCC(ADMIN_EMAIL, "");		
		
		$this->_mail->IsHTML(true);
		
		if($attachment != '')
			$this->_mail->AddAttachment($attachment); 
		

		if(!$this->_mail->Send()) 
		{
		 // echo "<pre>"; print_r($this);
		 // echo $this->_mail->ErrorInfo;
			
		  $_SESSION['email_error']  = $this->_mail->ErrorInfo;
		}
		else 
		  $_SESSION['email_success'] = "Email Sent Successfully";			
	}
	
	
	function emailTemplate($templatename, $arrData)
	{
		$EmailContent = file_get_contents(SITE_ROOT.'helpers/emailer/'.$templatename);
		
		$EmailContent = str_replace(array_keys($arrData), array_values($arrData), $EmailContent);
		
		return $EmailContent;
	}
}

?>