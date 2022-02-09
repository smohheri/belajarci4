<?php

namespace App\Controllers;

use App\Models\Siswa;
use App\Models\Admin;

class Home extends BaseController
{
    protected $siswaModel;
    protected $adminModel;
    public function __construct()
    {
        $this->siswaModel = new Siswa();
        $this->adminModel = new Admin();
    }
    public function index()
    {
        $data = [
            'page' => 'Beranda',
            'stat' => 'home',
            'daftar'    => $this->siswaModel->findAll()
        ];

        return view('home', $data);
    }
    public function prestasi()
    {
        $data = [
            'page' => 'Prestasi',
            'stat' => 'prestasi'
        ];
        return view('prestasi', $data);
    }
    public function pelanggaran()
    {
        $data = [
            'page' => 'Pelanggaran',
            'stat' => 'pelanggaran'
        ];
        return view('pelanggaran', $data);
    }
    public function login() {
        $data = [
            'page' => 'Login',
            'stat' => 'login'
        ];
        return view('login', $data);
    }

    public function admin()
    {
        $data = [
            'page' => 'Admin',
            'stat' => 'admin'
        ];
        return view('admin', $data);
    }

    public function loginSiswa()
    {
        $data = [
            'page' => 'Error',
            'stat' => 'error'
        ];
        return redirect()->to('/Home/login');
    }

    public function loginGuru()
    {
        $login = $this->request->getPost('login');
        if ($login) {
            $user = $this->request->getPost('niyGuru');
            $password = $this->request->getPost('passwordGuru');

            if ($user == '' or $password == '') {
                $err = "Silahkan masukkan NIY atau Password dengan benar";
            }
            if ($err) {
                session()->setFlashdata('niyGuru', $user);
                session()->setFlashdata('error', $err);
                return redirect()->to('/Home/login');
            }
        }
        return redirect()->to('/Home/login');
    }
}
