<?php
class MySQLiHelper {
   public static function MySqliDb() {
		$db = new mysqli('LetsGoVolunteer.db.4837344.hostedresource.com', 'LetsGoVolunteer', 'B3ren1ce', 'LetsGoVolunteer');
		if (mysqli_connect_errno()) {
			throw new Exception('MySQLi Connection Database Error: '. mysqli_connect_error());			
		}
		// set the charset to be UTF8
		$db->set_charset('utf8');

		return $db;
	}
}
?>