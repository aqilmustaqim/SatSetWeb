<?php

namespace App\Models;

use CodeIgniter\Model;

class UserRole extends Model
{
    protected $table      = 'user_role';
    protected $useTimestamps = true;
    protected $allowedFields = ['role'];
}
