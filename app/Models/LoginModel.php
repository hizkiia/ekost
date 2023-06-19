<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
    protected $table = 'login';
    protected $allowedFields = ['USERNAME', 'PASSWORD'];


    public function ambil($usr)
    {
        return $this->where(['username' => $usr])->first();
    }
}
