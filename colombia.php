<?php 
	require('req/head_req.php');
	require('req/body_req.php');

	$context = "about_colombia";
?>
<? write_doctype(DT_TRANS); ?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<? write_title("Visiting Colombia");?>
	<? write_metas('Colombia is an exciting place to visit. With its beautiful beaches, rainforest, deserts, coasts, mountains and history Colombia has it all in abundance. Colombia is no longer the dangerous destination it used to be but sadly the message is taking time to get through to the world','beaches,rainforest,deserts,coast,mountains,lakes,abundance,situation,safety,tropical,plants,birds,orchid,primates,mammals,paradise');?>
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
						<h1><img src="img/logos/lets_go_volunteer.gif" alt="Let's Go Volunteer"/>Colombia</h1>
						<hr/>
						<p>It is not an exaggeration to say that Colombia has it all. Beautiful beaches, dense rainforest, arid deserts, rugged coast line, caribbean cays, snow capped mountains, precious metals, ancient civilizations and deep blue lakes. You name it Colombia has it in abundance.</p>
						<img src="img/inline/visit_los_nevados.gif" class="left" alt="Los Nevados National Park"/>
						<p>Our staff know the country well and are always happy to make recommendations on place to visit and things to do.</p>
						<h3>The Political Situation</h3>
						<p>We are often asked about the current political situation in Colombia and whether it is safe to visit. The current situation is that Colombia is more politically and economically stable now than it has been for 40 years, making it a great time to visit. The general safety for foreigners and Colombians is better than in most of the other countries in South America. Sadly the western governments and press has been slow to accept the changes that have occurred and prefer to focus on its previous negative past.</p>
						<p>For a variety of reasons, mainly language and availability, it can be hard for people outside the country to get a good idea of what is happening there. We recommend that volunteers and their families visit the excellent Latin America English News program<a href="http://www.ntn24news.com/" target="_new">NTN News in English</a>. Their twice daily newscasts are aimed at giving English speakers a good insight into what is going on in Colombia and Latin America in general.
						<h3>Geography</h3>
						<p>Most people assume that Colombia is just a tropical country; but the country is physical geography is amazingly diverse.</p>
						<img src="img/inline/colombian_scenery.gif" class="right" alt="Stunning Colombian scenery"/>
						<p>The western part, almost half the territory, is mountainous, where the Andes splits into three chains Cordillera Occidental, Central and Oriental running roughly parallel north / south for the length of the country.</p>
						<p>It has 15 peaks over 5,000m, making them all higher than anything in the USA. Two valleys, the Valle del Cauca and Valle del Magdalena, are sandwiched between the three cordilleras. Both valleys have their own eponymous rivers, which flow northward, unite and eventually empty into the Caribbean near Barranquilla.</p>
						<img src="img/inline/beach_taganga.gif" class="left" class="Tagange Beach at Sunset" />
						<p>More than half the country, east of the Andes is vast lowland, which is generally divided into two regions. Los Llanos to the north and the Amazon to the south.</p>
						<p>Los Llanos, roughly 250,000 km<sup>2</sup> in area, is a huge open savannah in the Orinoco river basin. The Amazon stretching over 400,000 km<sup>2</sup>, occupies all of Colombia's southeast and lies in the Amazon basin. Most of this land is covered by a think rainforest and crisscrossed by rivers.</p>
						<h3>Flora and Fauna</h3>
						<img src="img/inline/visit_orchidea.gif" class="right" alt="Visit to Orchidea"/>
						<p>Like no other country on the planet Colombia has the full range of environments and micro climates. Its unique location in the tropics but with the majestic high attitude Andes makes it a complete package and a traveler's paradise. Colombia can rightly claim to have the most plants and animals per square kilometer in the world. With 350 different species of Mammals; 15% of the world's species of primates and 18% of the world's species birds who could argue differently.</p>
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
