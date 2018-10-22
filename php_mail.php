<?php
$to = "goog.abdo@gmail.com";
$subject = "Test mail";
$message = "Hello! This is a test email message.";
$from = "sale@souldrops.co";
$headers = "From:" . $from;

if(mail($to,$subject,$message,$headers)){
echo "Email Send To - ".$to;
}else{
echo "Email Not Send To - ".$to;
}

?>