<?php

	require_once("conecta.php");
	require_once("Professor.php");
	require_once("DaoDepoimentoProfessor.php");

	class DaoDepoimentoProfessor{

	//Selecionar depoimento do Professor
		public function selecionarDepoimento($conexao, $prf_id){
			$query = "SELECT * FROM depoimento_professor WHERE pdp_prf_id={$prf_id}";
			$resultado = mysqli_query($conexao, $query);
			$depoimento = mysqli_fetch_assoc($resultado);

			return $depoimento;
		}

	//Inserir depoimento do professor

	//Alterar depoimento do professor
	}