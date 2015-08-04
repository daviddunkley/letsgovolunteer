<?php 
	//include_once("req/ga_req.php");
	require('req/head_req.php');
	require('req/body_req.php');

	$context = "programs";
?>
<? write_doctype(DT_TRANS); ?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<? write_page_info('Find out about volunteering with our teenager program','Volunteering with Teenagers');?>
	<? write_css(ST_BASIC); ?>
	<? write_scripts(SC_FADE); ?>
	<? write_ga_snippet();?>
</head>
<body>
	<div id="header">
		<? write_main_menu($context); ?>
	</div>
	<div id="container">
		<? write_image_hdr($context); ?>
		<div class="colmask rightmenu">
			<div class="colleft">
				<div class="col1wrap">
					<div class="col1">
						<!-- Column 1 start -->
						<h1><img src="img/logos/lets_go_volunteer.gif" alt="Let's Go Volunteer"/>Working with Teenagers</h1>
						<hr/>
						<p>Our teenagers program is based on education. We believe that through cultural activities, education, sports, and art crafts we can keep teens away from the street and its dangers.</p>
						<img src="img/inline/teenagers_volunteer.gif" class="left"/>
						<p>With this program we contribute to the local community and the country by helping them with their school work as well as teaching them languages. We try to participate in their growth process so that they can develop useful skills and new knowledge. 
						<img src="img/inline/teenagers_english.gif" class="right"/>
						<p>The ability to speak even a small amount of English opens opportunities for young Colombians. This along with some basic skills can make all the difference and can led to getting a job in the future. We focus heavily on trying to give youngsters better opportunities to give them a chance to improve their lives.</p>
						<img src="img/inline/volunteer_teaching.gif" class="left"/>						
						<p>Exchanging ideas and perspectives encourage them to think and communicate about their lives in different ways and empower them to overcome their limited reality. In small groups we help them earn more self-respect, and realize that no matter how limited their reality could be, they can still shape their lives in positive ways, stay out of trouble and live a fulfilling life. Our overall goal is to improve their living standards and contribute to their future.</p>
						<!-- Column 1 end -->
					</div>
				</div>
				<div class="col2">
					<!-- Column 2 start -->
					<div class="quotes">
						<? write_quotes($context)?>
						<hr/>
						<? write_facebook_box($context)?>
						<hr/>
						<? write_vsa_box($context)?>
						<hr/>
						<? write_video_box($context)?>
					</div>
					<!-- Column 2 end -->
				</div>
		    </div>
		</div>
	</div>
	<div id="footer">
		<? write_footer_menu($context); ?>
	</div>
</body>
</html>
