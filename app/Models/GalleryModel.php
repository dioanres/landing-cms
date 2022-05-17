<?php namespace App\Models;

use App\Models\BaseModel;

class GalleryModel extends BaseModel
{
    protected $table      = 'cms_gallery';
    protected $primaryKey = 'id';

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['title','image','id_company','keterangan'];

    protected $useTimestamps = true;

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function __construct()
	{
		parent::__construct();
		$this->db = \Config\Database::connect();
        
    }
    
    public function getGalleryCompany()
    {
        $builder = $this->db->table($this->table);
        $builder->select($this->table.'.*');
        $builder->select('nama_perusahaan');
        $builder->join('cms_company','cms_company.id = '.$this->table.'.id_company');
        $builder->where($this->table.'.deleted_at',null);
        $query = $builder->get();
        
        return $query->getResult();
    }
}