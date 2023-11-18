<?php

namespace App\Controllers;

use App\Models\KamarModel;
use App\Models\SewaModel;

class Pemesanan extends BaseController
{

    public function booking($slug = null)
    {
        $session = session();
        $data = ['title' => 'EuforiaHome - Booking Form'];
        $model = model(KamarModel::class);

        $data['kamar'] = $model->getKamar($slug);
        if ($session->has('admin')) {
            return view('layout/header', $data) . view('layout/navbarAdmin')
                . view('pemesanan/booking') . view('layout/footer');
        }
        if ($session->has('user')) {
            return view('layout/header', $data) . view('layout/navbarUser')
                . view('pemesanan/booking') . view('layout/footer');
        } else {
            return view('login/login');
        }
    }

    public function inputSewa($slug = null)
    {

        $model = model(SewaModel::class);
        $data = ['title' => 'Pemesanan Selesai'];
        // Get pelanggan_id from session

        // Add pelanggan_id to the post data
        // Get form input
        $post = $this->request->getPost([
            'kamar_id',
            'booking-date',
            'booking-time',
            'harga'
        ]);
        $post['pelanggan_id'] = "hizkia";
        $biaya = $post['harga'] * $post['booking-time'];
        $post['biaya'] = $biaya;
        $model->simpan($post);

        return view('layout/header', $data) . view('layout/navbarUser')
            . view('pembayaran/pembayaran') . view('layout/footer');
    }
}
