<?php namespace App\Models;

use App\Models\BaseModel;

class MetaMenuModel extends BaseModel
{
    protected $table      = 'sales_meta_menus';
    protected $primaryKey = 'id';

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['title', 'meta'];
    protected $useTimestamps = true;

    protected $validationRules    = [
        'title' => 'required',
        'meta' => 'required'
    ];
    protected $validationMessages = [
        'title' => [
            'required' => 'Wajib di isi.',
        ],
        'meta' => [
            'required' => 'Wajib di isi.',
        ],
    ];
    protected $skipValidation     = false;
}