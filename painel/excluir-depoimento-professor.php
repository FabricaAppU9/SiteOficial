<?php 

    require_once("classe/conecta.php");
	require_once("classe/DaoDepoimentoProfessor.php");
	require_once("classe/DepoimentoProfessor.php");
	require_once("classe/Login.php");

	$obj_depoimento    = new DepoimentoProfessor();
	$obj_daodepoimento = new DaoDepoimentoProfessor();

    $depoimento = $obj_daodepoimento->excluirDepoimento($conexao, $obj_depoimento, $_SESSION["id"]);

    if($depoimento){
        header("Location: professores.php");
        die(); 
	}else{
		echo "Erro!";
	}    