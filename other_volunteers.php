<?php 
	require('req/head_req.php');
	require('req/body_req.php');

	$context = "volunteering";
?>
<? write_doctype(DT_TRANS); ?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<? write_title("What other volunteer have said");?>
	<? write_metas('Hear what other volunteers have said about us and their time volunteering in Ibague. Our volunteers write about how welcome they felt coming to Ibague and volunteering with Let\'s Go Volunteer. They talk of the love and happiness they had sharing their time and efforts with the children, women and all the staff participating in the workings of the organization.','volunteer,experience,welcome,love,excited,amazing,staff,easy,spanish,return,projects,kids,learn,share,work,wonderful');?>
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
						<h1><img src="img/logos/lets_go_volunteer.gif" alt="Let's Go Volunteer"/>What other volunteers have said</h1>
						<hr/>
						<div class="link-box">
							<img src="img/quotes/Brandi-Friesen.gif" alt="Brandi, Canada" /></a>
							<h2>Brandi, Canada</h2>
							<p>What I was met with blew away any expectations that I may have had going into this. Never in my life have I ever felt so welcome, so loved. Everyday was a pleasure. The love they have for each other, and concern, surpasses that of anything I have seen before. There was not an evident existence of loneliness in that place, nor were the people separated by isolation as in much of the western world, for it had been replaced with love, hope, and faith in the future.</p>
							<p>I was beyond excited that I would be able to live with Colombian family during my stay. The Colombian family that I had became my own. At the end of my stay I had a whole new set of brothers and parents that I care for deeply. As I left Ibagué, my family and dear friends that I had made here, I also left my heart with them. One day I will return to see them again.</p>
						</div>
						<div class="link-box">
							<img src="img/quotes/Robert-Castellano.gif" alt="Rob, Australia" /></a>
							<h2>Rob, Australia</h2>
							<p>I wanted to give something back after my amazing trip around South America. The staff made everything so easy and I felt so welcome right from the first day. My lack of spanish or teaching experience didn't matter at all. The children were so keen to learn and I really felt I was making a difference in their lives. I only came for six weeks and I ended up staying 6 months!</p>
						</div>
						<div class="link-box">
							<img src="img/quotes/Andrea-Otavalo.gif" alt="Andrea, UK" /></a>
							<h2>Andrea, UK</h2>
							<p>Even though I was born in Colombia, I have spent most of my life abroad. I decided to participate in this project looking to spend a nice time with kids, but what I found was the most fulfilling experience, that helped me believe in the importance of opening your heart and offering a helping hand to those who need it the most. I had an amazing time, both volunteering and living in my country all over again.</p>
						</div>
						<div class="link-box">
							<img src="img/quotes/Jordan.gif" alt="Jordan, Australia" /></a>
							<h2>Jordan, Australia</h2>
							<p>At first I was a little concern about the situation in Colombia. Once I started my volunteer work I realized how great Colombia is and how nice and warm the people can be. I recommend this wonderful experience!, Let's Go Volunteer is a serious and trustworthy organization that gave me the confidence to make this journey.</p>
						</div>
						<div class="link-box">
							<img src="img/quotes/Anne-Helene-Lecomte.gif" alt="Anne Helene, France" /></a>
							<h2>Anne Helene, France</h2>
							<p>My volunteer experience with Let's Go Volunteer and my stay in Colombia was a great experience. The different programs the organization has, are important for the people that live here, and for the social development of the country. Working with the kids is something nice and rewarding. Here I lived, learned and shared impressive moments. Colombia's colors, scents, sounds and their people would stay with me, I truly recommend this experience</p>
						</div>
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
