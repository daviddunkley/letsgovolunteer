<?php 
	//include_once("req/ga_req.php");
	require('req/head_req.php');
	require('req/body_req.php');

	$context = "prices";
?>
<? write_doctype(DT_TRANS); ?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<? write_title('Our fees')?>
	<? write_metas('Our fees are the majority of our income. We use the fees from volunteers to fund our various programs and pay our Colombian staff. We prefer if volunteers pay in Colombian pesos once they have arrived in Colombia', 'NGO,support,programs,staff,fair,wages,appreciation,dollar,USD,peso'); ?>
	<? write_css(ST_BASIC | ST_TABLE); ?>
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
						<h1><img src="img/logos/lets_go_volunteer.gif" alt="Let's Go Volunteer"/>Our Fees</h1>
						<hr/>
						<p>As a small NGO in Colombia we receive a majority of our financial support from our volunteer programs. We pay our staff fair wages as appreciation for the incredible work they do. The rest we use to fund our programs and help support other programs run through out the city. We have tried as hard as we can to reduce our prices as much as we can. We provide a fuller explanation of our costs on the <a href="why_pay.php">why should I pay page</a>.</p>
						<p>We have a standard Administration Fee of $US 65 which covers the cost of processing your application.</p>
						<p>The fees cover your accommodation costs, lunch/dinner during the week and the facilities at the centre (internet, laundry etc). It also helps us maintain the various services and programs we provide.</p>
						<table>
							<thead>
								<tr>
									<th>Number of weeks</th>
									<th>Price in USD</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1 week</td>
									<td>$250</td>
								</tr>
								<tr class="odd">
									<td>2 weeks</td>
									<td>$300</td>
								</tr>
								<tr>
									<td>3 weeks</td>
									<td>$400</td>
								</tr>
								<tr class="odd">
									<td>4 weeks</td>
									<td>$500</td>
								</tr>
								<tr>
									<td>12 weeks</td>
									<td>$1,350</td>
								</tr>
								<tr class="odd">
									<td>24 weeks</td>
									<td>$2,400</td>
								</tr>
								<tr>
									<td>36 weeks</td>
									<td>$3,500</td>
								</tr>
							</tbody>
						</table>
						<p>We would prefer that you pay reasonably soon after you at the center. We have found it is easier and usually cheaper for volunteers if they use their card in the cash machines to withdraw the money, which we can then deposit the cash directly into our bank account. If you are not happy to do this we can discuss other options after you have arrived.</p>
						<p>It is also easier and cheaper for us if you pay in Colombian pesos as the banks here charge us a lot to deposit US dollars.</p>
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
