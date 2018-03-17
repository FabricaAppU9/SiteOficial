<?php

class DepoimentoProfessor{
	
	private $texto;
	private $data_inclusao;
	private $data_update;

	public function setTexto($texto){
		$this->texto = $texto;
	}

	public function setDataInclusao($data_inclusao){
		$this->data_inclusao = $data_inclusao;
	}

	public function setDataUpdate($data_update){
		$this->data_update = $data_update;
	}

	public function getTexto(){
		return $this->texto; 
	}

	public function getDataInclusao(){
		return $this->data_inclusao;
	}

	public function getDataUpdate(){
		return $this->data_update;
	}
}