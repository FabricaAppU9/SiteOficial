<?php 
	// teste
	require_once("header.php");
	require_once("classe/DaoUsuario.php");
	require_once("classe/DaoProfessor.php");
	require_once("classe/DaoCargo.php");
	require_once("classe/DaoCampus.php");
	require_once("classe/DaoDepoimentoProfessor.php");

	$obj_usuario    = new DaoUsuario();
	$obj_professor  = new DaoProfessor();
	$obj_cargo      = new DaoCargo();
	$obj_campus     = new DaoCampus();
	$obj_depoimento = new DaoDepoimentoProfessor();

	$usuario     = $obj_usuario->buscaUsuarioPorId($conexao, $_SESSION["id"]);
	//$id_usuario  = (int)$_SESSION["id"];
	$professor   = $obj_professor->buscaProfessorPorUsuario($conexao,$_SESSION["id"]);
	$cargos      = $obj_cargo->listaCargos($conexao);
	$campus      = $obj_campus->buscaCargos($conexao);
	$depoimento  = $obj_depoimento->selecionarDepoimento($conexao, $_SESSION["id"]);
?>
<section id="conteudo-depoimentos">
		<div class="container">
			<h1><i class="fa fa-comment" aria-hidden="true"></i>&nbsp;&nbsp;Depoimento</h1>
			<div class="border-dotted"></div>
			<div class="row">
				<div class="row">
					<div class="col-md-12 botaosalvar">
						<?php if($depoimento['pdp_texto'] == null){?>
							<a class="btn btn-default salvar" id="adicionar-depoimento"><i class="fa fa-floppy-o" aria-hidden="true"></i>&nbsp;&nbsp;ADICIONAR DEPOIMENTO</a>
							<style type="text/css">
								#table_depoimento{display: none}
							</style>
						<?php }?>
					</div>

					<div class="col-md-12 botaosalvar">
							<a href="lista-depoimentos-aluno.php" class="btn btn-default salvar" id="listar-depoimento-aluno"><i class="fa fa-floppy-o" aria-hidden="true"></i>&nbsp;&nbsp;VISUALIZAR DEPOIMENTO</a>
					</div>
				</div>

				<table class="table table-bordered" id="table_depoimento">
					<tr>
						<th>Depoimento</th>
						<th>Data de criação</th>
						<th>Data de atualização</th>
						<th>Ação</th>
					</tr>
					<tr>
						<td><?=utf8_encode($depoimento['pdp_texto'])?></td>
						<td><?=date('d/m/Y',  strtotime($depoimento['pdp_data_inclusao']))?></td>
						<?php if ($depoimento['pdp_data_update'] == "0000-00-00") { ?>
    						<td>-</td>
						<?php } else { ?>
   							<td><?=date('d/m/Y',  strtotime($depoimento['pdp_data_update']))?></td>
						<?php } ?>

						<td><a class="excluir-depoimento" title="Excluir Depoimento"><i class='fa fa-times' style='color:red;' aria-hidden='true'></i></a>&nbsp;&nbsp;<a class="editardepoimento" title="Editar Depoimento"><i class="fa fa-pencil" style="color:yellow;" aria-hidden="true"></i></a></td>
					</tr>
				</table>
			</div>
			<div class="add-depoimento" style="display: none;">
				<div class="row">
					<div class="col-md-12 textarea">
						<form method="post" id="form-add-depoimento-professor">
							<textarea id="textId" name="depoimento" class="form-control" placeholder="Depoimento aqui"></textarea>
						</form>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 botaosalvar">
						<a class="btn btn-default salvar" id="salvar-depoimento-professor"><i class="fa fa-floppy-o" aria-hidden="true"></i>&nbsp;&nbsp;SALVAR</a>
					</div>
				</div>
			</div>
			<div class="edit-depoimento">
				<div class="row">
					<div class="col-md-12 textarea">
						<form method="post" id="form-edit-depoimento-professor">
							<textarea id="textId" name="depoimento_edit" class="form-control" placeholder="Depoimento aqui"><?=utf8_encode($depoimento['pdp_texto'])?></textarea>
						</form>
					</div>
				</div>
				<!--Alterar a partir daqui-->
				<div class="row">
					<div class="col-md-12 botaosalvar">
						<a class="btn btn-default salvar" id="salvar-edit-depoimento-professor"><i class="fa fa-floppy-o" aria-hidden="true"></i>&nbsp;&nbsp;ALTERAR</a>
					</div>
				</div>
			</div>
		</div>

	</section>

<?php require_once("footer.php");?>