<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = ['title' => 'Euforia Home'];
        return view('home/home', $data);
    }
}
