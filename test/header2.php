<?php
?>

<style>

#home-link-main{ 
	position: absolute;
	left: 0%;
	top: 0%;
	height:97%;
	width: 25%;
	background-color: transparent; 
	text-indent: 100000px;
	overflow:hidden;
	z-index: 10000;
}

.scaled-nav-link{
	position: absolute; 
	top: 24%;
	height: 27%;
	width: 8%; 
	background-color: transparent; 
	text-indent: 100000px;
	overflow:hidden;
	z-index: 10000;
}

#info-link{ 
	right: 15%;
}			

#home-link{ 
	right: 31%;
}	
#slideframeScaled {
	position: absolute;
	right: 9%;
	top: 20%;
	width: 19%;
	height: 109%;
	z-index: -999999;
	overflow: hidden;
	display:none;
}

.menu-item{
	height: 25%
	text-indent: 100000px;
	overflow:hidden;
}

#slidepane {
	position: relative;
	top: -110%;
	height: 108%;
	left: 6%;
	
}

#navServices {
	/*background-image:url('images/nav/nav_services.png'); 
	background-repeat: no-repeat;
	*/display: block;
	margin:0; padding:0;
	position: absolute;
	width:100%; height:25%;top: 0%;
}
#navServices img{
	width: 80%;
	right: 0;
	position: absolute;
	
}
#navContact {
	/*background-image:url('images/nav/nav_contact.png'); 
	background-repeat: no-repeat;
	*/display: block;
	margin:0; padding:0;
	position: absolute;
	width:100%; height:25%;top: 25%;
}
#navContact img{
	width: 80%;
	right: 6%;
	position: absolute;
	
}
#navAbout {
	/*background-image:url('images/nav/nav_about.png'); 
	background-repeat: no-repeat;
	*/display: block;
	margin:0; padding:0;
	position: absolute;
	width:100%; height:25%;top: 49%;
}
#navAbout img{
	width: 80%;
	right: 10.4%;
	position: absolute;
	
}
#navJobs {
	/*background-image:url('images/nav/nav_jobs.png'); 
	background-repeat: no-repeat;
	*/display: block;
	margin:0; padding:0;
	position: absolute;
	width:100%; height:25%;top: 74%;
}
#navJobs img{
	width: 80%;
	right: 14.7%;
	position: absolute;
	
}
</style>
			<div id="header" style='height:20%; z-index:1000;'>		
				<img src="images/nav/blackbar.png" style="width: 100%;">
				<a id="home-link-main" href="index.php">Home</a>
				<a id="info-link" href="#" class="scaled-nav-link">Info</a>
				<a id="home-link" href="index.php" class="scaled-nav-link">Home</a>
				<div id="slideframeScaled">
					<div id="slidepane">
						<div class="menu-item" id="navServices">
							<a href="services.php"><img src="images/nav/nav_services.png" style="height:100%;">Services</a>
						</div>
						<div class="menu-item" id="navContact">
							<a href="contact.php"><img src="images/nav/nav_contact.png" style="height:100%;">Contact</a>
						</div>
						<div class="menu-item" id="navAbout">
							<a href="about.php"><img src="images/nav/nav_about.png" style="height:100%;">About</a>
						</div>
						<div class="menu-item" id="navJobs">
							<a href="jobs.php"><img src="images/nav/nav_jobs.png" style="height:100%;">Jobs</a>
						</div>
						<!--
						<ul class="sub-menu" >
							<li id="sub1" class="menu-item" >
							 
							</li>
							<li id="sub2" class="menu-item" >
							  
							</li>
							<li id="sub3" class="menu-item" >
							  
							</li>
							<li id="sub4" class="menu-item" >
							  
							</li>
						</ul>
						-->
					</div>
				</div>
			</div>
