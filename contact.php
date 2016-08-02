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
				<div class="allowSelect">
					Liquid Development<br>
					411 SW Second Ave, Suite 300<br>
					Portland, OR 97204<br>
					Voice: 503-223-8500<br>
					Fax: 503-223-8504<br>
					<a href="http://g.co/maps/f84aa" target="_blank" class="dash">Map / Location</a><br>
					<br>
	
					<h2>Business Development</h2>
					For all business related inquiries, please contact us through  e-mail at: <a href="mailto:info@liquiddevelopment.com" class="dash">info@liquiddevelopment.com</a><br><br>
					
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