<?php namespace App\Models;

use App\Models\BaseModel;

class SubProductModel extends BaseModel
{
    protected $table      = 'sales_sub_products';
    protected $primaryKey = 'id';

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['product_id', 'sub_product_name','desc', 'sub_product_price'];
    protected $useTimestamps = true;

    protected $validationRules    = [
        'sub_product_name'  => 'required',
        'sub_product_price' => 'required|numeric'
    ];
    protected $validationMessages = [
        'sub_product_name'  => [
            'required' => 'Nama Wajib di isi.'
        ],
        'sub_product_price' => [
            'required'  => 'Harga Sub Produk Wajib di isi',
            'numeric'   => 'Input harus berupa Angka.'
        ]
    ];
    protected $skipValidation     = false;
}