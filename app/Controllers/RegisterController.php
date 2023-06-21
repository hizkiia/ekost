<?php

namespace App\Controllers;



class RegisterController extends BaseController
{

    public function index()
    {
        return view('register/register');
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
