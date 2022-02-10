<?php namespace App\Models;

use CodeIgniter\Model;

class AcervoModel extends Model
{
    protected $table = 'acervo';
    protected $primaryKey = 'id_acervo';
    protected $returnType = 'object';
    protected $allowedFields = [
        'id_acervo',          
        'titulo ',           
        'subtitulo',        
        'data_cadastro',   
        'id_editora',      
        'id_autor',           
        'tipo_acervo',    
        'exemplar',        
        'volume',            
        'edicao',             
        'ano_edicao',       
        'paginas',           
        'tombo',              
        'cdu',               
        'cdd',               
        'cutter',             
        'isbn', 
        'foto',
        'id_indice',          
        'palavra_chave',  
        'pode_emprestar'
        ];
    
  }




        