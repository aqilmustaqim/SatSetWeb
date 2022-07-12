<?php

namespace App\Models;

use CodeIgniter\Model;

class DaftarPaketModel extends Model
{
    protected $table            = 'daftarpakets';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['namapaket','deskripsi1','hargapaket'];
}
