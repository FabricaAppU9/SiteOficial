<?php

	require_once("classe/conecta.php");
	require_once("classe/DaoProjeto.php");
	require_once("classe/Login.php");

	$idProjeto = $_POST['id_projeto'];

	$obj_projeto = new DaoProjeto();

	$arquivo_tmp = $_FILES[ 'foto_perfil' ][ 'tmp_name' ];

	$nome = $_FILES[ 'foto_perfil' ][ 'name' ];

	$extensao = pathinfo ( $nome, PATHINFO_EXTENSION );
	$extensao = strtolower ( $extensao );

	if ( strstr ( '.jpg;.jpeg;.gif;.png', $extensao ) ) {

		$novoNome = uniqid ( time () ) . '_' . md5(time()) . '.' . $extensao;

		$destino = 'imagens/alunos/' . $novoNome;

		if ( @move_uploaded_file ( $arquivo_tmp, $destino ) ) {

			$obj_projeto->MudaFoto($conexao,$novoNome,$idProjeto);
			header("Location: projetos.php");

			print_r("Sucesso!");
		}else{
			echo "Erro";
		}
	}else{
		echo "Extensão não aceita!, por favor, informe um arquivo com .jpg, .jpeg, .gif ou .png";
	}
