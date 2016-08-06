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
		echo '<img src="'.$PATH.'/'. str_replace('_thumb','',$farray[0]) . 
				 '" class="fullImage" hashr="'.$hashr.'"
				 '. (strlen($exif ['ImageDescription'])>1 ? ' alt="'.$exif['ImageDescription'].'"' : "" ). '" > ';
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
			echo '<div class="slide" '. ($is_video_array[$i] =="true" ? ' isVideo="'.$is_video_array[$i].'"' : "" ). '>', PHP_EOL;
			echo '<img src="'."$PATH/$farray[$i]".'" hashr="'.$hashr.'" alt="'. (strlen($exif['ImageDescription'])>0 ? $exif['ImageDescription'] : $title ). '" > ', PHP_EOL;
			echo '</div>', PHP_EOL;
		}
	?>
	</div>
</div>