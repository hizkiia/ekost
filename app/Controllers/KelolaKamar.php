<?php

namespace App\Controllers;

class KelolaKamar extends BaseController
{
    public function input()
    {
        $data = ['title' => 'Tambah Kamar'];

        // $session = session();
        // if ($session->has('pengguna')) {
        helper('form');
        // Memeriksa apakah melakukan submit data atau tidak.
        if (!$this->request->is('post')) {
            return view('layout/header', $data)
                . view('kelola/input')
                . view("layout/footer");
        }

        $nama_file = $_FILES['gambar']['name'];
        $source = $_FILES['gambar']['tmp_name'];
        $folder = '/images/rooms/';

        move_uploaded_file($source, '.' . $folder . $nama_file);

        // Mengambil data yang disubmit dari form
        $post = $this->request->getPost([
            'idKamar',
            'namaKamar',
            'deskripsi',
            'fasilitas',
            'harga'
        ]);
        $post['nama_file'] = $nama_file;

        // Mengakses Model untuk menyimpan data
        $model = model(KamarModel::class);
        $model->simpan($post);
        return view('layout/header', $data)
            . view('home/rooms')
            . view("layout/footer");
        // } else {
        //     return view('login/loginpage');
        // }
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
