<?php 
	require_once('class/MySQLiHelper.php');

	require('req/head_req.php');
	require('req/body_req.php');
	require('req/apply_now_req.php');

	$context = "apply_now";
?>
<? write_doctype(DT_TRANS); ?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<? write_title("Apply Online Now");?>
	<? write_metas('Fill out the online form to apply to be a volunteer','apply,book,online,form,details');?>
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
						<h1><img src="img/logos/lets_go_volunteer.gif" alt="Let's Go Volunteer"/>Apply Now</h1>
						<hr />
						<form action="apply_now.php" method="post" name="apply_now">
							<p class="legend">We would really appreciate it if you could fill out the form below. Filling it out in now way commits you anything and we understanding if you need to change dates and details at a later date. It simply gives us enough information to contact you as well as a general guide to your plans at this stage.</p>
							<p class="legend"><strong>Note:</strong> Required fields are marked with an asterisk (<em>*</em>)</p>
							<? write_errors($errors);?>
							<input type="hidden" name="submit" value="1" />
							<fieldset>
								<legend>Personal Details</legend>
								<div class="form">
									<? write_label("firstname", "First Name<em>*</em>", "required")?>
									<? write_input("firstname", "firstname", "first name", "input", "50")?>
								</div>
								<div class="form">
									<? write_label("surname", "Surname<em>*</em>", "required")?>
									<? write_input("surname", "surname", "surname", "input", "50")?>
								</div>
								<div class="form">
									<? write_label("email", "Email<em>*</em>", "required")?>
									<? write_input("email", "email", "email", "input", "50")?>
								</div>
								<div class="form">
									<? write_label("country_id", "Nationality<em>*</em>", "required")?>
									<? write_country_list("country_id", "country_id", "")?> or other <? write_input("country", "country", "country", "input", "25")?>
								</div>
								<div class="form">
									<? write_label("gender", "Gender<em>*</em>", "required")?>
									<? write_radio("gender", "gender", "female", "")?>
									<span class="label">Female</span>
									<? write_radio("gender", "gender2", "male", "")?>
									<span class="label">Male</span>
								</div>	
								<div class="form">
									<? write_label("telephone", "Contact Phone Number", "required");?>
									<? write_input("telephone", "telephone", "telephone", "input", "50");?>
								</div>
							</fieldset>
							<fieldset>
								<legend>Program Details</legend>
								<div class="form">
									<? write_label("start_date_Month_ID", "Start Date", "required")?>
									<? write_calander_control("start_date")?>
								</div>
								<div class="form">
									<? write_label("duration", "Duration", "required")?>
									<? write_number_weeks("duration", "duration")?>
								</div>
								<div class="form">
									<? write_label("program_children", "Program - Working with", "required")?>
									<? write_checked("program_children", "program_children", "children", "")?>
									<span class="label">Children</span>
									<? write_checked("program_teenagers", "program_teenagers", "teenagers", "")?>
									<span class="label">Woman at Risk</span>
									<? write_checked("program_hiv", "program_hiv", "hiv", "")?>
									<span class="label">HIV</span>
									<? write_checked("program_elderly", "program_elderly", "elderly", "")?>
									<span class="label">Elderly</span>
								</div>
								<input type="hidden" name="accomm" value="Volunteer Center" />	
<!--								<div class="form">
									<? //write_label("accomm", "Accommodation", "required")?>
									<? //write_accomm("accomm", "accomm")?>
									</div>	
-->							</fieldset>
							<!--<img src="img/inline/volunteer_smiling.gif" class="right"/>-->
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
