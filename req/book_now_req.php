<?php
//$old_level = error_reporting(0);

$errors = array();
$data = array();
// Check if the user is allow to see this page and popular the data array
$is_valid = check_is_valid($data);

//error_reporting($old_level);

function check_is_valid(&$data) {

	// default to NOT being valid
	$return = false;

	// Do Check
	try {
		// Connect To Database
		$hostname='LetsGoVolunteer.db.4837344.hostedresource.com';
		$username='LetsGoVolunteer';
		$password='B3ren1ce';
		$dbname='LetsGoVolunteer';

		// Create a Database Connection
		$connection = mysql_connect($hostname, $username, $password);
		if(!$connection){
			throw new Exception("Database connection failed:" . mysql_error());
		}

		// Select a Database
		$db_select = mysql_select_db($dbname, $connection);
		if(!$db_select){
			throw new Exception("Database selection failed: " . mysql_error());
		}			
		// run the query
		$result = mysql_query("SELECT ApplyID, Firstname, Surname, Email, Nationality, Telephone, Gender, StartDate, NumWeeks, Program, Accommodation, Comment, ApplyDate FROM Apply WHERE ApplyID = ".$_GET['id']);

		if(!$result) {
			throw new Exception("Database query failed: " . mysql_error());
		}
	
		while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
			$hash_key = hash('ripemd160', strtolower($row["Surname"]).';'. strtolower($row["Firstname"]).';'.$row["ApplyID"]);

			$data["apply_id"] = $row["ApplyID"];
			$data["firstname"] = $row["Firstname"];
			$data["surname"] = $row["Surname"];
			$data["email"] = $row["Email"];
			$data["nationality"] = $row["Nationality"];
			$data["telephone"] = $row["Telephone"];
			$data["gender"] = $row["Gender"];
			$data["start_date"] = $row["StartDate"];
			$data["num_weeks"] = $row["NumWeeks"];
			$data["program"] = $row["Program"];
			$data["accommodation"] = $row["Accommodation"];
			$data["comment"] = $row["Comment"];
			$data["apply_date"] = $row["ApplyDate"];

			// is valid if the passed key matches the constructed key
			$return = ($_GET['key'] == hash('ripemd160', 'dunkley;david;'.$_GET['id']));
		}
		mysql_free_result($result);

		// Close the Database Connection
		if(isset($connection)){
			mysql_close($connection);
		}
	}
	catch (Exception $e) {
		send_exception_email($e, $sql);
	}
	// return whether valid or not
	return $return;
}

function write_input_readonly($name, $id, $title, $class, $size, $def_value) {
	echo "<input type=\"text\" name=\"".$name."\" id=\"".$id."\" value=\"".$def_value."\"".write_if_not_blank("title",$title).write_if_not_blank("class", $class).write_if_not_blank("size", $size)." readonly=\"readonly\"/>\r\n";
}
function write_gender($name, $id, $title, $class, $size) {
	if ($data["gender"] == 0) {
		write_input_readonly($name, $id, $title, $class, $size, "Female");
	} 
	else {
		write_input_readonly($name, $id, $title, $class, $size, "Male");
	}
}


/*
// Only validate if the Submit button was clicked.
if (!empty($_POST['submit'])) {
	// Each time there's an error, add an error message to the error array
	// using the field name as the key.
	if ($_POST['firstname'] == '') {
		$errors['firstname'] = 'first name cannot be empty';
	}
	if ($_POST['surname'] =='') {
		$errors['surname'] = 'surname cannot be empty';
	}
	// check the email is given and fits a valid format
	if ($_POST['email'] =='') {
		$errors['email'] = 'email cannot be empty';
	} else if(!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $_POST['email'])) {
		$errors['email'] = 'invalid email given';
	}

	if ($_POST['nationality'] =='') {
		$errors['nationality'] = 'nationality cannot be empty';
	}
	if ($_POST['gender'] == '') {
		$errors['gender'] = 'gender must be entered';
	}
	else {
		$gender = (($_POST['gender'] == "female") ? 1 : 2);
	}	

	// check the start date is given
	if ($_POST['start_date'] == "") {
		$errors['start_date'] = 'start date must be given';
	}
	// determine their requested programs, store as a bitwise integer
	$program = 0;
	if ($_POST['program_children'] == "children") {
		$program = $program + 1;
	}
	if ($_POST['program_teenagers'] == "teenagers") {
		$program = $program + 2;
	}
	if ($_POST['program_women'] == "woman_at_risk") {
		$program = $program + 4;
	}
	if ($_POST['program_elderly'] == "elderly") {
		$program = $program + 8;
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
		$sql = sprintf("INSERT INTO Apply(Firstname, Surname, Email, Nationality, Telephone, Gender, StartDate, NumWeeks, Program, Accommodation, Comment) ".
						"VALUES ('%s', '%s', '%s', '%s', '%s', '%s', '%s', %s, %s, '%s', '%s')",
					$_POST['firstname'],
					$_POST['surname'],
					$_POST['email'],
					$_POST['nationality'],
					$_POST['telephone'],
					$gender,
					date('Y-m-d', $start_date), // format date to YYYY-MM-DD Format
					$_POST['duration'],
					$program,
					$_POST['accomm'],
					substr(rtrim($_POST['comments']), 0, 500)
			);

		try {
			// Connect To Database
			$hostname='LetsGoVolunteer.db.4837344.hostedresource.com';
			$username='LetsGoVolunteer';
			$password='W3bS1te';
			$dbname='LetsGoVolunteer';

			// Create a Database Connection
			$connection = mysql_connect($hostname,$username, $password);
			if(!$connection){
				throw new Exception("Database connection failed:" . mysql_error());
			}

			// Select a Database
			$db_select = mysql_select_db($dbname, $connection);
			if(!$db_select){
				throw new Exception("Database selection failed: " . mysql_error());
			}			

			$result = mysql_query($sql, $connection);
			if(!$result) {
				throw new Exception("Database query failed: " . mysql_error());
			}
			// Close the Database Connection
			if(isset($connection)){
				mysql_close($connection);
			}
		}
		catch (Exception $e) {
			send_exception_email($e, $sql);
		}

		header( 'Location: applied_now.php' );
	}
} 
* /
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
		echo "<p><em>The following problems were found:</em></p>";
		echo "	<ul>\r\n";
		foreach ($errors as $error) {
			echo "		<li>".$error."</li>\r\n";
		}
		echo "	</ul>\r\n";
		echo "<p>Your booking has <strong>not</strong> been made, please try again.</p>\r\n";
		echo "</div>\r\n";
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

function write_date_of_birth($name) {
	if ($_POST[$name] != "") {
		$value = $_POST[$name];
	}
	else {
		$timestamp = strtotime("-25 years");
		$value = date('d-m-Y', $timestamp);
	}
	echo "<select name=\"dob_month\">\r\n";
	for ($num=1; $num <=12; $num++) {
		echo "<option value=\"".$num."\"".is_selected($value, $opt).">".date('F', mktime(0,0,0,$num,1))."</option>\r\n";
	}
	echo "</select>";
	echo "<select name=\"dob_day\">\r\n";
	for ($num=1; $num <=31; $num++) {
		echo "<option value=\"".$num."\">".$num."</option>\r\n";
	}
	echo "</select>";
	echo "<select name=\"dob_year\">\r\n";
	for ($num=1940; $num <=1996; $num++) {
		echo "<option value=\"".$num."\">".$num."</option>\r\n";
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
	echo "<select name=\"".$name."\" id=\"".$id."\">";
	echo "<option ".is_selected($value, "Volunteer Center").">Volunteer Center</option>";
	echo "<option ".is_selected($value, "Homestay").">Homestay</option>";
	echo "<option ".is_selected($value, "Self-Catered Apartment").">Self-Catered Apartment</option>";
	echo "</select>";
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
?>