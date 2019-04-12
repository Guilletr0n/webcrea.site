<?php

require_once '../config.php';
require_once '../vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;

$mail = new PHPMailer(true);

ob_start();
include 'mailbody-'.LANG.'-'.strtoupper(LANG).'.php';
$htmlBody = ob_get_clean();
try {
  $mail->isSMTP();
  $mail->SMTPAuth   = true;
  $mail->SMTPDebug  = $mailSettings["SMTPDebug"];
  $mail->Host       = $mailSettings["host"];
  $mail->Username   = $mailSettings["username"];
  $mail->Password   = $mailSettings["password"];
  $mail->SMTPSecure = $mailSettings["SMTPSecure"];
  $mail->Port       = $mailSettings["port"];
  $mail->addAddress($_POST['email'], 'test');
  $mail->isHTML(true);
  $mail->Subject = '';
  $mail->Body    = '<strong>Test email</strong>';
  $mail->AltBody = 'Thanks for contacting WebCrea.';
  $mail->setFrom('dev@guilletron.com', 'WebCrea', 0);
  $mail->send();
} catch(Exception $e) {
  print $mail->ErrorInfo;
  print "Error ".$e;
}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Test email</title>
  <style>input{border:none}</style>
</head>
<body>
  <form action="mailer-test.php" method="POST">
    <input name="name" type="text" placeholder="name">
    <br>
    <input name="email" type="text" placeholder="email" value="guillermo.gonzlez@yahoo.es">
    <select name="lang">
      <option>en</option>
      <option>es</option>
      <option>fr</option>
    </select>
    <input name="host" type="text" placeholder="host">
    <input name="username" type="text" placeholder="username">
    <input name="password" type="text" placeholder="password">
    <input name="port" type="text" placeholder="port">
    <input type="submit">
  </form>
</body>
</html>
