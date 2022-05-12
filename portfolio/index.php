<?php
$name = $_POST['name'];
$visitor_email = $_post['email'];
/*$number = $_Post['number'];*/
$message = $_POST['message'];


$email_form = 'Kingsleyagana1@gmail.com';

$email_subject = "New Form Submission";

$email_body = "User Name: $name.\n".
               "User Email: $visitor_email.\n".
              /* "User Number: $number.\n".*/     
               "User Message: $message.\n";



        $to = "aganakingsley1@gmail.com";

        $headers = "From: $email_from \r\n";
        
        $headers = "Reply-To: $visitor_email \r\n";

        mail($to,$email_subject,$email_body,$headers);

        header("Location:index.html");


        ?>