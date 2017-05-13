<?php 

	require_once("conecta.php");
	require_once("Aluno.php");
	class DaoUsuario{
		public function buscaUsuario($conexao, $email, $senha){
			$senhaMd5 = md5($senha);
			$email = mysqli_real_escape_string($conexao, $email);
			$query = "select * from usuario left join aluno on usuario.pus_id = pal_pus_id where pus_login = '{$email}' and pus_senha = '{$senhaMd5}' and pal_pus_id = 1";
			$resultado = mysqli_Query($conexao, $query);
			$usuario = mysqli_fetch_assoc($resultado);
			return $usuario;
		}

		public function buscaUsuarioPorId($conexao, $id){
			$query = "SELECT * FROM usuario WHERE pus_id = {$id}";
			$resultado = mysqli_query($conexao,$query);
			$usuario = mysqli_fetch_assoc($resultado);
			return $usuario;
		}

		public function alteraFoto($conexao, $imagem, $pus_id){
			$query = "UPDATE usuario SET pus_foto = '{$imagem}' WHERE pus_id = {$pus_id}";
			return mysqli_query($conexao,$query);
		}

		public function alteraSenha($conexao, $senha, $pus_id){
			$query = "UPDATE usuario SET pus_senha = '{$senha}' WHERE pus_id = {$pus_id}";
			return mysqli_query($conexao,$query);
		}

		

	}
	