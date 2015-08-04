<?php
//$old_level = error_reporting(0);

require('req/sendgrid_mail_req.php');

$errors = array();

// Only validate if the Submit button was clicked.
if (!empty($_POST['submit'])) {
	// Each time there's an error, add an error message to the error array
	// using the field name as the key.
	if ($_POST['firstname'] == '') {
		$errors['firstname'] = 'first name is required';
	}
	if ($_POST['surname'] =='') {
		$errors['surname'] = 'surname is required';
	}
	// check the email is given and fits a valid format
	if ($_POST['email'] =='') {
		$errors['email'] = 'email is required';
	} else if(!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/", $_POST['email'])) {
		$errors['email'] = 'invalid email given';
	}

	// check the queries is given
	if ($_POST['queries'] == "") {
		$errors['queries'] = 'queries is required';
	}

	// if we don't have any errors make the booking and redirect to the booked page
	if (empty($errors)) {
		send_our_mail();
		send_their_mail();

		header( 'Location: asked_us.php' );
	}
} 
//error_reporting($old_level);

function write_errors($errors) {

	if (count($errors) > 0) {

		echo "<div class=\"errors\">\r\n";
		echo "<p><em>The following problems were found:</em></p>";
		echo "	<ul>\r\n";
		foreach ($errors as $error) {
			echo "		<li>".$error."</li>\r\n";
		}
		echo "	</ul>\r\n";
		echo "<p>Your query has <strong>not</strong> been sent, please try again.</p>\r\n";
		echo "</div>\r\n";
	} 
}

function send_our_mail() {
	$our_mail = "";
	try {

		// first send the information to us
		$our_mail .= "<html>".
					"<head>".
					"<title>New Volunteer Query</title>".
					"<style>".
						"body {font-family: 'Lucida Grande', 'Lucida Sans', Arial, sans-serif}".
					"</style>".
					"</head>".
					"<body>".
					"<img src=\"http://www.letsgovolunteer.info/img/logos/lets_go_volunteer.gif\"/>".
					"<table>".
						"<tr>".
							"<th>First Name</th>".
							"<td>".$_POST['firstname'].
						"</tr>".
						"<tr>".
							"<th>Surname</th>".
							"<td>".$_POST['surname'].
						"</tr>".
						"<tr>".
							"<th>Email</th>".
							"<td>".$_POST['email'].
						"</tr>".
						"<tr>".
							"<th>Queries</th>".
							"<td>".substr(rtrim($_POST['queries']), 0, 1000).
						"</tr>".
					"</table>".
					"</body>".
					"</html>";

		$to = getenv('LGV_INFO_EMAIL_ADDRESS');
		$subject = "New Volunteer Query";
		$from = $_POST['email'];

		if (!sendgrid_mail($from,$to,$subject,$our_mail)) {
			throw new Exception("Query Email Failure Exception");
		}
	}
	catch (Exception $e) {
		send_exception_email($e, $our_mail);
	}
}

function send_their_mail() {
	$their_mail = "";

	try {

		// second send the information to them
		$their_mail .= "<html>".
					"<head>".
					"<title>Welcome to Let's Go Volunteer</title>".
					"<style>".
						"body {font-family: 'Lucida Grande', 'Lucida Sans', Arial, sans-serif}".
					"</style>".
					"</head>".
					"<body>".
					"<p>Hello ".$_POST['firstname']."</p>".
					"<p>Thank you for your inquiry someone will reply with an answer very shortly".
					"<p>Best wishes</p>".
					"<p>Let's Go Volunteer<br />".
					"<a href=\"http://www.letsgovolunteer.info\">http://www.letsgovolunteer.info</a><br />".
					"Ibagué, Tolima, Colombia<br />".
					"<img src=\"http://www.letsgovolunteer.info/img/logos/lets_go_volunteer.gif\"/></p>".
					"<p>In the meantime why not check out our <a href=\"http://www.facebook.com/pages/Lets-Go-Volunteer/100306182016\" target=\"_new\">Facebook page</a> and look at the many photos, videos and comments from existing and former volunteers.</p>".
					"</body>".
					"</html>";

		$from = getenv('LGV_INFO_EMAIL_ADDRESS');
		$to = $_POST['email'];
		$subject = "Query about Volunteering in Ibagué, Colombia";

		if (!sendgrid_mail($from,$to,$subject,$their_mail)) {
			throw new Exception("Applicant Query Email Failure Exception: ".$their_mail);
		}
	}
	catch (Exception $e) {
		send_exception_email($e, $their_mail);
	}
}
?>