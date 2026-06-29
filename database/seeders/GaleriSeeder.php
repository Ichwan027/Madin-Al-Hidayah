<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Galeri;
use App\Models\GaleriFoto;

class GaleriSeeder extends Seeder
{
    public function run(): void
    {
        $kategori=[

            'Kegiatan',

            'Prestasi',

            'Pembelajaran',

            'Ramadhan',

            'Wisuda'

        ];

        for($i=1;$i<=6;$i++){

            $galeri=Galeri::create([

                'kategori'=>$kategori[array_rand($kategori)],

                'judul'=>"Galeri Kegiatan {$i}",

                'deskripsi'=>fake()->paragraph(),

                'cover'=>"galeri{$i}.jpg",

            ]);

            for($j=1;$j<=3;$j++){

                GaleriFoto::create([

                    'galeri_id'=>$galeri->id,

                    'foto'=>"galeri".rand(1,9).".jpg",

                ]);

            }

        }

    }
}