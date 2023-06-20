<?php

namespace App\Models;

use CodeIgniter\Model;

class KamarModel extends Model
{
    protected $table = 'kamar';
    // protected $primaryKey = 'NIM';
    protected $allowedFields = ['kamar_id', 'nama', 'deskripsi', 'fasilitas', 'gambar', 'harga'];


    public function getKamar($slug = false)
    {
        if ($slug === false) {
            return $this->findAll();
        }

        return $this->where(['kamar_id' => $slug])->first();
    }

    public function simpan($record)
    {
        $this->save([
            'kamar_id' => $record['idKamar'],
            'nama' => $record['namaKamar'],
            'deskripsi' => $record['deskripsi'],
            'fasilitas' => $record['fasilitas'],
            'gambar' => $record['nama_file'],
            'harga' => $record['harga'],
        ]);
    }

    public function ambil($id)
    {
        return $this->where(['kamar_id' => $id])->first();
    }
}
