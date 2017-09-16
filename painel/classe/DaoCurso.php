<?php 

	require_once("conecta.php");

	class DaoCurso{

		public function listaCursos($conexao){
			$cursos = array();
			$query = "SELECT * FROM curso";
			$resultado = mysqli_query($conexao,$query);

			while($curso = mysqli_fetch_assoc($resultado)){
				array_push($cursos,$curso);
			}

			return $cursos;
		}
	}