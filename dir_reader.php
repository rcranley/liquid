<?php 
	$farray=array();
	$high_res_array=array();
	$is_video_array=array();
	$render_type_array=array();
	$i=0; $j=0;
	$PATH = "../images/".$project;
	$hashr = "false";
	$haszip = "false";
	$exif = "";

	if($dir = opendir($PATH) ) {
		// Get all the files labeled "_thumb.jpg"
		while (false !== ($file = readdir($dir))) {
			if (strpos($file, '_thumb.jpg',1) ) {
				$farray[]=$file;
			}elseif(strpos($file, '.zip',1) ){
				$haszip = "true";
			}elseif(strpos($file, '_high_res.jpg',1) ){
				$high_res_array[] =$file;
			}
		}
		// Sort the array of _thumb files
		sort($farray);

		$index=0;
		foreach ($farray as $f) {
			// echo str_replace('_thumb.jpg','_video.mp4', $PATH.'/'.$f)."<hr>";
			if ( file_exists( str_replace('_thumb.jpg','_video.mp4', $PATH.'/'.$f) ) ) {
				$is_video_array[$index] = "true";
				$render_type_array[]="video";
			}
			elseif ( file_exists( str_replace('_thumb.jpg','.mview', $PATH.'/'.$f) ) ) {
				$render_type_array[]="marmoset";
			}
			elseif ( file_exists( str_replace('_thumb.jpg','.gif', $PATH.'/'.$f) ) ) {
				$render_type_array[]="image_gif";
			}
			else{
				$is_video_array[$index] = "false";
				$render_type_array[]="image_jpg";
			}
			$index++;
		}

		closedir($dir);
	}else{}

?>
