<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\EditoraModel;

class Editora extends BaseController
{
    public function index()
    {
        $consulta = new EditoraModel();
        
        $dados["lista"] = $consulta->find();
        $dados["nome_view"] = "v_lstEditora";
        return view('template', $dados);
    }
    
    public function novo()
    {
        $dados["nome_view"] = "v_frmEditora";
        return view('template', $dados);
    }
    
    public function salvar()
      {
        
        $db      = \Config\Database::connect();
        $builder = $db->table('editora');
        
        $id_editora = $this->request->getPost('id_editora');
        $editora = $this->request->getPost('editora');
        
        $dados = ['id_editora' => $id_editora,
                  'editora'    => $editora ];
        
        if(($id_editora=="") || ($id_editora==NULL))
        {
             $builder->insert($_POST);
        }
        if($this->request->getMethod() === 'POST');
        {
            $builder->where('id_editora', $id_editora);
            $builder->update($dados);
        }
        
            
         return redirect()->to(base_url('http://biblioteca.local/editora'));
        
        
}
    
    public function editar($id)
    {
        
        $alterar = new EditoraModel();
        $lista = $alterar->find($id);
       
        $dados["editora"] = $lista;
        $dados["nome_view"] = "v_frmEditora";
        return view('template', $dados);
        
        
      }

      
   public function excluir($id)
   {
       $excluir = new EditoraModel();
       $excluir->delete($id);
       
       return redirect()->to(base_url('http://biblioteca.local/editora'));
       
   }
      
 
      
 }
