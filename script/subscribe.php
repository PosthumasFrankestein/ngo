<?php
$link = mysqli_connect("localhost" , "root" , "" , "lonee_list");
$sql = mysqli_query($link,"INSERT INTO  subscribe (email) VALUES('$_POST[email]')");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
$mail = new PHPMailer(true);
$mail->setFrom('do.not.reply@gmail.com');
$mail->addAddress($_POST['email']);
$mail->Subject ='Subscribtion';
$mail->Body ='You are subscribed for subscription';
$mail->IsSMTP();
$mail->SMTPSecure = 'ssl';
$mail->Host = 'ssl://smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Port = 465;

$mail->Username = 'e.f.all.ngo@gmail.com';

$mail->Password = 'ngoefall';

if (!$mail->send()) {
    echo 'Email is not sent.';
    echo 'Email error: ' . $mail->ErrorInfo;
} else {
    echo 'Email has been sent.';
}
?>