<?php namespace App\Controllers;

use CodeIgniter\Controller;


class Devolucao extends BaseController
{
    public function index()
    {
        $dados["nome_view"] = "v_devolucao";
        return view('template', $dados);
    }
    
    
 
      
 }
