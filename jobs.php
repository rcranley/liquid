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
				
				<div class="jobs_container">
					<div class="general_text">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ultrices, ligula et pellentesque congue, 
						magna eros adipiscing ante, vel condimentum enim metus vitae justo. Sed non sem at sem vehicula rhoncus. 
						Aliquam fermentum lorem pellentesque neque ornare facilisis.
						<br><br> 
						Maecenas tincidunt libero id sapien pellentesque gravida ut quis arcu. Curabitur cursus condimentum felis.
						Maecenas tincidunt libero id sapien pellentesque gravida ut quis arcu. Curabitur cursus condimentum felis.
						<br><br>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ultrices, ligula et pellentesque congue, 
						magna eros adipiscing ante, vel condimentum enim metus vitae justo. Sed non sem at sem vehicula rhoncus. 
						Aliquam fermentum lorem pellentesque neque ornare facilisis.
					</div>
				</div>
				<div class="jobs_container">
					<div class="contact_img_third banner_img_third_l" id="main2" >
						<img src="<?php echo $PATH; ?>002_notag.jpg">				
					</div>
					<div class="contact_img_third banner_img_third_m" id="main3" >
						<img src="<?php echo $PATH; ?>003_notag.jpg">				
					</div>
					<div class="contact_img_third banner_img_third_r" id="main4">
						<img src="<?php echo $PATH; ?>004_notag.jpg">				
					</div>
				</div>				
				
				<h2>The Studio</h2>
				<div class="jobs_container">
					<div class="general_text">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ultrices, ligula et pellentesque congue, 
						magna eros adipiscing ante, vel condimentum enim metus vitae justo. Sed non sem at sem vehicula rhoncus. 
						Aliquam fermentum lorem pellentesque neque ornare facilisis. Maecenas tincidunt libero id sapien pellentesque 
						gravida ut quis arcu. Curabitur cursus condimentum felis.Sed non sem at sem vehicula rhoncus. 
						Aliquam fermentum lorem pellentesque neque ornare facilisis. Maecenas tincidunt libero id sapien pellentesque 
						gravida ut quis arcu.
					</div>
				</div>
				
				<div class="jobs_container">
					<div class="contact_img_third banner_img_third_l" id="main2" >
						<img src="<?php echo $PATH; ?>_studio01.png">				
					</div>
					<div class="contact_img_third banner_img_third_m" id="main3" >
						<img src="<?php echo $PATH; ?>_studio02.png">				
					</div>
					<div class="contact_img_third banner_img_third_r" id="main4">
						<img src="<?php echo $PATH; ?>_studio03.png">				
					</div>
				</div>
				
				<h2>Portland Oregon</h2>
				<div class="jobs_container">
					<div class="general_text">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ultrices, ligula et pellentesque congue, 
						magna eros adipiscing ante, vel condimentum enim metus vitae justo. Sed non sem at sem vehicula rhoncus. 
						Aliquam fermentum lorem pellentesque neque ornare facilisis. Maecenas tincidunt libero id sapien pellentesque 
						gravida ut quis arcu. Curabitur cursus condimentum felis.
					</div>
				</div>
				
				<div class="jobs_container">
					<div class="contact_img_third banner_img_third_l" id="main2" >
						<img src="<?php echo $PATH; ?>_pdx01.png">				
					</div>
					<div class="contact_img_third banner_img_third_m" id="main3" >
						<img src="<?php echo $PATH; ?>_pdx02.png">				
					</div>
					<div class="contact_img_third banner_img_third_r" id="main4">
						<img src="<?php echo $PATH; ?>_pdx03.png">				
					</div>
				</div>
			</div>
    	</div>
<?php
	include('footer.php');
?>
		<script src="scripts/jquery.hoverIntent.min.js" type="text/javascript"></script>
		<script src="scripts/jquery.easing.1.3.js" type="text/javascript"></script>
		<script type="text/javascript" src="scripts/jquery.touchSwipe.js"></script>
		<script type="text/javascript" src="scripts/jquery.smartresize.js"></script>
		<script src="scripts/liquid.js" type="text/javascript"></script>
  </body>
</html>