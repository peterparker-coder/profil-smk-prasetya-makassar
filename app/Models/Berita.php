<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $fillable = [
        'judul',
        'slug',
        'gambar',
        'ringkasan',
        'isi',
        'tanggal_publikasi',
        'status',
    ];

    protected function casts(): array
    {
        return [
            'tanggal_publikasi' => 'date',
        ];
    }
}