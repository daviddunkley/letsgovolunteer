<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Let's Go Volunteer - Upload New Newsletter</title>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
	<meta name="title" content="Let's Go Volunteer - Upload New Newsletter" />
	<meta name="author" content="Sitios Para Usted" />
	<meta name="description" content="Welcome to Let's Go Volunteer." />
	<link rel="stylesheet" href="/css/style.css" type="text/css" />
	<link rel="stylesheet" href="/css/book.css" type="text/css" media="screen" />	
</head>
<body>
	<div id="header">
		<ul>
			<li><a href="admin.php">Admin Home Page</a></li>
			<li class="active"><a href="#">Newsletter</a>
				<ul>
					<li><a href="newsletter_upload.php">Upload New Newsletter</a></li>
					<li><a href="newsletter_status.php">View Status of Newsletter Bulk Sending</a></li>
				</ul>
			</li>
			<li><a href="#">Donations</a>
				<ul>
					<li><a href="doners.php">View Donators</a></li>
				</ul>
			</li>
			<li><a href="../home.php">Return to Site</a></li>
		</ul>
	</div>
	<div id="container">
		<br /><br />
		<form name="upload" action="newsletter_uploaded.php" method="post" enctype="multipart/form-data">
			<input type="hidden" name="submit" value="1" />
			<div class="form"><label for="Subject" class="required">Email Subject</label>
			<input type="text" name="subject" id="subject" value="" title="subject" class="input" size="50" />
			</div>
			<div class="form"><label for="queries">Email Body</label><textarea name="body" id="body" rows="5" cols="40" title="body"></textarea></div>
			<div class="form"><label for="file">Filename:</label><input type="file" name="file" id="file" /></div>
			<div class="three_buttons"><button type="submit">Save</button><button type="submit">Send</button><button type="reset">Clear</button></div>
		</form>
	</div>
</body>
</html>