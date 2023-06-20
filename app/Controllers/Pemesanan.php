<?php

namespace App\Controllers;

class Pemesanan extends BaseController
{
    public function booking()
    {
        $data = ['title' => 'EuforiaHome - Register Form'];
        return view('layout/header', $data) . view('layout/navbarUser')
            . view('pemesanan/booking') . view('layout/footer');
    }
}
