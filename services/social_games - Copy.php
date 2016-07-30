<?php
	$PATH = "../images/services/social_games/social_games_";
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Liquid Development :: Services :: Social Games</title>
		<link href="../styles/main.css" rel="stylesheet">
		<link href="../styles/mass_effect.css" rel="stylesheet">
	</head>
  	<body id="index">
		<div id="container">
<?php
	include('../header.php');
?>
			<h1 style="top:100px; position:relative;">
				<img src="<?php echo $PATH; ?>title.png">
			</h1>
			<div id="contents" >
				<div id="fullContainer" >
					<div id="floatNavLeft" class="floatNav"></div>
					<div id="floatNavRight" class="floatNav"></div>
					<div id="galleryOptions">
						<div id="viewhr">View in High Res</div>
						<div id="dlgallery">Download Entire Gallery</div>
					</div>
					<img src="<?php echo $PATH; ?>001.jpg" class="fullImage" showCaption="true"  alt="Social Games: 1" >
				</div>
				<div id="slideshow" hasZip="false">
					<div id="slidesContainer">
						<div class="slide"><img src="<?php echo $PATH; ?>001_thumb.jpg" alt="Social Games: 1" hashr="false"></div>
						<div class="slide"><img src="<?php echo $PATH; ?>002_thumb.jpg" alt="Social Games: 2" hashr="false"></div>
						<div class="slide"><img src="<?php echo $PATH; ?>003_thumb.jpg" alt="Social Games: 3" hashr="false"></div>
						<div class="slide"><img src="<?php echo $PATH; ?>004_thumb.jpg" alt="Social Games: 4" hashr="false"></div>
						<div class="slide"><img src="<?php echo $PATH; ?>005_thumb.jpg" alt="Social Games: 5" hashr="false"></div>
						<div class="slide"><img src="<?php echo $PATH; ?>006_thumb.jpg" alt="Social Games: 6" hashr="false"></div>
						<div class="slide"><img src="<?php echo $PATH; ?>007_thumb.jpg" alt="Social Games: 7" hashr="false"></div>
						<div class="slide"><img src="<?php echo $PATH; ?>008_thumb.jpg" alt="Social Games: 8" hashr="false"></div>
						<div class="slide"><img src="<?php echo $PATH; ?>009_thumb.jpg" alt="Social Games: 9" hashr="false"></div>
						<div class="slide"><img src="<?php echo $PATH; ?>010_thumb.jpg" alt="Social Games: 10" hashr="false"></div>
						<div class="slide"><img src="<?php echo $PATH; ?>011_thumb.jpg" alt="Social Games: 11" hashr="false"></div>
						<div class="slide"><img src="<?php echo $PATH; ?>012_thumb.jpg" alt="Social Games: 12" hashr="false"></div>
						<div class="slide"><img src="<?php echo $PATH; ?>013_thumb.jpg" alt="Social Games: 13" hashr="false"></div>
						<div class="slide"><img src="<?php echo $PATH; ?>014_thumb.jpg" alt="Social Games: 14" hashr="false"></div>
						<div class="slide"><img src="<?php echo $PATH; ?>015_thumb.jpg" alt="Social Games: 15" hashr="false"></div>
						<div class="slide"><img src="<?php echo $PATH; ?>016_thumb.jpg" alt="Social Games: 16" hashr="false"></div>
						<div class="slide"><img src="<?php echo $PATH; ?>017_thumb.jpg" alt="Social Games: 17" hashr="false"></div>
						<div class="slide"><img src="<?php echo $PATH; ?>018_thumb.jpg" alt="Social Games: 18" hashr="false"></div>
					</div>
				</div>
			</div>	
		</div>
<?php
	include('../footer.php');
?>  
		<script src="../scripts/jquery.hoverIntent.min.js" type="text/javascript"></script>
		<script src="../scripts/jquery.easing.1.3.js" type="text/javascript"></script>
		<script src="../scripts/jquery.touchSwipe.js" type="text/javascript"></script>
		<script src="../scripts/jquery.smartresize.js" type="text/javascript"></script>
		<script src="../scripts/liquid.js" type="text/javascript"></script>
		<script src="../scripts/slideshows.js" type="text/javascript"></script>
	</body>
</html>