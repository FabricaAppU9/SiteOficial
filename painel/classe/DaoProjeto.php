<?php

	require_once("conecta.php");
	require_once("Projeto.php");
	require_once ("Professor.php");

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

		public function alterarProjeto($conexao, Projeto $projeto, $prf_id){
			$query = "UPDATE projetos SET prj_nome = '{$projeto->getNome()}' WHERE pdp_prf_id = {$prf_id}"; 
			return mysqli_query($conexao,$query);
		}

		public function excluirProjeto(){
			
		}
	}