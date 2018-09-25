<?php

    require_once("classe/conecta.php");
    require_once("classe/DaoDepoimentoAluno.php");
  	require_once("classe/DepoimentoAluno.php");
    require_once("classe/Login.php");
	
	        
        $obj_daodepoimento = new DaoDepoimentoAluno();
        $obj_depoimento = new DepoimentoAluno();
        
        $id_aluno = $_GET['id'];
        
        $depoimento = $obj_daodepoimento->excluirDepoimento($conexao, $obj_depoimento, $id_aluno);

    if($depoimento){
        header("Location: lista-depoimentos-aluno.php");
        die(); 
	}else{
		echo "Erro!";
	}    