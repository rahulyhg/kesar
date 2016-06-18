<?php include('header.php'); ?>
<body style="margin:0px; padding:0px; position:relative;">


<!-- On load popup -->

<div id="boxes">
<div style="top: 176.5px; left: 36%; display: none;" id="dialog" class="window">
<img src="images/ajnara-pop-up.jpg"  alt="Ajnara City"/>
<a href="#" class="close"><img src="img/close.png" width="30" height="30" alt="Close"></a>
</div>

<div style="width: 1478px; height: 602px; display: none; opacity: 0.8;" id="mask"></div>
</div>

<!-- On load popup -->


  








<!--<div style="width:150px; height:50px; background:#fff; z-index:999999; position:fixed;" id="aaa"></div> -->

<div class="homearrowbtm" id="arrowhome"><span>↓</span></div>



<div class="section " id="section0" data-number="1" data-logo="images/logo-new.jpg">
<img src="images/ajnara-white-logo.png" alt="Ajnara Logo" border="0" style="width:150px;position:absolute; margin:10px 0 0 10px; z-index:9999;" id="logohome" />
	<div class="in-slide-content">
        <a href="peace-of-mind.html"><p class="head">Peace<br>of Mind</p>
        <div class="clear"></div>
        <p> <img src="images/home-arrow.png" alt="" border="0" align="absmiddle" /></p></a>
    </div>
</div>

<div class="section" id="section2" data-number="2" data-logo="images/logo-new-blue.jpg">
<img src="images/ajnara-white-logo.png" alt="Ajnara Logo" border="0" style="width:150px;position:absolute; margin:10px 0 0 10px; z-index:9999;" id="logohome" />
	<div class="in-slide-content" style="margin-top:-150px;">
        <a href="company-history.html"><p class="head head1">Brilliant<br>aesthetics</p>
        <div class="clear"></div>
        <p style="color:#fff;">One of the most committed,<br>fastest growing and smartest<br><img src="images/home-arrow.png" alt="" border="0" align="absmiddle" /></p></a>
    </div>
</div>
<div class="section" id="section3" data-number="3" data-logo="images/logo-new-white.jpg">
<img src="images/ajnara-white-logo.png" alt="Ajnara Logo" border="0" style="width:150px;position:absolute; margin:10px 0 0 10px; z-index:9999;" id="logohome" />
	<div class="in-slide-content" style="margin-top:-150px;">
        <a href="residential-on-going-projects.html"><p class="head head2">Timely<br>deliveries<br>
        <span>and<br>Finest Quality</span></p></a>
        
    </div>
    
    <!--<a href="index.asp" class="enter">ENTER WEBSITE <img src="images/butarrow.jpg" alt="" border="0" style="float:right; margin:15px 12px 0 0px;" /></a> -->
	
</div>

<div class="section" id="section4" data-number="4" data-logo="images/logo-new-white.jpg">

<!--<div class="popup" style="width:704px; height:727px; display:none; position:absolute; margin:135px 0 0 -370px; z-index:999999999999999999999999; left:50%" id="myBoxId">
<div id="close" style="margin:0px 0 0 635px; cursor:pointer; position:absolute; color:#fff; padding:5px 10px; font-family:Arial; font-size:12px; font-weight:400; background-color:#0055af">Close</div>
<a href="javascript:;" target="_blank"><img src="images/daffodil-popup.gif" border="0" style="border:solid 2px #0055af; border-top:solid 25px #0055af" /></a></div>-->
<!--<a id="aaa" name="aaa"></a>-->
<div class="main-slide" style="width:100%; height:auto; position:relative; background:#c9c82c;">
	<div class="home-mainnew">

<!--<div id="screenSize" style="position:fixed; top:0px; left:10px; z-index:111111111111; background-color:#fff;"></div>-->
<div class="logoajnara"><a href=""><img src="images/ajnara-white-logo.png" style="width:130px;margin-top:-35px;" class="toplogo" alt="" border="0" /></a></div>
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
<div class="calldiv">
<strong>Get a Call Back</strong> 
<a href="javascript:;" class="closecall" style="position:absolute; right:10px; top:3px; font-size:11px !important; font-family: 'soho_gothic_probold'; font-weight:400; color:#000; text-transform:uppercase;">X</a>

        	<div class="frm">
			<div id="divSubCall">
			<form autocomplete="off" method="post"  name="frmCall" id="frmCall">
		 	<input name="mobile" id="mobile" type="text" class="input" value="Enter your mobile number" onBlur="if(this.value == '') { this.value='Enter your mobile number'}" onFocus="if (this.value == 'Enter your mobile number') {this.value=''}" maxlength="10" />
			<input  type="button" value="Submit" class="btn" onclick="validatefrmCall();"/>
			</form><div id="divmsisdn" class="valfrm"></div></div>
			
		
            </div>
</div>
<img src="images/socialpic.png" alt="" border="0" class="tl1" style="height:40px"/> <!--<img src="images/top-div.gif" alt="" border="0" class="tldiv" /><a href="javascript:;" class="callbut"><img src="images/top-call.gif" alt="" border="0" class="tl2" /></a><a href="" target="_blank" ><img src="images/top-div.gif" alt="" border="0" class="tldiv" /><img src="images/login.gif" alt="" border="0" class="tl3" /></a>-->

</div>

	<?php include('mainmenu.php'); ?>
<div class="clear"></div>


<?php include('menu.php'); ?>
	
<div class="clear"></div>


<div class="bannerimage">

<ul id="slider1" style="background:#fcf6b8;">
        
        		<li>
                    <div class="contentSection">
                    	<h1>Kesar Wala</h1>
                        <p style="text-align:justify;margin-left:30px;margin-right:30px;">The company was established in the year 2012 in Kashipur (Uttarakand), near Jim Corbett National park with the focus to provide homemade Indian Ready-To -Eat items across the world.<br><br>
						The company has paved a way to the heart of the clients by offering high quality Food Products at

the most competitive prices. However, the most important part is quality, owing to the priority to

serve flawless quality products to the clients, various stringent quality tests are preformed from the

very initial stage of procurement of the Finished Goods (Frozen Ready to Eat) to the final dispatch

in the market.<br><br>
Our high end production team looks after for the buyer specific taste by continuously being in touch

with them.
</p>
                        <a href="residential/ambrosia/index.html"></a>
                    </div>
                	<div class="imageSection"><img src="images/homebanner1.jpg" alt=""></div>
				</li>
     		</ul>

</div>
<div class="clear"></div>




<!--<div class="linkboxes" style="background:#6e617a; width:33.4%;">
	<div class="imagebox"><img src="images/prop-th.jpg" alt="" border="0" /></div>
    <a href="residential-upcoming-projects.asp"><div class="imageboxcap" style="background:#6e617a;">
    	<h1 style="background:#6e617a; margin-left:-60px; margin-top:79px; width:125px;" class="single">Upcoming<br/><span>Projects</span></h1>
        <img src="images/homelinkarrow.png" alt="" border="0" style="margin-top:80px; margin-left:-50px; display:none;" class="imgarrow" />
    </div></a>
</div>

<div class="clear"></div>-->


<div class="clear"></div>



<div class="clear"></div>
</div>
</div>
</div>


</body>

</html>
