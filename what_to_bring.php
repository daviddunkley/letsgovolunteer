<?php 
	require('req/head_req.php');
	require('req/body_req.php');

	$context = "volunteering";
?>
<? write_doctype(DT_TRANS); ?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<? write_title("What to bring volunteering in Ibague");?>
	<? write_metas('We provide a basic list of items to bring volunteering in Ibague. It also suggests that volunteers do not bring things that are unnecessary or of high sentimental value.','packing,travel,clothing,notebook,experiences,backpack,jacket,pants,shirts,sandals,shoes,camera,laptop,dictionary,medical kit,documents');?>
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
						<h1><img src="img/logos/lets_go_volunteer.gif" alt="Let's Go Volunteer"/>What you should bring with you</h1>
						<hr/>
						<p>Pack and travel Light! Don't bring any unnecessary clothing or items of high sentimental or material value. Bring clothes that you might be willing to leave behind, to use up in work activities or to pass on to a needy person. Be prepared to wear the same garments often throughout your trip. You might also bring along a journal or notebook so that you'll be able to reflect upon and write about your experiences.</p>
						<p>Here will give you a list of items that you might consider bringing:</p>
						<ul>
							<li>A backpack</li>
							<li>A smaller day pack</li>
							<li>A rain jacket (it can rain very hard but never for long)</li>
							<li>1 formal pants/dress.</li>
							<li>1 or 2 jeans (comfortable)</li>
							<li>4 or 5 t-shirts</li>
							<li>1 or 2 shorts</li>
							<li>Swim suit (there are lots of opportunities to swim)</li>
							<li>2 long sleeved shirts</li>
							<li>1 hat or cap</li>
							<li>Sunglasses</li>
							<li>1 fleece</li>
							<li>Socks and underwear</li>
							<li>Sandals and sports shoes</li>
							<li>Hiking shoes (if you hike)</li>
							<li>Small flashlight</li>
							<li>A journal</li>
							<li>Spanish Dictionary (if you need it)</li>
							<li>Camera (don't forget the cables)</li>
							<li>Laptop, iPhone, iPad (although we do have computers here for your use)</li>
							<li>Money belt</li>
							<li>A guide book (though we have some here and you can make photocopies)</li>
							<li>A padlock and cable lock (for your backpack, in case you travel and stay at hostels)</li>
							<li>Sewing kit (for those emergency repairs)</li>
							<li>An alarm clock or at least a watch with an alarm</li>
							<li>A personal medical aid kit: (even though we are well prepared for minor problems, it better to be safe and sorry)
								<ul>
									<li>Sun block (a must)</li>
									<li>Diarrhea pills</li>
									<li>Band-Aids and bandages</li>
									<li>Antihistamine</li>
									<li>Aspirin</li>
									<li>Insect repellent</li>
									<li>Antiseptic cream</li>
								</ul>
							</li>
						    <li>Photocopies of all your documents, and place them apart from the originals.</li>
						    <li>Note: Feminine hygiene items can be bought here.</li>
							<li>Note: We provide bed linen but many volunteers find that bring a towel from home can be a good idea</p>
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
