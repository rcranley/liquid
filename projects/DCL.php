<?php 
	// Set the PHP variables to get the images
	$project = "DCL";
	$title = "DCL";
	
	include('../dir_reader.php');
?>
<!DOCTYPE html>
<html lang="en">
<?php echo'<!-- auto-generated -->'; ?>
	<head>
		<meta charset="utf-8" />
		<title>Liquid Development :: Project :: <?php echo $title;?></title>
		<link href="../styles/main.css" rel="stylesheet">
		<link href="../styles/<?php echo $project;?>.css" rel="stylesheet">
	</head>
  <body id="index">
		<div id="container">
<?php
	include('../header.php');
?>
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