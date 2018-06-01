<?php 
	// teste
	require_once("header.php");
	require_once("classe/DaoProjeto.php");
        //Listar professores
        $obj_professores = new DaoProfessor();
	$professores = $obj_professores->listaProfessores($conexao);

	//var_dump($projetos);
	
?>
<section id="conteudo-depoimentos">
		<div class="container">
			<h1><i class="fa fa-comment" aria-hidden="true"></i>&nbsp;&nbsp;Professores</h1>
			<div class="border-dotted"></div>
			
			<div class="row">
					<div class="col-md-12 botaosalvar">
                                            <a href="add-professor-form.php" class="btn btn-default salvar"><i class="fa fa-floppy-o" aria-hidden="true"></i>&nbsp;&nbsp;ADICIONAR PROFESSOR</a>
					</div>
				</div>
			
			<div class="row">


				<table class="table table-bordered" id="table_depoimento">
					<tr>
						<th>Nome</th>
						<th>Ação</th>
					</tr>
					<tr>
					<?php foreach($professores as $prof) { ?>
						<td><?= $prof['prf_nome'] ?></td>
						<td>
                                                    <a href="desabilitar-professor.php?id=<?=$proj['prj_id']?>" title="Desabilitar Professor"><i class='fa fa-times' style='color:red;' aria-hidden='true'></i></a>&nbsp;&nbsp;
                                                    <a href="editar-professor-form.php?id=<?=$proj['prj_id']?>" title="Professor Projeto"><i class="fa fa-pencil" style="color:yellow;" aria-hidden="true"></i></a>
						</td>
					</tr>
                                        <?php } ?>
				</table>
			</div>
		</div>

	</section>

<?php require_once("footer.php");?>