<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\AlunoModel;

class Aluno extends BaseController
{
    public function index()
    {
        $consulta = new AlunoModel();
        
        $dados["lista"] = $consulta->find();
        $dados["nome_view"] = "v_lstAluno";
        return view('template', $dados);
    }
    
    public function novo()
    {
        $dados["nome_view"] = "v_frmAluno";
        return view('template', $dados);
    }
    
    public function salvar()
      {
        
        $validar= new AlunoModel();
        
        
                  $id_aluno         = $this->request->getPost('id_aluno');
                  $aluno            = $this->request->getPost('aluno');
                  $data_cadastro    = $this->request->getPost('data_cadastro');
                  $data_nascimento  = $this->request->getPost('data_nascimento');
                  $email            = $this->request->getPost('email');
                  $referencia       = $this->request->getPost('referencia');
                  $cep              = $this->request->getPost('cep');
                  $uf               = $this->request->getPost('uf');
                  $escolaridade     = $this->request->getPost('escolaridade');
                  $pai              = $this->request->getPost('pai');
                  $mae              = $this->request->getPost('mae');
                  $rg               = $this->request->getPost('rg');
                  $fone             = $this->request->getPost('fone');
                  $cidade           = $this->request->getPost('cidade');
                  $endereco         = $this->request->getPost('endereco');
                  $bairro           = $this->request->getPost('bairro');
                  $sexo             = $this->request->getPost('sexo');
                  
        $valores = ['id_aluno'       => $id_aluno,
                  'aluno'            => $aluno,
                  'data_cadastro'    => $data_cadastro,
                  'data_nascimento'  => $data_nascimento,
                  'email'            => $email,
                  'referencia'       => $referencia,
                  'cep'              => $cep,
                  'uf'               => $uf,
                  'escolaridade'     => $escolaridade,
                  'pai'              => $pai,
                  'mae'              => $mae,
                  'rg'               => $rg,
                  'cep'              => $cep,
                  'fone'             => $fone,
                  'cidade'           => $cidade,
                  'endereco'         => $endereco,
                  'bairro'           => $bairro,
                  'sexo'             => $sexo
                ];
        
        if(($id_aluno=="") || ($id_aluno==NULL))
        {
           $validar->insert($_POST);
        }
        if($this->request->getMethod() === 'POST');
        {
           $validar->update($id_aluno, $valores);
        }
        
         return redirect()->to(base_url('http://biblioteca.local/aluno'));
        
        
}
    
    public function editar($id)
     {
        
        $alterar = new AlunoModel();
        $lista = $alterar->find($id);
       
        $dados["aluno"] = $lista;
        $dados["nome_view"] = "v_frmAluno";
        return view('template', $dados);
        
        
      }

      
   public function excluir($id)
   {
       $excluir = new AlunoModel();
       $excluir->delete($id);
       
       return redirect()->to(base_url('http://biblioteca.local/aluno'));
       
   }
      
 
      
 }
