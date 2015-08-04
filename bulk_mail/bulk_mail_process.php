<?php
	require('req/bulk_mail_class.php');
	require('req/person_class.php');

	header('Content-type: text/plain; charset=UTF-8');

	echo "Beginning Bulk Mail Processing\r\n";
	// get the mails to process	
	$mails_to_process = BulkMail::SearchPending();
	
	// count how many we have
	$i_count = count($mails_to_process);

	echo "Found ".$i_count." mails to process\r\n";	
	// loop thru the mails to process
	for ($i = 0; $i < $i_count; $i++) {
		try {
			echo "Processing mail ".$mails_to_process[$i]->subject."\r\n";
			// $mails_to_process[$i]->Debug();
			$mails_to_process[$i]->Processing();
		
			// find all the people that will receive the email
			$people_to_mail = Person::SearchBulkMailersForBulkMailID($mails_to_process[$i]->id);
			// find out how many people
			$j_count = count($people_to_mail);

			echo "\tFound ".$j_count." people to receive mail\r\n";	

			// loop thru the people
			for ($j = 0; $j < $j_count; $j++) {
				try {
					echo "\tSending mail to ".$people_to_mail[$j]->email."\r\n";
					// send the email to the person
					$mails_to_process[$i]->SendMail($people_to_mail[$j]->email);
					echo "\tUpdating person to show they have been sent mail\r\n";
					// update db to show they have been mailed
					$people_to_mail[$j]->SentBulkMail($mails_to_process[$i]->id);
				}
				catch (Exception $e) {
					echo "\tException processing mail ".$mails_to_process[$i]->subject.", to person ".$people_to_mail[$j]->email. ", Exception:".$e."\r\n";
					//send_exception_email($e, $sql);
				}
			}
			echo "Finished Processing mail ".$mails_to_process[$i]->subject."\r\n";
			$mails_to_process[$i]->Sent();
		}
		catch (Exception $e) {
			echo "\tException processing mail ".$mails_to_process[$i]->subject.", Exception:".$e."\r\n";
		}
	}
	echo "Finished Bulk Mail Processing\r\n";
?>