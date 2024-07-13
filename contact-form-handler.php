<?php

$name= $_PSOT['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];


$email_from = 'file:///C:/xampp/htdocs/t1web/home1.html';


$email_subject = "New Form Submisssion";


$email_body = "User Name: $name.\n".
               "User Email: $visitor_email.\n";
                "User Message: $message.\n";

$to = "melinoclothing@gmail.com";
$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email\r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");

?>