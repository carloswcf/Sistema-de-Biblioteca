<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\AcervoModel;
use App\Models\AutorModel;
use App\Models\EditoraModel;

class Acervo extends BaseController
{
    public function index()
    {
        $consulta = new AcervoModel();
        
        $dados["lista"] = $consulta->find();
        $dados["nome_view"] = "v_lstAcervo";
        return view('template', $dados);
    }
    
    public function novo()
    {
        $autor = new AutorModel();
        $editora = new EditoraModel();
        
        $dados["editoras"] = $editora->find();
        $dados["autores"] = $autor->find();
        $dados["nome_view"] = "v_frmAcervo";
        return view('template', $dados);
    }
    
    public function salvar()
      {
        $validar= new AcervoModel();
        
        
                  $id_acervo        = $this->request->getPost('id_acervo');
                  $titulo           = $this->request->getPost('titulo');
                  $subtitulo        = $this->request->getPost('subtitulo');
                  $data_cadastro    = $this->request->getPost('data_cadastro');
                  $id_editora       = $this->request->getPost('id_editora');
                  $id_autor         = $this->request->getPost('id_autor');
                  $tipo_acervo      = $this->request->getPost('tipo_acervo');
                  $exemplar         = $this->request->getPost('exemplar');
                  $volume           = $this->request->getPost('volume');
                  $edicao           = $this->request->getPost('edicao');
                  $ano_edicao       = $this->request->getPost('ano_edicao');
                  $paginas          = $this->request->getPost('paginas');
                  $tombo            = $this->request->getPost('tombo');
                  $cdu              = $this->request->getPost('cdu');
                  $cdd              = $this->request->getPost('cdd');
                  $cutter           = $this->request->getPost('cutter');
                  $isbn             = $this->request->getPost('isbn');
                  $foto             = $this->request->getPost('foto');
                  $id_indice        = $this->request->getPost('id_indice');
                  $palavra_chave    = $this->request->getPost('palavra_chave');
                  $pode_emprestar   = $this->request->getPost('pode_emprestar');
                  
                  
                $dados = [
                  'id_acervo'        => $id_acervo,
                  'titulo'           => $titulo,
                  'subtitulo'        => $subtitulo,
                  'data_cadastro'    => $data_cadastro,
                  'id_editora'       => $id_editora,
                  'id_autor'         => $id_autor,
                  'tipo_acervo'      => $tipo_acervo,
                  'exemplar'         => $exemplar,
                  'volume'           => $volume,
                  'edicao'           => $edicao,
                  'ano_edicao'       => $ano_edicao,
                  'paginas'          => $paginas,
                  'tombo'            => $tombo,
                  'cdu'              => $cdu,
                  'cdd'              => $cdd,
                  'cutter'           => $cutter,
                  'isbn'             => $isbn,
                  'foto'             => $foto,
                  'id_indice'        => $id_indice,
                  'palavra_chave'    => $palavra_chave,
                  'pode_emprestar'   => $pode_emprestar
                ];   
                  
                  
        if(($id_acervo=="") || ($id_acervo==NULL))
        {
             $validar->insert($_POST);
        }
        if($this->request->getMethod() === 'post')
        {
            $validar->update($id_acervo, $dados);  
            
        }
            
         return redirect()->to(base_url('http://biblioteca.local/acervo'));
        
        
}
    
    public function editar($id)
    {
        
        $alterar = new AcervoModel();
        $lista = $alterar->find($id);
       
        $dados["acervo"] = $lista;
        $dados["nome_view"] = "v_frmAcervo";
        return view('template', $dados);
        
    }

      
   public function excluir($id)
   {
       $excluir = new AcervoModel();
       $excluir->delete($id);
       
       return redirect()->to(base_url('http://biblioteca.local/acervo'));
       
   }
      
 
      
 }
