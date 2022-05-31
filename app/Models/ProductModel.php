<?php namespace App\Models;

use App\Models\BaseModel;

class ProductModel extends BaseModel
{
    protected $table      = 'sales_products';
    protected $primaryKey = 'id';

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['name', 'desc','image', 'price', 'meta','title', 'product_group_id'];
    protected $useTimestamps = true;

    protected $validationRules    = [
        'product_group_id' => 'required',
        'name'  => 'required',
        'image' => 'required|is_image[image]|max_size[image, 2048]',
    ];
    protected $validationMessages = [
        'product_group_id'  => [
            'required' => 'Produk Group Wajib di isi.'
        ],
        'name'  => [
            'required' => 'Nama Wajib di isi.'
        ],
        'desc'  => [
            'required' => 'Deskripsi Wajib di isi.'
        ],
        'image' => [
            'required' => 'Image Wajib di pilih.',
            'is_image' => 'File Harus berupa Image (.png/.jpg/.jpeg)',
            'max_size' => 'Ukuran Image tidak boleh lebih dari 2MB'
        ],
        'price' => [
            'required'  => 'Harga Wajib di isi',
            'numeric'   => 'Harga harus berupa Angka.'
        ]
    ];
    protected $skipValidation     = false;
}