<?php
 	require 'phpmailer/PHPMailerAutoload.php';

 	if ($_POST['fundamental'])
 		$package = "fundamental";
 	else if ($_POST['advanced']) 
 		$package = "advanced";
 	else
 		$package = "black belt";

 	$mail = new PHPMailer;

	$mail->isSMTP();                                    	// Set mailer to use SMTP
	$mail->Host = 'mfdc.biz';  					// Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                               	// Enable SMTP authentication
	$mail->Username = 'smtp@mfdc.biz';                		 	// SMTP username
	$mail->Password = 'MVDnyycMZISZ';                          // SMTP password
	$mail->SMTPSecure = 'tls';                            	// Enable encryption, 'ssl' also accepted

	$mail->From = 'smtp@mfdc.biz';
	$mail->FromName = 'JITS FRESH';
	$mail->addAddress('vandy@mfdc.biz', 'Vandy');     	// Add a recipient

	$mail->WordWrap = 50;                                 	// Set word wrap to 50 characters
	$mail->isHTML(true);                                  	// Set email format to HTML

	$mail->Subject = "JITS ORDER";
	$mail->Body    = "Name:".$_POST['client'].", Tel:".$_POST['tel'].", Type:".$package.", Amount:".$_POST['amount'].", Region:".$_POST['region'].", Comment:".$_POST['comment'];

	if(!$mail->send()) {
	    echo 'Message could not be sent.';
	    echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {
	    header('Location: faq.html'); 
	}
?>