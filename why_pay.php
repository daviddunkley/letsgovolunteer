<?php 
	//include_once("req/ga_req.php");
	require('req/head_req.php');
	require('req/body_req.php');

	$context = "prices";
?>
<? write_doctype(DT_TRANS); ?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<? write_title("Why pay fees");?>
	<? write_metas('We are sometime asked why do I need to pay. We are a non-profit organization the aims to help not make money. The volunteer fees cover our expenses such as food, accommodation, telephone, internet, power and water. We also need to buy materials to run our programs','why,pay,free,non profit,NGO,expenses,food,accommodation,laundry,telephone,utilities,internet,materials,support,airport,salary,staff,sponsor');?>
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
						<h1><img src="img/logos/lets_go_volunteer.gif" alt="Let's Go Volunteer"/>Why do I need to pay?</h1>
						<hr/>
						<p>We are sometimes asked by volunteers why do I need to pay when there are other places where I can volunteer for free?
						<p>Let's go volunteer is a non-profit organization and our aim is to serve and help the less fortunate and not to make money, however we have expenses to cover such as:</p>
						<ul>
							<li>Food, accommodation and laundry at our the volunteer center.</li>
							<li>Telephone, utilities, internet facilities at the volunteer center.</li>
							<li>Educational and recreational materials for our various programs</li>
							<li>Support for our partner organizations</li>
<?//							<li>Placement service in home stay or apartments.</li>
?>							<li>Airport pick-up city and tour of Bogotá</li>
							<li>Ibagué orientation and city tour.</li>
							<li>Salary for the staff</li>
							<li>Sponsoring of children's education.</li>
						</ul>
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
