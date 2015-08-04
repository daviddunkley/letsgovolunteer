<?php
$old_level = error_reporting(0);

$errors = array();
$data = array();
// Check if the user is allow to see this page and popular the data array
$is_valid = check_is_valid($data);

// Only validate if the Submit button was clicked.
/*if (!empty($_POST['submit'])) {
	echo ("<!--");
	foreach ($_POST as $key => $value) {
		echo $key." - ".$value."<br />";
	}
	echo ("-->");
	
	save_feedback($data["apply_id"]);
}
*/
error_reporting($old_level);

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
			$data["key"] = $hash_key;
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
			$return = ($_GET['key'] == hash('ripemd160', $row["Surname"].";".$row["Firstname"].";".$_GET['id']));

			if ($_GET['key'] == "query") {
				echo "<!--hash_key=".$hash_key."-->";
			}
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

function save_feedback($apply_id) {
	$sql = sprintf("INSERT INTO Feedback(ApplyID, Question_One, Question_Two, Question_Three, Score_Four, Comment_Four, Score_Five, Comment_Five, Score_Six, Comment_Six, Score_Seven, Comment_Seven, Score_Eight, Comment_Eight, Score_Nine, Comment_Nine, Question_Ten) ".
					"VALUES (%s, '%s', '%s', '%s', %s, '%s', %s, '%s', %s, '%s', %s, '%s', %s, '%s', %s, '%s', '%s')",
					$_POST['id'],
					substr(rtrim($_POST['cmt_one']), 0, 2000),
					substr(rtrim($_POST['cmt_two']), 0, 2000),
					substr(rtrim($_POST['cmt_three']), 0, 2000),
					$_POST['chk_four'],
					substr(rtrim($_POST['cmt_four']), 0, 1000),
					$_POST['chk_five'],
					substr(rtrim($_POST['cmt_five']), 0, 1000),
					$_POST['chk_six'],
					substr(rtrim($_POST['cmt_six']), 0, 1000),
					$_POST['chk_seven'],
					substr(rtrim($_POST['cmt_seven']), 0, 1000),
					$_POST['chk_eight'],
					substr(rtrim($_POST['cmt_eight']), 0, 1000),
					$_POST['chk_nine'],
					substr(rtrim($_POST['cmt_nine']), 0, 1000),
					substr(rtrim($_POST['cmt_ten']), 0, 2000)
			);

	try {
		// Connect To Database
		$hostname='LetsGoVolunteer.db.4837344.hostedresource.com';
		$username='LetsGoVolunteer';
		$password='B3ren1ce';
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

		mysql_free_result($result);

		// Close the Database Connection
		if(isset($connection)){
			mysql_close($connection);
		}
	}
	catch (Exception $e) {
		send_exception_email($e, $sql);
	}

	header( 'Location: fedback.php' );
} 
?>