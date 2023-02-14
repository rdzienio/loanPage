<?php
/*
$name = $_POST["Name"];
$phone = $_POST["Phone"];
$message = $_POST["Message"];

echo '<h2>'.$name.'</h2><p>'.$phone.'</p><p>'.$message.'</p>';
*/
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PhpMailer.php';
require 'phpmailer/src/SMTP.php';

$name = $_POST["Name"];
$phone = $_POST["Phone"];
//$subject = $_POST["subject"];
$message = $_POST["Message"];

//require "vendor/autoload.php";

//use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

// $mail->SMTPDebug = SMTP::DEBUG_SERVER;

$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = 'smtp.gmail.com';
//$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

$mail->Username = "bezbikpozyczkaweb@gmail.com";
$mail->Password = "m07h3r-f#c43$";

$mail->setFrom('bezbikpozyczkaweb@gmail.com','BezBikPozyczka');
$mail->addAddress('robertdzienio@gmail.com');

$mail->isHTML(true);

$mail->Subject = 'Zapytanie od ' . $name;
//$mail->Subject = "Zapytanie od: " + $name + ", " + $email;
$mail->Body = '<h2>Nr telefonu: ' . $phone . '</h2><p>' . $message . '</p>';

$mail->send();

if (!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    header("Location: sent.php");
}

?>