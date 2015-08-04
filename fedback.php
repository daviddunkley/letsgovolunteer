<?php 
	require('req/head_req.php');
	require('req/body_req.php');

	$context = "apply_now";
?>
<? write_doctype(DT_TRANS); ?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<? write_title('Lets Go Volunteer - Apply Now');?>
	<? write_metas($context); ?>
	<? write_css(ST_BASIC | ST_BOOK); ?>
	<? write_scripts(SC_FADE | SC_CAL); ?>
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
						<h1><img src="img/logos/lets_go_volunteer.gif" alt="Let's Go Volunteer"/>Apply Now</h1>
						<hr/>
						<p>Thank you for applying to one of our programs. Someone will contact you in the next few days.</p>
						<p>In the meantime why not check out our <a href="http://www.facebook.com/pages/Lets-Go-Volunteer/100306182016 ">Facebook page</a> and look at the many photos, videos and comments from existing and former volunteers.</p>
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
