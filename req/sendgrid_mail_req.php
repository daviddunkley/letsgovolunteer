<?php 
require("sendgrid-php.php");

function sendgrid_mail($from_addr, $to_addr, $subject, $html_body) {

	$sendgrid = new SendGrid(getenv('SENDGRID_API_KEY'));
	
	$email = new SendGrid\Email();
	$email
	    ->addTo($to_addr)
	    ->setFrom($from_addr)
	    ->setSubject($subject)
	    ->setHtml($html_body);
	
	try {
	    $sendgrid->send($email);
	} 
	catch(\SendGrid\Exception $e) {
	    echo $e->getCode() . "\n";
	    foreach($e->getErrors() as $er) {
	        echo $er;
	    }
		return false;
	}
	
	return true;
}
?>
