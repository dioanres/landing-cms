<?php namespace App\Models;

use App\Models\BaseModel;

class ActivityLoginModel extends BaseModel
{
    protected $table      = 'cms_activity_login';
    protected $primaryKey = 'id';

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['username','ip','last_login','device','email'];

    protected $useTimestamps = true;

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function __construct()
	{
		parent::__construct();
		$this->db = \Config\Database::connect();
	}

}