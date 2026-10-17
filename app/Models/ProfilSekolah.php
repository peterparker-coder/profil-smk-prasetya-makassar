<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProfilSekolah extends Model
{
    protected $fillable = [
        'sejarah',
        'visi',
        'misi',
        'nama_kepala_sekolah',
        'sambutan_kepala_sekolah',
    ];
}