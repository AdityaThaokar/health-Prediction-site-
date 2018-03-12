<?php
include('server.php');
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/index.css">
<link rel="stylesheet" type="text/css" href="../css/login.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
<link rel="icon" type="image/png" href="../images/kisaanlogo.png" sizes="96x96">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<title>Predict</title>
<script type="text/javascript" src="autocomplete.js"></script>
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
</head>
<body> 
<div style="background: #333333 ">
<a href="javascript:" id="return-to-top"><i class="icon-chevron-up"></i></a>


 <div class="header" style="height:70px;background:#4dd0e1; ">
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
 </div> <br><br>
  
  <div class="container" style="background-color: white;border-radius: 5px;">
  <h2>Enter Your Symtoms</h2><br>
  <div class="form-group" id="symp" data-live-search="true">
  <!--options -->
  <label for="sel1">Select Symptoms:</label><select class="form-control" id="sel1"> <option>Pain</option>    <option>Fatigue</option>    <option>Mental Disorder</option>    <option>Depression</option>        <option>Headache</option>    <option>Infection</option>    <option>Anxiety</option>    <option>Nausea</option>        <option>Common Cold</option>    <option>Dizziness</option>    <option>Swelling</option>    <option>Allergy</option>        <option>Diarrhea</option>    <option>Itch</option>    <option>Vomitting</option>    <option>Constipation</option>      <option>Fever</option>    <option>Confusion</option>    <option>Cough</option>    <option>Stress</option>      <option>Muscle Pain</option>    <option>Bleeding</option>    <option>Chest Pain</option>    <option>Cramp</option>      <option>Back Pain</option>    <option>Weight Loss</option>    <option>Weight Gain</option>    <option>Hair Loss</option>  </select>

  <label for="sel1">Select Symptoms:</label><select class="form-control" id="sel2"> <option>Pain</option>    <option>Fatigue</option>    <option>Mental Disorder</option>    <option>Depression</option>        <option>Headache</option>    <option>Infection</option>    <option>Anxiety</option>    <option>Nausea</option>        <option>Common Cold</option>    <option>Dizziness</option>    <option>Swelling</option>    <option>Allergy</option>        <option>Diarrhea</option>    <option>Itch</option>    <option>Vomitting</option>    <option>Constipation</option>      <option>Fever</option>    <option>Confusion</option>    <option>Cough</option>    <option>Stress</option>      <option>Muscle Pain</option>    <option>Bleeding</option>    <option>Chest Pain</option>    <option>Cramp</option>      <option>Back Pain</option>    <option>Weight Loss</option>    <option>Weight Gain</option>    <option>Hair Loss</option>  </select>

  <label for="sel1">Select Symptoms:</label><select class="form-control" id="sel3"> <option>Pain</option>    <option>Fatigue</option>    <option>Mental Disorder</option>    <option>Depression</option>        <option>Headache</option>    <option>Infection</option>    <option>Anxiety</option>    <option>Nausea</option>        <option>Common Cold</option>    <option>Dizziness</option>    <option>Swelling</option>    <option>Allergy</option>        <option>Diarrhea</option>    <option>Itch</option>    <option>Vomitting</option>    <option>Constipation</option>      <option>Fever</option>    <option>Confusion</option>    <option>Cough</option>    <option>Stress</option>      <option>Muscle Pain</option>    <option>Bleeding</option>    <option>Chest Pain</option>    <option>Cramp</option>      <option>Back Pain</option>    <option>Weight Loss</option>    <option>Weight Gain</option>    <option>Hair Loss</option>  </select>

  <label for="sel1">Select Symptoms:</label><select class="form-control" id="sel4"> <option>Pain</option>    <option>Fatigue</option>    <option>Mental Disorder</option>    <option>Depression</option>        <option>Headache</option>    <option>Infection</option>    <option>Anxiety</option>    <option>Nausea</option>        <option>Common Cold</option>    <option>Dizziness</option>    <option>Swelling</option>    <option>Allergy</option>        <option>Diarrhea</option>    <option>Itch</option>    <option>Vomitting</option>    <option>Constipation</option>      <option>Fever</option>    <option>Confusion</option>    <option>Cough</option>    <option>Stress</option>      <option>Muscle Pain</option>    <option>Bleeding</option>    <option>Chest Pain</option>    <option>Cramp</option>      <option>Back Pain</option>    <option>Weight Loss</option>    <option>Weight Gain</option>    <option>Hair Loss</option>  </select><br>
  <input type="button" name="find" value="Find Disease"></input>
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
 </div> </div></ul></div></div></body>

 <script>
   function create(param) {
    var s= "";
    for(var i = 0; i < param; i++) {
        s+= ''; //Create one textbox as HTML
    }
    document.getElementById("symp").innerHTML=s;
}

 </script>
</html>





