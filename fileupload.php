
<?php
// Start the session
session_start();
?>
<?php

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
	  
	  
	  // image file directory
  	$target = "images/".basename($_FILES['image']['name']);
	
	// Create database connection
  $db = mysqli_connect("localhost", "root", "", "silenthorn");
	
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// Get text
  	$text = $_POST['image_text'];
	

  	$sql = "INSERT INTO images (image,text) VALUES ('$image', '$text')";
  	// execute query
  	mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }
  
?>
<!DOCTYPE html>
<html>
<title>Medical Track</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
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
form{
   	width: 50%;
   	margin: 20px auto;
   }
   form div{
   	margin-top: 5px;
   }
   #img_div{
   	width: 80%;
   	padding: 5px;
   	margin: 15px auto;
   	border: 1px solid #cbcbcb;
   }
   #img_div:after{
   	content: "";
   	display: block;
   	clear: both;
   }
   img{
   	float: left;
   	margin: 5px;
   	width: 300px;
   	height: 140px;
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
	<div class="w3-col m8">
	<div class="w3-container w3-card w3-white w3-round w3-margin" id="content">
   <center>     <h6><font color="#000080" face="Times New Roman" size="5"><strong>
Medical Documents</center></strong> </font></h6></center>


  <form method="POST" action="fileupload.php" enctype="multipart/form-data">
  	<input type="hidden" name="size" value="1000000">
  	<div>
  	  <input type="file" name="image">
  	</div>
  	<div>
      <textarea 
      	id="text" 
      	cols="40" 
      	rows="4" 
      	name="image_text" 
      	placeholder="Say something about this file..."></textarea>
  	</div>
  	<div>
  		<button type="submit" name="upload">POST</button>
  	</div>
  </form>
  <?php
    $db=mysqli_connect("localhost","root","","silenthorn");
	$sql="SELECT * FROM images";
    $result=mysqli_query($db,$sql);	
    while ($row = mysqli_fetch_array($result)) {
      echo "<div id='img_div'>";
      	echo "<img src='images/".$row['image']."' >";
      	echo "<p>".$row['text']."</p>";
      echo "</div>";
    }
  ?>
  
</div>
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