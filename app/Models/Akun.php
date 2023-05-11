<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Akun extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'akun';
    protected $primaryKey = 'id_akun';
    // protected $guard = 'admin';

    protected $fillable = ['username', 'password', 'id_level'];
    protected $hidden = [
        'password'
    ];
}
