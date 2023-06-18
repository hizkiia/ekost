<?php

namespace App\Controllers;

class Transaksi extends BaseController
{
    public function pembayaran()
    {
        $data = ['title' => 'Pembayaran'];
        return view('layout/header', $data)
            . view('pembayaran/pembayaran') .
            view('layout/footer');
    }
}
