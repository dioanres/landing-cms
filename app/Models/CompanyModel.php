<?php namespace App\Models;

use CodeIgniter\Model;

class CompanyModel extends Model
{
    protected $table      = 'cms_company';
    protected $primaryKey = 'id';

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['nama_perusahaan','logo', 'deskripsi','tentang_kami','sejarah_perusahaan','no_telpon','no_hp','email',
                                'alamat','medsos_ig','medsos_twitter','medsos_facebook'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function __construct()
	{
		parent::__construct();
		$this->db = \Config\Database::connect();
    }
    
    public function getAllAp() {
        $builder = $this->db->table($this->table);
        $query = $builder->whereNotIn('id',[0])->get()->getResult();
        return $query;
    }
}