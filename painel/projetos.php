<?php 
	// teste
	require_once("header.php");
	
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
				<table class="table table-bordered" id="table_projetos">
					<tr>
						<th>Depoimento</th>
						<th>Data de criação</th>
						<th>Data de atualização</th>
						<th>Ação</th>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td><a class="excluir-depoimento" title="Excluir Depoimento"><i class='fa fa-times' style='color:red;' aria-hidden='true'></i></a>&nbsp;&nbsp;<a class="editardepoimento" title="Editar Depoimento"><i class="fa fa-pencil" style="color:yellow;" aria-hidden="true"></i></a></td>
					</tr>
				</table>
			</div>
		</div>

	</section>

<?php require_once("footer.php");?>