<?php

namespace App\Http\Controllers;
use App\Models\Artikel;
use App\Models\Pengumuman;
use App\Models\Galeri;
use App\Models\GaleriFoto;
use App\Models\Komentar;
use App\Models\KegiatanAlumni;
use App\Models\User;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
{

    $jumlahArtikel = Artikel::count();

    $jumlahPengumuman = Pengumuman::count();

    $jumlahGaleri = Galeri::count();

    $jumlahFoto = GaleriFoto::count();

    $jumlahKomentar = Komentar::count();

    $jumlahAlumni = KegiatanAlumni::count();

    $jumlahUser = User::count();

    $artikelTerbaru = Artikel::latest()
        ->take(5)
        ->get();

    $pengumumanTerbaru = Pengumuman::latest()
        ->take(5)
        ->get();

    return view('dashboard.index', compact(

        'jumlahArtikel',

        'jumlahPengumuman',

        'jumlahGaleri',

        'jumlahFoto',

        'jumlahKomentar',

        'jumlahAlumni',

        'jumlahUser',

        'artikelTerbaru',

        'pengumumanTerbaru'

    ));
}
}
