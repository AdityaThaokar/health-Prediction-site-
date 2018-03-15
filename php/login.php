<?php
 include('server.php');
?> 
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/login.css">
<link rel="stylesheet" type="text/css" href="../css/index.css">
<link rel="stylesheet" type="text/css" href="../css/animate.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
<link rel="icon" type="image/png" href="../images/kisaanlogo.png" sizes="96x96">
<script type="JavaScript"></script>
<title>Login</title>
</head>
<style>
.login input[type=text]
{
	width:100%;
	padding:10px;
	font-size:15px;
	border-radius:5px;
	border-style:none;
	background:white;
}

</style>
<body>
<div style="background: linear-gradient(rgba(26,26,26,0.2),rgba(26,26,26,0.7)),url('../images/background6.jpg ');background-size:contain,cover;background-attachment:fixed;">
<a href="javascript:" id="return-to-top"><i class="icon-chevron-up"></i></a>

  <div class="header animated fadeInUp" style="height:70px;background:transparent; ">
 <p style="font-size:20px;color:white"><i class="fa fa-stethoscope"></i>  MediCare</p>
 <div id="google_translate_element" style="margin-left:1170px;"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
 <ul style="margin-left:1100px;"> 
  <li><a href="index.php"><i class="fa fa-home"></i>&nbsp;Home</a></li>
   <li><a href="contact.php"><i class="fa fa-phone"></i>&nbsp;Contact</a></li>
 </div> 
 <div style="margin-left: 10%;"><?php include('errors.php'); ?></div>
 <div class="flexcontainer">
 <div class="login animated fadeInDown">
     <p align="center"> Sign in as Patient </p>
     <form id="form" name="fForm" action="login.php" onsubmit="return validateFormf()" method="post">
     <input type="text" placeholder="Enter Email Id" name="email"><br><br>
	 <input type="password" placeholder="Enter password" name="password"><br><br>
     <input  type="submit" value="login" name="login">
   </form>
   <div class="footr">
     <p>New user ? Click <a href="./PSignup.php">here</a> to create an account</p>  
	 </div>	
	 </div>

    <div class="login animated fadeInUp">
     <p align="center"> Sign in as Doctor </p>
     <form id="form" name="fForm" action="login.php" onsubmit="return validateFormf()" method="post">
     <input type="text" placeholder="Enter Email Id" name="emailw"><br><br>
   <input type="password" placeholder="Enter password" name="passwordw"><br><br>
     <input  type="submit" value="login" name="loginw">
   </form>
   <div class="footr">
     <p>New user ? Click <a href="./DSignup.php">here</a> to create an account</p>  
   </div> 
   </div>

 </div><br><br><br><br><br><br><br><br><br><br>
<div class="Contact" id="contact1">
<p style="color:white;">
<img src="../images/toll.png" width="0px"><i class="fa fa-phone"></i>&nbsp;Toll Free 1800-274-3131
<img src="../images/email.png" width="0px"><i class="fa fa-envelope"></i>&nbsp;MediCare@service.com
<img src="../images/franchize.png" width="0px"><i class="fa fa-handshake-o"></i>&nbsp;Franchise
</p>
<h4 >Copyright © 2018 MediCare.com. All rights reserved.</h4>
</div></body>
 </div>

</html>