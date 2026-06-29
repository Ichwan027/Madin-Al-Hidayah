<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use App\Models\GaleriFoto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class GaleriController extends Controller
{
    public function index()
    {
        $galeris = Galeri::latest()->paginate(10);

        return view('dashboard.galeri', compact('galeris'));
    }

    public function create()
    {
        return view('dashboard.galeri-create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kategori' => 'required',
            'judul' => 'required',
            'cover' => 'required|image',
        ]);

        // upload cover
        $cover = null;

        if ($request->hasFile('cover')) {

            $cover = time() . '.' . $request->cover->extension();

            $request->cover->move(
                public_path('uploads/galeri'),
                $cover
            );
        }

        // simpan galeri
        $galeri = Galeri::create([
            'kategori' => $request->kategori,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'cover' => $cover,
        ]);

        //        dd($galeri);

        // upload banyak foto
        if ($request->hasFile('foto')) {

            foreach ($request->file('foto') as $foto) {

                $namaFoto = uniqid() . '.' . $foto->extension();

                $foto->move(
                    public_path('uploads/galeri'),
                    $namaFoto
                );

                GaleriFoto::create([
                    'galeri_id' => $galeri->id,
                    'foto' => $namaFoto
                ]);
            }
        }

        return redirect()
            ->route('dash.galeri')
            ->with('success', 'Galeri berhasil ditambahkan');
    }

    public function show(Galeri $galeri)
    {
        return view('dashboard.galeri-show', compact('galeri'));
    }

    public function edit(Galeri $galeri)
    {
        return view('dashboard.galeri-edit', compact('galeri'));
    }

    public function update(Request $request, Galeri $galeri)
    {
        $request->validate([
            'kategori' => 'required',
            'judul'    => 'required',
        ]);

        $cover = $galeri->cover;

        if ($request->hasFile('cover')) {

            if ($cover && File::exists(public_path('uploads/galeri/' . $cover))) {
                File::delete(public_path('uploads/galeri/' . $cover));
            }

            $cover = time() . '.' . $request->cover->extension();

            $request->cover->move(
                public_path('uploads/galeri'),
                $cover
            );
        }

        // dd($request->all());

        $galeri->update([
            'kategori'   => $request->kategori,
            'judul'      => $request->judul,
            'deskripsi'  => $request->deskripsi,
            'cover'      => $cover,
        ]);

        // Upload foto tambahan
        if ($request->hasFile('foto')) {

            foreach ($request->file('foto') as $foto) {

                $namaFoto = uniqid() . '.' . $foto->extension();

                $foto->move(
                    public_path('uploads/galeri'),
                    $namaFoto
                );

                GaleriFoto::create([
                    'galeri_id' => $galeri->id,
                    'foto'      => $namaFoto,
                ]);
            }
        }

        return redirect()
            ->route('dash.galeri')
            ->with('success', 'Galeri berhasil diperbarui.');
    }

    public function destroy(Galeri $galeri)
    {
        // Hapus cover
        if ($galeri->cover && File::exists(public_path('uploads/galeri/' . $galeri->cover))) {

            File::delete(public_path('uploads/galeri/' . $galeri->cover));
        }

        // Hapus semua foto galeri
        foreach ($galeri->fotos as $foto) {

            if (File::exists(public_path('uploads/galeri/' . $foto->foto))) {

                File::delete(public_path('uploads/galeri/' . $foto->foto));
            }

            $foto->delete();
        }

        // Hapus data galeri
        $galeri->delete();

        return redirect()
            ->route('dash.galeri')
            ->with('success', 'Galeri berhasil dihapus.');
    }

    public function destroyFoto(GaleriFoto $foto)
{
    if (File::exists(public_path('uploads/galeri/' . $foto->foto))) {

        File::delete(public_path('uploads/galeri/' . $foto->foto));

    }

    $foto->delete();

    return back()->with('success', 'Foto berhasil dihapus.');
}
}
