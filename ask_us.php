<?php 
	//include_once("req/ga_req.php");
	require('req/head_req.php');
	require('req/body_req.php');
	require('req/ask_us_req.php');

	$context = "contact_us";
?>
<? write_doctype(DT_TRANS); ?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<? write_title("Ask us a question");?>
	<? write_metas('We are happy to answer any questions volunteers might have about our organization, the programs we offer and the accommodation at the house.','questions,answers,programs,accommodation,organization');?>
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
						<h1><img src="img/logos/lets_go_volunteer.gif" alt="Let's Go Volunteer"/>Ask us a question</h1>
						<hr/>
						<form action="ask_us.php" method="post" name="ask_us">
							<p class="legend">If you have any questions? like to know more about us? what we do? the programs we offer? or the accommodation we provide?</p>
							<p>Please send us your questions and we will get back to you as soon as we can.</p>
							<input type="hidden" name="submit" value="1" />
							<? write_errors($errors)?>
							<div class="form"><? write_label("firstname", "First Name", "required")?><? write_input("firstname", "firstname", "first name", "input", "50")?></div>
							<div class="form"><? write_label("surname", "Surname", "required")?><? write_input("surname", "surname", "surname", "input", "50")?></div>
							<div class="form"><? write_label("email", "Email", "required")?><? write_input("email", "email", "email", "input", "50")?></div>
							<div class="form">
								<? write_label("queries", "Your Question", "")?>
								<? write_textarea("queries", "queries", "queries", 5, 40, "")?>
							</div>
							<div class="buttons"><button type="submit">Send</button><button type="reset">Clear</button></div>
						</form>
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
