<?php
//get data from form  

$name = $_POST['name'];
$email= $_POST['email'];
$subject= $_POST['Subject'];
$message= $_POST['message'];


$to = "info@yasenterprisebd.com";

$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email ."\r\n Subject = ". $subject . "\r\n Message =" . $message;

$headers = "From: noreply@yasenterprisebd.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>
