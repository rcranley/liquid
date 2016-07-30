<?php
	// Set the PHP variables to get the images
	$farray=array();
	$i=0;
	$path = "images/brb2" ;
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Liquid Development</title>
		<script src="https://www.google.com/jsapi"></script>
		<script>
			google.load("jquery","1.6.4");
		</script>
		<link href="styles/beatles_5.css" rel="stylesheet">
		
		<style>		

		</style>
	</head>
  	<body id="index">
		<div id="container">
				<div id="header">
					<div style="z-index:0; width:30%; margin:auto; left:0;right:0;padding: 32px 0;">
						<img id="three" src="images/logo.png" border="0" width="100%" style="z-index:100000; " />		
					</div>
					<div id="blackbar">
						<div id="navHome" class="nav"><a href="#">Home</a></div>
						<div id="navInfo" class="nav">				
							Information
							<ul class="sub-menu" >
								<li id="sub1" class="menu-item" >
								  <a href="services/" style="">Services</a>
								</li>
								<li id="sub2" class="menu-item" >
								  <a href="contact/" style="">Bio</a>
								</li>
								<li id="sub3" class="menu-item" >
								  <a href="company/" style="">Contact</a>
								</li>
								<li id="sub3" class="menu-item" >
								  <a href="jobs/" style="">Jobs</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			<div id="contents" >

				<div id="fullContainer" >
					<img src="" id="fullImage" showCaption="true"  alt="Image: 1" >
				</div>
				<div id="slideshow">
					<div id="slidesContainer">
						<div class="slide"><img src="images/brb/brb0_full_thumb.jpg" alt="Image: 1"></div>
						<div class="slide"><img src="images/brb/brb1_full_thumb.jpg" alt="Image: 2"></div>
						<div class="slide"><img src="images/brb/brb2_full_thumb.jpg" alt="Image: 3"></div>
						<div class="slide"><img src="images/brb/brb3_full_thumb.jpg" alt="Image: 4"></div>
						<div class="slide"><img src="images/brb/brb4_full_thumb.jpg" alt="Image: 5"></div>
						<div class="slide"><img src="images/brb/brb5_full_thumb.jpg" alt="Image: 6"></div>
						<div class="slide"><img src="images/brb/brb6_full_thumb.jpg" alt="Image: 7"></div>
						<div class="slide"><img src="images/brb/brb7_full_thumb.jpg" alt="Image: 8"></div>
						<div class="slide"><img src="images/brb/brb8_full_thumb.jpg" alt="Image: 9"></div>
						<div class="slide"><img src="images/brb/brb9_full_thumb.jpg" alt="Image: 10"></div>
					</div>
				</div>
			</div>	
			<footer id="footer">
				<div id="copy">Copyright &copy; 2000-2012 Liquid Development, LLC. All rights reserved.</div>
			</footer>
		</div>
		
		<script src="scripts/jquery.easing.1.3.js" type="text/javascript"></script>
		<script type="text/javascript" src="scripts/jquery.touchSwipe.js"></script>
		<script type="text/javascript" src="scripts/jquery.smartresize.js"></script>
		<script src="scripts/liquid_5.js" type="text/javascript"></script>
	</body>
</html>