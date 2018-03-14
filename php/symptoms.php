<!DOCTYPE html>
<html>
<head>
    <title>Symptoms</title>
    <link rel="stylesheet" type="text/css" href="../css/login.css">
<link rel="stylesheet" type="text/css" href="../css/index.css">
<link rel="stylesheet" type="text/css" href="../css/animate.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
<link rel="icon" type="image/png" href="../images/kisaanlogo.png" sizes="96x96">
<script type="JavaScript"></script>
    <script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="typeahead.js"></script>
  <style>
	.container{
	  width:auto;
	  display:inline-block;
	  vertical-align:middle;
	  margin-left:auto;
	  margin-right:auto;
	  padding:20px;
	  border-radius:5px;
	  background-color:rgba(255,255,255,0.8);	  
  }
 #label {
	 font-size:30px;
 }
 .container input[type=text] {
	width:500px;
	padding:10px;
	font-size:15px;
	border-radius:5px;
	border-style:none;
	background:none;
	border-bottom-style:solid;
	border-bottom-color:#4dd0e1;
 }
 .container input[type=submit] {
	 width:auto;
	padding:7px;
	font-size:13px;
	border-radius:5px;
	border:none;
	color:gray;
	font-family: Roboto;
	text-align: center;
	margin:auto;
    display:block;
	background-color:white;
 }
 .container input[type=submit]:hover{
	color:white;
	background-color:#4dd0e1;

}
  </style>  
</head>
<body>
  <div style="background: linear-gradient(rgba(26,26,26,0.2),rgba(26,26,26,0.7)),url('../images/background10.jpg ');background-size:contain,cover;background-attachment:fixed;">
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
 <ul style="margin-left:1050px;"> 
  <li><a href="index.php"><i class="fa fa-home"></i>&nbsp;Home</a></li>
   <li><a href="contact.php"><i class="fa fa-phone"></i>&nbsp;Contact</a></li>
   <li><a href="login.php"><i class="fa fa-sign-in"></i>&nbsp;logout</a></li>
 </div>
<div class="heading animated fadeInDown">
 <p id="label" align="center">Enter the symptoms</p></div><br/> 
  <center>
  <div class="container animated zoomIn">
    <form method="POST" action="find.php">
      <input type="text" placeholder="Enter first symptom "name="txtCountry" id="txtCountry" class="typeahead"/>
      <br><br>
       <input type="text" placeholder="Enter second symptom "name="txtCountry" id="txtCountry1" class="typeahead"/>
      <br><br>
       <input type="text" placeholder="Enter third symptom "name="txtCountry" id="txtCountry2" class="typeahead"/>
      <br><br>
       <input type="text" placeholder="Enter fourth symptom "name="txtCountry" id="txtCountry3" class="typeahead"/>
      <br><br>
      <input type="submit" placeholder="Enter fifth symptom "name="find" value="Find The Disease">
    </form>
  </div>
  </center>
<br><br><br><br><br><br><br><br><br>
  <div class="Contact" id="contact1">
<p style="color:white;">
<img src="../images/toll.png" width="0px"><i class="fa fa-phone"></i>&nbsp;Toll Free 1800-274-3131
<img src="../images/email.png" width="0px"><i class="fa fa-envelope"></i>&nbsp;MediCare@service.com
<img src="../images/franchize.png" width="0px"><i class="fa fa-handshake-o"></i>&nbsp;Franchise
</p>
<h4 align="center">Copyright © 2018 MediCare.com. All rights reserved.</h4>
</div>
</body>
<script>
    $(document).ready(function () {
        $('#txtCountry').typeahead({
            source: function (query, result) {
                $.ajax({
                    url: "auto.php",
                    data: 'query=' + query,            
                    dataType: "json",
                    type: "POST",
                    success: function (data) {
                    result($.map(data, function (item) {
                    return item;
                        }));
                    }
                });
            }
        });

        $('#txtCountry1').typeahead({
            source: function (query, result) {
                $.ajax({
                    url: "auto.php",
                    data: 'query=' + query,            
                    dataType: "json",
                    type: "POST",
                    success: function (data) {
                    result($.map(data, function (item) {
                    return item;
                        }));
                    }
                });
            }
        });

$('#txtCountry2').typeahead({
            source: function (query, result) {
                $.ajax({
                    url: "auto.php",
                    data: 'query=' + query,            
                    dataType: "json",
                    type: "POST",
                    success: function (data) {
                    result($.map(data, function (item) {
                    return item;
                        }));
                    }
                });
            }
        });

$('#txtCountry3').typeahead({
            source: function (query, result) {
                $.ajax({
                    url: "auto.php",
                    data: 'query=' + query,            
                    dataType: "json",
                    type: "POST",
                    success: function (data) {
                    result($.map(data, function (item) {
                    return item;
                        }));
                    }
                });
            }
        });

    });
</script>
</html>