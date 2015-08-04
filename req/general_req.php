<?php
function send_exception_email($exception, $extra) {
	try {
		$msg = "Exception: ".$exception.";\r\n\r\n Extra: ".$extra;
		sendgrid_mail("info@letsgovolunteer.info", "system@letsgovolunteer.info", "Exception Email", $msg);
	}
	catch (Exception $e) {
		// nada
	}
}
function is_ie() {
	if (strpos(strtolower($_SERVER['HTTP_USER_AGENT']), "msie") > 0) {
		return true;
	}
	else {
		return false;
	}
}
function is_selected($selected, $option) {
	if ($selected == $option) {
		return " selected=\"selected\"";
	}
}
function is_checked($checked, $option) {
	if ($checked == $option) {
		return " checked=\"checked\"";
	}
}
function write_if_not_blank($prop, $value) {
	if ($value != "") {
		return " ".$prop."=\"".$value."\"";
	}
}
function write_label($for, $value, $class) {
	echo "<label for=\"".$for."\"".write_if_not_blank("class", $class).">".$value."</label>\r\n";
}
function write_input($name, $id, $title, $class, $size) {
	$value = "";
	if (isset($_POST[$name]))
	{
		// check if we have a post variable for this name, so we can repopulate it
		$value = htmlspecialchars($_POST[$name], ENT_QUOTES);
	}
	
	echo "<input type=\"text\" name=\"".$name."\" id=\"".$id."\" value=\"".$value."\"".write_if_not_blank("title",$title).write_if_not_blank("class", $class).write_if_not_blank("size", $size)." />\r\n";
}
function write_radio($name, $id, $value, $class) {
	$post = "";
	if (isset($_POST[$name]))
	{
		// check if we have a post variable for this name, so we can repopulate it
		$post = $_POST[$name];
	}
	
	echo "<input type=\"radio\" name=\"".$name."\" id=\"".$id."\" value=\"".$value."\"".is_checked($value, $post)." />\r\n";
}
function write_checked($name, $id, $value, $class) {
	$post = "";
	if (isset($_POST[$name]))
	{
		// check if we have a post variable for this name, so we can repopulate it
		$post = $_POST[$name];
	}
	echo "<input type=\"checkbox\" name=\"".$name."\" id=\"".$id."\" value=\"".$value."\"".is_checked($value, $post)." />\r\n";
}
function write_textarea($name, $id, $title, $rows, $cols, $class) {
	$value = "";
	if (isset($_POST[$name]))
	{
		$value = htmlspecialchars($_POST[$name], ENT_QUOTES);
	}
	
	echo "<textarea name=\"".$name."\" id=\"".$id."\"".write_if_not_blank(" class",$class)." rows=\"".$rows."\" cols=\"".$cols."\"".write_if_not_blank("title",$title).">".$value."</textarea>\r\n";
}
?>