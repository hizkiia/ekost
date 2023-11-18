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
        // Get the selected room information
        $selectedRoom = $this->db->table('kamar')->where('kamar_id', $record['selected_room_id'])->get()->getRow();

        // Get the selected customer information
        $selectedCustomer = $this->db->table('pelanggan')->where('pelanggan_id', $record['pelanggan_id'])->get()->getRow();

        // Get the admin information (you may need to modify this based on how your admin data is stored)
        $adminId = "admin"; // Assuming admin ID is 1, replace it with the actual admin ID retrieval logic

        // Calculate the biaya based on harga from the selected room and masa_berlaku
        $biaya = $selectedRoom->harga * $record['masa_berlaku'];

        $this->save([
            'sewa_id' => $record['sewa_id'],
            'masa_berlaku' => $record['masa_berlaku'],
            'tanggal_awal' => $record['tanggal_awal'],
            'kamar_id' => $record['selected_room_id'], // Set the selected room ID
            'pelanggan_id' => $record['pelanggan_id'],
            'admin_id' => $adminId,
            'biaya' => $biaya,
        ]);
    }
}
