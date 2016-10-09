<?php
	// Set the PHP variables to get the images
	$project = "services/concept_illustration";
	$title = "Concept and Illustration";
	$prefix = "/concept_illustration_";

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
	//echo count($farray).'<hr>'.count($is_video_array);
	include('../footer.php');
	include('../gallery_includes.php');
?>
	</body>
</html>
