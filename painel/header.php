<?php 

	require_once("classe/conecta.php");
	require_once("classe/Login.php");
	require_once("classe/DaoUsuario.php");
	require_once("classe/DaoMenu.php");

	$obj_usuario = new DaoUsuario();
	$obj_menu    = new DaoMenu();

	$usuario     = $obj_usuario->buscaUsuarioPorId($conexao, $_SESSION["id"]);
	$menus       = $obj_menu->consultaMenu($conexao,$usuario['pus_id']);
?>
</!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
	<link rel="stylesheet" type="text/css" href="awe/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="awe/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/estilo.css">
	<title>Painel Fábrica</title>
</head>
<body>
	<header id="header">
		<nav>
			<div class="container">
				<div class="col-md-6 col-xs-6 logo">
					<img src="imagens/logoFappUni9.png" alt="Logo da fábrica de app" title="Logo Fábrica de APP UNINOVE">
				</div>
				<div class="col-md-6 col-xs-6 menu">
					<ul>
						<li class="dropdown"><a data-toggle="dropdown"><i class="fa fa-bell" aria-hidden="true"></i></a>
							<div class="dropdown-menu notificacoes-menu">
								<center><h4>Notificações</h4></center>
								<ul>
									<li><a title="Notificação"><img src="imagens/android-studio-.png" height="30px">&nbsp;&nbsp;Hackaton</a></li>
									<li><a title="Notificação"><img src="imagens/android-studio-.png" height="30px">&nbsp;&nbsp;Aniversário da Fábrica</a></li>
									<li><a title="Notificação"><img src="imagens/android-studio-.png" height="30px">&nbsp;&nbsp;Inscrições abertas</a></li>
									<li><a title="Notificação"><img src="imagens/android-studio-.png" height="30px">&nbsp;&nbsp;Novos projetos</a></li>
									<li><a title="Notificação"><img src="imagens/android-studio-.png" height="30px">&nbsp;&nbsp;Novas tecnologias</a></li>
								</ul>
								<center><h4><a title="Ver mais notificações">Ver mais notificações</a></h4></center>
							</div>
						</li>
						<li class="dropdown">
							<img src="imagens/alunos/biancaarantes.jpg" class="img-circle" alt="Aluno da Fábrica" title="Clique para ver as opções" height="30px">&nbsp;&nbsp;Bianca Arantes&nbsp;&nbsp;<a data-toggle="dropdown"><span class="caret"></span></a>
							<ul class="dropdown-menu">
								<!--<li><a href="minhaconta.html"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;&nbsp;Minha Conta</a></li>
								<li><a href="depoimentos.html"><i class="fa fa-comment" aria-hidden="true"></i>&nbsp;&nbsp;Depoimento</a></li>
								<li><a href="horarios.html" title="Preencher planilha de horários"><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;&nbsp;Horário</a></li>
								<li><a title="Sair"><i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp;&nbsp;Sair</a></li>-->
								<?php foreach($menus as $menu){?>
									<li><a href="<?=$menu['pme_url']?>"><i class="<?=$menu['pme_icone']?>" aria-hidden="true"></i>&nbsp;&nbsp;<?=utf8_encode($menu['pme_nome'])?></a></li>
								<?php }?>
								<li><a title="Sair" href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp;&nbsp;Sair</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>