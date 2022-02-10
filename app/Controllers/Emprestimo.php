<?php namespace App\Controllers;

use CodeIgniter\Controller;


class Emprestimo extends BaseController
{
    public function index()
    {
        $dados["nome_view"] = "v_emprestimo";
        return view('template', $dados);
    }
    
    
 
      
 }
