<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $fillable = [
    'judul',
    'slug',
    'kategori',
    'isi',
    'thumbnail',
    'penulis',
    'status'
];

public function komentars()
{
    return $this->hasMany(Komentar::class);
}
}



