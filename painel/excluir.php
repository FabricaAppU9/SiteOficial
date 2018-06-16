<?php

    require_once("classe/conecta.php");
	require_once ("classe/DaoAluno.php");
    require_once("classe/Aluno.php");
    require_once("classe/Login.php");
	
        
        $obj_daoaluno = new DaoAluno();
        $obj_aluno = new Aluno();
        
        $aluno_id = $_GET['id'];
        var_dump($aluno_id);
        
        $aluno = $obj_daoaluno->excluiAluno($conexao, $aluno_id);
        
        header("Location: alunos.php");
        die();
        
            

