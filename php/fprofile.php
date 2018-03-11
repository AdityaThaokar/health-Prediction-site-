
<!DOCTYPE html>
<html>
	<head>
		<title>Profile
		</title>
		<link rel="icon" type="image/png" href="../images/kisaanlogo.png" sizes="96x96">
		<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="../css/wprofile.css">
		<link rel="stylesheet" type="text/css" href="../css/main.css">
		<link rel="stylesheet" type="text/css" href="../css/index.css">
        <script type="text/javascript" src="autocomplete.js"></script>
	</head>
	<body>
	
	<div style="background: #333333 ">
<a href="javascript:" id="return-to-top"><i class="icon-chevron-up"></i></a>

 <div class="header" style="height:70px;background:#4dd0e1; ">
 <p style="font-size:20px;color:white"><i class="fa fa-stethoscope"></i>  MediCare</p>
<ul style="margin-left:1100px;"> 
<li><a href="index.php"><i class="fa fa-home"></i>&nbsp;Home</a></li>
   <li><a href="contact.php"><i class="fa fa-phone"></i>&nbsp;Contact</a></li></div> 
 

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<div class="bg" style="height:auto;"><div id="google_translate_element" style="margin-left:1170px;"></div><br><h2>Patient Profile</h2>
<div class="profile" style="display: flex;flex-direction:row;justify-content: space-around;flex-grow: 1;">
<table  cellpadding="5" style="margin-top: 2%;">
<tr>
<td rowspan="5">
<img src="../images/Wprofile.jpg" width="170px" >
</td>
</table>
<div style="display: flex;flex-direction: column;color: #000000;margin-left: 5%;justify-content: flex-start;flex-grow: 2;">
<?php
include('server.php');
$conn=mysqli_connect("localhost","root","","digital_kisan");
$emailw = $_SESSION['email'];
$sql="select * from farmerdetails where email='$emailw'";

$sel=mysqli_query($conn,$sql) or die(mysql_error()); 

while ($arr=mysqli_fetch_array($sel)) 
{
echo "<h4> Username:  ".$arr['username']."</h4>";
echo "<h4> Email: ".$arr['email']."</h4>";
echo "<h4> Phone: ".$arr['phone']."</h4>";
echo "<h4> Aadhar No.: ".$arr['aadhar']."</h4>";
echo "<h4> Jandhan Id.: ".$arr['jandhan']."</h4>";
echo "<h4> Address: ".$arr['location']."</h4>";
}
?> 
</div>
<div style="display:flex;flex-direction: column;flex-grow: 1; justify-content: space-around;margin-top: 2%;">
<form id="form" action="chat.php"><input  type="submit" value="Chat Room" ></form></div>
</div>
<br><br><br><br><br>
<div class="Contact" id="contact1">
<div class="Contact" id="contact1">
<p style="color:white;">
<img src="../images/toll.png" width="0px"><i class="fa fa-phone"></i>&nbsp;Toll Free 1800-274-3131
<img src="../images/email.png" width="0px"><i class="fa fa-envelope"></i>&nbsp;MediCare@service.com
<img src="../images/franchize.png" width="0px"><i class="fa fa-handshake-o"></i>&nbsp;Franchise
</p>
<h4 align="center">Copyright © 2018 MediCare.com. All rights reserved.</h4>
</div> </div>
	</body>
</html>