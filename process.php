<?php
    if(isset($_POST['submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
  

    $to = "izik4004@gmail.com";
    $subject = "Site contact form";

    $header = "From: ".$email."\r\n";
    $header .= "Cc: ".$email."\n";
    $header .= "Reply-To : ".$email."\r\n";
    $header .= "Return-Path : ".$email."\r\n";
    $header .= "X-Mailer: PHP\r\n";
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-Type: text/plain; charset=iso-8859-1\r\n";

    if(mail($to, $subject, $message, $header))
    {
      echo "Mail Sent Successfully";
    }else{
      echo "Mail Not Sent";
    }

    }
    ?>