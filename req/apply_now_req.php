<?php
//$old_level = error_reporting(0);

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
	} else if(!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $_POST['email'])) {
		$errors['email'] = 'invalid email given';
	}

	if (($_POST['country_id'] =='') && ($_POST['country'] == '')) {
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
	if ($_POST['program_children'] == "children") {
		$programs .= "children, ";
	}
	if ($_POST['program_teenagers'] == "teenagers") {
		$programs .= "teenagers, ";
	}
	if ($_POST['program_women'] == "woman_at_risk") {
		$programs .= "woman at risk, ";
	}
	if ($_POST['program_hiv'] == "hiv") {
		$programs .= "hiv, ";
	}
	if ($_POST['program_elderly'] == "elderly") {
		$programs .= "elderly";
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
			$person_id = save_to_db();
			send_our_mail($programs, $person_id);
			//send_their_mail();
		}
		catch (Exception $e) {
			send_exception_email($e, "");
		}

		// redirect to the applied_now page
		header( 'Location: applied_now.php' );
	}
}
//error_reporting($old_level);

function save_to_db() {

	$start_date = strtotime($_POST['start_date'], 0);
	$prog_ids = 0;
	if ($_POST['program_children'] == "children") {
		$prog_ids += 1;
	}
	if ($_POST['program_teenagers'] == "teenagers") {
		$prog_ids += 2;
	}
	if ($_POST['program_women'] == "woman_at_risk") {
		$prog_ids += 4;
	}
	if ($_POST['program_hiv'] == "hiv") {
		$prog_ids += 8;
	}
	if ($_POST['program_elderly'] == "elderly") {
		$prog_ids += 16;
	}	
	
	$sql = sprintf("CALL person_apply('%s', '%s', '%s', %s, %s, %s, %s, '%s', %s, %s)", $_POST['firstname'], $_POST['surname'], $_POST['email'], (($_POST['gender'] == "female") ? 0 : 1),
	(($_POST['country_id'] == "") ? 0 : $_POST['country_id']), ST_ONLINE, (($_POST['telephone'] == "") ? "NULL" : "'".$_POST['telephone']."'"), date('Y-m-d', $start_date), $_POST['duration'], $prog_ids);

	$db = MySQLiHelper::MySqliDb();
	
	if ($result = $db->query($sql)) {
		$row = $result->fetch_assoc();
		$person_id = $row['person_id'];
		$result->close();				
	}
	$db->close();
	
	return $person_id;
}

// send our email with all the information
function send_our_mail($programs, $person_id) {
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
						"<tr>".
							"<th>Link</th>".
							"<td><a target=\"_new\" href=\"http://admin.letsgovolunteer.info/volunteer_edit.php?id=".$person_id."\">Link</></td>".
						"</tr>".
					"</table>".
					"</body>".
					"</html>";

		$to = "info@letsgovolunteer.info";
		$subject = "New Volunteer Application";

		// Always set content-type when sending HTML email
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

		// More headers
		$headers .= "From: " . $_POST['email'] . "\r\n";
		$headers .+ "Reply-To: " . $_POST['email'];
		if (!mail($to,$subject,$our_mail,$headers)) {
			throw new Exception("Application Email Failure Exception");
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
						"font-family: 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;".
					"</style>".
					"</head>".
					"<body>".
					"<p>Hello ".$_POST['firstname']."</p>".
					"<p>Thank you for your inquiry into our volunteering program. My name is David Dunkley and I am a former volunteer of the program. I am still living and working here in Ibagué as the volunteer coordinator for the charity. I can thoroughly recommend spending some time here. I came to Colombia after six months of travelling around South America. I did some volunteering in other places and I can honestly say my experience here was hands down the best. The city of Ibagué is small, safe and easy to get your head around.</p>".
					"<p>I have enclosed (below) some general information about our program, including who we are, how we operate and what you can expect! We also have a <a href=\"http://www.facebook.com/pages/Lets-Go-Volunteer/100306182016\" target=\"_new\">Facebook</a> page so please feel free to look at the many photos, videos and comments from existing and former volunteers. If you would like to \"become a fan\" of the page that would be great too.</p>".
					"<p>So I hope this helps and I will contact you in the very near future and we can begin to plan your time volunteering with us. If you have any questions please feel free to email me at this address.</p>".
					"<p>Best wishes</p>".
					"<p>David Dunkley<br />".
					"Volunteer Co-ordinator<br />".
					"<a href=\"http://www.letsgovolunteer.info\">http://www.letsgovolunteer.info</a><br />".
					"Ibagué, Tolima, Colombia<br />".
					"<img src=\"http://www.letsgovolunteer.info/img/logos/lets_go_volunteer.gif\"/></p>".
					"<h2>Who we are</h2>".
					"<p>We are a non-profit, non-religious and non-political organization. Our aim is to provide assistance for marginalized and vulnerable members of society - infants, single mothers and the elderly. The association is owned and run by a local who wanted to do something to help the less advantaged in their city.</p>".
					"<h2>What we do</h2>".
					"<p>We have 4 centres for children, where we take kids that are at risk of being on the streets or about to leave school to work on the streets. We give them a good lunch every week day, and in the morning or in the afternoon they have the option to come to our classes as well. All in all we help around 300 local children on a daily basis. Our volunteers fill a very important role by helping our staff run the centres as well as providing a broader view of the world outside their community.</p>".
					"<h2>How we do it?</h2>".
					"<p>The children stay from 7am to 11 am or from 2 pm to 5pm and during that time we help them with their homework, we do activities to develop leadership and values as well as cultural activities, play, practice sports, watch and analyze movies. Although the older children do study English at school it is not a very large part of the curriculum and therefore very few children can speak English. To be honest we are more committed to ensuring that they are keeping up with their schooling in Spanish.</p>".
					"<p>The kids we work with are very poor, often from single parent families and their homes are of very rudimentary construction. They never go to the cinema or a swimming pool. So we do that, we take them to do fun. By coming to our centre we prevent them from spending their time on the street after school which is where they get into trouble. We make sure they do well at school so, they become good example for their families.</p>".
					"<p>The programs have proved to be very successful. The children love to be there, we do all the activities they don`t get to do otherwise. They are also very curious to learn about other countries and cultures. Meeting volunteers from all around the world helps them to broaden their understanding, and realize they have an opportunity to change their own lives.</p>".
					"<p>Although we tend to focus more on the children centres we also offer the opportunity to volunteers to work with other in need groups such as the elderly, sex workers and single mothers. If you are interested in working in this area please let me know.</p>".
					"<h2>Safety</h2>".
					"<p>Colombia is uniquely BEAUTIFUL and SAFE country, don't let the media make you believe is a dangerous place, yes there is trouble, but it is confine to the remote jungle areas of the country, the town is safe, also there are foreign people studying at the university or teaching languages. Ibagué the place where the program takes place is sunny and warm, people are easy-going, very welcoming, and there are outdoors activities to do and places to visit nearby.</p>".
					"</body>".
					"</html>";

		$to = $_POST['email'];
		$subject = "Volunteering in Ibagué, Colombia";

		// Always set content-type when sending HTML email
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

		// More headers
		$headers .= "From: info@letsgovolunteer.info\r\n";
		$headers .+ "Reply-To: info@letsgovolunteer.info";

		if (!mail($to,$subject,$their_mail,$headers)) {
			throw new Exception("Applicant Email Failure Exception: ".$their_mail);
		}
	}
	catch (Exception $e) {
		send_exception_email($e, $their_mail);
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
	if ($_POST[$name] != "") {
		$value = $_POST[$name];
	}
	else {
		$timestamp = strtotime("+2 week");
		$value = date('d-m-Y', $timestamp);
	}

	echo "<script type=\"text/javascript\">DateInput('".$name."', true, 'DD-MM-YYYY', '".$value."')</script>";
}
function write_number_weeks($name, $id) {
	if ($_POST[$name] != "") {
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
	$value = $_POST[$name];

	if ($value =="") {
		$value = "Volunteer Center";
	}
	
	echo "<select name=\"".$name."\" id=\"".$id."\">\r\n";
	echo "\t\t\t\t\t\t\t\t\t\t<option".is_selected($value, "Volunteer Center").">Volunteer Center</option>\r\n";
	echo "\t\t\t\t\t\t\t\t\t\t<option".is_selected($value, "Homestay").">Homestay</option>\r\n";
	echo "\t\t\t\t\t\t\t\t\t\t<option".is_selected($value, "Self-Catered Apartment").">Self-Catered Apartment</option>\r\n";
	echo "\t\t\t\t\t\t\t\t\t</select>\r\n";
}
function write_month_select($name, $id) {
	$value = $_POST[$name];

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
	$value = $_POST[$name];
	
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