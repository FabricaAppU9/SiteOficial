<?php

	require_once("classe/conecta.php");
	require_once ("classe/DaoProjeto.php");
	require_once("classe/Projeto.php");
	require_once("classe/Login.php");

	$obj_projeto    = new Projeto();
	$obj_daoprojeto = new DaoProjeto();
        
        $data_inicio = $_POST['dt_inicio'];
        $data_inicio = explode("/", $data_inicio);
        list($dia, $mes, $ano) = $data_inicio;
        $data_inicio = $ano."-".$mes."-".$dia;
        
        $data_fim = $_POST['dt_termino'];
        $data_fim = explode("/", $data_fim);
        list($dia, $mes, $ano) = $data_fim;
        $data_fim = $ano."-".$mes."-".$dia;
        
	$obj_projeto->setNome($_POST['nome']);	
	$obj_projeto->setDescricao($_POST['descricao']);
	$obj_projeto->setDataInicio($data_inicio);
	$obj_projeto->setDataFim($data_fim);
	$obj_projeto->setTecnologias($_POST['tecnologias']);

	$projeto = $obj_daoprojeto->inserirProjeto($conexao, $obj_projeto);



	//var_dump($obj_projeto);

	if($projeto){
		echo "Sucesso!";
                
	}else{
		echo "Erro!";
	} 