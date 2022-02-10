<?php

namespace App\Controllers;

class Template extends BaseController
{
    public function index()
    {
        $dados["nome_view"] = "v_home";
        return view('template', $dados);
    }
}
