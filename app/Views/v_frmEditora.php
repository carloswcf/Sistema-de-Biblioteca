<?php 
        $id_editora= isset($editora->id_editora) ? $editora->id_editora : '';
        $editora= isset($editora->editora) ? $editora->editora : '';
?>

<div class="conteudo">
	<div class="base-home">
			<h1 class="titulo"><span>Inserir nova editora</span></h1>
			<div class="base-form">
				<form action="<?php echo base_url()?>/editora/salvar" method="post">			
				
				<div class="caixa100">
					<div class="base-home">
						<span>NOME DA EDITORA</span>
                                                <input type="text" name="editora" value="<?php echo $editora ?>">					
						
						<input type="hidden" name="id_editora" value="<?php echo $id_editora ?>" />			
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
	</div>	 