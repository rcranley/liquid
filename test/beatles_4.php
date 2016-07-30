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
		<link href="styles/beatles_4.css" rel="stylesheet">
		
		<style>		

		</style>
	</head>
  	<body id="index">
		<div id="container">
				<div id="header">
					<div style="z-index:0; width:200px; margin:auto; left:0;right:0">
						<img id="three" src="images/logo.png" border="0" width="200px" style="z-index:100000; " />		
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
					<img src="" id="fullImage" >
				</div>
				<div id="slideshow">
					<div id="slidesContainer">
					<?php
						if($dir = opendir($path) ) { 
							// Get all the files labeled "_thumb.jpg"
							while (false !== ($file = readdir($dir))) { 
								if (strpos($file, '_thumb.jpg',1) ) { 
									$farray[$i]=$file;
									$i++;
								} 
							} 
							closedir($dir);
						}
						// Sort the files - They should be labeled XXX0_full_thumb.jpg -> XXX0_full.jpg, XXX1_full_thumb.jpg -> XXX0_full.jpg
						sort($farray);
						// Loop thru the sorted array of file names and display them in the slide show
						for($i=0; $i<sizeof($farray); $i++)
						{
							echo '<div class="slide">';
							echo '<img src="'."$path/$farray[$i]".'">'; 
							echo '</div>';
						}
					?>				
					</div>
				</div>
			</div>	
			<footer id="footer">
				<div id="copy">Copyright &copy; 2000-2012 Liquid Development, LLC. All rights reserved.</div>
			</footer>
		</div>
		
		<script src="scripts/jquery.easing.1.3.js" type="text/javascript"></script>
		<script type="text/javascript" src="scripts/new_jquery.imagefit-0.2.js"></script>
		<script type="text/javascript" src="scripts/jquery.touchSwipe.js"></script>
		<script src="scripts/new_liquid.js" type="text/javascript"></script>
	</body>
</html>