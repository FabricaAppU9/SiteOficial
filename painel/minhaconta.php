<?php 
	// teste
	require_once("header.php");
	require_once("classe/DaoUsuario.php");
	require_once("classe/DaoAluno.php");
	require_once("classe/DaoCargo.php");
	require_once("classe/DaoCampus.php");
	require_once("classe/DaoCurso.php");

	$obj_usuario = new DaoUsuario();
	$obj_aluno   = new DaoAluno();
	$obj_cargo   = new DaoCargo();
	$obj_campus  = new DaoCampus();
	$obj_curso 	 = new DaoCurso();

	$usuario     = $obj_usuario->buscaUsuarioPorId($conexao, $_SESSION["id"]);
	//$id_usuario  = (int)$_SESSION["id"];
	$aluno       = $obj_aluno->buscaAlunoPorUsuario($conexao,$_SESSION["id"]);
	$cargos      = $obj_cargo->listaCargos($conexao);
	$campus      = $obj_campus->buscaCargos($conexao);
	$cursos 	 = $obj_curso->listaCursos($conexao);
?>
<section id="conteudo-minhaconta">
	<div id="teste"></div>
		<div class="container">
			<h1><i class="fa fa-user" aria-hidden="true"></i>&nbsp;&nbsp;Minha Conta</h1>
			<div class="border-dotted"></div>
			<?php if(isset($_SESSION['foto'])){?>
				<p style="color:green;"><?=$_SESSION['foto']?></p>
			<?php }?>
			<div class="row">
				<form id="trocar-foto" method="post" enctype="multipart/form-data" action="mudar-foto.php">
					<input type="hidden" name="id_usuario" value="<?=$_SESSION["id"]?>">
					<div class="col-md-6 img-perfil">
						<?php if($aluno['pal_foto'] == null){?>
							<img src="imagens/alunos/usuario.png" class="img-circle" width="50%"><br>
						<?php }else{?>
							<img src="imagens/alunos/<?=$aluno['pal_foto']?>" class="img-circle" width="50%"><br>
						<?php }?>
						
						<label for="trocar-img"><i class="fa fa-camera" aria-hidden="true"></i>&nbsp;&nbsp;Trocar Imagem</label>
						<input type="file" id="trocar-img" name="foto_perfil"><br>
						<p id="arquivo-selecionado" style="color:green;">Nenhum arquivo selecionado!</p>
						<input type="submit" disabled="disabled" id="sell-foto" class="btn btn-primary" value="Salvar">
					</div>
					
				</form>
				<div class="col-md-6">
					<form id="form-aluno">
					<div class="row">
						<div class="col-md-12">
							
							<div class="input-group border_nome">
						      <div class="input-group-addon tirar-borda-right"><i class="fa fa-user" aria-hidden="true"></i></div>
						      <input type="text" class="form-control tirar-borda-left valida-form tirar-borda" name="nome" id="nome" placeholder="Nome" value="<?= utf8_encode($aluno['pal_nome'])?>">
						      <div class="input-group-addon tirar-bordar-left-ecolor nome_info"></div>
						    </div>
						    <p id="info_nome"></p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							
						    <select name="campus" id="campus" class="form-control valida-form border_campus">
						    	<option value="">Selecione o campus...</option>
						    	<?php foreach($campus as $ca){?>
						    		<?php if($aluno['pal_pca_id'] == $ca['pca_id']){?>
						    		<option value="<?=$ca['pca_id']?>" selected="selected"><?=utf8_encode($ca['pca_nome'])?></option>
						    		<?php }else{?>
						    		<option value="<?=$ca['pca_id']?>"><?=utf8_encode($ca['pca_nome'])?></option>
						    		<?php }?>
						    	<?php }?>
						    </select>
						    <p id="info_campus"></p>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							
							<select name="cargo" id="cargo" class="form-control valida-form border_campus">
								<option value="">Selecione o cargo...</option>
								<?php foreach($cargos as $cargo){?>
									<?php if($aluno['pal_pcr_id'] == $cargo['pcr_id']){?>
										<option value="<?=$cargo['pcr_id']?>" selected="selected"><?=utf8_encode($cargo['pcr_nome'])?></option>
									<?php }else{?>
									<option value="<?=$cargo['pcr_id']?>"><?=utf8_encode($cargo['pcr_nome'])?></option>
									<?php }?>
								<?php }?>
							</select>
						    <p id="info_cargo"></p>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							
							<select name="curso" id="curso" class="form-control valida-form border_campus">
								<option value="">Selecione o curso...</option>
								<?php foreach($cursos as $curso){?>
									<?php if($aluno['pal_pcu_id'] == $curso['pcu_id']){?>
										<option value="<?=$curso['pcu_id']?>" selected="selected"><?=utf8_encode($curso['pcu_nome'])?></option>
									<?php }else{?>
									<option value="<?=$curso['pcu_id']?>"><?=utf8_encode($curso['pcu_nome'])?></option>
									<?php }?>
								<?php }?>
							</select>
						    <p id="info_curso"></p>
						</div>
					</div>

					<!--Semestre-->
					<div class="row">
						<div class="col-md-12">		
							<div class="input-group border_nome">
						      <div class="input-group-addon tirar-borda-right"></div>
						      <input type="text" class="form-control tirar-borda-left valida-form tirar-borda" name="semestre" id="nome" placeholder="Semestre" value="<?= utf8_encode($aluno['pal_semestre'])?>">
						      <div class="input-group-addon tirar-bordar-left-ecolor nome_info"></div>
						    </div>
						    <p id="info_semestre"></p>
						</div>
					</div>
					<!--Fim semestre-->

					<div class="row">
						<div class="col-md-12">
							<input type="hidden" name="trocou-senha" id="trocou-senha" value="N">
							<input type="button" class="btn btn-primary" id="trocar-senha" value="TROCAR SENHA">
							
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="input-group">
						      <div class="input-group-addon tirar-borda-right"><i class="fa fa-facebook-official" aria-hidden="true"></i></div>
						      <input type="text" class="form-control tirar-borda-left" id="facebook" placeholder="Facebook" name="facebook_aluno" value="<?=$aluno['pal_facebook']?>">
						      
						    </div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="input-group">
						      <div class="input-group-addon tirar-borda-right"><i class="fa fa-github" aria-hidden="true"></i></div>
						      <input type="text" class="form-control tirar-borda-left" id="GitHub" placeholder="GitHub" name="github" value="<?=$aluno['pal_github']?>">
						      
						    </div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="input-group">
						      <div class="input-group-addon tirar-borda-right"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
						      <input type="text" class="form-control tirar-borda-left" id="Linkedin" placeholder="Linkedin" name="linkedin" value="<?=$aluno['pal_linkedin']?>">
						      
						    </div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<a class="btn btn-default salvar" id="salvar-aluno"><i class="fa fa-floppy-o" aria-hidden="true"></i>&nbsp;&nbsp;SALVAR</a>
						</div>
					</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<div id="trocar-senha-modal" class="modal">
		<div class="modal-header">
			<div class="row">
				<div class="col-md-10">
					<!--<center><h3>Trocar Senha</h3></center>-->
				</div>
				<div class="col-md-2">
					<center><a id="fechar-modal-senha"><i class="fa fa-times" aria-hidden="true"></i></a></center>
				</div>
			</div>
		</div>
		<div class="modal-content display-none">
			<form id="form-trocar-senha" method="post" action="trocar-senha.php">
				<div class="row margin-bottom10">
					<div class="col-md-12 margin-bottom10">
						<label>Senha Atual</label>
						<input type="password" name="senha_antiga" id="senha_antiga" class="form-control valida-form-senha" placeholder="Senha Atual">
					</div>
				</div>
				<div class="boder-dotter">
				</div>
				<div class="row margin-top20">
					<div class="col-md-12">
						<label>Senha Nova</label>
						<input type="password" name="senha_nova" id="senha_nova" class="form-control valida-form-senha" placeholder="Senha Nova">
					</div>
				</div>
				<div class="row margin-top20">
					<div class="col-md-12">
						<label>Digite novamente a senha</label>
						<input type="password" name="senha_nova_repete" id="senha_nova_repete" class="form-control valida-form-senha" placeholder="Digite novamente a senha nova">
						<p id="senha-incorreta"></p>
					</div>
				</div>
				<div class="row margin-top20">
					<div class="col-md-12">
						<center><a class="btn btn-default" id="box-trocar-senha"><i class="fa fa-lock" aria-hidden="true"></i>&nbsp;&nbsp;TROCAR</a></center>
						
					</div>
				</div>
			</form>
		</div>
		<div class="loader">
			<center><img src="imagens/loader.gif"></center>
		</div>
		<div class="resultado-senha">
			<center><p id="result-senha"></p></center>
		</div>
	</div>
<?php require_once("footer.php");?>