<?php

namespace App\Models;

use CodeIgniter\Model;

class FormulirModel extends Model
{
    protected $table      = 'email';
    protected $useTimestamps = true;
    protected $allowedFields = ['email', 'nama', 'nomor_wa', 'jenis_paket'];
}
