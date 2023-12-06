<?php

namespace App\Models;

use CodeIgniter\Model;

class SewaModel extends Model
{
    protected $table = 'sewa';
    protected $allowedFields = ['sewa_id', 'masa_berlaku', 'tanggal_awal', 'kamar_id', 'pelanggan_id', 'admin_id', 'biaya'];

    public function getSewa($slug = false)
    {
        if ($slug === false) {
            return $this->findAll();
        }

        return $this->where(['sewa_id' => $slug])->first();
    }

    public function simpan($record)
    {
        $adminId = "admin";
        $this->save([
            'masa_berlaku' => $record['booking-time'],
            'tanggal_awal' => $record['booking-date'],
            'kamar_id' => $record['kamar_id'], // Set the selected room ID
            'pelanggan_id' => $record['pelanggan_id'],
            'admin_id' => $adminId,
            'biaya' => $record['biaya'],
        ]);
    }
}
