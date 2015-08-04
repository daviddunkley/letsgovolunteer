<?php

function process_post() {
	$name = rtrim($_POST['name']);
	$email = rtrim($_POST['email']);
	$msg = rtrim($_POST['msg']);
	$ret = -1;
/*
echo "<!--";
foreach ($_POST as $key => $value) {
	echo $key." - ".$value."<br />";
}
echo "--!>";
*/
	if (!empty($_POST['submit'])) {
		if (!empty($name) && !empty($email) && !empty($msg)) {
			send_our_mail($name, $email, $msg);
			send_their_mail($name, $email, $msg);

			header('Location: contacted.php');	
		}
	}
}

function send_our_mail($name, $email, $msg) {
	$our_mail = "";
	try {

		// first send the information to us
		$our_mail .= "<html>".
					"<head>".
					"<title>New Volunteer Query</title>".
					"<style>".
						"font-family: 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;".
					"</style>".
					"</head>".
					"<body>".
					"<img src=\"http://www.letsgovolunteer.info/img/logos/lets_go_volunteer.gif\"/>".
					"<table>".
						"<tr>".
							"<th>Name</th>".
							"<td>".$name.
						"</tr>".
						"<tr>".
							"<th>Email</th>".
							"<td>".$email.
						"</tr>".
						"<tr>".
							"<th>Message</th>".
							"<td>".$msg.
						"</tr>".
					"</table>".
					"</body>".
					"</html>";
echo $our_mail;
		$to = "info@letsgovolunteer.info";
		$subject = "New Volunteer Query";

		// Always set content-type when sending HTML email
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

		// More headers
		$headers .= "From: " . $email . "\r\n";
		$headers .+ "Reply-To: " . $email;

		if (!mail($to,$subject,$our_mail,$headers)) {
			throw new Exception("Query Email Failure Exception: ".$our_mail);
		}
	}
	catch (Exception $e) {
		send_exception_email($e, $our_mail);
	}
}

function send_their_mail($name, $email, $msg) {
	$their_mail = "";

	try {

		// second send the information to them
		$their_mail .= "<html>".
					"<head>".
					"<title>Welcome to Let's Go Volunteer</title>".
					"<style>".
						"font-family: 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;".
					"</style>".
					"</head>".
					"<body>".
					"<p>Hello ".$name."</p>".
					"<p>Thank you for your inquiry someone will reply with an answer very shortly".
					"<p>Best wishes</p>".
					"<p>David Dunkley<br />".
					"Volunteer Co-ordinator<br />".
					"http://www.letsgovolunteer.info<br />".
					"Ibagué, Tolima, Colombia<br />".
					"<img src=\"http://www.letsgovolunteer.info/img/logos/lets_go_volunteer.gif\"/></p>".
					"</body>".
					"</html>";

		$to = $_POST['email'];
		$subject = "Query about Volunteering in Ibagué, Colombia";

		// Always set content-type when sending HTML email
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

		// More headers
		$headers .= "From: info@letsgovolunteer.info\r\n";
		$headers .+ "Reply-To: info@letsgovolunteer.info";

		if (!mail($to,$subject,$their_mail,$headers)) {
			throw new Exception("Applicant Query Email Failure Exception: ".$their_mail);
		}
	}
	catch (Exception $e) {
		send_exception_email($e, $their_mail);
	}
}
?>