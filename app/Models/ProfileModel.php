<?php namespace App\Models;

use App\Models\BaseModel;

class ProfileModel extends BaseModel
{
    protected $table      = 'sales_profiles';
    protected $primaryKey = 'id';

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['name', 'job','motto', 'address', 'phone', 'logo', 'photo', 'meta_socmed'];
    protected $useTimestamps = true;

    protected $validationRules    = [
        'name'  => 'required',
        'photo' => 'is_image[photo]|max_size[photo, 1024]',
        'logo'  => 'is_image[logo]|max_size[logo, 1024]',
    ];
    protected $validationMessages = [
        'name'  => [
            'required' => 'Nama Wajib di isi.'
        ],
        'photo' => [
            'is_image' => 'File Harus berupa Image (.png/.jpg/.jpeg)',
            'max_size' => 'Ukuran Image tidak boleh lebih dari 1MB'
        ],
        'logo' => [
            'is_image' => 'File Harus berupa Image (.png/.jpg/.jpeg)',
            'max_size' => 'Ukuran Image tidak boleh lebih dari 1MB'
        ]
    ];
    protected $skipValidation     = false;

    public function getInstagramAttribute()
    {
        return 'ert';
    }
}