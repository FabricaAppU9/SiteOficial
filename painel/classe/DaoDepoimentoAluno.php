<?php

//Fazer DAODepoimento
	require_once("conecta.php");
	require_once("Aluno.php");
	require_once("DepoimentoAluno.php");

	class DaoDepoimentoAluno{

		public function alteraDepoimento($conexao, DepoimentoAluno $depoimento, $pal_id){
			$query = "UPDATE depoimento_aluno SET pda_texto = '{$depoimento->getTexto()}', pda_data_update = '{$data_update}' WHERE pda_pal_id = {$pal_id}"; 
			return mysqli_query($conexao,$query);
			//return $query;
			//return $aluno->getFacebook();
		}

		//Função de selecionar depoimento
		public function selecionarDepoimento($conexao, $pal_id){
			$query = "SELECT * FROM depoimento_aluno WHERE pda_pal_id={$pal_id}";
			$resultado = mysqli_query($conexao, $query);
			$depoimento = mysqli_fetch_assoc($resultado);

			return $depoimento;
		}


		public function inserirDepoimento($conexao, DepoimentoAluno $depoimento, $pal_id){
			$query = "INSERT INTO depoimento_aluno (pda_texto, pda_data_inicio, pda_pal_id) values('{$depoimento->getTexto()}', '{$depoimento->getDataInicio()}', {$pal_id})";
			return mysqli_query($conexao,$query);
		} 
	}
