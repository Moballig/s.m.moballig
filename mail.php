<?php
//get data from form  

$email= $_POST['email'];
$message= $_POST['message'];
$to = "shaikhmohammadmobaallig372@mail.com";
$subject = "Mail From website";
$txt ="Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:index.html");
?>