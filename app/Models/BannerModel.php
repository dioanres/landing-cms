<?php namespace App\Models;

use App\Models\BaseModel;

class BannerModel extends BaseModel
{
    protected $table      = 'sales_banner';
    protected $primaryKey = 'id';

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['image','title'];
    protected $useTimestamps = true;

    protected $validationRules    = [
        'image' => 'required'
    ];
    protected $validationMessages = [
        'image' => [
            'required' => 'Image Wajib dipilih.'
        ]
    ];
    protected $skipValidation     = false;
}