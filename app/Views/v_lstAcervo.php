<script>
    function confirmar_exclusao(acervo)
    {
        if(!confirm("Tem certeza que deseja excluir o acervo: " + acervo + "?"))
        {
            return false;
        }
            alert("excluido com sucesso");
            return true;
    }
</script>

<div class="conteudo">
		<div class="base-home">
			<h1 class="titulo"><span>ALTERAÇÃO DE acervo</span></h1>
			<div class="base-lista">
				<form action="" method="">
					<div class="formback formback2">
						<div class="caixa01">
							<span>PESQUISAR POR:</span>
							<div class="radioback">
								<input type="radio" name="pesquisa" value="" id="nome"><label for="nome">Titulo</label>
								<input type="radio" name="pesquisa" value="" id="livros"><label for="livros">livros </label>
								<input type="radio" name="pesquisa" value="" id="autor"><label for="autor">Autor</label>
								<input type="radio" name="pesquisa" value="" id="CDD"><label for="CDD">CDD ou CDU</label>
							</div>
						</div>
						<div class="caixa02">
							<span>INFORME A PARTE DO NOME A SER ALTERADO</span>
							<input type="text" name="" placeholder="informe o nome a ser pesquisado">
							<input type="submit" value="" class="btn">
						</div>
						<div class="caixa03">
							<input type="checkbox" name="" value="" id="seleciona"><label for="seleciona">Procurar o texto em qualquer parte do campo selecionado</label>
						</div>
						
					</div>
				</form>
			</div>
			
			<div class="base-lista">
			<table width="100%" border="0" cellspacing="0" cellpadding="0">
				  <thead>
					  <tr>
						<th  align="left">ID</th>
						<th  align="left">Título</th>
						<th  align="center">SubTitulo</th>
                                                <th width="15%" colspan="2" align="center">Ação</th>
					  </tr>
				  </thead>
				<tbody>
				    <?php foreach($lista as $linha): ?>  
                                      <tr>
						<td align="center"><?php echo $linha->id_acervo ?></td>
						<td align="left"><?php echo $linha->titulo ?></td>
						<td align="center"><?php echo $linha->subtitulo ?></td>
                                                <td align="center"><a href="<?php echo base_url(). "/acervo/editar/" .$linha->id_acervo ?>" class="btn">ALTERAR</a></td>
                                                <td align="center"><a href="<?php echo base_url(). "/acervo/excluir/" .$linha->id_acervo ?>" onclick="return confirmar_exclusao('<?php echo $linha->id_acervo ?>')" class="btn excluir">Excluir</a></td>
					
			              </tr>
                                  <?php endforeach;?>          
                               </tbody>
			</table>
			</div>
			
			<div class="base-form">
			
			</div>
		</div>
	</div>	       
     
                                            
                                      
                                            
                                      
                                            
                                     
                                  