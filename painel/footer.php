
<script src="js/jquery.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>
<script type="text/javascript">
	$("#trocar-senha").click(function(){
		// teste
		$("#trocar-senha-modal").css({"display":"block"});
	});
	$("#fechar-modal-senha").click(function(){
		$("#trocar-senha-modal").css({"display":"none"});
	});
	$("body").on("click","#box-trocar-senha",function(){
		
		//var senha_antiga = $("#senha_antiga").val();
		var erro = 0;
		//$("body").on("each",".valida-form-senha",function(){
			$(".valida-form-senha").each(function(){
				if($(this).val() === ""){
					erro++;
				}
				
			});
		//});
		if(erro === 0){
			var dados = $("#form-trocar-senha").serialize();
			var senhaNova1 = $("#senha_nova").val();
			var senhaNova2 = $("#senha_nova_repete").val();

			if(senhaNova1 == senhaNova2){
				$(".display-none").css({"display":"none"});
				$(".loader").css({"display":"block"});
				$.ajax({ type: "POST", url: 'trocar-senha.php', data: dados, success: function(msg){ 
				$(".loader").css({"display":"none"});
				$(".resultado-senha").css({"display":"block"});
				$("#result-senha").html("Senha trocada com sucesso!"); } });
			}else{
				$("#senha-incorreta").html("As senhas não estão iguais!");
			}
			
		}
	});

	$("body").on("click","#box-trocar-senha-professor",function(){
		
		//var senha_antiga = $("#senha_antiga").val();
		var erro = 0;
		//$("body").on("each",".valida-form-senha",function(){
			$(".valida-form-senha").each(function(){
				if($(this).val() === ""){
					erro++;
				}
				
			});
		//});
		if(erro === 0){
			var dados = $("#form-trocar-senha").serialize();
			var senhaNova1 = $("#senha_nova").val();
			var senhaNova2 = $("#senha_nova_repete").val();

			if(senhaNova1 == senhaNova2){
				$(".display-none").css({"display":"none"});
				$(".loader").css({"display":"block"});
				$.ajax({ type: "POST", url: 'trocar-senha-professor.php', data: dados, success: function(msg){ 
				$(".loader").css({"display":"none"});
				$(".resultado-senha").css({"display":"block"});
				$("#result-senha").html("Senha trocada com sucesso!"); } });
			}else{
				$("#senha-incorreta").html("As senhas não estão iguais!");
			}
			
		}
	});
	$("#trocar-img").change(function(){
		if($(this).val() !== ""){
			$("#arquivo-selecionado").html("Arquivo selecionado!");
		}
	});
	$("#salvar-aluno").click(function(){
		var dados = $("#form-aluno").serialize();
		$.ajax({ type: "POST", url: 'editar-usuario.php', data: dados, success: function(msg){ alert(msg); } });
	});
	//Alterar professor: 
	$("#salvar-nova-senha-professor").click(function(){
		var dados = $("#form-professor").serialize();
		$.ajax({ type: "POST", url: 'editar-professor.php', data: dados, success: function(msg){ alert(msg); } });
	});
	//Abrir modal adicionar aluno:
	$("#modal-add-aluno").click(function(){
		$("#modal-aluno").css({"display" : "block"});
	});
	//Fechar modal adicionar aluno:
	$("body").on("click", "#fechar-modal-add-aluno", function(){
		alert("teste");
		$("#modal-aluno").css({"display" : "none"});
	});
	// Adicionar aluno:
	$("#salvar-novo-aluno").click(function(){
		var dados = $("#form-add-aluno").serialize();
		$.ajax({
			type: "POST",
			url: "adicionar-aluno.php",
			data: dados,
			success: function(msg){
				alert(msg);
			}
		});
	});
	$("#filter-aluno-por-campus").change(function(){
		var opcao = $(this).val();
		$.ajax({
			type: "POST",
			url: "busca-aluno-por-campus.php",
			data: {'opcao' : opcao },
			success: function(msg){
				$("#colocar-alunos-por-ajax").html(msg);
			}
		});
	});
	//$.ajax({ type: "POST", url: 'teste.php', data: dadosImoveis, success: function(msg){ alert(msg); } });
</script>
	</body>
</html>