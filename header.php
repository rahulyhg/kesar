
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<title>Kesar</title>
<meta name="keywords" content="" />
<meta name="description" content="" /> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="author" content="index.html" />
<meta name="page-topic" content="" />
<meta name="copyright" content="" />
<meta name="robots" content="index, follow" />
<meta name="rating" content="safe for kids" />
<meta name="googlebot" content=" index, follow " />
<meta name="yahooSeeker" content=" index, follow " />
<meta name="msnbot" content=" index, follow " />
<meta name="reply-to" content="" />
<meta name="allow-search" content="yes" />
<meta name="revisit-after" content="daily" />
<meta name="distribution" content="global" />
<meta name="expires" content="never" />
<meta name="language" content="english" />
<link rel="shortcut icon" href="favicon.ico" />


<meta name="twitter:card" content="summary" />
<meta name="twitter:site" content="@" />
<meta name="twitter:title" content="" />
<meta name="twitter:description" content="" />
<meta name="twitter:image" content="images/homebanner2.jpg" />


<script src="../ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>


<link href="style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="js/jquery.fullPage.css" />


<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable = no" name="viewport" />
<link type="text/css" rel="stylesheet" href="js/jquery.mmenu.css" />
<script src="../ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="../ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	logoSession = "";
});
</script>
<script type="text/javascript" src="js/jquery.fullPage.js"></script>
<script type="text/javascript">
		$(document).ready(function() {
			var pepe = $.fn.fullpage({
				menu: '#menu',
			});
			
		});
	</script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.mmenu.js"></script>
<script type="text/javascript">
			$(function() {
				$('nav#menumb').mmenu();
			});
			
		</script>
<link rel="stylesheet" href="js/treeview/jquery.treeview.css" />
<script src="js/treeview/jquery.treeview.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){
function showMenu(prmBut,prmMenu){
	
		$(prmBut).hover(function(){
//			$(prmMenu).stop(true, true).fadeIn(500);
			$(prmMenu).show();
			$(this).addClass("active");
		}, function(){
			$(prmMenu).hide();
			$(this).removeClass("active");
		});
		
		
		$(prmMenu).hover(function(){
			$(this).show();
			$(prmBut).addClass("active");
		}, function(){
			$(this).hide();
			$(prmBut).removeClass("active");
		});
		
		
		
	}
	showMenu(".hdl1","#m1");
	showMenu(".hdl2","#m2");
	showMenu(".hdl21","#subm1");
	showMenu(".hdl22","#m22");
	showMenu(".hdl2a","#m2a");
	showMenu(".hdl2a","#m23");
	showMenu(".hdl24","#m24");
	showMenu(".hdl25","#m25");
	showMenu(".hdl26","#m26");
	showMenu(".hdl2b","#m2b");
	showMenu(".hdl2c","#m2c");
	showMenu("#m2g","#m2c");
	showMenu(".hdl2g","#m2g");
	
	showMenu(".hdl2d","#m2d");
	showMenu(".hdl2e","#m2e");
	showMenu("#m2e","#m2d");
	showMenu("#m2f","#m2d");
	showMenu(".hdl2f","#m2f");
	showMenu(".hdl3","#m3");
	showMenu(".hdl4","#m4");
	showMenu(".hdl5","#m5");
	showMenu(".hdl6","#m6");
	showMenu(".hdl77","#m24");
	showMenu(".hdl7","#m7");
	showMenu(".hd20","#m20");
	showMenu(".hd21","#m21");


	
	function showSubMenu(prmsubBut,prmsubMenu){
	
		$(prmsubBut).hover(function(){
			$(prmsubMenu).stop(true).show();
			$(this).addClass("active");
		}, function(){
			$(prmsubMenu).stop(true).delay(150).hide();
			$(this).removeClass("active");
		});
			
		$(prmsubMenu).hover(function(){
			$(this).stop(true).show();
			$(prmsubBut).addClass("active");
		}, function(){
			$(this).stop(true).hide();
			$(prmsubBut).removeClass("active");
		});	
	}
	showSubMenu(".subm1", "#subm1");
	showSubMenu(".subm2", "#subm2");
	showSubMenu(".subm3", "#subm3");
	showSubMenu(".subm4", "#subm4");
	showSubMenu(".subm5", "#subm5");
	showSubMenu(".subm6", "#subm6");
	showSubMenu(".subm7", "#subm7");
	

	
});
</script>
<link rel="stylesheet" type="text/css" href="js/reveal/reveal.css" />
<script type="text/javascript" src="js/reveal/jquery.reveal.js"></script>
<script src="js/jquery.nicescroll.min.js"></script>
<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css"  />
<script src="js/prettyphoto/jquery.prettyPhoto.js" type="text/javascript" ></script>
<script type="text/javascript" >
			$(document).ready(function(){
				$("area[rel^='prettyPhoto']").prettyPhoto();
				
				$(".pgallery:first a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',theme:'light_square',slideshow:3000, autoplay_slideshow: false});
				$(".pgallery:gt(0) a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'fast',slideshow:10000, hideflash: true});
		
				$("#custom_content a[rel^='prettyPhoto']:first").prettyPhoto({
					custom_markup: '<div id="map_canvas" style="width:260px; height:265px"></div>',
					changepicturecallback: function(){ initialize(); }
				});

				$("#custom_content a[rel^='prettyPhoto']:last").prettyPhoto({
					custom_markup: '<div id="bsap_1259344" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div><div id="bsap_1237859" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6" style="height:260px"></div><div id="bsap_1251710" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div>',
					changepicturecallback: function(){ _bsap.exec(); }
				});
				
				
				
			});
</script>
<script type="text/javascript">
$(document).ready(function(){
	
	$("#browser").treeview({
		collapsed: true
//		animated:"normal",
//		persist: "cookie"
	});
	
	$('.btnmenu').click(function() {
		$('#mobilemenu').fadeIn(500);		  
	});
	 
	$('.mobilemenuclose').click(function() {
		$('#mobilemenu').fadeOut(500);		  
	});
	
	$('.callbut').click(function() {
		$('.calldiv').fadeIn(500);		  
	});
	
	$('.closecall').click(function() {
		$('.calldiv').fadeOut("fast");		  
	});

function Allresize(){		
		windowWidth = $(window).width();
		windowHeight = $(window).height();
		getbannerwidth = $(".home-mainnew").width();
		//alert(windowWidth);
		//imageSection = $(".contentSection").width();
		//alert(getbannerwidth);
		//$(".imageSection").css({width: getbannerwidth/2});
		$(".imageSection, .contentSection").css({width: "50%"});
		$(".anythingSlider, #slider1, .panel").css({width: getbannerwidth});
		//$(".anythingControls").css({marginLeft: imageSection});
		//$(".contentSection").css({marginLeft: getbannerwidth});
		
		//gettext = $("#slider1 li .contentSection").text();
		//alert(gettext);
		
		$(".linkboxes").hover(function(){
			$(this).find(".imageboxcap").stop(true).animate({width: "100%", marginLeft: "-50%"}, 320, "easeOutQuart");
			$(this).find(".imageboxcap").find("h1").stop(true).animate({marginLeft: "-40%"}, 320, "easeOutQuart");
			$(this).find(".imgarrow").show().stop(true).animate({marginLeft: "80%"}, 320, "easeOutQuart");
			$(this).find(".projectshoverlinks").show().stop(true).animate({marginLeft: "40%"}, 320, "easeOutQuart");
		}, function(){
			$(this).find(".imageboxcap").stop(true).animate({width: "50%", marginLeft: "0%"}, 320, "easeOutQuart");
			$(this).find(".imageboxcap").find("h1").stop(true).animate({marginLeft: "-50px"}, 320, "easeOutQuart");
			$(this).find(".imageboxcap").find(".single").stop(true).animate({marginLeft: "-60px"}, 320, "easeOutQuart");
			$(this).find(".projectshoverlinks").stop(true).animate({marginLeft: "-60px"}, 320, "easeOutQuart").hide();
			$(this).find(".imgarrow").stop(true).animate({marginLeft: "70px"}, 320, "easeOutQuart", function(){
				$(this).hide();	
			});
		});
		
		
		var imageWidth1 = 850;
		var imageHeight1 = 430;
		navWidth1 = jQuery(".imageSection").width();
		navHeight1 = jQuery(".imageSection").height();
		navRatio1 = navWidth1 / navHeight1;
		imageRatio1 = imageWidth1 / imageHeight1;
		if (navRatio1 > imageRatio1) {
			var newHeight1 = (navWidth1 / imageWidth1) * imageHeight1;
			var newWidth1 = navWidth1;
		} else {
			var newHeight1 = navHeight1;
			var newWidth1 = (navHeight1 / imageHeight1) * imageWidth1;
		}	
		newTop1 = 0 - ((newHeight1 - navHeight1) / 2) ;
		newLeft1 =  0 - ((newWidth1 - navWidth1) / 2);
		jQuery('.imageSection img').css({height: newHeight1, width: newWidth1, top: newTop1, left: newLeft1});
		
		
		var imageWidth8 = 284;
		var imageHeight8 = 230;
		navWidth8 = jQuery(".imagebox").width();
		navHeight8 = jQuery(".imagebox").height();
		navRatio8 = navWidth8 / navHeight8;
		imageRatio8 = imageWidth8 / imageHeight8;
		if (navRatio8 > imageRatio8) {
			var newHeight8 = (navWidth8 / imageWidth8) * imageHeight8;
			var newWidth8 = navWidth8;
		} else {
			var newHeight8 = navHeight8;
			var newWidth8 = (navHeight8 / imageHeight8) * imageWidth8;
		}	
		newTop8 = 0 - ((newHeight8 - navHeight8) / 2) ;
		newLeft8 =  0 - ((newWidth8 - navWidth8) / 2);
		jQuery('.imagebox img').css({height: newHeight8, width: newWidth8, top: newTop8, left: newLeft8});
		
		
		
		
		
		
		
		
		
		
		//topmenumargin = parseInt($(".homemenu").css("top").replace("px", ""));	
		var divname = $( ".homemenu" );
		var topmenumargin = divname.position();
		//alert(topmenumargin.top);
		$("#hometop-main").css({height: topmenumargin.top-46});
		
		if(windowWidth <= 900){
			//$("#menu").hide();
			/*boxheight = parseInt($("#hometop-main").css("height"));
			boxwidth = (windowWidth)/2;
			$("#btm-main").css({height: topmenumargin.top-38});
			boxheightbtm = $("#btm-main").height();
			
			$(".top-boxes").css({width: boxwidth, height:boxheight});
			$("#box2").css({left: boxwidth*1, top:0});
			$("#box3").css({left: boxwidth*2, top:0});
			$("#box4").css({left: boxwidth*3, top:0});
			$("#box5").css({left: boxwidth*4, top:0});
			$("#box6").css({left: boxwidth*5, top:0});
			$("#box7").css({left: boxwidth*6, top:0});
			$("#box8").css({left: boxwidth*7, top:0});
			
			$(".btm-boxes").css({width: boxwidth, height:boxheightbtm/2});
			$("#box1-btm").css({left: 0});
			$("#box2-btm").css({left: boxwidth*1});
			$("#box3-btm").css({left: 0, top:boxheightbtm/2});
			$("#box4-btm").css({left: 0, top:boxheightbtm/2*3});
			
			
			
			
			
			
			slidecounter = 0;
			$(".top-boxes").stop(true, true).animate({marginLeft:0});
			$(".next-arrow").click(function(){
				slidecounter++;
				if(slidecounter >= 2){
					$(".top-boxes").stop(true).animate({marginLeft:0});
					slidecounter = 0;
				}else{
					$(".top-boxes").stop(true).animate({marginLeft: "-="+boxwidth*2+""});
				}
				//alert(slidecounter);
				return false;
			});
			
			$(".prev-arrow").click(function(){
				slidecounter--;
				if(slidecounter <= 0){
					$(".top-boxes").stop(true).animate({marginLeft: -boxwidth*2});
					slidecounter = 2;
				}else{
					$(".top-boxes").stop(true).animate({marginLeft: "+="+boxwidth*2+""});
				}
				//alert(slidecounter);
				return false;
			});*/
			
			//var nice = $("html").niceScroll();
			
			
			
		} else{
			
			
			
			boxheight = $("#hometop-main").css("height");
			boxwidth = (windowWidth)/4;
			$("#btm-main").css({height: topmenumargin.top-38});
			boxheightbtm = $("#btm-main").height();
			
			$(".top-boxes").css({width: boxwidth, height:boxheight});
			$("#box1").css({left: 0});
			$("#box2").css({left: boxwidth*1, top:0});
			$("#box3").css({left: boxwidth*2, top:0});
			$("#box4").css({left: boxwidth*3, top:0});
			$("#box5").css({left: boxwidth*4, top:0});
			$("#box6").css({left: boxwidth*5, top:0});
			$("#box7").css({left: boxwidth*6, top:0});
			$("#box8").css({left: boxwidth*7, top:0});
			
			$(".btm-boxes").css({width: boxwidth, height:boxheightbtm});
			$("#box1-btm").css({left: 0});
			$("#box2-btm").css({left: boxwidth*1, top:0});
			$("#box3-btm").css({left: boxwidth*2, top:0});
			$("#box4-btm").css({left: boxwidth*3, top:0});
			
			
			
			slidecounter = 0;
			$(".top-boxes").stop(true, true).animate({marginLeft:0});
			$(".next-arrow").click(function(){
				slidecounter++;
				if(slidecounter === 4){
					$(".top-boxes").stop(true).animate({marginLeft:0});
					slidecounter = 0;
				}else{
					$(".top-boxes").stop(true).animate({marginLeft: "-="+boxwidth+""});
				}
				//alert(slidecounter);
				return false;
			});
			
			$(".prev-arrow").click(function(){
				slidecounter--;
				if(slidecounter === -1){
					$(".top-boxes").stop(true).animate({marginLeft: -boxwidth*3});
					slidecounter = 3;
				}else{
					$(".top-boxes").stop(true).animate({marginLeft: "+="+boxwidth+""});
				}
				//alert(slidecounter);
				return false;
			});
			
		}
		
		
		
		var imageWidth = 500;
		var imageHeight = 392;

		navWidth = jQuery(".top-boxes").width();
		navHeight = jQuery(".top-boxes").height();
		navRatio = navWidth / navHeight;
		imageRatio = imageWidth / imageHeight;
		if (navRatio > imageRatio) {
			var newHeight = (navWidth / imageWidth) * imageHeight;
			var newWidth = navWidth;
		} else {
			var newHeight = navHeight;
			var newWidth = (navHeight / imageHeight) * imageWidth;
		}	
		newTop = 0 - ((newHeight - navHeight) / 2) ;
		newLeft =  0 - ((newWidth - navWidth) / 2);
		jQuery('.image').css({height: navHeight, width: navWidth});
		jQuery('.image img').css({height: newHeight, width: newWidth, top: newTop, left: newLeft});
		jQuery('.image').css({visibility:"visible", display:"block"});
		
		
		/*var imageWidth1 = 500;
		var imageHeight1 = 392;
		navWidth1 = jQuery(".btm-boxes").width();
		navHeight1 = jQuery(".btm-boxes").height();
		navRatio1 = navWidth1 / navHeight1;
		imageRatio1 = imageWidth1 / imageHeight1;
		if (navRatio1 > imageRatio1) {
			var newHeight1 = (navWidth1 / imageWidth1) * imageHeight1;
			var newWidth1 = navWidth1;
		} else {
			var newHeight1 = navHeight1;
			var newWidth1 = (navHeight1 / imageHeight1) * imageWidth1;
		}	
		newTop1 = 0 - ((newHeight1 - navHeight1) / 2) ;
		newLeft1 =  0 - ((newWidth1 - navWidth1) / 2);
		jQuery('.image1').css({height: navHeight1, width: navWidth1});
		jQuery('.image1 img').css({height: newHeight1, width: newWidth1, top: newTop1, left: newLeft1});
		jQuery('.image1').css({visibility:"visible", display:"block"});*/
		
		
		//$(".imageSection, #slider1").css({width: getbannerwidth});
		
		
		
		
		
		var imageWidth2 = 250;
		var imageHeight2 = 196;
		navWidth2 = jQuery(".about-section").width();
		navHeight2 = jQuery(".about-section").height();
		navRatio2 = navWidth2 / navHeight2;
		imageRatio2 = imageWidth2 / imageHeight2;
		if (navRatio2 > imageRatio2) {
			var newHeight2 = (navWidth2 / imageWidth2) * imageHeight2;
			var newWidth2 = navWidth2;
		} else {
			var newHeight2 = navHeight2;
			var newWidth2 = (navHeight2 / imageHeight2) * imageWidth2;
		}	
		newTop2 = 0 - ((newHeight2 - navHeight2) / 2) ;
		newLeft2 =  0 - ((newWidth2 - navWidth2) / 2);
		jQuery('.image2').css({height: navHeight2, width: navWidth2});
		jQuery('.image2 img').css({height: newHeight2, width: newWidth2, top: newTop2, left: newLeft2});
		jQuery('.image2').css({visibility:"visible", display:"block"});
		
		
		
		
		
	}
	
	
	
	
	
	$("#box1-btm").hover(function(){
		$(".projects-box-home").stop(true. true).animate({marginTop: -50},500, function(){
			$(".links").stop(true, true).animate({left: 0});	
		});
	}, function(){
		$(".links").stop(true, true).animate({left: "-100%"}, function(){
				$(".projects-box-home").stop(true. true).animate({marginTop: -34},500);
		});
	});
	
	$(".about-section").hover(function(){
		$(this).find("p").stop(true. true).animate({marginTop: -20}, 500);
	}, function(){
		$(this).find("p").stop(true. true).animate({marginTop: -10}, 500);
	});
	
	
	
	

	$(window).load(function(){
		Allresize();
		slideranimation();
		//resizeImage();
	});
	$(window).resize(function(){
		Allresize();
		slideranimation();
		//slidecounter = 0;
		//resizeImage();
	});
	
	$(".top-boxes").hover(function(){
		$(this).find(".caption-home").stop(true, true).fadeOut("fast");
		$(this).find(".cap-text").addClass("cap-text-active").animate({paddingTop: 95, paddingBottom: 15});
	}, function(){
		$(this).find(".caption-home").stop(true, true).fadeIn("fast");
		$(this).find(".cap-text").removeClass("cap-text-active").animate({paddingTop: 101, paddingBottom: 9});
	});
	
	/*getaccerHeight = $(".accer-box img").height();
	$(".accer-box").css({height: getaccerHeight});*/
	
	
	/*$("#menu-btn").click(function(){
		$("body").stop(true, true).animate({marginLeft: 100});
	});*/

});
</script>
<link rel="stylesheet" type="text/css" href="js/carousel/skin.css" />
<script type="text/javascript" src="js/carousel/jquery.jcarousel.min.js"></script>
<script type="text/javascript">
function mycarousel_initCallback(carousel)
{
    // Disable autoscrolling if the user clicks the prev or next button.
    carousel.buttonNext.bind('click', function() {
        carousel.startAuto(3);
    });

    carousel.buttonPrev.bind('click', function() {
        carousel.startAuto(3);
    });
	

    // Pause autoscrolling if the user moves with the cursor over the clip.
    carousel.clip.hover(function() {
        carousel.stopAuto();
    }, function() {
        carousel.startAuto();
    });
};

jQuery(document).ready(function() {
    jQuery('#mycarousel').jcarousel({
        auto:1,
        wrap: 'circular',
        initCallback: mycarousel_initCallback
    });
});
</script>
<script type="text/javascript" src="js/jquery.resizecrop-1.0.3.min.js"></script>
<script>
  
  $(document).ready(function(){
    $('.cu img').resizecrop({
      width:170,
      height:100,
      vertical:"center",
	  horizontal:"center"
    });  

});  

</script>
<script>
 (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-64696584-1', 'auto');
  ga('send', 'pageview');


</script>
<!-- Google Code for Remarketing Tag -->
<!-- - - - 
Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. See more information and instructions on how to setup the tag on: http://google.com/ads/remarketingsetup
-->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 945332739;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="../www.googleadservices.com/pagead/conversion.js">
</script>
<noscript><div style="display:inline;"><img height="1" width="1" style="border-style:none;" alt="" src="http://googleads.g.doubleclick.net/pagead/viewthroughconversion/945332739/?value=0&amp;guid=ON&amp;script=0"/></div></noscript>


	<!--Anything Slider Start Here-->
<link rel="stylesheet" href="js/anythingslider.css">
<script src="../117.202.20.130/dyn/bg/Mangalayatan-9/indexa69f.js"></script>
<script type="text/javascript" src="js/jquery.color.js"></script>
<script>
$(function(){
    $('#slider1').anythingSlider({
         mode: "fade",
         hashTags: false,
         autoPlay: true,
		 pauseOnHover: false,
		 delay: 5000,
		 animationTime: 1000,
		 resizeContents: true,
		 buildNavigation: true,
		 expand: true
		
    });
	
	$(document).ready(function(){
		$("#section4").scroll(function() {
			scrollPos = $("#section4").scrollTop();
			$("#aaa").html("asas: "+scrollPos);
			//$("#fullPage-nav").hide();
		});
		$("#section4").css("overflow-y", "scroll");
		$(".homearrowbtm").hover(function(){
			$(this).animate({backgroundColor: "#05b8fb"});
		}, function(){
			$(this).animate({backgroundColor: "transparent"});
		});
		
		logoSession = "";
		
		
		
		
	});
	
	

	
	/*function scrollToAnchor(aid){
				var aTag = $("a[name='"+ aid +"']");
				$('html,body').animate({scrollTop: aTag.offset().top},'slow');
			}
			
			scrollToAnchor('aaa');*/
	
});
</script>
<!--Anything Slider End Here-->


<script type="text/javascript">
$(document).ready(function() {
/*$("#myBoxId, #black").delay(100).slideDown("slow");	
$("#close").click(function () {
$("#myBoxId, #black").slideUp("slow");
});*/

	$("#myBoxId1").delay(100).slideDown("slow");	
	$("#close1").click(function () {
		$("#myBoxId1").slideUp("slow");
	});

});
</script>
<div id="music"><embed src="ajnara-audio-new.mp3" autostart=true loop=false></div>
<!--<div style="width:100%; height:100%; position:fixed; background:#000000; z-index:9999999999999999999999999999; opacity:0.8; display:none" id="black"></div>-->


<!--<div style="width:400px; height:639px; display:none; position:absolute; margin:50px 0 0 -200px; z-index:999999999999999999999999; left:50%" id="myBoxId1">
<div id="close1" style="margin:0px 0 0 350px; cursor:pointer; position:absolute; color:#fff; padding:5px 10px; font-family:Arial; font-size:12px; font-weight:400; background-color:#0055af">Close</div>
<a href="javascript:;" target="_blank"><img src="images/THE-BELVEDERE_TEASER_PRINT-AD_AW.jpg" border="0" style="border:solid 2px #0055af; border-top:solid 25px #0055af" /></a></div>-->




<!-- onload popup -->
           
        <script type="text/javascript">
$(document).ready(function() {	

		var id = '#dialog';
	
		//Get the screen height and width
		var maskHeight = $(document).height();
		var maskWidth = $(window).width();
	
		//Set heigth and width to mask to fill up the whole screen
		$('#mask').css({'width':maskWidth,'height':maskHeight});
		
		//transition effect		
		$('#mask').fadeIn(1000);	
		$('#mask').fadeTo("slow",0.8);	
	
		//Get the window height and width
		var winH = $(window).height();
		var winW = $(window).width();
              
		//Set the popup window to center
		$(id).css('top',  winH/2-$(id).height()/2);
		$(id).css('left', winW/2-$(id).width()/2);
	
		//transition effect
		$(id).fadeIn(2000); 	
	
	//if close button is clicked
	$('.window .close').click(function (e) {
		//Cancel the link behavior
		e.preventDefault();
		
		$('#mask').remove();
		$('.window').remove();
	});		
	
	//if mask is clicked
	$('#mask').click(function () {
		$(this).remove();
		$('.window').remove();
		overlay.appendTo(document.body).remove();
return false;
	});		
	
});

</script>

<style type="text/css">
	  
#mask {
  position:top;
  left:0;
  top:0;
  z-index:99999;
  background-color:#000;
  display:none;
}  

#boxes .window {
  position:absolute;
  left:0;
  margin-top:120px !important;
  -moz-margin-top: 165px !important; /* for mozilla */
  width:900px;
  height:400px;
  display:none;
  z-index:999999;
  padding:20px;
  top:30% !important;
}

#boxes #dialog {
/*  width:650px; 
  height:600px;*/
    width:851px; 
  height:340px;
padding: 10px 10px 30px 10px;
  background-color:#ffffff;
  /*margin-top:-700px;*/
}

#boxes img {
	margin-top:7px;
}
	  
   
   </style>

  <!-- onload popup -->






</head>