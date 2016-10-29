<section class="contact-us" id="contact">
	<div class="container">
	    <div class="section-header">
			<h2 class="white-text">Selecione a opção de assunto</h2>
			<h6 class="white-text">
				Você realmente gosta de tecnologia? Entre em contato!
			</h6>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<select name="escolha-contato" id="escolha-contato" class="form-control input-box" >
					<option value="0">(Selecione)</option>
					<option value="1">Fazer parte da equipe</option>
					<option value="2">Enviar mensagem</option>
				</select>
			</div>
		</div>
		<div class="row">
			<form role="form" class="contact-form" id="contato-equipe" style="display:none;">
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
					<input name="subject" placeholder="Curso" class="form-control input-box" id="subject" type="text">
				</div>
				</div>
				
				<div class="col-sm-12">
					<textarea name="message" class="form-control textarea-box" placeholder="Fale um pouco sobre você e sua experiência em tecnologia" id="message"></textarea>
				</div>
				<h4 class="success pull-left white-text">
					Your message has been sent successfully.
				</h4>
				
				<h4 class="error pull-left white-text">
					E-mail must be valid and message must be longer than 1 character.
				</h4>
				<button class="btn btn-primary custom-button red-btn" id="submit" type="submit">Enviar Contato</button>
			</form>
			<form role="form" class="contact-form" id="contato-normal" style="display: none;">
				<div>
				<div class="col-lg-6 col-sm-6">
					<input name="name" placeholder="Seu Nome" class="form-control input-box" id="name" type="text">
				</div>
				<div class="col-lg-6 col-sm-6">
					<input name="email" placeholder="Seu Email" class="form-control input-box" id="email" type="email">
				</div>
				</div>
				
				<div class="col-sm-12">
					<textarea name="message" class="form-control textarea-box" placeholder="Mensagem: " id="message"></textarea>
				</div>
				<h4 class="success pull-left white-text">
					Your message has been sent successfully.
				</h4>
				
				<h4 class="error pull-left white-text">
					E-mail must be valid and message must be longer than 1 character.
				</h4>
				<button class="btn btn-primary custom-button red-btn" type="submit">Enviar Contato</button>
			</form>
		</div>
	</div>
</section>
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
</script>