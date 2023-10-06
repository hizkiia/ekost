<?php

namespace App\Controllers;

use App\Models\PelangganModel;



class RegisterController extends BaseController
{

    public function index()
    {
        $data = ['title' => 'EuforiaHome|Register'];
        return view('layout/header', $data)
            . view('layout/navbarGuest') . view('register/register') . view('layout/footer');
    }

    public function input()
    {
        $model = model(PelangganModel::class);
        $data = [
            'list' => $model->getPelanggan(),
            'title' => 'Register'
        ];

        // Memeriksa apakah melakukan submit data atau tidak.
        // if (!$this->request->is('post')) {
        //     return view('layout/header', $data) . view('layout/navbarGuest')
        //         . view('register/register')
        //         . view("layout/footer");
        // }

        // Mengambil data yang disubmit dari form
        $post = $this->request->getPost([
            'email',
            'username',
            'name',
            'phone',
            'address',
            'password'
        ]);

        // Mengakses Model untuk menyimpan data
        $model = model(PelangganModel::class);
        $model->simpan($post);
        return redirect()->to('/login');
    }


    public function logout()
    {
        $session = session();
        if ($session->get('is_admin')) {
            $session->remove('admin');
            return view('login/login');
        } else {
            $session->remove('user');
            return view('login/login');
        }
    }
}
