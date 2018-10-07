<?php
$nome     = utf8_decode($_POST['name']);
$email    = $_POST['email'];
$mensagem = utf8_decode($_POST['message']);
$e        = utf8_decode("é");
require_once("PHPMailer/PHPMailerAutoload.php");

$mail = new PHPMailer();

$mail->isSMTP();
$mail->Charset = 'UTF-8';
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ss1';
$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);
$mail->Username = "seuemail@gmail.com";
$mail->Password = "";

$mail->setFrom("seuemail@gmail.com",$nome);
$mail->addAddress("seuemail@gmail.com");
$mail->Subject = "Contato";
$mail->msgHTML("<html>Ola eu sou {$nome}, meu email {$e}: {$email} <br/> {$mensagem}</html>");
$mail->AltBody = "Ola eu sou {$nome}, meu email {$e}: {$email} <br/> {$mensagem}";
$html = "";
if($mail->send()){
	$html .= "Email enviado com sucesso!";
}else{
	$html .= "Seu email não foi enviado!";
}
echo $html;





