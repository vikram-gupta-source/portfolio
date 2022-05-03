<?php

//get data from form  

// print_r($_POST);

$name = $_POST['name'];

$email= $_POST['email'];

$message= $_POST['message'];

$number= $_POST['mobile'];



$to = "vikram.gupta205@gmail.com";

$subject = "Mail From Protfolio";

$txt ="Name = ". $name . "\r\n Email = " . $email . "\r\n Message = " . $message ."\r\n Mobile Number = ".$number;

$headers = "From: vikram.gupta205@gmail.com" ;

if($email!=NULL){

    mail($to,$subject,$txt,$headers);

}

//redirect

header("Location:thankyou.html");

?>