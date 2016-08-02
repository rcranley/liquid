<?php 
	// Set the PHP variables to get the images
	$project = "battlebeach"; // file name that is on the ftp ex: "batman"
	$title = "Battle Beach"; // html title of the page ex: "Batman"
	$farray=array();
	$high_res_array=array();
	$is_video_array=array();
	$i=0; $j=0;
	$PATH = "../images/".$project;
	$hashr = "false";
	$haszip = "false";
	$exif = "";

	if($dir = opendir($PATH) ) { 
		// Get all the files labeled "_thumb.jpg"
		while (false !== ($file = readdir($dir))) { 
			if (strpos($file, '_thumb.jpg',1) ) { 
				$farray[$i]=$file;
				//echo str_replace('_thumb.jpg','_video.mp4', $PATH.'/'.$file)."<hr>";
				if ( file_exists( str_replace('_thumb.jpg','_video.mp4', $PATH.'/'.$file) ) ) {
					$is_video_array[$i] = "true";
				}else{
					$is_video_array[$i] = "false";
				}				
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
<?php echo'<!-- auto-generated -->'; ?>
	<head>
		<meta charset="utf-8" />
		<title>Liquid Development :: Project :: <?php echo $title;?></title>
		<link href="../styles/main.css" rel="stylesheet">
		<link href="../styles/<?php echo $project;?>.css" rel="stylesheet">
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
					<div id="galleryOptions">
						<div id="viewhr">View in High Res</div>
						<div id="dlgallery">Download Entire Gallery</div>
					</div>
					<?php
						if (function_exists('exif_read_data') )  {
							$exif = exif_read_data($PATH.'/'.$farray[0]);
						}else{
							$exif['ImageDescription'] = "$title " . ($i+1);
						}
						$hashr = "false";
						if(in_array(str_replace("thumb","high_res",$farray[0]),$high_res_array) == 1){
							$hashr = "true";
						}
						echo '<img src="'.$PATH.'/'. str_replace('_thumb','',$farray[0]) . '" class="fullImage" hashr="'.$hashr.'" '. (strlen($exif  ['ImageDescription'])>1 ? ' alt="'.$exif['ImageDescription'].'"' : "" ). '" > '; 
					?>
				</div>
				<div id="slideshow" hasZip="<?php echo $haszip;?>" gallery="<?php echo $project;?>" >
					<div id="slidesContainer">
					<?php
						for($i=0; $i<sizeof($farray); $i++)
						{
							$exif = "";
							$hashr = "false";
							if(in_array(str_replace("thumb","high_res",$farray[$i]), $high_res_array) == 1){
								$hashr = "true";
							}
							if (function_exists('exif_read_data') )  {
								$exif = exif_read_data($PATH.'/'.$farray[$i]);
							}else{
								$exif['ImageDescription'] = "$title " . ($i+1);
							}
							echo '<div class="slide" '. ($is_video_array[$i] =="true" ? ' isVideo="'.$is_video_array[$i].'"' : "" ). '>';
							echo '<img src="'."$PATH/$farray[$i]".'" hashr="'.$hashr.'" alt="'. (strlen($exif['ImageDescription'])>0 ? $exif  ['ImageDescription'] : "" ). '" > '; 
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
	</body>
</html>