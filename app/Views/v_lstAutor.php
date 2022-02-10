<script>
    function confirmar_exclusao(autor)
    {
        if(!confirm("Tem certeza que deseja excluir o Autor: " + autor + "?"))
        {
            return false;
        }
            alert("excluido com sucesso");
            return true;
    }
</script>

<div class="conteudo">
		<div class="base-home">
			<h1 class="titulo"><span>Alteração de autores</span></h1>
			<div class="base-lista base-selecionar">
				<form action="" method="">
					<div class="formback">
						<div class="caixa02">
							<span>Nome do Autor</span>
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
						<th width="5%" align="center">ID</th>
						<th width="60%" align="left">Nome do Autor</th>
                                                <th width="20%" colspan="2" align="center">Ação</th>
					  </tr>
				  </thead>
				  <tbody>
			<?php foreach ($lista as $linha): ?>		   
                       <tr>
                                 <td align="center"><?php echo $linha->id_autor?></td>
                                 <td align="left"><?php echo $linha->autor?></td>	
                                 <td align="left"><a href="<?php echo base_url(). "/autor/editar/". $linha->id_autor?>" class="btn">ALTERAR</a></td>
                                 <td align="left"><a href="<?php echo base_url(). "/autor/excluir/". $linha->id_autor?>" onclick="return confirmar_exclusao('<?php echo $linha->autor?>')" class="btn excluir">Excluir</a></td>
					 
                         </tr>
                        
                      <?php endforeach;?>
                       
                       				  </tbody>
				</table>
			</div>
		</div>
	</div>	       
  