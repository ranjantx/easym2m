<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="conatct us if you have any query @ info@easym2m.in">
    <meta name="keywords" content="Remote tracking, remote monitoring, cloud based monitoring, smartwatch, smart watch, wrist phone, wrist watch, SmartKavach, smart watch monitoring, rugged, industrial, enterprise, heart bit rate (HBR) monitoring, blood pressure (BP) monitoring, man fall down alert, Emergency call, SoS call, Women Safety, Employee safety, Employee surveillance, personal surveillance, human surveillance, women surveillance, safe driving, child safety & surveillance, Underground Mining, surface mining, coal mine, gold mine, iron mine, Oil & Gas, Manufacturing, steel, power, Aluminium, Transportation, logistics, Police, Ambulance drivers, Women drivers, cab drivers, taxi drivers, safety, security, surveillance, ThirdEye, Trusted Companion">
    <meta name="author" content="EASYM2M TECHNOLOGIES PRIVATE LIMITED">
    <link href="//fonts.googleapis.com/css?family=Lato:300,400,700,900|Oswald:300,400" rel="stylesheet" type="text/css"/>
     <link href='css/career-custom.css' rel='stylesheet' type='text/css'>
    <title>Contact-Us | EasyM2M Technologies Private Ltd, India. ThirdEye Solution, SmartKavach</title>
    
<script language="JavaScript" type="text/JavaScript">
function makeRequestObject(){
    //alert ("makeRequestObject called");
   var xmlhttp=false; 
   try {
      xmlhttp = new ActiveXObject('Msxml2.XMLHTTP');
   } catch (e) {
      try {
         xmlhttp = new ActiveXObject('Microsoft.XMLHTTP'); 
      } catch (E) {
         xmlhttp = false;
      }
   }
   if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
      xmlhttp = new XMLHttpRequest(); 
   }
   //alert ("makeRequestObject before return called");
   return xmlhttp;
  
}

function showdata()
{
    //alert ("show data called");
   var xmlhttp=makeRequestObject();
  
   var content = "Our Team will contact you soon";
   xmlhttp.onreadystatechange=function() {
      if (xmlhttp.readyState==4 && xmlhttp.status == 200) { 
         var content = xmlhttp.responseText; 
         if( content ){             
        
            
                window.setTimeout('window.location="./index-.php"; ',7000);
            
        
 
            //document.getElementById('inputform').style.display = "hidden"; // hide inputform div tag
            document.getElementById('info').style.display = "block"; // show info div tag
            document.getElementById('info').innerHTML = content; 
            
            <!--meta http-equiv="refresh" content="5; url=./index.php"-->
         }
      }
   }
   xmlhttp.send(null) 
}
</script>

<?php 
    error_reporting(0);
    include "view/ex-plulings.php";
?>
</head>

<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

<body style="background-color:;">
<?php 
    error_reporting(0);
    include "view/header-and-menu.php";
    include "login-model.php";
    include "comming-soon-model.php";
?>
        <section id="seperatefromnav" class="fixed-contact-bg1">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="career-city-text">
                            <center><img src="view/img/easym2m-trans-logo.png" width="150" height="100" class="img-responsive">Contact Us</center>
                        </div>
                        
                        <!--div class="row">
                            <div class="description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                             </div>
                         </div-->                          
                    </div>
                </div>
            </div>  
        </section><br><br>
        <div id="info" style='background-color:#CCFFCC;width:700px;'> <font size='4px' color ='#222233' face='Times New Roman'> </font></div>
   <div class="container-fluid">
        <div class="row"  style="background-color: transparent;">
            <form role="form" action="view/easym2m-query.php" method="post">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <h1 class="center">please provide your information to help you!!</h1>
                        
                            <div id="contact-catagory" class="drop-down">
                                <select class="form-control" name="contact-type">
                                      <option value="Sales">Sales</option>
                                      <option value="Feedback">Feedback</option>
                                      <option value="Info">Info</option>                                    
                                      <option value="others">Others</option>                                
                                   
                                </select>
                            </div>
                            <div class="form-group">
                                <!--label for="name">Email:</label-->
                                <input type="text" ng-model="name" class=" custom" id="con-name" name="cp-name" placeholder="Enter Your Name" required>
                            </div>  
                            <div class="form-group">
                                <!--label for="email">Email:</label-->
                                <input type="email" ng-model="emailaddress" class=" custom" name="cp-emailid" id="con-email" placeholder="Enter Your Email" required>
                    
                            </div>
                            <div class="form-group">
                                <!--label for="email">Email:</label-->
                                <input type="text" ng-model="address" class=" custom" name="cp-org-name" id="con-orgname" placeholder="Enter Your Organisation Name" required>
                            </div>
                            <div class="form-group">
                                <!--label for="email">Email:</label-->
                                <input type="number" ng-model="number" class=" custom" name="cp-mobile" id="con-number" placeholder="+(Country-code) Mobile Number" size="10" required>
                            </div>
                            <!--div class="checkbox">
                                <label><input type="checkbox"> Information correct</label>
                            </div-->
                            
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                   
                <div class="form-group query-level">
                  <label for="comment">Leave Your Query</label>
                  <textarea class="form-control custom1" name="cp-message" rows="7" id="comment"></textarea>
                  <center><input type="submit" class="btn btn-default submit-btn" style="padding:5px; font-size:20px; background-color:#eee;" onClick= "return showdata();" name="contact-us" value="send it!"></center>
                </div>
                              
            </div>
            </form>
        </div>
        <!--div class="row map-bg img-responsive">
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4" style="margin-top:100px;"><h3>Our Presence</h3></div>
            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-8" ></div>
        </div-->
        <div class="container-fluid" id="reachme" style="margin-top:50px;">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 well well-sm" id="googlemap">
                    <div id="googpemap" style="width:1400px;overflow:hidden;height:500px;max-width:100%;">
                        <div id="display-google-map" style="height:100%; width:100%;max-width:100%;">
                            
                            <iframe width="100%" height="100%" frameborder="0" style="border:0"
src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJaZNYnUcTrjsR-miWn5bKQzk&key=AIzaSyC6eIDDoCXGCYVWUa0QQEGQWDGLelemoV0" allowfullscreen></iframe>
                         <!--iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3889.978293777359!2d77.66105821440041!3d12.84467842112691!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae135aeb7f340f%3A0x3ad86af40d2ac611!2sInternational+Institute+of+Information+Technology!5e0!3m2!1sen!2sin!4v1449288254434" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe-->
                        </div>
                        <a class="embed-map-code" href="https://www.bootstrapskins.com" id="grab-map-info">admin bootstrap themes</a>
                        <style>#display-google-map .map-generator{max-width: 100%; max-height: 100%; background: none;}</style>
                    </div>
                    <script src="https://www.embed-map.com/google-maps-authorization.js?id=568328f0-4eed-c319-c074-9f84d7aa52ee" defer="defer" async="async"></script>
                </div>
            </div>
        </div>
   </div>
<?php
error_reporting(0);
    include "view/footer.php";
    include "view/js-plugins.php";
?>
</body>

</html>
