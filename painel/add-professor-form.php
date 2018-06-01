<?php 
	require_once("header.php");

?>

<section id="conteudo-depoimentos">
		<div class="container">
                    <h1><i class="fa fa-comment" aria-hidden="true"></i>&nbsp;&nbsp;Adicionar Professor</h1>
                    <div class="border-dotted"></div>
                        <form method="POST" id="form-add-professor">
                                <label>Nome</label>
                                <input type="text" name="nome" class="form-control">
                                <label>E-mail</label>
                                <input type="email" name="email" class="form-control">
                                <div class="row">
                                        <div class="col-md-12 botaosalvar">
                                                <button input type="submit" class="btn btn-default salvar" id="add-projeto"><i class="fa fa-floppy-o" aria-hidden="true"></i>&nbsp;&nbsp;SALVAR</button>
                                        </div>
                                </div>
                        </form>
				
		</div>

	</section>

<?php require_once("footer.php");?>