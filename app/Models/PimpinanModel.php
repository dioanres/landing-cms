<?php namespace App\Models;

use App\Models\BaseModel;

class PimpinanModel extends BaseModel
{
    protected $table      = 'cms_pimpinan';
    protected $primaryKey = 'id';

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['nama','jabatan', 'foto','id_company'];
    protected $useTimestamps = true;

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}