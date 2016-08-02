<?php
	$rel_path = "/";
?>
<!--[if IE]>
 <link href="<?php echo $rel_path; ?>styles/normalize.css" type="text/css" media="all"
rel="stylesheet">
 <![endif]-->
			<div id="header">
				<div id="logo">
					<a href="<?php echo $rel_path; ?>">
						<img src="<?php echo $rel_path; ?>images/nav/liquid_logo.png" />
					</a>	
				</div>
				<div id="blackbar">
					<div id="navInfo" class="nav">				
						<a href="#">Information</a>
					</div>
					<div id="navHome" class="nav"><a href="<?php echo $rel_path; ?>">Home</a></div>
				</div>	
				<div id="slideframe" style="display:none;">
					<div id="slidepane">
						<ul class="sub-menu" >
							<li id="sub1" class="menu-item" >
							  <a href="<?php echo $rel_path; ?>services.php" id="navServices">Services</a>
							</li>
							<li id="sub2" class="menu-item" >
							  <a href="<?php echo $rel_path; ?>contact.php" id="navContact">Contact</a>
							</li>
							<li id="sub3" class="menu-item" >
							  <a href="<?php echo $rel_path; ?>about.php" id="navAbout">About</a>
							</li>
							<li id="sub4" class="menu-item" >
							  <a href="<?php echo $rel_path; ?>jobs.php" id="navJobs">Jobs</a>
							</li>
						</ul>
					</div>
				</div>
			</div>