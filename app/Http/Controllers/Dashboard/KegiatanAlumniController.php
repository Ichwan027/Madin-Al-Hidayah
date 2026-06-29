<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\KegiatanAlumni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class KegiatanAlumniController extends Controller
{
    public function index(Request $request)
    {
        $query = KegiatanAlumni::query();

        if ($request->filled('search')) {

            $query->where('judul', 'like', '%' . $request->search . '%');
        }

        $kegiatan = $query
            ->latest()
            ->paginate(10)
            ->withQueryString();

        return view(
            'dashboard.kegiatan-alumni.index',
            compact('kegiatan')
        );
    }

    public function create()
    {
        return view('dashboard.kegiatan-alumni.create');
    }

    public function show(KegiatanAlumni $kegiatan_alumni)
    {
        return view(
            'dashboard.kegiatan-alumni.show',
            compact('kegiatan_alumni')
        );
    }

    public function store(Request $request)
    {
        $request->validate([

            'judul' => 'required|max:255',

            'tanggal' => 'required|date',

            'cover' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',

            'isi' => 'required',

            'status' => 'required'

        ]);

        $cover = null;

        if ($request->hasFile('cover')) {

            $file = $request->file('cover');

            $cover = time() . '_' . Str::slug($request->judul) . '.' . $file->getClientOriginalExtension();

            $file->move(public_path('uploads/kegiatan-alumni'), $cover);
        }

        $slug = Str::slug($request->judul);

        if (KegiatanAlumni::where('slug', $slug)->exists()) {
            $slug .= '-' . time();
        }

        KegiatanAlumni::create([

            'judul' => $request->judul,

            'slug' => $slug,

            'tanggal' => $request->tanggal,

            'cover' => $cover,

            'isi' => $request->isi,

            'status' => $request->status

        ]);

        return redirect()
            ->route('dash.kegiatan-alumni')
            ->with('success', 'Kegiatan Alumni berhasil ditambahkan.');
    }

    public function edit(KegiatanAlumni $kegiatanAlumni)
    {
        return view(
            'dashboard.kegiatan-alumni.edit',
            [
                'kegiatan_alumni' => $kegiatanAlumni
            ]
        );
    }

    public function update(Request $request, KegiatanAlumni $kegiatanAlumni)
    {
        $request->validate([

            'judul'   => 'required|max:255',
            'tanggal' => 'required|date',
            'cover'   => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'isi'     => 'required',
            'status'  => 'required'

        ]);

        $cover = $kegiatanAlumni->cover;

        if ($request->hasFile('cover')) {

            if (
                $cover &&
                File::exists(public_path('uploads/kegiatan-alumni/' . $cover))
            ) {

                File::delete(public_path('uploads/kegiatan-alumni/' . $cover));
            }

            $file = $request->file('cover');

            $cover = time() . '_' . Str::slug($request->judul) . '.' . $file->getClientOriginalExtension();

            $file->move(public_path('uploads/kegiatan-alumni'), $cover);
        }

        // Membuat slug baru
        $slug = Str::slug($request->judul);

        // Jika slug sudah dipakai record lain
        $nomor = 1;

        while (
            KegiatanAlumni::where('slug', $slug)
            ->where('id', '!=', $kegiatanAlumni->id)
            ->exists()
        ) {

            $slug = Str::slug($request->judul) . '-' . $nomor;

            $nomor++;
        }

        $kegiatanAlumni->update([

            'judul'   => $request->judul,
            'slug'    => $slug,
            'tanggal' => $request->tanggal,
            'cover'   => $cover,
            'isi'     => $request->isi,
            'status'  => $request->status

        ]);

        return redirect()
            ->route('dash.kegiatan-alumni')
            ->with('success', 'Kegiatan Alumni berhasil diubah.');
    }

    public function destroy(KegiatanAlumni $kegiatan_alumni)
    {
        if (

            $kegiatan_alumni->cover &&
            File::exists(public_path('uploads/kegiatan-alumni/' . $kegiatan_alumni->cover))

        ) {

            File::delete(public_path('uploads/kegiatan-alumni/' . $kegiatan_alumni->cover));
        }

        $kegiatan_alumni->delete();

        return back()->with(
            'success',
            'Kegiatan Alumni berhasil dihapus.'
        );
    }
}
