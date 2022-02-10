<?php namespace App\Models;

use CodeIgniter\Model;

class AlunoModel extends Model
{
    protected $table = 'aluno';
    protected $primaryKey = 'id_aluno';
    protected $returnType = 'object';
    protected $allowedFields = [
        'id_aluno', 
        'aluno', 
        'endereco', 
        'cidade', 
        'bairro', 
        'uf', 
        'cep',
        'email', 
        'data_cadastro', 
        'data_nascimento', 
        'sexo',
        'escolaridade',
        'nome_pai',
        'nome_mae', 
        'rg',
        'cpf',
        'fone', 
        'referencia' ];
    
    
}


