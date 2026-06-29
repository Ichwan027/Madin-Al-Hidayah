<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Galeri;
use App\Models\Pengumuman;
use App\Models\KegiatanAlumni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LandingPageController extends Controller
{
    public function index()
    {
        $artikels = Artikel::where('status', 'Publish')
            ->latest()
            ->take(3)
            ->get();

        $pengumumen = Pengumuman::where('status', 'Publish')
            ->latest()
            ->take(5)
            ->get();

        $galeris = Galeri::with('fotos')
            ->latest()
            ->take(6)
            ->get();

        $kegiatans = KegiatanAlumni::where('status', 'Publish')
            ->latest()
            ->take(3)
            ->get();

        return view('landingpage.index', compact(
            'artikels',
            'pengumumen',
            'galeris',
            'kegiatans'
        ));
    }

    public function blog(Request $request)
    {
        $query = Artikel::where('status', 'Publish');

        // Pencarian
        if ($request->filled('search')) {

            $query->where(function ($q) use ($request) {

                $q->where('judul', 'like', '%' . $request->search . '%')
                    ->orWhere('isi', 'like', '%' . $request->search . '%');
            });
        }

        // Filter kategori
        if ($request->filled('kategori')) {

            $query->where('kategori', $request->kategori);
        }

        $artikels = $query->latest()->paginate(6);

        $artikels->withQueryString();

        $artikelTerbaru = Artikel::where('status', 'Publish')
            ->latest()
            ->take(5)
            ->get();

        $kategori = Artikel::select(
            'kategori',
            DB::raw('COUNT(*) as total')
        )
            ->where('status', 'Publish')
            ->groupBy('kategori')
            ->get();

        return view('landingpage.blog', compact(
            'artikels',
            'artikelTerbaru',
            'kategori'
        ));
    }

    public function blogDetail($slug)
    {
        $artikel = Artikel::where('slug', $slug)
            ->where('status', 'Publish')
            ->firstOrFail();

        $artikelTerbaru = Artikel::where('status', 'Publish')
            ->where('id', '!=', $artikel->id)
            ->latest()
            ->take(5)
            ->get();

        $artikelTerkait = Artikel::where('status', 'Publish')
            ->where('kategori', $artikel->kategori)
            ->where('id', '!=', $artikel->id)
            ->take(3)
            ->get();

        return view('landingpage.single-post', compact(
            'artikel',
            'artikelTerbaru',
            'artikelTerkait'
        ));
    }

    public function kegiatanAlumni(Request $request)
    {
        $query = KegiatanAlumni::query();

        if ($request->filled('search')) {

            $query->where('judul', 'like', '%' . $request->search . '%');
        }

        $kegiatans = $query
            ->latest()
            ->paginate(6)
            ->withQueryString();

        $kegiatanTerbaru = KegiatanAlumni::latest()
            ->take(5)
            ->get();

        return view(
            'landingpage.kegiatan-alumni',
            compact(
                'kegiatans',
                'kegiatanTerbaru'
            )
        );
    }

    public function kegiatanAlumniDetail($slug)
    {
        $kegiatan = KegiatanAlumni::where('slug', $slug)
            ->firstOrFail();

        $terbaru = KegiatanAlumni::latest()
            ->where('id', '!=', $kegiatan->id)
            ->take(5)
            ->get();

        return view(
            'landingpage.partials.kegiatanalumnidetail',
            compact(
                'kegiatan',
                'terbaru'
            )
        );
    }

    public function pengumuman(Request $request)
    {
        $query = Pengumuman::where('status', 'Publish');

        if ($request->filled('search')) {

            $query->where(function ($q) use ($request) {

                $q->where('judul', 'like', '%' . $request->search . '%')
                    ->orWhere('isi', 'like', '%' . $request->search . '%');
            });
        }

        $pengumumen = $query
            ->latest()
            ->paginate(6);

        $pengumumen->withQueryString();

        $pengumumanTerbaru = Pengumuman::where('status', 'Publish')
            ->latest()
            ->take(5)
            ->get();

        return view(
            'landingpage.pengumuman',
            compact(
                'pengumumen',
                'pengumumanTerbaru'
            )
        );
    }

    public function pengumumanDetail($slug)
    {
        $pengumuman = Pengumuman::where('slug', $slug)
            ->where('status', 'Publish')
            ->firstOrFail();

        $pengumumanTerbaru = Pengumuman::where('status', 'Publish')
            ->where('id', '!=', $pengumuman->id)
            ->latest()
            ->take(5)
            ->get();

        return view(
            'landingpage.pengumumanDetail',
            compact(
                'pengumuman',
                'pengumumanTerbaru'
            )
        );
    }

    public function galeri()
    {
        $galeris = Galeri::withCount('fotos')
            ->latest()
            ->paginate(9);

        $galeriTerbaru = Galeri::latest()
            ->take(5)
            ->get();

        return view(
            'landingpage.galeri',
            compact(
                'galeris',
                'galeriTerbaru'
            )
        );
    }

    public function galeriDetail($id)
    {
        $galeri = Galeri::with('fotos')
            ->findOrFail($id);

        $galeriTerbaru = Galeri::latest()
            ->where('id', '!=', $galeri->id)
            ->take(5)
            ->get();

        return view(
            'landingpage.galeri-detail',
            compact(
                'galeri',
                'galeriTerbaru'
            )
        );
    }



    public function tentang()
    {
        return view('landingpage.tentang');
    }

    public function kontak()
    {
        return view('landingpage.kontak');
    }
}
