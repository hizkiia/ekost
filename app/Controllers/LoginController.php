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
        if (!$this->request->is('post')) {
            return view('/login/login');
        }

        $model = model(LoginModel::class);
        $post = $this->request->getPost(['usr', 'pwd']);
        $loginuser = $model->ambil($post['usr']);

        if ($post['usr'] == $loginuser['pelanggan_id'] && $post['pwd'] == $loginuser['password']) {
            $session = session();
            $session->set('pengguna', $post['usr']);
            return view('login/home');
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
                return view('login/home');
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
