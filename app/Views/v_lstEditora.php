<script>
    function confirmar_exclusao(editora)
    {
        if(!confirm("Tem certeza que deseja excluir a Editora: " + editora + "?"))
        {
            return false;
        }
            alert("excluido com sucesso");
            return true;
    }
</script>

<div class="conteudo">
		<div class="base-home">
			<h1 class="titulo"><span>Alterar editora</span></h1>
			<div class="base-lista base-selecionar">
				<form action="" method="">
					<div class="formback">
						<div class="caixa02">
							<span>Informe a editora a ser alterado</span>
							<input type="text" name="" placeholder="informe o nome a ser pesquisado">
							<input type="submit" value="" class="btn">
						</div>
						
						
					</div>
				</form>
			</div>
			
			<div class="base-lista">
			<table width="100%" border="0" cellspacing="0" cellpadding="0">
				  <thead>
					  <tr>
						<th width="5%" align="center">Id</th>
						<th width="60%" align="left">Localização</th>
                        <th width="17%" colspan="2" align="center">Ação</th>
					  </tr>
				  </thead>
				  <tbody>
                        <?php foreach ($lista as $linha): ?> 
                        <tr>
                            
                                <td align="center"><?php echo $linha->id_editora?></td>
                                <td align="left"><?php echo $linha->editora?></td>
                                <td align="left"><a href="<?php echo base_url(). "/editora/editar/". $linha->id_editora ?>" class="btn">ALTERAR</a></td>
                                <td align="left"><a href="<?php echo base_url(). "/editora/excluir/". $linha->id_editora ?>" onclick="return confirmar_exclusao('<?php echo $linha->editora?>')" class="btn excluir">Excluir</a></td>
					 
                        </tr>
                        <?php endforeach;?> 
                        
                          
                        
                        
                      				  </tbody>
				</table>
			</div>
		</div>
	</div>	