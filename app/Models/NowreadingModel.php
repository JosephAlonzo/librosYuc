<?php namespace App\Models;

use CodeIgniter\Model;

class NowreadingModel extends Model
{
    protected $table      = 'nowreading';
    protected $primaryKey = 'id';

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['id_user', 'id_book'];

    protected $useTimestamps = false;
    //protected $deletedField  = 'seen_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    
}