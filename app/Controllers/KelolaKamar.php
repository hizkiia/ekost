<?php

namespace App\Controllers;

class KelolaKamar extends BaseController
{
    public function input()
    {
        $data = ['title' => 'Tambah Kamar'];
        return view('layout/header', $data)
            . view('kelola/input') .
            view('layout/footer');
    }
    public function update()
    {
        $data = ['title' => 'Ubah Kamar'];

        return view('layout/header', $data)
            . view('kelola/update') .
            view('layout/footer');
    }
    public function delete()
    {
        $data = ['title' => 'Hapus Kamar'];

        return view('layout/header', $data)
            . view('kelola/delete') .
            view('layout/footer');
    }
}
