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
	$professores = $obj_daoprofessor->listatodososdepoimentos($conexao);
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
					<div>
						<div style="width: 100%; left: 0px; display: block;" >
							<div class="row">
								<div class="col-md-12" style="background-color:#FFFFFF;border-radius:5px;padding:10px; margin-bottom:10px;">
									<div class="feedback-box">
										<div class="message">
											 “Temos grande alegria e enorme prazer mantermos o contato e acompanhar a evolução do software. É um sonho de décadas, agora se concretizando graças ao empenho de tão brilhante grupo da Fábrica de App da Uninove, que aceitaram o desafio de algo tão diferente e tendo à frente o Prof. Gabriel.”
										</div>

										<div class="client">
											<div class="quote red-text">
												<img src="Zerif%20-%20Responsive%20One%20Page%20Template_arquivos/uninove.jpg" alt="" width="70px">
											</div>
											<div style="margin-left:450px">
												<div class="client-info">
													<a class="client-name" href="">Prof. Dr. Nacif</a>
													<div class="client-company">
														 UNINOVE / Hospital
													</div>
												</div>
											</div>
											<div class="client-image hidden-xs">
												<img src="Zerif%20-%20Responsive%20One%20Page%20Template_arquivos/uninove.jpg" alt="" width="70px" style="margin-top: 13px;">
											</div>
										</div>
									</div>

								</div> <!--Fim depoimento professor Nacif-->

								<!--Depoimento Heraldo-->
								<div class="col-md-12" style="background-color:#FFFFFF;border-radius:5px;padding:10px; margin-left:10px; margin-bottom:15px;">
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
											<div style="margin-left:450px;">
												<div class="client-info">
													<a class="client-name" href="">Heraldo de Souza</a>
													<div class="client-company">
														 UNINOVE / Iniciação Científica
													</div>
												</div>
											<div>
											<div class="client-image hidden-xs">
												<img src="Zerif%20-%20Responsive%20One%20Page%20Template_arquivos/uninove.jpg" alt="" width="70px" style="margin-top: 13px;">
											</div>
										</div>
									</div>

								</div> <!--Fim depoimento Heraldo-->
							</div>
						</div>
					</div>
				</div>

			</div> <!--Fim col-md-12-->

			<div class="col-md-12">
				<div style="display: block;">
					<div>
						<div style="width: 100%; left: 0px; display: block;">
							<?php foreach($alunos as $depoimento_aluno){?>
							<div class="row">
								<div class="col-md-12" style="background-color:#FFFFFF;border-radius:5px;padding:10px;  margin-bottom: 10px;">
									<div class="feedback-box">
										<div class="message">
											 “<?=$depoimento_aluno['pda_texto']?>”
										</div>

										<div class="client">
											<div class="quote red-text">
												<img src="Zerif%20-%20Responsive%20One%20Page%20Template_arquivos/uninove.jpg" alt="" width="70px">
											</div>
											<div style="margin-left:450px;">
												<div class="client-info">
													<a class="client-name" href=""><?=$depoimento_aluno['pal_nome']?></a>
													<div class="client-company">
														 Aluno Uninove
													</div>
												</div>
											</div>

											<div class="client-image hidden-xs">
												<img src="Zerif%20-%20Responsive%20One%20Page%20Template_arquivos/uninove.jpg" alt="" width="70px" style="margin-top: 13px;">
											</div>
										</div>
									</div>

								</div>
							</div> <!--Fim row-->
							<?php } ?>
						</div>
					</div>
				</div>

			</div> <!--col depoimento dos alunos-->

						<div class="col-md-12">
				<div style="display: block;">
					<div>
						<div style="width: 100%; left: 0px; display: block;">
							<?php foreach($professores as $depoimento_professor){?>
							<div class="row">
								<div class="col-md-12" style="background-color:#FFFFFF;border-radius:5px;padding:10px;  margin-bottom: 10px;">
									<div class="feedback-box">
										<div class="message">
											 “<?=$depoimento_professor['pdp_texto']?>”
										</div>

										<div class="client">
											<div class="quote red-text">
												<img src="Zerif%20-%20Responsive%20One%20Page%20Template_arquivos/uninove.jpg" alt="" width="70px">
											</div>
											<div style="margin-left:450px;">
												<div class="client-info">
													<a class="client-name" href=""><?=$depoimento_professor['prf_nome']?></a>
													<div class="client-company">
														 Professor Uninove
													</div>
												</div>
											</div>
											<div class="client-image hidden-xs">
												<img src="Zerif%20-%20Responsive%20One%20Page%20Template_arquivos/uninove.jpg" alt="" width="70px" style="margin-top: 13px;">
											</div>
										</div>
									</div>

								</div>
							</div> <!--Fim row-->
							<?php } ?>
						</div>
					</div>
				</div>

			</div> <!--col depoimento professores-->
		</div>
	</div>
</section>
