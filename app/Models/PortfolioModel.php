<?php

namespace App\Models;

use CodeIgniter\Model;

class PortfolioModel extends Model
{
    protected $table      = 'portfolio';
    protected $allowedFields = ['nama', 'deskripsi', 'jenis', 'gambar', 'link'];
}
