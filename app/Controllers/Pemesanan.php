<?php

namespace App\Controllers;

use App\Models\KamarModel;

class Pemesanan extends BaseController
{

    public function booking($slug = null)
    {
        $data = ['title' => 'EuforiaHome - Booking Form'];
        $model = model(KamarModel::class);

        $data['kamar'] = $model->getKamar($slug);

        return view('layout/header', $data) . view('layout/navbarUser')
            . view('pemesanan/booking') . view('layout/footer');
    }
}
