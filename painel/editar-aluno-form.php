<?php 
	
	require_once("header.php");
	require_once("classe/DaoAluno.php");
    require_once("classe/Aluno.php");
    require_once("classe/DaoCampus.php");
   

	$idAluno = $_GET['pus_id'];

	$obj_alunos = new DaoAluno();
	$linhaAluno = $obj_aluno->buscaAlunoPorUsuario($conexao, $idAluno);
?>

<section id="conteudo-depoimentos">
		<div class="container">
			<h1><i class="fa fa-comment" aria-hidden="true"></i>&nbsp;&nbsp;Editar Aluno</h1>
			<div class="border-dotted"></div>
			<!--<div class="edit-depoimento">-->
						<form method="POST" id="form-edit-projeto">
							<input type="hidden" name="id" value="<?=$idProjeto?>">
							
							<input type="text" name=nome value="<?=utf8_encode($linhaAluno['pal_nome'])?>" class="form-control">
                            
							<label>RA</label>
							<input type="text" name="ra" value="<?=utf8_encode($linhaAluno['pal_ra'])?>" class="form-control">
                           
							<label>Campus</label>
							<input type="text" name="campus" value="<?=$linhaAluno['pal_pca_id']?>" class="form-control">
                           
							<label>Curso</label>
							<input type="text" name="curso" value="<?=$linhaAluno['pal_ppe_id']?>" class="form-control">
                           
							<label>Cargo</label>
							<input type="text" name="cargo" value="<?=utf8_encode($linhaAluno['pal_pcr_id'])?>" class="form-control">
                           
							<div class="row">
								<div class="col-md-12 botaosalvar">
									<td><a href="editar-aluno.php?pus_id=<?=$idAluno?>" title="Editar Aluno"><i class="fa fa-pencil" style="color:red;" aria-hidden="true"></i></a></td>
								</div>
							</div>
						</form>
				
			<!--</div> Fim edit aluno-->
		</div>

	</section>

<?php require_once("footer.php");?>