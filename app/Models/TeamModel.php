<?php namespace App\Models;

use App\Models\BaseModel;

class TeamModel extends BaseModel
{
    protected $table      = 'cms_teams';
    protected $primaryKey = 'id';

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['nama','jabatan', 'foto','id_company'];
    protected $useTimestamps = true;

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}