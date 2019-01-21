<?php
$to = "chris@csickmedia.com" ;
$from = $_REQUEST['email'] ;
$name = $_REQUEST['name'] ;
$headers = "From: $from";
$subject = "Message from CsickMedia";
$fields = array();
$fields{"name"} = "name";
$fields{"business"} = "business";
$fields{"website"} = "website";
$fields{"email"} = "email";
$body = "You have received the following information from Csickmedia:\n\n"; foreach($fields as $a => $b){ $body .= sprintf("%20s: %s\n",$b,$_REQUEST[$a]); }
$headers2 = "From: noreply@csickmedia.com";
$subject2 = "Thank you for contacting us";
$autoreply = "Thank you for contacting CsickMedia! You will be hearing from us very shortly";
if($from == '') {print "You have not entered an email, please go back and try again";}
else {
if($name == '') {print "You have not entered a name, please go back and try again";}
else {
$send = mail($to, $subject, $body, $headers);
$send2 = mail($from, $subject2, $autoreply, $headers2);
if($send)
{header( "Location: /messaging.html" );}
else
{print "We encountered an error sending your mail, please notify services@csickmedia.com"; }
}
}
?> 
