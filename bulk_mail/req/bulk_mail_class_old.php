<?php
class BulkMail
{
	public $id, $subject, $body, $added_date, $attach_eng, $attach_spa, $num_sent, $total_to_send;

	// Get all the Bulk Mail items from the DB, returns an array of the data
	public function Search()
	{
		$ret = array();
		
		$sql = "SELECT * FROM bulk_mail_status";

		try
		{
//			$db_connection = mysql_connect ($hostname, $username, $password, TRUE);
			$db_connection = mysql_connect ('LetsGoVolunteer.db.4837344.hostedresource.com', 'LetsGoVolunteer', 'B3ren1ce');
			@mysql_select_db('LetsGoVolunteer');
			if (!$db_connection)
			{
				throw new Exception('MySQL Connection Database Error: '	. mysql_error());
			}

			$result = mysql_query($sql);
			
			if (!$result)
			{
				throw new Exception('MySQL Query Error: '	. mysql_error());				
			}
			
			$num = mysql_numrows($result);

			$i=0;
			while ($i < $num)
			{
				$ret[$i] = new BulkMail();
				$ret[$i]->id = mysql_result($result,$i,"bulk_mail_id");
				$ret[$i]->subject = mysql_result($result,$i,"email_subject");
				$ret[$i]->body = mysql_result($result,$i,"email_body");
				$ret[$i]->status = mysql_result($result,$i,"status");
				$ret[$i]->attach_eng = mysql_result($result,$i,"attachment_eng");
				$ret[$i]->attach_spa = mysql_result($result,$i,"attachment_spa");
				$ret[$i]->num_sent = mysql_result($result,$i,"num_sent");
				$ret[$i]->total_to_send = mysql_result($result,$i,"total_to_send");
				$ret[$i]->added_date = strtotime(mysql_result($result,$i,"added_date"));
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
	// Get the id items from the DB
	public function Get($id)
	{
		// default to no results
		$ret = null;
		
		$sql = "SELECT * FROM bulk_mail_status WHERE bulk_mail_id = ". $id;

		try
		{
			$db_connection = mysql_connect ('LetsGoVolunteer.db.4837344.hostedresource.com', 'LetsGoVolunteer', 'B3ren1ce');
			@mysql_select_db('LetsGoVolunteer');
			if (!$db_connection)
			{
				throw new Exception('MySQL Connection Database Error: '	. mysql_error());
			}

			$result = mysql_query($sql);
			
			if (!$result)
			{
				throw new Exception('MySQL Query Error: '	. mysql_error());				
			}			

			// if we have some rows	
			if (mysql_numrows($result) > 0) {
				// populate the properties from the 0th item
				$ret = new BulkMail();
				$ret->id = $id;
				$ret->subject = mysql_result($result,0,"email_subject");
				$ret->body = mysql_result($result,0,"email_body");
				$ret->attach_eng = mysql_result($result,0,"attachment_eng");
				$ret->attach_spa = mysql_result($result,0,"attachment_spa");
				$ret->num_sent = mysql_result($result,0,"num_sent");
				$ret->total_to_send = mysql_result($result,0,"total_to_send");
				$ret->added_date = strtotime(mysql_result($result,0,"added_date"));
			}
			mysql_close($db_connection);
		}
		catch (Exception $e) {
			echo "Exception:".$e;
			//send_exception_email($e, $sql);
		}	
		return $ret;	
	}
	private function Insert($subject, $body, $attach_eng, $attach_spa) 
	{
		$id = null;
		
		$sql = sprintf("INSERT INTO bulk_mail(email_subject, email_body, attachment_eng, attachment_spa, status) VALUES('%s', '%s', '%s', '%s', 'Saved')", $subject, $body, $attach_eng, $attach_spa); 
		try
		{
			$db_connection = mysql_connect ('LetsGoVolunteer.db.4837344.hostedresource.com', 'LetsGoVolunteer', 'B3ren1ce');
			@mysql_select_db('LetsGoVolunteer');
			if (!$db_connection)
			{
				throw new Exception('MySQL Connection Database Error: '	. mysql_error());
			}

			$result = mysql_query($sql);

			if (!$result)
			{
				throw new Exception('MySQL Query Error: '	. mysql_error());				
			}		

			$id = mysql_insert_id();

			mysql_close($db_connection);
		}
		catch (Exception $e) {
			echo "Exception:".$e;
			//send_exception_email($e, $sql);
		}
		return $id;		
	}
	public function View($id)
	{
		$mail = self::Get($id);
//		echo "IN view: ".$mail->subject;
		
		$output = "<html>".
			"<head>".
			"<title>Let´s Go Volunteer</title>".
			"<style>".
				"body {font-family: 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;}".
			"</style>".
			"</head>".
			"<body>".
			"<p>".$mail->body."</p>";
			if ($mail->attach_eng != "")
				$output .= "<a href=\"../files/".basename($mail->attach_eng)."\" target=\"_new\">English Version</a><br/>";

			if ($mail->attach_spa != "")
				$output .= "<a href=\"../files/".basename($mail->attach_spa)."\" target=\"_new\">Versi&#243;n en espa&#241;ol</a>";

			$output .= "<hr/>".
			"<p>If at any time you would like to be removed from this mailing list please following the following <a href=\"../unsubscribe.php?id=".$id."\">link</a> to unsubscribe.";
			"</body>".
			"</html>";
					
		return $output;
	}
	private function SaveAttachment($dir, $file, $is_eng)
	{
		// if there is no file return null
		if ($file["name"] == "") {
//			echo "Blank File<br/>"; 
			return null;
		}
		// if the document is a pdf and not too large
		if (($file["type"] == "application/pdf") && ($file["size"] < 2000000)) {
			// if there are errors with the document, throw an exception
		  	if ($file["error"] > 0)
		    {
		    	throw new Exception('File Upload Error: ' . $file_info["error"]);
		    }
			// otherwise the file is OK
		  	else {
/*			    echo "<!-- Upload: " . $file["name"] . "<br />";
			    echo "Type: " . $file["type"] . "<br />";
			    echo "Size: " . ($file["size"] / 1024) . " Kb<br />";
			    echo "Temp file: " . $file["tmp_name"] . "<br />";
*/				// generate a unique id
				$id = uniqid();
				// build a filename with the directory as well
				if ($is_eng) {
					$dest = $dir."/".$id."_eng.pdf";
				} else {
					$dest = $dir."/".$id."_spa.pdf";
				}
				// copy the temp file to the destination filename
		      	$ret_move = move_uploaded_file($file["tmp_name"], $dest);
//				echo "Move Ret:".$ret_move."<br/>";
//			  	echo "Stored in: " . $dest . "<br />-->";
		    }
		  }
		else {
			throw new Exception('File Upload Error: Invalid File Type');
		}	
		return $dest;		
	}
	// Add a New Bulk Mail item to the DB, returns the new id
	public function Add($files_dir, $subject, $body, $file_eng, $file_spa)
	{	
		$attachment_eng = self::SaveAttachment($files_dir, $file_eng, TRUE);
//		echo "Attach Eng:".$attachment_eng."<br/>";
		$attachment_spa = self::SaveAttachment($files_dir, $file_spa, FALSE);
//		echo "Attach Spa:".$attachment_spa."<br/>";
				
		$id = self::Insert($subject, $body, $attachment_eng, $attachment_spa); 
		
		return $id;
	}
	// Edit the id item in the DB 
	public function Edit($id, $subject, $body, $attach_eng, $attach_spa)
	{
		$id = null;
		
		$sql = sprintf("UPDATE bulk_mail SET email_subject = '%s', email_body = '%s', attachment_eng = '%s', attachment_spa = '%s' WHERE bulk_mail_id = %s", $subject, $body, $attach_eng, $attach_spa, $id); 
		try
		{
			$db_connection = mysql_connect ('LetsGoVolunteer.db.4837344.hostedresource.com', 'LetsGoVolunteer', 'B3ren1ce');
			@mysql_select_db('LetsGoVolunteer');
			if (!$db_connection)
			{
				throw new Exception('MySQL Connection Database Error: '	. mysql_error());
			}

			$result = mysql_query($sql);

			if (!$result)
			{
				throw new Exception('MySQL Query Error: '	. mysql_error());				
			}
			
			$id = $id;		

			mysql_close($db_connection);
		}
		catch (Exception $e) {
			echo "Exception:".$e;
			//send_exception_email($e, $sql);
		}
		return $id;		
	}
	private function Update($upd_id, $status)
	{		
		$sql = sprintf("UPDATE bulk_mail SET status = '%s' WHERE bulk_mail_id = %s", $status, $upd_id); 
		try
		{
			$db_connection = mysql_connect ('LetsGoVolunteer.db.4837344.hostedresource.com', 'LetsGoVolunteer', 'B3ren1ce');
			@mysql_select_db('LetsGoVolunteer');
			if (!$db_connection)
			{
				throw new Exception('MySQL Connection Database Error: '	. mysql_error());
			}

			$result = mysql_query($sql);

			if (!$result)
			{
				throw new Exception('MySQL Query Error: ' . mysql_error(). "SQL:".$sql);				
			}	

			mysql_close($db_connection);
		}
		catch (Exception $e) {
			echo "Exception:".$e;
			//send_exception_email($e, $sql);
		}
		return $id;
	}
	// Send the id item to the receipients
	public function Send($upd_id)
	{
		return self::Update($upd_id, "Pending");
	}
	// Cancel the id item 
	public function Cancel($upd_id)
	{
		return self::Update($upd_id, "Cancelled");
	}
	// Sent the id item 
	public function Sent($upd_id)
	{
		return self::Update($upd_id, "Sent");
	}
	// Deletes the id item in the DB 
	public function Delete($del_id)
	{		
		$sql = sprintf("DELETE FROM bulk_mail WHERE bulk_mail_id = %s", $del_id); 
		try
		{
			$db_connection = mysql_connect ('LetsGoVolunteer.db.4837344.hostedresource.com', 'LetsGoVolunteer', 'B3ren1ce');
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
	// Process any Send status Bulk Mail items
	public function Process()
	{
		// To be written
		
	}
}
?>