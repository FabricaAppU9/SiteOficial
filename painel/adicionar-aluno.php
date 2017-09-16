<?php 

	require_once("classe/conecta.php");
	require_once("classe/Aluno.php");
	require_once("classe/DaoAluno.php");
	require_once("classe/DaoUsuario.php");
	require_once("classe/Login.php");

	$obj_aluno = new Aluno();
	$obj_daoaluno = new DaoAluno();
	$obj_daousuario = new DaoUsuario();

	$ra = $_POST['ra'];
	$resulta_usu = $obj_daousuario->insereUsuario($conexao, $ra, 1);

	if($resulta_usu){
		$usuario = $obj_daousuario->buscaUsuarioPorLogin($conexao, $ra);
		$obj_aluno->setRa($_POST['ra']);
		$nome = utf8_decode($_POST['nome']);
		$obj_aluno->setNome($nome);
		$obj_aluno->setPca_id($_POST['campus']);
		$obj_aluno->setPcr_id($_POST['cargo']);
		$obj_aluno->setPpe_id($_POST['periodo']);
		$obj_aluno->setSemestre($_POST['semestre']);
		$obj_aluno->setPus_id($usuario['pus_id']);
		$data = date('y/m/d');

		$resultado = $obj_daoaluno->adicionaAluno($conexao, $obj_aluno, $data);

		if($resultado){
			echo "Sucesso!";
		}else{
			echo "Erro!";
		}
	}else{
		echo "Usuário não adicionado!";
	}

	
	/*if($resultado){
		echo "Sucesso!";
	}else{
		echo "Erro!";
	}*/