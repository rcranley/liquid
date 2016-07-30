<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Liquid Development</title>
		<script src="https://www.google.com/jsapi"></script>
		<script>
			google.load("jquery","1.6.4");
		</script>
		<link href="styles/main.css" rel="stylesheet">
		
		<link href="styles/fallout3.css" rel="stylesheet"> 
		
		
  <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
		
		<style>		
  .ui-effects-transfer { border: 2px solid black; }
  
footer{
	width: 100%;
	text-align: center;
	bottom: 0;
	position: fixed;
	background: url(images/fallout3/footer.jpg) fixed center no-repeat;
	background-size: 100%;

}
</style>
	</head>
  	<body id="index">
		<div id="container">
			<div id="header">
				<div id="logo">
					<a href="index.php"><img src="images/nav/liquid_logo.png" /></a>	
				</div>
				<div id="blackbar">
					<div id="navInfo" class="nav">				
						<a href="#">Information</a>
					</div>
					<div id="navHome" class="nav"><a href="index.php">Home</a></div>
				</div>	
				<div id="slideframe">
					<div id="slidepane">
					
						<ul class="sub-menu" >
							<li id="sub1" class="menu-item" >
							  <a href="services.php" id="navServices">Services</a>
							</li>
							<li id="sub2" class="menu-item" >
							  <a href="contact.php" id="navContact">Contact</a>
							</li>
							<li id="sub3" class="menu-item" >
							  <a href="about.php" id="navAbout">About</a>
							</li>
							<li id="sub4" class="menu-item" >
							  <a href="jobs.php" id="navJobs">Jobs</a>
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
						<div class="slide"><img src="images/fallout3/fo30_full_thumb.jpg" alt="Fallout 3: Promotional Image"></div>
						<div class="slide"><img src="images/fallout3/fo31_full_thumb.jpg" alt="Fallout 3: Alien Crash Site"></div>
						<div class="slide"><img src="images/fallout3/fo32_full_thumb.jpg" alt="Fallout 3: Washington DC"></div>
						<div class="slide"><img src="images/fallout3/fo33_full_thumb.jpg" alt="Fallout 3: Promotional Image 2"></div>
						<div class="slide"><img src="images/fallout3/fo34_full_thumb.jpg" alt="Fallout 3: Aircraft Carrier"></div>
						<div class="slide"><img src="images/fallout3/fo35_full_thumb.jpg" alt="Fallout 3: The Grisly Diner"></div>
						<div class="slide"><img src="images/fallout3/fo36_full_thumb.jpg" alt="Fallout 3: The Pitt Entrance"></div>
						<div class="slide"><img src="images/fallout3/fo37_full_thumb.jpg" alt="Fallout 3: Cityscape"></div>
						<div class="slide"><img src="images/fallout3/fo38_full_thumb.jpg" alt="Fallout 3: Promotional Image 3"></div>
						<div class="slide"><img src="images/fallout3/fo39_full_thumb.jpg" alt="Fallout 3: Rivet City Water Caravan Stop"></div>
						<div class="slide"><img src="images/fallout3/fo310_full_thumb.jpg" alt="Fallout 3: Water"></div>
						<div class="slide"><img src="images/fallout3/fo311_full_thumb.jpg" alt="Fallout 3: Wheaton Armory"></div>
					</div>
				</div>
			</div>	
		</div>
			<footer id="footer">
				<div id="copy">
					<div id="copy-content">
					Copyright &copy; 
					<script type="text/javascript">
						var d = new Date();
						document.write(d.getFullYear());
					</script> 
					Liquid Development, LLC
					</div>
				</div>
			</footer>  
			
		<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
		
		<script src="scripts/jquery.easing.1.3.js" type="text/javascript"></script>
		<script type="text/javascript" src="scripts/jquery.touchSwipe.js"></script>
		<script type="text/javascript" src="scripts/jquery.smartresize.js"></script>
		<script type="text/javascript" src="scripts/jquery.cycle.all.js"></script>
		<script src="scripts/liquid.js" type="text/javascript"></script>
		<script src="scripts/slideshows.js" type="text/javascript"></script>
	</body>
</html>