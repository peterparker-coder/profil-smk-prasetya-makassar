<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TenagaPendidik extends Model
{
    protected $table = 'tenaga_pendidiks';

    protected $fillable = [
        'nama',
        'nip',
        'kategori',
        'jabatan',
        'mata_pelajaran',
        'foto',
    ];
}