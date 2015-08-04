<?php 

	require('../req/head_req.php');
	require('../req/body_req.php');

	$context = "prices";
?>
<? write_doctype(DT_TRANS); ?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<!-- saved from url=(0014)about:internet -->
<head>
	<? write_title('Our photo gallery')?>
	<? write_metas('This is a collection of photos mostly taken by volunteers during their time volunteering with us', 'photos,children,work,family,outings,weekends'); ?>
	<? write_ga_snippet();?>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=8" />
	<link rel="image_src" href="Volunteers%2Fslides%2F131263_481050976680_674721680_6266368_589777_o.jpg" />
	<link href="/photo_gallery/res/common.css" rel="stylesheet" type="text/css" />
	<!--[if lte IE 6]><link href="/photo_gallery/res/ie6fix.css" rel="stylesheet" type="text/css" /><![endif]-->
	<link href="/photo_gallery/res/styles.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="/photo_gallery/res/jquery.min.js"></script>
	<script type="text/javascript">//<![CDATA[
var title='Volunteers';
var level=0;
var uplink='../';
var resPath='/photo_gallery/res';
var relPath='';
var slideshow={delay:4000,loop:false,auto:true};
var newDays=0;
var askAtLast=true;
var enableMouseWheel=true;
var captionsOn=false;
var thumbsOn=false;
var fitImages=false;
var fitShrinkonly=false;
var borderWidth=10;
var thumbHeight=100;
var dirCount=0;
var numberLinks=false;
var images=new Array(
	{file:'slides/131263_481050976680_674721680_6266368_589777_o.jpg',video:false,thumb:'thumbs/131263_481050976680_674721680_6266368_589777_o.jpg',caption:'<div class="comment">Berenice (host) relaxes with some volunteers</div>',thmcapt:'<span class="nr">1</span>  <small>Berenice (host) relaxes with some volunteers</small>',link:'',orig:false,date:'2/17/11 9:54 PM',mod:15022,size:'',width:800,height:600},
	{file:'slides/DSC09307.JPG',video:false,thumb:'thumbs/DSC09307.JPG',caption:'<div class="comment">Jamie (USA) and Juana (France) are very happy with their leaving gifts from the children</div>',thmcapt:'<span class="nr">2</span>  <small>Jamie (USA) and Juana (France) are very happy with their leaving gifts from the children</small>',link:'',orig:false,date:'7/25/08 4:46 PM',mod:14962,size:'',width:450,height:600},
	{file:'slides/DSCN2487.JPG',video:false,thumb:'thumbs/DSCN2487.JPG',caption:'<div class="comment">Rebecca (USA) receives a surprise gift of flowers from the children</div>',thmcapt:'<span class="nr">3</span>  <small>Rebecca (USA) receives a surprise gift of flowers from the children</small>',link:'',orig:false,date:'',mod:15029,size:'',width:800,height:600},
	{file:'slides/DSC04107.JPG',video:false,thumb:'thumbs/DSC04107.JPG',caption:'<div class="comment">Ossi and Nicole two volunteers from the US</div>',thmcapt:'<span class="nr">4</span>  <small>Ossi and Nicole two volunteers from the US</small>',link:'',orig:false,date:'6/26/09 4:35 PM',mod:14460,size:'',width:800,height:600},
	{file:'slides/181062_10150098153941681_674721680_6741169_6212710_n.jpg',video:false,thumb:'thumbs/181062_10150098153941681_674721680_6741169_6212710_n.jpg',caption:'<div class="comment">Denis (France) and Saschia (Switzerland) with Jimena the dance teacher</div>',thmcapt:'<span class="nr">5</span>  <small>Denis (France) and Saschia (Switzerland) with Jimena the dance teacher</small>',link:'',orig:false,date:'2/17/11 3:08 PM',mod:15022,size:'',width:720,height:540},
	{file:'slides/54347_471008241680_674721680_6117728_3869892_o.jpg',video:false,thumb:'thumbs/54347_471008241680_674721680_6117728_3869892_o.jpg',caption:'<div class="comment">The volunteers attend a football match with our local team Deportes Tolima</div>',thmcapt:'<span class="nr">6</span>  <small>The volunteers attend a football match with our local team Deportes Tolima</small>',link:'',orig:false,date:'2/17/11 9:56 PM',mod:15022,size:'',width:800,height:600},
	{file:'slides/73718_1680615181484_1420683354_31812977_7974895_n.jpg',video:false,thumb:'thumbs/73718_1680615181484_1420683354_31812977_7974895_n.jpg',caption:'<div class="comment">Nakia (USA) cleans up after some concreting work at San Jose</div>',thmcapt:'<span class="nr">7</span>  <small>Nakia (USA) cleans up after some concreting work at San Jose</small>',link:'',orig:false,date:'9/5/11 11:35 AM',mod:15222,size:'',width:720,height:540},
	{file:'slides/DSC09069.JPG',video:false,thumb:'thumbs/DSC09069.JPG',caption:'<div class="comment">Rebecca (USA) with Carolisbeth</div>',thmcapt:'<span class="nr">8</span>  <small>Rebecca (USA) with Carolisbeth</small>',link:'',orig:false,date:'7/4/08 10:08 AM',mod:14064,size:'',width:450,height:600},
	{file:'slides/40430_1468220038398_1620493573_1158837_6821457_n.jpg',video:false,thumb:'thumbs/40430_1468220038398_1620493573_1158837_6821457_n.jpg',caption:'<div class="comment">Nakia (USA) with some local children in the hot springs</div>',thmcapt:'<span class="nr">9</span>  <small>Nakia (USA) with some local children in the hot springs</small>',link:'',orig:false,date:'9/5/11 11:34 AM',mod:15222,size:'',width:720,height:540},
	{file:'slides/DSC09399.JPG',video:false,thumb:'thumbs/DSC09399.JPG',caption:'<div class="comment">Lisa (France) reads a story to some of the children</div>',thmcapt:'<span class="nr">10</span>  <small>Lisa (France) reads a story to some of the children</small>',link:'',orig:false,date:'8/1/08 4:44 PM',mod:14962,size:'',width:800,height:600},
	{file:'slides/DSC09853.JPG',video:false,thumb:'thumbs/DSC09853.JPG',caption:'<div class="comment">Jacqui (Canada) makes a new friend</div>',thmcapt:'<span class="nr">11</span>  <small>Jacqui (Canada) makes a new friend</small>',link:'',orig:false,date:'8/19/08 2:59 PM',mod:14962,size:'',width:450,height:600},
	{file:'slides/DSC00935.JPG',video:false,thumb:'thumbs/DSC00935.JPG',caption:'<div class="comment">Volunteers Steve (UK) and Denis (France) relaxing in the newly built back garden area</div>',thmcapt:'<span class="nr">12</span>  <small>Volunteers Steve (UK) and Denis (France) relaxing in the newly built back garden area</small>',link:'',orig:false,date:'2/3/11 5:50 PM',mod:15008,size:'',width:800,height:600},
	{file:'slides/DSC04179.JPG',video:false,thumb:'thumbs/DSC04179.JPG',caption:'<div class="comment">Out for some dinner with Berenice</div>',thmcapt:'<span class="nr">13</span>  <small>Out for some dinner with Berenice</small>',link:'',orig:false,date:'6/28/09 1:13 PM',mod:14460,size:'',width:800,height:600},
	{file:'slides/DSC03620.JPG',video:false,thumb:'thumbs/DSC03620.JPG',caption:'<div class="comment">Volunteers take a group of children on an outing</div>',thmcapt:'<span class="nr">14</span>  <small>Volunteers take a group of children on an outing</small>',link:'',orig:false,date:'8/11/09 5:10 PM',mod:15029,size:'',width:800,height:600},
	{file:'slides/DSC04117.JPG',video:false,thumb:'thumbs/DSC04117.JPG',caption:'<div class="comment">The Ibagué folklore festival (end of June) is always a great time to volunteer</div>',thmcapt:'<span class="nr">15</span>  <small>The Ibagué folklore festival (end of June) is always a great time to volunteer</small>',link:'',orig:false,date:'6/26/09 4:45 PM',mod:14460,size:'',width:800,height:600},
	{file:'slides/DSC04877.JPG',video:false,thumb:'thumbs/DSC04877.JPG',caption:'<div class="comment">Volunteers on a hike in the nearby mountains</div>',thmcapt:'<span class="nr">16</span>  <small>Volunteers on a hike in the nearby mountains</small>',link:'',orig:false,date:'8/17/09 3:11 PM',mod:14488,size:'',width:450,height:600},
	{file:'slides/DSC04980.JPG',video:false,thumb:'thumbs/DSC04980.JPG',caption:'<div class="comment">Marios (Greece) sits and listens to a presentation of some of the children</div>',thmcapt:'<span class="nr">17</span>  <small>Marios (Greece) sits and listens to a presentation of some of the children</small>',link:'',orig:false,date:'8/21/09 5:26 PM',mod:14477,size:'',width:800,height:600},
	{file:'slides/DSC04972.JPG',video:false,thumb:'thumbs/DSC04972.JPG',caption:'<div class="comment">Simran (Canada) receiving some letters and drawings as part of his leaving party</div>',thmcapt:'<span class="nr">18</span>  <small>Simran (Canada) receiving some letters and drawings as part of his leaving party</small>',link:'',orig:false,date:'8/21/09 5:25 PM',mod:14962,size:'',width:450,height:600},
	{file:'slides/DSC03578.JPG',video:false,thumb:'thumbs/DSC03578.JPG',caption:'<div class="comment">Berenice takes some volunteers out for a tour of the city</div>',thmcapt:'<span class="nr">19</span>  <small>Berenice takes some volunteers out for a tour of the city</small>',link:'',orig:false,date:'8/9/09 10:59 AM',mod:15029,size:'',width:800,height:600},
	{file:'slides/Picture 013.jpg',video:false,thumb:'thumbs/Picture 013.jpg',caption:'<div class="comment">Nick (USA) serving a snack to the children</div>',thmcapt:'<span class="nr">20</span>  <small>Nick (USA) serving a snack to the children</small>',link:'',orig:false,date:'11/4/10 11:51 PM',mod:15044,size:'',width:450,height:600},
	{file:'slides/DSC00004.JPG',video:false,thumb:'thumbs/DSC00004.JPG',caption:'<div class="comment">Denis (France) relaxes after a days volunteering</div>',thmcapt:'<span class="nr">21</span>  <small>Denis (France) relaxes after a days volunteering</small>',link:'',orig:false,date:'12/21/10 4:04 PM',mod:15048,size:'',width:800,height:600},
	{file:'slides/DSC00019.JPG',video:false,thumb:'thumbs/DSC00019.JPG',caption:'<div class="comment">Denis (France) spending time with the children</div>',thmcapt:'<span class="nr">22</span>  <small>Denis (France) spending time with the children</small>',link:'',orig:false,date:'12/22/10 4:07 PM',mod:15048,size:'',width:450,height:600},
	{file:'slides/DSC09006.JPG',video:false,thumb:'thumbs/DSC09006.JPG',caption:'<div class="comment">Tom (Ireland) receives some Spanish tution</div>',thmcapt:'<span class="nr">23</span>  <small>Tom (Ireland) receives some Spanish tution</small>',link:'',orig:false,date:'6/4/10 4:02 PM',mod:14838,size:'',width:800,height:600},
	{file:'slides/BERENICE MARIACHIS.jpg',video:false,thumb:'thumbs/BERENICE MARIACHIS.jpg',caption:'<div class="comment">Hadley (USA) shares a hug with Berenice</div>',thmcapt:'<span class="nr">24</span>  <small>Hadley (USA) shares a hug with Berenice</small>',link:'',orig:false,date:'10/30/10 3:23 AM',mod:14912,size:'',width:720,height:540},
	{file:'slides/P1020113.JPG',video:false,thumb:'thumbs/P1020113.JPG',caption:'<div class="comment">Volunteers on a weekend trip to the Nevados National Park</div>',thmcapt:'<span class="nr">25</span>  <small>Volunteers on a weekend trip to the Nevados National Park</small>',link:'',orig:false,date:'8/14/10 11:48 AM',mod:14835,size:'',width:800,height:600},
	{file:'slides/181062_10150098153936681_674721680_6741168_6147178_n.jpg',video:false,thumb:'thumbs/181062_10150098153936681_674721680_6741168_6147178_n.jpg',caption:'<div class="comment">Saschia (Switzerland) meets the family of some of the children</div>',thmcapt:'<span class="nr">26</span>  <small>Saschia (Switzerland) meets the family of some of the children</small>',link:'',orig:false,date:'2/17/11 9:59 PM',mod:15022,size:'',width:720,height:540},
	{file:'slides/SAM_0430.JPG',video:false,thumb:'thumbs/SAM_0430.JPG',caption:'<div class="comment">Nick (USA) enjoys a beer with a local friend he has made</div>',thmcapt:'<span class="nr">27</span>  <small>Nick (USA) enjoys a beer with a local friend he has made</small>',link:'',orig:false,date:'12/3/10 6:39 AM',mod:15044,size:'',width:800,height:600},
	{file:'slides/P1190476.JPG',video:false,thumb:'thumbs/P1190476.JPG',caption:'<div class="comment">Kathleen (Belgium) does some Parapenting on a weekend excursion</div>',thmcapt:'<span class="nr">28</span>  <small>Kathleen (Belgium) does some Parapenting on a weekend excursion</small>',link:'',orig:false,date:'12/7/10 12:48 PM',mod:15048,size:'',width:800,height:600},
	{file:'slides/180349_10150101452856681_674721680_6786400_5634160_n.jpg',video:false,thumb:'thumbs/180349_10150101452856681_674721680_6786400_5634160_n.jpg',caption:'<div class="comment">Volunteer Kathleen (Belgium) with the best view of Ibagué</div>',thmcapt:'<span class="nr">29</span>  <small>Volunteer Kathleen (Belgium) with the best view of Ibagué</small>',link:'',orig:false,date:'2/17/11 10:02 PM',mod:15022,size:'',width:720,height:540},
	{file:'slides/Mikayla fotos 102.jpg',video:false,thumb:'thumbs/Mikayla fotos 102.jpg',caption:'<div class="comment">Out and About in the streets of Ibagué</div>',thmcapt:'<span class="nr">30</span>  <small>Out and About in the streets of Ibagué</small>',link:'',orig:false,date:'11/30/02 12:00 AM',mod:15044,size:'',width:800,height:600},
	{file:'slides/Mikayla fotos 148.jpg',video:false,thumb:'thumbs/Mikayla fotos 148.jpg',caption:'<div class="comment">Mikayala (Canada) hard at work at the Orchid House</div>',thmcapt:'<span class="nr">31</span>  <small>Mikayala (Canada) hard at work at the Orchid House</small>',link:'',orig:false,date:'11/30/02 12:00 AM',mod:15044,size:'',width:800,height:600},
	{file:'slides/Picture 650.jpg',video:false,thumb:'thumbs/Picture 650.jpg',caption:'<div class="comment">Elena (USA) meets the younger sister of one of the children at their home</div>',thmcapt:'<span class="nr">32</span>  <small>Elena (USA) meets the younger sister of one of the children at their home</small>',link:'',orig:false,date:'1/8/11 5:19 PM',mod:15044,size:'',width:800,height:600},
	{file:'slides/Mikayla fotos 111.jpg',video:false,thumb:'thumbs/Mikayla fotos 111.jpg',caption:'<div class="comment">Volunteers and Colombians relax at a swimming pool</div>',thmcapt:'<span class="nr">33</span>  <small>Volunteers and Colombians relax at a swimming pool</small>',link:'',orig:false,date:'11/30/02 12:00 AM',mod:15044,size:'',width:800,height:600},
	{file:'slides/56531_480909316680_674721680_6263777_946927_o.jpg',video:false,thumb:'thumbs/56531_480909316680_674721680_6263777_946927_o.jpg',caption:'<div class="comment">Saschia (Switzerland) spends time with some children</div>',thmcapt:'<span class="nr">34</span>  <small>Saschia (Switzerland) spends time with some children</small>',link:'',orig:false,date:'2/17/11 9:56 PM',mod:15022,size:'',width:800,height:600},
	{file:'slides/Picture 004.jpg',video:false,thumb:'thumbs/Picture 004.jpg',caption:'<div class="comment">Emanuelle (Switzerland) with some of the children</div>',thmcapt:'<span class="nr">35</span>  <small>Emanuelle (Switzerland) with some of the children</small>',link:'',orig:false,date:'12/23/10 10:08 PM',mod:15044,size:'',width:800,height:600},
	{file:'slides/54167_471015121680_674721680_6117761_2098967_o.jpg',video:false,thumb:'thumbs/54167_471015121680_674721680_6117761_2098967_o.jpg',caption:'<div class="comment">Saschia (Switzerland) poses with Dana</div>',thmcapt:'<span class="nr">36</span>  <small>Saschia (Switzerland) poses with Dana</small>',link:'',orig:false,date:'2/17/11 9:56 PM',mod:15022,size:'',width:800,height:600},
	{file:'slides/Mikayla fotos 266.jpg',video:false,thumb:'thumbs/Mikayla fotos 266.jpg',caption:'<div class="comment">Mikalaya (Canada) has some soup up at the hot springs</div>',thmcapt:'<span class="nr">37</span>  <small>Mikalaya (Canada) has some soup up at the hot springs</small>',link:'',orig:false,date:'11/30/02 12:00 AM',mod:15044,size:'',width:800,height:600},
	{file:'slides/100_0059.jpg',video:false,thumb:'thumbs/100_0059.jpg',caption:'<div class="comment">Kareem (USA) on his tour of Bogotá</div>',thmcapt:'<span class="nr">38</span>  <small>Kareem (USA) on his tour of Bogotá</small>',link:'',orig:false,date:'',mod:15029,size:'',width:800,height:600}
);
var _jaWidgetBarColor='black';
var likeBtnTheme='dark';
var text={atLastPage:'At last page',atLastPageQuestion:'Where to go next?',startOver:'Start over',up:'Up one level',backToHome:'Back to home',stop:'Stop',upgradeBrowser:'Upgrade your browser!',upgradeBrowserExplain:'You are using an outdated version of Internet Explorer, which cannot properly display this album.',contin:'Continue',download:'Download',original:'Original',hiRes:'High Res',showExif:'Display photograpic (Exif/Iptc) data',photoData:'Photo data',showLocation:'Show the location on map',map:'Map',noGPS:'No GPS data found',buyThis:'Buy this item',notForSale:'Not for sale.',shareOn:'Share on',checkOutThis:'Check this out'};
var share={likeBtn:false,tweetBtn:+false,facebook:false,twitter:false,digg:false,delicious:false,myspace:false,stumbleupon:false,email:false};
var rightClickProtect=false;
//]]></script>
	<script type="text/javascript" src="/photo_gallery/res/skin.js"></script>
	<link rel="alternate" href="/photo_gallery/album.rss" type="application/rss+xml"/>
</head>
<body>
	<div id="splash">
		<div id="header" style="background-image:url(folderimage.jpg);">
			<div id="title">
				<div id="parent"><a href="../" title="Back to home" target="_parent" class="showhint">&nbsp;</a></div>
				<div class="texts">
					<h1>Volunteers at Let's Go Volunteer'</h1>
				</div>
				<div class="clear"></div>
			</div>
			<div id="startbtn">&nbsp;</div><div id="starttext">Start slideshow</div>
		</div>
		<div id="galleries"><div id="gallerycnt">
			<div id="grid">
				<ul class="thmb">
					<li><a href="">&nbsp;</a></li><li><a href="">&nbsp;</a></li><li><a href="">&nbsp;</a></li><li><a href="">&nbsp;</a></li><li><a href="">&nbsp;</a></li><li><a href="">&nbsp;</a></li><li><a href="">&nbsp;</a></li><li><a href="">&nbsp;</a></li><li><a href="">&nbsp;</a></li><li><a href="">&nbsp;</a></li><li><a href="">&nbsp;</a></li><li><a href="">&nbsp;</a></li><li><a href="">&nbsp;</a></li><li><a href="">&nbsp;</a></li><li><a href="">&nbsp;</a></li><li><a href="">&nbsp;</a></li><li><a href="">&nbsp;</a></li><li><a href="">&nbsp;</a></li><li><a href="">&nbsp;</a></li><li><a href="">&nbsp;</a></li><li><a href="">&nbsp;</a></li><li><a href="">&nbsp;</a></li><li><a href="">&nbsp;</a></li><li><a href="">&nbsp;</a></li><li><a href="">&nbsp;</a></li><li><a href="">&nbsp;</a></li><li><a href="">&nbsp;</a></li><li><a href="">&nbsp;</a></li><li><a href="">&nbsp;</a></li><li><a href="">&nbsp;</a></li><li><a href="">&nbsp;</a></li><li><a href="">&nbsp;</a></li><li><a href="">&nbsp;</a></li><li><a href="">&nbsp;</a></li><li><a href="">&nbsp;</a></li><li><a href="">&nbsp;</a></li><li><a href="">&nbsp;</a></li><li><a href="">&nbsp;</a></li>
				</ul>
				<div class="clear"></div>
			</div>
		</div></div>
		<div id="footer">
			38 images &nbsp; &middot; &nbsp; 
			Create <a href="http://jalbum.net/">web photo albums</a> and <a href="http://jalbum.net/photo-book">photo books</a> with <a href="http://jalbum.net" title="jAlbum, freeware album generator, v9.6.1" class="showhint">jAlbum</a> &nbsp; &middot; &nbsp; <a href="http://jalbum.net/skins/skin/Turtle" title="Skin: Turtle Black, v1.4.3" class="showhint">Turtle Skin</a> &nbsp; &middot; &nbsp; 
			<a href="javascript:void(0)" class="showhelp">Help</a>
		</div>
	</div>
	<div id="images" style="display:none;">
		<div class="current"></div>
		<div class="swap"></div>
		<div class="wait"></div>
		<div id="navigation">
			<div id="thumbs">
				<div id="scroll-left">&nbsp;</div><div id="scroll-right">&nbsp;</div>
				<div id="thumbcnt"><ul class="thmb" style="width:5700px">
					<li><a href="">&nbsp;</a></li><li><a href="">&nbsp;</a></li><li><a href="">&nbsp;</a></li><li><a href="">&nbsp;</a></li><li><a href="">&nbsp;</a></li><li><a href="">&nbsp;</a></li><li><a href="">&nbsp;</a></li><li><a href="">&nbsp;</a></li><li><a href="">&nbsp;</a></li><li><a href="">&nbsp;</a></li><li><a href="">&nbsp;</a></li><li><a href="">&nbsp;</a></li><li><a href="">&nbsp;</a></li><li><a href="">&nbsp;</a></li><li><a href="">&nbsp;</a></li><li><a href="">&nbsp;</a></li><li><a href="">&nbsp;</a></li><li><a href="">&nbsp;</a></li><li><a href="">&nbsp;</a></li><li><a href="">&nbsp;</a></li><li><a href="">&nbsp;</a></li><li><a href="">&nbsp;</a></li><li><a href="">&nbsp;</a></li><li><a href="">&nbsp;</a></li><li><a href="">&nbsp;</a></li><li><a href="">&nbsp;</a></li><li><a href="">&nbsp;</a></li><li><a href="">&nbsp;</a></li><li><a href="">&nbsp;</a></li><li><a href="">&nbsp;</a></li><li><a href="">&nbsp;</a></li><li><a href="">&nbsp;</a></li><li><a href="">&nbsp;</a></li><li><a href="">&nbsp;</a></li><li><a href="">&nbsp;</a></li><li><a href="">&nbsp;</a></li><li><a href="">&nbsp;</a></li><li><a href="">&nbsp;</a></li>
				</ul></div>
			</div>
			<div id="controls"><ul class="showhint"><li id="prev" title="Previous picture">&nbsp;</li><li id="up" title="Back to splash page">&nbsp;</li><li id="noresize" title="1:1 size">&nbsp;</li><li id="resize" title="Fit to screen">&nbsp;</li><li id="info" title="Show caption / info">&nbsp;</li><li id="noinfo" title="Hide caption / info">&nbsp;</li><li id="index" title="Show thumbnails">&nbsp;</li><li id="noindex" title="Hide thumbnails">&nbsp;</li><li id="play" title="Start autoplay">&nbsp;</li><li id="pause" title="Stop autoplay">&nbsp;</li><li id="next" title="Next picture">&nbsp;</li></ul><div class="clear"></div></div>
		</div>
	</div>
	<div id="help">
		<div class="window" id="helpsplash"><div class="close"><a href="javascript:void(0)" title="Close window" class="showhint">&nbsp;</a></div><h2>Splash page &middot; <a href="">Image page</a></h2>
		<ol><li><b>Up</b> one level <em>Up arrow</em></li><li>Start <b>slideshow</b> <em>Numpad *</em> <em>Space</em></li><li>Subalbums and thumbnails (if exists)</li><li><b>Share</b> and <b>Like</b> buttons to share this album over social networking sites</li></ol><p>Press <b>F1</b> any time to get help!</p></div>
		<div class="window" id="helpimage"><div class="close"><a href="javascript:void(0)" title="Close window" class="showhint">&nbsp;</a></div><h2><a href="">Splash page</a> &middot; Image page</h2>
		<ol><li>Thumbnail navigation window</li><li><b>Previous</b> picture <em>Left arrow</em></li><li>Back to <b>splash page</b> / up one level <em>Up arrow</em></li><li>Toggle <b>fit to screen</b> or <b>1:1</b> size <em>Numpad +</em></li><li>Show/hide <b>captions</b> and other info <em>Numpad -</em></li><li>Show/hide <b>thumbnails</b> <em>Numpad -</em></li><li>Start/stop <b>slideshow</b> <em>Numpad *</em> <em>Space</em></li><li><b>Next</b> picture <em>Right arrow</em></li><li><b>Click the image</b> to go to the next picture</li><li><b>Double click the image</b> to switch between <b>fit to window</b> or <b>1:1</b> magnification. You can also <b>drag and move</b> if larger than the screen.</li><li><b>Information window</b>: caption, photo data, map, shopping cart, etc.</li></ol></div>
	</div>
	<noscript><div id="noscript"><div class="head">
		<h1>Volunteers</h1>
		<h4></h4>
		<p>[Please allow JavaScript for this page to enjoy in its full!]</p>
		<p><a href="../">Up one level</a></p>
			</div>
	<div class="oneimg"><a href="#1"><img src="slides/131263_481050976680_674721680_6266368_589777_o.jpg" width="800" height="600" alt="Berenice (host) relaxes with some volunteers" /></a><div class="caption"><div class="comment">Berenice (host) relaxes with some volunteers</div></div></div>
	<div class="oneimg"><a href="#2"><img src="slides/DSC09307.JPG" width="450" height="600" alt="Jamie (USA) and Juana (France) are very happy with their leaving gifts from the children" /></a><div class="caption"><div class="comment">Jamie (USA) and Juana (France) are very happy with their leaving gifts from the children</div></div></div>
	<div class="oneimg"><a href="#3"><img src="slides/DSCN2487.JPG" width="800" height="600" alt="Rebecca (USA) receives a surprise gift of flowers from the children" /></a><div class="caption"><div class="comment">Rebecca (USA) receives a surprise gift of flowers from the children</div></div></div>
	<div class="oneimg"><a href="#4"><img src="slides/DSC04107.JPG" width="800" height="600" alt="Ossi and Nicole two volunteers from the US" /></a><div class="caption"><div class="comment">Ossi and Nicole two volunteers from the US</div></div></div>
	<div class="oneimg"><a href="#5"><img src="slides/181062_10150098153941681_674721680_6741169_6212710_n.jpg" width="720" height="540" alt="Denis (France) and Saschia (Switzerland) with Jimena the dance teacher" /></a><div class="caption"><div class="comment">Denis (France) and Saschia (Switzerland) with Jimena the dance teacher</div></div></div>
	<div class="oneimg"><a href="#6"><img src="slides/54347_471008241680_674721680_6117728_3869892_o.jpg" width="800" height="600" alt="The volunteers attend a football match with our local team Deportes Tolima" /></a><div class="caption"><div class="comment">The volunteers attend a football match with our local team Deportes Tolima</div></div></div>
	<div class="oneimg"><a href="#7"><img src="slides/73718_1680615181484_1420683354_31812977_7974895_n.jpg" width="720" height="540" alt="Nakia (USA) cleans up after some concreting work at San Jose" /></a><div class="caption"><div class="comment">Nakia (USA) cleans up after some concreting work at San Jose</div></div></div>
	<div class="oneimg"><a href="#8"><img src="slides/DSC09069.JPG" width="450" height="600" alt="Rebecca (USA) with Carolisbeth" /></a><div class="caption"><div class="comment">Rebecca (USA) with Carol</div></div></div>
	<div class="oneimg"><a href="#9"><img src="slides/40430_1468220038398_1620493573_1158837_6821457_n.jpg" width="720" height="540" alt="Nakia (USA) with some local children in the hot springs" /></a><div class="caption"><div class="comment">Nakia (USA) with some local children in the hot springs</div></div></div>
	<div class="oneimg"><a href="#10"><img src="slides/DSC09399.JPG" width="800" height="600" alt="Lisa (France) reads a story to some of the children" /></a><div class="caption"><div class="comment">Lisa (France) reads a story to some of the children</div></div></div>
	<div class="oneimg"><a href="#11"><img src="slides/DSC09853.JPG" width="450" height="600" alt="Jacqui (Canada) makes a new friend" /></a><div class="caption"><div class="comment">Jacqui (Canada) makes a new friend</div></div></div>
	<div class="oneimg"><a href="#12"><img src="slides/DSC00935.JPG" width="800" height="600" alt="Volunteers Steve (UK) and Denis (France) relaxing in the newly built back garden area" /></a><div class="caption"><div class="comment">Volunteers Steve (UK) and Denis (France) relaxing in the newly built back garden area</div></div></div>
	<div class="oneimg"><a href="#13"><img src="slides/DSC04179.JPG" width="800" height="600" alt="Out for some dinner with Berenice" /></a><div class="caption"><div class="comment">Out for some dinner with Berenice</div></div></div>
	<div class="oneimg"><a href="#14"><img src="slides/DSC03620.JPG" width="800" height="600" alt="Volunteers take a group of children on an outing" /></a><div class="caption"><div class="comment">Volunteers take a group of children on an outing</div></div></div>
	<div class="oneimg"><a href="#15"><img src="slides/DSC04117.JPG" width="800" height="600" alt="The Ibagué folklore festival (end of June) is always a great time to volunteer" /></a><div class="caption"><div class="comment">The Ibagué folklore festival (end of June) is always a great time to volunteer</div></div></div>
	<div class="oneimg"><a href="#16"><img src="slides/DSC04877.JPG" width="450" height="600" alt="Volunteers on a hike in the nearby mountains" /></a><div class="caption"><div class="comment">Volunteers on a hike in the nearby mountains</div></div></div>
	<div class="oneimg"><a href="#17"><img src="slides/DSC04980.JPG" width="800" height="600" alt="Marios (Greece) sits and listens to a presentation of some of the children" /></a><div class="caption"><div class="comment">Marios (Greece) sits and listens to a presentation of some of the children</div></div></div>
	<div class="oneimg"><a href="#18"><img src="slides/DSC04972.JPG" width="450" height="600" alt="Simran (Canada) receiving some letters and drawings as part of his leaving party" /></a><div class="caption"><div class="comment">Simran (Canada) receiving some letters and drawings as part of his leaving party</div></div></div>
	<div class="oneimg"><a href="#19"><img src="slides/DSC03578.JPG" width="800" height="600" alt="Berenice takes some volunteers out for a tour of the city" /></a><div class="caption"><div class="comment">Berenice takes some volunteers out for a tour of the city</div></div></div>
	<div class="oneimg"><a href="#20"><img src="slides/Picture 013.jpg" width="450" height="600" alt="Nick (USA) serving a snack to the children" /></a><div class="caption"><div class="comment">Nick (USA) serving a snack to the children</div></div></div>
	<div class="oneimg"><a href="#21"><img src="slides/DSC00004.JPG" width="800" height="600" alt="Denis (France) relaxes after a days volunteering" /></a><div class="caption"><div class="comment">Denis (France) relaxes after a days volunteering</div></div></div>
	<div class="oneimg"><a href="#22"><img src="slides/DSC00019.JPG" width="450" height="600" alt="Denis (France) spending time with the children" /></a><div class="caption"><div class="comment">Denis (France) spending time with the children</div></div></div>
	<div class="oneimg"><a href="#23"><img src="slides/DSC09006.JPG" width="800" height="600" alt="Tom (Ireland) receives some Spanish tution" /></a><div class="caption"><div class="comment">Tom (Ireland) receives some Spanish tution</div></div></div>
	<div class="oneimg"><a href="#24"><img src="slides/BERENICE MARIACHIS.jpg" width="720" height="540" alt="Hadley (USA) shares a hug with Berenice" /></a><div class="caption"><div class="comment">Hadley (USA) shares a hug with Berenice</div></div></div>
	<div class="oneimg"><a href="#25"><img src="slides/P1020113.JPG" width="800" height="600" alt="Volunteers on a weekend trip to the Nevados National Park" /></a><div class="caption"><div class="comment">Volunteers on a weekend trip to the Nevados National Park</div></div></div>
	<div class="oneimg"><a href="#26"><img src="slides/181062_10150098153936681_674721680_6741168_6147178_n.jpg" width="720" height="540" alt="Saschia (Switzerland) meets the family of some of the children" /></a><div class="caption"><div class="comment">Saschia (Switzerland) meets the family of some of the children</div></div></div>
	<div class="oneimg"><a href="#27"><img src="slides/SAM_0430.JPG" width="800" height="600" alt="Nick (USA) enjoys a beer with a local friend he has made" /></a><div class="caption"><div class="comment">Nick (USA) enjoys a beer with a local friend he has made</div></div></div>
	<div class="oneimg"><a href="#28"><img src="slides/P1190476.JPG" width="800" height="600" alt="Kathleen (Belgium) does some Parapenting on a weekend excursion" /></a><div class="caption"><div class="comment">Kathleen (Belgium) does some Parapenting on a weekend excursion</div></div></div>
	<div class="oneimg"><a href="#29"><img src="slides/180349_10150101452856681_674721680_6786400_5634160_n.jpg" width="720" height="540" alt="Volunteer Kathleen (Belgium) with the best view of Ibagué" /></a><div class="caption"><div class="comment">Volunteer Kathleen (Belgium) with the best view of Ibagué</div></div></div>
	<div class="oneimg"><a href="#30"><img src="slides/Mikayla fotos 102.jpg" width="800" height="600" alt="Out and About in the streets of Ibagué" /></a><div class="caption"><div class="comment">Out and About in the streets of Ibagué</div></div></div>
	<div class="oneimg"><a href="#31"><img src="slides/Mikayla fotos 148.jpg" width="800" height="600" alt="Mikayala (Canada) hard at work at the Orchid House" /></a><div class="caption"><div class="comment">Mikayala (Canada) hard at work at the Orchid House</div></div></div>
	<div class="oneimg"><a href="#32"><img src="slides/Picture 650.jpg" width="800" height="600" alt="Elena (USA) meets the younger sister of one of the children at their home" /></a><div class="caption"><div class="comment">Elena (USA) meets the younger sister of one of the children at their home</div></div></div>
	<div class="oneimg"><a href="#33"><img src="slides/Mikayla fotos 111.jpg" width="800" height="600" alt="Volunteers and Colombians relax at a swimming pool" /></a><div class="caption"><div class="comment">Volunteers and Colombians relax at a swimming pool</div></div></div>
	<div class="oneimg"><a href="#34"><img src="slides/56531_480909316680_674721680_6263777_946927_o.jpg" width="800" height="600" alt="Saschia (Switzerland) spends time with some children" /></a><div class="caption"><div class="comment">Saschia (Switzerland) spends time with some children</div></div></div>
	<div class="oneimg"><a href="#35"><img src="slides/Picture 004.jpg" width="800" height="600" alt="Emanuelle (Switzerland) with some of the children" /></a><div class="caption"><div class="comment">Emanuelle (Switzerland) with some of the children</div></div></div>
	<div class="oneimg"><a href="#36"><img src="slides/54167_471015121680_674721680_6117761_2098967_o.jpg" width="800" height="600" alt="Saschia (Switzerland) poses with Dana" /></a><div class="caption"><div class="comment">Saschia (Switzerland) poses with Dana</div></div></div>
	<div class="oneimg"><a href="#37"><img src="slides/Mikayla fotos 266.jpg" width="800" height="600" alt="Mikalaya (Canada) has some soup up at the hot springs" /></a><div class="caption"><div class="comment">Mikalaya (Canada) has some soup up at the hot springs</div></div></div>
	<div class="oneimg"><a href="#38"><img src="slides/100_0059.jpg" width="800" height="600" alt="Kareem (USA) on his tour of Bogotá" /></a><div class="caption"><div class="comment">Kareem (USA) on his tour of Bogotá</div></div></div>
	</div></noscript>
<div id="jalbumwidgetcontainer"></div>
<script type="text/javascript" charset="utf-8"><!--//--><![CDATA[//><!--
_jaSkin = "Turtle";
_jaStyle = "Black.css";
_jaVersion = "9.6.1";
_jaGeneratorType = "desktop";
_jaLanguage = "en";
_jaPageType = "index";
_jaRootPath = ".";
var script = document.createElement("script");
script.type = "text/javascript";
script.src = "http://jalbum.net/widgetapi/load.js";
document.getElementById("jalbumwidgetcontainer").appendChild(script);
//--><!]]></script>

</body>
</html>
