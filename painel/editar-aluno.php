<?php
    
    require_once("classe/conecta.php");
    require_once("classe/DaoAluno.php");
    require_once("classe/Aluno.php");
	
    $id = $_POST['id'];
	$nome = $_POST['nome'];
	$ra = $_POST['ra'];
	$campus = $_POST['campus'];
	$curso = $_POST['curso'];
	$cargo = $_POST['cargo'];
	$periodo = $_POST['período'];
	$semestre = $_POST['semestre'];                      

	$obj_aluno    = new Aluno();
	$obj_daoaluno = new DaoAluno();

	$obj_aluno->setNome($nome);
	$obj_aluno->setRa($ra);
	$obj_aluno->setPcr_id($cargo);
	$obj_aluno->setPca_id($campus);
	$obj_aluno->setPpe_id($periodo);
	$obj_aluno->setSemestre($semestre);

	$resultado = $obj_daoaluno->alterarAluno($conexao, $obj_aluno, $id);

	if($resultado){
		echo 'Sucesso';
	}
	else{
		echo 'Erro';
	}
?>