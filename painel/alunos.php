<?php 

	require_once("header.php");
	require_once("classe/DaoAluno.php");
	require_once("classe/DaoCampus.php");
	require_once("classe/DaoCargo.php");
	require_once("classe/DaoCurso.php");
    require_once("classe/DaoPeriodo.php");
    
    $obj_periodo = new DaoPeriodo();
	$obj_campus  = new DaoCampus();
	$obj_cargo   = new DaoCargo();
	$obj_curso   = new DaoCurso();
	$obj_aluno   = new DaoAluno();
	$obj_periodo = new DaoPeriodo();

	$campus   = $obj_campus->buscaCargos($conexao);
    $periodos = $obj_periodo->listaPeriodos($conexao);
	$cargos   = $obj_cargo->listaCargos($conexao);
	$cursos   = $obj_curso->listaCursos($conexao);
	$alunos   = $obj_aluno->listaAlunos($conexao);
    
?>
<section id="conteudo-alunos">
	<div class="container">
		<h1><i class="fa fa-users" aria-hidden="true"></i>&nbsp;&nbsp;Alunos</h1>
		<div class="border-dotted"></div>
		
		<div class="row botao-add">
			<div class="col-md-12">
				<i class="fa fa-plus-circle" aria-hidden="true" id="modal-add-aluno"></i>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<center><select name="opcao" id="filter-aluno-por-campus" class="form-control">
					<option value="">(Selecione o campus)</option>
					<?php foreach($campus as $campu){?>
					<option value="<?=$campu['pca_id']?>"><?=utf8_encode($campu['pca_nome'])?></option>
					<?php }?>
				</select>
				</center>
			</div>
			<div class="col-md-4"></div>
		</div>
		<div class="row">
			<table id="table-alunos" class="table table-bordered" style="display:none; margin-top:30px;">
				<thead>
					<tr>
						<th>RA</th>
						<th>Nome</th>
						<th>Campus</th>
						<th>Curso</th>
						<th>Cargo</th>
						<th>Período</th>
						<th>Semestre</th>
						<th>Ação</th>
					</tr>
				</thead>
				<tbody id="colocar-alunos-por-ajax">
				</tbody>
			</table
		</div>
	</div>
	<div class="modal" id="modal-aluno" style="display: none !important;">

		<div class="modal-header">
			<div class="row">
				<div class="col-md-10">
					<!--<center><h3>Trocar Senha</h3></center>-->
				</div>
				<div class="col-md-2">
					<center><i class="fa fa-times" aria-hidden="true" id="fechar-modal-add-aluno"></i></center>
				</div>
			</div>
		</div>                                     
		<div class="modal-content display-none">
			<form id="form-add-aluno" method="post">
				<div class="row">
					<div class="col-md-6">
						<label>Email</label>
                                                <input type="email" name="email" class="form-control" placeholder="Email" required>
					</div>
					<div class="col-md-6">
						<label>Nome</label>
                                                <input type="text" name="nome" class="form-control" placeholder="nome" required>
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
						<label>Periodo</label>
						<select name="periodo" class="form-control">
							<option value="">Selecione</option>
							<?php foreach($periodos as $periodo){?>
							<option value="<?=$periodo['ppe_id']?>"><?=utf8_encode($periodo['ppe_nome'])?></option>
							<?php }?>
						</select>
					</div>
					<div class="col-md-6">
						<label>Semestre</label>
                                                <input type="text" name="semestre" class="form-control" placeholder="Semestre" required>
					</div>
				</div>
				<div class="row margin-top20">
					<div class="col-md-6">
						<label>RA</label>
						<input type="text" name="ra" class="form-control" placeholder="RA">
					</div>
					<div class="col-md-6">
						<label>Curso</label>
                                                <select name="curso" class="form-control">
							<option value="">Selecione</option>
							<?php foreach($cursos as $curso){?>
							<option value="<?=$curso['pcu_id']?>"><?=utf8_encode($curso['pcu_nome'])?></option>
							<?php }?>
						</select>
					</div>
				</div>
				<div class="row margin-top20">
					<div class="col-md-12">
						<center><button id="salvar-novo-aluno" class="btn btn-primary">Salvar</button></center>
						
					</div>
				</div>
			</form>
		</div>
	</div>
</section>

<?php 
	require_once("footer.php");
?>

