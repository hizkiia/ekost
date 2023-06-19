<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
    protected $table = 'pelanggan';
    protected $allowedFields = ['pelanggan_id', 'nama', 'alamat', 'no_hp', 'password'];


    public function ambil($usr)
    {
        return $this->where(['pelanggan_id' => $usr])->first();
    }
}
