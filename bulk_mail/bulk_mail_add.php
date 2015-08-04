<?php
//error_reporting(E_ALL);
//ini_set("display_errors", 1);

	require('req/bulk_mail_class.php');
	require('req/bulk_mail_req.php');	

	if ($_POST['submit']) {
		try {
			// determine the directory for the files to be saved
			$files_dir = realpath("../files");
			//echo "File Dir:".$files_dir."<br/>";
			
			$BulkMail = new BulkMail();
			$BulkMail->subject = $_POST['subject'];
			$BulkMail->body = $_POST['body'];
			$BulkMail->attach_eng = SaveAttachment($files_dir, $_FILES["attachment_eng"], TRUE);
			$BulkMail->attach_spa = SaveAttachment($files_dir, $_FILES["attachment_spa"], FALSE);
			$BulkMail->status = "Saved";
			$BulkMail->Save();
			
			header("Location: bulk_mail_status.php");						
		}
		catch (Exception $e) {
			echo "Exception:".$e;
			//send_exception_email($e, $sql);
		}
	}
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Let's Go Volunteer - Bulk Mail Add</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF8" />
	<meta name="title" content="Let's Go Volunteer - Bulk Mail Add" />
	<meta name="author" content="Sitios Para Usted" />
	<meta name="description" content="Welcome to Let's Go Volunteer." />
	<link rel="stylesheet" href="/css/style.css" type="text/css" />
	<link rel="stylesheet" href="/css/book.css" type="text/css" media="screen" />	
</head>
<body>
<form name="upload" action="bulk_mail_add.php" method="post" enctype="multipart/form-data">
	<input type="hidden" name="submit" value="1" />
	<div class="form"><a href="bulk_mail_status.php">Return to Main Page</a></div>
	<div class="form"><label for="subject" class="required">Email Subject</label><input type="text" name="subject" id="subject" value="" title="subject" class="input" size="50" /></div>
	<div class="form"><label for="body">Email Body</label><textarea name="body" id="body" rows="5" cols="40" title="body"></textarea></div>
	<div class="form"><label for="attachment_eng">Attachment (English):</label><input type="file" name="attachment_eng" id="attachment_eng" class="input"/><br/><br/></div>
	<div class="form"><label for="attachment_spa">Attachment (Spanish):</label><input type="file" name="attachment_spa" id="attachment_spa" class="input"/><br/><br/></div>
	<div class="buttons"><button type="submit">Save</button><button type="reset">Clear</button></div>
</form>
</body>
</html>