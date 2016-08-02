$(window).load(function(){

	var isMobile = isMobileDevice();
	var currentPosition = 0;
	var actualPosition = 0;
	var slideWidth = 96;
	var numberOfSlides = $('.slide').length;
	var numShowSlides = 9;

	var swipeOptionsSlides =
	{
		swipeLeft:swipeSlideLeft,
		threshold:50,
		swipeRight:swipeSlideRight
	}	

	function swipeSlideLeft(){
		if(currentPosition < numberOfSlides-numShowSlides){
			currentPosition = currentPosition+1;
			moveSlider(currentPosition);
			manageControls(currentPosition, actualPosition); 
		}
	}
	
	function swipeSlideRight(){
		if(currentPosition > 0){
			currentPosition = currentPosition-1;
			moveSlider(currentPosition);
			manageControls(currentPosition, actualPosition); 
		}	
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
	
	function setupMobile(){
		$("img[showCaption]").each(function(index){
			if( $(this).attr('showCaption') == "true"){
				//addSlideShowCaptionOverlay( $(this).parent(), this) ;
			}	
		});	
		
		if(actualPosition>0){
			$('#floatNavLeft').show().css('opacity','1');
		}
		if(actualPosition< numberOfSlides-1){
			$('#floatNavRight').show().css('opacity','1');
		}
		$("#galleryOptions").hide();
	}	

	function addSlideShowCaptionOverlay(target, img){
		removeSlideShowCaptionOverlay(target );
		var loc = $(img).height()-30;
		$("<div class='overLay overLaySlideShow'></div>")
			.css('top',loc)
			.html( $(img).attr("alt") )
			.appendTo( $(target) )
		;	
	}

	function removeSlideShowCaptionOverlay(target){
		$(target).find("div.overLay").eq(0).remove();
	}

	function addDownloadOverlay(target, img){	
		var showDLLinks = true;
		removeDownloadOverlay(target, img );
		var loc = $(img).height()-15;

		if( $(".slide .clicked").eq(0).attr("hashr") != "false" ){
			showDLLinks = true;
			$("#viewhr").unbind().bind('click',function(){
				window.open( $(img).attr("src").replace(".jpg", "_hd.jpg") );
			}).show();
			loc -= 30;
		}else{
			$("#viewhr").hide();
			showDLLinks = false;
		}
		
		if( $("#slideshow").attr("hasZip") == "true"){
			showDLLinks = true;
			$("#dlgallery").unbind().bind('click',function(){
				var url = $(img).attr("src").substring(0, $(img).attr("src").lastIndexOf("/")) +"/"+ $("#slideshow").attr("gallery") +".zip" ;
				window.open( url );
			}).show();
			loc -= 30;
		}else{
			(!showDLLinks ? "" : showDLLinks=true )
			$("#dlgallery").hide();
		}
		
		if(showDLLinks){
			$("#galleryOptions").css('top', loc).fadeIn(500);
		}
	}

	function removeDownloadOverlay(target){
		$("#galleryOptions").fadeOut(50);
	}

	function addSlideShowVideoOverlay(obj){
		removeSlideShowVideoOverlay(obj);
		var alt = $(obj).find("video").eq(0).attr("alt");
		var loc = $(obj).height()-30;

		$("<div class='overLay overLayVideoPlay'><div class='play'></div></div>")
			.css('top',5)
			.height($(obj).height()-41)
			.appendTo($(obj) )
			.click(function(){
				removeSlideShowVideoOverlay(obj);
				document.getElementById("video").play();
			})
		;
	}
	
	function removeSlideShowVideoOverlay(obj){
		$("div.overLay").remove();
	}
		
	function setClicked(img){
		$('.slide').children().removeClass('clicked');
		$(img).children().eq(0).addClass('clicked');
	}

	function setImage(img, i){
		var image = $(img).children("img").attr("src").replace("_thumb","");
		var alt = $(img).children("img").attr("alt");
		var highres = ( $(img).children("img").attr("hashr") ? $(img).children("img").attr("hashr") : false);
		
		$("#fullVideo").remove();		
		var newImg = new Image();
		
		$(newImg)
			.attr("class","fullImage")
			.attr('src', image)		
			.attr("hashr", highres)			
			.attr("alt",alt)		
			.load(function () {
				$(this).hide();
			
				$('#fullContainer').append(this);	
				$(".loading").height( $('#fullContainer').height() );	
				
				$(this).fadeIn(400, function(){
					$(".fullImage").not(':last').remove();	
					$('#fullContainer').find(".loading").remove();
				}); 
				
				(isMobile ? setupMobile() : "" );
			})
			.error(function () {
			  // notify the user that the image could not be loaded
			})
		;
	}
	
	function setVideo(vid, i){
		var video = $(vid).children("img").attr("src").replace("_thumb.jpg","");
		var alt = $(vid).children("img").attr("alt");
		
		$(".fullImage").remove();
		//$("div.overLay").remove();
		//$("div.dlLink").remove();
		
		$('#floatNavRight').hide();
		$('#floatNavLeft').hide();

		if($("#fullVideo").length<=0){
			$("<div />")
				.attr("id","fullVideo")
				.appendTo( $('#fullContainer') )
			;
		}
		
		$("#fullVideo")
			.html('<img src="' + video + '.jpg" alt="'+alt+'" style="cursor: pointer;" />')
			.click(function(){
				$(this).html('<video poster="' + video + '.jpg" ' + (isMobile ? "controls" : "controls" ) + ' autoplay id="video" alt="'+alt+'" style="cursor: pointer;" ><source src="' + video + '_video.mp4" /><source src="' + video + '_video.webm" type="video/webm" /><source src="' + video + '_video.ogg" type="video/ogg" />Video not playing? <a href="' + video + '_video.mp4">Download file</a> instead.</video>')
				$("div.overLay").remove();
				$("div.dlLink").remove();
				$("div.play").remove();
				$("#floatNavLeft").hide();
				$("#floatNavRight").hide();
				$(this).unbind('click');
				
				adjustSlideshow();
			})
			.height( $('#fullContainer').height() )
		;		
		var playOverlay = $("<div class='videoControl play'></div>");
		$(playOverlay).appendTo( $("#fullVideo") );
			
		$('#fullContainer')
			.find(".loading").remove()
		;
		//adjustSlideshow();
	}
	
	function moveSlider(position, actual, moveSS){
		currentPosition = position;
		
		$sw = $(".slide").width() + parseInt($(".slide:first").css("padding-right"),10);
		$('#slideInner').animate({
		  'marginLeft' : ($sw)*(-position)
		},150);
		
		if(moveSS){
			if(actual >= numShowSlides+position){
				// Move SS right
				currentPosition=currentPosition+1;
				position = currentPosition;
				$sw = $(".slide").width() + parseInt($(".slide:first").css("padding-right"),10);
				$('#slideInner').animate({
				  'marginLeft' : ($sw)*(-currentPosition)
				},150);
			}else if( actual < numShowSlides && actual <position){
				// Move SS left
				currentPosition=currentPosition-1;
				position = currentPosition;
				$sw = $(".slide").width() + parseInt($(".slide:first").css("padding-right"),10);
				$('#slideInner').animate({
				  'marginLeft' : ($sw)*(-currentPosition)
				},150);
			}else{}		
		}
		manageControls(position, actual);
	}

	function manageControls(position, actual){
		var index = $(".clicked").index("div.slide");
		
		if(position<=0 && actual<=0){ 
			$('#leftControl').hide();
			$('#floatNavLeft').hide();
		} else if(position==0 && actual>0){
			$('#leftControl').hide();
			$('#floatNavLeft').show();
		}else{ 
			$('#leftControl').show();
			$('#floatNavLeft').show();
		}
		
		if(position>=numberOfSlides-numShowSlides){ 
			$('#rightControl').hide();
			//currentPosition = -1; // Go way back to the start
		} else{ 
			$('#rightControl').show();
		}		
		
		if(index < numberOfSlides-1){
			$('#floatNavRight').show();
		}else{
			$('#floatNavRight').hide();
		}				
	}	
		
	function adjustSlideshow(){
		$w = $("#fullContainer").width();
		$h = $(".fullImage").css('height');
		$j = $("#fullVideo").css('height');

		if($h != null){		
			//console.log( "fullImage" + $(".fullImage").height());
			$('#fullContainer').css('height', $h);
			$("#floatNavLeft").height( $(".fullImage").height() );
			$("#floatNavRight").height( $(".fullImage").height() );
		}else if($j != null){
			//console.log( "fullVideo" + $j);
			$('#fullContainer').height( $j );
			$("#floatNavLeft").height( $("#fullVideo").height() );
			$("#floatNavRight").height( $("#fullVideo").height() );
		}else{}
		
		$("#slidesContainer")
			.width($w)
			.css("padding-left", ( $w/60) *3);	
		$(".slide")
			.width( ( ($w/60)*6 )+1 );
		$(".control")
			.width( (($w/60) *3) +1 )
			.height( eval(( (($w/60)*6 )+1) ) );
			
		$('#slideInner').css('width', ( ($w/60)*6 * numberOfSlides )+ numberOfSlides);
		(isMobile ? setupMobile() : "" );

		//$(".smPlay").css('top', "-"+ eval($(".slide").height()/2)-15 +"px");
		
		if(numberOfSlides<=9){
			var move = (9-numberOfSlides)/2;
			//console.log(move);
			$("#slideshow").css('left', move*$(".slide").width() +'px' )
		}
		
	}

	// Re-adjust when window width is changed
	$(window)
		.bind('resize', adjustSlideshow )
	;		
 
	$(window).smartresize(function(){  
		// SmartResize is a function tht waits until the resize has stopped, then executes.
	  	(currentPosition>0 ? $('#leftControl').click() : "");
	  	//adjustSlideshow();
	});			
	
	if(!isMobile){	
		$("#fullContainer").hover(
			function(){
				if($(this).find("img").eq(0).length>0){
					//addSlideShowCaptionOverlay(this, $(this).find("img").eq(0) );
					addDownloadOverlay(this, $(this).find("img").eq(0) );
				}else{
					//addSlideShowVideoOverlay(this);
				}
			},
			function(){
				if($(this).find("img").eq(0).length>0){
					//removeSlideShowCaptionOverlay(this);
					removeDownloadOverlay(this, $(this).find("img").eq(0) );
				}else{
					//removeSlideShowVideoOverlay(this);
				}
			}
		);
	
	}else{
		setupMobile();
	}	
	// Turn on the swipe action on the slide show thumbnails...
	$("#slidesContainer")
		.swipe( swipeOptionsSlides )
		.css('overflow', 'hidden')
	;
	
	$('.slide')
		.wrapAll('<div id="slideInner"></div>')
		.css({
	  		'width' : slideWidth
		})
		.hover(function(){
			$(this).css('opacity', 1);
		}, function(){
			if(!$(this).hasClass('clicked') ){
				$(this).css('opacity',0.5);
			}else{
				$(this).css('opacity', 1);
			}
		})
	;
		
	$(".slide").each(function(index){
		$(this).bind('click',function(){	
			if(!$(this).hasClass('clicked') ){
				try{
					$(".slide")
						.removeClass("clicked")
						.css('opacity', .5) 
					;
	
					$('#fullContainer').append("<div class='loading'></div>");
					$(".loading").height( $('#fullContainer').height() );	
					
					if($(this).attr('isVideo') == "true"){
						setVideo(this, index);
					}else{
						setImage(this, index);
					}
					setClicked(this);
					
					$(this).addClass("clicked");
					$(this).css('opacity', 1);
					actualPosition = $(".clicked").index("div.slide");
					(isMobile ? setupMobile() : "" );
					moveSlider(currentPosition, actualPosition, false);
					//manageControls(currentPosition, actualPosition);
					adjustSlideshow();
				}catch(e){
				}
			}
		});
	});

	$('#slideInner').css('width', (slideWidth * numberOfSlides ) );

	$('#slideshow')
		.prepend('<span class="control" id="leftControl">Clicking moves left</span>')
		.append('<span class="control" id="rightControl">Clicking moves right</span>')
		.show()
	;

	$('.control').bind('click', function(){
		currentPosition = ($(this).attr('id')=='rightControl') ? currentPosition+1 : currentPosition-1;
		moveSlider(currentPosition, actualPosition, false);
	});

	function updateDownloadOverlays(){
		var loc = $(".fullImage").height()-15;
	
		if( $(".slide .clicked").eq(0).attr("hashr") != "false" ){
			showDLLinks = true;
			$("#viewhr").unbind().bind('click',function(){
				window.open( $(".fullImage").attr("src").replace(".jpg", "_hd.jpg") );
			}).show();
			loc -=30;
		}else{
			$("#viewhr").hide();
			showDLLinks = false;
		}
		
		if( $("#slideshow").attr("hasZip") == "true"){
			showDLLinks = true;
			$("#dlgallery").unbind().bind('click',function(){
				var url = $(".fullImage").attr("src").substring(0, $(".fullImage").attr("src").lastIndexOf("/")) +"/"+ $("#slideshow").attr("gallery") +".zip" ;
				window.open( url );
			}).show();
			loc -=30;
		}else{
			(!showDLLinks ? "" : showDLLinks=true )
			$("#dlgallery").hide();
		}
		
		if(showDLLinks){
			$("#galleryOptions").css('top', loc).fadeIn(500);
		}
	}
		
	$("#floatNavLeft")
		.click(function(){
			var img = $("#slideInner").find("div.clicked");
			var index = $(".clicked").index("div.slide");
			var slide = $(img).prev();
			
			$(slide).click();
			actualPosition = index-1;
			moveSlider(currentPosition, actualPosition, true);
			adjustSlideshow();
			$(".overLaySlideShow").html($(slide).find("img").eq(0).attr("alt") );
			
			updateDownloadOverlays();
		})
		.hover(function(){
			$(this).css('opacity', 1);
		},function(){
			$(this).css('opacity', 0);
		})
	;
	
	$("#floatNavRight")
		.click( function(){
			var img = $("#slideInner").find("div.clicked");
			var index = $(".clicked").index("div.slide");
			var slide = $(img).next();
			
			$(slide).click();
			actualPosition = index+1;
			moveSlider(currentPosition, actualPosition, true);
			adjustSlideshow();
			$(".overLaySlideShow").html($(slide).find("img").eq(0).attr("alt") );

			updateDownloadOverlays();
		})
		.hover(function(){
			$(this).css('opacity', 1);
		},function(){
			$(this).css('opacity', 0);
		})
	;	
	
	adjustSlideshow();
	moveSlider(currentPosition, actualPosition, false);
	$(".slide:first")
	//	.css('opacity', 1)
	//	.addClass("clicked")
		.click()
	;
	//setImage( $(".slide:first"),0 );	
 });

