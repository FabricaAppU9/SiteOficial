<?php

	 require_once("classe/conecta.php");
	 require_once("classe/DaoDepoimentoProfessor.php");
	 require_once("classe/DepoimentoProfessor.php");
	 require_once("classe/login.php");

	 $obj_depoimento    = new DepoimentoProfessor();
	 $obj_daodepoimento = new DaoDepoimentoProfessor();

	 $obj_depoimento->setTexto(utf8_decode($_POST['depoimento']));
	 $obj_depoimento->setDataInclusao(date('y/m/d'));

	 $depoimento = $obj_daodepoimento->inserirDepoimento($conexao, $obj_depoimento, $_SESSION["id"]);

	 if($depoimento){
		echo "Sucesso";
	 }
	 else{
		echo "Erro";
	 }