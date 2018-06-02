<?php 
    
    require_once("classe/conecta.php");
    require_once ("classe/DaoProfessor.php");
    require_once("classe/Professor.php");
    require_once("classe/Login.php");
    
    $obj_professor = new Professor();
    $obj_daoprofessor = new DaoProfessor();
    
    $professor_id = $_GET["id"];
    
    $professor = $obj_daoprofessor->desabilitarProfessor($conexao, $professor_id);
    
    header("Location: professores.php");
    die();