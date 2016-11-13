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
$mail->Username = "biancaarantes28@gmail.com";
$mail->Password = "123456";

//preparando assunto, mensagem.
$mail->setFrom("biancaarantes28@gmail.com",$nome);
$mail->addAddress("biancaarantes28@gmail.com");
$mail->Subject = "Quero participar da equipe";
$mail->msgHTML("<html>Ola eu sou {$nome}, meu RA: {$ra}, sou do campus {$campus}, sou do curso {$curso} e meu email {$e}: {$email} <br/> {$mensagem}</html>");
$mail->AltBody = "Ola eu sou {$nome}, meu RA: {$ra}, sou do campus {$campus}, sou do curso {$curso} e meu email {$e}: {$email} <br/> {$mensagem}";
$html = "";

if($mail->send()){
	$html .= "Email enviado com sucesso!";
}else{
	$html .= "Seu email não foi enviado!";
}
echo $html;





