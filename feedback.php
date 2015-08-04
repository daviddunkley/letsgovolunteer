<?php 
	require('req/head_req.php');
	require('req/body_req.php');
	require('req/feedback_req.php');

	$context = "feedback";
?>
<? write_doctype(DT_TRANS); ?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<? write_title('Lets Go Volunteer - Feedback');?>
	<? write_metas($context); ?>
	<? write_css(ST_BASIC | ST_FEEDBACK); ?>
	<? write_scripts(SC_FADE); ?>
	<? write_ga_snippet();?>
</head>
<body>
	<div id="header">
		<? write_main_menu($context); ?>
	</div>
	<div id="container">
		<? write_image_hdr($context); ?>
		<h1><img src="img/logos/lets_go_volunteer.gif" alt="Let's Go Volunteer"/>Feedback for <?= $data["firstname"]?> <?= $data["surname"]?> (<?= $data["email"]?>)</h1>
		<hr/>
		<form action="feedback.php?id<?= $data["apply_id"]?>.&key=<?= $data["key"]?>" method="post" name="feedback">
			<p>Hello <?= $data["firstname"]?>, everyone at Let's Go Volunteer and Manos Amigas would like to thank you for your hard work and efforts. We are always looking to improve how we do things and so are always very happy to get any feedback from our volunteers. So we really appreciate you taking the time to fill out the following form.</p>
			<input type="hidden" name="submit" value="1" />
			<fieldset>
				<legend>Experience with us</legend>
				<p class="legend">Can you explain briefly your experience with Let's Go Volunteer/Manos Amigas?</p>
				<div class="form">
					<? write_textarea("cmt_one", "cmt_one", "Response to Question One", 20, 90, "")?>
				</div>
				<p class="legend">What is the most important thing you take away from your time with us?</p>
				<div class="form">
					<? write_textarea("cmt_two", "cmt_two", "Response to Question Two", 20, 90, "")?>
				</div>
				<p class="legend">In what ways could we have improved the volunteering experience for you?</p>
				<div class="form">
					<? write_textarea("cmt_three", "cmt_three", "Response to Question Three", 20, 90, "")?>
				</div>
			</fieldset>
			<fieldset>
				<legend>Evaluation</legend>
				<p>Your opinions and suggestions are very important to us and so we would appreciate it if you could give us a rating 1 (poor) to 5 (excellent) and make any comments you wish to based on your experience with us.</p>
				<div class="form">
				<table>
					<tr>
						<th></th>
						<th>1</th>
						<th>2</th>
						<th>3</th>
						<th>4</th>
						<th>5</th>
					</tr>
					<tr>
						<td>How well did we prepare you for your experience with us?</td>
						<td><? write_radio("chk_four", "chk_four", 1, "");?></td>
						<td><? write_radio("chk_four", "chk_four", 2, "");?></td>
						<td><? write_radio("chk_four", "chk_four", 3, "");?></td>
						<td><? write_radio("chk_four", "chk_four", 4, "");?></td>
						<td><? write_radio("chk_four", "chk_four", 5, "");?></td>
					</tr>
					<tr>
						<td colspan="6"><? write_textarea("cmt_four", "cmt_four", "Comments Question Four", 3, 90, "short")?></td>
					</tr>
					<tr>
						<th></th>
						<th>1</th>
						<th>2</th>
						<th>3</th>
						<th>4</th>
						<th>5</th>
					</tr>
					<tr>
						<td>Were you happy with the arrival and departure process for the program?</td>
						<td><? write_radio("chk_five", "chk_five", 1, "");?></td>
						<td><? write_radio("chk_five", "chk_five", 2, "");?></td>
						<td><? write_radio("chk_five", "chk_five", 3, "");?></td>
						<td><? write_radio("chk_five", "chk_five", 4, "");?></td>
						<td><? write_radio("chk_five", "chk_five", 5, "");?></td>
					</tr>
					<tr>
						<td colspan="6"><? write_textarea("cmt_five", "cmt_five", "Comments Question Five", 3, 90, "short")?></td>
					</tr>
					<tr>
						<th></th>
						<th>1</th>
						<th>2</th>
						<th>3</th>
						<th>4</th>
						<th>5</th>
					</tr>
					<tr>
						<td>Were you satisfied with the facilities of the house?</td>
						<td><? write_radio("chk_six", "chk_six", 1, "");?></td>
						<td><? write_radio("chk_six", "chk_six", 2, "");?></td>
						<td><? write_radio("chk_six", "chk_six", 3, "");?></td>
						<td><? write_radio("chk_six", "chk_six", 4, "");?></td>
						<td><? write_radio("chk_six", "chk_six", 5, "");?></td>
					</tr>
					<tr>
						<td colspan="6"><? write_textarea("cmt_six", "cmt_six", "Comments Question Six", 3, 90, "short")?></td>
					</tr>
					<tr>
						<th></th>
						<th>1</th>
						<th>2</th>
						<th>3</th>
						<th>4</th>
						<th>5</th>
					</tr>
					<tr>
						<td>How would you rank the quality of the hospitality?</td>
						<td><? write_radio("chk_seven", "chk_seven", 1, "");?></td>
						<td><? write_radio("chk_seven", "chk_seven", 2, "");?></td>
						<td><? write_radio("chk_seven", "chk_seven", 3, "");?></td>
						<td><? write_radio("chk_seven", "chk_seven", 4, "");?></td>
						<td><? write_radio("chk_seven", "chk_seven", 5, "");?></td>
					</tr>
					<tr>
						<td colspan="6"><? write_textarea("cmt_seven", "cmt_seven", "Comments Question Seven", 3, 90, "short")?></td>
					</tr>
					<tr>
						<th></th>
						<th>1</th>
						<th>2</th>
						<th>3</th>
						<th>4</th>
						<th>5</th>
					</tr>
					<tr>
						<td>Did you feel the variety and amount of work expected was reasonable?</td>
						<td><? write_radio("chk_eight", "chk_eight", 1, "");?></td>
						<td><? write_radio("chk_eight", "chk_eight", 2, "");?></td>
						<td><? write_radio("chk_eight", "chk_eight", 3, "");?></td>
						<td><? write_radio("chk_eight", "chk_eight", 4, "");?></td>
						<td><? write_radio("chk_eight", "chk_eight", 5, "");?></td>
					</tr>
					<tr>
						<td colspan="6"><? write_textarea("cmt_eight", "cmt_eight", "Comments Question Eight", 3, 90, "short")?></td>
					</tr>
					<tr>
						<th></th>
						<th>1</th>
						<th>2</th>
						<th>3</th>
						<th>4</th>
						<th>5</th>
					</tr>
					<tr>
						<td>How would you rank the quality and implementation of the programs you were involved with?</td>
						<td><? write_radio("chk_nine", "chk_nine", 1, "");?></td>
						<td><? write_radio("chk_nine", "chk_nine", 2, "");?></td>
						<td><? write_radio("chk_nine", "chk_nine", 3, "");?></td>
						<td><? write_radio("chk_nine", "chk_nine", 4, "");?></td>
						<td><? write_radio("chk_nine", "chk_nine", 5, "");?></td>
					</tr>
					<tr>
						<td colspan="6"><? write_textarea("cmt_nine", "cmt_nine", "Comments Question Nine", 3, 90, "short")?></td>
					</tr>
				</table>
				</div>
			</fieldset>
			<fieldset>
				<legend>Last Question</legend>
				<p class="legend">Do you have any other comments or suggestions?</p>
				<div class="form">
					<? write_textarea("cmt_ten", "cmt_ten", "cmt_ten", 20, 90, "")?>
				</div>
			</fieldset>
			<div class="buttons"><button type="submit">Send</button><button type="reset">Clear</button></div>
		</form>
	</div>
	<div id="footer">
		<? write_footer_menu($context); ?>
	</div>
</body>
</html>
