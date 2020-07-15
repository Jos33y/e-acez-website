<?php
use PHPMailer\PHPMailer\PHPMailer;
require '../vendor/autoload.php';
$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPDebug = 2;
$mail->Host = 'smtp.flockmail.com';
$mail->Port = 587;
$mail->SMTPAuth = true;
$mail->Username = 'info@e-acez.com';
$mail->Password = 'LagbaluJ20';
$mail->setFrom('info@e-acez.com', 'Joseph');
$mail->addReplyTo('info@e-acez.com', 'Joseph');
$mail->addAddress('josephlagbalu@outlook.com', 'Lagbalu');
$mail->Subject = 'Testing PHPMailer';
$mail->msgHTML(file_get_contents('message.html'), __DIR__);
$mail->Body = 'This is a plain text message body';
//$mail->addAttachment('test.txt');
if (!$mail->send()) {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'The email message was sent.';
}
?>