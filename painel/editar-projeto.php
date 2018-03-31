<?php

	require_once("classe/conecta.php");
	require_once ("classe/DaoProjeto.php");
	require_once("classe/Projeto.php");
	require_once("classe/Login.php");

	$obj_projeto    = new Projeto();
	$obj_daoprojeto = new DaoProjeto();

	$obj_projeto->setNome(utf8_decode($_POST['projeto_edit']));

	$projeto = $obj_daoprojeto->alterarProjeto($conexao, $obj_projeto, $_SESSION["id"]);


	var_dump($projeto);

	/*if($projeto){
		echo "Sucesso!";
	}else{
		echo "Erro!";
	} */