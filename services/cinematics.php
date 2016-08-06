<?php
	// Set the PHP variables to get the images
	$project = "services/cinematics";
	$title = "Cinematics";
	$prefix = "/cinematics_";
	$farray=array();
	$high_res_array=array();
	$is_video_array=array();
	$i=0; $j=0;
	$PATH = "../images/".$project;
	$hashr = "false";
	$haszip = "false";
	$exif = "";

	include('../dir_reader.php');

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Liquid Development :: Services :: <?php echo $title; ?></title>
		<link href="../styles/main.css" rel="stylesheet">
		<link href="../styles/mass_effect.css" rel="stylesheet">
	</head>
  	<body id="index">
		<div id="container">
<?php
	include('../header.php');
?>
			<h1 style="top:100px; position:relative;">
				<img src="<?php echo $PATH.$prefix; ?>title.png">
			</h1>
			<div id="contents" >
				<?php
					include('../gallery.php');
				?>
			</div>
		</div>
<?php
	//echo count($farray).'<hr>'.count($is_video_array);
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
