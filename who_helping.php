<?php 
	//include_once("req/ga_req.php");
	require('req/head_req.php');
	require('req/body_req.php');

	$context = "volunteering";
?>
<? write_doctype(DT_TRANS); ?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<? write_page_info('Find out about who you will be helping when you volunteer','Who you will be helping');?>
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
						<h1><img src="img/logos/lets_go_volunteer.gif" alt="Let's Go Volunteer"/>Who you will be helping</h1>
						<hr/>
						<p>The people we work with are very poor, often from single parent families and their homes are of very rudimentary construction.</p> 
						<img src="img/inline/volunteer_girl_pool.gif" alt="Volunteer and a girl at the pool" class="right"/>
						<p>The children never go to the cinema or a swimming pool. So we do that, we take them to do fun. By coming to our centre we prevent them from spending their time on the street after school which is where they get into trouble. We make sure they do well at school so, they become good example for their families.
						</p>
						<img src="img/inline/children_houses.gif" alt="basic housing" class="left"/>
						<p>We try to show the adults that real options exist for them in their lives. Through education, opportunity and love we help them to take control of their lives and reach their potential.</p>
						<img src="img/inline/help_children.gif" alt="helping disadvantaged children" class="left"/>
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
