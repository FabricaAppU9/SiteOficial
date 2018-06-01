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
                
                public function listaProfessores($conexao){
                    $professores = array();
                    
                    $query = "SELECT * FROM professor WHERE prf_habilitado = 1";
                    $resultado = mysqli_query($conexao, $query);
                    
                    while ($professor = mysqli_fetch_assoc($resultado)){
                        array_push($professores, $professor);
                    }
                    
                    return $professores;
                }
                
                public function adicionaProfessor($conexao, Professor $professor){
                    $query = "INSERT INTO professor (prf_nome, prf_pus_id, prf_habilitado, prf_pcr_id) VALUES ('{$professor->getNome()}', '{$professor->getPus_id()}', 1 , 3) ";
                    return mysqli_query($conexao, $query);
                    
                }
	}