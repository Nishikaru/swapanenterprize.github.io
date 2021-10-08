<?php
    $visitor_email = $_POST['email'];

    $email_from = 'mdsajed001@hotmail.com';
    $email_subject = 'From Swapan Enterprice site';
    $email_body = "User_mail: $visitor_email.\n ";
    $to = "mdsajed001@protonmail.com";
    $headers = "From: $email_from \r\n";
    $headers = "Reply-To: $visitor_email \r\n";
    mail($to,$email_subject,$email_body,$headers);
    header("Location: index.html");
?>