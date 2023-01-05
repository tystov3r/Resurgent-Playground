<?php
require 'scripts/functions.php';
$domain_name = domainName();  // Example.com
$siteURL = siteURL(); //https://example.com
    // Message

  /* 
  AMP boilerplate CORS code and setting the content type as JSON
     Since all errors / sucess messages will be encoded in JSON
 */
  header("Access-Control-Allow-Origin: ". 
    str_replace('.', '-',''.$siteURL.'') .".cdn.ampproject.org");
  



 header("AMP-Access-Control-Allow-Source-Origin:$siteURL");

/* Gmail headers */ 

 header("AMP-Access-Control-Allow-Source-Origin:https://mail.google.com");
 header("AMP-Access-Control-Allow-Source-Origin: amp@gmail.dev");
 header("Access-Control-Allow-Origin: https://mail.google.com");


 header("Access-Control-Allow-Headers: Amp4Email-Proxy-Assertion");
   header("AMP-Access-Control-Allow-Origin: amp@gmail.dev");

   

/* 
 AMP Playground headers
*/

header("AMP-Access-Control-Allow-Source-Origin: https://playground.amp.dev"); 
header("Access-Control-Allow-Origin: https://playground.amp.dev");


/*
    AMP Gmail headers
*/ 
header("AMP-Access-Control-Allow-Source-Origin: amp@gmail.dev"); 
header("Access-Control-Allow-Origin: https://amp.gmail.dev"); 
 
 header("Access-Control-Expose-Headers: AMP-Access-Control-Allow-Source-Origin");
 header("Access-Control-Allow-Credentials: true");
 header("Content-Type:  application/json");

 /*
    Check whether message, phone, name and email is filled in
    Do not send the email if not. And send a JSON string to 
    display the errors on the front end. 
 */
    
echo '{
 "items": [
   {
     "pic" : "https://resurgent.azureedge.net/cdn/ShyOpener/dollar_icon_graybg.png",
     "truck_name": "2013 Kenworth K270",
     "price": "20,000.00 USD"
   },
   {
    "pic" : "https://resurgent.azureedge.net/cdn/Disengaged/Dad_Daughter_image.png",
     "truck_name": "2014 Kenworth K270",
     "price": "30,500.00 USD"
   },
   {
    "pic" : "https://resurgenttest.azureedge.net/cdn/Disengaged/New-GIF-1000x1000.gif",
     "truck_name": "2015 Kenworth K270",
     "price": "35,500.00 USD"
   }
 ]
}';
