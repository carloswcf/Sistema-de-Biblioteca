<script>
    function confirmar_exclusao(aluno)
    {
        if(!confirm("Tem certeza que deseja excluir o aluno: " + aluno + "?"))
        {
            return false;
        }
            alert("excluido com sucesso");
            return true;
    }
</script>



<div class="conteudo">
		<div class="base-home">
			<h1 class="titulo"><span>LISTA DE LEITORES</span></h1>
			<div class="base-lista">
				<form action="" method="post">
					<div class="formback">
						<div class="caixa01">
							<span>PESQUISAR POR:</span>
							<div class="radioback">
								<input type="radio" name="pesquisa" value="nome" id="nome"><label for="nome">Nome</label>
								<input type="radio" name="pesquisa" value="numero" id="numero"><label for="numero">Número</label>
							</div>
						</div>
						<div class="caixa02">
							<span>INFORME A PARTE DO NOME A SER ALTERADO</span>
							<input type="text" name="" placeholder="informe o nome a ser pesquisado">
							<input type="submit" value="" class="btn">
						</div>
						<div class="caixa03">
							<input type="checkbox" name="" value="" id="seleciona"><label for="seleciona">CONSULTAR POR PARTE DO NOME INFORMADO</label>
						</div>
						
					</div>
				</form>
			</div>
			
			<div class="base-lista">
				<h2>LISTA DE LEITORES</h2>
			<table width="100%" border="0" cellspacing="0" cellpadding="0">
				  <thead>
					  <tr>
						<th width="9%" align="center">Cód.</th>
                        <th width="38%" align="left">Nome</th>
						<th width="27%" align="center">Email</th>						
						<th width="11%" align="center">Fone</th>
                        <th width="15%" colspan="2" align="center">Ação</th>
					  </tr>
				  </thead>
				  <tbody>
					<?php foreach ($lista as $linha): ?>
                                      <tr>
						<td align="center"><?php echo $linha->id_aluno ?></td>
						<td align="left"><?php echo $linha->aluno ?></td>
						<td align="center"><?php echo $linha->email ?></td>
						<td align="center"><?php echo $linha->fone ?></td>
						<td align="center"><a href="<?php echo base_url("aluno/editar/" .$linha->id_aluno) ?>" class="btn">ALTERAR</a></td>
                                                <td align="center"><a href="<?php echo base_url("aluno/excluir/" .$linha->id_aluno) ?>" onclick="return confirmar_exclusao('<?php echo $linha->aluno ?>')" class="btn excluir">Excluir</a></td>
					</tr>
                                        <?php endforeach;?>                                         
                                  </tbody>
				</table>
			</div>
			
			<ul class="paginacao">
				<li><a href="" class="anterior">Anterior</a></li>
				<li><a href="">1</a></li>
				<li><a href="">2</a></li>
				<li><a href="">3</a></li>
				<li><a href="">4</a></li>
				<li><a href="">5</a></li>
				<li><a href="" class="proximo">Próximo</a></li>
			</ul>
		</div>
	</div>