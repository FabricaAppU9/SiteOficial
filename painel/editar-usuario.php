<?php 

	require_once("classe/conecta.php");
	require_once("classe/Aluno.php");
	require_once("classe/DaoAluno.php");
	require_once("classe/Login.php");

	$obj_aluno    = new Aluno();
	$obj_daoaluno = new DaoAluno();

	$nome         = utf8_decode($_POST['nome']);
	$obj_aluno->setNome($nome);
	$obj_aluno->setPca_id($_POST['campus']);
	$obj_aluno->setPcr_id($_POST['cargo']);
	$obj_aluno->setFacebook($_POST['facebook']);
	$obj_aluno->setGithub($_POST['github']);
	$obj_aluno->setLinkedin($_POST['linkedin']);

	$data = date('y/m/d');
	$resultado = $obj_daoaluno->alteraUsuario($conexao, $obj_aluno,$data, $_SESSION["id"]);
	if($resultado){
		echo "Sucesso!";
	}else{
		echo "Erro!";
	}