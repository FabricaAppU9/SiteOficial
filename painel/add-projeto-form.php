<?php
	require_once("header.php");
?>

<section id="conteudo-depoimentos">
	<div id="teste"></div>
		<div class="container">
			<h1><i class="fa fa-user" aria-hidden="true"></i>&nbsp;&nbsp;Adicionar Projeto</h1>
			<div class="border-dotted"></div>
			<?php if(isset($_SESSION['foto'])){?>
				<p style="color:green;"><?=$_SESSION['foto']?></p>
			<?php }?>
			<div class="row">
				<!--Form upload de foto-->
				<form id="trocar-foto" method="post" enctype="multipart/form-data" action="mudar-foto.php">
					<div class="col-md-6 img-perfil">
							<img src="imagens/alunos/<?=$projeto['prj_foto']?>" class="img-circle" width="50%"><br>
						
						<label for="trocar-img"><i class="fa fa-camera" aria-hidden="true"></i>&nbsp;&nbsp;Trocar Imagem</label>
						<input type="file" id="trocar-img" name="foto_perfil"><br>
						<p id="arquivo-selecionado" style="color:green;">Nenhum arquivo selecionado!</p>
						<input type="submit" disabled="disabled" id="sell-foto" class="btn btn-primary" value="Salvar">
					</div>
					
				</form> <!--Fim do form para upload de foto-->
				<div class="col-md-6">
					<form method="POST" id="form-add-projeto">
							<label>Nome</label>
							<input id="projeto_nome" type="text" name="nome" class="form-control">
							<label>Descrição</label>
							<input type="text" name="descricao" class="form-control">
							<label>Data de Inicio</label>
							<input type="text" name="dt_inicio" class="form-control data">
							<label>Data de término</label>
							<input type="text" name="dt_termino" class="form-control data ">
							<label>Tecnologias</label>
							<input id="projeto_tec" type="text" name="tecnologias" class="form-control">
							<div class="row">
								<div class="col-md-12 botaosalvar">
									<button input type="submit" id="add-projeto" class="btn btn-primary">Salvar</button>
								</div>
							</div>
						</form> <!--Fim form add projeto-->
				</div> <!--Fom col-md 6-->
			</div>
		</div> <!--Fim do container-->
	</section>
<?php require_once("footer.php");?>