<?php

    require_once("classe/conecta.php");
    require_once("classe/Professor.php");
    require_once("classe/DaoProfessor.php");
    require_once("classe/DaoUsuario.php");
    require_once("classe/Login.php");
    
    $obj_professor =    new Professor();
    $obj_daoprofessor = new DaoProfessor();
    $obj_daousuario =   new DaoUsuario();

    $nome = utf8_decode($_POST['nome']);
    $email = utf8_decode($_POST['email']);
    

    
    $obj_professor->setNome($nome);
    $obj_professor->setEmail($email);
    
    $resultausu = $obj_daousuario->insereUsuario($conexao, $obj_professor->getEmail(), 2);
    
    if($resultausu){
        $usuario = $obj_daousuario->buscaUsuarioPorLogin($conexao, $obj_professor->getEmail());
        $usuarioId = (int)($usuario['pus_id']);
        $obj_professor->setPus_id($usuarioId);
        
        try{
            $resultado = $obj_daoprofessor->adicionaProfessor($conexao, $obj_professor);
        } catch(Exception $e){
            print_r($e);
        }
        
        if($resultado){
            echo 'Sucesso';
        }
        else{
            echo 'Erro!';
        }
    }
    else{
        echo 'Usuário não adicionado';
    }