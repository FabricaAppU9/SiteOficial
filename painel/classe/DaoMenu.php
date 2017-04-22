<?php 

	require_once("conecta.php");

	class DaoMenu{

		public function consultaMenu($conexao,$tipo_usuario){
			$menus = array();
			$query = "SELECT * FROM menu WHERE pme_ptu_id = {$tipo_usuario}";
			$resultado = mysqli_query($conexao,$query);
			while($menu = mysqli_fetch_assoc($resultado)){
				array_push($menus,$menu);
			}

			return $menus;

		}
	}