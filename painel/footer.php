
<script src="js/jquery.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>
<script type="text/javascript">
	$("#trocar-senha").click(function(){
		
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
	$("#trocar-img").change(function(){
		if($(this).val() !== ""){
			$("#arquivo-selecionado").html("Arquivo selecionado!");
		}
	});
	//$.ajax({ type: "POST", url: 'teste.php', data: dadosImoveis, success: function(msg){ alert(msg); } });
</script>
	</body>
</html>