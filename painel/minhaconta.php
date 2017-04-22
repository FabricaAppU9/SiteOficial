<?php 

	require_once("header.php");
	require_once("classe/DaoUsuario.php");

	$obj_usuario = new DaoUsuario();

	$usuario     = $obj_usuario->buscaUsuarioPorId($conexao, $_SESSION["id"]);


?>
<section id="conteudo-minhaconta">
		<div class="container">
			<h1><i class="fa fa-user" aria-hidden="true"></i>&nbsp;&nbsp;Minha Conta</h1>
			<div class="border-dotted"></div>
			<div class="row">
				<div class="col-md-6 img-perfil">
					<?php if($usuario['pus_foto'] == null){?>
						<img src="imagens/alunos/usuario.png" class="img-circle" width="50%"><br>
					<?php }else{?>
						<img src="imagens/alunos/biancaarantes.jpg" class="img-circle" width="50%"><br>
					<?php }?>
					
					<label for="trocar-img"><i class="fa fa-camera" aria-hidden="true"></i>&nbsp;&nbsp;Trocar Imagem</label>
					<input type="file" id="trocar-img">
				</div>
				<div class="col-md-6">
					
					<div class="row">
						<div class="col-md-12">
							
							<div class="input-group border_nome">
						      <div class="input-group-addon tirar-borda-right"><i class="fa fa-user" aria-hidden="true"></i></div>
						      <input type="text" class="form-control tirar-borda-left valida-form tirar-borda" name="nome" id="nome" placeholder="Nome" value="Bianca Arantes">
						      <div class="input-group-addon tirar-bordar-left-ecolor nome_info"></div>
						    </div>
						    <p id="info_nome"></p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							
						    <select name="campus" id="campus" class="form-control valida-form border_campus">
						    	<option value="">Selecione o campus...</option>
						    	<option value="1">Santo Amaro</option>
						    	<option value="2">Memorial</option>
						    	<option value="3">Vila Prudente</option>
						    </select>
						    <p id="info_campus"></p>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							
							<div class="input-group border_cargo">
						      <div class="input-group-addon tirar-borda-right"><i class="fa fa-user" aria-hidden="true"></i></div>
						      <input type="text" class="form-control tirar-borda-left valida-form tirar-borda" name="cargo" id="cargo" placeholder="Cargo" value="Programadora">
						      <div class="input-group-addon tirar-bordar-left-ecolor cargo_info"></div>
						    </div>
						    <p id="info_cargo"></p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<input type="hidden" name="trocou-senha" id="trocou-senha" value="N">
							<input type="button" class="btn btn-primary" id="trocar-senha" value="TROCAR SENHA">
							<div id="mostrar-senha"> 
								<div class="input-group border_senha">
									<div class="input-group-addon tirar-borda-right"><i class="fa fa-lock" aria-hidden="true"></i></div>
									<input type="password" name="senha" id="senha" class="form-control tirar-borda-left valida-form tirar-borda" placeholder="Senha">
									<div class="input-group-addon tirar-bordar-left-ecolor senha_info"></div>
								</div>
								<p id="info_senha"></p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="input-group">
						      <div class="input-group-addon tirar-borda-right"><i class="fa fa-facebook-official" aria-hidden="true"></i></div>
						      <input type="text" class="form-control tirar-borda-left" id="facebook" placeholder="Facebook">
						      
						    </div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="input-group">
						      <div class="input-group-addon tirar-borda-right"><i class="fa fa-github" aria-hidden="true"></i></div>
						      <input type="text" class="form-control tirar-borda-left" id="GitHub" placeholder="GitHub">
						      
						    </div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="input-group">
						      <div class="input-group-addon tirar-borda-right"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
						      <input type="text" class="form-control tirar-borda-left" id="Linkedin" placeholder="Linkedin">
						      
						    </div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<a class="btn btn-default salvar"><i class="fa fa-floppy-o" aria-hidden="true"></i>&nbsp;&nbsp;SALVAR</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php require_once("footer.php");?>