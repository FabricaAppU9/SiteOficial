<?php
	require 'vendor/autoload.php';

	$API_KEY = "";
    $nome = utf8_decode($_POST['nome']);
	$email_user = utf8_decode($_POST['email']);
	$mensagem = utf8_decode($_POST['mensagem']);

	$to = "contato@fabricaappu9.com.br";

	$email = new \SendGrid\Mail\Mail(); 
	$email->setFrom($email_user, $nome);
	//print $response->statusCode() . "\n";
	$email->setSubject("Contato - Fábrica de Aplicativos");
	$email->addTo($to, "Fábrica de Aplicativos");
	$email->addContent(
		"text/html", "Nome: " . $nome . "<br>".
					  "Email: " . $email_user . "<br>".
					  "Mensagem: " . $mensagem . "<br>"
	);
	$sendgrid = new \SendGrid($API_KEY);
	try {
		$response = $sendgrid->send($email);
		//print $response->statusCode() . "\n";
		if($response->statusCode() == 202){
			echo "<script>alert('Mensagem enviada com sucesso')</script>";
		}
		else{
			echo('Erro ao enviar mensagem');
			die();
		}
	} catch (Exception $e) {
		echo 'Caught exception: '. $e->getMessage() ."\n";
	}