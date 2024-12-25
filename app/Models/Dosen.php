<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $fillable = [
        'nip',
        'nama',
        'jenis_kelamin',
        'alamat',
        'tanggal_lahir',
        'fakultas'
    ];
}
