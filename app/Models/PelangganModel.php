<?php

namespace App\Models;

use CodeIgniter\Model;

class PelangganModel extends Model
{
    protected $table = 'pelanggan';
    protected $allowedFields = ['pelanggan_id', 'nama', 'alamat', 'no_hp', 'password', 'email'];

    public function getPelanggan($slug = false)
    {
        if ($slug === false) {
            return $this->findAll();
        }

        return $this->where(['pelanggan_id' => $slug])->first();
    }

    public function simpan($record)
    {
        $this->save([
            'pelanggan_id' => $record['username'],
            'nama' => $record['name'],
            'alamat' => $record['address'],
            'no_hp' => $record['phone'],
            'password' => $record['password'],
            'email' => $record['email']
        ]);
    }
}
