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


	$ra = $_POST['ra'];
    $obj_aluno->setEmail($_POST['email']);
	$resulta_usu = $obj_daousuario->insereUsuario($conexao, $obj_aluno->getEmail(), 1);
       
      
	   if($resulta_usu){
		$usuario = $obj_daousuario->buscaUsuarioPorLogin($conexao,  $obj_aluno->getEmail());
		$obj_aluno->setRa($_POST['ra']);
            $nome = utf8_decode($_POST['nome']);
		$obj_aluno->setNome($nome);
		$obj_aluno->setPca_id($_POST['campus']);
		$obj_aluno->setPcr_id($_POST['cargo']);
		$obj_aluno->setPpe_id($_POST['periodo']);
		$obj_aluno->setSemestre($_POST['semestre']);
                $usuarioId = (int)($usuario['pus_id']);
		$obj_aluno->setPus_id($usuarioId);
               
		//$obj_aluno->setId($_POST['curso']);
		//$obj_aluno->setPcs_id($_POST['curso']);
        
		$data = date('y/m/d');
                
                
                
		$resultado = $obj_daoaluno->adicionaAluno($conexao, $obj_aluno);
                
                

                if($resultado){
			echo "Sucesso!";
		}else{
			echo "Erro!";
		}
	}else{
		echo "Usuário não adicionado!";
	}

        
	die();
	