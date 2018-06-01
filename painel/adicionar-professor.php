<?php

    require_once("classe/conecta.php");
    require_once("classe/Professor.php");
    require_once("classe/DaoProfessor.php");
    require_once("classe/DaoUsuario.php");
    require_once("classe/Login.php");
    
    $obj_professor =    new Professor();
    $obj_daoprofessor = new DaoProfessor();
    $obj_daousuario =   new DaoUsuario();
    
    $obj_professor->setNome($_POST['nome']);
    $obj_professor->setEmail($_POST['email']);