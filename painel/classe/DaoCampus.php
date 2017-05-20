<?php 
	// teste
	require_once("conecta.php");

	class DaoCampus{
		public function buscaCargos($conexao){
			$campus = array();

			$query = "SELECT * FROM campus";
			$resultado = mysqli_query($conexao,$query);
			while($campu = mysqli_fetch_assoc($resultado)){
				array_push($campus,$campu);
			}
			return $campus;

		}
	}
	