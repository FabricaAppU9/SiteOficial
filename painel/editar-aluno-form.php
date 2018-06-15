<?php 
	
	require_once("header.php");
	require_once("classe/DaoAluno.php");
    require_once("classe/Aluno.php");
    require_once("classe/DaoCampus.php");
   

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
							<input type="text" name="campus" value="<?=$linhaAluno['pal_pca_id']?>" class="form-control">
                           
							<label>Curso</label>
							<input type="text" name="curso" value="<?=$linhaAluno['pal_ppe_id']?>" class="form-control">
                           
							<label>Cargo</label>
							<input type="text" name="cargo" value="<?=utf8_encode($linhaAluno['pal_pcr_id'])?>" class="form-control">

							<label>Cargo</label>
							<input type="text" name="período" value="<?=utf8_encode($linhaAluno['pal_ppe_id'])?>" class="form-control">

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