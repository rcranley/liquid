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
		
		<style>
			img.bgTop {
				min-width: 1024px;
				width: 100%;
				height: auto;
				position: fixed;
				top: 0;
				left: 0;
				z-index: -10000;
			}
			img.bgBottom {
				min-width: 1024px;
				width: 100%;
				height: auto;
				position: fixed;
				bottom: 0;
				right: 0;
				z-index: -100000;
			}			
			@media screen and (max-width: 1024px) { /* Specific to this particular image */
				img.bgTop, img.bgBottom {
					left: 50%;
					margin-left: -512px;   /* 50% */
				}
			}		
			#header{
				width: 100%;
				max-width:1536px;
				min-width: 750px;
				z-index: -100000;
			}
			
			#footer{
				width: 100%;
				max-width:1536px;
				min-width: 750px;
				z-index: -100000;
			}
			
			#logo{
				background: transparent url('images/ld_logo.jpg') no-repeat center center;
			}
		</style>
	</head>
  	<body id="index">
		<div id="container">
			<div id="header">
				<img id="one" src="images/brb/Beatles_Top.jpg" border="0" class="bgTop" />
<img id="three" src="images/ld_logo.jpg" border="0" width="200px" />			</div>
			<div id="contents" >
				<div id="fullContainer" >
				
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
				<img id="one" src="images/brb/Beatles_Bottom.jpg" border="0" class="bgBottom" />
				<div id="copy">Copyright &copy; 2000-2012 Liquid Development, LLC. All rights reserved.</div>
			</footer>
		</div>
		
		<script src="scripts/jquery.easing.1.3.js" type="text/javascript"></script>
		<script type="text/javascript" src="scripts/new_jquery.imagefit-0.2.js"></script>
		<script type="text/javascript" src="scripts/jquery.touchSwipe.js"></script>
		<script src="scripts/new_liquid.js" type="text/javascript"></script>
	</body>
</html>