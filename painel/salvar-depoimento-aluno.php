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

	
	$obj_depoimento->setTexto($_POST['depoimento']);
	$obj_depoimento->setDataInicio(date('y/m/d'));
	$obj_depoimento->setDataUpdate(date('y/m/d'));




	$depoimento = $obj_daodepoimento->alteraDepoimento($conexao, $obj_depoimento, $_SESSION["id"]);