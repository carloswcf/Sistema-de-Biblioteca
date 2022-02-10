<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\IndiceModel;

class Indice extends BaseController
{
    public function index()
    {
        $consulta = new IndiceModel();
        
        $dados["lista"] = $consulta->find();
        $dados["nome_view"] = "v_lstIndice";
        return view('template', $dados);
    }
    
    public function novo()
    {
        $dados["nome_view"] = "v_frmIndice";
        return view('template', $dados);
    }
    
    public function salvar()
      {
        $validar= new IndiceModel();
        
        if(($id_indice=="") || ($id_indice==NULL))
        {
            $qry =  $validar->insert($_POST);
            if($qry){
                return $this->db->insert_id();
            }else{
                return false;
            }
        }
        else if($this->request->getMethod() === 'post')
        {
            
            $dados = ['id_indice'         => $this->request->getPost('id_indice'),
                      'indice'            => $this->request->getPost('txt_indice')];
            
          $validar->update($id_aluno, $dados); 
          return $id_indice;
            
        }
            
        
        
        
}
    
    public function editar($id)
    {
        
        $alterar = new IndiceModel();
        $lista = $alterar->find($id);
       
        $dados["indice"] = $lista;
        $dados["nome_view"] = "v_frmIndice";
        return view('template', $dados);
        
        
      }

      
   public function excluir($id)
   {
       $excluir = new IndiceModel();
       $excluir->delete($id);
       
       return redirect()->to(base_url('http://biblioteca.local/indice'));
       
   }
      
 
      
 }
