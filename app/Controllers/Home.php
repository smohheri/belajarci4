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
    }

    public function loginAdmin()
    {
        $session = session();
        $user = $this->request->getVar('username');
        $pass = $this->request->getVar('password');
        $login  = $this->adminModel->where('username', $user)->first();
        if ($login) {
            $password = password_hash($pass, PASSWORD_BCRYPT);
            $verify_pass = password_verify($password, $login['password']);
            if ($verify_pass) {
                $ses_data = [
                    'user_id'   => $login['id'],
                    'user_name' => $login['username'],
                    'logged_in' => true,
                    'level'     => 'admin'
                ];
                $session->set($ses_data);
                return redirect()->to('/Dashboard');
            }
        }
        return redirect()->to('/Home/admin');
    }
}
