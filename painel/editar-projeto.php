<?php

	require_once("classe/conecta.php");
	require_once ("classe/DaoProjeto.php");
	require_once("classe/Projeto.php");
	require_once("classe/Login.php");

	$obj_projeto    = new Projeto();
	$obj_daoprojeto = new DaoProjeto();

	$obj_projeto->setId($_POST['id']);
	$obj_projeto->setNome($_POST['nome']);
	$obj_projeto->setDescricao($_POST['descricao']);
	$obj_projeto->setDataInicio($_POST['dt_inicio']);
	if ($_POST['dt_termino'] != "0000-00-00") {
		$obj_projeto->setDataFim($_POST['dt_termino']);
	}
	
	$obj_projeto->setTecnologias($_POST['tecnologias']);


	$projeto = $obj_daoprojeto->alterarProjeto($conexao, $obj_projeto, $obj_projeto->getId());


	//var_dump($projeto);

	/*if($projeto){
		echo "Sucesso!";
	}else{
		echo "Erro!";
	} */