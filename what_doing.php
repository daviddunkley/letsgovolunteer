<?php 
	require('req/head_req.php');
	require('req/body_req.php');

	$context = "volunteering";
?>
<? write_doctype(DT_TRANS); ?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<? write_page_info('Find out what you will be doing while volunteering','What you will be doing when volunteering');?>
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
						<h1><img src="img/logos/lets_go_volunteer.gif" alt="Let's Go Volunteer"/>What you will be doing?</h1>
						<hr/>
						<img src="img/inline/volunteer_basketball.gif" class="right"/>
						<p>Anything you can to help us reach and improve the opportunities these important groups of disadvantaged people.</p>
						<p>Every volunteer brings with them a lifetime of experience, talents and determination. It can also be a great chance to discover skills and ability you never knew you had or which have laid domaint for a long time.</p>
						<img src="img/inline/volunteer_painting.gif" class="left"/>
						<p>We have had volunteers how have painted muruals at our centers.</p>
						<p>Others have taken classes in Music, Mathematics, English and Geography.</p>
						<img src="img/inline/volunteer_teaching.gif" class="right"/>
						<p></p>
						<img src="img/inline/volunteer_fun.gif" class="right"/>
						<h2>What skills you will need</h2>
						<img src="img/inline/volunteer_reading_children.gif" class="left"/>
						<img src="img/inline/volunteer_construction.gif" class="right"/>
						<img src="img/inline/volunteer_building.gif" class="left"/>
						<ul>
							<li>Love</li>
							<li>Enthusiasm</li>
							<li>Patience</li>
							<li>Fun</li>
							<li>Tolerance</li>
							<li>Flexibility</li>
							<li>Curiosity</li>
							<li>Capacity to enjoy yourself</li>
							<li>Desire for helping others in need</li>
						</ul>
						<p>If you do not fulfill all of these conditions, we will make sure you develop them here.</p>

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
