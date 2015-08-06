<?php
//$old_level = error_reporting(0);

require('req/sendgrid_mail_req.php');

define('ST_ONLINE', 6);	

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

	if (!isset($_POST['country_id']) && !isset($_POST['country'])) {
		$errors['country_id'] = 'nationality is required';
	}
	if ($_POST['gender'] == '') {
		$errors['gender'] = 'gender is required';
	}
	else {
		$gender = (($_POST['gender'] == "female") ? 1 : 2);
	}	

	// check the start date is given
	if ($_POST['start_date'] == "") {
		$errors['start_date'] = 'start date is required';
	}
	// determine their requested programs, store as a bitwise integer
	$programs = "";
	if (isset($_POST['program_children']))
	{
		if ($_POST['program_children'] == "children") {
			$programs .= "children, ";
		}
	}
	if (isset($_POST['program_teenagers']))
	{
		if ($_POST['program_teenagers'] == "teenagers") {
			$programs .= "teenagers, ";
		}
	}
	if (isset($_POST['program_women']))
	{
		if ($_POST['program_women'] == "woman_at_risk") {
			$programs .= "woman at risk, ";
		}
	}
	if (isset($_POST['program_hiv']))
	{
		if ($_POST['program_hiv'] == "hiv") {
			$programs .= "hiv, ";
		}
	}
	if (isset($_POST['program_elderly']))
	{
		if ($_POST['program_elderly'] == "elderly") {
			$programs .= "elderly";
		}
	}
	// Convert variable to PHP Date
	$start_date = strtotime($_POST['start_date'], 0);
	// Calculate the Date in one weeks time
	$next_week = strtotime('+1 week');
	// If the start date is before one weeks time, then error
	if (($start_date - $next_week) < 0){
		$errors['start_date'] = 'start date must be at least a week from today';
	}

	// if we don't have any errors make the booking and redirect to the booked page
	if (empty($errors)) {
		try {
			send_our_mail($programs);
		}
		catch (Exception $e) {
			send_exception_email($e, "");
		}

		// redirect to the applied_now page
		header( 'Location: applied_now.php' );
	}
}
//error_reporting($old_level);

// send our email with all the information
function send_our_mail($programs) {
	$our_mail = "";
	try {

		$start_date = date("Y-m-d", strtotime($_POST['start_date'], 0));
		$end_date = date("Y-m-d", strtotime(date("Y-m-d", strtotime($_POST['start_date'], 0)) . " +".$_POST['duration']." week"));

		// first send the information to us
		$our_mail .= "<html>".
					"<head>".
					"<title>New Volunteer Application</title>".
					"<style>".
						"body {font-family: 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;}".
					"</style>".
					"</head>".
					"<body>".
					"<img src=\"http://www.letsgovolunteer.info/img/logos/lets_go_volunteer.gif\"/>".
					"<table>".
						"<tr>".
							"<th>Firstname</th>".
							"<td>".$_POST['firstname'].
						"</tr>".
						"<tr>".
							"<th>Lastname</th>".
							"<td>".$_POST['surname'].
						"</tr>".
						"<tr>".
							"<th>Email</th>".
							"<td>".$_POST['email'].
						"</tr>".
						"<tr>".
							"<th>Nationality</th>".
							"<td>".write_country($_POST['country_id']).
						"</tr>".
						"<tr>".
							"<th>Telephone</th>".
							"<td>".$_POST['telephone'].
						"</tr>".
						"<tr>".
							"<th>Gender</th>".
							"<td>".$_POST['gender'].
						"</tr>".
						"<tr>".
							"<th>Start Date</th>".
							"<td>".$_POST['start_date'].
						"</tr>".
						"<tr>".
							"<th>Number of Weeks</th>".
							"<td>".$_POST['duration'].
						"</tr>".
						"<tr>".
							"<th>Programs</th>".
							"<td>".$programs.
						"</tr>".
						"<tr>".
							"<th>Accommodation</th>".
							"<td>".$_POST['accomm'].
						"</tr>".
						"<tr>".
							"<th>Comment</th>".
							"<td>".substr(rtrim($_POST['comments']), 0, 1000)."</td>".
						"</tr>".
					"</table>".
					"</body>".
					"</html>";

		$from = $_POST['email'];
		$to = getenv('LGV_INFO_EMAIL_ADDRESS');
		$subject = "New Volunteer Application";

		if (!sendgrid_mail($from,$to,$subject,$our_mail)) {
			throw new Exception("Application Email Failure Exception");
		}
	}
	catch (Exception $e) {
		send_exception_email($e, $our_mail);
	}
}

/*
echo ("<!--");
foreach ($_POST as $key => $value) {
	echo $key." - ".$value."<br />";
}
echo "Errors:";
foreach ($errors as $key => $value) {
	echo $key." - ".$value."<br />";
}
echo "SQL: ".$sql;
echo ("-->");
*/

function write_errors($errors) {
	if (count($errors) > 0) {
		echo "<div class=\"errors\">\r\n";
		echo "\t\t\t\t\t\t\t<p><em>The following problems were found:</em></p>\r\n";
		echo "\t\t\t\t\t\t\t<ul>\r\n";
		foreach ($errors as $error) {
			echo "\t\t\t\t\t\t\t\t<li>".$error."</li>\r\n";
		}
		echo "\t\t\t\t\t\t\t</ul>\r\n";
		echo "\t\t\t\t\t\t\t<p>Your booking has <strong>not</strong> been made, please try again.</p>\r\n";
		echo "\t\t\t\t\t\t</div>\r\n";
	} 
}
function write_start_date($name, $id) {
	if ($_POST[$name] != "") {
		$value = $_POST[$name];
	}
	else {
		$value = "";
	}

	echo "<select name=\"".$name."\" id=\"".$id."\">";
	echo "<option value=\"\" ".is_selected($value, $opt)."</option>";
	for($i=3; $i<=52; $i++){
		$opt = date("%Y-%m-$d", strtotime("+".$i." monday"));

		echo "<option value=\"".$opt."\" ".is_selected($value, $opt).">Mon, ".date("M d Y", strtotime("+".$i." monday"))."</option>";
	} 	
	echo "</select>";
}
function write_calander_control($name) {
	$value = "";
	if (isset($_POST[$name]))
	{
		if ($_POST[$name] != "") {
			$value = $_POST[$name];
		}
	}
	else {
		$timestamp = strtotime("+2 week");
		$value = date('d-m-Y', $timestamp);
	}

	echo "<script type=\"text/javascript\">DateInput('".$name."', true, 'DD-MM-YYYY', '".$value."')</script>";
}
function write_number_weeks($name, $id) {
	if (isset($_POST[$name])) {
		$value = $_POST[$name];
	}
	else {
		$value = "4";
	}

	echo "<select name=\"".$name."\" id=\"".$id."\">";
	echo "<option value=\"1\" ".is_selected($value, "1").">1 week</option>";
	for ($num=2; $num <= 12; $num++) {
		echo "<option value=\"".$num."\" ".is_selected($value, $num).">".$num." weeks</option>";
	}
	echo "<option value=\"13\" ".is_selected($value, "13").">more than 12 weeks</option>";
	echo "</select>\r\n";
}
function write_accomm($name, $id) {
	
	if (isset($_POST[$name]))
	{
		$value = $_POST[$name];
	}
	else {
		$value = "Volunteer Center";
	}
	
	echo "<select name=\"".$name."\" id=\"".$id."\">\r\n";
	echo "\t\t\t\t\t\t\t\t\t\t<option".is_selected($value, "Volunteer Center").">Volunteer Center</option>\r\n";
	echo "\t\t\t\t\t\t\t\t\t\t<option".is_selected($value, "Homestay").">Homestay</option>\r\n";
	echo "\t\t\t\t\t\t\t\t\t\t<option".is_selected($value, "Self-Catered Apartment").">Self-Catered Apartment</option>\r\n";
	echo "\t\t\t\t\t\t\t\t\t</select>\r\n";
}
function write_month_select($name, $id) {
	$value = "";
	
	if (isset($_POST[$name])) {
		$value = $_POST[$name];
	}

	echo "<select name=\"".$name."\" id=\"".$id."\">";
	echo "<option value=\"\"".is_selected($value, "")."></option>";
	echo "<option value=\"1\"".is_selected($value, "1").">Jan</option>";
	echo "<option value=\"2\"".is_selected($value, "2").">Feb</option>";
	echo "<option value=\"3\"".is_selected($value, "3").">Mar</option>";
	echo "<option value=\"4\"".is_selected($value, "4").">Apr</option>";
	echo "<option value=\"5\"".is_selected($value, "5").">May</option>";
	echo "<option value=\"6\"".is_selected($value, "6").">Jun</option>";
	echo "<option value=\"7\"".is_selected($value, "7").">Jul</option>";
	echo "<option value=\"8\"".is_selected($value, "8").">Aug</option>";
	echo "<option value=\"9\"".is_selected($value, "9").">Sep</option>";
	echo "<option value=\"10\"".is_selected($value, "10").">Oct</option>";
	echo "<option value=\"11\"".is_selected($value, "11").">Nov</option>";
	echo "<option value=\"12\"".is_selected($value, "12").">Dec</option>";
	echo "</select>";
}
function write_country($id) {
	switch ($id) {
		case 253: $ret = "Argentina";break;
		case 3: $ret = "Australia";break;
		case 14: $ret = "Austria";break;
		case 12: $ret = "Belgium";break;
		case 270: $ret = "Brazil";break;
		case 2: $ret = "Canada";break;
		case 18: $ret = "Chile";break;
		case 29: $ret = "China";break;
		case 22: $ret = "Colombia";break;
		case 290: $ret = "Croatia";break;
		case 291: $ret = "Cuba";break;
		case 19: $ret = "Denmark";break;
		case 11: $ret = "Finland";break;
		case 5: $ret = "France";break;
		case 9: $ret = "Germany";break;
		case 6: $ret = "Greece";break;
		case 8: $ret = "Holland";break;
		case 10: $ret = "Ireland";break;
		case 17: $ret = "Israel";break;
		case 334: $ret = "Italy";break;
		case 13: $ret = "Mexico";break;
		case 7: $ret = "New Zealand";break;
		case 20: $ret = "Norway";break;
		case 392: $ret = "Peru";break;
		case 27: $ret = "Poland";break;
		case 23: $ret = "Portugal";break;
		case 24: $ret = "Singapore";break;
		case 417: $ret = "South Africa";break;
		case 25: $ret = "South Korea";break;
		case 33: $ret = "Spain";break;
		case 16: $ret = "Sweden";break;
		case 21: $ret = "Switzerland";break;
		case 15: $ret = "Turkey";break;
		case 4: $ret = "UK";break;
		case 1: $ret = "USA";break;
		default: $ret = $_POST['country']; break;
	}
	return $ret;
}
function write_country_list($name, $id, $class) {
	$value = 0;
	
	if (isset($_POST[$name])) {
		$value = $_POST[$name];
	}
	
	echo sprintf("<select name=\"%s\" id=\"%s\"%s>", $name, $id, write_if_not_blank("class", $class));
	echo "<option value=\"\"". is_selected($value, 0) ."></option>";
	echo "<option value=\"253\"". is_selected($value, 253) .">Argentina</option>";
	echo "<option value=\"3\"". is_selected($value, 3) .">Australia</option>";
	echo "<option value=\"14\"". is_selected($value, 14) .">Austria</option>";
	echo "<option value=\"12\"". is_selected($value, 12) .">Belgium</option>";
	echo "<option value=\"270\"". is_selected($value, 270) .">Brazil</option>";
	echo "<option value=\"2\"". is_selected($value, 2) .">Canada</option>";
	echo "<option value=\"18\"". is_selected($value, 18) .">Chile</option>";
	echo "<option value=\"29\"". is_selected($value, 29) .">China</option>";
	echo "<option value=\"22\"". is_selected($value, 22) .">Colombia</option>";
	echo "<option value=\"290\"". is_selected($value, 290) .">Croatia</option>";
	echo "<option value=\"291\"". is_selected($value, 291) .">Cuba</option>";
	echo "<option value=\"19\"". is_selected($value, 19) .">Denmark</option>";
	echo "<option value=\"11\"". is_selected($value, 11) .">Finland</option>";
	echo "<option value=\"5\"". is_selected($value, 5) .">France</option>";
	echo "<option value=\"9\"". is_selected($value, 9) .">Germany</option>";
	echo "<option value=\"6\"". is_selected($value, 6) .">Greece</option>";
	echo "<option value=\"8\"". is_selected($value, 8) .">Holland</option>";
	echo "<option value=\"10\"". is_selected($value, 10) .">Ireland</option>";
	echo "<option value=\"17\"". is_selected($value, 17) .">Israel</option>";
	echo "<option value=\"334\"". is_selected($value, 334) .">Italy</option>";
	echo "<option value=\"13\"". is_selected($value, 13) .">Mexico</option>";
	echo "<option value=\"7\"". is_selected($value, 7) .">New Zealand</option>";
	echo "<option value=\"20\"". is_selected($value, 20) .">Norway</option>";
	echo "<option value=\"392\"". is_selected($value, 392) .">Peru</option>";
	echo "<option value=\"27\"". is_selected($value, 27) .">Poland</option>";
	echo "<option value=\"23\"". is_selected($value, 23) .">Portugal</option>";
	echo "<option value=\"24\"". is_selected($value, 24) .">Singapore</option>";
	echo "<option value=\"417\"". is_selected($value, 417) .">South Africa</option>";
	echo "<option value=\"25\"". is_selected($value, 25) .">South Korea</option>";
	echo "<option value=\"33\"". is_selected($value, 33) .">Spain</option>";
	echo "<option value=\"16\"". is_selected($value, 16) .">Sweden</option>";
	echo "<option value=\"21\"". is_selected($value, 21) .">Switzerland</option>";
	echo "<option value=\"15\"". is_selected($value, 15) .">Turkey</option>";
	echo "<option value=\"4\"". is_selected($value, 4) .">UK</option>";
	echo "<option value=\"1\"". is_selected($value, 1) .">USA</option>";
	echo "</select>";
}
?>