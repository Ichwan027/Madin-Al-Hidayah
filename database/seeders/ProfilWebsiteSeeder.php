<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProfilWebsite;

class ProfilWebsiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProfilWebsite::create([

            'nama_website'     => 'Madrasah Diniyah Al-Hidayah',

            'nama_madrasah'    => 'Madrasah Diniyah Al-Hidayah',

            'slogan'           => 'Membentuk Generasi Qurani',

            'deskripsi'        => 'Website resmi Madrasah Diniyah Al-Hidayah.',

            'alamat'           => 'Jl. Simomulyo Baru 4E No.16A, Sukomanunggal, Surabaya',

            'telepon'          => '083166421800',

            'whatsapp'         => '083166421800',

            'email'            => 'admin@madin.com',

            'facebook'         => '',

            'instagram'        => '',

            'youtube'          => '',

            'maps'             => '',

            'jam_operasional'  => 'Senin - Sabtu 15.30 - 19.30',

            'footer'           => '© 2025 Madrasah Diniyah Al-Hidayah',

            'logo'             => null,

            'favicon'          => null

        ]);
    }
}