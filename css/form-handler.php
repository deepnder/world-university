<?php
$name =_POST['name'];
$visitor_email =_POST['email'];
$subject_email =_POST['subject'];
$message_email =_POST['message'];
$email_from = 'info@yourwebsite.com';
$email_subject = 'new form submission';
$email_body ="user name: $name.\n"
"user email: $visitor_email.\n"

?>