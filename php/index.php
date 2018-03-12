<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/index.css">
<link rel="stylesheet" type="text/css" href="../css/animate.css">
<link rel="icon" type="image/png" href="../images/kisaanlogo.png" sizes="96x96">
<title>Lets Start</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Cutive' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Alef' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=ABeeZee' rel='stylesheet'>
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-backstretch/2.0.4/jquery.backstretch.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.6.2/flexslider.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.6.2/jquery.flexslider.js"></script>
<style>
#return-to-top {
    position: fixed;
    bottom: 20px;
    right: 20px;
    background: rgb(0, 0, 0);
    background: rgba(0, 0, 0, 0.7);
    width: 50px;
    height: 50px;
    display: block;
    text-decoration: none;
    -webkit-border-radius: 35px;
    -moz-border-radius: 35px;
    border-radius: 35px;
    display: none;
    -webkit-transition: all 0.3s linear;
    -moz-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all 0.3s ease;
}
#return-to-top i {
    color: #fff;
    margin: 0;
    position: relative;
    left: 16px;
    top: 13px;
    font-size: 19px;
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all 0.3s ease;
}
#return-to-top:hover {
    background: rgba(0, 0, 0, 0.9);
}
#return-to-top:hover i {
    color: #fff;
    top: 5px;
}
.afterslide{
	height:500px;
	width:auto;
	background:#f2f2f2;
	
}
.slider {
  background-color:#f2f2f2;
  height:auto;
 
}
.bigimage {
  background-color:#f2f2f2;
  height:auto;
}


.afterslide img{
	border-radius:10px;
	border-style: solid;
    margin-left:450px;
    margin-top:30px;
}
.bigimage img{
	border-radius:10px;
border-style: solid;}
.Start p{
	font-family:alef;

}
.afterslide p{
font-family:Cutive;
font-weight: bold;
font-size:20px;
margin-top:20px;
}
h2{
	font-family:Alef;
}
hr { 
    display: block;
    margin-top: 0.5em;
    margin-bottom: 0.5em;
    margin-left: 300px;
    margin-right: 300px;
    border-style: solid;
    border-width: 2px;
	border-color:white;
} 
.start h2 {
  overflow: hidden; /* Ensures the content is not revealed until the animation */
  border-right: .15em solid orange; /* The typwriter cursor */
  white-space: nowrap; /* Keeps the content on a single line */
  /* Gives that scrolling effect as the typing happens */
  letter-spacing: .15em; /* Adjust as needed */
  animation: 
    typing 3.2s steps(40, end),
    blink-caret .55s step-end infinite;
}

/* The typing effect */
@keyframes typing {
  from { width: 0 }
  to { width: 70% }
}

/* The typewriter cursor effect */
@keyframes blink-caret {
  from, to { border-color: transparent }
  50% { border-color: orange; }
}
.About {
	-webkit-animation-delay:1s;
}
.Start {
	-webkit-animation-duration:1s;
}
</style>
<script language="JavaScript">

window.smoothScroll = function(target) {
    var scrollContainer = target;
    do { //find scroll container
        scrollContainer = scrollContainer.parentNode;
        if (!scrollContainer) return;
        scrollContainer.scrollTop += 1;
    } while (scrollContainer.scrollTop == 0);
    var targetY = 0;
    do { //find the top of target relatively to the container
        if (target == scrollContainer) break;
        targetY += target.offsetTop;
    } while (target = target.offsetParent);

    scroll = function(c, a, b, i) {
        i++; if (i > 30) return;
        c.scrollTop = a + (b - a) / 30 * i;
        setTimeout(function(){ scroll(c, a, b, i); }, 20);
    }
    // start scrolling
    scroll(scrollContainer, scrollContainer.scrollTop, targetY, 0);
}
$(document).ready(function (){
  if (jQuery().flexslider) {
  //flexslider ticker
  $('.flexslider-ticker').each(function() {
    var tickerSettings =  {
      animation: "slide",
      animationLoop: false,
      selector: ".items > .item",
      move: 1,
      controlNav: false,
      slideshow: true,
      direction: 'vertical'
    };
    $(this).flexslider(tickerSettings);
  });
  // flexsliders
  $('.flexslider').each(function() {
    var sliderSettings =  {
      animation: $(this).attr('data-transition'),
      selector: ".slides > .slide",
      controlNav: false,
      smoothHeight: true,
      prevText: "",
      nextText: "",
      sync: $(this).data('slidernav') || '',
      start: function(slider) {
        if (slider.find('[data-slide-bg-stretch=true]').length > 0) {
          slider.find('[data-slide-bg-stretch=true]').each(function() {
            if ($(this).data('slide-bg')) {
              $(this).backstretch($(this).data('slide-bg'));
              // $(this).data('slide-bg');
            }
          });
        }
      }
    };
      
    $('html').addClass('has-flexslider');
    $(this).flexslider(sliderSettings);
  });
  $(window).delay(1000).trigger('resize'); //make sure height is right load assets loaded
}})
</script>
</head> 
<body><a href="javascript:" id="return-to-top"><i class="icon-chevron-up"></i></a>
<div style="background: linear-gradient(rgba(26,26,26,0.2),rgba(26,26,26,0.7)), url('../images/background1.jpg');background-repeat: no-repeat;background-attachment:fixed;
    background-position: right top;background-repeat: repeat-x;background-size: 1400px 800px;">
 <div class="header animated fadeInDown" style="height:70px;background:transparent; ">
 <p style="font-size:20px;color:white"><i class="fa fa-stethoscope"></i>  MediCare</p>
 <div id="google_translate_element" style="margin-left:1170px;"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
 <ul style="margin-left:800px;"> 
   <li><a href="index.php"><i class="fa fa-home"></i>&nbsp;Home</a></li>
   <li><button type="button" onclick="smoothScroll(document.getElementById('service-area'))"><i class="fa fa-user "></i>&nbsp;Services</button></li>
   <li><button type="button" onclick="smoothScroll(document.getElementById('about'))"><i class="fa fa-info-circle"></i>&nbsp;About</button></li>
   <li><button type="button" onclick="smoothScroll(document.getElementById('contact'))"><i class="fa fa-phone"></i>&nbsp;Contact</button></li>
  <li ><a href="chat.php"><i class="fa fa-comments"></i>&nbsp;Chat</a></li>
  <li ><a href="videos.php"><i class="fa fa-youtube-play"></i>&nbsp;Health Tips</a></li>
 </div> 
<div class="Start animated fadeInLeft">

<h2 style="font-family:Roboto;">WELCOME TO MEDICARE</h2>
<p style="font-family:Roboto;">" We, at DigitalKisaan.com, are excited about making life simpler and grocery shopping a 
breeze! Now you can buy organic food & grocery online at your leisure and from the comfort 
of your home - no more standing in the long queues at ration shops, provision stores & supermarkets." 

</p>
<br><div class="Start animated jello 5s">
<a href="./login.php">
<input type="submit" value="Lets start"></a>
</div></div></div> 
	<div id="service-area" style="padding-top:50px;padding-bottom:50px;height:auto;">
	<p style="font-size:30px;font-weight:bold;margin-left:600px;font-family:Roboto;color:#4dd0e1">Services</p><hr style="width:100px"></hr><br>
                <div class="ptb-120">
                    <div class="container">
                        <div class="row text-center" >
                            <div class="col-sm-6 col-md-3"> 
                                <div class="single-item res-sm text-center" style="border-color:#4dd0e1;border-width:2px;border-radius:8px;padding:20px;border-style:solid;">
                                    <div class="single-item-icon">
                                        <i class="fa fa-heartbeat" style="font-size:40px"></i>
                                    </div>
                                    <h3 class="ht-pt">Diagnose</h3>
                                    <p>There are many variati passages of Lorem Ipsum availat majority have suffered aou need</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="single-item res-sm res-xs text-center" style="border-color:#4dd0e1;border-width:2px;border-radius:8px;padding:20px;border-style:solid;">
                                    <div class="single-item-icon">
                                        <i class="fa fa-plus" style="font-size:40px"></i>
                                    </div>
                                    <h3 class="ht-pt">Healthcare</h3>
                                    <p>There are many variati passages of Lorem Ipsum availat majority have suffered aou need</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="single-item text-center res" style="border-color:#4dd0e1;border-width:2px;border-radius:8px;padding:20px;border-style:solid;">
                                    <div class="single-item-icon">
                                        <i class="fa fa-hospital-o" style="font-size:40px"></i>
                                    </div>
                                    <h3 class="ht-pt">Medical</h3>
                                    <p>There are many variati passages of Lorem Ipsum availat majority have suffered aou need</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="single-item text-center" style="border-color:#4dd0e1;border-width:2px;border-radius:8px;padding:20px;border-style:solid;">
                                    <div class="single-item-icon">
                                        <i class="fa fa-wheelchair" style="font-size:40px"></i>
                                    </div>
                                    <h3 class="ht-pt">24/7 support</h3>
                                    <p>There are many variati passages of Lorem Ipsum availat majority have suffered aou need</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            

<div class="slider"><br><br>
<!-- @zone - hightlighted -->
<!--Showshow-->
<div class="container slider-container">
   <div class="row">
      <div class="col-md-12 slider-left">
         <section class="flexslider-wrapper">
            <div id="main-slider" class="flexslider" data-transition="fade" data-page-class="slider-full-width">
               <div class="slides">
                  <div data-slide-alt="alt" data-slide-bg-stretch=true class="slide slide-bg" data-slide-bg="http://www.trbimg.com/img-58c1ff36/turbine/sd-me-military-drugs-20170309">
                     <div class="slide-caption">
                        <div class="row">
                           <div class="col-md-12">
                              <div class="slide-text">
                                 <div class="slide-title">What is MediCare?</div>
                                 An online platform for purchase of agricultural inputs.
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div data-slide-alt="alt" data-slide-bg-stretch=true class="slide slide-bg" data-slide-bg="https://fysioultra.files.wordpress.com/2015/10/remiss.jpg">
                     <div class="slide-caption">
                        <div class="row">
                           <div class="col-md-12">
                              <div class="slide-text">
                                 <div class="slide-title">Variety</div>
                                 Large collection of diiferent types of inputs from verified sellers.
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div data-slide-alt="alt" data-slide-bg-stretch=true class="slide slide-bg" data-slide-bg="https://frenchdistrict.com/californie-sud/wp-content/uploads/sites/5/2014/03/dr-richard-horowitz-medecin-docteur-los-angeles-francais-west-hollywood-featured.jpg">
                     <div class="slide-caption">
                        <div class="row">
                           <div class="col-md-12">
                              <div class="slide-text">
                                 <div class="slide-title">Marketing</div>
                                 Direct online marketing of perishabe produce of farmer.
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
         </section>
         </div>
      </div>
   </div>
</div>
<br><br><br>
    <div style="background: linear-gradient(rgba(26,26,26,0.2),rgba(26,26,26,0.7)), url('../images/background3.jpg');background-repeat: no-repeat;background-attachment:fixed" class="About " id="about">
	<div style="width:1200;margin-left:auto;margin-right:auto;">
		<p style="font-size:30px;font-weight:bold;margin-left:550px;font-family:Roboto;color:#4dd0e1">About</p>
<h5 style="font-size:14px;font-family:Roboto;color:white"><p style="font-size:44px;">...</p>The system provides two login options ,one for farmers and the
another for the wholesaler. All the user details and passwords are
stored securely in the database. The wholesaler is provided with the
option of uploading the products which he/she wish to sell. Then
he/she has to specify the rate of the item. He/She should also provide a
certificate of assurance ,stating that the product is unadulterated and
reliable.The wholesaler has to provide his details along with contact
and location details for feedback system.<br><br>
When a farmer logs in he is provide with the list of items available for
purchasing.He is provided with the actual market rate of the items
along with what the retailers selling price, so they can easily compare
the rates.Farmers can also search for items using the search
feature.The farmers can also check whether the product is reliable or
not. The has to enter his location to find nearby wholesalers. If there is
not wholesaler in vicinity ,farmers can check whether other
wholesalers provide delivery facility using details provided by the
system.The farmer is also provided with a chat room where he can
submit his queries or make complaints to the wholesalers. <br><br>
The system provides list of nearest wholesalers and
option of delivery of inputs if the store is too far away.It will also provide
customer care service for proper utilization of products they are buying. The
system features translate function for easy understanding of text in the portal.<p style="font-size:44px;margin-left:1100">...</p></h5>
 </div>
		<br><br><br>
	</div>
	<div class="afterslide">
	<img align="middle" src="https://wallpaper.wiki/wp-content/uploads/2017/04/wallpaper.wiki-Modern-generation-doctor-girl-wallpaper-PIC-WPB009366.jpg" height="300"><br><br><hr></hr><p align="center">
	 “The ultimate goal of farming is not the growing of crops, but the cultivation and perfection of human beings.”
	  <br><br>
 <font size="2px">― Masanobu Fukuoka, The One-Straw Revolution</font>
	</p>
	</div>



<br><br><br><br><br>
<div class="Contact" id="contact">
<p style="color:white;"><br><br>
<img src="../images/toll.png" width="0px"><i class="fa fa-phone"></i>&nbsp;Toll Free 1800-274-3131
<img src="../images/email.png" width="0px"><i class="fa fa-envelope"></i>&nbsp;MediCare@service.com
<img src="../images/franchize.png" width="0px"><i class="fa fa-handshake-o"></i>&nbsp;Franchise
</p>
<h4>Copyright © 2018 MediCare.com. All rights reserved.</h4>
</div>
</div>

</html>
<script>
  $(window).scroll(function() {
    if ($(this).scrollTop() >= 50) {        
        $('#return-to-top').fadeIn(200);   
    } else {
        $('#return-to-top').fadeOut(200);  
    }
});
$('#return-to-top').click(function() {      
    $('body,html').animate({
        scrollTop : 0                      
    }, 500);
});</script>