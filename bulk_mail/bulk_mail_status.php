<?php 
//	require('req/head_req.php');
	require('req/bulk_mail_class.php');
?>
<? //write_doctype(DT_TRANS); ?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Let's Go Volunteer - Bulk Mail Status</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF8" />
	<meta name="title" content="Let's Go Volunteer - Bulk Mail Status" />
	<meta name="author" content="Sitios Para Usted" />
	<meta name="description" content="Welcome to Let's Go Volunteer." />
	<link rel="stylesheet" href="/css/style.css" type="text/css" />
	
	<script type="text/javascript">
	<!--
	function popup(mylink, windowname)
	{
	if (! window.focus)return true;
	var href;
	if (typeof(mylink) == 'string')
	   href=mylink;
	else
	   href=mylink.href;
	window.open(href, windowname, 'width=800,height=600,scrollbars=yes');
	return false;
	}
	//-->
	</script>	
</head>
<body>
		<div style="float:left"><a href="bulk_mail_add.php">Add</a></div><br/>
		<table border="1">
			<tr>
				<th>Date Added</th>
				<th>Email Subject</th>
				<th>Attachments</th>
				<th>Status</th>
				<th>Actions</th>
			</tr>
<?	// Call Call method for Search
	$data = BulkMail::Search();
	
	$count = count($data);
	for ($i = 0; $i < $count; $i++) {
		echo "<tr>";
		echo "<td>". date("D M j, Y", $data[$i]->added_date)."</td>"; 
		echo "<td>". $data[$i]->subject ."</td>";
		echo "<td>";
		if ($data[$i]->attach_eng != null)
		{
			echo "<a href=\"../files/" . basename($data[$i]->attach_eng) . "\" onClick=\"return popup(this, 'attach')\"><img src=\"../img/logos/eng_logo.gif\"/></a>";
		}
		if ($data[$i]->attach_spa != null)
		{
			echo "<a href=\"../files/" . basename($data[$i]->attach_spa) . "\" onClick=\"return popup(this, 'attach')\"><img src=\"../img/logos/spa_logo.gif\"/></a>";
		}
		echo "</td>";

		if (($data[$i]->status == "Saved") || ($data[$i]->status == "Pending")) {
			echo "<td>".$data[$i]->status."(".$data[$i]->total_to_send.")</td>";
		} else if (($data[$i]->status == "Cancelled") || ($data[$i]->status == "Sent")) {
			echo "<td>".$data[$i]->status."(".$data[$i]->num_sent.")</td>";			
		} else {
			echo "<td>".$data[$i]->status." (".$data[$i]->num_sent."/".$data[$i]->total_to_send.")</td>";			
		}
		
		if ($data[$i]->status == "Saved")
		{
			echo "<td><a href=\"bulk_mail_view.php?id=" . $data[$i]->id . "\" onClick=\"return popup(this, 'view')\">View</a><a href=\"bulk_mail_edit.php?id=" . $data[$i]->id . "\">Edit</a><a href=\"bulk_mail_send.php?id=" . $data[$i]->id . "\">Send</a><a href=\"bulk_mail_delete.php?id=" . $data[$i]->id . "\">Delete</a></td>";
		}
		else if ($data[$i]->status == "Pending")
		{
			echo "<td><a href=\"bulk_mail_view.php?id=".$data[$i]->id."\" onClick=\"return popup(this, 'view')\">View</a><a href=\"bulk_mail_edit.php?id=".$data[$i]->id."\">Edit</a><a href=\"bulk_mail_cancel.php?id=".$data[$i]->id."\">Cancel</a></td>";
		}	
		else if ($data[$i]->status == "Processing")
		{
			echo "<td><a href=\"bulk_mail_view.php?id=".$data[$i]->id."\" onClick=\"return popup(this, 'view')\">View</a><a href=\"bulk_mail_cancel.php?id=".$data[$i]->id."\">Cancel</a></td>";					
		}	
		else if ($data[$i]->status == "Sent")
		{
			echo "<td><a href=\"bulk_mail_view.php?id=".$data[$i]->id."\" onClick=\"return popup(this, 'view')\">View</a></td>";					
		}	
		else if ($data[$i]->status == "Cancelled")
		{
			echo "<td><a href=\"bulk_mail_view.php?id=".$data[$i]->id."\" onClick=\"return popup(this, 'view')\">View</a></td>";						
		}	
		echo "</tr>";
	}
?>
	</table>
</body>
</html>