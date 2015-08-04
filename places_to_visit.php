<?php 
	require('req/head_req.php');
	require('req/body_req.php');

	$context = "volunteering";
?>
<? write_doctype(DT_TRANS); ?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<? write_page_info('Find other places to visit close to Ibague for weekends or longer trips','Places to visit near Ibague');?>
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
						<h1><img src="img/logos/lets_go_volunteer.gif" alt="Let's Go Volunteer"/>Places to Visit</h1>
						<hr/>
						<img src="img/inline/volunteer_botera.gif" class="left"/>
						<img src="img/inline/volunteer_pueblo.gif" class="right"/>
						<img src="img/inline/volunteer_medellin.gif" class="left"/>
						<img src="img/inline/volunteer_travel.gif" class="right"/>
						<img src="img/inline/volunteer_parapent.gif" class="left"/>
						<img src="img/inline/volunteer_adventure.gif" class="right"/>
						<img src="img/inline/group_martinica.gif" class="left"/>
						<img src="img/inline/san_agustin.gif" class="right"/>
						<img src="img/inline/trip_los_nevados.gif" class="left"/>
						<img src="img/inline/visit_avocado_farm.gif" class="right"/>
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
