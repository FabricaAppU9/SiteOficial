<?php 
	// teste
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


			$query     = "SELECT * FROM aluno left join campus ON campus.pca_id = aluno.pal_pcr_id left join curso ON curso.id = aluno.pal_pcr_id left join cargo ON cargo.pcr_id = aluno.pal_pcr_id";
			$resultado = mysqli_query($conexao, $query);
            
            if($resultado == FALSE){
                
            ECHO " Erro no Banco de Dados Aluno";
            
            }else 
                
                while($aluno = mysqli_fetch_assoc($resultado)){

				array_push($alunos,$aluno);
			     }
            

			return $alunos;
		}

		//Lista depoimento aluno
		public function listatodososdepoimentos($conexao){

			$alunos    = array();

			$query     = "SELECT * FROM depoimento_aluno left join aluno on aluno.pal_pus_id = depoimento_aluno.pda_pal_id";
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

		public function alteraUsuario($conexao, Aluno $aluno, $data_update, $pal_id){
			$query = "UPDATE aluno SET pal_nome = '{$aluno->getNome()}', pal_pcr_id = {$aluno->getPcr_id()}, pal_pca_id = {$aluno->getPca_id()}, pal_facebook = '{$aluno->getFacebook()}', pal_github = '{$aluno->getGithub()}', pal_linkedin = '{$aluno->getLinkedin()}', pal_data_update = '{$data_update}' WHERE pal_pus_id = {$pal_id}"; 
			return mysqli_query($conexao,$query);
			//return $query;
			//return $aluno->getFacebook();
		}

		public function buscaAlunoPorCampus($conexao, $pal_pca_id){
			$alunos    = array();
			$query = "SELECT * FROM aluno left join campus on campus.pca_id = aluno.pal_pca_id left join cargo on cargo.pcr_id = aluno.pal_pca_id left join curso on curso.id = aluno.pal_pca_id WHERE pal_pca_id = {$pal_pca_id}";
			$resultado = mysqli_query($conexao, $query);
            

            if($resultado == FALSE){
                
            ECHO "<center><h1>Selecione Campus</h1></center>";
            
            }else 

			while($aluno = mysqli_fetch_assoc($resultado)){
				array_push($alunos,$aluno);
			}

			return $alunos;
		}


		public function adicionaAluno($conexao, Aluno $aluno){
            
			
                        
                        $query = "INSERT INTO aluno (pal_ra, pal_nome, pal_pcr_id, pal_pca_id, pal_ppe_id, pal_semestre, pal_pus_id, pal_habilitado) VALUES ('{$aluno->getRa()}', '{$aluno->getNome()}',  {$aluno->getPcr_id()}, {$aluno->getPca_id()},  {$aluno->getPpe_id()}, '{$aluno->getSemestre()}', {$aluno->getPus_id()}, 1)";
                        
                        
               
			return mysqli_query($conexao, $query);
			#return $query;
		}

		public function alterarAluno($conexao, Aluno $aluno, $id){
			$query = "UPDATE aluno SET (pal_nome, pal_ra, pal_pcr_id, pal_pca_id, pal_ppe_id, pal_semestre) VALUES('{$aluno->getNome()}', '{$aluno->getRa()}', {$aluno->getPcr_id()}, {$aluno->getPca_id()}, {$aluno->getPpe_id()}, '{$aluno->getSemestre()}') WHERE pal_id = {$id}";
			return mysqli_query($conexao, $query);
		}

	}