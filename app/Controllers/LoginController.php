<?php

namespace App\Controllers;

use App\Models\AdminModel;
use App\Models\PelangganModel;


class LoginController extends BaseController
{

    public function index()
    {
        return view('login/login');
    }


    public function check()
    {
        $data = ['title' => 'EuforiaHome'];

        $username = $this->request->getPost('usr');
        $password = $this->request->getPost('pwd');

        $adminModel = new AdminModel();
        $pelangganModel = new PelangganModel();

        // Check if login credentials belong to an admin
        $admin = $adminModel->where('admin_id', $username)
            ->where('password', $password)
            ->first();

        // Check if login credentials belong to a pelanggan
        $pelanggan = $pelangganModel->where('pelanggan_id', $username)
            ->where('password', $password)
            ->first();

        if ($admin) {
            // Login as admin
            $session = session();
            $session->set('admin_id', $admin['admin_id']);
            $session->set('nama', $admin['nama']);
            $session->set('is_admin', true);

            return view('layout/header', $data) . view('layout/navbarAdmin') . view('home/home') . view('layout/footer');
        } elseif ($pelanggan) {
            // Login as pelanggan
            $session = session();
            $session->set('pelanggan_id', $pelanggan['pelanggan_id']);
            $session->set('nama', $pelanggan['nama']);
            $session->set('is_admin', false);

            return view('layout/header', $data) . view('layout/navbarUser') . view('home/home') . view('layout/footer');
        } else {
            // Invalid credentials, redirect back to login page
            return redirect()->back()->with('error', 'Invalid username or password');
        }
    }




    public function logout()
    {
        $session = session();
        $session->remove('pengguna');
        return view('login/login');
    }
}
