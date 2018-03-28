<?php

	require_once("conecta.php");
	require_once("Projeto.php");

	class DaoProjeto{

		public function listaProjeto($conexao){
			$projetos = array();

			$query = "SELECT * FROM projeto";
			$resultado = mysqli_query($conexao, $query);

			while($projeto = mysqli_fetch_assoc($resultado)){
				array_push($projetos, $projeto);
			}

			return $projetos;
		}

		public function inserirProjeto(){

		}

		public function alterarProjeto(){

		}

		public function excluirProjeto(){
			
		}
	}