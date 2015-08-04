<?php 
	//include_once("req/ga_req.php");
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
							<h3>Maria del Pilar<br/>Director</h3>
							<img src="img/staff/maria.gif" alt="Maria, Director" class="right"/>
						</div>
						<div class="link-box">
							<h3>Berenice<br/>Co-ordinator/Host</h3>
							<img src="img/staff/berenice.gif" alt="Berenice, Co-ordinator/Host" class="left"/>
						</div>
						<div class="link-box">
							<h3>Benjamin<br/>Volunteer Co-ordinator</h3>
							<img src="img/staff/benjamin.jpg" width="150" alt="Benjamin, Volunteer Coordinator" class="right"/>
						</div>
						<div class="link-box">
							<h3>Yamile<br/>Manager (San Jose)</h3>
							<img src="img/staff/yamile.gif" alt="Yamile, Teacher (San Jose)" class="left" />
						</div>
						<div class="link-box">
							<h3>Eli Ana<br/>Teacher (Yuldaima)</h3>
							<img src="img/staff/eli_ana.gif" alt="Eli Ana, Teacher (Yuldaima)" class="right"/>
						</div>
						<div class="link-box">
							<h3>Jimena<br/>Dance/Sport Teacher</h3>
							<img src="img/staff/jimena.gif" alt="Jimena, Dance/Sport Teacher" class="left"/>
						</div>
						<div class="link-box">
							<h3>Ren<br/>Art Teacher</h3>
							<img src="img/staff/ren.jpg" alt="Ren, Art Teacher" class="right"/>
						</div>
						<div class="link-box">
							<h3>Pilar<br/>Cook (Yuldaima)</h3>
							<img src="img/staff/pilar.gif" alt="Pilar, Cook (Yuldaima)" class="left" />
						</div>
						<div class="link-box">
							<h3>Rocío<br/>Teacher (San Jose)</h3>
							<img src="img/staff/rosio.gif" alt="Rocío, Teacher (San Jose)" class="right" />
						</div>
						<div class="link-box">
							<h3>Yanaire<br/>Teacher (San Jose)</h3>
							<img src="img/staff/yanaire.gif" alt="Yanaire, Teacher (San Jose)" class="left" />
						</div>
						<div class="link-box">
							<h3>Rocío<br/>Teacher (Huellas de amor)</h3>
							<img src="img/staff/rosio_hda.gif" alt="Rocío, Teacher (Huellas de amor)" class="right" />
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
						<? write_lmts_box($context)?>
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
