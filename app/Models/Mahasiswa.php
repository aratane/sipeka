<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = 'mahasiswa';
    protected $primaryKey = 'NIM';

    protected $fillable = [
        'NIM',
        'Nm_Mahasiswa',
        'Prodi',
        'Fakultas',
        'JK',
        'Agama',
        'Alamat',
        'IPK',
        'Stambuk',
        'KDKrs',
        'status_lulus',
        'id'
    ];
}
