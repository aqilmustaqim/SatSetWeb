<?php

namespace App\Models;

use CodeIgniter\Model;

class UlasanModel extends Model{
    protected $table      = 'ulasan';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'email', 'deskripsiulasan'];
}
