<?php

namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    protected $table = 'mahasiswa';
    protected $useAutoIncrement = true;
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'nim',
        'nama',
        'tt',
        'tm',
        'uts',
        'uas',
        'na',
    ];

    public $timestamps = false;
}
