<?php

	require_once("classe/conecta.php");
	require_once("classe/DaoDepoimentoAluno.php");
	require_once("classe/DepoimentoAluno.php");
	require_once("classe/Login.php");

	$obj_depoimento = new DepoimentoAluno();
	$obj_daodepoimento = new DaoDepoimentoAluno();
	
	$id = $_POST['id_aluno'];
	$obj_depoimento->setTexto(utf8_decode($_POST['depoimento_edit']));
	$obj_depoimento->setDataUpdate(date('y/m/d'));

	$depoimento = $obj_daodepoimento->alteraDepoimento($conexao, $obj_depoimento, $id);

	if($depoimento){
		header("Location: lista-depoimentos-aluno.php");
		echo "Sucesso!";
		die();
	}else{
		echo "Erro!";
	}