<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

	require('req/bulk_mail_class.php');
	
	try {		
		$BulkMail = new BulkMail();
		$BulkMail->id = $_GET['id'];
		$BulkMail->Get();
		$BulkMail->Send();
		
		header("Location: bulk_mail_status.php");						
	}
	catch (Exception $e) {
		echo "Exception:".$e;
		//send_exception_email($e, $sql);

	}
?>