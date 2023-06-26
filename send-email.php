<?php

  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];
  $to = "afnan.h5050@gmail.com";
  $subject = "New contact form submission";
  $body = "Name: $name\nEmail: $email\nMessage:\n$message";
  $headers = "From: $email";

require 'mailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->SMTPDebug = 0;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com;';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = $to;                 // SMTP username
$mail->Password = 'vhfruuxtvmphbxrc';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom($email, 'Get Quotation');
$mail->addAddress($to);    // Add a recipient  
$mail->addReplyTo($email);


// Optional name
$mail->isHTML(false);                                  // Set email format to HTML

$mail->Subject = $subject;
$mail->Body    = $body;
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
} else {
    echo 'Message has been sent';
}

