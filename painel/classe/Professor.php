<?php 

class Professor{

	private $nome;
	private $habilitado;
	private $foto;
	private $pus_id;
	private $facebook;
	private $github;
	private $linkedin;
	private $data_ini;
	private $data_update;
	private $data_fim;

	
	public function setNome($nome){
		$this->nome = $nome;
	}

	public function setHabilitado($habilitado){
		$this->habilitado = $habilitado;
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

	public function setData_ini($data_ini){
		$this->data_ini = $data_ini;
	}

	public function setData_update($data_update){
		$this->data_update = $data_update;
	}

	public function setData_fim($data_fim){
		$this->data_fim = $data_fim;
	}

	//Setters
	public function getNome(){
		return $this->nome;
	}

	public function getHabilitado(){
		return $this->habilitado;
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

	public function getData_ini(){
		return $this->data_ini;
	}

	public function getData_update(){
		return $this->data_update;
	}

	public function getData_fim(){
		return $this->data_fim;
	}


}