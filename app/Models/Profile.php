<?php

namespace App\Models;

use CodeIgniter\Model;

class Profile extends Model
{
    protected $table      = 'profiles';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $allowedFields = ['name', 'commission_rate', 'tax_rate'];
}