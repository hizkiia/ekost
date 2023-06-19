<?php

namespace App\Controllers;

class LihatKamar extends BaseController
{
    public function showAll()
    {
        $model = model(KamarModel::class);
        $data = [
            'list' => $model->getKamar(),
            'title' => 'EuforiaHome - Rooms List View'
        ];

        return view('layout/header', $data) . view('layout/navbarGuest')
            . view('home/rooms') .
            view('layout/footer');
    }
    public function search()
    {
        // $session = session();
        // if ($session->has('pengguna')) {
        if (!$this->request->is('post')) {
            return view('home/rooms');
        }
        $id = $this->request->getPost(['key']);

        $model = model(KamarModel::class);
        $kamar = $model->ambil($id['key']);

        $data = ['hasil' => $kamar, 'title' => 'Cari Kamar'];
        return view('layout/header', $data) . view('layout/navbarGuest')
            . view('home/search')
            . view("layout/footer");
        // } else {
        //     return view('login/loginpage');
        // }
    }
}
