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
				<div class="banner_img_full" id="main1">
					<img src="<?php echo $PATH; ?>001.jpg">
				</div>
At Liquid Development, we know creating content for the next-generation of gaming machines can be a grueling process for publishers. The amount of assets required by these new state of the art games can break any budget! Assembling the team of artists is a tough job in itself, but occupying their time in between projects can be downright impossible. Not to mention, finding the resources to create a specific element of a game can often take longer than the task itself.
<br><br>
Enter Liquid Development. Using our resources allows the publisher to do what they do best: create great games, instead of managing a room-full of artists. Liquid Development has the experience to step in at any point in the process and produce art that is top-notch and true to the designer's vision. Our management can combine talents from multiple artists and create a cohesive array of content. Because of our art director experience at previous organizations, we know the frustrations that publishers often face when trying to implement the work of multiple teams of artists. We know that this experience comes as a refreshing change to most publishers.
			<br><br>
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