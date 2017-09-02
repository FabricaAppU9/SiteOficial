<?php 
	// teste
	require_once("header.php");
	require_once("classe/DaoUsuario.php");
	require_once("classe/DaoAluno.php");
	require_once("classe/DaoCargo.php");
	require_once("classe/DaoCampus.php");

	$obj_usuario = new DaoUsuario();
	$obj_aluno   = new DaoAluno();
	$obj_cargo   = new DaoCargo();
	$obj_campus  = new DaoCampus();

	$usuario     = $obj_usuario->buscaUsuarioPorId($conexao, $_SESSION["id"]);
	//$id_usuario  = (int)$_SESSION["id"];
	$aluno       = $obj_aluno->buscaAlunoPorUsuario($conexao,$_SESSION["id"]);
	$cargos      = $obj_cargo->listaCargos($conexao);
	$campus      = $obj_campus->buscaCargos($conexao);
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
				<table class="table table-bordered">
					<tr>
						<th>Depoimento</th>
						<th>Data de criação</th>
						<th>Data de atualização</th>
						<th>Ação</th>
					</tr>
					<tr>
						<td>Teste</td>
						<td>26/03/2017</td>
						<td>-</td>
						<td><a class="excluir-depoimento" title="Excluir Depoimento"><i class='fa fa-times' style='color:red;' aria-hidden='true'></i></a>&nbsp;&nbsp;<a class="editardepoimento" title="Editar Depoimento"><i class="fa fa-pencil" style="color:yellow;" aria-hidden="true"></i></a></td>
					</tr>
				</table>
			</div>
			<div class="edit-depoimento">
				<div class="row">
					<div class="col-md-12 textarea">
						<textarea name="depoimento" class="form-control" placeholder="Depoimento aqui"></textarea>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 botaosalvar">
						<a class="btn btn-default salvar"><i class="fa fa-floppy-o" aria-hidden="true"></i>&nbsp;&nbsp;SALVAR</a>
					</div>
				</div>
			</div>
		</div>

	</section>

<?php require_once("footer.php");?>