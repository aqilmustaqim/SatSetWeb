<?php

namespace App\Models;

use CodeIgniter\Model;

class PortfolioModel extends Model
{
    protected $table      = 'portfolio';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'deskripsi', 'jenis', 'gambar', 'link'];
}
