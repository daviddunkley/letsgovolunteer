<?php
	require('req/head_req.php');
	require('req/body_req.php');

	$context = "volunteering";
?>
<? write_doctype(DT_TRANS); ?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<? write_title("Why Volunteer");?>
	<? write_metas('We need your help to continue our programs. The income we receive from our volunteer fees helps us to fund our own programs and others that we support. Volunteers gain satisfaction from knowing they are making a difference. They also have the chance to improve their Spanish with a local school','ibague,help,small,less fortunate,afford,few resources,make difference,price reduction,friendly,social,community,opportunity,learn,welfare,satisfaction,happiness,joy,crucial,wellbeing,learn more than spanish');?>
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
						<h1><img src="img/logos/lets_go_volunteer.gif" alt="Let's Go Volunteer"/>Why Volunteer?</h1>
						<hr/>
						<p>Because we need your help! Let's go volunteer is a small organization, almost everybody in the staff is a volunteer and we count on volunteer work to keep helping the less fortunate, as we can not afford many staff members. With few resources we are already making a difference in the lives of many Colombians and we hope to continue doing so.</p>
						<img src="img/inline/children_santa.gif" class="right"/>
						<p>Although there are other organizations that feature programs of similar quality, Let's go volunteer, gives you a 50% to 60% price reduction. This lower price is due largely to our low overhead and the fact that we are conscious that you will come to help others and contribute to their lives. We keep our prices as low as we can. All of this is provided in a friendly social and community environment where opportunities for enjoying yourself, meeting new people and learning new things are almost guaranteed.</p>
						<img src="img/inline/volunteer_cooking.gif" class="left"/>
						<img src="img/inline/volunteer_girl.gif" class="right"/>
						<p>You will learn about different customs, participate actively in community life, and contribute to the welfare of its less fortunate members. You can share and apply your knowledge and skills or simply provide company to people in need of affection engaging in a wonderful experience that will bring to your soul joy, satisfaction and happiness.</p>
						<img src="img/inline/hot_spring_visit.gif" class="left" alt="At local hot springs"/>
						<p>From the moment you sign up, you will become an important part of the Let's Go volunteer family. You are crucial for our organization and we have a genuine interest in our volunteers' wellbeing and progress. We truly care about you. We will help and guide you along every step of the way, from the moment you register until the end of your volunteer process.</p>
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
