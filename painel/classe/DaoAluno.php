<?php 
	
	require_once("conecta.php");
	require_once("Aluno.php");

	class DaoAluno{

		public function buscaAlunoPorUsuario($conexao, $pus_id){

			$obj_aluno = new Aluno();
		
			$query     = "SELECT * FROM aluno WHERE pal_pus_id = {$pus_id}";
			$resultado = mysqli_query($conexao, $query);
			$aluno = mysqli_fetch_assoc($resultado);

			return $aluno;
		}

		public function listaAlunos($conexao){

			$alunos    = array();

			$query     = "SELECT * FROM aluno";
			$resultado = mysqli_query($conexao, $query);

			while($aluno = mysqli_fetch_assoc($resultado)){
				array_push($alunos,$aluno);
			}

			return $alunos;
		}

		public function MudaFoto($conexao,$foto,$pus_id){
			$query = "UPDATE aluno SET pal_foto = '{$foto}' WHERE pal_pus_id = {$pus_id}";
			return mysqli_query($conexao,$query);
		}

		public function alteraUsuario($conexao, Aluno $aluno){
			$query = "UPDATE aluno SET pal_nome = '{$aluno->getAluno()}', pal_ra = '{$aluno->getRa()}', pal_pcr_id = {$aluno->getPcr_id()}, pal_pca_id = {$aluno->getPca_id()}"
		}

	}