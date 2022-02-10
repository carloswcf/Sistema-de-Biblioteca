<?php 
        $id_aluno           = isset($aluno->id_aluno) ? $aluno->id_aluno : '';
        $nome              = isset($aluno->aluno) ? $aluno->aluno : '';
        $data_nascimento    = isset($aluno->data_nascimento) ? $aluno->data_nascimento : '';
        $data_cadastro      = isset($aluno->data_cadastro) ? $aluno->data_cadastro : '';
        $sexo               = isset($aluno->sexo) ? $aluno->sexo : '';
        $escolaridade       = isset($aluno->escolaridade) ? $aluno->escolaridade : '';
        $nome_pai           = isset($aluno->nome_pai) ? $aluno->nome_pai : '';
        $nome_mae           = isset($aluno->nome_mae) ? $aluno->nome_mae : '';
        $rg                 = isset($aluno->rg) ? $aluno->rg : '';
        $cpf                = isset($aluno->cpf) ? $aluno->cpf : '';
        $fone               = isset($aluno->fone) ? $aluno->fone : '';
        $endereco           = isset($aluno->endereco) ? $aluno->endereco : '';
        $cidade             = isset($aluno->cidade) ? $aluno->cidade : '';
        $bairro             = isset($aluno->bairro) ? $aluno->bairro : '';
        $uf                 = isset($aluno->uf) ? $aluno->uf : '';
        $cep                = isset($aluno->cep) ? $aluno->cep : '';
        $referencia         = isset($aluno->referencia) ? $aluno->referencia : '';
        $email              = isset($aluno->email) ? $aluno->email : '';
      
      
        
 ?>
<div class="conteudo">
		<div class="base-home">
			<h1 class="titulo"><span>INCLUSÃO DE LEITORES</span></h1>
			<div class="base-form">
				<form action="<?php echo base_url('aluno/salvar')?>" method="POST">			
				
				<div class="caixa">
					<div class="base-home">
						<h2 class="subtitulo"><span>dados pessoais</span></h2>
						<span>Nome do leitor</span>
						<input type="text" name="aluno" value="<?php echo $nome ?>" >
						<div class="separa">
							<span>data de nascimento</span>
							<input type="date" name="nascimento" value="<?php echo $data_nascimento ?>" >
						</div>
						<div class="separa">
							<span> sexo</span>
							<select name="sexo" value="<?php echo $sexo ?>">
								<option>Masculino</option>
								<option>Feminino</option>
							</select>
						</div>
						<span>escolaridade </span>
                                                <input type="text" name="escolaridade" value="<?php echo $escolaridade ?>" >
						<span>Nome do pai </span>
						<input type="text" name="pai" value="<?php echo $nome_pai ?>">
						<span>Nome da mãe </span>
						<input type="text" name="mae" value="<?php echo $nome_mae ?>">
						
						<div class="separa">
							<span>identidade</span>
							<input type="text" name="identidade" value="<?php echo $rg ?>">
						</div>
						<div class="separa">
							<span> cpf</span>
							<input type="text" name="cpf" value="<?php echo $cpf ?>">
						</div>						
						
					</div>
				</div>
				
				<div class="caixa">
					<div class="base-home">
						<h2 class="subtitulo"><span>dados cadastrais</span></h2>
						<div class="separa">
							<span>data de cadastro</span>
							<input type="date" name="data_cadastro" value="<?php echo $data_cadastro ?>">
						</div>
						<div class="separa">
							<span>numero para contato</span>
							<input type="text" name="fone" value="<?php echo $fone ?>">
						</div>
						<span>Endereço </span>
						<input type="text" name="endereco" value="<?php echo $endereco ?>">
						<span>cidade </span>
						<input type="text" name="cidade" value="<?php echo $cidade ?>">
						<div class="separa">
						<span>bairro </span>
							<input type="text" name="bairro" value="<?php echo $bairro ?>">
						</div>
						<div class="separa">
						<span>uf </span>
							<select name="uf" value="<?php echo $uf ?>">
								<option>SP</option>
								<option>RJ</option>
								<option>MA</option>
								<option>PE</option>
								<option>SC</option>
								<option>GO</option>
							</select>
						</div>
						
						<div class="separa">
						<span>cep </span>
							<input type="text" name="cep" value="<?php echo $cep ?>">
						</div>
						<div class="separa">
						<span>ponto de referência </span>
							<input type="text" name="referencia" value="<?php echo $referencia ?>">
						</div>
						<span>Email </span>
						<input type="text" name="email" value="<?php echo $email ?>">	
                                                
                                                <input type="hidden" name="id_aluno" value="<?php echo $id_aluno ?>" />
						
						
					</div>
					
				</div>
                    
					<div class="base-botoes">
						<button class="btn ok">Salvar</button>
						<button class="btn cancelar">Cancelar</button>
					</div>
				</form>
			</div>
		</div>
	</div>	