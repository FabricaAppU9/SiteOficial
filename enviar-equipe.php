<?php
$nome     = utf8_decode($_POST['name']);
$email    = $_POST['email'];
$ra       = utf8_decode($_POST['ra']);
$campus   = utf8_decode($_POST['campus']);
$curso    = utf8_decode($_POST['curso']);
$mensagem = utf8_decode($_POST['mensagem']);
$e        = utf8_decode("é");

//arquivo PHPMailer.
require_once("PHPMailer/PHPMailerAutoload.php");

//Instanciando objeto
$mail = new PHPMailer();

//configurando envio de email
$mail->isSMTP();
$mail->Charset = 'UTF-8';
$mail->Host = 'smtp.fabricaappu9.com.br';
$mail->Port = 25;
$mail->SMTPAuth = true;
$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);
$mail->Username = "contato@fabricaappu9.com.br";
$mail->Password = "F@bric@@pp2016";

//preparando assunto, mensagem.
$mail->setFrom("contato@fabricaappu9.com.br",$nome);
$mail->addAddress("contato@fabricaappu9.com.br");
$mail->Subject = "Quero participar da equipe";
$mail->msgHTML("<html>Ola eu sou {$nome}, meu RA: {$ra}, sou do campus {$campus}, sou do curso {$curso} e meu email {$e}: {$email} <br/> {$mensagem}</html>");
$mail->AltBody = "Ola eu sou {$nome}, meu RA: {$ra}, sou do campus {$campus}, sou do curso {$curso} e meu email {$e}: {$email} <br/> {$mensagem}";


if($mail->send()){
	$html = "Email enviado com sucesso!";
}else{
	$html = "Seu email não foi enviado!";
}

echo $html;




