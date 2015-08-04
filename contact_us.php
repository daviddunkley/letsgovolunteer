<?php 
	//include_once("req/ga_req.php");
	require('req/head_req.php');
	require('req/body_req.php');

	$context = "about_us";
?>
<? write_doctype(DT_TRANS); ?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<? write_title('Contact Us')?>
	<? write_metas('Volunteers can contact us directly to ask any questions they may have. info@letsgovolunteer.info', 'contact,phone,skype,email,address'); ?>
	<? write_css(ST_BASIC | ST_TABLE); ?>
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
						<h1><img src="img/logos/lets_go_volunteer.gif" alt="Let's Go Volunteer"/>Contact Us</h1>
						<hr/>
						<br /><br /><br />
						<h2>Let's Go Volunteer Coordinator: Benjamin Ramos</h2>
						<hr/>
						<table class="contact">
							<tr>
								<td><img src="img/logos/phone_logo.gif" alt="Phone Number" class="left"/></td>
								<td>+57 301-600-6049<br />+57 8-260-8621<br />+57 8-260-4141</td>
							</tr>
							<tr>
								<td><img src="img/logos/email_logo.gif" alt="Email Address" class="left"/></td>
								<td><a href="mailto:info@letsgovolunteer.info">info@letsgovolunteer.info</td>
							</tr>
							<tr>
								<td><img src="img/logos/skype_logo.gif" alt="Skype" class="left"/></td>
								<td>letsgovolunteer</td>
							</tr>
							<tr>
								<td><img src="img/logos/facebook.gif" alt="Facebook" class="left" width="30" height="30" /></td>
								<td><a href="http://www.facebook.com/letsgovolunteer">letsgovolunteer</a></td>
							</tr>
							<tr>
								<td><img src="img/logos/mail_logo.gif" alt="Mail Address" class="left"/></td>
								<td>Let's Go Volunteer<br/><a href="http://maps.google.com/maps?f=q&source=s_q&hl=en&geocode=&q=4.431102,+-75.238624&sll=4.431156,-75.238774&sspn=0.015553,0.017703&ie=UTF8&z=17" target="_map">Cra 5ª sur #22-40<br/>Ibagué<br/>Colombia</a></td>
							</tr>
						</table>
						<br/>
						<h2>Let's Go Volunteer Director: Carlos Peñuela</h2>
						<hr/>
						<table class="contact">
							<tr>
								<td><img src="img/logos/phone_logo.gif" alt="Phone Number" class="left"/></td>
								<td>+57 310-884-8041<br/>+57 1-218-8593</td>
							</tr>
							<tr>
								<td><img src="img/logos/email_logo.gif" alt="Email Address" class="left"/></td>
								<td>colom12@yahoo.com</td>
							</tr>
							<tr>
								<td><img src="img/logos/mail_logo.gif" alt="Mail Address" class="left"/></td>
								<td>Let's Go Volunteer<br/><a href="http://maps.google.com/maps/place?ftid=0x8e3f9af3f5d3f5f7:0x79024d828e03dd5d&q=Calle+85+%2319a-25+Bogot%C3%A1&hl=en&ved=0CA0Q-gswAA&sa=X&ei=xt8cTrnzIZKqzQS53qX9Ag" target="_map">Calle 85 #19a-25<br/>Bogotá<br/>Colombia</a></td>
							</tr>
						</table>
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
