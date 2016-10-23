<?php
	// Set the PHP variables to get the images
	$project = "services/creature_production";
	$title = "Creature Production";
	$prefix = "/creature_production_";

	include('../dir_reader.php');
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Liquid Development :: Services :: <?php echo $title; ?></title>
		<link href="../styles/main.css" rel="stylesheet">
		<link href="../styles/mass_effect.css" rel="stylesheet">
	</head>
  	<body id="index">
		<div id="container">
<?php
	include('../header.php');
?>
			<h1 style="top:100px; position:relative;">
				<img src="<?php echo $PATH.$prefix; ?>title.png">
			</h1>
			<div id="contents" >
				<?php
					include('../gallery.php');
				?>
			</div>
		</div>
<?php
	include('../footer.php');
	include('../gallery_includes.php');
?>
	</body>
</html>
