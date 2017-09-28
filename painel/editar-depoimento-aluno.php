<?php

	require_once("classe/conecta.php");
	require_once("classe/DaoDepoimentoAluno.php");
	require_once("classe/DepoimentoAluno.php");
	require_once("classe/Login.php");

	$obj_depoimento = new DepoimentoAluno();
	$obj_daodepoimento = new DaoDepoimentoAluno();
	
	
	$obj_depoimento->setTexto($_POST['depoimento_edit']);
	$obj_depoimento->setDataUpdate(date('y/m/d'));

	$depoimento = $obj_daodepoimento->alteraDepoimento($conexao, $obj_depoimento, $_SESSION["id"]);

	if($depoimento){
		echo "Sucesso!";
	}else{
		echo "Erro!";
	}