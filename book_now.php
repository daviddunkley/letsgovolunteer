<?php 
	require('req/head_req.php');
	require('req/body_req.php');
	require('req/book_now_req.php');

	$context = "book_now";
?>
<? write_doctype(DT_TRANS); ?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<? write_title('Lets Go Volunteer - Book Now');?>
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
						<h1><img src="img/logos/lets_go_volunteer.gif" alt="Let's Go Volunteer"/>Book Now</h1>
						<hr/>
						<? write_errors($errors)?>
						<form action="apply_now.php" method="post" name="apply_now">
							<p>Welcome back <?= $data["firstname"]?> <?= $data["surname"]?> (<?= $data["email"]?>). Thank you so much for decided to book your program with us. Before we can process your booking we need a little bit more information.</p>
							<p class="legend"><strong>Note:</strong> Required fields are marked with an asterisk (<em>*</em>)</p>
							<input type="hidden" name="submit" value="1" />
							<img src="img/inline/smile_girl.gif" class="right"/>
							<fieldset>
								<legend>Personal Details</legend>
								<div class="form">
									<? write_label("firstname", "First Name", "required")?>
									<? write_input_readonly("firstname", "Firstname", "first name", "input", "50", $data["firstname"])?>
								</div>
								<div class="form">
									<? write_label("surname", "Surname", "required")?>
									<? write_input_readonly("surname", "Surname", "surname", "input", "50", $data["surname"])?>
								</div>
								<div class="form">
									<? write_label("email", "Email", "required")?>
									<? write_input_readonly("email", "Email", "email", "input", "50", $data["email"])?>
								</div>
								<div class="form">
									<? write_label("nationality", "Nationality", "required")?>
									<? write_input_readonly("nationality", "Nationality", "nationality", "input", "50", $data["nationality"])?>
								</div>
								<div class="form">
									<? write_label("gender", "Gender", "required")?>
									<? write_gender("gender", "Gender", "gender", "input", "50") ?>
								</div>
								<div class="form"><? write_label("passport_no", "Passport No<em>*</em>", "required")?><? write_input("passport_no", "passport_no", "passport_no", "input", "50")?></div>
								<div class="form">
									<? write_label("date_of_birth", "Date of Birth<em>*</em>", "required")?>
									<? write_date_of_birth("date_of_birth")?>
								</div>
							</fieldset>
							<img src="img/inline/volunteer_boy.gif" class="left"/>
							<fieldset>
								<legend>Emergency Contact Details</legend>
								<p class="legend">This is just needs to be someone that we would contact only in an emergency.</p>
								<div class="form">
									<? write_label("phone_num", "Contact Phone Number", "required")?>
									<? write_input("telephone", "telephone", "telephone", "input", "50")?>
								</div>
								<div class="form">
									<? write_label("start_date", "Start Date", "required")?>
									<? write_calander_control("start_date")?>
								</div>
								<div class="form">
									<? write_label("duration", "Duration", "required")?>
									<? write_number_weeks("duration", "duration")?>
								</div>
								<div class="form">
									<? write_label("program", "Program - Working with", "required")?>
									<? write_checked("program_children", "program_children", "children", "")?><span class="label">Children</span>
									<? write_checked("program_teenagers", "program_teenagers", "teenagers", "")?><span class="label">Teenagers</span><br/>
									<? write_checked("program_women", "program_women", "woman_at_risk", "")?><span class="label">Woman at Risk</span>
									<? write_checked("program_elderly", "program_elderly", "elderly", "")?><span class="label">Elderly</span>
								</div>	
								<div class="form">
									<? write_label("accomm", "Accommodation", "required")?>
									<? write_accomm("accomm", "accomm")?>
								</div>	
							</fieldset>
							<img src="img/inline/volunteer_boy.gif" class="left"/>
							<fieldset>
								<legend>Program Details</legend>
								<p class="legend">Don't worry if these details are not exact, it is just to give us an idea of your plans. You can change them later if your plans change.</p>
								<div class="form">
									<? write_label("start_date", "Start Date", "required")?>
									<? write_calander_control("start_date")?>
								</div>
								<div class="form">
									<? write_label("duration", "Duration", "required")?>
									<? write_number_weeks("duration", "duration")?>
								</div>
								<div class="form">
									<? write_label("program", "Program - Working with", "required")?>
									<? write_checked("program_children", "program_children", "children", "")?><span class="label">Children</span>
									<? write_checked("program_teenagers", "program_teenagers", "teenagers", "")?><span class="label">Teenagers</span><br/>
									<? write_checked("program_women", "program_women", "woman_at_risk", "")?><span class="label">Woman at Risk</span>
									<? write_checked("program_elderly", "program_elderly", "elderly", "")?><span class="label">Elderly</span>
								</div>	
								<div class="form">
									<? write_label("accomm", "Accommodation", "required")?>
									<? write_accomm("accomm", "accomm")?>
								</div>	
							</fieldset>
							<img src="img/inline/volunteer_smiling.gif" class="right"/>
							<fieldset>
								<legend>Comments</legend>
								<div class="form">
									<? write_label("comments", "Extra Comments", "")?>
									<? write_textarea("comments", "comments", "comments", 5, 40, "")?>
								</div>
							</fieldset>
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
