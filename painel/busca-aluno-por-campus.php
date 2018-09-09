<?php 

	require_once("classe/conecta.php");
	require_once("classe/DaoAluno.php");
	require_once("classe/Login.php");

	$obj_daoaluno = new DaoAluno();

	$pal_pca_id = $_POST['opcao'];
	$alunos = $obj_daoaluno->buscaAlunoPorCampus($conexao, $pal_pca_id);

	if(isset($pal_pca_id)){
		$html = "";
		foreach($alunos as $aluno){
			$aluno_id = $aluno['pal_id'];
			$espaco = "  ";
			$html .= "<tr>";
			$html .= "<td>".$aluno['pal_ra']."</td>";
			$html .= "<td>".utf8_encode($aluno['pal_nome'])."</td>";
			$html .= "<td>".utf8_encode($aluno['pca_nome'])."</td>";
			$html .= "<td>".utf8_encode($aluno['pcu_nome'])."</td>";
			$html .= "<td>".utf8_encode($aluno['pcr_nome'])."</td>";
			$html .= "<td>".utf8_encode($aluno['ppe_nome'])."</td>";
			$html .= "<td>".utf8_encode($aluno['pal_semestre'])."</td>";
			$html .= "<td>".
			'<a href = "excluir.php?id='.$aluno_id.'">'.$espaco.
			'<i class="fa fa-times" style="color:red;" aria-hidden="true"></i></a>'.
			'<a href = "editar-aluno-form.php?pal_id='.$aluno_id.'">'.$espaco.
			'<i class="fa fa-pencil" style="color:yellow;" aria-hidden="true"></i></a>'.
			"</td>";
			$html .= "</tr>";
		}

		echo $html;
	}
	else{
		echo "<center><h1>Selecione Campus</h1></center>";		
	}