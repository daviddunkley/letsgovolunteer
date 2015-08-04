<?php 
	require('req/head_req.php');
	require('req/body_req.php');

	$context = "programs";
?>
<? write_doctype(DT_TRANS); ?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<? write_title("Children");?>
	<? write_metas('Our children program allows volunteers to work with children, helping with their education, nutrition and emotional needs. We run sessions in the morning and afternoons organizing activities in arts and crafts, sport, music and dance. We also provide lunches to over 150 children everyday.','children,education,nutrition,emotion,ibague,eight years,effect lives,disadvantaged,homework,counselling,activities,arts crafts,sports,reading,games,movies,honesty,responsibility,respect,tolerance,leaders,learn');?>
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
						<h1><img src="img/logos/lets_go_volunteer.gif" alt="Let's Go Volunteer"/>Working with Children</h1>
						<hr/>
						<img src="img/inline/children_group_folkore.gif" alt="Children in Folklore Parade" class="left"/>
						<p>Our Children Program was launched to provide educational, nutritional and emotional support to small children from marginal neighborhoods in Ibagué - children coming from homes with working parents or single female providers who do not have the time nor the resources to attend them properly.</p>
						<p>During the time we have been running these programs we have extended the number of centers 
						to two. This means volunteers are actively helping us to effect the lives of over 250 local  disadvantaged children everyday.</p>
						<h2>What we do</h2>
						<p><img src="img/inline/child_answering_question.gif" alt="Children answering a question" class="right"/>Our volunteers work with our full-time teaching staff in both morning and afternoon sessions. We help them do their homework, do counseling, play with them and we also develop our 'Future Leaders' program. Through activities such as art and crafts, sports, music and dance, games, and movies we teach them values like honesty, solidarity, responsibility, respect and tolerance.</p>
						<p>We hope that some of these kids will become positive leaders for the community and the country in the future and will overcome the obstacles and difficulties in everyday life. Our volunteers help make this possible by helping, caring and giving their time and energy to this children who are so desperate to learn.</p>
						<img src="img/inline/volunteer_children_group.gif" alt="Volunteers with the children" class="left"/>
						<p>The ultimate purpose of this program is to prevent children from spending their time on the street, safeguarding them from adversity inherent to street life, and educating them in human values.</p>
						<p>Our two centers also prepare lunches for 220 children everyday, and provide a substantial snack to end the morning and afternoon programs. This provides an important nutritional benefit to many 
						children who would otherwise not receive such a well balanced diet. Our volunteers are heavily 
						involved in the preparation of the food, serving the meals to the children as well as providing an 
						example to the children in the importance of healthy eating and basic hygiene.</p>
						<h2>What you will be doing</h2>
						<img src="img/inline/children_folklore.gif" class="right" alt="children folklore"/>
						<p>Volunteers who participate in these programs are involved in the following activities:</p>
						<ul>
							<li>Helping the teaching staff implement planned activities</li>
							<li>Planning and implementing educational activities for children: helping them with their homework, educational games, and arts and crafts, coaching them in sports and teaching conversational English. Through these game activities, volunteers can become friends with them, earn their respect and their love, and help them build confidence.</li>
							<li>Helping in the feeding program for less fortunate children; cooking, washing the dishes and helping in the serving of meals, all for the benefit of the kids.</li>
							<li>Helping us in our programs in which we play with the children, take them to the park, play sports, watch movies... direct the reading club and just have fun.</li>
							<li>Contributing to the Future Leaders program.</li>
							<li>Mentoring children and becoming role models for them.</li>
							<li>And most importantly loving the kids. By taking time to get to know them and showing them that there are people who care!</li>
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
