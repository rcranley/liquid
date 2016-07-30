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
		<link href="styles/beatles.css" rel="stylesheet">
	</head>
  	<body id="index">
		<div id="container">
			<header id="header">
				<img id="one" src="images/brb/Beatles_Top.jpg" border="0" />
			</header>
			<div id="contents" >
				<div id="fullContainer" >
				<img id="three" src="images/ld_logo.jpg" border="0" width="200px" />
					<img src="images/svwloader.gif" id="fullImage" >
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
				<!-- Here Goes Background image + Copyright -->
				<img id="two" src="images/brb/Beatles_Bottom.jpg" border="0" />
				<div id="copy">Copyright &copy; 2000-2012 Liquid Development, LLC. All rights reserved.</div>
			</footer>
		</div>
		
		<script src="scripts/jquery.easing.1.3.js" type="text/javascript"></script>
		<script type="text/javascript" src="scripts/new_jquery.imagefit-0.2.js"></script>
		<script type="text/javascript" src="scripts/jquery.touchSwipe.js"></script>
		<script src="scripts/new_liquid.js" type="text/javascript"></script>
	</body>
</html>