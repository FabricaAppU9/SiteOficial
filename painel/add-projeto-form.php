<?php 
	require_once("header.php");

?>

<section id="conteudo-depoimentos">
		<div class="container">
			<h1><i class="fa fa-comment" aria-hidden="true"></i>&nbsp;&nbsp;Adicionar Projeto</h1>
			<div class="border-dotted"></div>
			<!--<div class="edit-depoimento">-->
						<form method="POST" id="form-add-projeto">
							<label>Nome</label>
							<input type="text" name="nome" class="form-control">
							<label>Descrição</label>
							<input type="text" name="descricao" class="form-control">
							<label>Data de Inicio (aaaa-MM-dd)</label>
							<input type="text" name="dt_inicio" class="form-control">
							<label>Data de término (aaaa-MM-dd)</label>
							<input type="text" name="dt_termino" class="form-control">
							<label>Tecnologias</label>
							<input type="text" name="tecnologias" class="form-control">
							<div class="row">
								<div class="col-md-12 botaosalvar">
									<button input type="submit" class="btn btn-default salvar" id="add-projeto"><i class="fa fa-floppy-o" aria-hidden="true"></i>&nbsp;&nbsp;SALVAR</button>
								</div>
							</div>
						</form>
				
			<!--</div> Fim edit projeto-->
		</div>

	</section>

<?php require_once("footer.php");?>