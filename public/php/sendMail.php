<?php

$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$message = htmlspecialchars($_POST['message']);
$to = 'admin@komaroff.biz';
$fileName = htmlspecialchars($_POST['file']);

//Подключаем библиотеку PHPMailer
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


$mail = new PHPMailer;
$mail->setFrom($email, $name);
$mail->addAddress('admin@komaroff.biz', 'Vasterra blog');
$mail->Subject = 'Message from Vasterra blog';
$mail->msgHTML($message);
// Attach uploaded files
$mail->addAttachment($fileName);
$r = $mail->send();
echo "success";
