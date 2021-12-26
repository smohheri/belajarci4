<?php

namespace App\Controllers;

use App\Models\Siswa;

class Home extends BaseController
{
    protected $siswaModel;
    public function __construct()
    {
        $this->siswaModel = new Siswa();
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
}
