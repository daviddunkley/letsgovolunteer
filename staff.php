<?php 
	require('req/head_req.php');
	require('req/body_req.php');

	$context = "locations";
?>
<? write_doctype(DT_TRANS); ?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<? write_title('Our Staff')?>
	<? write_metas('We are proud of our staff. They work hard to make sure volunteers are safe.', 'staff,proud,safe,cared,experience,berenice'); ?>
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
						<h1><img src="img/logos/lets_go_volunteer.gif" alt="Let's Go Volunteer"/>Our staff</h1>
						<hr/>
						<p>We are very proud of our staff. They work very hard to make sure our volunteers are safe, well cared for as well as having the experience they are looking for.</p>
						<div class="link-box">
							<h3>Carlos<br/>Director</h3>
							<img src="img/staff/carlos.gif" alt="Carlos, Director" class="left"/>
						</div>
						<div class="link-box">
							<h3>Berenice<br/>Co-ordinator/Host</h3>
							<img src="img/staff/berenice.gif" alt="Berenice, Co-ordinator/Host" class="right"/>
						</div>
						<div class="link-box">
							<h3>Benjamin<br/>Volunteer Co-ordinator</h3>
							<img src="img/staff/benjamin.jpg" width="150" alt="Benjamin, Volunteer Coordinator" class="left"/>
						</div>
						<div class="link-box">
							<h3>Leydi<br/>Teacher (Manos Amigas)</h3>
							<img src="img/staff/leidy_baquero.jpg" alt="Leydi, Teacher (Manos Amigas)" class="right" />
						</div>
<!--						<div class="link-box">
							<h3>Edwin<br/>Teacher (San Jose)</h3>
							<img src="img/staff/edwin_barragan.gif" alt="Edwin, Teacher (San Jose)" class="left"/>
						</div>
-->						<div class="link-box">
							<h3>Carolina<br/>Teacher (San Jose)</h3>
							<img src="img/staff/carolina_cardona.jpg" alt="Carolina, Teacher (San Jose)" class="left"/>
						</div>
						<div class="link-box">
							<h3>Blanca<br/>Cook (San Jose)</h3>
							<img src="img/staff/blanca_cecilia.jpg" alt="Blanca, Cook (San Jose)" class="right"/>
						</div>
						<div class="link-box">
							<h3>Diana<br/>Cook (San Jose)</h3>
							<img src="img/staff/diana_cardona.jpg" alt="Diana, Cook (San Jose)" class="left" />
						</div>
<!--						<div class="link-box">
							<h3>Nury<br/>Cook (Manos Amigas)</h3>
							<img src="img/staff/nury_mora.gif" alt="Nury, Cook (Manos Amiga)" class="left" />
						</div>
-->						<!-- Column 1 end -->
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
