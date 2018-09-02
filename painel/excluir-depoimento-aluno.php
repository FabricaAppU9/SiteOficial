<?php

    require_once("classe/conecta.php");
    require_once("classe/DaoDepoimentoAluno.php");
  	require_once("classe/DepoimentoAluno.php");
    require_once("classe/Login.php");
	
	        
        $obj_daodepoimento = new DaoDepoimentoAluno();
        $obj_depoimento = new DepoimentoAluno();
        
        
         $depoimento = $obj_daodepoimento->excluirDepoimento($conexao, $obj_depoimento, $_SESSION["id"]);

    if($depoimento){
        header("Location: depoimento.php");
        die(); 
	}else{
		echo "Erro!";
	}    