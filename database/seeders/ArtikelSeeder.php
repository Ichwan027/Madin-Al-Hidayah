<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Artikel;
use Illuminate\Support\Str;

class ArtikelSeeder extends Seeder
{
    public function run(): void
    {
        $data = [

            [
                'judul'=>'Haflah Akhirussanah Tahun 2026',
                'kategori'=>'Kegiatan',
                'thumbnail'=>'1.jpg',
            ],

            [
                'judul'=>'Peringatan Tahun Baru Islam',
                'kategori'=>'Kegiatan',
                'thumbnail'=>'2.jpg',
            ],

            [
                'judul'=>'Santri Raih Juara MTQ',
                'kategori'=>'Prestasi',
                'thumbnail'=>'3.jpg',
            ],

            [
                'judul'=>'Program Tahfidz 30 Juz',
                'kategori'=>'Pembelajaran',
                'thumbnail'=>'4.jpg',
            ],

            [
                'judul'=>'Wisuda Santri Angkatan 2026',
                'kategori'=>'Kegiatan',
                'thumbnail'=>'5.jpg',
            ],

            [
                'judul'=>'Kegiatan Ramadhan Berkah',
                'kategori'=>'Ramadhan',
                'thumbnail'=>'6.jpg',
            ],

        ];

        foreach($data as $row){

            Artikel::create([

                'judul'=>$row['judul'],

                'slug'=>Str::slug($row['judul']),

                'kategori'=>$row['kategori'],

                'isi'=>fake()->paragraphs(8,true),

                'thumbnail'=>$row['thumbnail'],

                'penulis'=>'Administrator',

                'status'=>'Publish',

            ]);

        }

    }
}