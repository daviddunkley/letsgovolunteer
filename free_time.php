<?php 
	//include_once("req/ga_req.php");
	require('req/head_req.php');
	require('req/body_req.php');

	$context = "volunteering";
?>
<? write_doctype(DT_TRANS); ?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<? write_page_info('Find out all the things there are to do in your free time in Ibague','Free time in Ibague after volunteering');?>
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
						<h1><img src="img/logos/lets_go_volunteer.gif" alt="Let's Go Volunteer"/>Free time and Activities</h1>
						<hr/>
						<img src="img/inline/volunteer_pueblo.gif" class="left"/>
						<p>Before you start your volunteer program, afterwards or during the weekends, you should go traveling an have a taste of the different areas of Colombia and neighboring countries. We are aware of the importance of having fun and enjoying your free time, and we think that you will be able to understand more about the culture and the country by traveling.</p>
						<img src="img/inline/volunteers_jeep.gif" class="right"/>
						<p>We encourage all opportunities for volunteers to broaden their experience of the host culture by field trips and cultural opportunities. We want you to experience all the beautiful things that our country has to offer in a safe, educational and fun manner.
						</p>
						<img src="img/inline/volunteers_bars.gif" class="left"/>
						<img src="img/inline/volunteer_adventure.gif" class="left"/>
						<img src="img/inline/volunteer_gym.gif" class="left"/>
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
