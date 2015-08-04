<?php 
	require('req/head_req.php');
	require('req/body_req.php');

	$context = "accommodation";
?>
<? write_doctype(DT_TRANS); ?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<? write_title('Volunteer Center Accommodation')?>
	<? write_metas('Our Volunteer Center is where our volunteers stay. It is located in the same part of the city as the people we help. This gives a real and genuine feel to the experience. The center is run by Berenice who lives their with her children. We provide lunch and dinner during the week and cater to all dietary requirements. The house also have computers, wireless internet and laundry facilities.', 'volunteer,center,house,living,district,genuine,berenice,caring,considerate,chef,smile,laugh,lunch,dinner,kitchen,fridge,computer,internet,wireless,tv,dvd,laundry,phone,bunk,closets,valuables,shower'); ?>
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
						<h1><img src="img/logos/lets_go_volunteer.gif" alt="Let's Go Volunteer"/>Our Volunteer Center</h1>
						<hr/>
						<img src="img/inline/center_manos_amigas.gif" class="right" alt="Volunteer Centre"/>
						<p>Our volunteers stay in our Volunteer Center. The center is situated in same part of the city as most of our volunteer programs. By living in the same district as the center, volunteers can get a genuine feel for how the families they are helping live on a day-to-day basis.</p>
						<p>The city center, bus terminal and nightspots are easily reached by bus or taxi. Our other programs are within  walking distance.</p>
						<img src="img/inline/volunteer_with_berenice.gif" class="left" alt="Volunteer with Berenice"/>
						<p>The Volunteer Center is run by Berenice. She lives there with her two children William and Carolina, as well as with other volunteers in the program. Berenice is the most caring and considerate host you could hope to meet. She is a former chef and looks after everyone with a smile and laugh. </p>
						<p>We provide lunch and dinner during the week but ask that people make their own arrangements for breakfast. Our Volunteers have a fully equipped kitchen at their disposal including a separate fridge and weekend meals are usually a group effort. Dietary requirement can easily be catered for but we do ask that you let us know in the comments section, when you fill out the <a href="apply_now.php">online application</a>.</p>
						<img src="img/inline/volunteer_center_patio.gif" class="right" alt="Central Patio"/>
						<p>We have a full range of facilities to help make the stay enjoyable including Computers, Wireless Internet, TV and DVD area, outdoor area, hammocks and laundry. The centre also has a phone to allow friends and family to get hold of you at any time.</p>
						<img src="img/inline/volunteer_rooms.gif" class="left" alt="Volunteers Bedroom"/>
						<p>The sleeping areas have bunk beds and secured closets for volunteers to store their things. There is also a separate bathroom and shower. We would warn volunteers that like the majority of Colombian homes we do not have a hot water supply, meaning the showers are only with cold water. Luckily the warm climate means this is not too much of a problem.</p>
						<p></p>
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
