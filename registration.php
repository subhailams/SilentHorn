<!DOCTYPE html>

<html lang="en-US"><head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

<style>
@import url(http://fonts.googleapis.com/css?family=Laila:400,700);

html, body, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, img, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, b, u, i, center, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td, article, aside, canvas, details, embed, figure, figcaption, footer, header, hgroup, menu, nav, output, ruby, section, summary, time, mark, audio, video {
  margin: 0;
  padding: 0;
  border: 0;
  font-size: 100%;
  font: inherit;
  vertical-align: baseline;
  outline: none;
  -webkit-font-smoothing: antialiased;
  -webkit-text-size-adjust: 100%;
  -ms-text-size-adjust: 100%;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  margin-top:1.5in;
}
html { overflow-y: scroll; }
body {
  font-family: Arial, Tahoma, sans-serif;
  background: #e2eef4;
  font-size: 62.5%;
  line-height: 1;
  padding-top: 40px;
}

br { display: block; line-height: 1.6em; } 

input, textarea { 
  -webkit-font-smoothing: antialiased;
  outline: none; 
}

strong, b { font-weight: bold; }
em, i { font-style: italic; }

h1 {
  display: block;
  font-size: 3.1em;
  line-height: 1.45em;
  font-family: 'Laila', serif;
  text-align: center;
  font-weight: bold;
  color: #555;
  text-shadow: 1px 1px 0 #fff;
}


/** form field **/
form {
  display: block;
  margin: 30px;
  overflow: hidden;
  background: #fff;
  border: 1px solid #e4e4e4;
  border-radius: 5px;
  font-size: 0;
}

form > div > label {
  display: block;
  padding: 20px 20px 10px;
  vertical-align: top;
  font-size: 13px;
  font-weight: bold;
  text-transform: uppercase;
  color: #939393;
  cursor: pointer;
}
form > div.switch > label {
  padding: 16px 20px 13px;
}

.col-2, .col-3, .col-4 { 
  border-bottom: 1px solid #e4e4e4;
}

form > div > .col-4 {
  height: 86px;
}

label > input {
  display: inline-block;
  position: relative;
  width: 100%;
  height: 27px;
  line-height: 27px;
  margin: 5px -5px 0;
  padding: 7px 5px 3px;
  border: none;
  outline: none;
  color: #555;
  font-family: 'Helvetica Neue', Arial, sans-serif;
  font-weight: bold;
  font-size: 14px;
  opacity: .6;
  transition: all linear .3s;
}

.col-submit {
  text-align: center;
  padding: 20px;
  background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;

}

label > select {
   
  display: block;
  width: 100%;
  padding: 0;
  color: #555;
  margin: 16px 0 6px;
  font-weight: 500;
  background: transparent;
  border: none;
  outline: none;
  font-family: 'Helvetica Neue', Arial, sans-serif;
  font-size: 14px;
  opacity: .4;
  transition: all linear .3s;
}

label > input:focus, label > select:focus {
  opacity: 1;
}



/** button design based on http://codepen.io/guvootes/pen/eyDAb **/
button {
  width: 100%;
  height: 35px;
  border: none;
  border-radius: 4px;
  margin: 0 0 15px 0;
  font-size: 14px;
  color: #fff;
  font-weight: bold;
  text-shadow: 1px 1px 0 rgba(0,0,0,0.3);
  overflow: hidden;
  outline: none;
}

button.submitbtn {
  background-image: -moz-linear-gradient(#97c16b, #8ab959);
  background-image: -webkit-linear-gradient(#97c16b, #8ab959);
  background-image: linear-gradient(#97c16b, #8ab959);
  border-bottom: 1px solid #648c3a;
  cursor: pointer;
  color: #fff;
}
button.submitbtn:hover {
  background-image: -moz-linear-gradient(#8ab959, #7eaf4a);
  background-image: -webkit-linear-gradient(#8ab959, #7eaf4a);
  background-image: linear-gradient(#8ab959, #7eaf4a);
}
button.submitbtn:active {
  height: 34px;
  border-bottom: 0;
  margin: 1px 0 0 0;
  background-image: -moz-linear-gradient(#7eaf4a, #8ab959);
  background-image: -webkit-linear-gradient(#7eaf4a, #8ab959);
  background-image: linear-gradient(#7eaf4a, #8ab959);
  -moz-box-shadow: inset 0 1px 3px 1px rgba(0, 0, 0, 0.3);
  -webkit-box-shadow: inset 0 1px 3px 1px rgba(0, 0, 0, 0.3);
  box-shadow: inset 0 1px 3px 1px rgba(0, 0, 0, 0.3);
}
html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}

.style87 {
	color: #003366;
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
	
	#cat label{
float:left;
width: 50px;
height:50px;
 font-size: 10px;

}
	
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
.limiter{
	  width: 100%;
  margin: 0 auto;
  margin-top:0.5in;
}
.form-group{
margin-bottom=15px;}

/** responsive design **/
@media(min-width: 850px){
  form > div { display: inline-block; }
  .col-submit { display: block; }
  
  .col-2, .col-3, .col-4 { box-shadow: 1px 1px #e4e4e4; border: none; }
  
  .col-2 { width: 50% }
  .col-3 { width: 33.3333333333% }
  .col-4 { width: 25% }
  
  .col-submit button { width: 30%; margin: 0 auto; }
}
</style>

  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html">
  <title>User Registration Form - Template Monster Demo</title>
  <meta name="author" content="Jake Rocheleau">
  <link rel="shortcut icon" href="http://static.tmimgcdn.com/img/favicon.ico">
  <link rel="icon" href="http://static.tmimgcdn.com/img/favicon.ico">
  <link rel="stylesheet" type="text/css" media="all" href="css/styles.css">
  <link rel="stylesheet" type="text/css" media="all" href="css/switchery.min.css">
  <script type="text/javascript" src="js/switchery.min.js"></script>
</head>

<body>

<!-- Navbar -->
<!--Navgiation Bar -->
<div class="w3-top">
 <div class="w3-bar w3-left-align w3-large">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-black w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large "><i class="fa fa-home w3-margin-right"></i>Home</a>
  
  
  <a href="about.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small w3-right">About Us</a>
  <a href="language.php" class="w3-bar-item w3-button w3-padding"> <div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'en,hi,ml,ta,te', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</a> 
 </div>
</div>

  <div id="wrapper" class="limiter">
  
  <h1>User Registration Form</h1>
  
       
  
  <form method="post" action="dashboard.php">
  <div class="col-2">
    <label>
      Name
      <input placeholder="What is your full name?" id="name" name="name" tabindex="1" type="text" >
    </label>
  </div>
  <div class="col-2">
    <label>
      User Name
      <input type="text" placeholder="enter maximum 4 chars" id="company" name="username" tabindex="2" >
    </label>
  </div>
  
  <div class="col-3">
    <label>
      Email
      <input type="email" placeholder="What is your e-mail address?" id="email" name="email" tabindex="4" >
    </label>
  </div>
  
  <div class="col-3">
    <label>
      Password
      <input type="password" placeholder="enter valid password" id="password" name="password" tabindex="3" >
    </label>
  </div>
  
  <div class="col-3">
    <label>
      PhysicallyChallenged
      <select tabindex="5" name="type" required>
        <option>deaf</option>
        <option>dumb</option>
        <option>blind</option>
		 <option>handicapped</option>
		  <option>others</option>
      </select>
    </label>
  </div>
  
  <div class="col-4">
    <label>
      Personal Description
      <input placeholder="List a few of your primary skills" id="comment" name="comment" tabindex="6">
    </label>
  </div>
  <div class="col-4">
    <label>
      Ongoing schemes
      <input type="text" placeholder="Your ongoing schemes" id="schemes" name="schemes" tabindex="7" >
    </label>
  </div>
  <div class="col-4">
    <label>
      Address
      <input type="text" placeholder="How many years of experience?" id="address" name="address" tabindex="7" >
    </label>
  </div>
  <div class="col-4">
    <label>
      City
      <input type="text" placeholder="Enter your current city" id="city" name="city" tabindex="7" >
    </label>
  </div>
  <div class="col-4">
    <label>
      State
      <input type="text" placeholder="Enter your current state" id="state" name="state" tabindex="7" >
    </label>
  </div>
  <div class="col-4">
    <label>
      Date Of Birth
      <input  type="date" placeholder="MM/DD/YYYY" id="dob" name="dob" tabindex="7" >
    </label>
  </div>
  
<div class="col-4">
    <label>
      Phone Number
      <input type="number" placeholder="enter the best way to reach you" id="phonenumber" name="phonenumber" tabindex="7" >
    </label>
  </div>
  <div class="col-4">
    <label>
      Occupation
      <input placeholder="If working" id="occupation" name="occupation" tabindex="7" >
    </label>
  </div>
 

  
  
<div  id="cat" >
<label>Male<input type="radio" name="option3"  checked value="Cheese"> </label>
<label>Female<input type="radio" name="option3" value="Cheese"> </label>
<label>Others<input type="radio" name="option3" value="Cheese"> </label>
</div>
 
  <div class="col-submit">
    <input type="submit" name="submit" value="Submit" >
  
  
  </div>
  </form>
	<?php
// Set session variables

if(isset($_POST['username'])){
	$_SESSION['username'] = "John";
}



?>
	
	
  
  
  </div>
  
  <br>
  <br>
  <br>
  <br>
<!-- Footer -->
<footer id="myFooter">
    <div class="w3-container w3-theme-l2 w3-padding-32">
      <h4>silenthorn_</h4>
    </div>

    <div class="w3-container w3-theme-l1">
      <p>Powered by rmk</p>
    </div>
  </footer>
 
<script>
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

  
<script type="text/javascript">
var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));

elems.forEach(function(html) {
  var switchery = new Switchery(html);
});
</script>

</body></html>