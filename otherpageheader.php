

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" style="background:#c9c82c">


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

<meta name="twitter:card" content="summary" />
<meta name="twitter:site" content="" />
<meta name="twitter:title" content=" " />
<meta name="twitter:description" content="" />
<meta name="twitter:image" content="images/vision-mission.jpg" />


<link rel="shortcut icon" href="favicon.ico" />
<link href="style.css" rel="stylesheet" type="text/css" />

<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable = no" name="viewport" />
<script src="js/jquery-1.7.2.min.js" type="text/javascript"></script>
<script src="js/jquery.easing.1.3.js" type="text/javascript"></script>
<script src="js/modernizr.js" type="text/javascript"></script>
<script src="js/respond.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="js/treeview/jquery.treeview.css" />
<script src="js/treeview/jquery.treeview.js" type="text/javascript"></script>
<script type="text/javascript" src="js/resizing.js"></script>
<script type="text/javascript" src="source/jquery.fancybox8cbb.js?v=2.1.5"></script>
<link rel="stylesheet" type="text/css" href="source/jquery.fancybox8cbb.css?v=2.1.5" media="screen" />
<script type="text/javascript">



function resizeBehave() {

			screenWidth = $(document).width();
					//alert(screenWidth);
			$("#screenSize").text(screenWidth);		
			//alert("hgf");
			if (screenWidth < 886){				
				$('.midside').append("<div style='clear:both'></div>");
				
			}
			
			//if (screenWidth > 930){				
			
				var imageWidth = 953;
				var imageHeight = 499;
				
				
				var imageWidth1 = 1400;
				var imageHeight1 = 379;
				
				
				var navWidth = jQuery(".pics").width();
				var windowheight = jQuery(".pics").height();
				navHeight = windowheight;
				var navRatio = navWidth / navHeight;
				imageRatio = imageWidth / imageHeight;
				if (navRatio > imageRatio) {
					var newHeight = (navWidth / imageWidth) * imageHeight;
					var newWidth = navWidth;
				} else {
					var newHeight = navHeight;
					var newWidth = (navHeight / imageHeight) * imageWidth;
				}	
				newTop = 0 - ((newHeight - navHeight) / 2);
				newLeft =  0 - ((newWidth - navWidth) / 2);
				jQuery('.image').css({height: navHeight, width: navWidth});
				jQuery('.image img').css({height: newHeight, width: newWidth, top: newTop, left: newLeft});
				jQuery('.image').css({visibility:"visible", display:"block"});
				
				
				

				
				if (screenWidth < 914){
					$('.bannerContainer-hr .ad-image').css({width: (screenWidth/1.1)});
					aa = ((screenWidth/2.1)-250)/2;
					$('.bannerContainer-hr').css({left: 0, marginLeft: 0, marginTop:-(aa)});
				} else {
					$('.bannerContainer-hr .ad-image').css({width: 952});
					$('.bannerContainer-hr').css({left: '50%', marginLeft: -476, marginTop:0});
				}
				
				if (screenWidth < 530){
					$('.bannerContainer-hr').css({left: '50%', marginLeft: -240, marginTop:0});
				}
				

				
				
				
			
				
				
				
				
			//} else{
			
				mobileBanner = $(".staticbanner .image1 img").height();
				//alert(mobileBanner);
				
				
			//}


			
			
	
			
				
		}

//resizeImage();

$(window).resize(function(e){
				resizeBehave();
				
				
				
				// resizeImage();
			});
			
			
			
			
			
			
			
			
			
			
$(document).ready(function(){
$('.fancybox').fancybox();


resizeBehave();

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
	
});
</script>
<script type="text/javascript">

openSub = false;

$(document).ready(function() {

	$(".smallnav").click(function(){
		sidelinksHeight = $(".sidelinks li").length;
				//alert(sidelinksHeight);
		if (openSub){
			openSub = false;
			$(".sidelinks").stop(true, true).animate({'height':0}, 500);
		} else {
			openSub = true;
			$(".sidelinks").stop(true, true).animate({'height':37*(sidelinksHeight)+38}, 500);
		}
	});
	
	
	$(".logoajnara").click(function(){
		
		
		//aaa = 
		//alert(aaa);
	});
	
});
</script>
<script type="text/javascript" src="js/banner/jquery.ad-gallery.js"></script>
<link rel="stylesheet" type="text/css" href="js/banner/jquery.ad-gallery-inner.css">
<script type="text/javascript">
	$(function() {
		var galleries = $('.ad-gallery').adGallery();
		});
</script>
<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" charset="utf-8" />
<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" charset="utf-8">
			$(document).ready(function(){
				$("area[rel^='prettyPhoto']").prettyPhoto();
				
				$(".pgallery:first a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',theme:'light_square',slideshow:3000, autoplay_slideshow: false});
				$(".pgallery:gt(0) a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'fast',slideshow:10000, hideflash: true});				
			});
</script>


</head>
<body class="body">






<div class="mainContainer">

	<div class="home-mainnew">
		<!--<div id="screenSize" style="position:fixed; top:0px; left:10px; z-index:111111111111; background-color:#fff;"></div>-->
<div class="logoajnara"><a href="index.html"><img src="images/ajnara-white-logo.png" style="width:130px;margin-top:-35px;" class="toplogo" alt="Ajnara Logo" border="0" /></a></div>
<div class="mobilemenu btnmenu"><a href="javascript:;"><img src="images/mobile-menu.gif" alt="" border="0" /></a></div>
<div style="position:absolute; right:0; margin-top:15px;" class="tlinks">
<style>
.valfrm { padding-top:7px; text-align:left;  font-weight: 400; font-size: 9px; color: #ff0000;  font-family: 'soho_gothic_proregular'; text-decoration: none; display:block;}
</style>
<script language="JavaScript">
<!--
function validatefrmCall()
{	
	var count_bug=0;
	var email_error;
	
	if((document.frmCall.mobile.value == "") || (document.frmCall.mobile.value == "Enter your mobile number"))
	{
		document.getElementById('divmsisdn').innerHTML = "Please Enter Your Mobile Number.";
		if(eval(count_bug)==0) 
		document.frmCall.mobile.focus();
		count_bug+=1;
	}
	
	else if(!ValidateNo(document.frmCall.mobile.value,"1234567890"))
	{
		document.getElementById('divmsisdn').innerHTML = "Please enter 10 Digit Mobile Number.";
		if(eval(count_bug)==0) 
		document.frmCall.mobile.focus();
		count_bug+=1;
	}
	
	else if(document.frmCall.mobile.value.length < 10)
	{
		document.getElementById('divmsisdn').innerHTML = "Please enter 10 Digit Mobile Number.";
		if(eval(count_bug)==0) 
		document.frmCall.mobile.focus();
		count_bug+=1;
	}	
	
	if(count_bug>0)
		return false;
	else
		//return true;
		getCallNew();
}

function getCallNew()
{
var url = "th.asp";  
var mobile=document.frmCall.mobile.value ;
var parameters = "mobile="+mobile; 
//var parameters = "id="+id+"&catid="+catid+"&subcatid="+subcatid+"&quan="+quan; 
//alert(parameters);
var xmlHttp=new CreateObject();
 xmlHttp.open("POST.html", url, true);  
 //Send the proper header information along with the request  
 xmlHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");  
 xmlHttp.setRequestHeader("Content-length", parameters .length);  
 xmlHttp.setRequestHeader("Connection", "close");  
 xmlHttp.onreadystatechange = function() {//Handler function for call back on state change.  
     if(xmlHttp.readyState == 4) { 
	 //var str=xmlHttp.responseText.split("$$");
       //document.getElementById("DivComplete").innerHTML=str[0];
	
						document.getElementById('divSubCall').innerHTML="<p style='text-align:center; line-height:14px; font-size:11px; color:#333; '><br>Thank you.<br>You will get a call back shortly.<br><br>";
						//document.frmCall.submit();
				
		// alert(xmlHttp.responseText);
     }  
 }  
 xmlHttp.send(parameters); 	
//***************
}
function CreateObject()
{
 http_request = false;
      if (window.XMLHttpRequest) { // Mozilla, Safari,...
         http_request = new XMLHttpRequest();
         if (http_request.overrideMimeType) {
            http_request.overrideMimeType('text/html');
         }
      } else if (window.ActiveXObject) { // IE
         try {
            http_request = new ActiveXObject("Msxml2.XMLHTTP");
         } catch (e) {
            try {
               http_request = new ActiveXObject("Microsoft.XMLHTTP");
            } catch (e) {}
         }
      }
      if (!http_request) {
         alert('Cannot create XMLHTTP instance');
         return false;
      }
return http_request;
}

function ValidateNo( NumStr, String )
{
	for( var Idx = 0; Idx < NumStr.length; Idx ++ )
	{
		var Char = NumStr.charAt( Idx );
		var Match = false;
		for( var Idx1 = 0; Idx1 < String.length; Idx1 ++)
		{
			if( Char == String.charAt( Idx1 ) )
			Match = true;
		}
		if ( !Match )
		return false;
	}
	return true;
}
// -->
</script>

<img src="images/socialpic.png" alt="" border="0" class="tl1" style="height:40px"/></div>


	<?php include('mainmenu.php'); ?>

<div class="clear"></div>


<?php include('menu.php'); ?>

		<div class="clear"></div>