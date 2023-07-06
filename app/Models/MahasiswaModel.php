<?php

namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    protected $table = 'mahasiswa';
    protected $primarykey = "nim";

    protected $allowedFields = [
        'nim',
        'nama',
        'prodi',
        'universitas',
        'no_hp'
    ];
}