<?php

//Fazer DAODepoimento
	require_once("conecta.php");
	require_once("Aluno.php");
	require_once("DepoimentoAluno.php");

	class DaoDepoimentoAluno{

		public function alteraDepoimento($conexao, DepoimentoAluno $depoimento, $data_inicio, $data_update, $pda_id){
			$query = "UPDATE depoimento_aluno SET pda_texto = '{$depoimento->getTexto()}', pda_data_inicio = '{data_inicio}', pda_data_update = '{$data_update}' WHERE pda_pal_id = {$pda_id}"; 
			return mysqli_query($conexao,$query);
			//return $query;
			//return $aluno->getFacebook();
		}
	}
