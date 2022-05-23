<?php namespace App\Models;

use App\Models\BaseModel;

class TestimonialModel extends BaseModel
{
    protected $table      = 'sales_testimonials';
    protected $primaryKey = 'id';

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['name', 'image', 'notes'];
    protected $useTimestamps = true;

    protected $validationRules    = [
        'name'  => 'required',
        'image' => 'is_image[image]|max_size[image, 2048]',
        'notes' => 'required',
    ];
    protected $validationMessages = [
        'image' => [
            'required' => 'Image Wajib di pilih.',
            'is_image' => 'File Harus berupa Image (.png/.jpg/.jpeg)',
            'max_size' => 'Ukuran Image tidak boleh lebih dari 2MB'
        ],
        'name' => [
            'required' => 'Nama Wajib di isi.'
        ],
        'notes' => [
            'required' => 'Testimoni Wajib di isi.'
        ]
    ];
    protected $skipValidation     = false;
}