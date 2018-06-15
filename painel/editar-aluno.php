<?php
    
    require_once("classe/conecta.php");
    require_once("classe/DaoAluno.php");
    require_once("classe/Aluno.php");
    
    
    $id = $_GET['pus_id'];
	$nome = $_GET['nome'];
	$ra = $_GET['ra'];
	$campus = $_GET['campus'];
	$curso = $_GET['curso'];
	$cargo = $_GET['cargo'];                      

                                  
$sql = "UPDATE aluno SET pal_ra='" . $ra . "', pal_nome='" . $nome ."', pal_pcr_id ='" . $cargo ."', pal_ppe_id ='". $curso ."', pal_pca_id ='" . $campus ."'WHERE pal_id=".$id;                 
$update = mysqli_query($conexao, $sql);
    
?>