
<?php
    include "modais/modal_aluno.php";
    include "modais/modal_acervo.php";
 ?>


<!-- mascara para cobrir o site -->  
<div id="mascara"></div>







<div class="conteudo">
	<div class="base-home">
	
	<h1 class="titulo"><span>Emprestimo </span></h1>
		<div class="base-lista">
		<div class="venda">
			<div class="base-form">
				
					<div class="base-home">
						<div class="marcacao">
							<h3>SELECIONE UM CLIENTE</h3>
							<form action="">                                                      
							
							<div class="detalhe-cliente" id="dados_cliente">
                                                            <p><b>Código: </b><span id="id_aluno"></span></p>
                                                            <p><b>Nome:</b> <span id="nome_aluno"> </span></p>
                                                            <p><b>Endereço:</b><span id="endereco_aluno"> </span></p>
                                                            <p><b>Cidade:</b><span id="cidade_aluno">  </span></p>
                                                            <p><b>Bairro:</b><span id="bairro_aluno"> </span></p>
                                                            <p><b>Email:</b> <span id="email_aluno"></span></p>
							</div>
                                                       
                                                            <a href="#janela1" class="btn" id="botao_cliente" rel="modal">Selecionar Cliente</a>
							
							</form>
						</div>
					</div>
				    
                            
                            
			
				<div class="base-home">
					<div class="marcacao">
						<h3>Dados do Empréstimo</h3>						
                                                
                                                <div class="separa4">
						<span>Código: </span>
                                                <input type="text" placeholder="Digite o nome do cliente" id="id_emprestimo" readonly="true">
						</div>
                                                
						<div class="separa4">
						<span>Data</span>
                                                <input type="date" placeholder="Digite o código" id="data_emprestimo" value="2020-12-02" readonly="true">
						</div>
						<div class="separa4">
						<span>Data Devolução</span>
							<input type="date" placeholder="Digite a hora" id="data_devolucao" value="2020-12-02">
						</div>
						
						<div class="separa4">
						<span>Hora</span>
							<input type="text" placeholder="Digite a data" id="hora_emprestimo" value="08:45:30">
						</div>
						
						<div class="limpar"></div>
                         
					</div>
					<input type="button" id="botao_inicio" class="btn" value="Iniciar Empréstimo" onclick="iniciar_emprestimo()">
				</div>
			
				
				<div class="base-home" id="tabela_itens">
					<div class="marcacao">
							<h3>Itens do Emprestimo</h3>
                            <div class="caixa100">
								<a href="#janela2" class="btn add"  rel="modal">Adicionar Itens ao Empréstimo</a>
                            </div>
                                                       
							
					<div class="base-lista">
					<table width="100%" border="0" cellspacing="0" cellpadding="0">
						  <thead>
							  <tr>
								<th width="2%" align="left">Id</th>
								<th width="48%" align="left">Produto</th>
								<th width="18%" align="left">Data</th>
								<th width="18%" align="left">Devolução</th>
								<th width="20%" align="center">Excluir</th>
							  </tr>
						  </thead>
						  <tbody id="itens_emprestimo"><tr><td>1</td><td> Livro codeigniter 4 </td><td> 2020-12-02</td><td> 2020-12-02</td><td><a href="javascript:;" onclick="excluirItem(50)" class="btn" excluir="">Excluir</a></td></tr></tbody>
					</table>
					</div>
					<div class="base-botoes2">
						<button class="btn limpar" onclick="limparItens()">limpar itens</button>
                                                <button class="btn finalizar" onclick="finalizar_emprestimo()">finalizar venda</button>
                                                <button class="btn cancelar" onclick="cancelar_emprestimo()">cancelar venda</button>
					</div>
				</div>
			</div>
		</div>
		</div>
	</div>
	</div>
</div>