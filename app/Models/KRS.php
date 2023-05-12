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
        'sks',
        'ipk',
        'stambuk',
        'NIM',
        'id_penasehat'
    ];
}
