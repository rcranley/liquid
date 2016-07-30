<?php
	// Set the PHP variables to get the images
	$project = "mass_effect";
	$title = "Mass Effect 2";
	$thumb_array=array();
	$high_res_array=array();
	$i=0; $j=0;
	$PATH = "../../images/".$project;
	$hashr = "false";
	$haszip = "false";

	if($dir = opendir($PATH) ) { 
		// Get all the files labeled "_thumb.jpg"
		while (false !== ($file = readdir($dir))) { 
			if (strpos($file, '_thumb.jpg',1) ) { 
				$farray[$i]=$file;
				$i++;
			}elseif(strpos($file, '_high_res.jpg',1) ){
				$high_res_array[$j] =$file;
				$j++;
			}elseif(strpos($file, '.zip',1) ){
				$haszip = "true";
			}
		} 
		closedir($dir);
	}else{}

	sort($farray);
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Liquid Development :: Projects :: <?php echo $title;?></title>
		<link href="../styles/main.css" rel="stylesheet">
		<link href="../styles/<?php echo $project;?>.css" rel="stylesheet">
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
					<?php
						$exif = exif_read_data($PATH.'/'.$farray[0]);
						$hashr = "false";
						if(in_array(str_replace("thumb","high_res",$farray[0]))){
							$hashr = "true";
						}
						echo '<img src="'.$PATH.'/'. str_replace('_thumb','',$farray[0]) . '" class="fullImage" hashr="'.$hashr.'" '. (strlen($exif['ImageDescription'])>1 ? ' alt="'.$exif['ImageDescription'].'"' : "" ). '" > '; 
					?>
				</div>
				<div id="slideshow" hasZip="<?php echo $haszip;?>" gallery="beatlesrockband">
					<div id="slidesContainer">
					<?php
						for($i=0; $i<sizeof($farray); $i++)
						{
							$hashr = "false";
							if(in_array(str_replace($high_res_array[$i],"thumb","high_res"))){
								$hashr = "true";
							}
							$exif = exif_read_data($PATH.'/'.$farray[$i]);
							echo '<div class="slide">';
							echo '<img src="'."$PATH/$farray[$i]".'" hashr="'.$hashr.'" alt="'. (strlen($exif['ImageDescription'])>0 ? $exif['ImageDescription'] : "" ). '" > '; 
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
		<script src="../scripts/jquery.easing.1.3.js" type="text/javascript"></script>
		<script src="../scripts/jquery.touchSwipe.js" type="text/javascript"></script>
		<script src="../scripts/jquery.smartresize.js" type="text/javascript"></script>
		<script src="../scripts/liquid.js" type="text/javascript"></script>
		<script src="../scripts/slideshows.js" type="text/javascript"></script>
	</body>
</html>