<!DOCTYPE html>
<html>
<head>
    <title>Bootstrap Autocomplete with Dynamic Data Load using PHP Ajax</title>
    <link rel="stylesheet" type="text/css" href="../css/login.css">
<link rel="stylesheet" type="text/css" href="../css/index.css">
<link rel="stylesheet" type="text/css" href="../css/animate.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
<link rel="icon" type="image/png" href="../images/kisaanlogo.png" sizes="96x96">
<script type="JavaScript"></script>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="typeahead.js"></script>
  <style>
  .typeahead { border: 2px solid #FFF;border-radius: 4px;padding: 8px 12px;max-width: 300px;min-width: 290px;background: rgba(66, 52, 52, 0.5);color: #FFF;}
  .tt-menu { width:300px; }
  ul.typeahead{margin:0px;padding:10px 0px;}
  ul.typeahead.dropdown-menu li a {padding: 10px !important;  border-bottom:#CCC 1px solid;color:#FFF;}
  ul.typeahead.dropdown-menu li:last-child a { border-bottom:0px !important; }
  .bgcolor {max-width: 550px;min-width: 290px;max-height:340px;background:url("world-contries.jpg") no-repeat center center;padding: 100px 10px 130px;border-radius:4px;text-align:center;margin:10px;}
  .demo-label {font-size:1.5em;color: #686868;font-weight: 500;color:#FFF;}
  .dropdown-menu>.active>a, .dropdown-menu>.active>a:focus, .dropdown-menu>.active>a:hover {
    text-decoration: none;
    background-color: #1f3f41;
    outline: 0;
  }
  </style>  
</head>
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
  <div class="container">
    <label class="demo-label">Enter The Symptom : </label><br/> 
    <form method="POST" action="find.php">
      <input type="text" name="txtCountry" id="txtCountry" class="typeahead"/>
      <br><br>
      <input type="submit" name="find" value="Find The Disease">
      <?php echo $_SESSION['dis']; ?>
    </form>

  </div><br><br><br><br>
  <div class="Contact" id="contact1">
<p style="color:white;">
<img src="../images/toll.png" width="0px"><i class="fa fa-phone"></i>&nbsp;Toll Free 1800-274-3131
<img src="../images/email.png" width="0px"><i class="fa fa-envelope"></i>&nbsp;MediCare@service.com
<img src="../images/franchize.png" width="0px"><i class="fa fa-handshake-o"></i>&nbsp;Franchise
</p>
<h4 >Copyright © 2018 MediCare.com. All rights reserved.</h4>
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


    });
</script>
</html>