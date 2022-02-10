<?php 
        $id_acervo          = isset($acervo->id_acervo) ? $acervo->id_acervo : '';
        $titulo             = isset($acervo->titulo) ? $acervo->titulo : '';
        $subtitulo          = isset($acervo->subtitulo) ? $acervo->subtitulo : '';
        $data_cadastro      = isset($acervo->data_cadastro) ? $acervo->data_cadastro : '';
        $id_editora         = isset($acervo->id_editora) ? $acervo->id_editora : '';
        $id_autor           = isset($acervo->id_autor) ? $acervo->id_autor : '';
        $tipo_acervo        = isset($acervo->tipo_acervo) ? $acervo->tipo_acervo : '';
        $exemplar           = isset($acervo->exemplar) ? $acervo->exemplar : '';
        $volume             = isset($acervo->volume) ? $acervo->volume : '';
        $edicao             = isset($acervo->edicao) ? $acervo->edicao : '';
        $ano_edicao         = isset($acervo->ano_edicao ) ? $acervo->ano_edicao  : '';
        $paginas            = isset($acervo->paginas) ? $acervo->paginas : '';
        $tombo              = isset($acervo->tombo) ? $acervo->tombo : '';
        $cdu                = isset($acervo->cdu) ? $acervo->cdu : '';
        $cdd                = isset($acervo->cdd) ? $acervo->cdd : '';
        $cutter             = isset($acervo->cutter) ? $acervo->cutter : '';
        $isbn               = isset($acervo->isbn) ? $acervo->isbn : '';
        $id_indice          = isset($acervo->id_indice) ? $acervo->id_indice : '';
        $txt_palavra_chave  = isset($acervo->palavra_chave ) ? $acervo->palavra_chave  : '';
        $txt_pode_emprestar = isset($acervo->pode_emprestar ) ? $acervo->pode_emprestar  : '';
        
      
?>





<div class="conteudo">
    <div class="base-home">
            <h1 class="titulo"><span>INCLUSÃO DE itens de arcevo</span></h1>
            <div class="base-form">
                    <form action="<?php echo base_url('acervo/salvar')?>" method="POST">		
                      <div id="caixa">
                            <div class="base-abas">
								<p id="abas">
									<a href="#aba1" class="selected">Dados do Acervo</a>
									<a href="#aba2">Indice</a>
								</p>
                                    <ul class="cont-aba" id="conteudos">	
                                       <li id="aba1">
										<div class="caixa">
                                            <div class="base-home">
                                                <span>Titulo da obra</span>
                                                    <input type="text" name="titulo" value="<?php echo $titulo ?>">			
                                                        <span>Sub titulo</span>
                                                                <input type="text" name="subtitulo" value="<?php echo $subtitulo ?>">
														<div class="separa">
                                                                <span> Data aquisição</span>
                                                                <input type="date" name="data_cadastro"  value="<?php echo $data_cadastro ?>">
														</div>	
														<div class="separa">	
                                                             <span>Editora </span>
                                                                
                                                                 <select name="id_editora" class="form-control">
                                                                     
                                                                     
                                                                           <option value="<?php echo $editora ?>"><?php echo $editora ?></option>
                                                                     
                                                                 </select>
                                                        </div>
																
														<div class="separa">	
                                                                <span>Autor </span>                                                               
                                                                        <select name="id_autor" class="form-control">
                                                                               
                                                                              <option value="<?php echo $autor ?>"><?php echo $autor ?></option> 
                                                                        
                                                                        </select>
                                                 
                                                                               
                                                                       
                                                         </div>        
                                                                      <div class="separa">    
                                                                               
                                                                                
                                                                                                                                                            
                                                                       
																	

										
                                                                <span>Tipo de item </span>
                                                                        <select name="tipo_acervo" value="<?php echo $tipo_acervo ?>">
                                                                                <option>Livro</option>
                                                                                <option>Apostila</option>
                                                                                <option>Revista</option>
                                                                        </select>
																</div>		
                                                    <label>                                                 												
													<small><input type="checkbox">Não disponibilizar para emprestimo</small>
                                                    </label>
                                                        </div>
												</div> 
                                                         
													
                                                
                                                <div class="caixa">
                                                <div class="base-home">
                                                        <div class="separa">
                                                                <span>Exemplar</span>
                                                                <input type="text" name="exemplar" value="<?php echo $exemplar ?>" size="5" >
                                                                <span>Volume</span>
                                                                <input type="text" name="volume" value="<?php echo $volume ?>" size="5">
                                                                <span>Edição</span>
                                                                <input type="text" name="edicao" value="<?php echo $edicao ?>" size="5">
                                                        </div>
                                                        <div class="separa">
                                                                <span>Ano edição</span>
                                                                <input type="text" name="ano_edicao" value="<?php echo $ano_edicao ?>" size="5">
                                                                <span>No. pagina</span>
                                                                <input type="number" name="paginas" value="<?php echo $paginas ?>" size="5">

                                                                <span>No. tombo</span>
                                                                <input type="number" name="tombo" value="<?php echo $tombo ?>" size="5">
                                                        </div>

														
														<div class="separa">
																		<span> CDU</span>
																		<input type="text" name="cdu" value="<?php echo $cdu ?>" size="10px">
																		<span> CDD</span>
																		<input type="text" name="cdd" value="<?php echo $cdd ?>">
																</div>	

																<div class="separa">
																		<span> CUTTER</span>
																		<input type="text" name="cutter" value="<?php echo $cutter ?>">
																		<span> ISBN</span>
																		<input type="text" name="isbn" value="<?php echo $isbn ?>">
																</div>	
													
												   
													</div>
												</div>
											</li>
									<li id="aba2" style="display: none;">
										<div  class="base-home">
                                                <span> Índice</span>
                                                    <textarea id="txt_indice" rows="10"></textarea>
                                                
                                                <div class="base-botoes">
                                                    <input type="button" class="btn salvar" onclick="salvarIndice()" value="Salvar" />
                                                        <button  class="btn excluir">excluir</button>
                                                </div>
                                        </div>  
                                    </li>
                                    </ul>
                                
                                 	

                          <input type="hidden" name="id_acervo" value="<?php echo $id_acervo ?>" />
                          <input type="hidden" name= "id_indice" id="txt_id_indice" value="<?php echo $id_indice ?>" />
                            <div class="base-botoes">
                                            <button class="btn ok">OK</button>
                                            <button class="btn cancelar">Cancelar</button>
                                            <button class="btn fechar">fechar</button>
                                    </div>
                   

                    </form>
            </div>
        </div>
</div>	       
  

</div> 
</div> 


