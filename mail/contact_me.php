<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['phone']) 		||
   empty($_POST['websiteName'])	||
   empty($_POST['websiteURL'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$websiteName = strip_tags(htmlspecialchars($_POST['websiteName']));
$websiteURL = strip_tags(htmlspecialchars($_POST['websiteURL']));
//send the mail
$to = "icelake0@gmail.com";
$subject = "REGISTER ".$websiteURL;
$txt = " Name : ".$name."\r\n"." email : ".$email_address."\r\n"." phone : ".$phone."\r\n"." websiteName : ".$websiteName."\r\n"." websiteURL : ".$websiteURL;
$headers = "From: ".$email_address;
mail($to,$subject,$txt,$headers);
return true;
?>
