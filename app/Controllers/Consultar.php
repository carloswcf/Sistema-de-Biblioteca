<?php namespace App\Controllers;

use CodeIgniter\Controller;


class Consultar extends BaseController
{
    public function index()
    {
        $dados["nome_view"] = "v_consultar-acervo";
        return view('template', $dados);
    }
    
    
 
      
 }
