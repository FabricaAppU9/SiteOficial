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
	//$id_usuario  = (int)$_SESSION["id"];
	$aluno       = $obj_aluno->buscaAlunoPorUsuario($conexao,$_SESSION["id"]);
	$cargos      = $obj_cargo->listaCargos($conexao);
	$campus      = $obj_campus->buscaCargos($conexao);
	$depoimento  = $obj_depoimento->selecionarDepoimento($conexao, $_SESSION["id"]);
?>
<section id="conteudo-depoimentos">
		<div class="container">
			<h1><i class="fa fa-comment" aria-hidden="true"></i>&nbsp;&nbsp;Depoimento</h1>
			<div class="border-dotted"></div>
			<div class="row">
				<div class="col-md-12 aviso">
					<center><p>Caro Aluno(a), você só poderá ter um depoimento, mas pode editá-lo ou exclui-lo</p></center>
				</div>
			</div>
			<div class="row">
				<div class="row">
					<div class="col-md-12 botaosalvar">
						<?php if($depoimento['pda_texto'] == null){?>
							<a class="btn btn-default salvar" id="adicionar-depoimento"><i class="fa fa-floppy-o" aria-hidden="true"></i>&nbsp;&nbsp;ADICIONAR DEPOIMENTO</a>
							<style type="text/css">
								#table_depoimento{display: none}
							</style>
						<?php }?>
						
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
						<td><?=utf8_encode($depoimento['pda_texto'])?></td>
						<td><?=date('d/m/Y',  strtotime($depoimento['pda_data_inicio']))?></td>
						<?php if ($depoimento['pda_data_update'] == "0000-00-00") { ?>
    						<td>-</td>
						<?php } else { ?>
   							<td><?=date('d/m/Y',  strtotime($depoimento['pda_data_update']))?></td>
						<?php } ?>

						<td>
                            <a  href="excluir-depoimento-aluno.php?id=<?=$aluno['pal_id']?>"  
                               class="excluir-depoimento" title="Excluir Depoimento"><i class='fa fa-times' style='color:red;' aria-hidden='true'> 
                            </i></a>&nbsp;&nbsp;<a class="editardepoimento" title="Editar Depoimento"><i class="fa fa-pencil" style="color:yellow;" aria-hidden="true"></i></a></td>
					</tr>
				</table>
			</div>
			<div class="add-depoimento" style="display: none;">
				<div class="row">
					<div class="col-md-12 textarea">
						<form method="post" id="form-add-depoimento">
							<textarea id="textId" name="depoimento" class="form-control" placeholder="Depoimento aqui"></textarea>
						</form>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 botaosalvar">
						<a class="btn btn-default salvar" id="salvar-depoimento"><i class="fa fa-floppy-o" aria-hidden="true"></i>&nbsp;&nbsp;SALVAR</a>
					</div>
				</div>
			</div>
			<div class="edit-depoimento">
				<div class="row">
					<div class="col-md-12 textarea">
						<form method="post" id="form-edit-depoimento">
							<textarea id="textId" name="depoimento_edit" class="form-control" placeholder="Depoimento aqui"><?=utf8_encode($depoimento['pda_texto'])?></textarea>
						</form>
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-12 botaosalvar">
						<a class="btn btn-default salvar" id="salvar-edit-depoimento"><i class="fa fa-floppy-o" aria-hidden="true"></i>&nbsp;&nbsp;ALTERAR</a>
					</div>
				</div>
			</div>
		</div>

	</section>

<?php require_once("footer.php");?>