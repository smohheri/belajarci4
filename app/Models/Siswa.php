<?php

namespace App\Models;

use CodeIgniter\Model;

class Siswa extends Model
{
    protected $table      = 'siswa';
    protected $primaryKey = 'username';
    protected $useTimestamps = true;
    protected $allowedFields = ['username', 'password'];
}
