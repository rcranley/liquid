<?php
	$PATH = "images/contact/contact";
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Liquid Development :: Contact </title>
		<link href="styles/main.css" rel="stylesheet">
		<link href="styles/about.css" rel="stylesheet">
	</head>
  	<body id="index">
		<div id="container" >
<?php
	include('header.php');
?>
			<div id="contents" >
				<h1><img src="<?php echo $PATH; ?>_title.png"></h1>
				
				<div class="contact_container">
					<div class="contact_img_third banner_img_third_l">
						<!--<img src="<?php echo $PATH; ?>_phone.png">-->
						<img src="<?php echo $PATH; ?>_phone_notag.jpg">
						<div class="contact_indent allowSelect">
							<span class="contact_fixed">Voice:</span> <a href="tel:+15032238500">503-223-8500</a><br>
							<span class="contact_fixed">Fax:</span>   503-223-8504
						</div>
					</div>
					<div class="contact_img_third banner_img_third_m">
						<a href="mailto:info@liquiddevelopment.com"><img src="<?php echo $PATH; ?>_email_notag.jpg"></a>
						<!--<a href="mailto:info@liquiddevelopment.com"><img src="<?php echo $PATH; ?>_email.png"></a>-->
						<div class="allowSelect">
							Business Development: <br><a href="mailto:info@liquiddevelopment.com">info@liquiddevelopment.com</a><br>
							Jobs: <br><a href="mailto:jobs@liquiddevelopment.com">jobs@liquiddevelopment.com</a><br>
						</div>
					</div>
					
					<div class="contact_img_third banner_img_third_r">
						<a href="http://g.co/maps/f84aa" target="_blank">
							<img src="<?php echo $PATH; ?>_address_notag.jpg">
							<!--<img src="<?php echo $PATH; ?>_address.png">-->
						</a>
						<div class="contact_indent allowSelect">
							Liquid Development<br>
							411 SW 2nd Ave, #300<br>
							Portland, OR 97204<br>
							<a href="http://g.co/maps/f84aa" target="_blank" class="dash">Click here for a map</a>
						</div>				
					</div>
				</div>
				<div class="contact_container">
					<div class="general_text">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ultrices, ligula et pellentesque congue, 
						magna eros adipiscing ante, vel condimentum enim metus vitae justo. Sed non sem at sem vehicula rhoncus. 
						Aliquam fermentum lorem pellentesque neque ornare facilisis. Maecenas tincidunt libero id sapien pellentesque 
						gravida ut quis arcu. Curabitur cursus condimentum felis.
					</div>
				</div>
				<div class="contact_container">
					<div class="contact_img_full">
						<img src="<?php echo $PATH; ?>_street_view.png">
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