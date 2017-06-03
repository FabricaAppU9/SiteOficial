<?php 
	// teste
	require_once("classe/conecta.php");
	require_once("classe/Professor.php");
	require_once("classe/DaoProfessor.php");
	require_once("classe/Login.php");

	$obj_professor    = new Professor();
	$obj_daoprofessor = new DaoProfessor();

	$nome         = utf8_decode($_POST['nome']);
	$obj_professor->setNome($nome);
	$obj_professor->setFacebook($_POST['facebook_professor']);
	
	$obj_professor->setGithub($_POST['github']);
	$obj_professor->setLinkedin($_POST['linkedin']);

	$data = date('y/m/d');
	$resultado = $obj_daoprofessor->alteraUsuario($conexao, $obj_professor,$data, $_SESSION["id"]);

	if($resultado){
		echo "Sucesso!";
	}else{
		echo "Erro!";
	}