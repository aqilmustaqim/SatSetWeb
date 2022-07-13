<?php

namespace App\Models;

use CodeIgniter\Model;

class DaftarPaketModel extends Model
{
    protected $table            = 'daftarpaket';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['namapaket', 'hargapaket', 'deskripsi1', 'deskripsi2', 'deskripsi3', 'deskripsi4', 'deskripsi5', 'deskripsi6', 'deskripsi7', 'deskripsi8', 'deskripsi9'];
}
