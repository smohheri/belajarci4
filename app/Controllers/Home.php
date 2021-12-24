<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'isi' => 'home',
            'page' => 'Beranda',
            'stat' => 'home'
        ];
        return view('templates/wrapper', $data);
    }
}
