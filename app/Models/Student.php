<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama', 'nis', 'email', 'tempat_lahir', 'tanggal_lahir', 'jenis_kelamin', 'angkatan'
    ];
}
