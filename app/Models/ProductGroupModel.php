<?php namespace App\Models;

use App\Models\BaseModel;

class ProductGroupModel extends BaseModel
{
    protected $table      = 'sales_product_groups';
    protected $primaryKey = 'id';

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['name'];
    protected $useTimestamps = true;

    protected $validationRules    = [
        'name'  => 'required',
    ];
    protected $validationMessages = [
        'name'  => [
            'required' => 'Nama Wajib di isi.'
        ],
    ];
    protected $skipValidation     = false;
}