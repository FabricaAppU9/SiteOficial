<?php
	// teste
	require_once("classe/conecta.php");
	require_once("classe/DaoProjeto.php");
	require_once("classe/Login.php");
	session_start();
	ini_set('session.use_trans_sid', 10);
	$obj_aluno = new DaoAluno();

	$arquivo_tmp = $_FILES[ 'foto_perfil' ][ 'tmp_name' ];

	$nome = $_FILES[ 'foto_perfil' ][ 'name' ];

	$extensao = pathinfo ( $nome, PATHINFO_EXTENSION );
	$extensao = strtolower ( $extensao );

	if ( strstr ( '.jpg;.jpeg;.gif;.png', $extensao ) ) {

		$novoNome = uniqid ( time () ) . '_' . $_SESSION["id"] . '.' . $extensao;

		$destino = 'imagens/alunos/' . $novoNome;

		if ( @move_uploaded_file ( $arquivo_tmp, $destino ) ) {

			$obj_aluno->MudaFoto($conexao,$novoNome,$_SESSION["id"]);
			$_SESSION['foto'] = "Imagem alterada com Sucesso!";
			header("Location: minhaconta.php");

			print_r("Sucesso!");
		}else{
			echo "Erro";
			header("Location: minhaconta.php");
		}
	}else{
		echo "Extensão não aceita!, por favor, informe um arquivo com .jpg, .jpeg, .gif ou .png";
	}
