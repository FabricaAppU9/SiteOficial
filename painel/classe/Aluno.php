<?php 
	// teste
	class Aluno{

		private $nome;
		private $ra;
		private $pcr_id; //cargo do aluno na fábrica. Chave estrangeira da tabela cargo.
		private $pca_id; // campus do aluno na fábrica. Chave estrangeira da tabela campus.
		private $semestre;
		private $ppe_id; // período do aluno. Chave estrangeira da tabela período. CHAVE ppe_id = id.
		private $pcu_id; // curso do aluno. Chave estrangeira da tabela curso.
		private $foto;
		private $pus_id;
		private $facebook;
		private $github;
		private $linkedin;
		private $data_ini;
		private $data_update;
		private $data_fim;
		private $habilitado;
		private $email;

		public function setNome($nome){
			$this->nome = $nome;
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

		public function setPpe_id($ppe_id){
			$this->ppe_id = $ppe_id;
		}

		public function setFoto($foto){
			$this->foto = $foto;
		}

		public function setPus_id($pus_id){
			$this->pus_id = $pus_id;
		}

		public function setFacebook($facebook){
			$this->facebook = $facebook;
		}

		public function setGithub($github){
			$this->github = $github;
		}

		public function setLinkedin($linkedin){
			$this->linkedin = $linkedin;
		}

		public function setDataIni($data_ini){
			$this->data_ini = $data_ini;
		}

		public function setDataUpdate($data_update){
			$this->data_update;
		}

		public function setDataFim($data_fim){
			$this->data_fim;
		}

		public function setHabilitado($habilitado){
			$this->habilitado = $habilitado;
		}

		public function setPcu_id($pcu_id){
			$this->pcu_id = $pcu_id;
		}

		public function setEmail($email){
			$this->email = $email;
		}

		public function getNome(){
			return $this->nome;
		}

		public function getRa(){
			return $this->ra;
		}

		public function getPcr_id(){
			return $this->pcr_id;
		}

		public function getPca_id(){
			return $this->pca_id;
		}

		public function getSemestre(){
			return $this->semestre;
		}

		public function getPpe_id(){
			return $this->ppe_id;
		}

		public function getFoto(){
			return $this->foto;
		}

		public function getPus_id(){
			return $this->pus_id;
		}

		public function getFacebook(){
			return $this->facebook;
		}

		public function getGithub(){
			return $this->github;
		}

		public function getLinkedin(){
			return $this->linkedin;
		}

		public function getDataIni(){
			return $this->data_ini;
		}

		public function getDataUpdate(){
			return $this->data_update;
		}

		public function getDataFim(){
			return $this->data_fim;
		}

		public function getHabilitado(){
			return $this->habilitado;
		}

		public function getPcu_id(){
			return $this->pcu_id;
		}

		public function getEmail(){
			return $this->email;
		}


	}