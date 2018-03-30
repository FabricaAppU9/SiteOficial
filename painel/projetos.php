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

						<td><a class="excluir-depoimento" title="Excluir Depoimento"><i class='fa fa-times' style='color:red;' aria-hidden='true'></i></a>&nbsp;&nbsp;<a class="editardepoimento" title="Editar Depoimento"><i class="fa fa-pencil" style="color:yellow;" aria-hidden="true"></i></a></td>
					</tr>
					<?php endforeach?>
				</table>
			</div>

		</div>

	</section>

<?php require_once("footer.php");?>