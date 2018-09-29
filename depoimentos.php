<?php

	require_once("painel/classe/DaoAluno.php");
	require_once("painel/classe/Aluno.php");
	require_once("painel/classe/DaoProfessor.php");
	require_once("painel/classe/Professor.php");
 	$obj_daoaluno 		= new DaoAluno();
	$obj_aluno 			= new Aluno();
	$obj_daoProfessor 	= new DaoProfessor();
	$obj_daoprofessor	= new DaoProfessor();
	$obj_professor 		= new Professor();
 	$alunos = $obj_daoaluno->listatodososdepoimentos($conexao);


?>

<section class="testimonial" id="testimonials">
	<div class="container">
	    <div class="section-header">
			<h2 class="white-text">Depoimentos</h2>
			<h6 class="white-text">
				Trabalhamos com dedicação e compromisso. Convidamos nossos clientes e parceiros a falar um pouco sobre nossa equipe.
			</h6>
		</div>

		<div>
			<div class="col-md-12">
				<div style="display: block;">
					<div >
						<div style="width: 100%; left: 0px; display: block;" >
							<div class="row">
								<div class="col-md-12" style="background-color:#FFFFFF;border-radius:5px;padding:10px;">
									<!--Depoimento Dr. Nacif-->
									<div class="feedback-box">
										<div class="message">
											 “Temos grande alegria e enorme prazer mantermos o contato e acompanhar a evolução do software. É um sonho de décadas, agora se concretizando graças ao empenho de tão brilhante grupo da Fábrica de App da Uninove, que aceitaram o desafio de algo tão diferente e tendo à frente o Prof. Gabriel.”
										</div>

										<div class="client">
											<div class="quote red-text">
												<img src="Zerif%20-%20Responsive%20One%20Page%20Template_arquivos/uninove.jpg" alt="" width="70px">
											</div>
											<div class="client-info">
												<a class="client-name" href="">Prof. Dr. Nacif</a>
												<div class="client-company">
													 UNINOVE / Hospital
												</div>
											</div>
											<div class="client-image hidden-xs">
												<img src="Zerif%20-%20Responsive%20One%20Page%20Template_arquivos/uninove.jpg" alt="" width="70px" style="margin-top: 13px;">
											</div>
										</div>
									</div>

								</div> <!--Depoimento Dr. Nacif-->

								<!--Depoimento Heraldo-->
								<div class="col-md-12" style="background-color:#FFFFFF;border-radius:5px;padding:10px;margin-top:15px;">
									<div class="feedback-box">
										<div class="message">
											 “Tive uma entrevista na área de desenvolvimento, e comentei que faço parte do projeto que levantou mais o meu conhecimento, facilitando o processo de entrevista.
Enfim, passei e agora estou trabalhando na área onde eu mais queria atuar.

Estou super grato pela Fábrica e super grato pela equipe”
										</div>

										<div class="client">
											<div class="quote red-text">
												<img src="Zerif%20-%20Responsive%20One%20Page%20Template_arquivos/uninove.jpg" alt="" width="70px">
											</div>
											<div class="client-info">
												<a class="client-name" href="">Heraldo de Souza</a>
												<div class="client-company">
													 UNINOVE / Iniciação Científica
												</div>
											</div>
											<div class="client-image hidden-xs">
												<img src="Zerif%20-%20Responsive%20One%20Page%20Template_arquivos/uninove.jpg" alt="" width="70px" style="margin-top: 13px;">
											</div>
										</div>
									</div>

								</div> <!--Fim Depoimento Heraldo-->
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>
