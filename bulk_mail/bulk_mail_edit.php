<?php
//error_reporting(E_ALL);
//ini_set("display_errors", 1);

	require('req/bulk_mail_class.php');
	require('req/bulk_mail_req.php');	

	// Lookup the existing data
	$bulk_mail = new BulkMail();
	$bulk_mail->id = $_GET['id'];
	$bulk_mail->Get();
	
	// if we have posted changes
	if ($_POST['submit']) {
		try {
			// determine the directory for the files to be saved
			$files_dir = realpath("../files");
			//echo "File Dir:".$files_dir."<br/>";
			
			$bulk_mail->subject = $_POST['subject'];
			$bulk_mail->body = $_POST['body'];
			if ($_FILES["attachment_eng"]["name"] != "")
				$bulk_mail->attach_eng = SaveAttachment($files_dir, $_FILES["attachment_eng"], TRUE);
			if ($_FILES["attachment_spa"]["name"] != "")	
				$bulk_mail->attach_spa = SaveAttachment($files_dir, $_FILES["attachment_spa"], FALSE);
			$bulk_mail->Save();
			
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
	<title>Let's Go Volunteer - Bulk Mail Edit</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF8" />
	<meta name="title" content="Let's Go Volunteer - Bulk Mail Edit" />
	<meta name="author" content="Sitios Para Usted" />
	<meta name="description" content="Welcome to Let's Go Volunteer." />
	<link rel="stylesheet" href="/css/style.css" type="text/css" />
	<link rel="stylesheet" href="/css/book.css" type="text/css" media="screen" />
	
	<script type="text/javascript">
	<!--
	function popup(mylink, windowname)
	{
	if (! window.focus)return true;
	var href;
	if (typeof(mylink) == 'string')
	   href=mylink;
	else
	   href=mylink.href;
	window.open(href, windowname, 'width=800,height=600,scrollbars=yes');
	return false;
	}
	//-->
	</script>
</head>
<body>
<form name="upload" action="bulk_mail_edit.php?id=<?= $bulk_mail->id?>" method="post" enctype="multipart/form-data">
	<input type="hidden" name="submit" value="1" />
	<div class="form"><a href="bulk_mail_status.php">Return to Main Page</a></div>
	<div class="form"><label for="status" class="required">Status</label><input type="text" name="status" id="status" value="<?= $bulk_mail->status?>" title="status" class="input" size="50" readonly="readonly"/></div>
	<div class="form"><label for="subject" class="required">Email Subject</label><input type="text" name="subject" id="subject" value="<?= $bulk_mail->subject?>" title="subject" class="input" size="50" /></div>
	<div class="form"><label for="body">Email Body</label><textarea name="body" id="body" rows="5" cols="40" title="body"><?= $bulk_mail->body?></textarea></div>
	<div class="form"><label for="attachment_eng">Attachment (English):</label><input type="file" name="attachment_eng" id="attachment_eng" class="input"/>
<?	if ($bulk_mail->attach_eng != null)
	{
		echo "<a href=\"../files/" . basename($bulk_mail->attach_eng) . "\" onClick=\"return popup(this, 'attach')\"><img src=\"../img/logos/eng_logo.gif\"/></a>";
	}
?>	<br/><br/></div>
	<div class="form"><label for="attachment_spa">Attachment (Spanish):</label><input type="file" name="attachment_spa" id="attachment_spa" class="input"/>
<?	if ($bulk_mail->attach_spa != null)
	{
		echo "<a href=\"../files/" . basename($bulk_mail->attach_spa) . "\" onClick=\"return popup(this, 'attach')\"><img src=\"../img/logos/spa_logo.gif\"/></a>";
	}
?>	<br/><br/></div>
	<div class="form">NB. If no attachment is given and one already exists the current attachment will be stored</div>
	<div class="buttons"><button type="submit">Save</button><button type="reset">Clear</button></div>
</form>
</body>
</html>