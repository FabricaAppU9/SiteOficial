<section class="contact-us" id="contact">
	<div class="container">
	    <div class="section-header">
			<!--<h2 class="white-text">Selecione a opção de assunto</h2>-->
			<h2 class="white-text">
				Você realmente gosta de tecnologia? Entre em contato!
			</h2>
		</div>
		<!--<div class="row">
			<div class="col-sm-12">
				<select name="escolha-contato" id="escolha-contato" class="form-control input-box" >
					<option value="0">(Selecione)</option>
					<option value="1">Fazer parte da equipe</option>
					<option value="2">Enviar mensagem</option>
				</select>
			</div>
		</div>-->
		<div id="resultado" style="width:1000px;heigth:1000px;display:none;">
			
		</div>
		<div class="row">
			<!-- <form class="contact-form" id="contato-equipe" style="display:none; method="post">
				<div>
				<div class="col-lg-6 col-sm-6">
					<input name="name" placeholder="Seu Nome" class="form-control input-box" id="name" type="text">
				</div>
				<div class="col-lg-6 col-sm-6">
					<input name="email" placeholder="Seu Email" class="form-control input-box" id="email" type="email">
				</div>
				<div class="col-lg-4 col-sm-4">
					<input name="ra" placeholder="Seu RA" class="form-control input-box" id="ra" type="number">
				</div>
				<div class="col-lg-4 col-sm-4">
					<input name="campus" placeholder="Seu campus" class="form-control input-box" id="campus" type="campus">
				</div>
				<div class="col-lg-4 col-sm-4">
					<input name="curso" placeholder="Curso" class="form-control input-box" id="curso" type="text">
				</div>
				</div>
				
				<div class="col-sm-12">
					<textarea name="mensagem" class="form-control textarea-box" placeholder="Fale um pouco sobre você e sua experiência em tecnologia" id="mensagem"></textarea>
				</div>
				<button class="btn btn-primary custom-button red-btn" id="botao-equipe">Enviar Contato</button>
			</form> -->
			
			<!-- class="contact-form" id="contato-normal"-->
			<form action="enviar-contato.php" method="post">
				<div>
				<div class="col-lg-6 col-sm-6">
					<input name="nome" placeholder="Seu Nome" class="form-control input-box" id="nome" type="text">
				</div>
				<div class="col-lg-6 col-sm-6">
					<input name="email" placeholder="Seu Email" class="form-control input-box" id="e-mail" type="email">
				</div>
				</div>
				
				<div class="col-sm-12">
					<textarea name="mensagem" class="form-control textarea-box" placeholder="Mensagem: " id="message"></textarea>
				</div>
				<!--<h4 class="success pull-left white-text">
					Your message has been sent successfully.
				</h4>
				
				<h4 class="error pull-left white-text">
					E-mail must be valid and message must be longer than 1 character.
				</h4>-->
				<input type="submit" class="btn btn-primary custom-button red-btn" value="Enviar contato"/>
			</form>
		</div>
		
	</div>
	<div id="loading" style="display:none;width:80%;heigth:500px;margin-left:10%;background-color:white;position:fixed;top:90px;z-index:99999;">
			
			<div id="texto-load" style="margin-top:30px;">Aguarde enquanto o sistema processa os dados!</div>
			<center><img src="Zerif%20-%20Responsive%20One%20Page%20Template_arquivos/ajax-loader.gif" style="margin-top:50px !important;margin-bottom:100px !important;width:200px;"></center>
		</div>
</section>
<!--<section class="contact-us" id="cadastrar">
	<div class="container">
		<div class="section-header">
			<h2 class="white-text">Selecione a opção de assunto</h2>
			<h2 class="white-text">
				Venha fazer parte da nossa equipe!
			</h2>
			<h4 class="white-text">
				Faça a sua inscrição!
			</h4>
		</div>
		<div class="row">
			<div style="display: block;margin:0 auto;">
				<iframe style="margin: 0 auto;" class="contact-form" id="contato-equipe" src="https://docs.google.com/forms/d/e/1FAIpQLScVpNDq1HKeag1e38AowyvQplhd7g4GDOg_BsyJNvECewkXTg/viewform?usp=sf_link" width="100%" height="800" frameborder="0" marginheight="0" marginwidth="0">Carregando…</iframe>
			</div>
		</div>
	</div>
</section>-->
<script>
	$("#escolha-contato").change(function(){
		var selecionado = $(this).val();

		if(selecionado == 1){
			$("#contato-equipe").css("display","block");
			$("#contato-normal").css("display","none");
		}
		else if(selecionado == 2){
			$("#contato-normal").css("display","block");
			$("#contato-equipe").css("display","none");
		}
	});
	$("#contato-equipe").on("submit",function(){
		return false;
	});
	$("#botao-equipe").on("click",function(){
		
		$("#loading").css("display","block");
		
		var name = $("#name").val();
		var email = $("#email").val();
		var ra = $("#ra").val();
		var campus = $("#campus").val();
		var curso = $("#curso").val();
		var mensagem = $("#mensagem").val();
		$.post('enviar-equipe.php',{name:name,email:email,ra:ra,campus:campus,curso:curso,mensagem:mensagem},function(data){
			
			//var resultado = eval(data);
			//alert(resultado);
			//$("#texto-load").html(data);
			// alert(data);

			// console.log(data);
			$("#resultado").css("display","block");
			$("#resultado").html(data);
			$("#loading").css("display","none");
		});
	});
	$("#contato-normal").on("submit",function(){
		return false
	});
	$("#botao-normal").on("click",function(){
		
		$("#loading").css("display","block");
		
		var nome = $("#nome").val();
		var e_mail = $("#e-mail").val();
		var message = $("#message").val();
		$.post('enviar-contato.php',{name:nome,email:e_mail,message:message},function(data){
			var html = "";
			html+="<p style='color:red'>"+data+"</p>";
			$("#texto-load").append(html);
			alert(data);
			$("#loading").css("display","none");
		});
	});
	
</script>