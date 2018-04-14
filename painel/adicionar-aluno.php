<?php 

	require_once("classe/conecta.php");
	require_once("classe/Aluno.php");
	require_once("classe/DaoAluno.php");
	require_once("classe/DaoUsuario.php");
	require_once("classe/Login.php");
    require_once("classe/Daocurso.php");

	$obj_aluno = new Aluno();
	$obj_daoaluno = new DaoAluno();
	$obj_daousuario = new DaoUsuario();
    $obj_daocurso = new DaoCurso();

	$email = $_POST['email'];
	$resulta_usu = $obj_daousuario->insereUsuario($conexao, $email, 1);

	if($resulta_usu){
		$usuario = $obj_daousuario->buscaUsuarioPorLogin($conexao, $email);
		$obj_aluno->setEmail($_POST['email']);
		$nome = utf8_decode($_POST['nome']);
		$obj_aluno->setNome($nome);
		$obj_aluno->setPca_id($_POST['campus']);
		$obj_aluno->setPcr_id($_POST['cargo']);
		$obj_aluno->setPpe_id($_POST['periodo']);
		$obj_aluno->setSemestre($_POST['semestre']);
		$obj_aluno->setPus_id($usuario['pus_id']);
		$obj_aluno->setId($_POST['curso']);
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

	die();
	/*if($resultado){
		echo "Sucesso!";
	}else{
		echo "Erro!";
	}*/