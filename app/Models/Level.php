<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    use HasFactory;

    protected $table = 'level';
    protected $primaryKey = 'id_level';

    protected $fillable = ['id_level', 'role'];

    // public function user()
    // {
    //     return $this->hasMany(Admin::class);
    // }
}
