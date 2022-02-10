<div class="window" id="janela1">
	<div class="caixa">
		<a href="" class="fechar"><b>X</b></a>
		<div class="base-home">
		<div class="base-lista">
				<form action="" method="">		
							
			<div class="base-pesquisa">
					<div class="formback formback2">	
								<span>PESQUISAR POR:</span>
								<label>Código:<input type="text" id="pesq_codigo" placeholder="pesquisar"></label>
								<label>Nome:<input type="text" id="pesq_nome" placeholder="pesquisar"></label>
								<label>Email:<input type="text" id="pesq_email" placeholder="pesquisar"></label>
                                                                <input type="button" value="Pesquisar" onclick="buscarAluno()" class="btn">
						
					</div>
					
				<table width="100%" border="0" cellspacing="0" cellpadding="0">
				  <thead>
					  <tr>
						<th align="center">Id</th>
						<th align="left">Titulo</th>
						<th align="center">Editora</th>
						<th align="center">Ação</th>
					  </tr>
				  </thead>
				  <tbody id="listaAlunos">
				  <tr>
				  <td>1</td><td>Aluno Teste</td>
				  <td>teste@gmail.com</td>
				  <td><a href="javascript:;" onclick="selecionarAluno(1 )" class="btn">Selecionar</a></td>
				  </tr>
				  <tr>
				  <td>2</td>
				  <td>Elielma Regina</td>
				  <td>elielma@gmail.com.br</td>
				  <td><a href="javascript:;" onclick="selecionarAluno(2 )" class="btn">Selecionar</a>
				  </td>
				  </tr>
				  <tr>
				  <td>4</td>
				  <td>Um cliente teste</td>
				  <td>clientenovo@gmail.com</td>
				  <td><a href="javascript:;" onclick="selecionarAluno(4 )" class="btn">Selecionar</a></td>
				  </tr>
				  <tr>
				  <td>5</td>
				  <td></td>
				  <td></td>
				  <td>
				  <a href="javascript:;" onclick="selecionarAluno(5 )" class="btn">Selecionar</a></td>
				  </tr>
				  <tr>
				  <td>6</td>
				  <td></td>
				  <td></td>
				  <td><a href="javascript:;" onclick="selecionarAluno(6 )" class="btn">Selecionar</a></td>
				  </tr>
				  </tbody>
				</table>
						
				</form>
			</div>
			</div>
	</div>
	</div>
</div>