<?php 
	// teste
	require_once("classe/DaoUsuario.php");
	require_once("classe/conecta.php");
	require_once("classe/Login.php");
	$obj_usuario    = new DaoUsuario();

	$usuario        =  $obj_usuario->buscaUsuarioPorId($conexao, $_SESSION["id"]);

	$senhaAntigaMd5 = md5($_POST['senha_antiga']); 
	if($senhaAntigaMd5 == $usuario['pus_senha']){
		$senhaNova = md5($_POST['senha_nova']);
		$retorno = $obj_usuario->alteraSenha($conexao, $senhaNova, $_SESSION["id"]);
		if($retorno){
			echo "Sucesso!";
		}
	}