var tmp=[];(function($){$.preload=function(){var i=arguments.length;for(;i--;)tmp.push($('<img />').attr('src',arguments[i]));};})(jQuery);

$(document).ready(function(){
	var mouseover = false;
	var isMobile = isMobileDevice();
	
	function setupMobile(){
		$("img[showCaption]").each(function(index){
			if( $(this).attr('showCaption') == "true"){
				//addCaptionOverlay( $(this).parent() , this) ;
			}	
		});	
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

	$("#navInfo").click(
		function(e) {
			showNav();
			e.preventDefault();
			e.stopPropagation();
		}
	);
	
	function showNav(){
		timeoutID = setTimeout(hideNav, 5000 );
		$("#header #slideframe").show().css("z-index","999999");
		$("#slidepane").animate({top:'0px', left:'0px'}, 100, function(){
			$(this).addClass('done');
		});	
	}
	
	function hideNav(){
		clearTimeout(timeoutID);
 		$("#slidepane").animate({top:'-182px', left:'41px'}, 75, function(){
 			$("#header #slideframe").hide().css("z-index","-999999");
 			$(this).removeClass('done');
 		});
	}

	function fixFooter(){
		$("#contents").css('min-height', eval( $(window).height() -180) );
		
		//var ratio = eval( $(window).width() / 768 ) ;
		//var ch = $("#copy").height() ;
		//var mt = $("#copy").css('margin-top').replace('px','');
		//console.log('Total: ' + ratio*ch + ', ratio: '+ratio+', height: ' +ch +'Margin Top: ' + mt);
		
		//$("#copy")
			//.css('height',  (ch * ratio ) +'px'  )
		//	.css('margin-top', '-'+eval(  mt * ( ratio ) )+'px' )
		//;
	}
	
	function fixOverlays(){
		$("img[showCaption]").each(function(index){
			if( $(this).attr('showCaption') == "true" && $(this).attr('forceCaption') == "true"){
				addCaptionOverlay( $(this).parent().parent() , this) ;
			}	
		});	
	}

	function addCaptionOverlay(target, img){
		removeCaptionOverlay(target, img );
		var loc = $(img).height()-30;
		$("<div class='overLay overLaySlideShow'></div>")
			.css('top',loc)
			.html( $(img).attr("alt") )
			.appendTo( $(target) )
		;
	}
	
	function removeCaptionOverlay(target){
		$(target).find("div.overLay").eq(0).remove();
	}
	
	if(!isMobile){	
		
		$("#navInfo").mouseenter( function(){
			//setTimeout(showNav,10 );
            showNav();
		});
		
		$("#slidepane").mouseleave(function(){
			if($(this).hasClass('done') ){
				//setTimeout(hideNav,10);
                hideNav();
			}
		}).mouseenter(function(){
			//clearTimeout(timeoutID);
		});
		
		$("#slideframe").mouseleave(function(){
			if(!$("#slidepane").hasClass('done') ){
				//setTimeout(hideNav,500);
                hideNav();
			}
		});
	
	}else{
		setupMobile();
	}
	
	$(".imgHover").live('mouseenter', function(){
		$(this).next().css('opacity','1');
	}).live('mouseout',function(){
		$(this).next().css('opacity','0');
	});
	
	
	//$(window)
	//	.bind('resize', fixFooter );	
		
	$(window).smartresize(function(){  
		// SmartResize is a function tht waits until the resize has stopped, then executes.
	  	fixFooter();
	  	fixOverlays();
	});	
	
	fixFooter();
	fixOverlays();

 });
 /*
	$.preload(
		"images/masseffect2/home_a.gif","images/masseffect2/home_b.gif","images/masseffect2/home_c.gif",
		"images/fallout3/home_a.gif","images/fallout3/home_b.gif","images/fallout3/home_c.gif","images/fallout3/home_d.gif",
		"images/firefall/home_a.gif","images/firefall/home_b.jpg",
		"images/beatlesrockband/brb0_full.jpg", "images/fallout3/fo30_full.jpg", "images/masseffect2/me20_full.jpg", "images/rosettastone/rs0_full.jpg"
	);
*/