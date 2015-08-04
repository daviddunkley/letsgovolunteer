<?php 
	require('req/head_req.php');
	require('req/body_req.php');

	$context = "volunteering";
?>
<? write_doctype(DT_TRANS); ?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<? write_page_info('Explains the application process and what happens after you apply','After you apply');?>
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
						<h1><img src="img/logos/lets_go_volunteer.gif" alt="Let's Go Volunteer"/>After you apply</h1>
						<hr/>
						<ul>
							<li>David, our volunteer co-ordinator will then contact you in a couple of days and arrange a time to call you. He will be your point of contact right up until you arrive in Colombia and after.</li>
							<li>If you think it would be helpful David will arrange a time that suits to give you a  phone call. He can answer any questions you may have and make sure you have a good idea about what to expect and what you will be doing.</li>
							<li>You will need to make your own arrangements to get to Colombia. The most common is to fly but if you are already traveling you may want to travel by bus.</lil>
							<li>You will also need to make sure you are up-to-date with your vaccinations and that you have travel insurance to cover the time you will spend with us.</li>
							<li>You will need to let David know your plans including your flight information.</li>
							<img src="img/inline/volunteer_with_berenice.gif" class="left"/>
							<li>As your arrival date approaches David will send you a final confirmation email and will ask for your passport no, date of birth and an ICE (In Case of Emergency) contact.</li>
							<li>If you have asked for our greeting service:
								<ol>
									<li>One of our staff members will meet you at the airport at your arrival.</li>							
									<li>If your plane arrives late, you will spend the night in Bogota, the capital of Colombia.</li>
									<li>The next morning you will be given a half day tour of the city</li>
									<li>and finally we will take you to the bus terminal from where you will travel to Ibagué, where all the grassroots projects take place.</li>
								</ol>
							</li>
							<li>If you have NOT asked for our greeting service David will make sure you have good directions on how to get to Ibagué and to our Volunteer Centre</li>
							<li>WIthin the first few days of your arrival we will give you a tour around the city of Ibagué with explanations of where things are and how to use the local transportation system.</li>
							<li>We will take you to the grassroots project, where your volunteer experience will take place. You will meet with the staff and have an orientation day and a presentation of our NGO.</li>
							<li>We are happy to arrange Spanish, Dance and Music lessons with our experienced teachers.</li>
							<li>We will provide you with all the information about sight seeing, cultural activities and things to do in the city and in the country.</li>
							<li>We will accompany you all the way and make sure you have a great experience.</li>
							<li>At the end of your stay we will have a farewell dinner</li>
							<li>Will keep in touch with you, to inform you about the projects development.</li>
							<li>At all times our staff will be there to help you and ensure you have the experience you deserve</li>
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
