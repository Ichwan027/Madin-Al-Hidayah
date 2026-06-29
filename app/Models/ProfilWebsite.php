<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProfilWebsite extends Model
{
    protected $table = 'profil_websites';

    protected $fillable = [

        'nama_website',

        'nama_madrasah',

        'slogan',

        'deskripsi',

        'logo',

        'favicon',

        'alamat',

        'telepon',

        'whatsapp',

        'email',

        'facebook',

        'instagram',

        'youtube',

        'maps',

        'jam_operasional',

        'footer'

    ];
}