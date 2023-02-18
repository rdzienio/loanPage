<?php
/*
$name = $_POST["Name"];
$phone = $_POST["Phone"];
$message = $_POST["Message"];

echo '<h2>'.$name.'</h2><p>'.$phone.'</p><p>'.$message.'</p>';
*/


require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

$name = $_POST["Name"];
$phone = $_POST["Phone"];
$message = $_POST["Message"];

$mail = new PHPMailer(true);
$mail->SMTPDebug = 2;

$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = 'smtp.gmail.com';
//$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

$mail->Username = "bezbikpozyczkaweb@gmail.com";
$mail->Password = "d00pa31gh7l337j62137";

$mail->setFrom('bezbikpozyczkaweb@gmail.com','BezBikPozyczka');
$mail->addAddress('marcin-dzienio@hotmail.com');
$mail->addBCC('bezbikpozyczkaweb@gmail.com','BezBikPozyczka');

$mail->isHTML(true);

$mail->Subject = 'Zapytanie od ' . $name;
$mail->Body = '<h2>Nr telefonu: ' . $phone . '</h2><p>' . $message . '</p>';

/*$mail->send();*/

if (!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    header("Location: sent.php");
}

?>