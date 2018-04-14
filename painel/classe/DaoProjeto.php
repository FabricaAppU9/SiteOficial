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

		public function inserirProjeto($conexao, Projeto $projeto){
			$query = "INSERT INTO projeto(prj_nome, prj_descricao, prj_data_inicio, prj_data_fim, prj_tecnologias) VALUES ('{$projeto->getNome()}', '{$projeto->getDescricao()}',
			'{$projeto->getDataInicio()}', '{$projeto->getDataFim()}', '{$projeto->getTecnologias()}')";
			return mysqli_query($conexao,$query);
		}

		public function alterarProjeto($conexao, Projeto $projeto, $prj_id){
			$query = "UPDATE projeto SET prj_nome = '{$projeto->getNome()}', prj_descricao = '{$projeto->getDescricao()}', prj_data_inicio = '{$projeto->getDataInicio()}', prj_data_fim = '{$projeto->getDataFim()}', prj_tecnologias = '{$projeto->getTecnologias()}' WHERE prj_id = {$prj_id}"; 
			return mysqli_query($conexao,$query);
		}

		public function excluirProjeto(){
			
		}
		
		public function buscaProjetoPorId($conexao, $id){
			$query = "SELECT * FROM projeto WHERE prj_id = {$id}";
			$resultado = mysqli_query($conexao,$query);
			$projeto = mysqli_fetch_assoc($resultado);
			return $projeto;
		}
	}