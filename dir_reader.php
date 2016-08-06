<?php 
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
			}else{
				$is_video_array[$index] = "false";
			}
			$index++;
		}

		closedir($dir);
	}else{}

?>