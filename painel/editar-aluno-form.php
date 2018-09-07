<?php 
	
	require_once("header.php");
	require_once("classe/DaoAluno.php");
    require_once("classe/Aluno.php");
	require_once("classe/DaoCampus.php");
	require_once("classe/DaoCargo.php");
	require_once("classe/DaoCurso.php");
	require_once("classe/DaoPeriodo.php");
	
	$obj_periodo = new DaoPeriodo();
	$obj_campus  = new DaoCampus();
	$obj_cargo   = new DaoCargo();
	$obj_curso   = new DaoCurso();

	$campus   = $obj_campus->buscaCargos($conexao);
    $periodos = $obj_periodo->listaPeriodos($conexao);
	$cargos   = $obj_cargo->listaCargos($conexao);
	$cursos   = $obj_curso->listaCursos($conexao);
   

	$idAluno = $_GET['pal_id'];

	$obj_alunos = new DaoAluno();
	$linhaAluno = $obj_aluno->buscaAlunoPorId($conexao, $idAluno);
?>

<section id="conteudo-depoimentos">
		<div class="container">
			<h1><i class="fa fa-comment" aria-hidden="true"></i>&nbsp;&nbsp;Editar Aluno</h1>
			<div class="border-dotted"></div>
			<!--<div class="edit-depoimento">-->
						<form method="POST" id="form-edit-aluno">
							<input type="hidden" name="id" value="<?=$idAluno?>">
							
							<label>Nome</label>
							<input type="text" name=nome value="<?=utf8_encode($linhaAluno['pal_nome'])?>" class="form-control">
                            
							<label>RA</label>
							<input type="text" name="ra" value="<?=utf8_encode($linhaAluno['pal_ra'])?>" class="form-control">
                           
							<label>Campus</label>
							<select class="form-control" name="campus">
								<?php $selected = '' ?>
								<?php foreach ($campus as $campi): ?>
									<?php
										if ($linhaAluno['pal_pca_id'] == $campi['pca_id']) {
											$selected = 'selected';
										}
									?>
									<option <?php echo $selected ?> value="<?php echo $campi['pca_id'] ?>"><?php echo $campi['pca_nome'] ?></option>
									<?php $selected = '' ?>
								<?php endforeach ?>
							</select>
							<label>Cargo</label>
							<select class="form-control" name="cargo">
								<?php $selected = '' ?>
								<?php foreach ($cargos as $cargo): ?>
									<?php
										if ($linhaAluno['pal_pcr_id'] == $cargo['pcr_id']) {
											$selected = 'selected';
										}
									?>
									<option <?php echo $selected ?> value="<?php echo $cargo['pcr_id'] ?>"><?php echo utf8_encode($cargo['pcr_nome']) ?></option>
									<?php $selected = '' ?>
								<?php endforeach ?>
							</select>

							<label>Curso</label>
							<select class="form-control" name="curso">
								<?php $selected = '' ?>
								<?php foreach ($cursos as $curso): ?>
									<?php
										if ($linhaAluno['pal_pcu_id'] == $curso['pcu_id']) {
											$selected = 'selected';
										}
									?>
									<option <?php echo $selected ?> value="<?php echo $curso['pcu_id'] ?>"><?php echo utf8_encode($curso['pcu_nome']) ?></option>
									<?php $selected = '' ?>
								<?php endforeach ?>
							</select>

							<label>Período</label>
							<select class="form-control" name="período">
								<?php $selected = '' ?>
								<?php foreach ($periodos as $periodo): ?>
									<?php
										if ($linhaAluno['pal_ppe_id'] == $periodo['ppe_id']) {
											$selected = 'selected';
										}
									?>
									<option <?php echo $selected ?> value="<?php echo $periodo['ppe_id'] ?>"><?php echo $periodo['ppe_nome'] ?></option>
									<?php $selected = '' ?>
								<?php endforeach ?>
							</select>

							<label>Semestre</label>
							<input type="text" name="semestre" value="<?=utf8_encode($linhaAluno['pal_semestre'])?>" class="form-control">

							<div class="row">
							<div class="col-md-12 botaosalvar">
									<button input type="submit" class="btn btn-default salvar" id="salvar-edit-aluno"><i class="fa fa-floppy-o" aria-hidden="true"></i>&nbsp;&nbsp;ALTERAR</button>
								</div>
							</div>
						</form>
				
			<!--</div> Fim edit aluno-->
		</div>

	</section>

<?php require_once("footer.php");?>