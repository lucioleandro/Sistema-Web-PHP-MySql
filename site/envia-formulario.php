<?php
session_start();
$nome = $_POST["nome"]
$email = $_POST["email"];
$mensagem = $_POST["mensagem"]

require_once("PHPMailAutoload.php");

$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->port = 587;
$mail-SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = "email@gmail.com";
$mail->Password = "123456";

$mail->setFrom("email@gmail.com", mailer);
$mail->addAddress("email@gmail.com");
$mail->Subject = "assunto do email";
$mail->msgHTML("<html>de: {$nome}<br/>Email: {$email}<br/>mensagem : {$mensagem}</br/></html>");
$mail->AltBody = "de: {$nome}\n email:{$email}\n mensagem {$mensagem}";

if($mail->send()){
  $_SESSION["success"] = "mensagem enviada com sucesso !";
  header("Location: index.php");
} else {
  $_SESSION["danger"] = "A mensagem não foi enviada". $mail->ErrorInfo;
}
