<?php 
	//include_once("req/ga_req.php");
	require('req/head_req.php');
	require('req/body_req.php');

	$context = "programs";
?>
<? write_doctype(DT_TRANS); ?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<? write_title("Elderly");?>
	<? write_metas('Our Elderly program allows volunteers to work with a number of organizations helping abandoned or neglected elderly. The volunteers help in the providing of food, accommodation and care by cooking and serving meals as well as the planning of activities and outings.','ibague,elderly,abandon,neglect,food,accommodation,care,medical,improve,cook,serve,meals,clean,assist,abuelitos');?>
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
						<h1><img src="img/logos/lets_go_volunteer.gif" alt="Let's Go Volunteer"/>Working with the Elderly</h1>
						<hr/>
						<img src="img/inline/caring_elderly.gif" alt="Caring for the Elderly" class="right"/>
						<p>For our elderly programs we work with a number of organizations around the city dedicated to helping this sadly often neglected group of Colombians. Many of the clients have been abandoned when they became a burden or simply were not able to afford the care they needed themselves.</p>
						<img src="img/inline/elderly_waiting.gif" alt="Elderly people waiting" class="left"/>
						<p>These organizations provide food, accommodation, medical assistance and seek to engaged and work with the clients to help improve their standard of living and care. In all cases they are run by truly amazing individuals who achieve incredible things based on very little resources and assistance.</p> 
						<p>As these organizations are run by others we fit in around their needs as much as we can. Meaning type of work that volunteers do is a little dependent on the skills required, the schedule and restrictions of the organization.</p>
						<img src="img/inline/volunteer_serving_elderly.gif" alt="Volunteer serving some elderly people" class="right"/>	<p>In the past we have had volunteers cooking and serving meals. They have cleaned the homes and assisted with the daily routines basic things like helping the elderly to shower and in one case cutting their hair! We have also had them planning outings and activities.</p>
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
