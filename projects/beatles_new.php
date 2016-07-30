<?php
	// Set the PHP variables to get the images
	$thumb_array=array();
	$high_res_array=array();
	$i=0; $j=0;
	$PATH = "../images/the_beatles_rock_band";
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
					<img class="fullImage" src="<?php echo $PATH; ?>/the_beatles001.jpg" showcaption="true" alt="Image: 1" style="" hashr="true">
				</div>
				<div id="slideshow" hasZip="false" gallery="beatlesrockband">
					<div id="slidesContainer">
					<?php
						if($dir = opendir($PATH) ) { 
							// Get all the files labeled "_thumb.jpg"
							while (false !== ($file = readdir($dir))) { 
								if (strpos($file, '_thumb.jpg',1) ) { 
									//echo $file;
									$farray[$i]=$file;
									$i++;
								}elseif(strpos($file, '_high_res.jpg',1) ){
									$high_res_array[$j] =$file;
									$j++;
								}
							} 
							closedir($dir);
						}else{
							//echo "No Dir";
						}
						// Sort the files - They should be labeled XXX0_full_thumb.jpg -> XXX0_full.jpg, XXX1_full_thumb.jpg -> XXX0_full.jpg
						sort($farray);
						// Loop thru the sorted array of file names and display them in the slide show
						for($i=0; $i<sizeof($farray); $i++)
						{
							$hashr = "false";
							if(in_array(str_replace($high_res_array[$i],"thumb","high_res"))){
								$hashr = "true";
							}
							echo '<div class="slide">';
							echo '<img src="'."$PATH/$farray[$i]".'" hashr="'.$hashr.'" alt="Image: '. $i .' " > '; 
							echo '</div>';
						}
					?>
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