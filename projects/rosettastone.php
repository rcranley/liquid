<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Liquid Development :: Projects :: Rosetta Stone</title>
		<link href="styles/main.css" rel="stylesheet">
		<link href="styles/beatles.css" rel="stylesheet">
	</head>
  	<body id="index">
		<div id="container">
<?php
	include('header.php');
?>
			<div id="contents" >
				<div id="fullContainer" >
					<div id="floatNavLeft" class="floatNav" ></div>
					<div id="floatNavRight" class="floatNav"></div>
					<div id="galleryOptions">
						<div id="viewhr">View in High Res</div>
						<div id="dlgallery">Download Entire Gallery</div>
					</div>
					<img class="fullImage" src="images/rosettastone/rs0_full.jpg" showcaption="true" alt="Rosetta Stone: 1" style="">
				</div>
				<div id="slideshow" hasZip="false">
					<div id="slidesContainer">
						<div class="slide"><img src="images/rosettastone/rs0_full_thumb.jpg" alt="Rosetta Stone: 1"></div>
						<div class="slide" isVideo="true"><img src="images/rosettastone/rs1_full_thumb.jpg" alt="Rosetta Stone: 2" ></div>
						<div class="slide" isVideo="true"><img src="images/rosettastone/rs2_full_thumb.jpg" alt="Rosetta Stone: 3"></div>
						<div class="slide"><img src="images/rosettastone/rs3_full_thumb.jpg" alt="Rosetta Stone: 4"></div>
						<div class="slide"><img src="images/rosettastone/rs4_full_thumb.jpg" alt="Rosetta Stone: 5"></div>
						<div class="slide"><img src="images/rosettastone/rs5_full_thumb.jpg" alt="Rosetta Stone: 6"></div>
						<div class="slide"><img src="images/rosettastone/rs6_full_thumb.jpg" alt="Rosetta Stone: 7"></div>
						<div class="slide"><img src="images/rosettastone/rs7_full_thumb.jpg" alt="Rosetta Stone: 8"></div>
						<div class="slide"><img src="images/rosettastone/rs8_full_thumb.jpg" alt="Rosetta Stone: 9"></div>
						<div class="slide"><img src="images/rosettastone/rs9_full_thumb.jpg" alt="Rosetta Stone: 10"></div>
					</div>
				</div>
			</div>	
<?php
	include('footer.php');
?>
		</div>
		<script src="scripts/jquery.easing.1.3.js" type="text/javascript"></script>
		<script type="text/javascript" src="scripts/jquery.touchSwipe.js"></script>
		<script type="text/javascript" src="scripts/jquery.smartresize.js"></script>
		<script src="scripts/liquid.js" type="text/javascript"></script>
		<script src="scripts/slideshows.js" type="text/javascript"></script>
	</body>
</html>