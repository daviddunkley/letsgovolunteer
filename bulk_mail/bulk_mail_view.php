<?php
//error_reporting(E_ALL);
//ini_set("display_errors", 1);

	require('req/bulk_mail_class.php');		
	header('Content-type: text/plain charset=UTF-8');
	$bulk_mail = new BulkMail();
	$bulk_mail->id = $_GET['id'];
	$bulk_mail->Get();
	echo $bulk_mail->Render();
?>
