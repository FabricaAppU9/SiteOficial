<?php 

	require_once("classe/conecta.php");
	require_once("classe/Login.php");
	require_once("classe/DaoUsuario.php");

	$obj_usuario = new DaoUsuario();
	$usuario     = $obj_usuario->buscaUsuario($conexao, $_POST["login"], $_POST["senha"]);
	$erro = 0;
	if($usuario == null){
		$_SESSION["danger"] = "Usuário ou senha não encontrado.";
		header("Location: login.php");
	}else{
		if($usuario['pus_ptu_id'] == 1){
			$usuario_aluno = $obj_usuario->buscaUsuarioAluno($conexao, $_POST["login"], $_POST["senha"]);
			if($usuario_aluno['pal_habilitado'] < 1){
				$erro = 1;
			}
		}else{
			$usuario_aluno = $obj_usuario->buscaUsuarioProfessor($conexao, $_POST["login"], $_POST["senha"]);
			if($usuario_aluno['prf_habilitado'] < 1){
				$erro = 1;
			}
		}
		if($erro == 0){
			$obj_login = new Login();
			$obj_login->logaUsuario($_POST["login"], $usuario['pus_id']);
			$_SESSION["success"] = "Usuário logado com sucesso.";
			header("Location: index.php");
		}else{
			header("Location: login.php");
		}
		
	}
	die();