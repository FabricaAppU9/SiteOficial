<?php 

	class Aluno{

		private $nome;
		private $ra;
		private $pcr_id; //cargo do aluno na fábrica. Chave estrangeira da tabela cargo.
		private $pca_id; // campus do aluno na fábrica. Chave estrangeira da tabela campus.
		private $semestre;
		private $ppe_id; // período do aluno. Chave estrangeira da tabela período.
		//private $pcg_id
		private $foto;
		private $pus_id;

		public function setNome($nome){
			$this->nome = $nome
		}

		public function setRa($ra){
			$this->ra = $ra;
		}

		public function setPcr_id($pcr_id){
			$this->pcr_id = $pcr_id;
		}

		public function setPca_id($pca_id){
			$this->pca_id = $pca_id;
		}

		public function setSemestre($semestre){
			$this->semestre = $semestre;
		}
	}