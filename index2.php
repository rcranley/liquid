<?php
  //error_reporting(E_ALL);
  //ini_set('display_errors','On');

	$rel_path = "/~ronan/liquid/";
	$project = "home";
	$title = "Home";
	$farray=array();
	$row_array=array();
	$row_details=array();
	$js_info_array=array();
	$i=0; $j=0; $k=0;
	$PATH = "images/".$project;
	$prev = "";

	if( $dir = opendir($PATH) ) { 
		// Get all the files labeled "_thumb.jpg"
		while (false !== ($file = readdir($dir))) { 
			if (strpos($file, '.jpg',1) ) { 
				$farray[$i]=$file;
				$i++;
			}
		}
		closedir($dir);
	}else{}

	sort($farray);
	
	function url_exists($url){
		if(strstr($url, "http://")) $url = str_replace("http://", "", $url);
		$fp = @fsockopen($url, 80);
		if($fp === false) return false;
		return true;
	}
	
	$old = 0;
	$rows = 0;
	// Now lets see if we can split that array up into rows, and find the rotators
	for($i=0; $i<sizeof($farray); $i++)
	{
		if( substr($farray[$i],0,3) == substr($prev,0,3) ) {
			// We've got an image in the same row (Still could be rotator image though)
			$old++;			
			$row_array[$rows-1][ $old ] = $farray[$i] ;
		}else{
			// New Row -> Start over.
			$row_array[$rows][0] = $farray[$i] ;
			$rows++;
			$old = 0;
		}
		
		
		
		$prev = $farray[$i];
	}	
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="content-script-type" content="text/javascript">
		<title>Liquid Development :: <?php echo $title;?></title>
		<link href="styles/main.css" rel="stylesheet">
<?php
	$themes = array('mass_effect.css');
	$rand = rand(0,count($themes)-1);
	echo '<link href="styles/'. $themes[$rand].'" rel="stylesheet">';
?>		
	</head>
  	<body id="index">
		<div id="container">
<?php
	include('header.php');
?>
			<div id="contents">
			
			<?php
				for($i=0; $i<sizeof($row_array); $i++)
				{
					
					// Let's try a better way - loop thru the rows we've split out.
					// Instead of looping thru the whole array.
					// This should make the comparisons for single/multiple and rotator images faster and more efficient.
					$dupe = $row_array[$i];	
					$last_img = "";
					$num_rotators = 0;
					$num_imgs = 0;
					$_001_count = 0;
					$hasMultiple = false;
					$hasRotator = false;					

					for($j=0; $j<sizeof( $dupe ); $j++){

						$info = explode("_", $dupe[$j] );
						if ( $info[2] == "001.jpg" ) {
							$row_details[$i][0] = "false";
							if($_001_count>0){
								$row_details[$i][0] = "true";
								 break;
							}else{
								$_001_count++;
							}
						}else{
							if($_001_count<2){
								$row_details[$i][0] = "false";
							}else{
								$row_details[$i][0] = "true";
							}
						}

						// Now let's see which ones have rotators and add them to $js_info_array()
						//
					}
					
					if( $row_details[$i][0] == "false" ){
						//We've definitely got a single, since we've only 1 or 2 images in this row
							if(substr($dupe[0],-7) =="001.jpg"){
								$info = explode("_", $dupe[0] );
								$showLink = false;
								if( is_file("projects/".$info[1].".php") ){
									$showLink = true;
								}

								echo '<div class="banner_img_full">';
								if($showLink) {
									echo '<a href="projects/'.$info[1].'.php">';
								}else{
									echo '<span>';
								}
								$exif = exif_read_data($PATH.'/'.$dupe[0]);
								echo '<img src="'.$PATH.'/'.$dupe[0].'" alt="'.$exif['ImageDescription'].'" class="imgHover">';
								$rotate = false;
								if(is_file($PATH.'/'.$info[0].'_'.$info[1].'_002.jpg')) $rotate = true;
								echo '<div class="overLay overLayHome " style="bottom: 38px;" id="'.$info[1].'">'.$exif['ImageDescription'].'</div>';
								//'.($rotate ? 'homeRotator' : '' ).'
								if($showLink){
									echo '</a>';
								}else{
									echo '</span>';
								}
								echo '</div>';	
							}
					}else{
						echo '<div class="banner_third_container">';
						
						$count = 0;
						for($j=0; $j<sizeof( $dupe ); $j++){
						
							if(substr($dupe[$j],-7) =="001.jpg"){
								$info = explode("_", $dupe[$j] );
								$showLink = false;
								if( is_file("projects/".$info[1].".php") ){
									$showLink = true;
								}
								if($count==0){
									echo '<div class="banner_img_third banner_img_third_l home" >';
									$count++;
								}else if($count==1){
									echo '<div class="banner_img_third banner_img_third_m home" >';
									$count++;
								}else{
									echo '<div class="banner_img_third banner_img_third_r home" >';
								}
								if($showLink) {
									echo '<a href="projects/'.$info[1].'.php">';
								}else{
									echo '<span>';
								}
								$exif = exif_read_data($PATH.'/'.$dupe[$j]);
								echo '<img src="'.$PATH.'/'.$dupe[$j].'" alt="'.$exif['ImageDescription'].'" class="imgHover">';
								$rotate = false;
								if(is_file($PATH.'/'.$info[0].'_'.$info[1].'_002.jpg')) $rotate = true;
								echo '<div class="overLay overLayHome " style="bottom: '.($showLink ? '38px' : '34px' ).';" id="'.$info[1].'">'.$exif['ImageDescription'].'</div>';
								//'.($rotate ? 'homeRotator' : '' ).'
								if($showLink){
									echo '</a>';
								}else{
									echo '</span>';
								}
								echo '</div>';
							}
						}
						
						echo '</div>';

					}
				//print_r($js_info_array);
				}
			?>

			</div>
    	</div>
<?php
	include('footer.php');
?>   	
		<script src="scripts/jquery.easing.1.3.js" type="text/javascript"></script>
		<script type="text/javascript" src="scripts/jquery.touchSwipe.js"></script>
		<script type="text/javascript" src="scripts/jquery.smartresize.js"></script>
		<script src="scripts/liquid.js" type="text/javascript"></script>
		<?php
			echo "<script>";
			
			echo "</script>";
		?>
		
		<script>
			var fable_obj = {
				imgs : ["images/fable/fable_home001.jpg","images/fable/fable_home002.jpg"],
				pos : 0,
				id : "fable_id"
			};
			var masseffect_obj = {
				imgs : ["images/mass_effect/mass_effect_home001.jpg","images/mass_effect/mass_effect_home002.jpg"],
				pos : 0,
				id : "masseffect_id"
			};
			
			var kinect_obj = {
				imgs : ["images/kinect_adventures/kinect_adventures_home001.jpg","images/kinect_adventures/kinect_adventures_home002.jpg","images/kinect_adventures/kinect_adventures_home003.jpg"],
				pos : 0,
				id : "kinect_id"
			};
			
			var beatlesrockband_obj = {
				imgs : ["images/the_beatles_rock_band/the_beatles_home001.jpg","images/the_beatles_rock_band/the_beatles_home002.jpg"],
				pos : 0,
				id : "beatlesrockband_id"	
			};
			var firefall_obj = {
				imgs : ["images/firefall/firefall_home001.jpg","images/firefall/firefall_home002.jpg"],
				pos : 0,
				id : "firefall_id"
			};
		
			var borderlands_obj = {
				imgs : ["images/borderlands/borderlands_home001.jpg","images/borderlands/borderlands_home002.jpg"],
				pos : 0,
				id : "borderlands_id"
			};		
		</script>
		<script src="scripts/rotator.js" type="text/javascript"></script>
	</body>
</html>