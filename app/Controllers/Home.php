<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = ['title' => 'EuforiaHome'];
        return view('layout/header', $data) . view('layout/navbarGuest') . view('home/home') . view('layout/footer');
    }
}
