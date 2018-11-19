

<?php
// Start the session
session_start();
?>
<?php
$message="";
if(count($_POST)>0) {
	$conn = mysqli_connect("localhost","root","","silenthorn");
	$result = mysqli_query("SELECT username,password FROM user WHERE username='" . $_POST["username"] . "' and password = '". $_POST["password"]."'");
	$count  = mysqli_num_rows($result);
	if($count==0) {
		header('location:dashboard2.php');
	} else {
		header('location:dashboard2.php');
	}
}
?>


<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body{
	font-family: calibri;
}
.tblLogin {
	border: #95bee6 1px solid;
    background: #d1e8ff;
    border-radius: 4px;
	margin-top:+70px;
}
.tableheader { font-size: 24px; }
.tableheader td { padding: 20px; }
.tablerow td { text-align:center; }
.message {
	color: #FF0000;
	font-weight: bold;
	text-align: center;
	width: 100%;
}
.login-input {
	border: #CCC 1px solid;
    padding: 10px 20px;
}
.btnSubmit {
	padding: 10px 20px;
    background: #2c7ac5;
    border: #d1e8ff 1px solid;
    color: #FFF;
}
#banner_container {
    position: relative;
    height: 159px;
    clear: both;
    padding-top: 1px;
	<img
		src="pdf_icon.gif" width="128" height="128">
}
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
</style><head>
<body>
<!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <div id="banner_container">
    <div  class="banner2" style="background: #000">
  		<div class="banner_text">
    	<p style="padding-bottom:-20px;">     _SILENTHORN_<br><br>Together we can do much...!</p></div>
		</div>
</div>
  </header>



<?php
// Set session variables

if(isset($_POST['username'])){
	$_SESSION['username'] = $_POST['username'];
}
if(isset($_POST['password'])){
	$_SESSION['password']= $_POST['password'];
}


?>


<form name="frmUser" method="post" action="" style="margin-top ="-10px">
	
		<table border="0" cellpadding="10" cellspacing="1" width="500" align="center" class="tblLogin">
			<tr class="tableheader">
			<td align="center" colspan="2">Enter Login Details</td>
			</tr>
			<tr class="tablerow">
			<td>
			<input type="text" name="username" placeholder="User Name" class="login-input"></td>
			</tr>
			<tr class="tablerow">
			<td>
			<input type="password" name="password" placeholder="Password" class="login-input"></td>
			</tr>
			<tr class="tableheader">
			<td align="center" colspan="2"><input type="submit" name="submit" value="Submit" class="btnSubmit"></td>
			</tr>
			<tr>
			<td><a href="changepassword.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small w3-right">Forgot Password</a></td>
			</tr>
		</table>
		</form>
		
</body>
</html>