<?php
// Database configuration
require_once('db_connect.php');

    $email = $_POST['email'];

    // Check if email exists in database
    $query = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($mysqli, $query);

    if (mysqli_num_rows($result) > 0) {
        // Generate a unique reset password token and insert it into the database
        $token = bin2hex(random_bytes(16));
        $query = "UPDATE users SET reset_token = '$token' WHERE email = '$email'";
        mysqli_query($mysqli, $query);

        // Send a password reset email to the user
        require 'mailer/PHPMailerAutoload.php';
        $mail = new PHPMailer;

        $mail->SMTPDebug = 0;                               // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com;';                      // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'afnan.h5050@gmail.com';           // SMTP username
        $mail->Password = 'vhfruuxtvmphbxrc';              // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to

        $mail->setFrom('afnan.h5050@gmail.com', 'Afnan');
        $mail->addAddress($email);                            // Add a recipient
        $mail->addReplyTo('afnan.h5050@gmail.com');

        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Password Reset';
        $mail->Body    = 'To reset your password, please click on the following link: http://localhost:3000/reset-password.php?token=' . $token;
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        if(!$mail->send()) {
            echo 'Message could not be sent.';
        } else {
            echo 'A password reset link has been sent to your email address.';
        }
    } else {
        echo 'Invalid email address.';
    }
?>
