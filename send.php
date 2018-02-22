<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$to = "georgeschena@hotmail.com";
$subject = "Website Enquiry";

$message = <<<EMAIL

Senders name: $name
Senders email: $email

$message

EMAIL;

if(isset($_POST['submit'])){
    mail($to, $subject, $message) or die("Error!");
    echo "Thanks! Your enquiry has been sent, press back to return to the website!";
}

?>