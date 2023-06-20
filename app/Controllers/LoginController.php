<?php

namespace App\Controllers;



class LoginController extends BaseController
{

    public function index()
    {
        return view('login/login');
    }


    public function check()
    {
        $data = ['title' => 'Euforia Home'];

        $model = model(LoginModel::class);
        $post = $this->request->getPost(['usr', 'pwd']);
        $user = $model->where('pelanggan_id', $post['usr'])->first();
        $pass = $model->where('password', $post['pwd'])->first();
        if ($user && $pass) {
            $session = session();
            $session->set('pengguna', $post['usr']);
            return view('layout/header', $data)
                . view('home/home')
                . view("layout/footer");
        } else {
            return view('login/fail');
        }
    }
    public function home()
    {
        $key = $this->request->getPost(['usr', 'pwd']);
        $model = model(LoginModel::class);
        $session = session();
        if ($session->has('pengguna')) {
            $item = $session->get('pengguna');
            if ($item == $model->ambil($key['usr'])) {
                return view('home/home');
            } else {
                return view('login/login');
            }
        } else {
            return view('login/login');
        }
    }
    public function login()
    {

        return view('login/login');
    }
    public function logout()
    {
        $session = session();
        $session->remove('pengguna');
        return view('login/login');
    }
}
