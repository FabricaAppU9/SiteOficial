<?php

	require_once("conecta.php");
	require_once("Professor.php");

	class DaoProfessor{

		public function buscaProfessorPorUsuario($conexao,$pus_id){
			$query = "SELECT * FROM professor WHERE prf_pus_id = {$pus_id}";
			$resultado = mysqli_query($conexao,$query);
			$professor = mysqli_fetch_assoc($resultado);
			return $professor;
		}

		public function MudaFoto($conexao,$foto,$pus_id){
			$query = "UPDATE professor SET prf_foto = '{$foto}' WHERE prf_pus_id = {$pus_id}";
			return mysqli_query($conexao,$query);
			//return $query;
		}
	}