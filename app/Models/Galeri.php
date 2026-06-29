<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    protected $fillable = [
        'kategori',
        'judul',
        'deskripsi',
        'cover'
    ];

    public function fotos()
    {
        return $this->hasMany(GaleriFoto::class);
    }
}