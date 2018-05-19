<!-- teste -->
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/estilo-login.css">
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
		<link rel="stylesheet" type="text/css" href="awe/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="awe/css/font-awesome.min.css">
        <style>
            label.error { 
                color: red; 
            }
        </style>
		<title>Tela de login</title>
	</head>
	<body>
		<img class="img-body" src="imagens/imagem_fundofabriaca.jpg">
		<div class="login">
			<div class="row">
				<div class="col-md-12 col-xs-12 logo">
					<center><img class="img-logo" src="imagens/logoFappUni9.png"></center>
				</div>
			</div>
			<form action="logar.php" method="post" id="form-login">
				<div class="row margintop30px">
					<div class="col-md-12 col-xs-12">
						<label class="sr-only" for="login">Login</label>
					    <div class="input-group">
					      <div class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></div>
                                              <input type="email" class="form-control" id="login" placeholder="Login" name="login" required>
					      
					    </div>
					</div>
				</div>
				<div class="row margintop30px">
					<div class="col-md-12 col-xs-12">
						<label class="sr-only" for="senha">Senha</label>
					    <div class="input-group">
					      <div class="input-group-addon"><i class="fa fa-lock" aria-hidden="true"></i></div>
                                              <input type="password" class="form-control" id="senha" placeholder="Senha" name="senha" required>
					      
					    </div>
					</div>
				</div>
				<div class="row margintop30px">
					<div class="col-md-12 col-xs-12 button-logar">
                        <center><button class="btn btn-default" id="entrar" type="submit"><i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp;&nbsp;Entrar</button></center>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>
<script src="js/jquery.js"></script>
<script src="http://jqueryvalidation.org/files/dist/jquery.validate.js"></script>
<script>
     $("#form-login").validate({
          rules: {
            login: {
                required: true,
            }
        },
        messages: {
            login : "Insira um email válido"
        }
     });
</script>
<script>
	$("#entrar").click(function(){
		$("#form-login").submit();
	});
</script>