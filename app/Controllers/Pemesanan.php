<?php

namespace App\Controllers;

class Pemesanan extends BaseController
{
    public function booking()
    {
        $data = ['title' => 'EuforiaHome - Register Form'];
        return view('pemesanan/booking');
    }
}
