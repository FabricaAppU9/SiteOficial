<?php 

	require_once("header.php");
	require_once("classe/DaoAluno.php");
	require_once("classe/DaoCampus.php");
	require_once("classe/DaoCargo.php");

	$obj_campus = new DaoCampus();
	$obj_cargo = new DaoCargo();
	$campus = $obj_campus->buscaCargos($conexao);
	$cargos = $obj_cargo->listaCargos($conexao);
?>
<section id="conteudo-alunos">
	<div class="container">
		<h1><i class="fa fa-users" aria-hidden="true"></i>&nbsp;&nbsp;Alunos</h1>
		<div class="border-dotted"></div>
		<div class="row botao-add">
			<div class="col-md-12">
				<i class="fa fa-plus-circle" aria-hidden="true"></i>
			</div>
		</div>
		<div class="row">
			<table class="table table-bordered">
				<tr>
					<th>RA</th>
					<th>Nome</th>
					<th>Campus</th>
					<th>Curso</th>
					<th>Cargo</th>
					<th>Ação</th>
				</tr>
			</table>
		</div>
	</div>
	<div class="modal" id="modal-aluno">
		<div class="modal-header">
			<div class="row">
				<div class="col-md-10">
					<!--<center><h3>Trocar Senha</h3></center>-->
				</div>
				<div class="col-md-2">
					<center><a id="fechar-modal-senha"><i class="fa fa-times" aria-hidden="true"></i></a></center>
				</div>
			</div>
		</div>
		<div class="modal-content display-none">
			<form id="form-add-aluno" method="post">
				<div class="row">
					<div class="col-md-6">
						<label>RA</label>
						<input type="number" name="ra" class="form-control" placeholder="ra">
					</div>
					<div class="col-md-6">
						<label>Nome</label>
						<input type="text" name="nome" class="form-control" placeholder="nome">
					</div>
				</div>
				<div class="row margin-top20">
					<div class="col-md-6">
						<label>Campus</label>
						<select name="campus" class="form-control">
							<option value="">Selecione</option>
							<?php foreach($campus as $campu){?>
							<option value="<?=$campu['pca_id']?>"><?=utf8_encode($campu['pca_nome'])?></option>
							<?php }?>
						</select>
					</div>
					<div class="col-md-6">
						<label>Cargo</label>
						<select name="cargo" class="form-control">
							<option value="">Selecione</option>
							<?php foreach($cargos as $cargo){?>
							<option value="<?=$cargo['pcr_id']?>"><?=utf8_encode($cargo['pcr_nome'])?></option>
							<?php }?>
						</select>
					</div>
				</div>
				<div class="row margin-top20">
					<div class="col-md-6">
						<label>Período</label>
						<select name="periodo" class="form-control">
							<option value="">Selecione</option>
							<option value="1">Manhã</option>
							<option value="2">Noturno</option>
						</select>
					</div>
					<div class="col-md-6">
						<label>Semestre</label>
						<input type="text" name="semestre" class="form-control" placeholder="Semestre">
					</div>
				</div>
				<div class="row margin-top20">
					<div class="col-md-12">
						<center><button id="salvar-aluno" class="btn btn-primary">Salvar</button></center>
					</div>
				</div>
			</form>
		</div>
	</div>
</section>

<?php 
	require_once("footer.php");
?>

