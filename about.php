<?php
	$PATH = "images/about/about";
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Liquid Development :: About </title>
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
				
				<h2>The Company</h2>
				<div class="about_container">
					<div class="general_text">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ultrices, ligula et pellentesque congue, 
						magna eros adipiscing ante, vel condimentum enim metus vitae justo. Sed non sem at sem vehicula rhoncus. 
						Aliquam fermentum lorem pellentesque neque ornare facilisis. Maecenas tincidunt libero id sapien pellentesque 
						gravida ut quis arcu. Curabitur cursus condimentum felis.
					</div>
				</div>
				<div class="about_container">
					<div class="contact_img_full" id="main1">
						<img src="<?php echo $PATH; ?>_liquid001.png">
					</div>
				</div>

				<h2>Our Team</h2>
				<div class="about_container">
					<div class="general_text">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ultrices, ligula et pellentesque congue, 
						magna eros adipiscing ante, vel condimentum enim metus vitae justo. Sed non sem at sem vehicula rhoncus. 
						Aliquam fermentum lorem pellentesque neque ornare facilisis. Maecenas tincidunt libero id sapien pellentesque 
						gravida ut quis arcu. Curabitur cursus condimentum felis.
					</div>
				</div>
				<div class="about_container">
					<div class="contact_img_full" id="main1">
						<img src="<?php echo $PATH; ?>_liquid002.png">
					</div>
				</div>
				
				<h2>Our Leadership Team</h2>
				<div class="about_container">
					<div class="general_text">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ultrices, ligula et pellentesque congue, 
						magna eros adipiscing ante, vel condimentum enim metus vitae justo. Sed non sem at sem vehicula rhoncus. 
						Aliquam fermentum lorem pellentesque neque ornare facilisis. Maecenas tincidunt libero id sapien pellentesque 
						gravida ut quis arcu. Curabitur cursus condimentum felis.
					</div>
				</div>
				<div class="about_container">
					<div class="contact_img_third banner_img_third_l">
						<img src="<?php echo $PATH; ?>_team001.png">
						<div class="allowSelect">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ultrices, ligula et pellentesque congue, 
						magna eros adipiscing ante, vel condimentum enim metus vitae justo. 
						</div>
					</div>
					<div class="contact_img_third banner_img_third_m">
						<img src="<?php echo $PATH; ?>_team002.png">
						<div class="allowSelect">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ultrices, ligula et pellentesque congue, 
						magna eros adipiscing ante, vel condimentum enim metus vitae justo. 
						</div>
					</div>
					<div class="contact_img_third banner_img_third_r">
						<img src="<?php echo $PATH; ?>_team003.png">
						<div class="allowSelect">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ultrices, ligula et pellentesque congue, 
						magna eros adipiscing ante, vel condimentum enim metus vitae justo. 
						</div>
					</div>
				</div>
				<div class="about_container">
					<div class="contact_img_third banner_img_third_l">
						<img src="<?php echo $PATH; ?>_team004.png">
						<div class="allowSelect">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ultrices, ligula et pellentesque congue, 
						magna eros adipiscing ante, vel condimentum enim metus vitae justo. 
						</div>
					</div>
					<div class="contact_img_third banner_img_third_m">
						<img src="<?php echo $PATH; ?>_team005.png">
						<div class="allowSelect">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ultrices, ligula et pellentesque congue, 
						magna eros adipiscing ante, vel condimentum enim metus vitae justo. 
						</div>
					</div>
					<div class="contact_img_third banner_img_third_r">
						<img src="<?php echo $PATH; ?>_team006.png">
						<div class="allowSelect">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ultrices, ligula et pellentesque congue, 
						magna eros adipiscing ante, vel condimentum enim metus vitae justo. 
						</div>
					</div>
				</div>
				
				<h2>Clients</h2>
				<div class="about_container">
					<div class="general_text">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ultrices, ligula et pellentesque congue, 
						magna eros adipiscing ante, vel condimentum enim metus vitae justo. Sed non sem at sem vehicula rhoncus. 
						Aliquam fermentum lorem pellentesque neque ornare facilisis. Maecenas tincidunt libero id sapien pellentesque 
						gravida ut quis arcu. Curabitur cursus condimentum felis.
					</div>
				</div>
				<div class="about_container">
					<div class="contact_img_full" id="main1">
						<img src="<?php echo $PATH; ?>_clients001.png">
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