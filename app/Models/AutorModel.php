<?php namespace App\Models;

use CodeIgniter\Model;

class AutorModel extends Model
{
    protected $table = 'autor';
    protected $primaryKey = 'id_autor';
    protected $returnType = 'object';
    protected $allowedFields = [
        'id_autor', 
        'autor'];
    
    
}


