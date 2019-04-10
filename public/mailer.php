<?php

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
include 'mailbody.php';
$htmlBody = ob_get_clean();
print $htmlBody;

try {
    //Server settings
    $mail->SMTPDebug = 3;                                       // Enable verbose debug output
    $mail->isSMTP();
    //$mail->isMail();
    //$mail->Host       = 'smtp.guilletron.com';  // Specify main and backup SMTP servers
    $mail->Host       = 'pro1.mail.ovh.net';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'dev@guilletron.com';                     // SMTP username
    $mail->Password   = 'LY2UtCB2mrRGsZtNQO';                               // SMTP password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('dev@guilletron.com', 'WebCrea', 0);
    $mail->addAddress($destinationAddress, $userName);     // Add a recipient
    //$mail->addReplyTo('dev@guilletron.com', 'Information');
    //$mail->addCC('gonzalezdecastro.guillermo@gmail.com');
    //$mail->addBCC('gonzalezdecastro.guillermo@gmail.com');
    // Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'WebCrea';
    $mail->Body    = $htmlBody;
    $mail->AltBody = 'Thanks for contacting WebCrea.';

    if($mail->send()) {
      print $destinationAddress.'<br>';
      print $htmlBody;
      echo 'Message has been sent';
    } else {
      echo 'Problem width server';
    }
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
