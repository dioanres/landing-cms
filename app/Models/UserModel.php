<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'cms_users';
    protected $primaryKey = 'id';

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['username', 'email', 'password','last_login'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [
        'username'  => 'required',
        'email' => 'required|valid_email|is_unique[cms_users.email]',
        'password'     => 'required',
        'repeat_password' => 'required|matches[password]',
    ];

    protected $validationMessages = [
        'username' => [
            'required' => 'Nama wajib di isi.',
            'valid_email' => 'Format Email tidak sesuai.',
            'is_unique' => 'Email sudah terdaftar.'
        ]
    ];
    protected $skipValidation     = true;

    public function findByEmail($email) {
        $user = $this->where('email',$email)
                    ->first();
        return $user;
    }
}