<?php
	$PATH = "../images/zynga/zynga";
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Liquid Development :: Projects :: Zynga</title>
		<link href="../styles/main.css" rel="stylesheet">
		<link href="../styles/masseffect2.css" rel="stylesheet">
	</head>
  	<body id="index">
		<div id="container">
<?php
	include('../header.php');
?>
			<div id="contents" >
				<div id="fullContainer" >
					<div id="floatNavLeft" class="floatNav"></div>
					<div id="floatNavRight" class="floatNav"></div>
					<img src="<?php echo $PATH; ?>001.jpg" class="fullImage" showCaption="true"  alt="Zynga: 1" >
				</div>
				<div id="slideshow" hasZip="false">
					<div id="slidesContainer">
						<div class="slide"><img src="<?php echo $PATH; ?>001_thumb.jpg" alt="Zynga: 1" hashr="false"></div>
						<div class="slide"><img src="<?php echo $PATH; ?>002_thumb.jpg" alt="Zynga: 2" hashr="false"></div>
						<div class="slide"><img src="<?php echo $PATH; ?>003_thumb.jpg" alt="Zynga: 3" hashr="false"></div>
						<div class="slide"><img src="<?php echo $PATH; ?>004_thumb.jpg" alt="Zynga: 4" hashr="false"></div>
						<div class="slide"><img src="<?php echo $PATH; ?>005_thumb.jpg" alt="Zynga: 5" hashr="false"></div>
						<div class="slide"><img src="<?php echo $PATH; ?>006_thumb.jpg" alt="Zynga: 6" hashr="false"></div>
						<div class="slide"><img src="<?php echo $PATH; ?>007_thumb.jpg" alt="Zynga: 7" hashr="false"></div>
						<div class="slide"><img src="<?php echo $PATH; ?>008_thumb.jpg" alt="Zynga: 8" hashr="false"></div>
						<div class="slide"><img src="<?php echo $PATH; ?>009_thumb.jpg" alt="Zynga: 9" hashr="false"></div>
						<div class="slide"><img src="<?php echo $PATH; ?>010_thumb.jpg" alt="Zynga: 10" hashr="false"></div>
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
	</body>
</html>