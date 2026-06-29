<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KegiatanAlumni extends Model
{
    protected $fillable = [

        'judul',

        'slug',

        'tanggal',

        'cover',

        'isi',

        'status'

    ];
}