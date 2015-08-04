<?php
	require('req/head_req.php');
	require('req/body_req.php');

	$context = "about_colombia";
?>
<? write_doctype(DT_TRANS); ?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<? write_title("Safety and Support for Volunteers");?>
	<? write_metas('Ibagué is a very safe city but we still make sure our volunteers are safe and cared for. We have a 24 hour a day emergency phone number for families to reach volunteers.','safety,support,cared,looked after,emergency,phone,family,clean,friendly');?>
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
						<h1><img src="img/logos/lets_go_volunteer.gif" alt="Let's Go Volunteer"/>Safety and Security</h1>
						<hr/>
						<img src="img/inline/volunteer_with_berenice.gif" class="right"/>
						<p>Ibagué is a very safe city, according to national and international standards, but still your safety is our priority, we are committed to you and your well being. For this purpose, we include the following services in all our programs:</p>
						<ul>
							<li>A 24 hour emergency number for you, and for friends and family to reach you.</li>
							<li>One of our staff members will meet you at the airport at your arrival.</li>
							<li>Unconditional support from staff and coordinators who will help you in any situation and who will be there for you through out all the process.</li>
							<li>Complete orientation about the do's and don'ts.</li>
							<li>We will help you settle down in a warm, clean and friendly accommodation.</li>
							<li>We will help you be a part of the community enrolling in social and cultural activities and thus making sure you are always happy on what you are doing.</li>
							<li>We will provide all the information you'll need about the country; how you can travel to different areas in Colombia, sight seeing and tourist information.</li>
						</ul>
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
