<?php

	require_once("conecta.php");
	require_once("Aluno.php");
	require_once("DepoimentoAluno.php");

	class DaoDepoimentoAluno{

		//Função de alterar depoimento
		public function alteraDepoimento($conexao, DepoimentoAluno $depoimento, $pal_id){
			$query = "UPDATE depoimento_aluno SET pda_texto = '{$depoimento->getTexto()}', pda_data_update = '{$depoimento->getDataUpdate()}' WHERE pda_pal_id = {$pal_id}"; 
			return mysqli_query($conexao,$query);
		}

		//Função de selecionar depoimento
		public function selecionarDepoimento($conexao, $pal_id){
			$query = "SELECT * FROM depoimento_aluno WHERE pda_pal_id={$pal_id}";
			$resultado = mysqli_query($conexao, $query);
			$depoimento = mysqli_fetch_assoc($resultado);

			return $depoimento;
		}

		//Função de inserir depoimento
		public function inserirDepoimento($conexao, DepoimentoAluno $depoimento, $pal_id){
			$query = "INSERT INTO depoimento_aluno (pda_texto, pda_data_inicio, pda_pal_id) values('{$depoimento->getTexto()}', '{$depoimento->getDataInicio()}', {$pal_id})";
			return mysqli_query($conexao,$query);
		}
		
		//Função de excluir depoimento
		public function excluirDepoimento($conexao, $pal_id){
			$query = "DELETE FROM depoimento_aluno where pda_pal_id= {$pal_id}";
			return mysqli_query($conexao, $query);
		} 
	}
