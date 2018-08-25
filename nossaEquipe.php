<style>
	.col-lg-3, .col-sm-3{
		
		max-height:329px !important;
	}
</style>

<?php
	require_once("painel/classe/DaoAluno.php");
	require_once("painel/classe/Aluno.php");
	require_once("painel/classe/DaoProfessor.php");
	require_once("painel/classe/Professor.php");

	$obj_daoaluno =		new DaoAluno();
	$obj_aluno =		new Aluno();
	$obj_daoProfessor = new DaoProfessor();
	$obj_daoprofessor = new DaoProfessor();
	$obj_professor =	new Professor();

	$professores = $obj_daoprofessor->listaProfessores($conexao);
?>

<section class="our-team" id="team">
	<div class="container">
		<div class="section-header">
			<h2 class="dark-text">Nossa Equipe</h2>
			<h6>
				Conheça nossa equipe. Trabalhamos com prazer e dedicação, desenvolvendo nosso potencial em equipe.			
			</h6>
		</div>
		
		<div style="visibility: hidden; -webkit-animation-name: none; -moz-animation-name: none; animation-name: none;-webkit-animation-duration: 3s; -moz-animation-duration: 3s; animation-duration: 3s;-webkit-animation-delay: 0.15s; -moz-animation-delay: 0.15s; animation-delay: 0.15s;" class="row wow fadeInRight animated" data-wow-offset="40" data-wow-duration="3s" data-wow-delay="0.15s">
		<div class="col-lg-3 col-sm-3">
				<div class="team-member">
					<?php
					foreach($professores as $prof){?>	
					<figure class="profile-pic"> 
						<img src="painel/imagens/alunos/<?=$prof['prf_foto']?>"alt="">
					</figure>
					<div class="member-details">
						<h5 class="dark-text red-border-bottom"><?=$prof['prf_nome']?></h5>
						<div class="position">
							<p>Professor agosto/2016 - Atual</p>
						</div>
					</div>
					<div class="social-icons" style="padding:0px !important;margin-top:0px !important;">
						<ul>
							<li><a target="_blank" href="https://www.facebook.com/profile.php?id=100000048922241&fref=ts"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
							<li><a target="_blank" href="<?=$prof['prf_linkedin']?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
							<li><a target="_blank" href="https://github.com/DanielGTI"><i class="fa fa-github" aria-hidden="true"></i></a></li>
							<!--<li><a href=""><i class="fa fa-skype"></i></a></li>-->
						</ul>
					</div>
					<?php }?>
				</div>
			</div>
			<div class="col-lg-3 col-sm-3">
				<div class="team-member" style="margin-bottom:0px !important;">
					<figure class="profile-pic">
						<img src="Zerif%20-%20Responsive%20One%20Page%20Template_arquivos/alexandre.jpg" alt="">
					</figure>
					<div class="member-details">
						<h5 class="dark-text red-border-bottom">Alexandre Alves</h5>
						<div class="position">
							<p>Programador maio/2016 - Atual</p>
							<p>Campus: Santo Amaro</p>
						</div>
					</div>
					<div class="social-icons">
						<ul>
							<li><a target="_blank" href="https://www.facebook.com/profile.php?id=100004935793311&fref=ts"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
							<li><a target="_blank" href="https://www.linkedin.com/in/alexandre-correa-alves-4aa5ab9b?trk=nav_responsive_tab_profile"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
							<!-- <li><a target="_blank" href=""><i class="fa fa-github" aria-hidden="true"></i></a></li> -->
							<!--<li><a target="_blank" href=""><i class="fa fa-skype"></i></a></li>-->
						</ul>
					</div>
				</div>
			</div>
		</div> 
	</div>
</section>