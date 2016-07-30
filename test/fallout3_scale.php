<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Liquid Development :: Projects :: Fallout 3</title>
		<script src="https://www.google.com/jsapi"></script>
		<script>
			google.load("jquery","1.6.4");
		</script>
		<link href="styles/main.css" rel="stylesheet">
		<link href="styles/fallout3.css" rel="stylesheet">
	</head>
  	<body id="index">
		<div id="container">
<?php
	include('header2.php');
?>
			<div id="contents" style="top: -30px;">
				<div id="fullContainer" >
					<img class="fullImage" src="images/fallout3/fo30_full.jpg" showcaption="true" alt="Fallout 3: Promotional Image" style="">
				</div>
				<div id="slideshow">
					<div id="slidesContainer">
						<div class="slide"><img src="images/fallout3/fo30_full_thumb.jpg" alt="Fallout 3: Promotional Image"></div>
						<div class="slide"><img src="images/fallout3/fo31_full_thumb.jpg" alt="Fallout 3: Alien Crash Site"></div>
						<div class="slide"><img src="images/fallout3/fo32_full_thumb.jpg" alt="Fallout 3: Washington DC"></div>
						<div class="slide"><img src="images/fallout3/fo33_full_thumb.jpg" alt="Fallout 3: Promotional Image 2"></div>
						<div class="slide"><img src="images/fallout3/fo34_full_thumb.jpg" alt="Fallout 3: Aircraft Carrier"></div>
						<div class="slide"><img src="images/fallout3/fo35_full_thumb.jpg" alt="Fallout 3: The Grisly Diner"></div>
						<div class="slide"><img src="images/fallout3/fo36_full_thumb.jpg" alt="Fallout 3: The Pitt Entrance"></div>
						<div class="slide"><img src="images/fallout3/fo37_full_thumb.jpg" alt="Fallout 3: Cityscape"></div>
						<div class="slide"><img src="images/fallout3/fo38_full_thumb.jpg" alt="Fallout 3: Promotional Image 3"></div>
						<div class="slide"><img src="images/fallout3/fo39_full_thumb.jpg" alt="Fallout 3: Rivet City Water Caravan Stop"></div>
						<div class="slide"><img src="images/fallout3/fo310_full_thumb.jpg" alt="Fallout 3: Water"></div>
						<div class="slide"><img src="images/fallout3/fo311_full_thumb.jpg" alt="Fallout 3: Wheaton Armory"></div>
					</div>
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
		<script src="scripts/slideshows.js" type="text/javascript"></script>
		
		<script>
		
$(document).ready(function(){

	var isMobile = isMobileDevice();
	//var isMobile = true;
	
	if(!isMobile){	
		$("#info-link").mouseenter(function(){
			setTimeout(showScaledNav,100 );	
		});
	
		$("#slideframeScaled").mouseleave(function(){
			setTimeout(hideScaledNav,100);
		}).hover(function(){
			$(this).css('cursor','pointer');
		},function(){
			$(this).css('cursor','auto');
		});
	}
	
	$("#info-link").click(
		function(e) {
			showScaledNav();
			e.preventDefault();
			e.stopPropagation();
		}
	);
	
	function showScaledNav(){
		$("#header #slideframeScaled").show();
		$("#header #slideframeScaled").css("z-index","999999");
		$("#slidepane").animate({top:'0%', left:'-6%'}, 100);		
		
		
	}
	
	function hideScaledNav(){
		$("#slidepane").animate({top:'-110%', left:'6%'}, 75);
        $("#header #slideframeScaled").css("z-index","-999999");
        $("#header #slideframeScaled").hide();
        
       
	}		

	function isMobileDevice(){
		var ua = navigator.userAgent;
		var checker = {
			iphone: ua.match(/(iPhone|iPod|iPad)/),
			blackberry: ua.match(/BlackBerry/),
			android: ua.match(/Android/)
		};
		if ( (checker.android) || (checker.iphone) || (checker.blackberry) ) {
			return true;
		}else {
			return false;
		}
	}
	
	$.preload(
		'images/fallout3/fo30_full.jpg',
		'images/fallout3/fo31_full.jpg',
		'images/fallout3/fo32_full.jpg',
		'images/fallout3/fo33_full.jpg',
		'images/fallout3/fo34_full.jpg',
		'images/fallout3/fo35_full.jpg',
		'images/fallout3/fo36_full.jpg',
		'images/fallout3/fo37_full.jpg',
		'images/fallout3/fo38_full.jpg',
		'images/fallout3/fo39_full.jpg',
		'images/fallout3/fo310_full.jpg',
		'images/fallout3/fo311_full.jpg'
	);

	$(window).smartresize(function(){  
	// SmartResize is a function tht waits until the resize has stopped, then executes.
		fixNav();
	});

	function fixNav(){
		//alert($("#header").css('height'));
		$(".menu-item").height( Math.floor($("#header").height()/3)-4 );
	}
	setTimeout(fixNav, 1000);	
		
});			

		</script>		
	</body>
</html>