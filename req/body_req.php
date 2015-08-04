<?php
function write_gcc_query() {
	// only write the google conversion code if it is the LIVE site

	$pos = strpos($_SERVER['HTTP_HOST'],"sitiosparausted.com");

	if($pos === false) {	
		echo "<!-- Google Code for Applied Online Conversion Page -->\r\n";
		echo "\t<script type=\"text/javascript\">\r\n";
		echo "\t/* <![CDATA[ */\r\n";
		echo "\tvar google_conversion_id = 972237417;\r\n";
		echo "\tvar google_conversion_language = \"en\";\r\n";
		echo "\tvar google_conversion_format = \"1\";\r\n";
		echo "\tvar google_conversion_color = \"ffffff\";\r\n";
		echo "\tvar google_conversion_label = \"4FPMCKfq5wIQ6dTMzwM\";\r\n";
		echo "\tvar google_conversion_value = 0;\r\n";
		echo "\t/* ]]> */\r\n";
		echo "\t</script>\r\n";
		echo "\t<script type=\"text/javascript\" src=\"http://www.googleadservices.com/pagead/conversion.js\">\r\n";
		echo "\t</script>\r\n";
		echo "\t<noscript>\r\n";
		echo "\t<div style=\"display:inline;\">\r\n";
		echo "\t<img height=\"1\" width=\"1\" style=\"border-style:none;\" alt=\"\" src=\"http://www.googleadservices.com/pagead/conversion/972237417/?label=4FPMCKfq5wIQ6dTMzwM&amp;guid=ON&amp;script=0\"/>\r\n";
		echo "\t</div>\r\n";
		echo "\t</noscript>";
	}
}
function write_gcc_applied() {
	// only write the google conversion code if it is the LIVE site

	$pos = strpos($_SERVER['HTTP_HOST'],"sitiosparausted.com");

	if($pos === false) {	
		echo "<!-- Google Code for Applied Online Conversion Page -->\r\n";
		echo "\t<script type=\"text/javascript\">\r\n";
		echo "\t/* <![CDATA[ */\r\n";
		echo "\tvar google_conversion_id = 972237417;\r\n";
		echo "\tvar google_conversion_language = \"en\";\r\n";
		echo "\tvar google_conversion_format = \"2\";\r\n";
		echo "\tvar google_conversion_color = \"ffffff\";\r\n";
		echo "\tvar google_conversion_label = \"X2x9CJ_r5wIQ6dTMzwM\";\r\n";
		echo "\tvar google_conversion_value = 0;\r\n";
		echo "\t/* ]]> */\r\n";
		echo "\t</script>\r\n";
		echo "\t<script type=\"text/javascript\" src=\"http://www.googleadservices.com/pagead/conversion.js\">\r\n";
		echo "\t</script>\r\n";
		echo "\t<noscript>\r\n";
		echo "\t<div style=\"display:inline;\">\r\n";
		echo "\t<img height=\"1\" width=\"1\" style=\"border-style:none;\" alt=\"\" src=\"http://www.googleadservices.com/pagead/conversion/972237417/?label=X2x9CJ_r5wIQ6dTMzwM&amp;guid=ON&amp;script=0\"/>\r\n";
		echo "\t</div>\r\n";
		echo "\t</noscript>";
	}
}
function write_main_menu($context) {
	echo "<ul>\r\n";
	echo "\t\t\t<li".(($context == 'home') ? " class=\"active\"" : "")."><a href=\"home.php\">Home</a></li>\r\n";
	echo "\t\t\t<li".(($context == 'programs') ? " class=\"active\"" : "")."><a href=\"#\">Programs</a>\r\n";
	echo "\t\t\t\t<ul>\r\n";
	echo "\t\t\t\t\t<li><a href=\"children.php\">Working with Children</a></li>\r\n";
	echo "\t\t\t\t\t<li><a href=\"women_at_risk.php\">Working with Women in need</a></li>\r\n";
	echo "\t\t\t\t\t<li><a href=\"elderly.php\">Working with the Elderly</a></li>\r\n";
	echo "\t\t\t\t</ul>\r\n";
	echo "\t\t\t</li>\r\n";
	echo "\t\t\t<li".(($context == 'volunteering') ? " class=\"active\"" : "")."><a href=\"#\">Volunteering</a>\r\n";
	echo "\t\t\t\t<ul>\r\n";
	echo "\t\t\t\t\t<li><a href=\"why_volunteer.php\">Why volunteer?</a></li>\r\n";
	echo "\t\t\t\t\t<li><a href=\"typical_day.php\">A Typical Day</a></li>\r\n";
	echo "\t\t\t\t\t<li><a href=\"what_to_bring.php\">What you need to bring</a></li>\r\n";
	echo "\t\t\t\t\t<li><a href=\"other_volunteers.php\">What other volunteers have said</a></li>\r\n";
	echo "\t\t\t\t\t<li><a href=\"photo_gallery.php\" target=\"_photos\">Photo Gallery</a></li>\r\n";
	echo "\t\t\t\t</ul>\r\n";
	echo "\t\t\t</li>\r\n";
	echo "\t\t\t<li".(($context == 'about_colombia') ? " class=\"active\"" : "")."><a href=\"#\">About Colombia</a>\r\n";
	echo "\t\t\t\t<ul>\r\n";
	echo "\t\t\t\t\t<li><a href=\"colombia.php\">Colombia</a></li>\r\n";
	echo "\t\t\t\t\t<li><a href=\"ibague.php\">Ibagué</a></li>\r\n";
//	echo "\t\t\t\t\t<li><a href=\"free_time.php\">Free time and activities</a></li>\r\n";
//	echo "\t\t\t\t\t<li><a href=\"places_to_visit.php\">Places to visit</a></li>\r\n";
	echo "\t\t\t\t\t<li><a href=\"safety.php\">Safety and Support</a></li>\r\n";
	echo "\t\t\t\t</ul>\r\n";
	echo "\t\t\t</li>\r\n";
	echo "\t\t\t<li".(($context == 'about_us') ? " class=\"active\"" : "")."><a href=\"#\">About Us</a>\r\n";
	echo "\t\t\t\t<ul>\r\n";
	echo "\t\t\t\t\t<li><a href=\"about_us.php\">About Us</a></li>\r\n";
	echo "\t\t\t\t\t<li><a href=\"staff.php\">Staff</a></li>\r\n";
	echo "\t\t\t\t\t<li><a href=\"other_volunteers.php\">What other volunteers have said</a></li>\r\n";
	echo "\t\t\t\t\t<li><a href=\"contact_us.php\">Contact Us</a></li>\r\n";
	echo "\t\t\t\t</ul>\r\n";
	echo "\t\t\t</li>\r\n";
	echo "\t\t\t<li".(($context == 'accommodation') ? " class=\"active\"" : "")."><a href=\"#\">Accommodation</a>\r\n";
	echo "\t\t\t\t<ul>\r\n";
	echo "\t\t\t\t\t\t<li><a href=\"volunteer_center.php\">Volunteer Center</a></li>\r\n";
//	echo "\t\t\t\t\t\t<li><a href=\"homestays.php\">Homestays</a></li>\r\n";
	echo "\t\t\t\t</ul>\r\n";
	echo "\t\t\t</li>\r\n";
	echo "\t\t\t<li".(($context == 'prices') ? " class=\"active\"" : "")."><a href=\"#\">Prices</a>\r\n";
	echo "\t\t\t\t<ul>\r\n";
	echo "\t\t\t\t\t<li><a href=\"fees.php\">Our Fees</a></li>\r\n";
	echo "\t\t\t\t\t<li><a href=\"why_pay.php\">Why do I need to pay?</a></li>\r\n";
	echo "\t\t\t\t</ul>\r\n";
	echo "\t\t\t</li>\r\n";
	echo "\t\t\t<li".(($context == 'contact_us') ? " class=\"active\"" : "")."><a href=\"#\">Contact Us</a>\r\n";
	echo "\t\t\t\t<ul>\r\n";
	echo "\t\t\t\t\t<li><a href=\"contact_us.php\">Contact Us</a></li>\r\n";
	echo "\t\t\t\t\t<li><a href=\"ask_us.php\">Ask Us A Question</a></li>\r\n";
	echo "\t\t\t\t</ul>\r\n";
	echo "\t\t\t</li>\r\n";
	echo "\t\t\t<li".(($context == 'faq') ? " class=\"active\"" : "")."><a href=\"faqs.php\">FAQs</a></li>\r\n";
	echo "\t\t\t<li".(($context == 'apply_now') ? " class=\"active\"" : "")."><a href=\"apply_now.php\" class=\"highlight\">Apply Now</a></li>\r\n";
	echo "\t\t</ul>\r\n";
}
function write_image_hdr($context) {
	echo "<div id=\"hdr_img\">\r\n";
	echo "\t\t\t<script type=\"text/javascript\">\r\n";
	echo "\t\t\t\tnew fadeshow(fadeimages, 800, 252, 0, 3000, 0, \"R\");\r\n";
	echo "\t\t\t</script>\r\n";
	echo "\t\t</div>\r\n";
	echo "\t\t<div><b>YOU CAN EMAIL US AT<a href=\"mailto:info@letsgovolunteer.info\">info@letsgovolunteer.info</a></b></div>";
}
function write_footer_menu($context) {
	echo "<ul>\r\n";
	echo "\t\t\t<li><a href=\"about_us.php\">About us</a></li>\r\n";
	echo "\t\t\t<li><a href=\"sitemap.php\">Site Map</a></li>\r\n";
	echo "\t\t\t<li><a href=\"ask_us.php\">Ask us a question</a></li>\r\n";
	echo "\t\t\t<li><a href=\"partners.php\">Partners</a></li>\r\n";
	echo "\t\t</ul>\r\n";
	echo "\t\t<p>Copyright Let's Go Volunteer &copy; ".date("Y")."&nbsp;<a href=\"http://jigsaw.w3.org/css-validator/check/referer\"><img style=\"border:0;width:88px;height:31px\"  src=\"http://jigsaw.w3.org/css-validator/images/vcss-blue\" alt=\"Valid CSS!\" /></a></p>\r\n";
}
function write_video_box($context) {
	echo "<div class=\"quote-box\">\r\n";
	echo "\t\t\t\t\t\t\t<h3>We made this video to show you what we do</h3>\r\n";
	echo "\t\t\t\t\t\t\t<video controls=\"controls\" width=\"260\" name=\"Lets Go Volunteer\"  src=\"/video/letsgovolunteer.mov\"></video>\r\n";
	echo "\t\t\t\t\t\t</div>\r\n";
}
function write_facebook_box($context) {
	echo "<div class=\"quote-box\">\r\n";
	echo "\t\t\t\t\t\t\t<a href=\"http://www.facebook.com/letsgovolunteer\" target=\"_new\"><img src=\"img/logos/facebook.gif\" alt=\"Facebook\" /></a>\r\n";
	echo "\t\t\t\t\t\t\t<p>Visit us on<a href=\"http://www.facebook.com/letsgovolunteer\" target=\"_new\">Facebook</a>to see photos, videos, comments, or get in touch with the staff, current and former volunteers.</p>\r\n";
	echo "\t\t\t\t\t\t</div>\r\n";
}
function write_vsa_box($context) {
	echo "<div class=\"quote-box\">\r\n";
	echo "\t\t\t\t\t\t\t<a href=\"http://www.volunteersouthamerica.net/\" target=\"_new\"><img src=\"img/logos/vsa_small_logo.gif\" alt=\"Volunteer South America\" /></a>\r\n";
	echo "\t\t\t\t\t\t\t<p>We are very appreciative of the support we receive from<a href=\"http://www.volunteersouthamerica.net/\" target=\"_new\">Volunteer South America</a></p>\r\n";
	echo "\t\t\t\t\t\t</div>\r\n";
}

function write_quotes($context) {
	$rand1 = rand(0,32);

	do {
		$rand2 = rand(0,32);
	} while ($rand2 == $rand1);
	do {
		$rand3 = rand(0,32);
	} while (($rand3 == $rand1) || ($rand3 == $rand2)); 
	do {
		$rand4 = rand(0,32);
	} while (($rand4 == $rand1) || ($rand4 == $rand2) || ($rand4 == $rand3));

	write_idx_quote($rand1,true);
	echo "\t\t\t\t\t\t<hr/>\r\n";
	write_idx_quote($rand2,false);
	echo "\t\t\t\t\t\t<hr/>\r\n";
	write_idx_quote($rand3,false);
	echo "\t\t\t\t\t\t<hr/>\r\n";
	write_idx_quote($rand4,false);
}
function write_idx_quote($index,$first) {
	switch ($index) {
		case 0: 
			write_quote("Sarah-Rochedreux.gif", "Sarah, Australia", "I take away the reward of knowing that I've contributed something positive to these great kids' lives.",$first);
			break;
	    case 1:
			write_quote("Sarah-Rochedreux.gif", "Sarah, Australia", "I think the program is a really positive influence for these children.",$first);
			break;
		case 2:
			write_quote("James-Getgood.gif", "James, UK", "It was very interesting and varied, I enjoyed my time very much.",$first);
			break;
		case 3:
			write_quote("James-Getgood.gif", "James, UK", "The children were wonderful and I felt like I gained a good insight into the lives of the people in Ibagué",$first);
			break;
		case 4:
			write_quote("Hyo-Jin-Seo.gif", "Hyo Jin, South Korea", "The children were amazing, everyday they greeted me with a kiss on the check.",$first);
			break;
		case 5:
			write_quote("Hyo-Jin-Seo.gif", "Hyo Jin, South Korea", "It was a the highlight of my trip through South America.",$first);
			break;
		case 6:
			write_quote("Leonardo-Cardona.gif", "Jens, Norway", "Best experience ever. The people that work here and all the children are wonderful. I enjoyed contributing to anything I could whether it was cooking, drawing, reading...",$first);
			break;
		case 7:
			write_quote("Leonardo-Cardona.gif", "Jens, Norway", "For someone like me trying to discover my Colombian roots the whole experience has had a real positive effect on me.",$first);
			break;
		case 8:
			write_quote("John-McIntosh.gif", "John, UK", "I had never worked with children before and to be honest I was a little scared. However I have learnt so much from working with the children here.",$first);
			break;
		case 9:
			write_quote("John-McIntosh.gif", "John, UK", "We did some great activities in the weekends. I loved the hot springs and the hike up Martinica.",$first);
			break;
		case 10:
			write_quote("Caroline-Maes.gif", "Caroline, Belgium", "I got a very good view of how locals live in Ibagué. I got to be in close contact with a lot of the kids, which has been a rewarding experience.",$first);
			break;
		case 11:
			write_quote("Anders-Thykaer.gif", "Anders, Denmark", "It has been interesting working with the kids and getting to know a little about Colombian life.",$first);
			break;
		case 12:
			write_quote("Juliette-Marotta.gif", "Juliette, USA", "Berenice, William and Carolina are truly amazing. They made me feel very comfortable all the time.",$first);
			break;
		case 13:
			write_quote("Richard-Prior.gif", "Richard, Canada", "I spent a month working with Let's Go Volunteer and it was an incredible experience. I can't speak highly enough of Berenice and her family who made our time in Ibagué a pleasure.",$first);
			break;
		case 14:
			write_quote("Richard-Prior.gif", "Richard, Canada", "The programs were well run, the benefit to the community was obvious and as a volunteer I truly felt like I had something to add.",$first);
			break;
		case 15:
			write_quote("Richard-Prior.gif", "Richard, Canada", "I really enjoyed the location, which was a concern before arriving. The area was friendly, safe and close to town.",$first);
			break;
		case 16:
			write_quote("Richard-Prior.gif", "Richard, Canada", "I'm really sad to be going.<br/><br/><br/><br/>",$first);
			break;
		case 17:
			write_quote("Richard-Prior.gif", "Richard, Canada", "I am leaving with a greater awareness of how little it take to make someone else's life so much better. I have a ton of memories and 800 great photos.",$first);
			break;
		case 18:
			write_quote("Richard-Prior.gif", "Richard, Canada", "I am leaving with a greater awareness of how little it take to make someone else's life so much better. I have a ton of memories and 800 great photos.",$first);
			break;
		case 19:
			write_quote("Liliana-Murphy.gif", "Liliana, Canada", "The kids are so great and amazing. When we left they organized dances, poems, songs and made us beautiful cards.",$first);
			break;
		case 20:
			write_quote("Liliana-Murphy.gif", "Liliana, Canada", "I really feel like we were able to \"make a difference\" if only in the daily life of the kids by providing a healthy hot meal and being affectionate, fun and helpful.",$first);
			break;
		case 21:
			write_quote("Corina-Benson.gif", "Corina, USA", "It was great! I arrived on a Saturday, got a great tour of Bogotá, then came to Ibagué the next day. From the first moment I felt comfortable and welcome. I plan to come back and volunteer again.",$first);
			break;
		case 22:
			write_quote("Corina-Benson.gif", "Corina, USA", "Berenice is amazing!!!<br/><br/><br/><br/>",$first);
			break;
		case 23:
			write_quote("Harsimranjit-Singh.gif", "Harsimranjit, Canada", "I loved my experience with Let's Go Volunteer, especially the kids.",$first);
			break;
		case 24:
			write_quote("Lesa-Ross.gif", "Lesa, UK", "Visiting where the kids live has been interesting, inspiring, heart warming and made us realise how lucky we are.",$first);
			break;
		case 25:
			write_quote("Lesa-Ross.gif", "Lesa, UK", "All the children are lovely, polite and have big smiles - quite a contrast to some of the children in the UK who have so much more.",$first);
			break;
		case 26:
			write_quote("Giovanni-Clayden.gif", "Giovanni, UK", "I think I now have a bigger appreciation for other peoples lives. How fortunate people of the UK are from a monetary perspective.",$first);
			break;
		case 27:
			write_quote("Giovanni-Clayden.gif", "Giovanni, UK", "I think I now have a bigger appreciation for other peoples lives. How fortunate people of the UK are from a monetary perspective.",$first);
			break;
		case 28:
			write_quote("Evelyne-Engleder.gif", "Evelyne, Austria", "It is amazing to have the chance to live with a local family. It gives you the chance to learn about the differences between the Colombian culture and your own.",$first);
			break;
		case 29:
			write_quote("Evelyne-Engleder.gif", "Evelyne, Austria", "I loved that I was able to have the possibility to try all the local and typical food and of course you can improve your Spanish.",$first);
			break;
		case 30:
			write_quote("Evelyne-Engleder.gif", "Evelyne, Austria", "I think what impressed me the most was how happy the kids are though they do not have many things and living in such small basic houses.",$first);
			break;
		case 31:
			write_quote("Katie-Butz.gif", "Katie, Canada", "I take away several things, but the most important is the friendships I've formed with people and a sense of being truly blessed.",$first);
			break;
		default: 
			write_quote("Katie-Butz.gif", "Katie, Canada", "It is so encouraging to know that people who have hardly anything can still be so happy. It makes me realize how lucky I am to have what I have, and not to take anything for granted",$first);
			break;
	}
}
function write_quote($img, $who, $quote, $first) {
	if (!$first) {
		echo "\t\t\t\t\t\t";
	}
	echo "<div class=\"quote-box\">\r\n";
	echo "\t\t\t\t\t\t\t<img src=\"img/quotes/".$img."\" alt=\"".$who."\" />\r\n";
	echo "\t\t\t\t\t\t\t<h3>".$who."</h3>\r\n";
	echo "\t\t\t\t\t\t\t<p>".$quote."</p>\r\n";
	echo "\t\t\t\t\t\t</div>\r\n";
}
?>