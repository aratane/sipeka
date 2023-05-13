<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KRS extends Model
{
    use HasFactory;
    protected $table = 'krs';
    protected $primaryKey = 'id_krs';

    protected $fillable = [
        'id_krs',
        'IPK',
        'SKS',
        'Stambuk',
        'Prodi',
        'Fakultas',
        'KD_Penasehat',
        'Nm_Penasehat',
        'IPKSebelumnya',
        'RencanaSKS',
        'Nm_Mahasiswa',
        'JK',
        'Agama',
        'Alamat',
        'NIM'
    ];
}
