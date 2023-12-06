<?php

namespace App\Controllers;

use App\Models\SewaModel;

class Transaksi extends BaseController
{
    public function pembayaran()
    {

        $session = session();
        $model = model(SewaModel::class);


        if ($session->has('user')) {
            $latestSewaId = $model->getLatestSewaId();

            $data = [
                'list' => $model->getSewa($latestSewaId),
                'title' => 'EuforiaHome|Pembayaran'
            ];
            return view('layout/header', $data)
                . view('layout/navbarUser')
                . view('pembayaran/pembayaran')
                . view('layout/footer');
        } else {
            return redirect()->to('/');
        }
    }

    public function konfirmasiPembayaran()
    {
        $session = session();;
        if ($session->has('admin')) {
            $data = ['title' => 'Konfirmasi Pembayaran'];
            return view('layout/header', $data)
                . view('layout/navbaradmin')
                . view('pembayaran/konfirmasiPembayaran')
                . view('layout/footer');
        } else {
            return redirect()->to('/');
        }
    }
}
