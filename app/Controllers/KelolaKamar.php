<?php

namespace App\Controllers;

use App\Models\KamarModel;

class KelolaKamar extends BaseController
{
    public function input()
    {
        $model = model(KamarModel::class);
        $data = [
            'list' => $model->getKamar(),
            'title' => 'Tambah Kamar'
        ];

        // $session = session();
        // if ($session->has('pengguna')) {
        helper('form');
        // Memeriksa apakah melakukan submit data atau tidak.
        if (!$this->request->is('post')) {
            return view('layout/header', $data) . view('layout/navbarAdmin')
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
        return view('layout/header', $data) . view('layout/navbarAdmin')
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
        $model = model(KamarModel::class);
        $data = [
            'list' => $model->getKamar(),
            'title' => 'Hapus Kamar'
        ];
        // $session = session();
        // if ($session->has('pengguna')) {
        $db = \Config\Database::connect();
        $builder = $db->table('kamar');
        helper('form');
        if (!$this->request->is('post')) {
            return view('layout/header', $data)
                . view('layout/navbarAdmin')
                . view('kelola/delete')
                . view('layout/footer');
        }
        $post = $this->request->getPost([
            'idKamar'
        ]);
        $builder->where('kamar_id', $post);
        $builder->delete();
        return view('layout/header', $data)
            . view('layout/navbarAdmin')
            . view('home/rooms')
            . view("layout/footer");
        // } else {
        //     return view('login/loginpage');
        // }



    }
}
