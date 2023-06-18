<?php

namespace App\Controllers;

class LihatKamar extends BaseController
{
    public function showAll()
    {
        $data = ['title' => 'EuforiaHome - Rooms List View'];
        return view('layout/header', $data)
            . view('home/rooms') .
            view('layout/footer');
    }
}
