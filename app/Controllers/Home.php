<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = ['title' => 'Euforia Home'];
        return view('layout/header', $data)
            . view('home/home') .
            view('layout/footer');
    }
}
