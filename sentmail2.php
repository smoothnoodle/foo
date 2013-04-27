<?php
//test it on hostmonster, it work 
echo "email testing";
echo "</br>";
$to="kevin.heaven@eyepoppy.com";
$subject="Confirmation for wuuker.com";
$message='<html><head><title>HTML email</title></head><body><p>This email contains HTML Tags!</p></body></html>';
$email="confirmation@wuuker.com";

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers='From:'.$email;

mail($to,$subject,$message,$headers);
echo $sent ? "Mail Sent" : "mail Failed";

?>