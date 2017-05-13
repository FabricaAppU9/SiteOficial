<?php 

	require_once("classe/conecta.php");
	require_once("classe/DaoProfessor.php");
	require_once("classe/Login.php");
	session_start();
	//ini_set('session.use_trans_sid', 10);
	$obj_professor = new DaoProfessor();

	$arquivo_tmp = $_FILES[ 'foto_perfil' ][ 'tmp_name' ];
	
	$nome = $_FILES[ 'foto_perfil' ][ 'name' ];

	$extensao = pathinfo ( $nome, PATHINFO_EXTENSION );
	$extensao = strtolower ( $extensao );

	if ( strstr ( '.jpg;.jpeg;.gif;.png', $extensao ) ) {

		$novoNome = uniqid ( time () ) . '_' . $_SESSION["id"] . '.' . $extensao;

		$destino = 'imagens/alunos/' . $novoNome;

		if ( @move_uploaded_file ( $arquivo_tmp, $destino ) ) {

			$obj_professor->MudaFoto($conexao,$novoNome,$_SESSION["id"]);
			
			$_SESSION['foto'] = "Imagem alterada com Sucesso!";
			header("Location: minha-conta-professor.php");

			print_r("Sucesso!");
		}else{
			echo "Erro";
			header("Location: minha-conta-professor.php");
		}
	}else{
		echo "Extensão não aceita!, por favor, informe um arquivo com .jpg, .jpeg, .gif ou .png";
	}