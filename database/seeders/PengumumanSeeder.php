<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pengumuman;
use Illuminate\Support\Str;

class PengumumanSeeder extends Seeder
{
    public function run(): void
    {
        $judul=[

            'Libur Hari Raya Idul Adha',

            'Pembagian Raport Semester Genap',

            'Pendaftaran Santri Baru',

            'Jadwal Ujian Akhir',

            'Kegiatan Ramadhan 1447 H',

            'Kerja Bakti Madrasah',

            'Perubahan Jadwal Belajar',

        ];

        foreach($judul as $item){

            Pengumuman::create([

                'judul'=>$item,

                'slug'=>Str::slug($item),

                'isi'=>fake()->paragraphs(5,true),

                'tanggal'=>now(),

                'status'=>'Publish',

            ]);

        }

    }
}