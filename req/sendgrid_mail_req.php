<?php 
require 'third_parties/php_mailer/PHPMailerAutoload.php';

function sendgrid_mail($from_addr, $to_addr, $subject, $html_body) {

	$mail = new PHPMailer;

	//$mail->SMTPDebug = 3;                          	// Enable verbose debug output

	$mail->isSMTP();                                    // Set mailer to use SMTP 
	$mail->Host = 'smtp.sendgrid.net';             		// Specify main/backup SMTP servers 
	$mail->SMTPAuth = true;                             // Enable SMTP authentication 
	$mail->Username = getenv('SENDGRID_USERNAME');    	// SMTP username 
	$mail->Password = getenv('SENDGRID_PASSWORD');    	// SMTP password 
	$mail->SMTPSecure = 'tls';                          // Enable TLS/SSL encryption 
	$mail->Port = 587;                                  // TCP port to connect to

	$mail->From = $from_addr; 
	$mail->addReplyTo($from_addr);
	$mail->addAddress($to_addr); 	 			   	   // Add a recipient

	$mail->WordWrap = 50;                              // Set word wrap to 50 characters 
	$mail->isHTML(true);                               // Set email format to HTML

	$mail->Subject = $subject; 
	$mail->Body    = $html_body;

	if(!$mail->send()) { 
	    echo 'Message could not be sent.'; 
	    echo 'Mailer Error: ' . $mail->ErrorInfo; 
		return false;
	} else { 
	    return true; 
	}
}
?>