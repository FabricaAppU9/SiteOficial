<?php 

	require_once("classe/conecta.php");
	require_once("classe/DaoAluno.php");
	require_once("classe/Login.php");

	$obj_daoaluno = new DaoAluno();

	$pal_pca_id = $_POST['opcao'];
	$alunos = $obj_daoaluno->buscaAlunoPorCampus($conexao, $pal_pca_id);

	$html = "";
	foreach($alunos as $aluno){
		$html .= "<tr>";
		$html .= "<td>".$aluno['pal_ra']."</td>";
		$html .= "<td>".utf8_encode($aluno['pal_nome'])."</td>";
		$html .= "<td>".utf8_encode($aluno['pca_nome'])."</td>";
		$html .= "<td>".utf8_encode($aluno['curso'])."</td>";
		$html .= "<td>".utf8_encode($aluno['pcr_nome'])."</td>";
		$html .= "<td>".utf8_encode($aluno['ppe_nome'])."</td>";
		$html .= "<td>Editar ou Excluir</td>";
		$html .= "</tr>";
	}

	echo $html;