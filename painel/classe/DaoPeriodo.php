<?php 
	// teste
	require_once("conecta.php");

	class DaoPeriodo{

		public function listaPeriodos($conexao){

			$periodos    = array();
			$query     = "SELECT * FROM periodo";

			$resultado = mysqli_query($conexao,$query);
			while($periodo = mysqli_fetch_assoc($resultado)){
				array_push($periodos,$periodo);
			}

			return $periodos;
		}
	}