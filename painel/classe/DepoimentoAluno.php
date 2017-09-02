<?php

class DepoimentoAluno{
	
	private $texto;
	private $data_inicio;
	private $data_update;

	public function setTexto($texto){
		$this->texto = $texto;
	}

	public function setDataInicio($data_inicio){
		$this->data_inicio = $data_inicio;
	}

	public function setDataUpdate($data_update){
		$this->data_update = $data_update;
	}

	public function getTexto(){
		return $this->texto;
	}

	public function getDataInicio(){
		return $this->data_inicio;
	}

	public function getDataUpdate(){
		return $this->data_update;
	}

} 