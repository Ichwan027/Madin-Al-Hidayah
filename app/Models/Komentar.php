<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    protected $fillable = [

        'artikel_id',

        'nama',

        'email',

        'komentar',

        'status'

    ];

    public function artikel()
    {
        return $this->belongsTo(Artikel::class);
    }
}