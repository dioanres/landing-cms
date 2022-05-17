<?php namespace App\Models;

use App\Models\BaseModel;

class MisiModel extends BaseModel
{
    protected $table      = 'cms_misi';
    protected $primaryKey = 'id';

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['misi','id_company'];

    protected $useTimestamps = true;

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function __construct()
	{
		parent::__construct();
		$this->db = \Config\Database::connect();
	}

    public function getMisiCompany()
    {
        $builder = $this->db->table($this->table);
        $builder->select($this->table.'.*');
        $builder->select('nama_perusahaan');
        $builder->join('cms_company','cms_company.id = '.$this->table.'.id_company');
        $query = $builder->get();
        
        return $query->getResult();
    }
}