<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\KegiatanAlumni;
use Illuminate\Support\Str;

class KegiatanAlumniSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 5; $i++) {

            KegiatanAlumni::create([

                'judul'    => 'Kegiatan Alumni '.$i,

                'slug'     => Str::slug('Kegiatan Alumni '.$i),

                'tanggal'  => now(),

                'cover'    => null,

                'isi'      => 'Ini merupakan contoh kegiatan alumni ke-'.$i.'.',

                'status'   => 'Publish'

            ]);

        }
    }
}