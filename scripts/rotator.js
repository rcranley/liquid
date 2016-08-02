
$(document).ready(function(){
	var timeoutID;
	var rotators = $(".homeRotator");
	
	if(timeoutID != ""){
		clearTimeout(timeoutID);	
	}else{
		timeoutID = "";
	}
/*	
	// Stop people from selecting images/text
	if( !$(".allowSelect").length ){
		$("body").mousedown(function(){ return false; })
	}
*/

		
	function getRandom(num){
		var my_num = Math.floor(Math.random()*num);
		return my_num;
	}
	
	function myRotator(){		
		if(rotators.length >0){
			try{
				var rand = getRandom(rotators.length);
				var proj = $(rotators[rand]).attr('id');
				rotateImage( eval(proj+"_obj") );
				rand = null;
				proj = null;
				setTimeout(myRotator, 3000);
			}catch(e){ 
				//alert(e);
				setTimeout(myRotator, 3000);
			}
		}
	}
	
	function rotateImage(obj){
		
		if(obj!=null){ (obj.pos < obj.imgs.length-1 ?  obj.pos++ : obj.pos=0);}
		else{ return false; }
		
		var src = obj.imgs[obj.pos];
		var newImg = new Image();
		var dest = obj.id.replace("_id","");
		//console.log( $("#"+dest+"").prev().find("img").eq(0).attr('src') );
		//var h = eval($("#"+dest+"").parent().find("img").height() + ($("#"+dest+"").parent().find("img").height() *.017 )  );
		var h = eval( $("#"+dest+"").parent().height() );
		$("#"+dest+"").parent().css('height', h +'px');
		$(newImg)
			.attr('src', src)		
			.attr("showCaption","true")		
			.attr("class","imgHover")
			.load(function () {
				$(this).hide();
				$("#"+dest+"").parent().css({'background-image': 'url('+$("#"+dest+"").prev().find("img").eq(0).attr('src')+')', 'background-repeat': 'no-repeat', 'background-size': '100%', 'background-position':'left top' } );
				
				$("#"+dest+"").prev().find("img").remove();
				$("#"+dest+"").prev().append( $(this));		  
				$(this).fadeIn(1000, function(){
					$("#"+dest+"").parent().css({'background-image': 'none', 'background-repeat': '', 'background-size': '' } );
					$("#"+dest+"").parent().css('height', '');
				});
				$(this).css("display","inline-block");
			})
			.error(function () {
				//alert('load error');
			})
		;
	}

/*
	function rotateImage(obj){
		
		if(obj!=null){ (obj.pos < obj.imgs.length-1 ?  obj.pos++ : obj.pos=0);}
		else{ return false; }
		
		var src = obj.imgs[obj.pos];
		var newImg = new Image();
		var dest = obj.id.replace("_id","");
		//var h = eval($("#"+dest+"").parent().find("img").height() + ($("#"+dest+"").parent().find("img").height() *.017 )  );
		var h = eval( $("#"+dest+"").parent().parent().height() );
		$("#"+dest+"").parent().parent().css('height', h +'px');
		$(newImg)
			.attr('src', src)		
			.attr("showCaption","true")		
			.attr("class","imgHover")
			.load(function () {
				$(this).hide();
				$("#"+dest+"").parent().parent().css({'background-image': 'url('+$("#"+dest+"").parent().find("img").eq(0).attr('src')+')', 'background-repeat': 'no-repeat', 'background-size': '100%', 'background-position':'left top' } );
				
				$("#"+dest+"").parent().find("img").remove();
				$(this).insertBefore( $("#"+dest+"") );		  
				$(this).fadeIn(1000, function(){
					$("#"+dest+"").parent().parent().css({'background-image': 'none', 'background-repeat': '', 'background-size': '' } );
					$("#"+dest+"").parent().parent().css('height', '');
				});
				$(this).css("display","inline-block");
			})
			.error(function () {
				//alert('load error');
			})
		;
	}
*/
	setTimeout(myRotator, 1000);
 });