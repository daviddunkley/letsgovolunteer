<?php 
	//include_once("req/ga_req.php");
	require('req/head_req.php');
	require('req/body_req.php');

	$context = "about_colombia";
?>
<? write_doctype(DT_TRANS); ?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<? write_title("Ibagué things to see and do");?>
	<? write_metas('Ibagué is a great place to spend some time. With its excellent location in the center of the country and its year around mild climate it means it very easy to visit. It is a safe city with friend people and easy access to the nearby natural wonders. It is also known as the City of Music.','central,location,climate,pleasant,warm,peaceful,safe,city,folklore,festival,friendly,beautiful,landscape,countryside,perales,airport');?>
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
						<h1><img src="img/logos/lets_go_volunteer.gif" alt="Let's Go Volunteer"/>Ibagué</h1>
						<hr/>
						<img src="img/inline/ibague_city_view.gif" class="right" alt="Ibagué View from Orchidea"/>
						<p>All our programs take place in Ibagué, which is located 200 km west of the capital of Colombia, Bogota. Its geographical location of 4º North latitude and 75º West longitude means it is ideally located almost directly in the centre of the countries three largest cities Bogotá, Medellin and Cali. Its attitude 1,248 meters ensures its climate is pleasant and warm all year round with an average temperature of 22ºCentigrade (or 79º Fahrenheit)</p>
						<img src="img/inline/ibague_folklore_festival.gif" class="left" alt="Ibagué Folklore Festival"/>
						<p>Ibagué is a peaceful and safe city (even by international standards), surrounded by gorgeous mountains in a beautiful valley. Blessed with great weather, Ibagué is warm but never too hot. It is the perfect place to study and spend some time. Since it is a mid-sized city of approximately 500.000 people, Ibagué is large enough to cater to the needs of travelers without suffering the stress and strains of large city living.</p>
						<img src="img/inline/ibague_festival.gif" class="right" alt="Ibagué Festival"/>
						<p>Ibagué is also the Cuidad de Musica (City of Music) and is well know by Colombians as the center of Colombian music and folklore. Its folklore festival in the last week of June is attended by Colombians from all over the world.</p>
						<p>The most remarkable thing about Ibagué is the true friendliness of its people. The people of Ibagué are laid back, very accepting and extremely warm and social. Besides the beautiful landscape, there are interesting museums and great outdoors activities to do and see. The city is known as the musical city of Colombia; due to its excellent conservatory founded in the 1900s.</p>
						<img src="img/inline/ibague_chicala.gif" class="left" alt="Cascades de Chicala, Ibagué"/>
						<p>It is conveniently located 3 hours from Bogotá, 3 hours from the world famous Zonacafetera (Coffee Zone), 5 hours from Cali and 8 hours from Medellin.</p>
						<p>The city's Perales Airport has domestic flights operated by most of the Colombian carriers. With 64 flights a week it means Ibagué is well connected to a wide range of destination. Likewise the bus terminal has connections to all major destinations throughout the country.</p>
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
