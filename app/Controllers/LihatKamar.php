<?php

namespace App\Controllers;

class LihatKamar extends BaseController
{
    public function showAll()
    {
        $model = model(KamarModel::class);
        $data = [
            'list' => $model->getKamar(),
            'title' => 'EuforiaHome - Rooms List View'
        ];

        return view('layout/header', $data) . view('layout/navbarGuest')
            . view('home/rooms') .
            view('layout/footer');
    }
}
