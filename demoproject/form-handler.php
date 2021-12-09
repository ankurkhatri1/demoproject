<?php 
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from ='khatriankur14@gmail.com'
$email_subject ='new form submission'

$email_body="User Name: $name.\n".
            "user Email: $visitor_email.\n".
            "subject: $subject.\n".
            "User Message: $message.\n";
$to ='khatriankur14@gmail.com';

$headers = "From : $email_from \r\n";
$headers .="Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers)
header("Location:contact.html")
?>