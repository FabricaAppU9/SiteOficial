<?php
	require_once("painel/classe/Projeto.php");
	require_once("painel/classe/DaoProjeto.php");

	$obj_projeto =		new Projeto();
	$obj_daoprojeto =   new DaoProjeto();
	
	$projetos = $obj_daoprojeto->listaProjeto($conexao);
?>

<style>
	.img_proj{
		max-width: 215px;
		margin-left: 20px;
		max-height: 300px;
	}
</style>
<section class="works" id="works">
	<div class="container">
		<div class="section-header">
			<h2 class="dark-text">Projetos</h2>
			<h6>
				Nossa equipe trabalhou com prazer e profissionalismo nos seguintes projetos. 
			</h6>
		</div>
		<div class="row projects">
		<div id="loader">
		    <div class="loader-icon"></div>
		</div>
		<div class="col-md-12" id="portfolio-list">
			<ul class="cbp-rfgrid">
	        <li style="visibility: hidden; -webkit-animation-name: none; -moz-animation-name: none; animation-name: none;-webkit-animation-duration: 1.5s; -moz-animation-duration: 1.5s; animation-duration: 1.5s;-webkit-animation-delay: 0.15s; -moz-animation-delay: 0.15s; animation-delay: 0.15s;" class="wow fadeInLeft animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
	        <center><a data-toggle="modal" href="#myModalProcalc" id="procalc"><img src="Zerif%20-%20Responsive%20One%20Page%20Template_arquivos/logoProCalc.jpg" alt="project" width="100%" style="max-width: 215px;">
			</a></center>
	        </li>
	        
	        <li style="visibility: hidden; -webkit-animation-name: none; -moz-animation-name: none; animation-name: none;-webkit-animation-duration: 1.5s; -moz-animation-duration: 1.5s; animation-duration: 1.5s;-webkit-animation-delay: 0.15s; -moz-animation-delay: 0.15s; animation-delay: 0.15s;" class="wow fadeInDown animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
	        <a data-toggle="modal" href="#myModalProspiro" id="procalc"><img src="Zerif%20-%20Responsive%20One%20Page%20Template_arquivos/prospiro.bmp" alt="project" style="border-radius: 30px;">
				</a>
			</li>
			
			<?php foreach($projetos as $proj){?>
			<li style="visibility: hidden; -webkit-animation-name: none; -moz-animation-name: none; animation-name: none;-webkit-animation-duration: 1.5s; -moz-animation-duration: 1.5s; animation-duration: 1.5s;-webkit-animation-delay: 0.15s; -moz-animation-delay: 0.15s; animation-delay: 0.15s;" class="wow fadeInDown animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
			<?php  $modal = str_replace(' ', '', $proj['prj_nome']) . "modal";?>
	        <a data-toggle="modal" href="<?="#" . $modal?>" id="<?=strtolower($proj['nome'])?>">
				<?php if($proj['prj_foto'] == NULL){
					$src = "painel/imagens/alunos/projeto.png";
				} else{
					$src = "painel/imagens/alunos/'".$proj['prj_foto']."'";
				}?>
				<img class="img_proj" src="<?=$src?>" alt="project" style="border-radius: 30px;">
				</a>
			</li>
			<?php } ?>

			</ul>
		</div>
	</div>
		<div id="loaded-content"></div>
	    <a id="back-button" class="red-btn" href="#"><i class="icon-fontawesome-webfont-27"></i> Go Back</a>
	</div>
</section> 
<div class="modal fade" id="myModalProcalc" role="dialog">
	<div class="modal-dialog" style="min-width:80%;">
		<!-- Modal content-->
      <div class="modal-content" style="padding: 20px;min-height: auto;">
      	<div class="modal-header" style="min-height: 40px;">
      		
      		<button type="button" class="close" data-dismiss="modal">&times;</button>
      		<h3>Pro-Calc</h3>
      	</div>
      	<div class="modal-body">
      	<table>
      		<tr>
      			<td>Descrição</td>
      			<td>ProCalc para Android. Calcula dados espirométricos.</td>
      		</tr>
      		<tr>
      			<td>Tecnologias</td>
      			<td>Android Studio, Astah, Java, Netbeans, Git e GitHub.</td>
      		</tr>
      		<tr>
      			<td>Link Google Play: </td>
				<td><a href="https://play.google.com/store/apps/details?id=espirometria.fabricaapp.uninove.com.br.procalc" target="_blank">Pro-calc</a></td>
      		</tr>
      	</table>
      	</div>
      	<div class="modal-footer">
      	</div>
      </div>
	</div>
</div>
<div class="modal fade" id="myModalProspiro" role="dialog">
	<div class="modal-dialog" style="min-width:80%;">
		<!-- Modal content-->
      <div class="modal-content" style="padding: 20px;min-height: auto;">
      	<div class="modal-header" style="min-height: 40px;">
      		
      		<button type="button" class="close" data-dismiss="modal">&times;</button>
      		<h3>Pro-Spiro</h3>
      	</div>
      	<div class="modal-body">
      	<table>
      		<tr>
      			<td>Descrição</td>
      			<td>ProCalc para Android. Calcula dados espirométricos.</td>
      		</tr>
      		<tr>
      			<td>Tecnologias</td>
      			<td>Android Studio, Astah, Java, Netbeans, Git e GitHub.</td>
      		</tr>
      		<tr>
      			<td></td>
      		</tr>
      	</table>
      	</div>
      	<div class="modal-footer">
      	</div>
      </div>
	</div>
</div>

<?php 
	foreach($projetos as $projeto){?>
		<?php $modal = str_replace(' ', '', $projeto['prj_nome']) . "modal";?>
		<div class="modal fade" id="<?=$modal?>" role="dialog">
			<div class="modal-dialog" style="min-width:80%;">
				<!-- Modal content-->
				<div class="modal-content" style="padding: 20px;min-height: auto;">
					<div class="modal-header" style="min-height: 40px;">

						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h3><?=$projeto['prj_nome']?></h3>
					</div>
					<div class="modal-body">
						<table>
							<tr>
								<td>Descrição</td>
								<td><?=$projeto['prj_descricao']?></td>
							</tr>
							<tr>
								<td>Tecnologias</td>
								<td><?=$projeto['prj_tecnologias']?></td>
							</tr>
							<tr>
								<td></td>
							</tr>
						</table>
					</div>
					<div class="modal-footer">
					</div>
				</div>
			</div>
		</div>
	<?php } ?>
