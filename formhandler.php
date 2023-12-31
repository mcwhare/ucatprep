<?php
$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$message = $_POST['message'];

$email_from = 'info@ucatprep.com'

$email_subject = "New Form Submission";

$email_body = "Name: $name \n".
                "Email: $email \n".
                "Number: $number \n".
                "Message: $message \n";

$to = 'marcus.chanwh@gmail.com';

$headers = "From: $email_from \r\n";

$headers . "Reply-To: $visitor_email \r\n";


mail($to,$email_subject,$email_body,$headers);

header("Location: index.html");



?>