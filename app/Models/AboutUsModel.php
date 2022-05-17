<?php namespace App\Models;

use CodeIgniter\Model;

class AboutUsModel extends Model
{
    protected $table      = 'cms_tentang_kami';
    protected $primaryKey = 'id';

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['judul', 'deskripsi','sejarah'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}