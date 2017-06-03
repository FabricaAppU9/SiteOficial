<?php

	require_once("conecta.php");
	require_once("Professor.php");

	class DaoProfessor{

		public function buscaProfessorPorUsuario($conexao,$pus_id){
			$query = "SELECT * FROM professor WHERE prf_pus_id = {$pus_id}";
			$resultado = mysqli_query($conexao,$query);
			$professor = mysqli_fetch_assoc($resultado);
			return $professor;
		}

		public function MudaFoto($conexao,$foto,$pus_id){
			$query = "UPDATE professor SET prf_foto = '{$foto}' WHERE prf_pus_id = {$pus_id}";
			return mysqli_query($conexao,$query);
			//return $query;
		}

		public function alteraUsuario($conexao, Professor $professor, $data_update, $prf_id){
			$query = "UPDATE professor SET prf_nome = '{$professor->getNome()}',  prf_facebook = '{$professor->getFacebook()}', prf_github = '{$professor->getGithub()}', prf_linkedin = '{$professor->getLinkedin()}', prf_data_update = '{$data_update}' WHERE prf_pus_id = {$prf_id}"; 
			return mysqli_query($conexao,$query);
			//return $query;
			//return $aluno->getFacebook();
		}
	}