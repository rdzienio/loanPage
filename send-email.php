<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PhpMailer.php';
require 'phpmailer/src/SMTP.php';

$name = $_POST["Name"];
$email = $_POST["Email"];
//$subject = $_POST["subject"];
$message = $_POST["Message"];

//require "vendor/autoload.php";

//use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

// $mail->SMTPDebug = SMTP::DEBUG_SERVER;

$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = "smtp.google.com";
//$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;

$mail->Username = "bezbikpozyczkaweb@gmail.com";
$mail->Password = "lnilcbmrzbjqrrzs";

$mail->setFrom("bezbikpozyczkaweb@gmail.com");
$mail->addAddress("bezbikpozyczkaweb@gmail.com");

$mail->isHTML(true);

$mail->Subject = "Zapytanie od";
//$mail->Subject = "Zapytanie od: " + $name + ", " + $email;
$mail->Body = $message;

$mail->send();

echo
"
<script>
alert('200 OK');
document.location.reload();
</script>
"

?>