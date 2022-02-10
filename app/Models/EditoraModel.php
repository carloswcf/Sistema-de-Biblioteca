<?php namespace App\Models;

use CodeIgniter\Model;

class EditoraModel extends Model
{
    protected $table = 'editora';
    protected $primaryKey = 'id_editora';
    protected $returnType = 'object';
    protected $allowedFields = [
        'id_editora', 
        'editora'];
    
    
}


