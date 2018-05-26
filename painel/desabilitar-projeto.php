<?php

        require_once("classe/conecta.php");
	require_once ("classe/DaoProjeto.php");
	require_once("classe/Projeto.php");
	require_once("classe/Login.php");
        
        $obj_projeto    = new Projeto();
        $obj_daoprojeto = new DaoProjeto();
        
        $projeto_id = $_POST['projeto_id'];
        
        $projeto = $obj_daoprojeto->desabilitarProjeto($conexao, $projeto_id);
        
        if($projeto){
            echo 'Sucesso';
        }
        else{
            'Erro';
        }
        
        
        