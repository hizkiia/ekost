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
        $model = model(SewaModel::class);
        if ($session->has('admin')) {
            $data = ['title' => 'Konfirmasi Pembayaran', 'list' => $model->getSewaCost()];
            return view('layout/header', $data)
                . view('layout/navbaradmin')
                . view('pembayaran/konfirmasiPembayaran')
                . view('layout/footer');
        } else {
            return redirect()->to('/');
        }
    }

    public function markAsSelesai()
    {
        $session = session();
        $db = \Config\Database::connect();
        $model = model(SewaModel::class);
        $model = $db->table('sewa');

        if ($session->has('admin')) {
            $sewaId = $this->request->getPost('sewa_id');

            // Update kolom 'biaya' menjadi 0
            $data = [

                'biaya' => 0,
            ];

            $model->where('sewa_id', $sewaId)->update($data);

            return redirect()->to('/paymentconfirm'); // Ganti sesuai kebutuhan
        } else {
            return redirect()->to('/');
        }
    }
}
