<?php 
	// teste
	require_once("header.php");
        if($usuario['pus_ptu_id'] == 1){
			$aluno       = $obj_aluno->buscaAlunoPorUsuario($conexao, $_SESSION["id"]);
			$nome = utf8_encode($aluno['pal_nome']);
		}else{
			$professor = $obj_professor->buscaProfessorPorUsuario($conexao,$_SESSION["id"]);
			$foto = $professor['prf_foto'];
			$nome = utf8_encode($professor['prf_nome']);
		}
?>
	<p style="margin-top: 100px;" ><center style="font-size:50px;">Seja Bem Vindo(a) <?=$nome?></center></p>

<?php 
	require_once("footer.php");

?>