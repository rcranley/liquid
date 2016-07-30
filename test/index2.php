<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Liquid Development :: Home</title>
		<link href="styles/main.css" rel="stylesheet">
<?php

	$themes = array('masseffect2.css', 'beatles.css', 'fallout3.css');
	$rand = rand(0,count($themes)-1);

	echo '<link href="styles/'. $themes[$rand].'" rel="stylesheet">';
?>
<!--[if IE]>
<style>
#fullContainer img, .slide img, .banner_img_full img, .banner_img_third img, #fullVideo video{ width:100%; height: 100%; }	
</style>
<![endif]-->		
	</head>

  	<body id="index">
		<div id="container">
<?php
	include('header.php');
?>
			<div id="contents">
				<div class="banner_img_full" id="main1" >
					<a href="beatles.php">
						<img src="images/beatlesrockband/brb0_full.jpg" id="banner1" alt="Beatles Rock Band" >
						<div class="overLay overLayHome" style="bottom: 30px;" id="beatlesrockband">Beatles Rock Band</div>
					</a>
				</div>
				<div class="banner_third_container">
					<div class="banner_img_third banner_img_third_l" id="main2" >
						<a href="fallout3.php">
							<img src="images/fallout3/home_a.gif" alt="Fallout 3" >
							<div class="overLay overLayHome homeRotator" style="bottom: 30px;" id="fallout3">Fallout 3</div>
						</a>				
					</div>
					<div class="banner_img_third banner_img_third_m" id="main3" >
						<a href="masseffect2.php">
							<img src="images/masseffect2/home_a.gif"  alt="Mass Effect 2" >
							<div class="overLay overLayHome homeRotator" style="bottom: 30px;" id="masseffect2">Mass Effect 2</div>
						</a>				
					</div>
					<div class="banner_img_third banner_img_third_r" id="main4" >
						<a href="rosettastone.php">
							<img src="images/rosettastone/home.gif" id="banner4" forceCaption="true" showCaption="true"  alt="Rosetta Stone" >
						</a>				
					</div>
				</div>
				<div class="banner_img_full" id="main5" >
					<a href="firefall.php">
						<div style="display:inline-block;position:absolute; width:100%;height:100%">
							<img src="images/firefall/home_a.gif" id="banner5" alt="FireFall" >
						</div>
						<div class="overLay overLayHome homeRotator" style="bottom: 30px;" id="firefall">Firefall</div>
					</a>
				</div>
			</div>
    	</div>
<?php
	include('footer.php');
?>   	
		<script type="text/javascript" src="http://www.google.com/jsapi"></script>
		<script>
			google.load("jquery","1.6.4");
		</script>    	
		<script src="scripts/jquery.easing.1.3.js" type="text/javascript"></script>
		<script type="text/javascript" src="scripts/jquery.touchSwipe.js"></script>
		<script type="text/javascript" src="scripts/jquery.smartresize.js"></script>
		<script src="scripts/liquid.js" type="text/javascript"></script>
  </body>
</html>