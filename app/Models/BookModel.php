<?php namespace App\Models;

use CodeIgniter\Model;

class BookModel extends Model
{
    protected $table      = 'books';
    protected $primaryKey = 'id';

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['nombre', 'autor','genero', 'rate', 'views', 'foto', 'descripcion', 'precio', 'added_at'];

    protected $useTimestamps = false;
    protected $createdField  = 'added_at';
    protected $deletedField  = 'delete_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    
}