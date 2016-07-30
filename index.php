<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="content-script-type" content="text/javascript">
		<title>Liquid Development :: Home</title>
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
				<div class="banner_third_container">
					<div class="banner_img_third banner_img_third_l home" id="main2" >
						<a href="projects/borderlands2.php">
							<img src="images/borderlands/borderlands_home001.jpg" alt="Borderlands 2" class="imgHover">
						</a>
						<div class="overLay overLayHome homeRotator" style="bottom: 38px;" id="borderlands">Borderlands 2</div>
					</div>
					<div class="banner_img_third banner_img_third_m home" id="main3" >
						<a href="projects/masseffect3.php">
							<img src="images/mass_effect/mass_effect_home001.jpg"  alt="Mass Effect 3" class="imgHover">
						</a>
						<div class="overLay overLayHome " style="bottom: 38px;" id="masseffect">Mass Effect 3</div>
					</div>
					<div class="banner_img_third banner_img_third_r home" id="main6" >
						<a href="projects/beatles.php">
							<img src="images/the_beatles_rock_band/the_beatles_home001.jpg" alt="Beatles Rockband" class="imgHover">
						</a>
						<div class="overLay overLayHome homeRotator" style="bottom: 38px;" id="beatlesrockband">Beatles Rockband</div>
					</div>
				</div>
				<div class="banner_img_full" id="main0" >
					<a href="projects/halo.php">
						<img src="images/halo/halo_home001.jpg" alt="Halo" class="imgHover">
					</a>
					<div class="overLay overLayHome" style="bottom: 38px;" id="halo">Halo</div>
				</div>
				<div class="banner_third_container">
					<div class="banner_img_third banner_img_third_l home" id="main4">
						<a href="projects/killzone.php">
							<img src="images/killzone/killzone_home001.jpg" alt="Killzone" class="imgHover">
						</a>
						<div class="overLay overLayHome" style="bottom: 38px;" id="killzone">Killzone</div>
					</div>
					<div class="banner_img_third banner_img_third_m home" id="main7" >
						<a href="projects/fallout3.php">
							<img src="images/fallout/fallout_home001.jpg"  alt="Fallout" class="imgHover">
						</a>
						<div class="overLay overLayHome" style="bottom: 38px;" id="fallout">Fallout</div>
					</div>
					<div class="banner_img_third banner_img_third_r home" id="main8" >
						<a href="projects/dragonage.php">
							<img src="images/dragon_age/dragon_age_home001.jpg" alt="Dragon Age" class="imgHover">
						</a>
						<div class="overLay overLayHome" style="bottom: 38px;" id="dragonage">Dragon Age</div>
					</div>
				</div>
				<div class="banner_img_full" id="main1" >
					<a href="projects/firefall.php">
						<img src="images/firefall/firefall_home001.jpg" alt="Firefall" class="imgHover">
					</a>
					<div class="overLay overLayHome homeRotator" style="bottom: 38px;" id="firefall">Firefall</div>
				</div>

				<div class="banner_img_full" id="main5" class="imgHover">
					<a href="projects/kinectadventures.php">
						<img src="images/kinect_adventures/kinect_adventures_home001.jpg" alt="Kinect Adventures" class="imgHover">
					</a>
					<div class="overLay overLayHome homeRotator" style="bottom: 38px;" id="kinect">Kinect Adventures</div>
				</div>
				<div class="banner_third_container">
					<div class="banner_img_third banner_img_third_l home" id="main9" >
						<span>
							<img src="images/zynga/zynga_home001.jpg" alt="Zynga" class="imgHover">
						</span>
						<div class="overLay overLayHome" style="bottom: 34px;" id="zynga">Zynga</div>
					</div>
					<div class="banner_img_third banner_img_third_m home" id="main10" >
						<a href="projects/fable.php">
							<img src="images/fable/fable_home001.jpg" alt="Fable" class="imgHover">
						</a>
						<div class="overLay overLayHome homeRotator" style="bottom: 38px;" id="fable">Fable</div>
					</div>
					<div class="banner_img_third banner_img_third_r home" id="main11" >
						<a href="projects/pixiehollow.php">
							<img src="images/pixie_hollow/pixie_hollow_home001.jpg" alt="Pixie Hollow" class="imgHover">
						</a>
						<div class="overLay overLayHome" style="bottom: 38px;" id="pixiehollow">Pixie Hollow</div>
					</div>
				</div>
			</div>
    	</div>
<?php
	include('footer.php');
?>
		<script src="scripts/jquery.easing.1.3.js" type="text/javascript"></script>
		<script type="text/javascript" src="scripts/jquery.hoverIntent.min.js"></script>
		<script type="text/javascript" src="scripts/jquery.touchSwipe.js"></script>
		<script type="text/javascript" src="scripts/jquery.smartresize.js"></script>
		<script src="scripts/liquid.js" type="text/javascript"></script>

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