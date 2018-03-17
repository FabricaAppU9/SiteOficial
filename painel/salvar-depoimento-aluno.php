<?php

	//$teste = $_POST['data'];
	//var_dump($teste);

	require_once("classe/conecta.php");
	require_once("classe/DaoDepoimentoAluno.php");
	require_once("classe/DepoimentoAluno.php");
	require_once("classe/Login.php");

	$obj_depoimento = new DepoimentoAluno();
	$obj_daodepoimento = new DaoDepoimentoAluno();
	//echo $_POST['depoimento'];
	
	$obj_depoimento->setTexto(utf8_decode($_POST['depoimento']));
	$obj_depoimento->setDataInicio(date('y/m/d'));

	$depoimento = $obj_daodepoimento->inserirDepoimento($conexao, $obj_depoimento, $_SESSION["id"]);

	if($depoimento){
		echo "Sucesso!";
	}else{
		echo "Erro!";
	}