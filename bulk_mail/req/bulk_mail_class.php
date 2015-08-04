<?php
class BulkMail
{
	public $id, $subject, $body, $status, $added_date, $attach_eng, $attach_spa, $num_sent, $total_to_send;

	function __construct() {
		$this->id = 0;
	}
	static function Search() {
		$ret = array();
		$sql = "CALL bulk_mail_search"; 
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
				$bulk_mail = new BulkMail();
				$bulk_mail->id = $row["bulk_mail_id"];
				$bulk_mail->subject = $row["email_subject"];
				$bulk_mail->body = $row["email_body"];
				$bulk_mail->attach_eng = $row["attachment_eng"];
				$bulk_mail->attach_spa = $row["attachment_spa"];
				$bulk_mail->status = $row["status"];
				$bulk_mail->num_sent = $row["num_sent"];				
				$bulk_mail->total_to_send = $row["total_to_send"];
				$bulk_mail->added_date = strtotime($row["added_date"]);
				$ret[$i] = $bulk_mail;
				$i++;
			}
			
			mysql_close($db_connection);
		}
		catch (Exception $e) {
			echo "Exception:".$e;
			//send_exception_email($e, $sql);
		}
		return $ret;
	}
	static function SearchPending() {
		$ret = array();
		$sql = "CALL bulk_mail_search_pending"; 
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
				$bulk_mail = new BulkMail();
				$bulk_mail->id = $row["bulk_mail_id"];
				$bulk_mail->subject = $row["email_subject"];
				$bulk_mail->body = $row["email_body"];
				$bulk_mail->attach_eng = $row["attachment_eng"];
				$bulk_mail->attach_spa = $row["attachment_spa"];
				$bulk_mail->status = $row["status"];
				$bulk_mail->num_sent = $row["num_sent"];				
				$bulk_mail->total_to_send = $row["total_to_send"];
				$bulk_mail->added_date = strtotime($row["added_date"]);
				$ret[$i] = $bulk_mail;
				$i++;
			}
			
			mysql_close($db_connection);
		}
		catch (Exception $e) {
			echo "Exception:".$e;
			//send_exception_email($e, $sql);
		}
		return $ret;
	}
	function Debug() {
		echo "BulkMail Debug:\n\r";
		echo "\tid=".$this->id."\r\n";
		echo "\tsubject=".$this->subject."\r\n";
		echo "\tbody=".$this->body."\r\n";
		echo "\tstatus=".$this->status."\r\n";
		echo "\tadded:date=".$this->added_date."\r\n";
		echo "\tattach_eng=".$this->attach_eng."\r\n";
		echo "\tattach_spa=".$this->attach_spa."\r\n";
		echo "\tnum_sent=".$this->num_sent."\r\n";
		echo "\ttotal_to_send=".$this->total_to_send."\r\n";
	}
	function Get() {
		$sql = sprintf("CALL bulk_mail_get(%s)", $this->id); 
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
				$this->subject = $row["email_subject"];
				$this->body = $row["email_body"];
				$this->attach_eng = $row["attachment_eng"];
				$this->attach_spa = $row["attachment_spa"];
				$this->status = $row["status"];
				$this->num_sent = $row["num_sent"];				
				$this->total_to_send = $row["total_to_send"];
				$this->added_date = strtotime($row["added_date"]);
			}
			
			mysql_close($db_connection);
		}
		catch (Exception $e) {
			echo "Exception:".$e;
			//send_exception_email($e, $sql);
		}		
	}
	function Save() {
		$sql = sprintf("CALL bulk_mail_save(%s, '%s', '%s', '%s', '%s', '%s')", $this->id, $this->subject, $this->body, $this->attach_eng, $this->attach_spa, $this->status); 
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
				throw new Exception('MySQL Save Query Error: ' . mysql_error(). "SQL:".$sql);				
			}
			
			if ($this->id == null)
				$this->id = mysql_insert_id();
				
			$id = $result;
			
			mysql_close($db_connection);
		}
		catch (Exception $e) {
			echo "Exception:".$e;
			//send_exception_email($e, $sql);
		}		
	}
	function Delete() {
		$sql = sprintf("DELETE FROM bulk_mail WHERE bulk_mail_id = %s", $this->id); 
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
				throw new Exception('MySQL Delete Query Error: ' . mysql_error(). "SQL:".$sql);				
			}
			
			mysql_close($db_connection);
		}
		catch (Exception $e) {
			echo "Exception:".$e;
			//send_exception_email($e, $sql);
		}		
	}
	function Processing() {
		$this->status = "Processing";
		$this->Save();
	}
	function Cancel() {
		$this->status = "Cancelled";
		$this->Save();
	}
	function Send() {
		$this->status = "Pending";
		$this->Save();
	}
	function Sent() {
		$this->status = "Sent";
		$this->Save();
	}
	function Render() {
		// if called by Cron it doesn´t have a host
		if ($_SERVER['HTTP_HOST'] == "")
			$host = "www.letsgovolunteer.com";
		else
			$host = $_SERVER['HTTP_HOST'];
		
		$output = $this->body."\n\n";
			if ($this->attach_eng != "")
				$output .= "An English Version can be found at http://".$host."/files/".basename($this->attach_eng)."\n\n";

			if ($this->attach_spa != "")
				$output .= "Usted puede encontrar una versión en español en http://".$host."/files/".basename($this->attach_spa)."\n\n";

			$output .= "\n\nIf at any time you would like to be removed from this mailing list please reply to this email with the subject changed to unsubscribe";

		return $output;
	}
	function SendMail($email)
	{
		//define the receiver of the email
		$to = '';
		$to .= $email;

		//define the subject of the email
		$subject = '';
		$subject .= '=?UTF-8?B?'.base64_encode($this->subject).'?='; 
		//define the message to be sent. Each line should be separated with \n
		$message = $this->Render(); 
		//define the headers we want passed. Note that they are separated with \r\n
		$headers = 'Content-type: text/plain; charset=UTF-8'."\r\n";
		$headers .= "From: newsletter@letsgovolunteer.info\r\nReply-To: newsletter@letsgovolunteer.info";
		//send the email
		$mail_sent = @mail( $to, $subject, $message, $headers);
		if (!$mail_sent)
			throw new Exception("Bulk Email Failure Exception");
	}
}
?>