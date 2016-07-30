<?php
	// Set the PHP variables to get the images
	$farray=array();
	$i=0;
	$path = "images/beatlesrockband" ;
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Liquid Development</title>
		<script src="https://www.google.com/jsapi"></script>
		<script>
			google.load("jquery","1.6.4");
		</script>
		<link href="styles/main.css" rel="stylesheet">
		<link href="styles/fallout3.css" rel="stylesheet">
  <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
		
		<style>		
.ad-gallery {
  width: 100%;
}
.ad-gallery, .ad-gallery * {
  margin: 0;
  padding: 0;
}
  .ad-gallery .ad-image-wrapper {
    width: 100%;
    height: 400px;
    margin-bottom: 10px;
    position: relative;
    overflow: hidden;
  }
    .ad-gallery .ad-image-wrapper .ad-loader {
      position: absolute;
      z-index: 10;
      top: 48%;
      left: 48%;
      border: 1px solid #CCC;
    }
    .ad-gallery .ad-image-wrapper .ad-next {
      position: absolute;
      right: 0;
      top: 0;
      width: 25%;
      height: 100%;
      cursor: pointer;
      display: block;
      z-index: 100;
    }
    .ad-gallery .ad-image-wrapper .ad-prev {
      position: absolute;
      left: 0;
      top: 0;
      width: 25%;
      height: 100%;
      cursor: pointer;
      display: block;
      z-index: 100;
    }
    .ad-gallery .ad-image-wrapper .ad-prev, .ad-gallery .ad-image-wrapper .ad-next {
      /* Or else IE will hide it */
      background: url(non-existing.jpg)\9
    }
      .ad-gallery .ad-image-wrapper .ad-prev .ad-prev-image, .ad-gallery .ad-image-wrapper .ad-next .ad-next-image {
        background: url(ad_prev.png);
        width: 30px;
        height: 30px;
        display: none;
        position: absolute;
        top: 47%;
        left: 0;
        z-index: 101;
      }
      .ad-gallery .ad-image-wrapper .ad-next .ad-next-image {
        background: url(ad_next.png);
        width: 30px;
        height: 30px;
        right: 0;
        left: auto;
      }
    .ad-gallery .ad-image-wrapper .ad-image {
      position: absolute;
      overflow: hidden;
      top: 0;
      left: 0;
      z-index: 9;
    }
      .ad-gallery .ad-image-wrapper .ad-image a img {
        border: 0;
      }
      .ad-gallery .ad-image-wrapper .ad-image .ad-image-description {
        position: absolute;
        bottom: 0px;
        left: 0px;
        padding: 7px;
        text-align: left;
        width: 100%;
        z-index: 2;
        background: url(opa75.png);
        color: #000;
      }
      * html .ad-gallery .ad-image-wrapper .ad-image .ad-image-description {
        background: none;
        filter:progid:DXImageTransform.Microsoft.AlphaImageLoader (enabled=true, sizingMethod=scale, src='opa75.png');
      }
        .ad-gallery .ad-image-wrapper .ad-image .ad-image-description .ad-description-title {
          display: block;
        }
  .ad-gallery .ad-controls {
    height: 20px;
  }
    .ad-gallery .ad-info {
      float: left;
    }
    .ad-gallery .ad-slideshow-controls {
      float: right;
    }
      .ad-gallery .ad-slideshow-controls .ad-slideshow-start, .ad-gallery .ad-slideshow-controls .ad-slideshow-stop {
        padding-left: 5px;
        cursor: pointer;
      }
      .ad-gallery .ad-slideshow-controls .ad-slideshow-countdown {
        padding-left: 5px;
        font-size: 0.9em;
      }
    .ad-gallery .ad-slideshow-running .ad-slideshow-start {
      cursor: default;
      font-style: italic;
    }
  .ad-gallery .ad-nav {
    width: 100%;
    position: relative;
  }
    .ad-gallery .ad-forward, .ad-gallery .ad-back {
      position: absolute;
      top: 0;
      height: 100%;
      z-index: 10;
    }
    /* IE 6 doesn't like height: 100% */
    * html .ad-gallery .ad-forward, .ad-gallery .ad-back {
      height: 100px;
    }
    .ad-gallery .ad-back {
      cursor: pointer;
      left: -20px;
      width: 13px;
      display: block;
      background: url(ad_scroll_back.png) 0px 22px no-repeat;
    }
    .ad-gallery .ad-forward {
      cursor: pointer;
      display: block;
      right: -20px;
      width: 13px;
      background: url(ad_scroll_forward.png) 0px 22px no-repeat;
    }
    .ad-gallery .ad-nav .ad-thumbs {
      overflow: hidden;
      width: 100%;
    }
      .ad-gallery .ad-thumbs .ad-thumb-list {
        float: left;
        width: 9000px;
        list-style: none;
      }
        .ad-gallery .ad-thumbs li {
          float: left;
          padding-right: 5px;
        }
          .ad-gallery .ad-thumbs li a {
            display: block;
          }
            .ad-gallery .ad-thumbs li a img {
              border: 3px solid #CCC;
              display: block;
            }
            .ad-gallery .ad-thumbs li a.ad-active img {
              border: 3px solid #616161;
            }
/* Can't do display none, since Opera won't load the images then */
.ad-preloads {
  position: absolute;
  left: -9000px;
  top: -9000px;
}

</style>
	</head>
  	<body id="index">
		<div id="container">
<?php
	include('header.php');
?>
			<div id="contents" >
				<div class="ad-gallery">
				  <div class="ad-image-wrapper">
				  </div>
				  <div class="ad-controls">
				  </div>
				  <div class="ad-nav">
					<div class="ad-thumbs">
					  <ul class="ad-thumb-list">
						<li>
						  <a href="images/fallout3/fo30_full.jpg">
							<img src="images/fallout3/fo30_full_thumb.jpg" title="Title for 0.jpg">
						  </a>
						</li>
						<li>
						  <a href="images/fallout3/fo31_full.jpg">
							<img src="images/fallout3/fo31_full_thumb.jpg" title="Title for 1.jpg">
						  </a>
						</li>
						<li>
						  <a href="images/fallout3/fo32_full.jpg">
							<img src="images/fallout3/fo32_full_thumb.jpg" title="Title for 2.jpg">
						  </a>
						</li>
						<li>
						  <a href="images/fallout3/fo33_full.jpg">
							<img src="images/fallout3/fo33_full_thumb.jpg" title="Title for 3.jpg">
						  </a>
						</li>
						<li>
						  <a href="images/fallout3/fo34_full.jpg">
							<img src="images/fallout3/fo34_full_thumb.jpg" title="Title for 4.jpg">
						  </a>
						</li>
						<li>
						  <a href="images/fallout3/fo35_full.jpg">
							<img src="images/fallout3/fo35_full_thumb.jpg" title="Title for 5.jpg">
						  </a>
						</li>
						<li>
						  <a href="images/fallout3/fo36_full.jpg">
							<img src="images/fallout3/fo36_full_thumb.jpg" title="Title for 6.jpg">
						  </a>
						</li>
						<li>
						  <a href="images/fallout3/fo37_full.jpg">
							<img src="images/fallout3/fo37_full_thumb.jpg" title="Title for 7.jpg">
						  </a>
						</li>
						<li>
						  <a href="images/fallout3/fo38_full.jpg">
							<img src="images/fallout3/fo38_full_thumb.jpg" title="Title for 8.jpg">
						  </a>
						</li>						
						<li>
						  <a href="images/fallout3/fo39_full.jpg">
							<img src="images/fallout3/fo39_full_thumb.jpg" title="Title for 9.jpg">
						  </a>
						</li>
						<li>
						  <a href="images/fallout3/fo310_full.jpg">
							<img src="images/fallout3/fo310_full_thumb.jpg" title="Title for 10.jpg">
						  </a>
						</li>
					</ul>
					</div>
				  </div>
				</div>			
			
			</div>	
		</div>
<?php
	include('footer.php');
?>
  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
		
		<script src="scripts/jquery.easing.1.3.js" type="text/javascript"></script>
		<script type="text/javascript" src="scripts/jquery.touchSwipe.js"></script>
		<script type="text/javascript" src="scripts/jquery.smartresize.js"></script>
		<script type="text/javascript" src="scripts/jquery.cycle.all.js"></script>
		<script src="scripts/liquid.js" type="text/javascript"></script>
		<script src="scripts/new_ss.js" type="text/javascript"></script>
		
<script>

  $(function() {
    $('img.image1').data('ad-desc', 'Whoa! This description is set through elm.data("ad-desc") instead of using the longdesc attribute.<br>And it contains <strong>H</strong>ow <strong>T</strong>o <strong>M</strong>eet <strong>L</strong>adies... <em>What?</em> That aint what HTML stands for? Man...');
    $('img.image1').data('ad-title', 'Title through $.data');
    $('img.image4').data('ad-desc', 'This image is wider than the wrapper, so it has been scaled down');
    $('img.image5').data('ad-desc', 'This image is higher than the wrapper, so it has been scaled down');
    var galleries = $('.ad-gallery').adGallery();
    $('#switch-effect').change(
      function() {
        galleries[0].settings.effect = $(this).val();
        return false;
      }
    );
    $('#toggle-slideshow').click(
      function() {
        galleries[0].slideshow.toggle();
        return false;
      }
    );
    galleries[0].addAnimation('wild',
      function(img_container, direction, desc) {
        var current_left = parseInt(img_container.css('left'), 10);
        var current_top = parseInt(img_container.css('top'), 10);
        if(direction == 'left') {
          var old_image_left = '-'+ this.image_wrapper_width +'px';
          img_container.css('left',this.image_wrapper_width +'px');
          var old_image_top = '-'+ this.image_wrapper_height +'px';
          img_container.css('top', this.image_wrapper_height +'px');
        } else {
          var old_image_left = this.image_wrapper_width +'px';
          img_container.css('left','-'+ this.image_wrapper_width +'px');
          var old_image_top = this.image_wrapper_height +'px';
          img_container.css('top', '-'+ this.image_wrapper_height +'px');
        };
        if(desc) {
          desc.css('bottom', '-'+ desc[0].offsetHeight +'px');
          desc.animate({bottom: 0}, this.settings.animation_speed * 2);
        };
        img_container.css('opacity', 0);
        return {old_image: {left: old_image_left, top: old_image_top, opacity: 0},
                new_image: {left: current_left, top: current_top, opacity: 1},
                easing: 'easeInBounce',
                speed: 2500};
      }
    );
  });
  function debug(str) {
    if(window.console && window.console.log && jQuery.browser.mozilla) {
      console.log(str);
    } else {
      $('#debug').show().val($('#debug').val() + str +'\n');
    }
  }
  

</script>
	</body>
</html>