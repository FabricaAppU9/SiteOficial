<?php 

	require_once("classe/conecta.php");
	require_once("classe/DaoAluno.php");
	require_once("classe/Login.php");

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
			header("Location: minhaconta.php");
		}else{
			echo "Erro";
		}
	}else{
		echo "Extensão não aceita!, por favor, informe um arquivo com .jpg, .jpeg, .gif ou .png";
	}