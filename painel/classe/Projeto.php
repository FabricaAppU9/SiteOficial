<?php

	class Projeto{

		private $id;
		private $nome;
		private $descricao;
		private $data_inicio;
		private $data_fim;
		private $tecnologias;

		public function setId($id){
			$this->id = $id;
		}

		public function setNome($nome){
			$this->nome = $nome;
		}

		public function setDescricao($descricao){
			$this->descricao = $descricao;
		}

		public function setDataInicio($data_inicio){
			$this->data_inicio = $data_inicio;
		}

		public function setDataFim($data_fim){
			$this->data_fim = $data_fim;
		}

		public function setTecnologias($tecnologias){
			$this->tecnologias = $tecnologias;
		}

		public function getId(){
			return $this->id;
		}

		public function getNome(){
			return $this->nome;
		}

		public function getDescricao(){
			return $this->descricao;
		}

		public function getDataInicio(){
			return $this->data_inicio;
		}

		public function getDataFim(){
			return $this->data_fim;
		}

		public function getTecnologias(){
			return $this->tecnologias;
		}
	}