<?php

	require_once("classe/conecta.php");
	require_once("classe/DaoDepoimentoProfessor.php");
	require_once("classe/DepoimentoProfessor.php");
	require_once("classe/Login.php");

	$obj_depoimento    = new DepoimentoProfessor();
	$obj_daodepoimento = new DaoDepoimentoProfessor();



	$obj_depoimento->setTexto(utf8_decode($_POST['depoimento_edit']));
	$obj_depoimento->setDataUpdate(date('y/m/d'));

	$depoimento = $obj_daodepoimento->alteraDepoimento($conexao, $obj_depoimento, $_SESSION["id"]);

	if($depoimento){
		echo "Sucesso!";
	}else{
		echo "Erro!";
	}