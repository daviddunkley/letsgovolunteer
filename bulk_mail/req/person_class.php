<?php
class Person
{
	public $id, $first_name, $surname, $email;

	function __construct() {
		$this->id = 0;
	}
	function Get() {
		$sql = sprintf("CALL person_get(%s)", $this->id); 
		try
		{
			$db_connection = mysql_connect('LetsGoVolunteer.db.4837344.hostedresource.com', 'LetsGoVolunteer', 'B3ren1ce', false, 65536);
			@mysql_select_db('LetsGoVolunteer');
			if (!$db_connection)
			{
				throw new Exception('MySQL Connection Database Error: '	. mysql_error());
			}

			$result = mysql_query($sql, $db_connection);
			if (!$result)
			{
				throw new Exception('MySQL Get Query Error: '	. mysql_error());				
			}			
			
			while($row = mysql_fetch_assoc($result))
			{
				$this->id = $row["person_id"];
				$this->email = $row["email"];
				$this->first_name = $row["first_name"];
				$this->surname = $row["surname"];
			}
			
			mysql_close($db_connection);
		}
		catch (Exception $e) {
			echo "Exception:".$e;
			//send_exception_email($e, $sql);
		}		
	}
	// Get all the Bulk Mail items from the DB, returns an array of the data
	static function SearchBulkMailersForBulkMailID($id)
	{
		$ret = array();
		$sql = "CALL person_for_bulk_mail(".$id.")"; 
		try
		{
			$db_connection = mysql_connect('LetsGoVolunteer.db.4837344.hostedresource.com', 'LetsGoVolunteer', 'B3ren1ce', false, 65536);
			@mysql_select_db('LetsGoVolunteer');
			if (!$db_connection)
			{
				throw new Exception('MySQL Connection Database Error: '	. mysql_error());
			}

			$result = mysql_query($sql, $db_connection);
			if (!$result)
			{
				throw new Exception('MySQL Get Query Error: '	. mysql_error());				
			}			
			$i = 0;
			while($row = mysql_fetch_assoc($result))
			{
				$person = new Person();
				$person->id = $row["person_id"];
				$person->email = $row["email"];
				$person->first_name = $row["first_name"];
				$person->surname = $row["surname"];
				$ret[$i++] = $person;
			}
			
			mysql_close($db_connection);
		}
		catch (Exception $e) {
			echo "Exception:".$e;
			//send_exception_email($e, $sql);
		}
		return $ret;
	}
	function SentBulkMail($bulk_mail_id)
	{
		$sql = sprintf("CALL person_sent_bulk_mail(%s,%s)", $this->id, $bulk_mail_id); 
		try
		{
			$db_connection = mysql_connect('LetsGoVolunteer.db.4837344.hostedresource.com', 'LetsGoVolunteer', 'B3ren1ce');
			@mysql_select_db('LetsGoVolunteer');
			if (!$db_connection)
			{
				throw new Exception('MySQL Connection Database Error: '	. mysql_error());
			}

			$result = mysql_query($sql);

			if (!$result)
			{
				throw new Exception('MySQL SentBulkMail Query Error: ' . mysql_error(). "SQL:".$sql);				
			}
			
			mysql_close($db_connection);
		}
		catch (Exception $e) {
			echo "Exception:".$e;
			//send_exception_email($e, $sql);
		}
	}
}