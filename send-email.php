<?php

$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];


require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

// $mail->SMTPDebug = SMTP::DEBUG_SERVER;

$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = "smtp.gmail.com";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

$mail->Username = "contact.flexible@gmail.com";
$mail->Password = "password";

$mail->setFrom($email, $name);
$mail->addAddress("contact.flexible@gmail.com", "BreakXStudio");


$mail->Body = $subject;

$mail->send();

header("Location: sent.html");