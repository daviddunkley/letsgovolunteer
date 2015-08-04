<?php
$path_parts = pathinfo(__FILE__);
$newsletter_dir = realpath($path_parts['dirname'])."/../newsletters/";
echo "Newsletter Dir:".$newsletter_dir."<br/>";

if (($_FILES["file"]["type"] == "application/pdf") && ($_FILES["file"]["size"] < 2000000))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {
    echo "Upload: " . $_FILES["file"]["name"] . "<br />";
    echo "Type: " . $_FILES["file"]["type"] . "<br />";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";

    if (file_exists($newsletter_dir . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      	move_uploaded_file($_FILES["file"]["tmp_name"], $newsletter_dir . "20110201.pdf");
//    	move_uploaded_file($_FILES["file"]["tmp_name"], $newsletter_dir . $_FILES["file"]["name"]);
//      "/home/content/44/4837344/html/letsgovolunteer_dev/newsletters/" . $_FILES["file"]["name"]);
	  	echo "Stored in: " . $newsletter_dir . $_FILES["file"]["name"];
      //echo "Stored in: " . "newsletters/" . $_FILES["file"]["name"];
      }
    }
  }
else
  {
  echo "Invalid file";
  }
?>Done