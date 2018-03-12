<?php
include('server.php');
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/index.css">
<link rel="stylesheet" type="text/css" href="../css/login.css">
<link rel="stylesheet" type="text/css" href="../css/animate.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
<link rel="icon" type="image/png" href="../images/kisaanlogo.png" sizes="96x96">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<title>Predict</title>
<style>
.form-group input[type=button]
{
	width:200px;
	padding:5px;
	font-size:13px;
	border-radius:1px;
	border:none;
	font-family: Roboto;
	text-align: center;
	margin:auto;
    display:block;

}
.form-group input[type=button]:hover{
	color:white;
	background-color:#4dd0e1;

}
.container{
	-webkit-animation-delay:1s;
}
</style>
</head>
<body> 
<div style="background: linear-gradient(rgba(26,26,26,0.2),rgba(26,26,26,0.7)),url('../images/background1.jpg ');background-size:contain,cover;background-attachment:fixed;">
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
 </div> <br>
  <div class="a animated fadeInDown"><h2 align="center" style="font-family:Roboto;color:white">Enter Your Symtoms</h2><br></div>
  <div class="container animated zoomIn" style="background-color:rgba(255,255,255,0.5);border-radius: 5px;width:600px;">
  
  <div align="center" style="font-family:Roboto;color:#151719;font-size:14px;font-weight:bold" class="form-group" id="symp" data-live-search="true">
  <!--options --><br>
  <label for="sel1" >Select Symptoms:</label><select style="width:500px;font-size:13px;color:#4286f4;font-weight:bold"class="form-control" id="sel1"> <option>Pain</option>    <option>Fatigue</option>    <option>Mental Disorder</option>    <option>Depression</option>        <option>Headache</option>    <option>Infection</option>    <option>Anxiety</option>    <option>Nausea</option>        <option>Common Cold</option>    <option>Dizziness</option>    <option>Swelling</option>    <option>Allergy</option>        <option>Diarrhea</option>    <option>Itch</option>    <option>Vomitting</option>    <option>Constipation</option>      <option>Fever</option>    <option>Confusion</option>    <option>Cough</option>    <option>Stress</option>      <option>Muscle Pain</option>    <option>Bleeding</option>    <option>Chest Pain</option>    <option>Cramp</option>      <option>Back Pain</option>    <option>Weight Loss</option>    <option>Weight Gain</option>    <option>Hair Loss</option>  </select>

  <label for="sel2">Select Symptoms:</label><select style="width:500px;font-size:13px;color:#b77f26;font-weight:bold"class="form-control" id="sel2"> <option>Pain</option>    <option>Fatigue</option>    <option>Mental Disorder</option>    <option>Depression</option>        <option>Headache</option>    <option>Infection</option>    <option>Anxiety</option>    <option>Nausea</option>        <option>Common Cold</option>    <option>Dizziness</option>    <option>Swelling</option>    <option>Allergy</option>        <option>Diarrhea</option>    <option>Itch</option>    <option>Vomitting</option>    <option>Constipation</option>      <option>Fever</option>    <option>Confusion</option>    <option>Cough</option>    <option>Stress</option>      <option>Muscle Pain</option>    <option>Bleeding</option>    <option>Chest Pain</option>    <option>Cramp</option>      <option>Back Pain</option>    <option>Weight Loss</option>    <option>Weight Gain</option>    <option>Hair Loss</option>  </select>

  <label for="sel3">Select Symptoms:</label><select style="width:500px;font-size:13px;color:#84190f;font-weight:bold"class="form-control" id="sel3"> <option>Pain</option>    <option>Fatigue</option>    <option>Mental Disorder</option>    <option>Depression</option>        <option>Headache</option>    <option>Infection</option>    <option>Anxiety</option>    <option>Nausea</option>        <option>Common Cold</option>    <option>Dizziness</option>    <option>Swelling</option>    <option>Allergy</option>        <option>Diarrhea</option>    <option>Itch</option>    <option>Vomitting</option>    <option>Constipation</option>      <option>Fever</option>    <option>Confusion</option>    <option>Cough</option>    <option>Stress</option>      <option>Muscle Pain</option>    <option>Bleeding</option>    <option>Chest Pain</option>    <option>Cramp</option>      <option>Back Pain</option>    <option>Weight Loss</option>    <option>Weight Gain</option>    <option>Hair Loss</option>  </select>

  <label for="sel4">Select Symptoms:</label><select style="width:500px;font-size:13px;color:#3eaa2e;font-weight:bold"class="form-control" id="sel4"> <option>Pain</option>    <option>Fatigue</option>    <option>Mental Disorder</option>    <option>Depression</option>        <option>Headache</option>    <option>Infection</option>    <option>Anxiety</option>    <option>Nausea</option>        <option>Common Cold</option>    <option>Dizziness</option>    <option>Swelling</option>    <option>Allergy</option>        <option>Diarrhea</option>    <option>Itch</option>    <option>Vomitting</option>    <option>Constipation</option>      <option>Fever</option>    <option>Confusion</option>    <option>Cough</option>    <option>Stress</option>      <option>Muscle Pain</option>    <option>Bleeding</option>    <option>Chest Pain</option>    <option>Cramp</option>      <option>Back Pain</option>    <option>Weight Loss</option>    <option>Weight Gain</option>    <option>Hair Loss</option>  </select><br>
  <input type="button" name="disp" value="Display selected Symptoms" onclick="display()">
  <p id="demo"></p>
  <input type="button" name="find" style="background-color:#4dd0e1 "value="Find Disease" ></input>
</div> <br>
  </div>
  <br><br><br><br><br>
 <div class="Contact" id="contact1">
<p style="color:white;">
<img src="../images/toll.png" width="0px"><i class="fa fa-phone"></i>&nbsp;Toll Free 1800-274-3131
<img src="../images/email.png" width="0px"><i class="fa fa-envelope"></i>&nbsp;MediCare@service.com
<img src="../images/franchize.png" width="0px"><i class="fa fa-handshake-o"></i>&nbsp;Franchise
</p>
<h4 >Copyright © 2018 MediCare.com. All rights reserved.</h4>
</div>
 </div> </div></ul></div></div>
  <script type="text/javascript">
    var sel1; var sel2; var sel3 ;var sel4;
    var text1; var text2; var text3; var text4;
   function display(){
      sel1 = document.getElementById("sel1");
      text1 = sel1.options[sel1.selectedIndex].text; 
      sel2 = document.getElementById("sel2");
      text2 = sel2.options[sel2.selectedIndex].text; 
      sel3 = document.getElementById("sel3");
      text3 = sel3.options[sel3.selectedIndex].text; 
      sel4 = document.getElementById("sel4");
      text4 = sel4.options[sel4.selectedIndex].text; 
     document.getElementById("demo").innerHTML = text1+","+text2+","+text3+","+text4;
   }
 </script>
</body>
</html>





