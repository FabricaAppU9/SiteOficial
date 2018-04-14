<?php 
	// teste
	require_once("header.php");
	require_once("classe/DaoProjeto.php");

	$obj_projetos = new DaoProjeto();
	$projetos = $obj_projetos->listaProjeto($conexao);

	//var_dump($projetos);
	
?>
<section id="conteudo-depoimentos">
		<div class="container">
			<h1><i class="fa fa-comment" aria-hidden="true"></i>&nbsp;&nbsp;Projetos</h1>
			<div class="border-dotted"></div>
			
			<div class="col-md-12 botaosalvar">
							<a href="add-projeto-form.php" class="btn btn-default salvar"><i class="fa fa-floppy-o" aria-hidden="true"></i>&nbsp;&nbsp;ADICIONAR DEPOIMENTO</a>
					</div>
			<div class="row">


				<table class="table table-bordered" id="table_depoimento">
					<tr>
						<th>Nome</th>
						<th>Descrição</th>
						<th>Data de início</th>
						<th>Data de término</th>
						<th>Tecnologias</th>
						<th>Ação</th>
					</tr>
					<tr>
					<?php foreach($projetos as $proj) :
					?>
						<td><?= $proj['prj_nome'] ?></td>
						<td><?=utf8_encode($proj['prj_descricao'])?></td>
						<td><?=date('d/m/Y',  strtotime($proj['prj_data_inicio']))?></td>
   						<?php if ($proj['prj_data_fim'] == "0000-00-00") { ?>
    						<td>-</td>
						<?php } else { ?>
   							<td><?=date('d/m/Y',  strtotime($proj['prj_data_fim']))?></td>
						<?php } ?>
						<td><?= $proj['prj_tecnologias'] ?></td>

						<td>
							<a class="excluir-depoimento" title="Excluir Projeto"><i class='fa fa-times' style='color:red;' aria-hidden='true'></i></a>&nbsp;&nbsp;
							<a href="editar-projeto-form.php?id=<?=$proj['prj_id']?>" title="Editar Projeto"><i class="fa fa-pencil" style="color:yellow;" aria-hidden="true"></i></a>
						</td>
					</tr>
					<?php endforeach?>
				</table>
			</div>
			<!--Add Projeto - Falta adicionar o botao-->
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
			</div> <!--Fim add projeto-->
		</div>

	</section>

<?php require_once("footer.php");?>