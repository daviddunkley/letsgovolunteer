<?php 
	require('req/head_req.php');
	require('req/body_req.php');

	$context = "home";
?>
<? write_doctype(DT_TRANS); ?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<? write_title("Home");?>
	<? write_metas('We are a grassroots organization that invites volunteers to work with children, woman in need, the environment and the elderly. We accept all volunteers aged between 16 and 80.','enthusiastic,grass roots,opportunities,disadvantaged,culture,programs,children,women in need,environmental,elderly');?>
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
						<h1><img src="img/logos/lets_go_volunteer.gif" alt="Let's Go Volunteer"/>Welcome to Let's Go Volunteer</h1>
						<hr/>
						<p>Let´s go volunteer is a group of young, enthusiastic local people who have discovered the joy of helping, giving and sharing with those in need.</p>
						<img src="img/inline/children_volunteer_group.gif" alt="Working with Children" class="right" />
						<p>Our grass-roots programs provide real opportunities to help disadvantaged children, women and the elderly living in our city and our volunteers form an important part of making that happen.</p> 
						<p>Let's Go Volunteer welcomes volunteers from every country on earth. We do not discriminate based on age, religion, sexual orientation, skin color or any other characteristic.</p>
						<p>We simply hope to have enthusiastic, loving and caring volunteers, who are flexible, tolerant and sensitive to the needs of fellow human beings.</p>
						<p>We look for volunteers who are between the ages of 16 and 80, who would want to help while experiencing a new culture and enjoy themselves.</p>
						<h2>Our Programs</h2>
						<hr/>
						<div class="link-box">
							<h3><a href="children.php">Children</a></h3>
							<a href="children.php"><img src="img/feat/children.gif" alt="Children" /></a>
						</div>
						<div class="link-box">
							<h3><a href="women_at_risk.php">Women in need</a></h3>
							<a href="women_at_risk.php"><img src="img/feat/women_risk.gif" alt="Women in need" /></a>
						</div>
						<div class="link-box">
							<h3><a href="elderly.php">Elderly</a></h3>
							<a href="elderly.php"><img src="img/feat/elderly.gif" alt="Elderly" /></a>
						</div>
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
