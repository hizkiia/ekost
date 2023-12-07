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

    public function getSewaCost()
    {
        return $this->where('biaya >', 0)->findAll();
    }

    public function getLatestSewaId()
    {
        $this->orderBy('sewa_id', 'DESC');
        $result = $this->first();

        return $result ? $result['sewa_id'] : null;
    }


    public function markAsSelesai($sewaId)
    {
        $data = ['biaya' => 0];
        $this->where('sewa_id', $sewaId)->update($data);
    }

    public function simpan($record)
    {
        $adminId = "admin";
        $this->save([
            'masa_berlaku' => $record['booking-time'],
            'tanggal_awal' => $record['booking-date'],
            'kamar_id' => $record['kamar_id'],
            'pelanggan_id' => $record['pelanggan_id'],
            'admin_id' => $adminId,
            'biaya' => $record['biaya'],
        ]);
    }
}
