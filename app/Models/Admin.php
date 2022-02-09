<?php

namespace App\Models;

use CodeIgniter\Model;

class Admin extends Model
{
    protected $table      = 'admin';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id';
    protected $username = 'username';
    protected $password = 'password';
    protected $useTimestamps = true;
    protected $allowedFields = ['username', 'password'];
}
