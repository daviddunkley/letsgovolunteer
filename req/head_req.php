<?php
define('DT_TRANS', 1);

define('ST_BASIC', 0);
define('ST_BOOK', 1);
define('ST_CONTACT', 2);
define('ST_TABLE', 4);
define('ST_FEEDBACK', 8);

define('SC_NONE', 0);
define('SC_CAL', 1);
define('SC_FADE', 2);

// Always require the general_req
require('req/general_req.php');

function write_doctype($doctype) {
	switch ($doctype) {
		case DT_TRANS :
			echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">\r\n";
		break;
		default :
			echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">\r\n";
		break;
	}
}
function write_title($title) {
	echo "<title>".$title." - Let's Go Volunteer, Ibague Colombia</title>\r\n";
}
function write_metas($desc, $keywords) {
//	echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=ISO-8859-1\" />\r\n";
	echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />\r\n";
	echo sprintf("\t<meta name=\"description\" content=\"%s\" />\r\n", $desc);
	echo sprintf("\t<meta name=\"keywords\" content=\"%s,%s\" />\r\n", 'volunteer,south america,colombia,voluntario,trabajo', $keywords);
	echo sprintf("\t<meta name=\"author\" content=\"David Dunkley\">\r\n");
	echo "\t<meta name=\"robots\" content=\"index,follow\" />\r\n";
	echo sprintf("\t<meta name=\"copyright\" content=\"%s\">\r\n", date("M Y")); 
	echo "\t<meta name=\"msvalidate.01\" content=\"30B9F1E21B05D8DEB2430A292540E0F6\" />\r\n";
	echo "\t<meta name=\"google-site-verification\" content=\"LiT2EIfoh-LaCTZSp1X9mEDiIH7TXOFsegpfaPb-Lac\" />\r\n";
	echo "\t<meta name=\"y_key\" content=\"5556dee76593cf3a\" />\r\n";
}
function write_css($mode) {
	// Always include the styles css
	echo "<link rel=\"stylesheet\" href=\"/css/style.css\" type=\"text/css\" />\r\n";
	// Only include the forms css if asked
	if (($mode & ST_BOOK) != 0) {
		echo "\t<link rel=\"stylesheet\" href=\"/css/book.css\" type=\"text/css\" media=\"screen\" />\r\n";
	}
	if (($mode & ST_CONTACT) != 0) {
		echo "\t<link rel=\"stylesheet\" href=\"/css/contact.css\" type=\"text/css\" media=\"screen\" />\r\n";
	}
	if (($mode & ST_FEEDBACK) != 0) {
		echo "\t<link rel=\"stylesheet\" href=\"/css/feedback.css\" type=\"text/css\" media=\"screen\" />\r\n";
	}
	if (($mode & ST_TABLE) != 0) {
		echo "\t<link rel=\"stylesheet\" href=\"/css/table.css\" type=\"text/css\" media=\"screen\" />\r\n";
	}
}
function write_scripts($mode) {
	// if the browser is IE add the javascript for the round corners
/*	if (is_ie()) {
		echo "<script type=\"text/javascript\" src=\"/scripts/DD_roundies_0.0.2a-min.js\"></script>\r\n";
		echo "<script type=\"text/javascript\">\r\n";
		echo "DD_roundies.addRule('.text-box div, .feature-box p, .photo-box, .facts, .quotes, button', '20px');\r\n";
		echo "</script>\r\n";
	}
*/	// Only include the calendar javascript if asked
	if (($mode & SC_CAL) != 0) {
		echo "<script type=\"text/javascript\" src=\"/scripts/calendarDateInput.js\">\r\n";
		echo "/***********************************************\r\n";
		echo "* Jason's Date Input Calendar- By Jason Moon http://calendar.moonscript.com/dateinput.cfm\r\n";
		echo "* Script featured on and available at http://www.dynamicdrive.com\r\n";
		echo "* Keep this notice intact for use.\r\n";
		echo "***********************************************/\r\n";
		echo "</script>\r\n";
	}
	if (($mode & SC_FADE) != 0) {
		echo "<script type=\"text/javascript\" src=\"/scripts/ult_fad_ss.js\"></script>\r\n";
	}
}
function write_ga_snippet() {
	// only write the tracking code if it is the LIVE site
	$pos = strpos($_SERVER['HTTP_HOST'],"sitiosparausted.com");

	if($pos === false) {
		echo "<script type=\"text/javascript\">\r\n";

		echo "\t\tvar _gaq = _gaq || [];\r\n";
		echo "\t\t_gaq.push(['_setAccount', 'UA-10725972-3']);\r\n";
		echo "\t\t_gaq.push(['_trackPageview']);\r\n";

		echo "\t\t(function() {\r\n";
		echo "\t\tvar ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;\r\n";
		echo "\t\tga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';\r\n";
		echo "\t\tvar s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);\r\n";
		echo "\t\t})();\r\n";
		echo "\t</script>\r\n";
	}
}
?>