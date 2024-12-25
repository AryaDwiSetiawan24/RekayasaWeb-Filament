<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Makul extends Model
{
    protected $fillable = [
        'kode_makul',
        'nama_makul',
        'fakultas'
    ];
}
