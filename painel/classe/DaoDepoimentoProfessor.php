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
		public function inserirDepoimento($conexao, DepoimentoProfessor $depoimento, $prf_id){
			$query = "INSERT INTO depoimento_professor (pdp_texto, pdp_data_inclusao, pdp_prf_id) values ('{$depoimento->getTexto()}', '{$depoimento->getDataInclusao()}', {$prf_id})";
			return mysqli_query($conexao, $query);
		}

	//Alterar depoimento do professor
		public function alteraDepoimento($conexao, DepoimentoProfessor $depoimento, $prf_id){
			$query = "UPDATE depoimento_professor SET pdp_texto = '{$depoimento->getTexto()}', pdp_data_update = '{$depoimento->getDataUpdate()}' WHERE pdp_prf_id = {$prf_id}"; 
			return mysqli_query($conexao,$query);
			//return $query;
			//return $aluno->getFacebook();
		}
	}