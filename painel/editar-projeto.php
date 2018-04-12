<?php

	require_once("classe/conecta.php");
	require_once ("classe/DaoProjeto.php");
	require_once("classe/Projeto.php");
	require_once("classe/Login.php");

	$obj_projeto    = new Projeto();
	$obj_daoprojeto = new DaoProjeto();

	$obj_projeto->setId($_POST['id']);
	$obj_projeto->setNome(utf8_decode($_POST['nome']));	
	$obj_projeto->setDescricao(utf8_decode($_POST['descricao']));
	$obj_projeto->setDataInicio($_POST['dt_inicio']);
	$obj_projeto->setDataFim($_POST['dt_termino']);
	$obj_projeto->setTecnologias(utf8_decode($_POST['tecnologias']));

	$projeto = $obj_daoprojeto->alterarProjeto($conexao, $obj_projeto, $obj_projeto->getId());



	//ar_dump($obj_projeto->getId());

	if($projeto){
		echo "Sucesso!";
	}else{
		echo "Erro!";
	} 