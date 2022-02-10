<?php namespace App\Controllers;

use CodeIgniter\Controller;


class Login extends BaseController
{
    public function index()
    {
        $dados["nome_view"] = "v_login";
        return view('template', $dados);
    }
    
    
 
      
 }
