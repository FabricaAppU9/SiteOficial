<?php

	//$teste = $_POST['data'];
	//var_dump($teste);

	require_once("classe/conecta.php");
	require_once("classe/DaoDepoimentoAluno.php");
	require_once("classe/DepoimentoAluno.php");
	require_once("classe/Login.php");

	$obj_depoimento = new DepoimentoAluno();
	$obj_daodepoimento = new DaoDepoimentoAluno();
	var_dump($_POST['dados']);
	$depoimento = $obj_daodepoimento->alteraDepoimento($conexao, $_SESSION["id"]);