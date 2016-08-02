<?php
	$PATH = "images/jobs/jobs";
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Liquid Development :: Jobs </title>
		<link href="styles/main.css" rel="stylesheet">
		<link href="styles/about.css" rel="stylesheet">
	</head>
  	<body id="index">
		<div id="container">
<?php
	include('header.php');
?>
			<div id="contents" class="allowSelect">
				<h1><img src="<?php echo $PATH; ?>_title.png"></h1>
				
				<div class="banner_img_full" id="main1" >						
					<img src="<?php echo $PATH; ?>001.jpg">
				</div>
				<div>
					Liquid Development is always looking for talented artists. <br>
					Please email us at <a href="mailto:jobs@liquiddevelopment.com" class="dash">jobs@liquiddevelopment.com</a> with a link to your online portfolio / website.
				</div>
				<br><br>
				<div class="banner_third_container">
					<div class="banner_img_third banner_img_third_l" id="main2" >
						<img src="<?php echo $PATH; ?>002.jpg">				
					</div>
					<div class="banner_img_third banner_img_third_m" id="main3" >
						<img src="<?php echo $PATH; ?>003.jpg">				
					</div>
					<div class="banner_img_third banner_img_third_r" id="main4">
						<img src="<?php echo $PATH; ?>004.jpg">				
					</div>
				</div>
			</div>
    	</div>
<?php
	include('footer.php');
?>
		<script src="scripts/jquery.easing.1.3.js" type="text/javascript"></script>
		<script type="text/javascript" src="scripts/jquery.touchSwipe.js"></script>
		<script type="text/javascript" src="scripts/jquery.smartresize.js"></script>
		<script src="scripts/liquid.js" type="text/javascript"></script>
  </body>
</html>