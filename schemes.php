
<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<title>Schemes</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

.container{
    padding:0%;
}
.container .img{
    text-align:center;
	margin-top:-5in;
}
.container .details{
    border-left:3px solid #ffffff;
	margin-top:-5in;
}
.container .details p{
    font-size:15px;
    font-weight:bold;
}

html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}

.style87 {
	color: #ffffff;
}
h2
	{margin-top:0in;
	margin-right:0in;
	margin-bottom:0in;
	margin-left:225.0pt;
	margin-bottom:.0001pt;
	text-align:center;
	text-indent:-225.0pt;
	page-break-after:avoid;
	font-size:12.0pt;
	font-family:"Calisto MT";
	text-decoration:underline;
	text-underline:single}
h1
	{margin-top:0in;
	margin-right:0in;
	margin-bottom:0in;
	margin-left:225.0pt;
	margin-bottom:.0001pt;
	text-indent:-225.0pt;
	page-break-after:avoid;
	font-size:12.0pt;
	font-family:"Calisto MT";
	}
   
            table,tr,th,td
            {
                border: 1px solid black;
            }
        
	/* ================================= */
/* ======== CCPD STYLESHEET ======== */
/* ================================= */
body {font-family:verdana; font-weight:normal; margin:0; xtext-align:center;}
ul {margin:5; padding:0;}
ol {margin:5; padding:0;}
.body_cls_reg {font-size:12px;}
.body_cls_inc1 {font-size:13px;}
.body_cls_inc2 {font-size:14px;}
.body_cls_dec1 {font-size:11px;}
.body_cls_dec2 {font-size:10px;}
.body_cls_largeprint {font-size:200%}
#off_left {display:none;}

a {text-decoration:none; cursor:pointer;}
a:hover {text-decoration:underline;}

.ccpd_bg {background-image:url(../images/ccpd_sprite.gif);}
.ccpd_tab_bg {background-image:url(../images/ccpd_tab_sprite.png);}

.cont1, .chap_no_list, .chap_no_list_ss, .srch {width:678px;}
.ua_ie .chap_no_list_ss {width:600px;}
.ua_ie .bread_crumbs {xwidth:729px;}
.ua_ie .cont1, .ua_ie .cont2 {xwidth:679px;}

.separator {float:left; padding: 0 0 0 10px; height:14px;}
.scr_acc {float:left; padding: 0 0 0 10px; height:14px; width:14px;}
.txt_dec, .txt_reg, .txt_inc {margin-left:6px; float:left;}
#dec img {margin-left:6px;}
.color_cont1 {margin-left:6px; float:left; background-position:0px -1704px; height:18px; width:22px;}
.color_cont2 {margin-left:6px; float:left; background-position:0px -1772px; height:18px; width:22px;}
.color_cont3 {margin-left:6px; float:left; background-position:0px -1840px; height:18px; width:22px;}
.color_cont4 {margin:0 10px 0 6px; float:left; background-position:0px -1908px; height:18px; width:22px;}

.ccpd_logo {float:left; height:71px; width:42px;}
.disab {border:0px solid red; margin:27px 30px 0 0px; float:right; vertical-align:bottom;}
.sel_menu {width:140px; height:22px; background-repeat:repeat-x; border-right:1px solid #000; float:left; padding-top:8px; font-family:Tahoma; font-weight:bold; font-size:1em;}
.ua_ie .sel_menu {width:135px; height:22px;}
.menu {border-right:1px solid #000; float:left; width:137px; height:22px; padding:8px 0 0 0; font-family:Tahoma; font-size:1em; font-weight:bold;}
.ua_ie .menu {width:138px; height:22px;}
.comp_img {float:left; background-position:0px -1976px; height:15px; width:15px; margin:4px 6px 0 0;}
.implink_img {float:left; background-position:0px -2041px; height:15px; width:15px; margin:4px 6px 0 0;}
.relweb_img {float:left; background-position:0px -2106px; height:15px; width:15px; margin:4px 6px 0 0;}
.indgov_img {float:left; margin:20px 0 0 25px;}
.ua_ie .indgov_img {margin-left:15px;}
.yahoo_img {margin:10px 0 0 400px; background-position:0px -642px; height:20px; width:181px;}
#outer_div {width:971px; text-align:left; margin-left: auto; margin-right: auto;}

/* css for top strip */
.top_strip {float:right; text-align:right; padding:4px 0 4px 0;}
.top_strip ul {float:left; margin:-1px 0px -1px -1px; padding:0;}
.ua_ie .top_strip ul {margin-top:0px;}
.top_strip li {float:left; display: inline;}
.ua_ie .top_strip li {height:20px; padding-top:1px;}
.mar {margin-right:10px;}
.topleft_img {float:left; width:11px; height:26px;}
.topright_img {float:left; width:11px; height:26px;}
.top_box {float:left; padding:5px 0 4px 0;}
.ua_ie .top_box {padding-top:2px;}
.ua_ie .top_box .acc_ft li {margin-top:-1px;}
.flt_lft {float:left;width:520px;}
.flt_rt {float:right;width:520px;}

/* css for the logo part */
.logo_header {float:left; padding: 5px 0 0 10px; width:100%;}
.head_txt {border:0px solid; padding:5px 0 0 18px; float:left;}
h1 {border:0px solid red; margin:20px 0 0 0; font-family:Tahoma; font-weight:bold; font-size:24px;} 
.head {border:0px solid red; margin:20px 0 0 0; font-family:Tahoma; font-weight:bold; font-size:24px;} 
.sub_head {border:0px solid red; margin:0; font-family:Verdana; font-size:14px; font-weight:bold;}

/* menu bar */
.menu_bar {border:0px solid; float:left; text-align:center; height:30px; margin:10px 0 0px 0;}
/*.ua_ie .menu_bar {height:22px;}*/
.menu_bar ul {margin:0; padding:0;}
.menu_bar li {display:inline;}


.banner {border:0px solid red; float:left; margin-top:1px;}
.main_cont {border:0px solid #C7C9CB; }
.first_col {float:left; width:366px;}
/*.ua_ie .first_col {width:304px;}*/
.second_col {float:left; width:366px; border-left:1px solid #C7C9CB; border-right:2px solid #C7C9CB;}
/*.ua_ie .second_col {width:304px;}*/
.third_col {border:0px solid red; float:left; width:233px;}
/*.ua_ie .third_col {width:200px;}*/
.ua_ie .third_col {width:234px;}

.cont_box {float:left; padding:20px 25px 20px 25px;}
.ua_ie .cont_box {xwidth:100%;}
.cont_head h2 {border:0px solid red; margin:0; font-size:1.4em; font-weight:bold;}
.cont_txt {margin:14px 0 18px 0; line-height:17px;}
.cont_box ul {border:0px solid red; padding-left:15px; margin:0px; color:#20558F;}
.cont_link {font-weight:bold; font-family:verdana;}

.upd .updates {margin-bottom:0px;}
.ua_ie .about_us {padding-bottom:10px;}
.about_us ul {margin:0px; padding:0;}
.about_us li {float:left; display: inline;}
.imp_noti {border-top:1px solid #C7C9CB;}
.imp_noti ul{list-style-type: none; margin: 0;	padding: 0;}
.imp_noti li {background-repeat:no-repeat; padding:0 0 0 11px;}

.upd {border-top:1px solid #C7C9CB;}
.upd ul {list-style-type:none; padding:0;}
.upd li {padding-bottom:15px;}
.upd .last_li {padding:0;}

.cont_box_2 {float:left; padding:17px 25px 20px 31px;}
.ua_ie .cont_box_2 {xwidth:100%;}

.cont_box_2 ul {border:0px solid red; padding-left:15px; margin:0px;}
.cont_box_2 li {border:0px solid red; color:#000;}
.compl {font-family:verdana; width:310px;}
.compl a {font-weight:bold;} 
.compl .cont_txt {margin:14px 0 0px 0;}
.compl ul, .implink ul, .relweb ul{list-style-type:none; margin:0; padding:0;}
.compl li, .implink li, .relweb li, .updates li {background-repeat:no-repeat; padding:0 0 0 11px;}

/*.implink li {margin-bottom:5px;}*/
.implink .cont_txt, .relweb .cont_txt {margin-bottom:0px;}
.box_separator {float:left; border-top:1px solid #C7C9CB; width:88%; margin-left:15px;}
.ua_ie .box_separator {margin-left:7px;}


.ua_ie .footer {float:left;width:970px;}
.foot_links {float:left; width:100%; padding:20px 0 15px 0; color:#FFF; text-align:center; font-family:verdana; font-size:1.0em;}
.foot_links ul {border:0px solid red; margin:0px; padding:0; text-align:center; border:0px solid red;}
.foot_links li {display:inline; padding-left:8px;}
.foot_links .ele {margin-right:5px; border-left:1px solid white;}
.foot1 {border:0px solid #fff; text-align:center;}
.foot1 .fir {margin-top:3px; border:0px solid; margin-right:5px;}
.foot2 {width:100%; font-size:11px; margin:10px 0 10px 0;}
.foot2 .copyrt {width:100%;}
.foot_yahoo {font-size:11px; float:left; width:100%; background-position:0px -240px; color:#FFF; text-align:center;}
.foot_yahoo1 {float:left; text-align:center; margin-left:28em;}
.ua_ie .foot_yahoo1 {margin-left:15em;}
.ua_ie_other .foot_yahoo1{margin-left:28em;}
.foot_yahoo_txt {width:120px; float:left; margin-top:18px;}
.foot_yahoo_logo {float:left;}
.foot_separator {float:left; margin:2px 0px 0 0px; background-position:0px -4133px; height:14px; padding-left:10px;}
.ua_ie .foot_separator {margin:2px 5px 0 5px;}
.ua_ie .yahoo_img {margin-left:0px;}
.copy {background-position:4px -4198px; padding:0 0 0 16px; height:10px;}
.footer #last_updated{color:#666666;text-align:center;font-size:11px;}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}

.fa-linkedin {
  background: #007bb5;
  color: white;
}

.fa-youtube {
  background: #bb0000;
  color: white;
}

.fa-instagram {
  background: #125688;
  color: white;
}
.menu_hid {visibility:hidden; display:none;}
.menu_vis {visibility:visible; display:block;}
.menu_hid li, .menu_vis li {list-style-type:none; margin:0px 0 0px 0px; padding:6px 0 6px 35px;}
.ua_ie .menu_vis ul {margin-top:-17px;}
.mn_arrow {background-position:0px -4558px; width:6px; height:11px; float:right; margin:-10px 0px 0px 0px; cursor:pointer;}
.ua_ie .mn_arrow {margin-right:5px;}
.mn_arrow_sel {background-position:0px -4512px; width:11px; height:6px; float:right; margin:-10px 0px 0px 0px; cursor:pointer;}


.cont1 h1, .cont2 h2 {font-size:1.2em; font-family: verdana; margin:0;}
.cont1 h2 {font-size:1.16em; font-family: verdana; margin:0;}
.cont1 h3 {font-size:1.1em; font-family: verdana; margin:0;}
.cont1 h4 {font-size:1.0em; font-family: verdana; margin:0;}
.cont1 .highlight {color:#20558F; font-weight:bold;}
.cont1 ul {padding-left:0px;}
.cont1 ul li {padding-bottom:5px;list-style:none;margin-right:-100px;}
.cont1 li {padding-left:20px;margin-right:-200px;}
.cont1 ol li {padding-bottom:5px;list-style:none;}
.cont1 .anc {font-weight:bold; background-repeat:no-repeat; padding:0 0 0 11px;}
.cont1 .no_bullet {list-style-type:none;}
.cont1 .alpha {list-style-type:lower-alpha;}
.cont1 .roman {list-style-type:lower-roman;}
.cont1 .number {list-style-type:decimal;}
.cont1 .move_right {margin-left:50px;}
.cont1 table {width:100%; text-align:left; border-spacing:1px; font-size:0.9em; margin-top:6px; cellspacing:1;}
.cont1 th {padding:0 1px 0 5px; height:30px;}
.cont1 td {vertical-align:top; padding-left:10px;}
.cont1 .shr_tbl {width:100%; text-align:left; border-spacing:1px; font-size:0.8em; margin-top:6px;}
.cont1 .shr_tbl th {padding:0 2px 0 3px; height:30px;}
.cont1 .shr_tbl td {vertical-align:top; padding:0 2px 0 3px;}
.cont1 .disp_right {float:right;}
.cont1 .disp_center {text-align:center; width:100%;}

.banner_text {
    margin-left: 420px;
    height: 150px;
    position: relative;
	margin-top:-45px;
	font-size: 32px;
    font-family: Impact, Arial Black, Helvetica, sans-serif;
    color: #ef8111;
    padding: 16px 25px 0px 25px;
    margin: 0;
    line-height: 30px;
	margin-bottom:-10px;
    
}
 .author {
    font-size: 12px;
    font-family: Verdana, Arial, Helvetica, sans-serif;
    color: #ef8111;
    padding: 0 0 0 16px;
}




   body {font-family:verdana; font-weight:normal; margin:0; xtext-align:center;}
ul {margin:0; padding:0;}
ol {margin:0; padding:0;}
.body_cls_reg {font-size:12px;}
.body_cls_inc1 {font-size:13px;}
.body_cls_inc2 {font-size:14px;}
.body_cls_dec1 {font-size:11px;}
.body_cls_dec2 {font-size:10px;}
.body_cls_largeprint {font-size:200%}
#off_left {display:none;}

a {text-decoration:none; cursor:pointer;}
a:hover {text-decoration:underline;}
.banner2 {
    <img
	src="pdf_icon.gif">
}


#banner_container {
    position: relative;
    height: 159px;
    clear: both;
    padding-top: 1px;
	<img
	src="pdf_icon.gif" width="128" height="128">
}
</style>
<body>

<!--Navgiation Bar -->
<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-black w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="dashboard.php" class="w3-bar-item w3-button w3-padding-large "><i class="fa fa-home w3-margin-right"></i>Home</a>
  <a href="schemes.php" class="w3-bar-item w3-button w3-padding-large w3-theme-d4" title="Schemes"><i class="fa fa-eye fa-fw"></i>  Schemes</a>
  <a href="fileupload.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-black" title="Medical Tracking"><i class="fa fa-bank fa-fw"></i>  Medical Tracking</a>
  <a href="dochelp.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-black" title="Doctors Help"><i class="fa fa-bullseye fa-fw"></i>  Doctors Help</a>
  <a href="pharmacy.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-black" title="Pharma"><i class="fa fa-diamond fa-fw"></i>  Pharma</a>
  <a href="acts.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-black" title="Acts"><i class="fa fa-bank fa-fw"></i>Acts</a>
  <a href="https://en-gb.facebook.com/" class="fa fa-facebook"></a>
<a href="https://twitter.com/?lang=en-in" class="fa fa-twitter"></a>
<a href="https://www.google.co.in/" class="fa fa-google"></a>
<a href="https://www.linkedin.com/uas/login" class="fa fa-linkedin"></a>
<a href="https://www.youtube.com/" class="fa fa-youtube"></a>
<a href="https://www.instagram.com/" class="fa fa-instagram"></a>
   <a href="login.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small w3-right">Logout</a>
  <a href="about.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small w3-right">About Us</a>
    
 </div>
</div>
<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
<!-- !PAGE CONTENT! -->
<div class="w3-content" style="max-width:2000px;margin-top:46px">
<!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <div id="banner_container">
    <div  class="banner2" style="background: #000">
  	<div class="banner_text">
    	<p style="padding-bottom:-20px;">     _SILENTHORN_<br><br>Together we can do much...!</p></div>
	</div>
</div>
  </header>
<br>
<div class="w3-row">
    <!-- Left Column -->
    <div class="w3-col m3">
      <!-- Profile -->
      <div class="w3-card w3-round w3-white">
      <div class="w3-container">
         <h4 class="w3-center"><?php echo  "Welcome...! ".$_SESSION['username'];?></h4>
         <p class="w3-center"><img src="avatar3.png" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
         <hr>
         <p><i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme"></i> Teacher, UI</p>
         <p><i class="fa fa-home fa-fw w3-margin-right w3-text-theme"></i> India</p>
         <p><i class="fa fa-birthday-cake fa-fw w3-margin-right w3-text-theme"></i> April 1, 1988</p>
        </div>
      </div>
      <br>
      
      <!-- Accordion -->
      <div class="w3-card w3-round">
        <div class="w3-white">
          <button onclick="myFunction('Demo1')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-circle-o-notch fa-fw w3-margin-right"></i> My Groups</button>
          <div id="Demo1" class="w3-hide w3-container">
            <p>Some text..</p>
          </div>
          <button onclick="myFunction('Demo2')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-calendar-check-o fa-fw w3-margin-right"></i> My Events</button>
          <div id="Demo2" class="w3-hide w3-container">
            <p>Some other text..</p>
          </div>
          <button onclick="myFunction('Demo3')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-users fa-fw w3-margin-right"></i> My Photos</button>
          <div id="Demo3" class="w3-hide w3-container">
         <div class="w3-row-padding">
         <br>
           <div class="w3-half">
             <img src="/w3images/lights.jpg" style="width:100%" class="w3-margin-bottom">
           </div>
           <div class="w3-half">
             <img src="/w3images/nature.jpg" style="width:100%" class="w3-margin-bottom">
           </div>
           <div class="w3-half">
             <img src="/w3images/mountains.jpg" style="width:100%" class="w3-margin-bottom">
           </div>
           <div class="w3-half">
             <img src="/w3images/forest.jpg" style="width:100%" class="w3-margin-bottom">
           </div>
           <div class="w3-half">
             <img src="/w3images/nature.jpg" style="width:100%" class="w3-margin-bottom">
           </div>
           <div class="w3-half">
             <img src="/w3images/snow.jpg" style="width:100%" class="w3-margin-bottom">
           </div>
         </div>
          </div>
 
        </div>      
      </div>
      <br>
      
      
      
      
    
    <!-- End Left Column -->
    </div>
    
    <!-- Middle Column -->
    <div class="w3-col m8">
        
	<!-- Header -->
  <header class="w3-container" style="padding-top:22px">
  <div align="center">
    <h6><font color="#000080" face="Times New Roman" size="4"><strong><center>
DIFFERENTLY ABLED SCHEME</center></strong> </font></h6></div>
  </header>
  <br>
       
  
<table class="w3-table w3-striped w3-hoverable w3-white">
  <tbody>
  <tr>
    <td width="96%" style="border-style: none; border-width: medium">
    <b>
    <div align="center">
      <center>
    <table class="paleBlueRows" height="800" cellspacing="0" cellpadding="3" width="1000" border="1" style="border-collapse: collapse" bordercolor="#000080" bordercolorlight="#000080" bordercolordark="#000080">
      <tbody>
	  <tr>
        <th valign="top" align="left" width="29" height="28">
        <p align="left"><font face="Times New Roman" color="#000080" size="4">S.No</font></p></th>
        <th valign="top" align="justify" width="738" height="28">
        <font face="Times New Roman">
        <a href="#1. GRANT OF INCENTIVE FOR MARRIAGE BETWEEN DIFFERENTLY ABLED PERSONS AND NORMAL PERSONS" style="text-decoration: none">
        <center><font color="#000080" size="4">LIST OF SCHEMES</font> </center></a></font></th>
      </tr>
	  <tr>
        <td valign="top" align="left" width="29" height="28">
        <p align="left"><font face="Times New Roman" color="#000080" size="4">1.</font></p></td>
        <td valign="top" align="justify" width="738" height="28">
        <font face="Times New Roman">
        <a href="#1. GRANT OF INCENTIVE FOR MARRIAGE BETWEEN DIFFERENTLY ABLED PERSONS AND NORMAL PERSONS" style="text-decoration: none">
        <font color="#000080" size="4">GRANT OF INCENTIVE FOR MARRIAGE BETWEEN DIFFERENTLY ABLED PERSON AND 
        NORMAL PERSONS </font> </a></font></td>
      </tr>
      <tr>
        <td valign="top" align="left" width="29" height="28">
        <font face="Times New Roman" color="#000080" size="4">2.</font></td>
        <td valign="top" align="justify" width="738" height="28">
        <font face="Times New Roman">
        <a href="#2. GRANT OF INCENTIVE FOR MARRIAGE BETWEEN DIFFERENTLY ABLED PERSON" style="text-decoration: none">
        <font color="#000080" size="4">GRANT OF INCENTIVE FOR MARRIAGE BETWEEN DIFFERENTLY ABLED PERSON
	</font> </a></font></td>
      </tr>
      <tr>
        <td valign="top" align="left" width="29" height="37">
        <p align="left"><font face="Times New Roman" color="#000080" size="4">3.</font></p></td>
        <td valign="top" align="justify" width="738" height="37">
        <font face="Times New Roman">
        <a href="#3. GRANT OF FUEL SUBSIDY TO DIFFERENTLY ABLED PERSONS WHO ARE OWNING MOTORISED VEHICLES" style="text-decoration: none">
	<font color="#000080" size="4">GRANT OF FUEL SUBSIDY TO DIFFERENTLY ABLED 
        PERSONS WHO ARE OWNING MOTORISED 
        VEHICLES</font></a></font></td>
      </tr>
      <tr>
        <td valign="top" align="left" width="29" height="29">
        <p align="left"><font face="Times New Roman" color="#000080" size="4">4.</font></p></td>
        <td valign="top" align="justify" width="738" height="29">
        <font face="Times New Roman">
        <a href="#4. GRANT OF FINANCIAL ASSISTANCE TO DIFFERENTLY ABLED PERSON" style="text-decoration: none">
        <font color="#000080" size="4">GRANT OF FINANCIAL ASSISTANCE TO DIFFERENTLY ABLED PERSON</font></a></font></td>
      </tr>
      <tr>
        <td valign="top" align="left" width="29" height="30">
        <p align="left"><font face="Times New Roman" color="#000080" size="4">5.</font></p></td>
        <td valign="top" align="justify" width="738" height="30">
        <font face="Times New Roman">
        <a href="#5. AWARD OF SCHOLARSHIP TO DIFFERENTLY ABLED STUDENTS" style="text-decoration: none">
	<font color="#000080" size="4">AWARD OF SCHOLARSHIP TO DIFFERENTLY ABLED 
        PERSON STUDENTS</font></a></font></td>
      </tr>
      <tr>
        <td valign="top" align="left" width="29" height="30">
        <p align="left"><font face="Times New Roman" color="#000080" size="4">6.</font></p></td>
        <td valign="top" align="justify" width="738" height="30">
        <font face="Times New Roman">
        <a href="#6. INCENTIVE FOR EYE DONARS" style="text-decoration: none">
	<font color="#000080" size="4">INCENTIVE FOR EYE DONORS </font> </a>
        </font></td>
      </tr>
      <tr>
        <td valign="top" align="left" height="33" width="29">
        <font face="Times New Roman" color="#000080" size="4">7.</font></td>
        <td valign="top" align="justify" height="33" width="736">
        <font face="Times New Roman" color="#0000ff">
        <a href="#7. REIMBURSEMENT OF MAINTENANCE COST OF TRICYCLES" style="text-decoration: none">
	<font color="#000080" size="4">REIMBURSEMENT OF MAINTENANCE COST OF TRICYCLES</font></a></font></td>
      </tr>
      <tr>
        <td valign="top" align="left" height="26" width="29">
        <font face="Times New Roman" color="#000080" size="4">8.</font></td>
        <td valign="top" align="justify" height="26" width="736">
        <font face="Times New Roman" color="#0000ff">
        <a href="#8. SUPPLY OF SAREES AND DHOTIES TO DIFFERENTLY ABLED PERSONS" style="text-decoration: none">
	<font color="#000080" size="4">SUPPLY 
        OF SAREES AND DHOTIES TO DIFFERENTLY ABLED PERSONS</font></a></font></td>
      </tr>
      <tr>
        <td valign="top" align="left" height="28" width="29">
        <font face="Times New Roman" color="#000080" size="4">9.</font></td>
        <td valign="top" align="justify" height="28" width="736">
        <font face="Times New Roman" color="#0000ff">
        <a href="#9. STATE AWARD FOR THE WELFARE OF THE HANDICAPPED" style="text-decoration: none">
	<font color="#000080" size="4">STATE AWARD FOR THE WELFARE OF THE HANDICAPPED</font></a></font></td>
      </tr>
      <tr>
        <td valign="top" align="left" height="28" width="29">
        <font face="Times New Roman" color="#000080" size="4">10.</font></td>
        <td valign="top" align="justify" height="28" width="736">
        <font face="Times New Roman" color="#0000ff">
        <a href="#10. SUPPLY OF PROSTHETIC APPLIANCES TO DIFFERENTLY ABLED PERSONS" style="text-decoration: none">
	<font color="#000080" size="4">SUPPLY OF PROSTHETIC APPLIANCES TO DIFFERENTLY 
        ABLED PERSONS</font></a></font></td>
      </tr>
      <tr>
        <td valign="top" align="left" height="28" width="29">
        <font face="Times New Roman" color="#000080" size="4">11.</font></td>
        <td valign="top" align="justify" height="28" width="736">
        <font face="Times New Roman" color="#0000ff">
        <a href="#11. ISSUE OF FREE BUS PASS TO DIFFERENTLY ABLED PERSON" style="text-decoration: none">
	<font color="#000080" size="4">ISSUE OF FREE BUS PASS 
        TO DIFFERENTLY ABLED PERSON </font> </a></font></td>
      </tr>
      <tr>
        <td valign="top" align="left" height="28" width="29">
        <font face="Times New Roman" color="#000080" size="4">12.</font></td>
        <td valign="top" align="justify" height="28" width="736">
        <font face="Times New Roman" color="#0000ff">
        <a href="#12. ANNUAL TOUR FOR DIFFERENTLY ABLED PERSONS" style="text-decoration: none">
	<font color="#000080" size="4">ANNUAL TOUR FOR DIFFERENTLY ABLED PERSONS</font></a></font></td>
      </tr>
      <tr>
        <td valign="top" align="left" height="28" width="29">
        <font face="Times New Roman" color="#000080" size="4">13.</font></td>
        <td valign="top" align="justify" height="28" width="736">
        <font face="Times New Roman" color="#0000ff">
        <a href="#13. INTERNATIONAL DAY FOR THE DIFFERENTLY ABLED PERSON" style="text-decoration: none">
	<font color="#000080" size="4">INTERNATIONAL DAY FOR THE DIFFERENTLY 
        ABLED PERSON</font></a></font></td>
      </tr>
      <tr>
        <td valign="top" align="left" height="28" width="29">
        <font face="Times New Roman" color="#000080" size="4">14.</font></td>
        <td valign="top" align="justify" height="28" width="736">
        <font face="Times New Roman" color="#0000ff">
        <a href="#14. GROUP INSURANCE FOR DIFFERENTLY ABLED PERSON GOVERNMENT EMPLOYEES." style="text-decoration: none">
	<font color="#000080" size="4">GROUP INSURANCE FOR DIFFERENTLY ABLED 
        PERSON GOVERNMENT EMPLOYEES</font></a></font></td>
      </tr>
      <tr>
        <td valign="top" align="left" height="28" width="29">
        <font face="Times New Roman" color="#000080" size="4">15.</font></td>
        <td valign="top" align="justify" height="28" width="736">
        <font face="Times New Roman" color="#0000ff">
        <a href="#15. INSURANCE SCHEME FOR PERSON WITH DISABILITIES OTHER THAN THE EMPLOYEES OF GOVT. OF PONDICHERRY 2004" style="text-decoration: none">
        <font color="#000080" size="4">INSURANCE SCHEME FOR PERSON WITH DISABILITIES OTHER THAN THE EMPLOYEES 
        OF GOVT. OF PONDICHERRY 2004</font></a></font></td>
      </tr>
      <tr>
        <td valign="top" align="left" height="28" width="29">
        <font face="Times New Roman" color="#000080" size="4">16.</font></td>
        <td valign="top" align="justify" height="28" width="736">
        <font face="Times New Roman" color="#0000ff">
        <a href="#16. THE PERUNTHALAIVAR KARMAVEERAR KAMARAJ SCHEME FOR FINANCIAL ASSISTANCE TOWARDS FUNERAL EXPENSES OF THE DIFFERENTLY ABLED PERSONS" style="text-decoration: none">
	<font color="#000080" size="4">THE PERUNTHALAIVAR KARMA VEERAR KAMARAJ SCHEME FOR FINANCIAL 
        ASSISTANCE TOWARDS FUNERAL EXPENSES OF THE DIFFERENTLY ABLED PERSONS
	</font> </a></font></td>
      </tr>
      <tr>
        <td valign="top" align="left" height="28" width="29">
        <font face="Times New Roman" color="#000080" size="4">17.</font></td>
        <td valign="top" align="justify" height="28" width="736">
        <font face="Times New Roman" color="#0000ff">
        <a href="#17. SUPPLY OF INVALID CARRIAGES (MOTORIZED TRI-CYCLES) TO THE PERSONS WITH DISABILITIES" style="text-decoration: none">
	<font color="#000080" size="4">SUPPLY OF INVALID CARRIAGES (MORIZED 
        TRI-CYCLES) TO THE PERSONS WITH DISABILITIES </font> </a></font></td>
      </tr>
      <tr>
        <td valign="top" align="left" height="29" width="29">
        <font face="Times New Roman" color="#000080" size="4">18.</font></td>
        <td valign="top" align="justify" height="29" width="736">
        <font face="Times New Roman" color="#0000ff">
        <a href="#18. SUPPLY OF MUSICAL / SPORTS ITEMS  TO PH WELFARE ASSOCIATIONS" style="text-decoration: none">
        <font color="#000080" size="4">SUPPLY OF MUSICAL / SPORTS ITEMS TO PH WELFARE ASSOCIATIONS 
	</font> </a></font></td>
      </tr>
      <tr>
        <td valign="top" align="left" height="29" width="29">
        <font face="Times New Roman" color="#000080" size="4">19.</font></td>
        <td valign="top" align="justify" height="29" width="736">
        <font face="Times New Roman" color="#0000ff">
        <a href="#19. ISSUE OF IDENTITY CARDS TO DIFFERENTLY ABLED PERSONS" style="text-decoration: none">
        <font color="#000080" size="4">ISSUE OF IDENTITY CARDS TO DIFFERENTLY ABLED PERSONS
	</font> </a></font></td>
      </tr>
      <tr>
        <td valign="top" align="left" height="29" width="29">
        <font face="Times New Roman" color="#000080" size="4">20.</font></td>
        <td valign="top" align="justify" height="29" width="736">
        <font face="Times New Roman" color="#0000ff">
        <a href="#20. GRANT OF TRANSPORT ALLOWANCE TO DISABLED PERSONS" style="text-decoration: none">
	<font color="#000080" size="4">GRANT OF 
        TRANSPORT ALLOWANCE TO DIFFERENTLY ABLED PERSONS </font> </a></font></td>
      </tr>
      <tr>
        <td valign="top" align="left" height="29" width="29">
        <font face="Times New Roman" color="#000080" size="4">21.</font></td>
        <td valign="top" align="justify" height="29" width="736">
        <font face="Times New Roman">
        <a href="#21. SUPPLY OF RADIO TO THE BLIND PERSONS" style="text-decoration: none">
	<font color="#000080" size="4">SUPPLY OF RADIO TO 
        THE BLIND PERSONS</font></a></font></td>
      </tr>
    </tbody></table>
      </center>
    </div>
    </b>
    </td>
  </tr>
</tbody></table>
<p>&nbsp;</p>
<div align="center">
  <center>

<table class="paleBlueRows" height="5972" cellspacing="0" width="788" bgcolor="#ffffff" border="0" style="border-collapse: collapse" bordercolor="#111111" cellpadding="0">
  <tbody><tr>
    <td align="middle" width="788" height="1" >
       <table class="paleBlueRows" bordercolor="#000080" height="390" cellspacing="1" cellpadding="2" width="625" border="1">
        <tbody><tr>
              <td valign="top" width="101" bgcolor="#ffffff" height="48" >
              <p align="left">
	<font face="Times New Roman" color="#000080" size="4"><b>
              Description of the Scheme</b></font></p></td>
              <td align="left" width="530" height="48" valign="top" >
              <p align="justify">
              <font size="4" face="Times New Roman" color="#800000">&nbsp;</font><font face="Times New Roman" color="#800000"><a name="1. GRANT OF INCENTIVE FOR MARRIAGE BETWEEN DIFFERENTLY ABLED PERSONS AND NORMAL PERSONS"><font size="4">1. GRANT OF INCENTIVE FOR MARRIAGE BETWEEN DIFFERENTLY ABLED 
              PERSON AND
              <st1:place>NORMAL</st1:place> PERSONS&nbsp;</font></a></font></p></td>
            </tr>
        <tr>
              <td valign="top" width="101" bgcolor="#ffffff" height="20"  align="center">
              <p align="justify">
	<font face="Times New Roman" color="#000080" size="4"><b>
              Benefits</b></font></p></td>
              <td valign="top" width="530" height="20" >
              <font face="Times New Roman" size="4" color="#000080">An Incentive 
              of Rs. 25,000/- (Rs.5,000 in cash and Rs.20,000/- in the form of NSC)</font></td>
            </tr>
        <tr>
              <td valign="top" width="101" bgcolor="#ffffff" height="183"  align="center">
              <p align="justify">
	<font face="Times New Roman" color="#000080" size="4"><b>
              Eligibility</b></font></p></td>
              <td width="530" height="183" ><font color="#000080"><font size="4">
              <span style="font-family: Times New Roman">&nbsp;&nbsp;&nbsp;&nbsp; </span>
              <font face="Times New Roman">a) Annual Income : Not to exceed&nbsp;&nbsp; 
              Rs.75,000/- P.A</font></font><font face="Times New Roman" size="4">
              </font> </font>
              <p class="MsoBodyText" style="text-indent: -2.75in; text-align: justify; margin-left: 3in">
              <font face="Times New Roman" size="4" color="#000080">b) Age : 
              Bride : Above 18 years</font></p>
              <p class="MsoBodyText" style="text-indent: -2.75in; text-align: justify; margin-left: 3in">
              <font face="Times New Roman" size="4" color="#000080">c) 
              Bridegroom : Above 21 years</font></p>
              <p class="MsoBodyText" style="text-indent: -2.75in; text-align: justify; margin-left: 3in">
              <font face="Times New Roman" size="4" color="#000080">d) 
              Disability : 40% and above</font></p>
              <p class="MsoBodyText" style="text-indent: -2.75in; text-align: justify; margin-left: 3in">
              <font face="Times New Roman" size="4" color="#000080">e) Other 
              conditions</font></p>
              <blockquote>
                <p class="MsoBodyText" style="text-indent: -2.75in; text-align: justify; margin-left: 3in">
                <font face="Times New Roman" size="4" color="#000080">i)<span style="font-style: normal; font-variant: normal; font-weight: normal; ">&nbsp;&nbsp;&nbsp;&nbsp;
                </span>Should be the first marriage</font></p>
                <p class="MsoBodyText" style="text-indent: -2.75in; text-align: justify; margin-left: 3in">
                <font face="Times New Roman" size="4" color="#000080">ii)<span style="font-style: normal; font-variant: normal; font-weight: normal; ">&nbsp;&nbsp;&nbsp;
                </span>Marriage should have been registered.</font></p>
                <p class="MsoBodyText" style="text-indent: -2.75in; text-align: justify; margin-left: 3in">
                <font face="Times New Roman" size="4" color="#000080">iii)<span style="font-style: normal; font-variant: normal; font-weight: normal; ">&nbsp;&nbsp;
                </span>Should 
                be applied within 120 days after marriage&nbsp; </font></p>
                <p class="MsoBodyText" style="text-indent: -2.75in; text-align: justify; margin-left: 3in">
                <font face="Times New Roman" size="4" color="#000080">iv)<span style="font-style: normal; font-variant: normal; font-weight: normal; ">&nbsp;&nbsp;
                </span>Should 
                be the resident of&nbsp;
                <st1:placename>
                <st1:place>U.T. of Puducherry</st1:place>&nbsp; </st1:placename></font></p>
              </blockquote>
              </td>
            </tr>
      </tbody></table>
    </td>
  </tr>
  <tr>
    <td align="middle" width="788" height="1" >
      <p align="right"><font face="Times New Roman" color="#8D6206"><strong>
      <a href="#1. GRANT OF INCENTIVE FOR MARRIAGE BETWEEN DIFFERENTLY ABLED PERSONS AND NORMAL PERSONS"><font color="#000080" size="4">
	</font></a>
	<font color="#000080" size="4"><a href="#1. GRANT OF INCENTIVE FOR MARRIAGE BETWEEN DIFFERENTLY ABLED PERSONS AND NORMAL PERSONS"><span style="text-decoration: none">
	<font color="#000080"></font></span></a></font>
	</strong></font></p></td>
  </tr>
  <tr>
    <td align="middle" width="788" height="1" >
	<table class="paleBlueRows" bordercolor="#000080" height="390" cellspacing="1" cellpadding="2" width="629" border="1">
        <tbody><tr>
              <td valign="top" width="98" bgcolor="#ffffff" height="48" >
              <p>
	<font face="Times New Roman" color="#000080" size="4"><b>
              Description of the Scheme</b></font></p></td>
              <td align="left" width="514" height="48" valign="top">
              <p align="justify">
              <font face="Times New Roman" color="#800000" size="4">
              <a name="2. GRANT OF INCENTIVE FOR MARRIAGE BETWEEN DIFFERENTLY ABLED PERSON">
              2. GRANT OF INCENTIVE FOR MARRIAGE BETWEEN DIFFERENTLY ABLED 
              PERSON</a></font></p></td>
            </tr>
        <tr>
              <td valign="top" width="98" bgcolor="#ffffff" height="20" >
              <p align="justify">
	<font face="Times New Roman" color="#000080" size="4"><b>
              Benefits</b></font></p></td>
              <td valign="top" width="514" height="20">
              <font face="Times New Roman" size="4" color="#000080">An 
              Incentive of Rs. 50,000/- (Rs.20,000 in cash and Rs.30,000/- in 
              the form of NSC)</font></td>
            </tr>
        <tr>
              <td valign="top" width="98" bgcolor="#ffffff" height="133" >
              <p align="justify">
	<font face="Times New Roman" color="#000080" size="4"><b>
              Eligibility</b></font></p></td>
              <td width="514" height="133"><font color="#000080"><font size="4">
              <span style="font-family: Times New Roman">&nbsp;&nbsp;&nbsp;&nbsp; </span>
              <font face="Times New Roman">a) Annual Income : Not to exceed&nbsp;&nbsp; 
              Rs.75,000/- P.A</font></font><font face="Times New Roman" size="4">
              </font> </font>
              <p class="MsoBodyText" style="text-indent: -2.75in; text-align: justify; margin-left: 3in">
              <font face="Times New Roman" size="4" color="#000080">b) Age : 
              Bride : Above 18 years</font></p>
              <p class="MsoBodyText" style="text-indent: -2.75in; text-align: justify; margin-left: 3in">
              <font face="Times New Roman" size="4" color="#000080">c) 
              Bridegroom : Above 21 years</font></p>
              <p class="MsoBodyText" style="text-indent: -2.75in; text-align: justify; margin-left: 3in">
              <font face="Times New Roman" size="4" color="#000080">d) 
              Disability : 40% and above</font></p>
              <p class="MsoBodyText" style="text-indent: -2.75in; text-align: justify; margin-left: 3in">
              <font face="Times New Roman" size="4" color="#000080">e) Other 
              conditions</font></p>
              <blockquote>
                <p class="MsoBodyText" style="text-indent: -2.75in; text-align: justify; margin-left: 3in">
                <font face="Times New Roman" size="4" color="#000080">i)<span style="font-style: normal; font-variant: normal; font-weight: normal; ">&nbsp;&nbsp;&nbsp;&nbsp;
                </span>Should 
                be the first marriage</font></p>
                <p class="MsoBodyText" style="text-indent: -2.75in; text-align: justify; margin-left: 3in">
                <font face="Times New Roman" size="4" color="#000080">ii)<span style="font-style: normal; font-variant: normal; font-weight: normal; ">&nbsp;&nbsp;&nbsp;
                </span>Marriage 
                should have been registered.</font></p>
                <p class="MsoBodyText" style="text-indent: -2.75in; text-align: justify; margin-left: 3in">
                <font face="Times New Roman" size="4" color="#000080">iii)<span style="font-style: normal; font-variant: normal; font-weight: normal; ">&nbsp;&nbsp; </span>Should 
                be applied within 120 days after marriage&nbsp; </font></p>
                <p class="MsoBodyText" style="text-indent: -2.75in; text-align: justify; margin-left: 3in">
                <font face="Times New Roman" size="4" color="#000080">iv)<span style="font-style: normal; font-variant: normal; font-weight: normal; ">&nbsp;&nbsp;
                </span>Should 
                be the resident of&nbsp;
                <st1:placename>
                <st1:place>U.T. of Puducherry</st1:place>&nbsp; </st1:placename></font></p>
              </blockquote>
              </td>
            </tr>
      </tbody></table>
    </td>
  </tr>
  <tr>
    <td align="middle" width="788" height="1" >
      <p align="right"><font face="Times New Roman" color="#8D6206"><strong>
      <a href="#Schemes"><font color="#000080" size="4">
	</font></a><font color="#000080" size="4"><a href="Diff%20abled%20scheme.htm"><span style="text-decoration: none">
	<font color="#000080"></font></span></a></font></strong></font></p></td>
  </tr>
  <tr>
    <td align="middle" width="788" height="1" >
	<table class="paleBlueRows" bordercolor="#000080" height="390" cellspacing="1" cellpadding="2" width="625" border="1">
        <tbody><tr>
              <td valign="top" width="101" bgcolor="#ffffff" height="48" >
              <p align="left">
	<font face="Times New Roman" color="#000080" size="4"><b>
              Description of the Scheme</b></font></p></td>
              <td align="left" width="525" valign="top">
              <p align="justify">
              <font face="Times New Roman" color="#800000" size="4">
              <a name="3. GRANT OF FUEL SUBSIDY TO DIFFERENTLY ABLED PERSONS WHO ARE OWNING MOTORISED VEHICLES">
              3. GRANT OF FUEL SUBSIDY TO DIIFFERENTLY ABLED PERSONS WHO ARE OWNING MOTORISED VEHICLES</a></font></p></td>
            </tr>
        <tr>
              <td valign="top" width="101" bgcolor="#ffffff" height="57" >
              <p align="justify">
	<font face="Times New Roman" color="#000080" size="4"><b>
              Benefits</b></font></p></td>
              <td valign="top" width="525">
              <font face="Times New Roman" size="4" color="#000080">50 % of 
              the cost of fuel subject to a maximum of 25 Litres</font></td>
            </tr>
        <tr>
              <td valign="top" width="101" bgcolor="#ffffff" height="1" >
              <p align="justify">
	<font face="Times New Roman" color="#000080" size="4"><b>
              Eligibility</b></font></p></td>
              <td width="525">
              <font face="Times New Roman" size="4" color="#000080">&nbsp;&nbsp;&nbsp;&nbsp; 
              a) Annual Income : Not to exceed&nbsp;&nbsp; Rs.75,000/- </font>
              <p class="MsoBodyText" style="text-indent: -2.75in; text-align: justify; margin-left: 3in">
              <font face="Times New Roman" size="4" color="#000080">b) Age : 
              No restriction</font></p>
              <p class="MsoBodyText" style="text-indent: -2.75in; text-align: justify; margin-left: 3in">
              <font face="Times New Roman" size="4" color="#000080">c) 
              Disability : 40% and above</font></p>
              <p class="MsoBodyText" style="text-indent: -2.75in; text-align: justify; margin-left: 3in">
              <font face="Times New Roman" size="4" color="#000080">d) No 
              Educational qualification</font></p>
              <p class="MsoBodyText" style="text-indent: -2.75in; text-align: justify; margin-left: 3in">
              <font face="Times New Roman" size="4" color="#000080">e) Residence 
              : Not less than 5 years.</font></p>
              <p class="MsoBodyText" style="text-indent: -2.75in; text-align: justify; margin-left: 3in">
              <font face="Times New Roman" size="4" color="#000080">f) Vehicle 
              should be in the name of the&nbsp; beneficiary.</font></p>
              <p class="MsoBodyText" style="text-indent: -2.75in; text-align: justify; margin-left: 3in">
              <font face="Times New Roman" size="4" color="#000080">g) The 
              beneficiary should have valid&nbsp;driving licence. </font></p></td>
            </tr>
      </tbody></table>
    </td>
  </tr>
  <tr>
    <td align="middle" width="788" height="1" >
      <p align="right"><font face="Times New Roman" color="#8D6206"><strong>
      <a href="#Schemes"><font color="#000080" size="4">
	</font></a><font color="#000080" size="4"><a href="Diff%20abled%20scheme.htm"><span style="text-decoration: none">
	<font color="#000080"></font></span></a></font></strong></font></p></td>
  </tr>
  <tr>
    <td align="middle" width="788" height="399" >
    <table class="paleBlueRows" bordercolor="#000080" height="390" cellspacing="1" cellpadding="2" width="625" border="1">
      <tbody><tr>
        <td valign="top" width="85" bgcolor="#ffffff" height="48" >
        <p>
	<font face="Times New Roman" color="#000080" size="4"><b>
        Description of the Scheme</b></font></p></td>
        <td valign="top" width="522" bgcolor="#ffffff" height="48" >
        <p align="justify">
	<font face="Times New Roman" color="#800000" size="4">
        <a name="4. GRANT OF FINANCIAL ASSISTANCE TO DIFFERENTLY ABLED PERSON">4. 
        GRANT OF FINANCIAL ASSISTANCE 
        TO DIFFERENTLY ABLED PERSON</a></font></p></td>
      </tr>
      <tr>
        <td valign="top" width="85" bgcolor="#ffffff" height="57" >
        <p align="justify">
	<font face="Times New Roman" color="#000080" size="4"><b>Benefits</b></font></p></td>
        <td valign="top" width="522" bgcolor="#ffffff" height="57" >
        <p align="justify">
        <font face="Times New Roman" size="4" color="#000080">Disability Range 40% 
        - 65%&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -&nbsp;&nbsp;&nbsp; Rs.1500/- pm<br>
        Disability Range 66% - 85%&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -&nbsp;&nbsp;&nbsp; Rs.2000/- pm<br>
        Disability Range 86% - 100%&nbsp;&nbsp;&nbsp; -&nbsp;&nbsp;&nbsp; Rs.3000/- pm</font></p></td>
      </tr>
      <tr>
        <td valign="top" width="85" bgcolor="#ffffff" height="1" >
        <p align="justify">
	<font face="Times New Roman" color="#000080" size="4"><b>Eligibility</b></font></p></td>
        <td valign="top" width="522" bgcolor="#ffffff" height="1" >
        <p class="MsoBodyText" style="text-indent: -2.75in; text-align: justify; margin-left: 3in">
        <font face="Times New Roman" size="4" color="#000080">a) 
        Annual income : Not to exceed Rs.75,000/- per annum</font></p>
        <p class="MsoBodyText" style="text-indent: -2.75in; text-align: justify; margin-left: 3in">
        <font face="Times New Roman" size="4" color="#000080">b) Age : No 
        restriction </font></p>
        <p class="MsoBodyText" style="text-indent: -2.75in; text-align: justify; margin-left: 3in">
        <font face="Times New Roman" size="4" color="#000080">c) Disability : Ortho : 40% 
        and above</font></p>
        <p class="MsoBodyText" style="text-indent: -2.75in; text-align: justify; margin-left: 3in">
        <font face="Times New Roman" size="4" color="#000080">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Deaf and Dumb 
        : 40% and above </font></p>
        <p class="MsoBodyText" style="text-indent: -2.75in; text-align: justify; margin-left: 3in">
        <font face="Times New Roman" size="4" color="#000080">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Blind : 40% 
        and above</font></p>
        <p class="MsoBodyText" style="text-indent: -2.75in; text-align: justify; margin-left: 3in">
        <font face="Times New Roman" size="4" color="#000080">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Mentally 
        retarded : I. Q below 69</font></p>
        <p class="MsoBodyText" style="text-indent: -2.75in; text-align: justify; margin-left: 3in">
        <font face="Times New Roman" size="4" color="#000080">d) Residence : 
        Not less than 5 years.</font></p></td>
      </tr>
    </tbody></table>
    </td>
  </tr>
  <tr>
    <td valign="top" width="788" bgcolor="#ffffff" height="1" >
      <p align="right"><font face="Times New Roman" color="#8D6206"><strong>
      <a href="#Schemes"><font color="#000080" size="4">
	</font></a><font color="#000080" size="4"><a href="Diff%20abled%20scheme.htm"><span style="text-decoration: none">
	<font color="#000080"></font></span></a></font></strong></font></p></td>
  </tr>
  <tr>
    <td width="788" height="341" >
    <div align="right">
      <table class="paleBlueRows" width="100%" border="0">
        <tbody><tr>
          <td align="middle" width="100%">
          <table class="paleBlueRows" bordercolor="#000080" width="623" border="1">
            <tbody><tr>
              <td valign="top" width="79" bgcolor="#ffffff" height="48" >
              <p align="left">
	<font face="Times New Roman" color="#000080" size="4"><b>Description of 
              the Scheme</b></font></p></td>
              <td align="left" width="528" valign="top">
              <p align="justify">
              <font color="#800000">
              <a name="5. AWARD OF SCHOLARSHIP TO DIFFERENTLY ABLED STUDENTS">
              <span style="font-family: Times New Roman"><font size="4">5.
              </font>
              </span><font face="Times New Roman" size="4">AWARD OF SCHOLARSHIP TO 
              DIFFERENTLY ABLED PERSON&nbsp; STUDENTS</font></a></font></p></td>
            </tr>
            <tr>
              <td valign="top" width="79" bgcolor="#ffffff" height="57" >
              <p align="justify">
	<font face="Times New Roman" color="#000080" size="4"><b>Benefits</b></font></p></td>
              <td valign="top" width="528">
              <font face="Times New Roman" size="4" color="#000080">Scholarship to differently abled 
              person 
              students at the following rates. </font>
              <p><font face="Times New Roman" size="4" color="#000080">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; I – V 
              Std&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; Rs.1000/- p.a<br>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; VI – VIII Std&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Rs.2000/- p.a<br>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; IX – XII Std&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Rs.3400/- p.a<br>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; U.G. Courses&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; Rs.5000/- p.a<br>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; P.G / Professional&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Rs.6800/- p.a </font></p></td>
            </tr>
            <tr>
              <td valign="top" width="79" bgcolor="#ffffff" height="1" >
              <p align="justify">
	<font face="Times New Roman" color="#000080" size="4"><b>Eligibility</b></font></p></td>
              <td width="528">
              <font face="Times New Roman" size="4" color="#000080">
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; a) 
              Annual&nbsp; income should be Rs.75,000/-<br>
              <br>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; b) Age : Not less than 5 years<br>
              <br>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; c) Disability : 40% and above<br>
              <br>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; d) Residence : Not less than 5 years </font></td>
            </tr>
          </tbody></table>
          </td>
        </tr>
      </tbody></table>
    </div>
    </td>
  </tr>
  <tr>
    <td width="788" height="12" >
      <p align="right"><font face="Times New Roman" color="#8D6206"><strong>
      <a href="#Schemes"><font color="#000080" size="4">
	</font></a><font color="#000080" size="4"><a href="Diff%20abled%20scheme.htm"><span style="text-decoration: none">
	<font color="#000080"></font></span></a></font></strong></font></p></td>
  </tr>
  <tr>
    <td align="middle" width="788" height="322" >
    <table class="paleBlueRows" bordercolor="#000080" height="227" width="623" border="1">
      <tbody><tr>
        <td valign="top" width="79" bgcolor="#ffffff" height="48" >
        <p align="left">
	<font face="Times New Roman" color="#000080" size="4"><b>Description of the 
        Scheme</b></font></p></td>
        <td align="left" width="528" height="48" valign="top">
        <font color="#800000">
        <a name="6. INCENTIVE FOR EYE DONARS">
        <span style="font-family: Times New Roman"><font size="4">6. </font> </span>
        <font face="Times New Roman" size="4">INCENTIVE FOR EYE DONORS</font></a></font></td>
      </tr>
      <tr>
        <td valign="top" width="79" bgcolor="#ffffff" height="28" >
        <p align="justify">
	<font face="Times New Roman" color="#000080" size="4"><b>Benefits</b></font></p></td>
        <td valign="top" width="528" height="28">
        <font face="Times New Roman" size="4" color="#000080">A cash incentive of Rs.10,000/-&nbsp; to the 
        nearer relation&nbsp; of the eye donor.&nbsp;&nbsp;&nbsp;</font></td>
      </tr>
      <tr>
        <td valign="top" width="79" bgcolor="#ffffff" height="133" >
        <p align="justify">
	<font face="Times New Roman" color="#000080" size="4"><b>Eligibility</b></font></p></td>
        <td width="528" height="133">
        <font face="Times New Roman" size="4" color="#000080">&nbsp;&nbsp;&nbsp;&nbsp; 1. No 
        income limit </font>
        <p class="MsoBodyText" style="text-indent: -2.75in; text-align: justify; margin-left: 3in">
        <font face="Times New Roman" size="4" color="#000080">2. Age limit : (18 years and 
        above)</font></p>
        <p class="MsoBodyText" style="text-indent: -2.75in; text-align: justify; margin-left: 3in">
        <font face="Times New Roman" size="4" color="#000080">3. Residence : Not less than 5 
        years.</font></p>
        <p class="MsoBodyText" style="text-indent: -2.75in; text-align: justify; margin-left: 3in">
        <font face="Times New Roman" size="4" color="#000080">4. The person who is claiming the 
        incentive for eye donation must</font></p>
	<p class="MsoBodyText" style="text-indent: -2.75in; text-align: justify; margin-left: 3in">
        <font face="Times New Roman" size="4" color="#000080">&nbsp;&nbsp;&nbsp; be a close 
	relative of eye donor.</font></p>
        <p class="MsoBodyText" style="text-indent: -2.75in; text-align: justify; margin-left: 3in">
        <font face="Times New Roman" size="4" color="#000080">5. Transplantation of eye should 
        have taken place.</font></p>
        <p class="MsoBodyText" style="text-indent: -2.75in; text-align: justify; margin-left: 3in">
        <font face="Times New Roman" size="4" color="#000080">6. Should be apply with in 90 days 
        after the transplantation.</font></p></td>
      </tr>
    </tbody></table>
    </td>
  </tr>
  <tr>
    <td width="788" height="21" >
      <p align="right"><font face="Times New Roman" color="#8D6206"><strong>
      <a href="#Schemes"><font color="#000080" size="4">
	</font></a><font color="#000080" size="4"><a href="Diff%20abled%20scheme.htm"><span style="text-decoration: none">
	<font color="#000080"></font></span></a></font></strong></font></p></td>
  </tr>
  <tr>
    <td align="middle" width="788" height="327" >
    <table class="paleBlueRows" bordercolor="#000080" height="231" width="623" border="1">
      <tbody><tr>
        <td valign="top" width="77" bgcolor="#ffffff" height="48" >
        <p align="left">
	<font face="Times New Roman" color="#000080" size="4"><b>Description of the 
        Scheme</b></font></p></td>
        <td align="left" width="530" height="48" valign="top">
        <font color="#800000">
        <a name="7. REIMBURSEMENT OF MAINTENANCE COST OF TRICYCLES">
        <span style="font-family: Times New Roman"><font size="4">7. </font> </span>
        <font face="Times New Roman" size="4">REIMBURSEMENT OF MAINTENANCE COST OF 
        TRICYCLES</font></a></font></td>
      </tr>
      <tr>
        <td valign="top" width="77" bgcolor="#ffffff" height="32" >
        <p align="justify">
	<font face="Times New Roman" color="#000080" size="4"><b>Benefits</b></font></p></td>
        <td valign="top" width="530" height="32">
        <font face="Times New Roman" size="4" color="#000080">Rs.200/- p.a towards maintenance 
        of Tricycles.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></td>
      </tr>
      <tr>
        <td valign="top" width="77" bgcolor="#ffffff" height="133" >
        <p align="justify">
	<font face="Times New Roman" color="#000080" size="4"><b>Eligibility</b></font></p></td>
        <td width="530" height="133">
        <font face="Times New Roman" size="4" color="#000080">
        &nbsp;&nbsp;&nbsp; 1. Income Limit : Nil </font>
        <p class="MsoBodyText" style="text-indent: -2.75in; text-align: justify; margin-left: 3in">
        <font face="Times New Roman" size="4" color="#000080">2. Age. No 
        Restriction</font></p>
        <p class="MsoBodyText" style="text-indent: -2.75in; text-align: justify; margin-left: 3in">
        <font face="Times New Roman" size="4" color="#000080">3. Disability : 
        40% and above</font></p>
        <p class="MsoBodyText" style="text-indent: -2.75in; text-align: justify; margin-left: 3in">
        <font face="Times New Roman" size="4" color="#000080">4. Residence : 
        Not less than 5 years</font></p>
        <p class="MsoBodyText" style="text-indent: -2.75in; text-align: left; margin-left: 3in">
        <font face="Times New Roman" size="4" color="#000080">5. Tricycle should have been 
        supplied /donated by the Department </font></p>
	<p class="MsoBodyText" style="text-indent: -2.75in; text-align: left; margin-left: 3in">
        <font face="Times New Roman" size="4" color="#000080">&nbsp;&nbsp;&nbsp; 
	/NGO’s at free of cost.</font></p>
        <p><font face="Times New Roman" size="4" color="#000080">&nbsp;&nbsp;&nbsp;&nbsp; 6. Should produce the 
        receipt of repair&nbsp;charges bill by their names.</font></p><p>&nbsp;</p></td>
      </tr>
    </tbody></table>
    </td>
  </tr>
  <tr>
    <td width="788" height="21" >
      <p align="right"><font face="Times New Roman" color="#8D6206"><strong>
      <a href="#Schemes"><font color="#000080" size="4">
	</font></a><font color="#000080" size="4"><a href="Diff%20abled%20scheme.htm"><span style="text-decoration: none">
	<font color="#000080"></font></span></a></font></strong></font></p></td>
  </tr>
  <tr>
    <td align="middle" width="788" height="205" >
    <table class="paleBlueRows" bordercolor="#000080" height="167" width="623" border="1">
      <tbody><tr>
        <td valign="top" width="79" bgcolor="#ffffff" height="48" >
        <p align="left">
	<font face="Times New Roman" color="#000080" size="4"><b>Description of the 
        Scheme</b></font></p></td>
        <td align="left" width="528" height="48" valign="top">
        <font color="#800000">
        <a name="8. SUPPLY OF SAREES AND DHOTIES TO DIFFERENTLY ABLED PERSONS">
        <span style="font-family: Times New Roman"><font size="4">8. </font> </span>
        <font face="Times New Roman" size="4">SUPPLY OF SAREES AND DHOTIES TO DIFFERENTLY ABLED 
        PERSONS</font></a></font></td>
      </tr>
      <tr>
        <td valign="top" width="79" bgcolor="#ffffff" height="23" >
        <p align="justify">
	<font face="Times New Roman" color="#000080" size="4"><b>Benefits</b></font></p></td>
        <td valign="top" width="528" height="23">
        <font face="Times New Roman" size="4" color="#000080">Sarees and dhotis during Deepavali 
        / Local&nbsp;regional festivals.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></td>
      </tr>
      <tr>
        <td valign="top" width="79" bgcolor="#ffffff" height="78" >
        <p align="justify">
	<font face="Times New Roman" color="#000080" size="4"><b>Eligibility</b></font></p></td>
        <td width="528" height="78">
        <font face="Times New Roman" size="4" color="#000080">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1. Age : 18 years and above<br>
        <br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2. Disability : 40% and above<br>
        <br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3. 
        Should have registered their name in the local Anganwadi&nbsp; <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; centre.<br>
&nbsp;</font></td>
      </tr>
    </tbody></table>
    </td>
  </tr>
  <tr>
    <td width="788" height="21" >
      <p align="right"><font face="Times New Roman" color="#8D6206"><strong>
      <a href="#Schemes"><font color="#000080" size="4">
	</font></a><font color="#000080" size="4"><a href="Diff%20abled%20scheme.htm"><span style="text-decoration: none">
	<font color="#000080"></font></span></a></font></strong></font></p></td>
  </tr>
  <tr>
    <td align="middle" width="788" height="338" >
    <table class="paleBlueRows" bordercolor="#000080" width="623" border="1">
      <tbody><tr>
        <td valign="top" width="79" bgcolor="#ffffff" height="48" >
        <p align="left">
	<font face="Times New Roman" color="#000080" size="4"><b>Description of the 
        Scheme</b></font></p></td>
        <td align="left" width="528" valign="top">
        <font color="#800000">
        <a name="9. STATE AWARD FOR THE WELFARE OF THE HANDICAPPED">
        <span style="font-family: Times New Roman"><font size="4">9. </font> </span>
        <font face="Times New Roman" size="4">STATE AWARD FOR THE WELFARE OF THE 
        HANDICAPPED&nbsp;</font></a></font></td>
      </tr>
      <tr>
        <td valign="top" width="79" bgcolor="#ffffff" height="57" >
        <p align="justify">
	<font face="Times New Roman" color="#000080" size="4"><b>Benefits</b></font></p></td>
        <td valign="top" width="528">
        <p class="MsoBodyText" style="text-align: justify; margin-left: 0.25in">
        <font face="Times New Roman" size="4" color="#000080">State awards as follows:</font></p>
        <p class="MsoBodyText" style="text-align: justify; margin-left: 0.25in">
        <font face="Times New Roman" size="4" color="#000080">1.<span style="font-style: normal; font-variant: normal; font-weight: normal; ">&nbsp;&nbsp;</span>Outstanding 
        differently abled person Govt/ Private Employee&nbsp;&nbsp;&nbsp;&nbsp;
	<br>
&nbsp;&nbsp;&nbsp;&nbsp; and Self- employed persons &nbsp;&nbsp; Rs.10,000/-</font></p>
        <p class="MsoBodyText" style="text-align: justify; margin-left: 0.25in">
        <font face="Times New Roman" size="4" color="#000080">2.<span style="font-style: normal; font-variant: normal; font-weight: normal; ">&nbsp;&nbsp;</span>Individual 
        serving for the cause of the Differently abled person&nbsp; <br>
&nbsp;&nbsp;&nbsp;&nbsp; Rs.15,000/-</font></p>
        <p><font face="Times New Roman" size="4" color="#000080">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.&nbsp;Institutions serving 
        for the cause of the differently abled&nbsp;&nbsp;&nbsp;&nbsp; <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; person&nbsp;&nbsp; is Rs.&nbsp; 25,000/-&nbsp;&nbsp; (Subject to 
        final selection by 
        the <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; State Level Committee)<br>
&nbsp;</font></p></td>
      </tr>
      <tr>
        <td valign="top" width="79" bgcolor="#ffffff" height="1" >
        <p align="justify">
	<font face="Times New Roman" color="#000080" size="4"><b>Eligibility</b></font></p></td>
        <td width="528">
        <font face="Times New Roman" size="4" color="#000080">&nbsp;&nbsp;&nbsp; 1. Income 
        Limit : Nil </font>
        <p><font face="Times New Roman" size="4" color="#000080">&nbsp;&nbsp;&nbsp; 2. Age : No restriction&nbsp;</font></p>
        <p><font face="Times New Roman" size="4" color="#000080">&nbsp;&nbsp;&nbsp; 3. 
        Disability : 40 % and above <br>
&nbsp;</font></p></td>
      </tr>
    </tbody></table>
    </td>
  </tr>
  <tr>
    <td width="788" height="21" >
      <p align="right"><font face="Times New Roman" color="#8D6206"><strong>
      <a href="#Schemes"><font color="#000080" size="4">
	</font></a><font color="#000080" size="4"><a href="Diff%20abled%20scheme.htm"><span style="text-decoration: none">
	<font color="#000080"></font></span></a></font></strong></font></p></td>
  </tr>
  <tr>
    <td align="middle" width="788" height="262" >
    <table class="paleBlueRows" bordercolor="#000080" width="623" border="1">
      <tbody><tr>
        <td valign="top" width="79" bgcolor="#ffffff" height="48" >
        <p align="left">
	<font face="Times New Roman" color="#000080" size="4"><b>Description of the 
        Scheme</b></font></p></td>
        <td align="left" width="528" valign="top">
        <p align="justify">
        <font color="#800000">
        <a name="10. SUPPLY OF PROSTHETIC APPLIANCES TO DIFFERENTLY ABLED PERSONS">
        <span style="font-family: Times New Roman"><font size="4">10. </font> </span>
        <font face="Times New Roman" size="4">SUPPLY OF PROSTHETIC APPLIANCES TO DIFFERENTLY ABLED 
        PERSONS</font></a></font></p></td>
      </tr>
      <tr>
        <td valign="top" width="79" bgcolor="#ffffff" height="57" >
        <p align="justify">
	<font face="Times New Roman" color="#000080" size="4"><b>Benefits</b></font></p></td>
        <td valign="top" width="528">
        <p align="justify">
        <font face="Times New Roman" size="4" color="#000080">&nbsp;Prosthetic appliances like calipers, Tricycles, Crutches, hearing aid 
        spectacles / low vision aids, etc on the advice of the specialists 
        concerned attached to the Govt. General Hospital Pondicherry /Karaikal / 
        Mahe / Yanam.<br>
&nbsp;</font></p></td>
      </tr>
      <tr>
        <td valign="top" width="79" bgcolor="#ffffff" height="1" >
        <p align="justify">
	<font face="Times New Roman" color="#000080" size="4"><b>Eligibility</b></font></p></td>
        <td width="528">
        <font face="Times New Roman" size="4" color="#000080">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1. Annual 
        income : Not to exceed Rs.75,000/- per annum </font>
        <p><font face="Times New Roman" size="4" color="#000080">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2. Age : No restriction</font></p>
        <p><font face="Times New Roman" size="4" color="#000080">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3. Disability : 40% and 
        above</font></p>
        <p><font face="Times New Roman" size="4" color="#000080">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 4. Residence : Not less 
        than 5 years.<br>
&nbsp;</font></p></td>
      </tr>
    </tbody></table>
    </td>
  </tr>
  <tr>
    <td width="788" height="21" >
      <p align="right"><font face="Times New Roman" color="#8D6206"><strong>
      <a href="#Schemes"><font color="#000080" size="4">
	</font></a><font color="#000080" size="4"><a href="Diff%20abled%20scheme.htm"><span style="text-decoration: none">
	<font color="#000080"></font></span></a></font></strong></font></p></td>
  </tr>
  <tr>
    <td align="middle" width="788" height="231" >
    <table class="paleBlueRows" bordercolor="#000080" height="225" width="623" border="1">
      <tbody><tr>
        <td valign="top" width="79" bgcolor="#ffffff" height="48" >
        <p align="left">
	<font face="Times New Roman" color="#000080" size="4"><b>Description of the 
        Scheme</b></font></p></td>
        <td align="left" width="528" height="48" valign="top">
        <p align="justify">
        <font color="#800000">
        <a name="11. ISSUE OF FREE BUS PASS TO DIFFERENTLY ABLED PERSON">
        <span style="font-family: Times New Roman"><font size="4">11. </font> </span>
        <font face="Times New Roman" size="4">ISSUE OF FREE BUS PASS TO DIFFERENTLY 
        ABLED PERSON</font></a></font></p></td>
      </tr>
      <tr>
        <td valign="top" width="79" bgcolor="#ffffff" height="26" >
        <p align="justify">
	<font face="Times New Roman" color="#000080" size="4"><b>Benefits</b></font></p></td>
        <td valign="top" width="528" height="26">
        <font face="Times New Roman" size="4" color="#000080">Free bus pass to all differently 
        abled&nbsp; 
        person persons for use within the union territory<br>
&nbsp;</font></td>
      </tr>
      <tr>
        <td valign="top" width="79" bgcolor="#ffffff" height="133" >
        <p align="justify">
	<font face="Times New Roman" color="#000080" size="4"><b>Eligibility</b></font></p></td>
        <td width="528" height="133">
        <font face="Times New Roman" size="4" color="#000080">&nbsp;&nbsp;&nbsp; 
        1. Annual Income : Not to exceed Rs.75,000/- p.a </font>
        <p><font face="Times New Roman" size="4" color="#000080">&nbsp;&nbsp;&nbsp; 2. Age : No restriction</font></p>
        <p><font face="Times New Roman" size="4" color="#000080">&nbsp;&nbsp;&nbsp; 3. Disability : 40% and 
        above</font></p>
        <p><font face="Times New Roman" size="4" color="#000080">&nbsp;&nbsp;&nbsp; 4. Residence : Not less 
        than 5 years <br>
&nbsp;</font></p></td>
      </tr>
    </tbody></table>
    </td>
  </tr>
  <tr>
    <td width="788" height="21" >
      <p align="right"><font face="Times New Roman" color="#8D6206"><strong>
      <a href="#Schemes"><font color="#000080" size="4">
	</font></a><font color="#000080" size="4"><a href="Diff%20abled%20scheme.htm"><span style="text-decoration: none">
	<font color="#000080"></font></span></a></font></strong></font></p></td>
  </tr>
  <tr>
    <td align="middle" width="788" height="395" >
    <table class="paleBlueRows" bordercolor="#000080" height="233" width="623" border="1">
      <tbody><tr>
        <td valign="top" width="82" bgcolor="#ffffff" height="48" >
        <p align="left">
	<font face="Times New Roman" color="#000080" size="4"><b>Description of the 
        Scheme</b></font></p></td>
        <td align="left" width="525" height="48" valign="top">
        <font face="Times New Roman" color="#800000" size="4">
        <a name="12. ANNUAL TOUR FOR DIFFERENTLY ABLED PERSONS">12. ANNUAL TOUR FOR DIFFERENTLY ABLED PERSONS</a></font></td>
      </tr>
      <tr>
        <td valign="top" width="82" bgcolor="#ffffff" height="34" >
        <p align="justify">
	<font face="Times New Roman" color="#000080" size="4"><b>Benefits</b></font></p></td>
        <td valign="top" align="left">
        <p class="MsoBodyText" style="margin-left: 0.5in">
        <font face="Times New Roman" size="4" color="#000080">Free tour to various places yearly 
        once. (Subject to selection)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></p></td>
      </tr>
      <tr>
        <td valign="top" width="82" bgcolor="#ffffff" height="133" >
        <p align="justify">
	<font face="Times New Roman" color="#000080" size="4"><b>Eligibility</b></font></p></td>
        <td width="525" height="133">
        <font face="Times New Roman" size="4" color="#000080">
        &nbsp;1. Age : 18 – 50 years </font>
        <p><font face="Times New Roman" size="4" color="#000080">&nbsp;2. Disability : 
        40% and above</font></p>
        <p><font face="Times New Roman" size="4" color="#000080">&nbsp;3. Should not be 
        a Govt. Servant</font></p>
        <p><font face="Times New Roman" size="4" color="#000080">&nbsp;4. The 
        applicant’s parent should not be a Govt. servant.<br>
&nbsp;&nbsp;&nbsp;&nbsp; Annual income : Below 75,000/-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	</font></p>
        <p><font face="Times New Roman" size="4" color="#000080">&nbsp;5. The applicant should not attended the tour for the past ten years.</font></p>
        <p><font face="Times New Roman" size="4" color="#000080">&nbsp;6. The applicant 
        should not be affected by contagious diseases.</font></p>
        <p><font face="Times New Roman" size="4" color="#000080">&nbsp;7. Drugs and 
        alcoholic items are prohibited.</font></p>
        <p><font face="Times New Roman" size="4" color="#000080">&nbsp;8. Applicant 
        should register his / her name in the Anganwadi centre. </font>
        </p><p>&nbsp;</p></td>
      </tr>
    </tbody></table>
    </td>
  </tr>
  <tr>
    <td width="788" height="21" >
      <p align="right"><font face="Times New Roman" color="#8D6206"><strong>
      <a href="#Schemes"><font color="#000080" size="4">
	</font></a><font color="#000080" size="4"><a href="Diff%20abled%20scheme.htm"><span style="text-decoration: none">
	<font color="#000080"></font></span></a></font></strong></font></p></td>
  </tr>
  <tr>
    <td align="middle" width="788" height="142" >
    <table class="paleBlueRows" bordercolor="#000080" width="623" border="1">
      <tbody><tr>
        <td valign="top" width="79" bgcolor="#ffffff" height="48" >
        <p align="left">
	<font face="Times New Roman" color="#000080" size="4"><b>Description of the 
        Scheme</b></font></p></td>
        <td align="left" width="528" valign="top">
        <p align="justify">
        <font face="Times New Roman" color="#800000" size="4">
        <a name="13. INTERNATIONAL DAY FOR THE DIFFERENTLY ABLED PERSON">13. 
        INTERNATIONAL DAY FOR THE DIFFERENTLY ABLED PERSON </a></font></p></td>
      </tr>
      <tr>
        <td valign="top" width="79" bgcolor="#ffffff" height="57" >
        <p align="justify">
	<font face="Times New Roman" color="#000080" size="4"><b>Benefits</b></font></p></td>
        <td valign="top" width="528">
        <font face="Times New Roman" size="4" color="#000080">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Celebration of International Day for the disabled with various 
        competitions and programme with free lunch on 3<sup>rd</sup> December 
        every year.<br>
&nbsp;</font></td>
      </tr>
      <tr>
        <td valign="top" width="79" bgcolor="#ffffff" height="1" >
        <p align="justify">
	<font face="Times New Roman" color="#000080" size="4"><b>Eligibility</b></font></p></td>
        <td width="528"><font face="Times New Roman" size="4" color="#000080">&nbsp;&nbsp;1. 
        All disabled persons&nbsp; may participate</font></td>
      </tr>
    </tbody></table>
    </td>
  </tr>
  <tr>
    <td width="788" height="21" >
      <p align="right"><font face="Times New Roman" color="#8D6206"><strong>
      <a href="#Schemes"><font color="#000080" size="4">
	</font></a><font color="#000080" size="4"><a href="Diff%20abled%20scheme.htm"><span style="text-decoration: none">
	<font color="#000080"></font></span></a></font></strong></font></p></td>
  </tr>
  <tr>
    <td align="middle" width="788" height="281" >
    <table class="paleBlueRows" bordercolor="#000080" width="623" border="1">
      <tbody><tr>
        <td valign="top" width="79" bgcolor="#ffffff" height="48" >
        <p align="left">
	<font face="Times New Roman" color="#000080" size="4"><b>Description of the 
        Scheme</b></font></p></td>
        <td align="left" width="528" valign="top">
        <p align="justify">
        <font face="Times New Roman" color="#800000" size="4">
        <a name="14. GROUP INSURANCE FOR DIFFERENTLY ABLED PERSON GOVERNMENT EMPLOYEES.">14. GROUP 
        INSURANCE FOR DIFFERENTLY ABLED PRSON&nbsp; GOVERNMENT EMPLOYEES.</a></font></p></td>
      </tr>
      <tr>
        <td valign="top" width="79" bgcolor="#ffffff" height="57" >
        <p align="justify">
	<font face="Times New Roman" color="#000080" size="4"><b>Benefits</b></font></p></td>
        <td valign="top" width="528"><font color="#000080"><font size="4">
        <span style="font-family: Times New Roman">In case of death due to 
        accident while in </span><font face="Times New Roman">service the sum insured as follows will be 
        given to the family of the deceased employee.</font></font><font face="Times New Roman" size="4">
        </font> </font>
        <p><font size="4" color="#000080" face="Times New Roman">&nbsp; Group 
        A…………..Rs.1,20,000/-</font></p>
        <p><font size="4" color="#000080" face="Times New Roman">&nbsp; Group B…………..Rs. 60,000/-</font></p>
        <p><font size="4" color="#000080"><font face="Times New Roman">&nbsp; Group C…………&nbsp; Rs. 30,000/-</font><span style="font-family: Times New Roman">&nbsp;&nbsp;&nbsp;&nbsp;</span></font></p><p>
	<font size="4" color="#000080"><font face="Times New Roman">&nbsp; 
        Group D…………&nbsp; Rs. 15,000/-</font><span style="font-family: Times New Roman">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></font></p></td>
      </tr>
      <tr>
        <td valign="top" width="79" bgcolor="#ffffff" height="1" >
        <p align="justify">
	<font face="Times New Roman" color="#000080" size="4"><b>Eligibility</b></font></p></td>
        <td width="528"><font color="#000080"><font size="4">
        <span style="font-family: Times New Roman">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><font face="Times New Roman"> 
        1. Must be a government Servant&nbsp;</font></font><font face="Times New Roman" size="4">
        </font> </font>
        <p><font face="Times New Roman" size="4" color="#000080">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;2. Disability : 
        40 % and above </font></p></td>
      </tr>
    </tbody></table>
    </td>
  </tr>
  <tr>
    <td width="788" height="21" >
      <p align="right"><font face="Times New Roman" color="#8D6206"><strong>
      <a href="#Schemes"><font color="#000080" size="4">
	</font></a><font color="#000080" size="4"><a href="Diff%20abled%20scheme.htm"><span style="text-decoration: none">
	<font color="#000080"></font></span></a></font></strong></font></p></td>
  </tr>
  <tr>
    <td align="middle" width="788" height="146" >
    <table class="paleBlueRows" bordercolor="#000080" width="623" border="1">
      <tbody><tr>
        <td valign="top" width="79" bgcolor="#ffffff" height="48" >
        <p align="left">
	<font face="Times New Roman" color="#000080" size="4"><b>Description of the 
        Scheme</b></font></p></td>
        <td align="left" width="528" valign="top">
        <p align="justify">
        <font color="#800000">
        <a name="15. INSURANCE SCHEME FOR PERSON WITH DISABILITIES OTHER THAN THE EMPLOYEES OF GOVT. OF PONDICHERRY 2004">
        <font face="Times New Roman" size="4">15</font><span style="font-family: Times New Roman"><font size="4">.INSURANCE 
        SCHEME FOR PERSON WITH DISABILITIES OTHER THAN THE EMPLOYEES OF GOVT. OF 
        PONDICHERRY 2004</font></span></a></font></p></td>
      </tr>
      <tr>
        <td valign="top" width="79" bgcolor="#ffffff" height="57" >
        <p align="justify">
	<font face="Times New Roman" color="#000080" size="4"><b>Benefits</b></font></p></td>
        <td valign="top">
        <p class="MsoNormal" style="margin-left:225.0pt;text-indent:-225.0pt" align="left">
        <font face="Times New Roman" color="#000080" size="4">1
        &nbsp;In case of death due to accident an amount of &nbsp;&nbsp;&nbsp;Rs.25,000/- will be provided.</font></p>
        <p class="MsoNormal" style="margin-left:225.0pt;text-indent:-225.0pt">
        <font face="Times New Roman" color="#000080" size="4">
        &nbsp;2. &nbsp;&nbsp;In case of 
        physical separation of one limp/ 1 Leg or 1 Eye due to accident, an&nbsp; 
        amount of Rs.12,500/- will be paid.</font></p>
        <p class="MsoBodyTextIndent2">
        &nbsp;</p></td>
      </tr>
      <tr>
        <td valign="top" width="79" bgcolor="#ffffff" height="1" >
        <p align="justify">
	<font face="Times New Roman" color="#000080" size="4"><b>Eligibility</b></font></p></td>
        <td width="528">
        <p class="MsoNormal" style="margin-left:225.0pt;text-indent:-225.0pt">
        <font face="Times New Roman" color="#000080" size="4">
        &nbsp;&nbsp; 1. Age – 5 
        to 74 </font></p>
        <p class="MsoNormal" style="margin-left:225.0pt;text-indent:-225.0pt">
        <font face="Times New Roman" color="#000080" size="4">
        &nbsp; &nbsp;2. Disability : 40% 
        and above</font></p>
        <p class="MsoNormal" style="margin-left:225.0pt;text-indent:-225.0pt">
        <font face="Times New Roman" color="#000080" size="4">
        &nbsp; &nbsp;3. For all 
        Disability Person</font></p>
        <p class="MsoNormal" style="margin-left:225.0pt;text-indent:-225.0pt">
        <font face="Times New Roman" color="#000080" size="4">
        &nbsp; &nbsp;4. Residence not 
        less than 5 years.</font></p></td>
      </tr>
      </tbody></table>
    </td>
  </tr>
  <tr>
    <td width="788" height="21" >
      <p align="right"><font face="Times New Roman" color="#8D6206"><strong>
      <a href="#Schemes"><font color="#000080" size="4">
	</font></a><font color="#000080" size="4"><a href="Diff%20abled%20scheme.htm"><span style="text-decoration: none">
	<font color="#000080"></font></span></a></font></strong></font></p></td>
  </tr>
  <tr>
    <td align="middle" width="788" height="369" >
    <table class="paleBlueRows" bordercolor="#000080" width="623" border="1">
      <tbody><tr>
        <td valign="top" width="79" bgcolor="#ffffff" height="48" >
        <p align="left">
	<font face="Times New Roman" color="#000080" size="4"><b>Description of the 
        Scheme</b></font></p></td>
        <td align="left" width="528" valign="top">
        <p align="justify">
        <font color="#800000">
        <a name="16. THE PERUNTHALAIVAR KARMAVEERAR KAMARAJ SCHEME FOR FINANCIAL ASSISTANCE TOWARDS FUNERAL EXPENSES OF THE DIFFERENTLY ABLED PERSONS">
        <span style="font-family: Times New Roman"><font size="4">16. </font> </span>
        <font face="Times New Roman" size="4">THE PERUNTHALAIVAR KARMAVEERAR KAMARAJ 
        SCHEME FOR FINANCIAL ASSISTANCE TOWARDS FUNERAL EXPENSES OF THE DIFFERENTLY ABLED 
        PERSONS</font></a></font></p></td>
      </tr>
      <tr>
        <td valign="top" width="79" bgcolor="#ffffff" height="57" >
        <p align="justify">
	<font face="Times New Roman" color="#000080" size="4"><b>Benefits</b></font></p></td>
        <td valign="top" width="528">
        <p align="justify">
        <font face="Times New Roman" size="4" color="#000080">
        Funeral Expenses to Deceased differently abled persons for Rs.5,000/-</font></p></td>
      </tr>
      <tr>
        <td valign="top" width="79" bgcolor="#ffffff" height="1" >
        <p align="justify">
	<font face="Times New Roman" color="#000080" size="4"><b>Eligibility</b></font></p></td>
        <td width="528"><font face="Times New Roman" size="4" color="#000080">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1.<span style="font-weight: normal; font-style: normal; font-variant: normal">&nbsp;&nbsp;&nbsp;&nbsp;</span>Disability : 40% and above&nbsp; </font>
        <p><font face="Times New Roman" size="4" color="#000080">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2.<span style="font-weight: normal; font-style: normal; font-variant: normal">&nbsp;&nbsp;&nbsp;&nbsp;</span>Annual income : Below 
	75,000/-&nbsp; </font></p>
        <p align="justify">
	<font face="Times New Roman" size="4" color="#000080">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3.<span style="font-weight: normal; font-style: normal; font-variant: normal">&nbsp;&nbsp;&nbsp;&nbsp;</span>Son/ Daughter / Spouse or any other relative under 
	<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; whose care and &nbsp; maintenance. The differently abled
	<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
        person persons was living at the 
        time of his / her death.<o:p> </o:p>
        <br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 4.<span style="font-weight: normal; font-style: normal; font-variant: normal">&nbsp;&nbsp;&nbsp;&nbsp;
        </span>Residence not less than 5 years.</font></p>
        <p><font face="Times New Roman" size="4" color="#000080">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 5.<span style="font-weight: normal; font-style: normal; font-variant: normal">&nbsp;&nbsp;&nbsp;&nbsp;
        </span> No age limit&nbsp; </font></p>
        <p align="justify">
	<font face="Times New Roman" size="4" color="#000080">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 6.<span style="font-weight: normal; font-style: normal; font-variant: normal">&nbsp;&nbsp;&nbsp;&nbsp;
        </span>
        The application shall be made 30 days from the date of <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; death of 
        the&nbsp; differently abled person persons.</font></p></td>
      </tr>
    </tbody></table>
    </td>
  </tr>
  <tr>
    <td width="788" height="21" >
      <p align="right"><font face="Times New Roman" color="#8D6206"><strong>
      <a href="#Schemes"><font color="#000080" size="4">
	</font></a><font color="#000080" size="4"><a href="Diff%20abled%20scheme.htm"><span style="text-decoration: none">
	<font color="#000080"></font></span></a></font></strong></font></p></td>
  </tr>
  <tr>
    <td align="middle" width="788" height="352" >
    <table class="paleBlueRows" bordercolor="#000080" height="346" width="623" border="1">
      <tbody><tr>
        <td valign="top" width="79" bgcolor="#ffffff" height="48" >
        <p align="left">
	<font face="Times New Roman" color="#000080" size="4"><b>Description of the 
        Scheme</b></font></p></td>
        <td align="left" width="528" height="48" valign="top">
        <p align="justify">
        <font face="Times New Roman" color="#800000" size="4">
        <a name="17. SUPPLY OF INVALID CARRIAGES (MOTORIZED TRI-CYCLES) TO THE PERSONS WITH DISABILITIES">
        17. SUPPLY OF INVALID CARRIAGES (MOTORIZED TRI-CYCLES) TO THE PERSONS 
        WITH DISABILITIES</a></font></p></td>
      </tr>
      <tr>
        <td valign="top" width="79" bgcolor="#ffffff" height="33" >
        <p align="justify">
	<font face="Times New Roman" color="#000080" size="4"><b>Benefits</b></font></p></td>
        <td valign="top" width="528" height="33">
        <p align="justify">
        <font face="Times New Roman" size="4" color="#000080">Invalid carriages (Motorized 
        Tri-cycles) Free of cost to persons with disabilities.<br>
&nbsp;</font></p></td>
      </tr>
      <tr>
        <td valign="top" width="79" bgcolor="#ffffff" height="247" >
        <p align="justify">
	<font face="Times New Roman" color="#000080" size="4"><b>Eligibility</b></font></p></td>
        <td width="528" height="247">
        <font face="Times New Roman" size="4" color="#000080">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1.<span style="font-weight: normal; font-style: normal; font-variant: normal">&nbsp;&nbsp;&nbsp;&nbsp;
        </span> Disability : Loco motor Disability with affecting lower <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; limbs not less 
        than 65%</font><p align="justify">
	<font face="Times New Roman" size="4" color="#000080">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2.<span style="font-weight: normal; font-style: normal; font-variant: normal">&nbsp;&nbsp;&nbsp;&nbsp;
        </span>
        Annual income : Below 75,000 of his/ her parent’s or <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; guardian’s.
        </font></p>
        <p><font face="Times New Roman" size="4" color="#000080">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3.<span style="font-weight: normal; font-style: normal; font-variant: normal">&nbsp;&nbsp;&nbsp;&nbsp;
        </span> Residence not less than 5 years.&nbsp;&nbsp; </font></p>
        <p align="justify">
	<font face="Times New Roman" size="4" color="#000080">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 4.<span style="font-weight: normal; font-style: normal; font-variant: normal">&nbsp;&nbsp;&nbsp;&nbsp;
        </span> He / she should be certified by Medical Authority that he / <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; she 
        is fit for operating the Invalid Carriage (Motorized Tri-<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; cycle) </font>
        </p>
        <p align="justify">
	<font face="Times New Roman" size="4" color="#000080">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 5.<span style="font-weight: normal; font-style: normal; font-variant: normal">&nbsp;&nbsp;&nbsp; </span>Should not be in receipt of Transport Allowance for 
	<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; conveyance 
        from the&nbsp; Department or from any other <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; source.&nbsp;</font></p>
        <p align="justify">
	<font face="Times New Roman" size="4" color="#000080">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 6.<span style="font-weight: normal; font-style: normal; font-variant: normal">&nbsp;&nbsp;&nbsp;
        </span>He / she should be in 
        gainful Employee / Pursue higher <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; study.&nbsp; </font>
        <span style="font-size: 14pt">
        <o:p><br>
&nbsp;</o:p></span></p></td>
      </tr>
    </tbody></table>
    </td>
  </tr>
  <tr>
    <td width="788" height="21" >
      <p align="right"><font face="Times New Roman" color="#8D6206"><strong>
      <a href="#Schemes"><font color="#000080" size="4">
	</font></a><font color="#000080" size="4"><a href="Diff%20abled%20scheme.htm"><span style="text-decoration: none">
	<font color="#000080"></font></span></a></font></strong></font></p></td>
  </tr>
  <tr>
    <td align="middle" width="788" height="136" >
    <table class="paleBlueRows" bordercolor="#000080" height="130" width="623" border="1">
      <tbody><tr>
        <td valign="top" width="79" bgcolor="#ffffff" height="48" >
        <p align="left">
	<font face="Times New Roman" color="#000080" size="4"><b>Description of the 
        Scheme</b></font></p></td>
        <td align="left" width="528" height="48" valign="top">
        <p align="justify">
        <a name="18. SUPPLY OF MUSICAL / SPORTS ITEMS  TO PH WELFARE ASSOCIATIONS">
        <font size="4" face="Times New Roman" color="#800000">18. SUPPLY OF MUSICAL / SPORTS ITEMS</font><font face="Tahoma" color="#800000" size="4"><span style="font-family: Times New Roman">&nbsp;
        </span></font>
        <font size="4" face="Times New Roman" color="#800000">TO PH WELFARE ASSOCIATIONS</font></a></p></td>
      </tr>
      <tr>
        <td valign="top" width="79" bgcolor="#ffffff" height="25" >
        <p align="justify">
	<font face="Times New Roman" color="#000080" size="4"><b>Benefits</b></font></p></td>
        <td valign="top" width="528" height="25">
        <font face="Times New Roman" size="4" color="#000080">Music / Sports articles to 
        recognized PH welfare Associations</font></td>
      </tr>
      <tr>
        <td valign="top" width="79" bgcolor="#ffffff" height="39" >
        <p align="justify">
	<font face="Times New Roman" color="#000080" size="4"><b>Eligibility</b></font></p></td>
        <td width="528" height="39">
        <font face="Times New Roman" size="4" color="#000080">
        Association should 
        be registered one&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </font></td>
      </tr>
    </tbody></table>
    </td>
  </tr>
  <tr>
    <td width="788" height="21" >
      <p align="right"><font face="Times New Roman" color="#8D6206"><strong>
      <a href="#Schemes"><font color="#000080" size="4">
	</font></a><font color="#000080" size="4"><a href="Diff%20abled%20scheme.htm"><span style="text-decoration: none">
	<font color="#000080"></font></span></a></font></strong></font></p></td>
  </tr>
  <tr>
    <td align="middle" width="788" height="180" >
    <table class="paleBlueRows" bordercolor="#000080" width="623" border="1">
      <tbody><tr>
        <td valign="top" width="79" bgcolor="#ffffff" height="48" >
        <p align="left">
	<font face="Times New Roman" color="#000080" size="4"><b>Description of the 
        Scheme</b></font></p></td>
        <td align="left" width="528" valign="top">
        <p align="justify">
        <font face="Times New Roman" color="#800000" size="4">
        <a name="19. ISSUE OF IDENTITY CARDS TO DIFFERENTLY ABLED PERSONS">19. ISSUE OF 
        IDENTITY CARDS TO DIFFERENTLY ABLED PERSONS</a></font></p></td>
      </tr>
      <tr>
        <td valign="top" width="79" bgcolor="#ffffff" height="57" >
        <p align="justify">
	<font face="Times New Roman" color="#000080" size="4"><b>Benefits</b></font></p></td>
        <td valign="top" width="528">
        <p class="MsoBodyTextIndent2" align="justify">
        <font face="Times New Roman" size="4" color="#000080">An 
        identity card is being issued to all the disabled person persons indicating 
        their personal details for ready reference to avail the benefits of 
        welfare scheme.<br>
&nbsp;</font></p></td>
      </tr>
      <tr>
        <td valign="top" width="79" bgcolor="#ffffff" height="1" >
        <p align="justify">
	<font face="Times New Roman" color="#000080" size="4"><b>Eligibility</b></font></p></td>
        <td width="528"><font face="Times New Roman" size="4" color="#000080">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1. 
        Disability : 40% and above&nbsp; </font>
        <p><font face="Times New Roman" size="4" color="#000080">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
        2. Income Limit : Below Rs.75,000/- p.a</font></p></td>
      </tr>
    </tbody></table>
    </td>
  </tr>
  <tr>
    <td width="788" height="21" >
      <p align="right"><font face="Times New Roman" color="#8D6206"><strong>
      <a href="#Schemes"><font color="#000080" size="4">
	</font></a><font color="#000080" size="4"><a href="Diff%20abled%20scheme.htm"><span style="text-decoration: none">
	<font color="#000080">
	</font></span></a></font></strong></font></p></td>
  </tr>
  <tr>
    <td align="middle" width="788" height="381" >
    <table class="paleBlueRows" bordercolor="#000080" height="132" width="623" border="1">
      <tbody><tr>
        <td valign="top" width="79" bgcolor="#ffffff" height="48" >
        <p align="left">
	<font face="Times New Roman" color="#000080" size="4"><b>Description of the 
        Scheme</b></font></p></td>
        <td align="left" width="528" height="48" valign="top">
        <p align="justify">
        <font face="Times New Roman" color="#800000" size="4">
        <a name="20. GRANT OF TRANSPORT ALLOWANCE TO DISABLED PERSONS">20. GRANT OF TRANSPORT ALLOWANCE TO DISABLED PERSONS</a></font></p></td>
      </tr>
      <tr>
        <td valign="top" width="79" bgcolor="#ffffff" height="28" >
        <p align="justify">
	<font face="Times New Roman" color="#000080" size="4"><b>Benefits</b></font></p></td>
        <td valign="top" width="528" height="28">
        <font face="Times New Roman" size="4" color="#000080">Sum of Rs.100/- per month through 
        Anganwadi centres.</font></td>
      </tr>
      <tr>
        <td valign="top" width="79" bgcolor="#ffffff" height="133" >
        <p align="justify">
	<font face="Times New Roman" color="#000080" size="4"><b>Eligibility</b></font></p></td>
        <td width="528" height="133">
        <font face="Times New Roman" size="4" color="#000080">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1.<span style="font-weight: normal; font-style: normal; font-variant: normal">&nbsp;&nbsp;&nbsp;&nbsp;
        </span> Income&nbsp; : Less than 75,000/- </font>
        <p><font face="Times New Roman" size="4" color="#000080">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2.<span style="font-weight: normal; font-style: normal; font-variant: normal">&nbsp;&nbsp;&nbsp;&nbsp;
        </span> Age : Above 5 years </font></p>
        <p><font face="Times New Roman" size="4" color="#000080">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3.<span style="font-weight: normal; font-style: normal; font-variant: normal">&nbsp;&nbsp;&nbsp;&nbsp;
        </span> Disability : 40% and above&nbsp; </font></p>
        <p><font face="Times New Roman" size="4" color="#000080">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 4.<span style="font-weight: normal; font-style: normal; font-variant: normal">&nbsp;&nbsp;&nbsp;&nbsp;
        </span> No formal education qualification&nbsp; </font></p>
        <p><font face="Times New Roman" size="4" color="#000080">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 5.<span style="font-weight: normal; font-style: normal; font-variant: normal">&nbsp;&nbsp;&nbsp;&nbsp;
        </span> Residence : Not less than 5 years </font></p>
        <p align="justify">
	<font face="Times New Roman" size="4" color="#000080">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 6.<span style="font-weight: normal; font-style: normal; font-variant: normal">&nbsp;&nbsp;&nbsp;&nbsp;
        </span>If they have got free bus pass means the same should be 
        <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; surrendered to the&nbsp; Directorate of Social Welfare. </font></p>
        <p align="justify">
	<font face="Times New Roman" size="4" color="#000080">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 7.<span style="font-weight: normal; font-style: normal; font-variant: normal">&nbsp;&nbsp;&nbsp;&nbsp;
        </span>Declaration in the Application whether he / she wants to avail 
        <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Free Bus Pass&nbsp; or Traveling Allowance should be submitted.<o:p>
        <br>
&nbsp;</o:p></font></p></td>
      </tr>
      </tbody></table>
    </td>
  </tr>
  <tr>
    <td align="middle" width="788" height="35" >
      <p align="right"><font face="Times New Roman" color="#8D6206"><strong>
      <a href="#Schemes"><font color="#000080" size="4">
	</font></a><font color="#000080" size="4"><a href="Diff%20abled%20scheme.htm"><span style="text-decoration: none">
	<font color="#000080">Back</font></span></a></font></strong></font></p></td>
  </tr>
  <tr>
    <td align="middle" width="788" height="35" >
    <table class="paleBlueRows" bordercolor="#000080" height="132" width="623" border="1" >
      <tbody><tr>
        <td valign="top" width="79" bgcolor="#ffffff" height="48" >
        <p align="left">
	<font face="Times New Roman" color="#000080" size="4"><b>Description of the 
        Scheme</b></font></p></td>
        <td align="left" width="528" height="48" valign="top">
        <p align="justify">
        <br>
	<font face="Times New Roman" color="#800000" size="4">
        <a name="21. SUPPLY OF RADIO TO THE BLIND PERSONS">21. SUPPLY OF RADIO 
        TO THE BLIND PERSONS</a></font></p></td>
      </tr>
      <tr>
        <td valign="top" width="79" bgcolor="#ffffff" height="38" >
        <font face="Times New Roman" color="#000080" size="4"><b>Benefits</b></font></td>
        <td width="528" height="38" valign="top">
        <font face="Times New Roman" color="#000080" size="4">One Radio to the Blind 
        person for recreation</font></td>
      </tr>
      <tr>
        <td valign="top" width="79" bgcolor="#ffffff" height="133" >
        <font face="Times New Roman" color="#000080" size="4"><b>Eligibility</b></font></td>
        <td width="528" height="133">
        <p class="MsoBodyText" style="margin-left:225.0pt;text-indent:-225.0pt">
        <font face="Times New Roman" color="#000080" size="4">
        <span style="font-weight:normal">1. Income:&nbsp; Less than 75,000/-</span></font></p>
        <p class="MsoBodyText" style="margin-left:225.0pt;text-indent:-225.0pt">
        <font face="Times New Roman" color="#000080" size="4">
        <span style="font-weight:normal">2. Disability: 40% and above</span></font></p>
        <p class="MsoBodyText" style="margin-left:225.0pt;text-indent:-225.0pt">
        <font face="Times New Roman" color="#000080" size="4">
        <span style="font-weight:normal">3.Residence: Not less than 5&nbsp; years</span></font></p></td>
      </tr>
    </tbody></table>
    </td>
  </tr>
  <tr>
    <td width="788" height="1" >
      <p align="right"><font face="Times New Roman" color="#8D6206"><strong>
      <a href="#Schemes"><font color="#000080" size="4">
	</font></a><font color="#000080" size="4"><a href="Diff%20abled%20scheme.htm"><span style="text-decoration: none">
	<font color="#000080">Back</font></span></a></font></strong></font></p><div align="center">
      <center>
    <p align="right">&nbsp;</p>
    <table class="paleBlueRows" border="1" cellspacing="1" bordercolor="#000080" width="100%" id="AutoNumber2" bordercolorlight="#000080" bordercolordark="#000080">
      <tbody><tr>
        <td width="100%" style="border-style:solid; border-width:1px; ">
        <h2><font face="Times New Roman" color="#000080" size="4">HOMES/SPECIAL 
	SCHOOLS FOR THE DIFFERENTLY ABLED PERSON</font></h2>
        <p class="MsoNormal" align="center" style="margin-left:225.0pt;text-align:center;
text-indent:-225.0pt"><font face="Bookman Old Style" color="#000080" size="4"><u>
        <span style="text-decoration: none; font-family: Times New Roman">&nbsp;</span></u></font></p>
        <p class="MsoNormal" style="margin-left:225.0pt;text-indent:-225.0pt" align="left">
        <font face="Bookman Old Style" color="#000080" size="4">
        <span style="font-family:&quot;Times New Roman&quot;">1. SPECIAL SCHOOL 
	FOR VISUALLY HANDICAPPED &amp; HEARING IMPAIRED, </span></font></p>
        <p class="MsoNormal" style="margin-left:225.0pt;text-indent:-225.0pt" align="left">
        <font face="Bookman Old Style" color="#000080">
	<span style="font-family:&quot;Times New Roman&quot;"><font size="4">&nbsp; 
	PONDICHERRY AND KARAIKAL</font></span></font><font face="Bookman Old Style" color="#000080" size="4"><span style="font-family:&quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
	&nbsp;</span></font></p>
        <p class="MsoNormal" style="margin-left:225.0pt;text-indent:-225.0pt" align="justify">
        <font face="Times New Roman" color="#000080" size="4">
        Benefits available : Special education upto 10<sup>th</sup> std.&nbsp; 
	Free of cost with free board and lodging.</font></p>
        <p class="MsoNormal" style="margin-left:225.0pt;text-indent:-225.0pt">
        <font face="Times New Roman" color="#000080" size="4">
        Eligibility&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
	:&nbsp; 1. Income limit: Nil</font></p>
        <p class="MsoNormal" style="margin-left:225.0pt;text-indent:-225.0pt">
        <font face="Times New Roman" color="#000080" size="4">
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
	&nbsp;2. Age: 5-10 years</font></p>
        <p class="MsoNormal" style="margin-left:225.0pt;text-indent:-225.0pt">
        <font face="Times New Roman" color="#000080" size="4">
      
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
	&nbsp;3. Disability: Deaf &amp; Dumb, Blind only.</font></p>
        <p class="MsoNormal" style="margin-left:225.0pt;text-indent:-225.0pt">
        <font face="Times New Roman" color="#000080" size="4">
       
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
	&nbsp;4. Residence:&nbsp; Not compulsory</font></p>
        <p class="MsoNormal" style="margin-left:225.0pt;text-indent:-225.0pt">
        <font face="Bookman Old Style" color="#000080" size="4">
        <span style="font-family:&quot;Times New Roman&quot;">&nbsp;</span></font></p>
        <p class="MsoNormal" style="margin-left:225.0pt;text-indent:-225.0pt">
        <font face="Bookman Old Style" color="#000080" size="4">
        <span style="font-family:&quot;Times New Roman&quot;">2.&nbsp; HOME FOR 
	MENTALLY RETARDED CHILDREN, PONDICERRY&nbsp;</span></font></p>
        <p class="MsoNormal" style="margin-left:225.0pt;text-indent:-225.0pt" align="justify">
        <font face="Times New Roman" color="#000080" size="4">   Benefits 
	available : Rehabilitation of Mentally retarded children with special 
	education, free board &amp; lodging.</font></p>
        <p class="MsoNormal" style="margin-left:225.0pt;text-indent:-225.0pt">
        <font face="Times New Roman" color="#000080" size="4">
       
        Eligibility&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp; 
	1. Income limit: Nil</font></p>
        <p class="MsoNormal" style="margin-left:225.0pt;text-indent:-225.0pt">
        <font face="Times New Roman" color="#000080" size="4">
        
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
	2. Age: 5-15 years</font></p>
        <p class="MsoNormal" style="margin-left:225.0pt;text-indent:-225.0pt">
        <font face="Times New Roman" color="#000080" size="4">
       
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
	3. Disability : Mentally <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; retarded&nbsp;&nbsp; 
	only</font></p>
        <p class="MsoNormal" style="margin-left:225.0pt;text-indent:-225.0pt">
        <font face="Times New Roman" color="#000080" size="4">
       
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
	4. Residence : Not compulsory</font></p>
        <p class="MsoNormal" style="margin-left:225.0pt;text-indent:-225.0pt">
        <font face="Bookman Old Style" color="#000080" size="4">
        <span style="font-family:&quot;Times New Roman&quot;">&nbsp;</span></font></p>
       
        <p class="MsoNormal" style="margin-left:225.0pt;text-indent:-225.0pt">
        <font face="Times New Roman" color="#000080" size="4">
        Benefits available : To ensure welfare and rehabilitation of the&nbsp; 
	blind&nbsp; Adult through vocational training&nbsp; with&nbsp; free&nbsp; 
	board and lodging.&nbsp;</font></p>
        <p class="MsoNormal" style="margin-left:225.0pt;text-indent:-225.0pt">
        <font face="Times New Roman" color="#000080" size="4">
        
        Eligibility&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp; 
	1. Income limit: Nil</font></p>
        <p class="MsoNormal" style="margin-left:225.0pt;text-indent:-225.0pt">
        <font face="Times New Roman" color="#000080" size="4">
        
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2. 
	Age: above 18 years</font></p>
        <p class="MsoNormal" style="margin-left:225.0pt;text-indent:-225.0pt">
        <font face="Times New Roman" color="#000080" size="4">
      
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3. 
	Disability: 100%</font></p>
        <p class="MsoNormal" style="margin-left:225.0pt;text-indent:-225.0pt">
        <font face="Times New Roman" color="#000080" size="4">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4. 
	Residence: Not Compulsory</font></p>
        <p class="MsoBodyText" style="text-indent: -225.0pt; margin-left: 225.0pt">
        <font face="Times New Roman" color="#000080" size="4">
        <span style="font-weight:normal">&nbsp;</span><span style="font-weight: 700">OTHER&nbsp; 
	SCHEMES</span></font></p>
        <p class="MsoBodyText" style="text-indent: -225.0pt; margin-left: 225.0pt">
        <font face="Times New Roman" color="#000080" size="4">
        <span style="font-weight: 700">1.GRAMIN&nbsp; PUNARVAS&nbsp; YOJANA</span></font></p>
        <p class="MsoBodyText" style="text-indent: -225.0pt; margin-left: 225.0pt">
        <font face="Times New Roman" color="#000080" size="4">
        <span style="font-weight:normal">&nbsp;</span></font></p>
        <p class="MsoBodyText" style="text-align:justify;text-indent:.5in">
        <font face="Times New Roman" color="#000080" size="4">
        <span style="font-weight:normal">This is centrally&nbsp; sponsored&nbsp; 
	Scheme&nbsp; under&nbsp; which a&nbsp; Composite&nbsp; Fitment&nbsp;&nbsp; 
	Centre&nbsp;&nbsp; already&nbsp;&nbsp; established&nbsp; at&nbsp;&nbsp; 
	No.89A,&nbsp; 4th Cross, Jawahar Nagar, Puducherry Ph-0413 2203885.&nbsp; 
	This Centre&nbsp;&nbsp; functioning&nbsp;&nbsp; under the&nbsp; Control 
	of&nbsp; Directorate of Social Welfare, Puduchery. </span>
        </font></p>
        <p class="MsoBodyText" style="text-align:justify">
        <font face="Times New Roman" color="#000080" size="4">
        <span style="font-weight:normal">Benefits available&nbsp; to Differently 
	abled person&nbsp; persons:</span></font></p>
        <p class="MsoBodyText" style="text-indent: -.25in; margin-left: .75in" align="justify">
        <font color="#000080" size="4"><span style="font-weight: normal">
        <font face="Times New Roman">1.</font><span style="font-style: normal; font-variant: normal; font-weight: normal; font-family: Times New Roman">&nbsp;&nbsp;</span></span><font face="Times New Roman"><span style="font-weight:normal">To&nbsp; 
	provide medical&nbsp; Certificates to&nbsp; eligible&nbsp; Differently 
	abled person&nbsp; persons.</span></font></font></p>
        <p class="MsoBodyText" style="text-indent: -.25in; margin-left: .75in" align="justify">
        <font color="#000080" size="4"><span style="font-weight: normal">
        <font face="Times New Roman">2.</font><span style="font-style: normal; font-variant: normal; font-weight: normal; font-family: Times New Roman">&nbsp;&nbsp;</span></span><font face="Times New Roman"><span style="font-weight:normal">To 
	provide, supply, fitment and repair&nbsp; of assistive devices and to 
	extend&nbsp; rehabilitation&nbsp; services to needy Differently abled 
	person&nbsp; persons.</span></font></font></p>
        <p class="MsoBodyText">
	<font face="Times New Roman" color="#000080" size="4">
        <span style="font-weight:normal">&nbsp;</span></font></p>
        <p class="MsoBodyText">
	<font face="Times New Roman" color="#000080" size="4">
        <span style="font-weight: 700">2. NATIONAL&nbsp; PROGRAMME&nbsp; FOR&nbsp; 
	REHABILITATION&nbsp; OF PERSONS WITH&nbsp; DISABILITIES</span></font></p>
        <p class="MsoBodyText" align="justify">
        <font face="Times New Roman" color="#000080" size="4">
        <span style="font-weight:normal">&nbsp;This&nbsp; is a Centrally sponsored&nbsp; 
	scheme thorough&nbsp; which intensive&nbsp; rehabilitation&nbsp;&nbsp; 
	services would be provided&nbsp; at Village, Block, District and State 
	Level. The Govt. of India&nbsp; has already&nbsp; released&nbsp; 12.5 
	lakhs&nbsp; for implementing the&nbsp; Scheme.&nbsp;&nbsp; </span>
        </font></p>
        <p class="MsoBodyText" style="text-align: justify; text-indent: -225.0pt; margin-left: 225.0pt">
        <font face="Times New Roman" color="#000080" size="4">
        <span style="font-weight:normal">&nbsp;</span></font></p>
        </td>
      </tr>
      </tbody></table>
      </center>
    </div>
    </td>
  </tr>
  </tbody></table>

  </center>
</div>

  </center>
      </center>
      
      
        

      
      
    <!-- End Middle Column -->
    
    </div>
</div>
</div>
<footer class="w3-container w3-padding-16 w3-light-grey">
    
    <p>Powered by <a href="http://www.rmkec.ac.in/" target="_blank">RMKEC</a></p>
  </footer>
  <script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
    if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
        overlayBg.style.display = "none";
    } else {
        mySidebar.style.display = 'block';
        overlayBg.style.display = "block";
    }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
    overlayBg.style.display = "none";
}

// Accordion
function myFunction(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        x.previousElementSibling.className += " w3-theme-d1";
    } else { 
        x.className = x.className.replace("w3-show", "");
        x.previousElementSibling.className = 
        x.previousElementSibling.className.replace(" w3-theme-d1", "");
    }
}

// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>

</body>
</html>