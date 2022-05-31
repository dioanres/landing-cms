<?php namespace App\Models;

use App\Models\BaseModel;

class MetaTagModel extends BaseModel
{
    protected $table      = 'sales_meta_tags';
    protected $primaryKey = 'id';

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['icon', 'title','description', 'author', 'keywords'];
    protected $useTimestamps = true;

    protected $validationRules    = [
        'icon' => 'is_image[icon]|max_size[icon, 100]',
    ];
    protected $validationMessages = [
        'name'  => [
            'required' => 'Nama Wajib di isi.'
        ],
        'icon' => [
            'is_image' => 'File Harus berupa Image (.png/.jpg/.jpeg)',
            'max_size' => 'Ukuran Image tidak boleh lebih dari 100kb'
        ]
    ];
    protected $skipValidation     = false;
}