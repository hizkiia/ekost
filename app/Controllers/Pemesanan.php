<?php

namespace App\Controllers;

use App\Models\KamarModel;
use App\Models\PelangganModel;
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
        $model2 = model(KamarModel::class);


        // Assuming you have 'pelanggan_id' stored in the session during login
        $pelanggan_id = session()->get('pelanggan_id');
        $kamarData = $model2->getKamar($slug);

        // Get form input
        $post = $this->request->getPost([
            'booking-date',
            'booking-time',
        ]);

        $post['pelanggan_id'] = $pelanggan_id;

        $post['kamar_id'] = $kamarData->kamar_id;
        $biaya = $kamarData->harga * $post['booking-time'];

        $post['biaya'] = $biaya;
        $model->simpan($post);

        return redirect()->to('/payment');
    }
}
