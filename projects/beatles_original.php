<?php
	$PATH = "../images/the_beatles_rock_band/the_beatles";
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Liquid Development :: Projects :: Beatles Rockband</title>
		<link href="../styles/main.css" rel="stylesheet">
		<link href="../styles/the_beatles_rock_band.css" rel="stylesheet">
	</head>
  	<body id="index">
		<div id="container">
<?php
	include('../header.php');
?>
			<!-- <h1 style="top:100px; position:relative;">
				<img src="<?php echo $PATH; ?>page_title.png">
			</h1> -->
			<div id="contents" >
				<div id="fullContainer" >
					<div id="floatNavLeft" class="floatNav"></div>
					<div id="floatNavRight" class="floatNav"></div>
					<div id="galleryOptions">
						<div id="viewhr">View in High Res</div>
						<div id="dlgallery">Download Entire Gallery</div>
					</div>
					<img class="fullImage" src="<?php echo $PATH; ?>001.jpg" showcaption="true" alt="Image: 1" style="" hashr="true">
				</div>
				<div id="slideshow" hasZip="false" gallery="beatlesrockband">
					<div id="slidesContainer">
						<div class="slide"><img src="<?php echo $PATH; ?>001_thumb.jpg" alt="Image: 1" hashr="false"></div>
						<div class="slide"><img src="<?php echo $PATH; ?>002_thumb.jpg" alt="Image: 2" hashr="false"></div>
						<div class="slide"><img src="<?php echo $PATH; ?>003_thumb.jpg" alt="Image: 3" hashr="false"></div>
						<div class="slide"><img src="<?php echo $PATH; ?>004_thumb.jpg" alt="Image: 4" hashr="false"></div>
						<div class="slide"><img src="<?php echo $PATH; ?>005_thumb.jpg" alt="Image: 5" hashr="false"></div>
						<div class="slide"><img src="<?php echo $PATH; ?>006_thumb.jpg" alt="Image: 6" hashr="false"></div>
						<div class="slide"><img src="<?php echo $PATH; ?>007_thumb.jpg" alt="Image: 7" hashr="false"></div>
						<div class="slide"><img src="<?php echo $PATH; ?>008_thumb.jpg" alt="Image: 8" hashr="false"></div>
						<div class="slide"><img src="<?php echo $PATH; ?>009_thumb.jpg" alt="Image: 9" hashr="false"></div>
						<div class="slide"><img src="<?php echo $PATH; ?>010_thumb.jpg" alt="Image: 10" hashr="false"></div>
						<div class="slide"><img src="<?php echo $PATH; ?>011_thumb.jpg" alt="Image: 11" hashr="false"></div>
					</div>
				</div>
			</div>	
		</div>
<?php
	include('../footer.php');
?>	
		<script src="../scripts/jquery.easing.1.3.js" type="text/javascript"></script>
		<script src="../scripts/jquery.touchSwipe.js" type="text/javascript"></script>
		<script src="../scripts/jquery.smartresize.js" type="text/javascript"></script>
		<script src="../scripts/liquid.js" type="text/javascript"></script>
		<script src="../scripts/slideshows.js" type="text/javascript"></script>
		<script type="text/javascript">
		/*
			$.preload(
				'images/beatlesrockband/brb0_full.jpg',
				'images/beatlesrockband/brb1_full.jpg',
				'images/beatlesrockband/brb2_full.jpg',
				'images/beatlesrockband/brb3_full.jpg',
				'images/beatlesrockband/brb4_full.jpg',
				'images/beatlesrockband/brb5_full.jpg',
				'images/beatlesrockband/brb6_full.jpg',
				'images/beatlesrockband/brb7_full.jpg',
				'images/beatlesrockband/brb8_full.jpg',
				'images/beatlesrockband/brb9_full.jpg'
			);
		*/
		</script>
	</body>
</html>