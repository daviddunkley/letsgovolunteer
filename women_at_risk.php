<?php 
	require('req/head_req.php');
	require('req/body_req.php');

	$context = "programs";
?>
<? write_doctype(DT_TRANS); ?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<? write_title("Women in Need");?>
	<? write_metas('Our Women in Need program allows volunteers to work with single mothers and sex workers helping to improve their own lives as well as their family. Our center provides vocational training as well as counseling. We are still completing the building which needs some construction work to be ready. Volunteers can also work with the Hermansa Oblastas which to reverse the problems of adolescent pregnancy, poverty and ignorance.','women,need,vocational,training,health, beauty,skills,encouragement,opportunities,counsel,help,single mothers,sex workers,self esteem,construction,hermanas oblatas,crucial,prostitute,sewing,crafts');?>
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
						<h1><img src="img/logos/lets_go_volunteer.gif" alt="Let's Go Volunteer"/>Working with Women In Need</h1>
						<hr/>
						<img src="img/inline/new_woman_center.gif" class="right"/>
						<p>Our Woman in need program in San Jose (a poor suburb in Ibagué) is a work in progress. In the middle of 2010 we purchased a new property that was in need of repair.</p>
						<p>With the help of volunteers we now have two rooms up and running providing vocational training in health and beauty to local woman in need of help.</p>
						<p>The classes are aimed at giving these woman skills and encouragement to enable them to find work and provide better opportunities to themselves and their families. We seek to orientate, counsel, and ultimately help these women to get out of their current situations.</p>
						<p>The project also aims to help head household single mothers and extremely poor woman to learn different ways to make a living and earn back their self-esteem.</p>
						<img src="img/inline/volunteer_shelter.gif" alt="New location for Woman Center" class="left"/>
						<p>We also work closely with a wonderful organization known as Hermanas Oblatas (Oblatas Sisters). This project is the only one available in the city for sex workers who want to get out of the sex industry, so it is crucial to help it grow and expand. In most cases adolescent pregnancy, poverty and ignorance push desperate women to become prostitutes and face all sorts of risks.</p>
						<p>Their dedicated center in the heart of the city, has a college environment, but also offers micro finance and advice to help the women put together business plans and start their own businesses. All this helps them to get out of the sex trade. The aim of the center for this year is to see all the business plans submitted on the road to realization.</p>
						<img src="img/inline/san_jose_streets.gif" alt="Streets around the new Woman at risk center" class="right" />
						<p>We are always impressed at how open and accepting the nuns, who run the centre, are to important issues such as sex education and drug use. The center runs day care for their children (which our volunteers have helped with) in addition to the skills training for the woman, on anything from general household tasks to sewing and crafts and hair and beauty skills.</p>
						<img src="img/inline/single_woman_skills.gif" class="right"/>
						<img src="img/inline/sex_workers_skills.gif" alt="Gaining skills" class="left"/>
						<p>They have around 300 woman registered and they typically prefer a more structured approach from our volunteers. For instance, a volunteer would plan a week of afternoon courses on woman's health. We submit a brief outline explaining the topics covered and they would tell the woman about the course and those interested would come. Ideally the courses would be interactive, informative and fun.</p>
						<p>This type of work takes a certain type of volunteer with a lot of initiative and drive but if you are interested we would love to be able to help this group in this way. We would be able to provide equipment and a translator etc. if necessary.</p>				
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
