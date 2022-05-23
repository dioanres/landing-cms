<?php namespace App\Models;

use App\Models\BaseModel;

class NotificationModel extends BaseModel
{
    protected $table      = 'sales_notifications';
    protected $primaryKey = 'id';

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['image', 'desc'];
    protected $useTimestamps = true;

    protected $validationRules    = [
        'image' => 'required|is_image[image]|max_size[image, 2048]',
    ];
    protected $validationMessages = [
        'image' => [
            'required' => 'Image Wajib di pilih.',
            'is_image' => 'File Harus berupa Image (.png/.jpg/.jpeg)',
            'max_size' => 'Ukuran Image tidak boleh lebih dari 2MB'
        ],
    ];
    protected $skipValidation     = false;
}