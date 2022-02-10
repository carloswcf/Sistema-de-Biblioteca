<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\AutorModel;

class Autor extends BaseController
{
    public function index()
    {
        $consulta = new AutorModel();
        
        $dados["lista"] = $consulta->find();
        $dados["nome_view"] = "v_lstAutor";
        return view('template', $dados);
    }
    
    public function novo()
    {
        $dados["nome_view"] = "v_frmAutor";
        return view('template', $dados);
    }
    
    public function salvar()
      {
        
        $db      = \Config\Database::connect();
        $builder = $db->table('autor');
        
        $id_autor = $this->request->getPost('id_autor');
        $autor    = $this->request->getPost('autor');
        
        $dados = ['id_autor' => $id_autor,
                  'autor'    => $autor ];
        
        if(($id_autor=="") || ($id_autor==NULL))
        {
             $builder->insert($_POST);
        }
        if($this->request->getMethod() === 'POST');
        {
            $builder->where('id_autor', $id_autor);
            $builder->update($dados);
        }
        
            
         return redirect()->to(base_url('http://biblioteca.local/autor'));
        
        
  }
    
    public function editar($id)
    {
        
        $alterar = new AutorModel();
        $lista = $alterar->find($id);
        
        
       
        $dados["autor"] = $lista;
        $dados["nome_view"] = "v_frmAutor";
        return view('template', $dados);
        
        
      }

      
   public function excluir($id)
   {
       $excluir = new AutorModel();
       $excluir->delete($id);
       
       return redirect()->to(base_url('http://biblioteca.local/autor'));
       
   }
      
 
      
 }
