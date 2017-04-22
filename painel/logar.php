<?php 

	require_once("classe/conecta.php");
	require_once("classe/Login.php");
	require_once("classe/DaoUsuario.php");

	$obj_usuario = new DaoUsuario();
	$usuario     = $obj_usuario->buscaUsuario($conexao, $_POST["login"], $_POST["senha"]);

	if($usuario == null){
		$_SESSION["danger"] = "Usuário logado com sucesso.";
		header("Location: login.php");
	}else{
		$obj_login = new Login();
		$obj_login->logaUsuario($_POST["login"], $usuario['pus_id']);
		$_SESSION["success"] = "Usuário logado com sucesso.";
		header("Location: index.php");
	}
	die();