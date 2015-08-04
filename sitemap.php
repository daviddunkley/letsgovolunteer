<?php 
	//include_once("req/ga_req.php");
	require('req/head_req.php');
	require('req/body_req.php');

	$context = "home";
?>
<? write_doctype(DT_TRANS); ?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<? write_title("Sitemap for Lets Go Volunteer site");?>
	<? write_metas('This is a sitemap for the Let\'s Go Volunteer Site','sitemap,pages,site');?>
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
						<h1><img src="img/logos/lets_go_volunteer.gif" alt="Let's Go Volunteer"/>Let's Go Volunteer - Sitemap</h1>
						<hr/>
						<br /><br />
						<div class="sitemap">
							<ul class="tree">
								<li><a href="/">Home</a></li>
								<li>
									<a href="#">Programs</a>
									<ul>
										<li><a href="children.php">Children</a></li>
<!--										<li><a href="teenagers.php">Teenagers</a></li>
-->										<li><a href="women_at_risk.php">Woman At Risk</a></li>
										<li><a href="environmental.php">Environment</a></li>
										<li class="last"><a href="elderly.php">Elderly</a></li>
									</ul>							
								</li>
								<li>
									<a href="#">Volunteering</a>
									<ul>
										<li><a href="why_volunteer.php">Why Volunteer?</a></li>
										<li><a href="typical_day.php">A typical day</a></li>
										<li><a href="what_to_bring.php">What you need to bring</a></li>
										<li class="last"><a href="other_volunteers.php">What other volunteers have said</a></li>
									</ul>
								</li>
								<li>
									<a href="#">About Colombia</a>
									<ul>
										<li><a href="colombia.php">Colombia</a></li>
										<li><a href="ibague.php">Ibagué</a></li>
										<li class="last"><a href="safety.php">Safety and Support</a></li>
									</ul>
								</li>
								<li>
									<a href="#">About Us</a>
									<ul>
										<li><a href="about_us.php">About Us</a></li>
										<li><a href="staff.php">Staff</a></li>
										<li><a href="other_volunteers.php">What other volunteers have said</a></li>
										<li class="last"><a href="contact_us.php">Contact Us</a></li>
									</ul>
								</li>
								<li>
									<a href="#">Accommodation</a>
									<ul>
										<li class="last"><a href="volunteer_center.php">Volunteer Center</a></li>
									</ul>
								</li>
								<li>
									<a href="#">Prices</a>
									<ul>
										<li><a href="fees.php">Fees</a></li>
										<li class="last"><a href="why_pay.php">Why do I need to pay?</a></li>
									</ul>
								</li>
								<li>
									<a href="#">Contact Us</a>
									<ul>
										<li><a href="contact_us.php">Contact Us</a></li>
										<li class="last"><a href="ask_us.php">Ask us a question</a></li>
									</ul>
								</li>
								<li><a href="faqs.php">F.A.Q.s</a></li>
								<li><a href="apply_now.php">Apply Now</a></li>
								<li><a href="about_us.php">About Us</a></li>
								<li><a href="sitemap.php">Sitemap</a></li>
								<li class="last"><a href="partners.php">Partners</a></li>
							</ul>
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