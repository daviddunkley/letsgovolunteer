<?php
function SaveAttachment($dir, $file_info, $is_eng) {
	// if there is no file return null
	if ($file_info["name"] == "") {
		return null;
	}
	// if the document is a pdf and not too large
	if (($file_info["type"] == "application/pdf") && ($file_info["size"] < 2000000)) {
		// if there are errors with the document, throw an exception
	  	if ($file_info["error"] > 0)
	    {
	    	throw new Exception('File Upload Error: ' . $file_info["error"]);
	    }
		// otherwise the file is OK
	  	else {
/*		    echo "<!-- Upload: " . $file["name"] . "<br />";
		    echo "Type: " . $file["type"] . "<br />";
		    echo "Size: " . ($file["size"] / 1024) . " Kb<br />";
		    echo "Temp file: " . $file["tmp_name"] . "<br />";
*/			// generate a unique id
			$id = uniqid();
			// build a filename with the directory as well
			if ($is_eng) {
				$dest = $dir."/".$id."_eng.pdf";
			} else {
				$dest = $dir."/".$id."_spa.pdf";
			}
			// copy the temp file to the destination filename
	      	$ret_move = move_uploaded_file($file_info["tmp_name"], $dest);
//			echo "Move Ret:".$ret_move."<br/>";
//		  	echo "Stored in: " . $dest . "<br />-->";
	    }
	}
	else {
		throw new Exception('File Upload Error: Invalid File Type');
	}	
	return $dest;	
}
?>