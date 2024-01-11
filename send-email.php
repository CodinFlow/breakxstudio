<?php

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["c_email"];
$subject = $_POST["subject"];



require "vendor/autoload.php";
use PHPMailer\PHPMailer\PHPMailer;


$mail = new PHPMailer(true);

// $mail->SMTPDebug = SMTP::DEBUG_SERVER;
$mail->isSMTP();
$mail->CharSet = 'UTF-8';
$mail->IsHTML(true);
$mail->SMTPAuth = true;
$mail->Subject = "breakXstudio Kontakt";
$mail->Host = "smtp.gmail.com";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

$mail->Username = "contact.flexible@gmail.com";
$mail->Password = "xxxxxx";

$mail->setFrom($email, $fname . " " . $lname . " | " . $email);
$mail->addAddress("youssef.mjahed@outlook.de", "breakXstudio");


$mail->Body = $subject;

$mail->send();

header("Location: sent.html");