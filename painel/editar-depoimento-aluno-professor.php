<?php

	// teste
	require_once("header.php");
	require_once("classe/DaoUsuario.php");
	require_once("classe/DaoAluno.php");
	require_once("classe/DaoCargo.php");
	require_once("classe/DaoCampus.php");
	require_once("classe/DaoDepoimentoAluno.php");

	$obj_usuario    = new DaoUsuario();
	$obj_aluno      = new DaoAluno();
	$obj_cargo      = new DaoCargo();
	$obj_campus     = new DaoCampus();
	$obj_depoimento = new DaoDepoimentoAluno();

	$usuario     = $obj_usuario->buscaUsuarioPorId($conexao, $_SESSION["id"]);
	$aluno       = $obj_aluno->buscaAlunoPorUsuario($conexao,$_SESSION["id"]);
	$cargos      = $obj_cargo->listaCargos($conexao);
	$campus      = $obj_campus->buscaCargos($conexao);
    $depoimento  = $obj_depoimento->selecionarDepoimento($conexao, $_GET['id']);
    

?>
<section id="conteudo-depoimentos">
		<div class="container">
			<h1><i class="fa fa-comment" aria-hidden="true"></i>&nbsp;&nbsp;Edição de depoimento</h1>
			<div class="border-dotted"></div>
			<div>
				<div class="row">
					<div class="col-md-12 textarea">
						<form method="post" action="editar-depo-aluno-lista.php">
                            <input type="hidden" name="id_aluno" value="<?=$depoimento['pda_pal_id']?>"/>
                            <textarea id="textId" name="depoimento_edit" class="form-control"><?=$depoimento['pda_texto']?></textarea>
                            <button style="margin-top:20px;" class="btn btn-default salvar" type="submit"><i class="fa fa-floppy-o" aria-hidden="true"></i>&nbsp;&nbsp;SALVAR</button>
						</form>
					</div>
				</div>
			</div>
	</section>

<?php require_once("footer.php");?>