<?php 
	require('req/head_req.php');
	require('req/body_req.php');

	$context = "home";
?>
<? write_doctype(DT_TRANS); ?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<? write_title("Partners for Let's Go Volunteer");?>
	<? write_metas('Thank you to all our partners who support the Let\'s Go Volunteer Site','sitemap,pages,site');?>
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
						<h1><img src="img/logos/lets_go_volunteer.gif" alt="Let's Go Volunteer"/>Our Partners</h1>
						<hr/>
						<p>Lets go volunteer would like to that all of our partners for their help and support.</p>
						<a href="http://www.learnmorethanspanish.com/" target="_blank"><img src="img/logos/learn_more_than_spanish.gif" alt="Learn More Than Spanish" /></a>
						<a href="http://www.volunteersouthamerica.net/" target="_blank"><img src="img/logos/vsa_logo.gif" alt="Volunteer South America" /></a>
						<a href="http://www.goabroad.com/providers/lets-go-volunteer/programs/volunteer-in-colombia-from-as-little-as-usd-150-per-week-33479" target="_blank"><img src="img/logos/go_abroad.gif" alt="Go Abroad" /></a>
						<a href="http://cyeplanet.com/" target="_blank"><img src="img/logos/cyeplanet_logo.gif" alt="CYE Planet" /></a>
						<a href="http://www.volunteerlatinamerica.com/" target="_blank"><img src="img/logos/vla_logo.gif" alt="Volunteer Latin America" /></a>
						<a href="http://www.jardinbotanicosanjorge.org" target="_blank"><img src="img/logos/logo_sanjorge.gif" alt="Jardin Botanicos San Jorge" /></a>
						<a href="http://www.idealist.org/if/i/en/av/Org/161497-0" target="_blank"><img src="img/logos/idealist_logo.gif" alt="Idealist" /></a>
						<a href="http://www.traveltree.co.uk" target="_blank"><img src="http://www.traveltree.co.uk/images/tt150.gif" alt="Travel Tree" /></a>
						<a href="http://www.anyworkanywhere.com/letsgovolunteer.html" target="_blank"><img src="img/logos/awaw_logo.gif" alt="Any Work Anywhere" /></a>
						<a href="http://www.ergopoliton.gr/index.php?option=com_content&task=view&id=6072&Itemid=88889046" target="_blank"><img src="img/logos/citizen_in_deed.gif" alt="Citizen in deed" /></a>
						<a href="http://www.lai.at/links/arbeit-praktika-volontariate-zivildienst" target="_blank"><img src="img/logos/lai_logo.gif" alt="Lateinamerike Institut" /></a>
						<a href="http://languagestudy.studentuniverse.com/su-listingsp3.cfm/listing/33516/hostx/studentuniverse" target="_blank"><img src="img/logos/su_logo.gif" alt="Student Universe" /></a>
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
