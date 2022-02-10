<?php 
        $id_autor= isset($autor->id_autor) ? $autor->id_autor : '';
        $autor= isset($autor->autor) ? $autor->autor : '';
?>

<div class="conteudo">
		<div class="base-home">
			<h1 class="titulo"><span>Inclusão de autor</span></h1>
			<div class="base-form">
                            <form action="<?php echo base_url()?>/autor/salvar" method="POST">			
				
				<div class="caixa100">
					<div class="base-home">
						<span>Nome do autor</span>
						<input type="text" name="autor" value="<?php echo $autor?>">
						
                                                <input type="hidden" name="id_autor" value="<?php echo $id_autor?>" />	
						<div class="base-botoes">
							<button class="btn ok">Inserir</button>
							<button class="btn cancelar">Cancelar</button>
						</div>
					</div>
				</div>
								
				</form>
			</div>
		</div>
	</div>	       
  