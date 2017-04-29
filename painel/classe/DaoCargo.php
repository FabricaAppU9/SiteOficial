<?php 

	require_once("conecta.php");

	class DaoCargo{

		public function listaCargos($conexao){

			$cargos    = array();
			$query     = "SELECT * FROM cargo";

			$resultado = mysqli_query($conexao,$query);
			while($cargo = mysqli_fetch_assoc($resultado)){
				array_push($cargos,$cargo);
			}

			return $cargos;
		}
	}