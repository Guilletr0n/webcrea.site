<?php
require_once '../config.php';
require_once '../vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;

$mail = new PHPMailer(true);

if(isset($_POST["name"])) {
  $userName = $_POST["name"];
} else {
  $userName = "test";
}

if(isset($_POST["email"])) {
  $destinationAddress = $_POST["email"];
} else {
  $destinationAddress = "dev@guilletron.com";
}

ob_start();
include 'mailbody-'.LANG.'-'.strtoupper(LANG).'.php';
$htmlBody = ob_get_clean();

try {
  $mail->isSMTP();
  $mail->SMTPAuth   = true;

  // mailSettings from config.php

  if(isset($mailSettings)) {
    $mail->SMTPDebug  = $mailSettings["SMTPDebug"];
    $mail->Host       = $mailSettings["host"];
    $mail->Username   = $mailSettings["username"];
    $mail->Password   = $mailSettings["password"];
    $mail->SMTPSecure = $mailSettings["SMTPSecure"];
    $mail->Port       = $mailSettings["port"];
  } else {
    throw new Exception();
  }

  //Recipients
  $mail->setFrom('dev@guilletron.com', 'WebCrea', 0);
  $mail->addAddress($destinationAddress, $userName);     // Add a recipient
  //$mail->addReplyTo('dev@guilletron.com', 'Information');
  //$mail->addCC('gonzalezdecastro.guillermo@gmail.com');
  $mail->addBCC('gonzalezdecastro.guillermo@gmail.com');
  // Attachments
  //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
  //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

  // Content
  $mail->isHTML(true);
  $mail->Subject = '';
  $mail->Body    = $htmlBody;
  $mail->AltBody = 'Thanks for contacting WebCrea.';

  if($mail->send()) {
    echo 'Message has been sent';
  } else {
    echo 'Problem width server';
  }
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
