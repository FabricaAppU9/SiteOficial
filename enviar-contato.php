<?php

    $nome = utf8_decode($_POST['nome']);
    $email = utf8_decode($_POST['email']);
    $mensagem = utf8_decode($_POST['mensagem']);

    $headers = "From: ". $nome;

    $corpoemail = 'Ola, meu nome é' .$nome.' , Meu email é '.$email.'/n
               
                    Mensagem:' .$mensagem.' /n';

    if(mail("contato@fabricaappu9.com.br", "Fale Conosco",$corpoemail,$headers)){


 	   echo "<script>alert('Mensagem enviada com sucesso!');</script>";	
 	   header("Location: index.php");

    } else{

        echo "<script>alert('Erro ao enviar, tente diretamente pelo email contato@fabricaappu9.com.br');</script>";	

}