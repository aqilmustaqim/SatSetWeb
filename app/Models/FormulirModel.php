<?php

namespace App\Models;

use CodeIgniter\Model;

class FormulirModel extends Model
{
    protected $table      = 'formulir';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'email', 'nomor_wa', 'jenis_paket'];
}