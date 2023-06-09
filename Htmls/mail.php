<?php
//get data from form  
error_reporting(0);
$name = $_POST['name'];
$email= $_POST['email'];
$subject= $_POST['subject'];
$message= $_POST['message'];

$to = "coolaj2712@gmail.com";
$subject = "Mail From music website contact form";
$txt ="Name = ". $name . "\r\n  Email = " . $email ."\r\n  subject = " . $subject . "\r\n Message =" . $message;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("thankyou.html");
?>