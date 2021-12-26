<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'page' => 'Beranda',
            'stat' => 'home'
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
