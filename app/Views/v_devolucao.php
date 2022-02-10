<div class="conteudo">
		<div class="base-home">
			<h1 class="titulo"><span>Consultar emprestimo</span></h1>
			<div class="base-lista base-selecionar">
				<form action="" method="">
					<div class="formback">
						<div class="caixa03">
							<span>Consulta por Código ou email:</span>
								<div class="separa">							
                                    <input type="text" name="" value="" id="pesq_codigo" placeholder="Código">
								</div>
                                                      
								<div class="separa">							
                                    <input type="text" name="" value="" id="pesq_nome" placeholder="Informe o email">
								</div>
						</div>
						<div class="caixa02 caixa02-alternativo">
							<span>INFORME A PARTE DO NOME A SER Consultado</span>
							<input type="text" name="" id="pesq_nome" placeholder="informe o nome a ser pesquisado">
                            <input type="button" value="" class="btn" onclick="buscarAluno()">
						</div>										
					</div>
				</form>
			</div>
			
			<div class="base-lista">			
			<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tamanho-table">
				  <thead>
					  <tr>
						<th align="center">ID</th>
						<th align="center">Data</th>
						<th align="center">Nome</th>
						<th align="center">Email</th>
                        <th align="center">Opção</th>
					  </tr>
				  </thead>
				  <tbody id="listaAlunos">
					  <tr>
					  <td>1</td>
					  <td>2020-11-30</td>
					  <td>Cliente Teste</td>
					  <td>teste@gmail.com</td>
					  <td><a href="javascript:;" onclick="listaItensEmprestimo(9 )" class="btn">Detalhes</a></td>
					  </tr>
				  </tbody>
				</table>
				
				<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tamanho-table">
				  <thead>
					  <tr>
						<th align="center">Previsão</th>
						<th align="center">Titulo</th>
						<th align="center">Volume</th>
						<th align="center">CDU</th>
						<th align="center">Devolver</th>
					  </tr>
				  </thead>
				  <tbody id="listaItens">
				  <tr>
				  <td>2020-12-04</td>
				  <td>Livro Teste</td>
				  <td>undefined</td><td>undefined</td>
				  <td><a href="javascript:;" onclick="devolucao(49 )" class="btn">Devolver</a></td>
				  </tr>
				  </tbody>
				</table>
			</div>
		</div>
	</div>	       
  