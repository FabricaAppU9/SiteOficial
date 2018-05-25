<?php 
	// teste
	require_once("header.php");
	require_once("classe/DaoProjeto.php");

	$idProjeto = $_GET['id'];

	$obj_projetos = new DaoProjeto();
	$linhaProjeto = $obj_projetos->buscaProjetoPorId($conexao, $idProjeto);
?>

<section id="conteudo-depoimentos">
		<div class="container">
			<h1><i class="fa fa-comment" aria-hidden="true"></i>&nbsp;&nbsp;Editar Projeto</h1>
			<div class="border-dotted"></div>
			<!--<div class="edit-depoimento">-->
						<form method="POST" id="form-edit-projeto">
							<input type="hidden" name="id" value="<?=$idProjeto?>">
							<label>Nome</label>
							<input type="text" name="nome" value="<?=utf8_encode($linhaProjeto['prj_nome'])?>" class="form-control">
							<label>Descrição</label>
							<input type="text" name="descricao" value="<?=utf8_encode($linhaProjeto['prj_descricao'])?>" class="form-control">
							<label>Data de Inicio (aaaa-MM-dd)</label>
							<input type="text" name="dt_inicio" value="<?php echo date("d/m/Y", strtotime($linhaProjeto['prj_data_inicio']));?>" class="form-control">
							<label>Data de término (aaaa-MM-dd)</label>
							<input type="text" name="dt_termino" value="<?php echo date("d/m/Y", strtotime($linhaProjeto['prj_data_fim']));?>" class="form-control">
							<label>Tecnologias</label>
							<input type="text" name="tecnologias" value="<?=utf8_encode($linhaProjeto['prj_tecnologias'])?>" class="form-control">
							<div class="row">
								<div class="col-md-12 botaosalvar">
									<button input type="submit" class="btn btn-default salvar" id="salvar-edit-projeto"><i class="fa fa-floppy-o" aria-hidden="true"></i>&nbsp;&nbsp;ALTERAR</button>
								</div>
							</div>
						</form>
				
			<!--</div> Fim edit projeto-->
		</div>

	</section>

<?php require_once("footer.php");?>