<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class ArtikelController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | INDEX
    |--------------------------------------------------------------------------
    */

    public function index()
    {
        $artikels = Artikel::latest()->paginate(10);

        return view('dashboard.artikel', compact('artikels'));
    }

    /*
    |--------------------------------------------------------------------------
    | CREATE
    |--------------------------------------------------------------------------
    */

    public function create()
    {
        return view('dashboard.artikel-create');
    }

    /*
    |--------------------------------------------------------------------------
    | STORE
    |--------------------------------------------------------------------------
    */

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'judul'     => 'required|max:255',
            'kategori'  => 'required',
            'isi'       => 'required',
            'thumbnail' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'status'    => 'required'
        ]);

        $thumbnail = null;

        if ($request->hasFile('thumbnail')) {

            $thumbnail = time().'_'.$request->thumbnail->getClientOriginalName();

            $request->thumbnail->move(
                public_path('uploads/artikel'),
                $thumbnail
            );
        }

        Artikel::create([

            'judul'      => $request->judul,

            'slug'       => Str::slug($request->judul),

            'kategori'   => $request->kategori,

            'isi'        => $request->isi,

            'thumbnail'  => $thumbnail,

            'penulis'    => Auth::user()?->name,

            'status'     => $request->status,

        ]);

        return redirect()
            ->route('dash.artikel')
            ->with('success','Artikel berhasil ditambahkan.');
    }

    /*
    |--------------------------------------------------------------------------
    | SHOW
    |--------------------------------------------------------------------------
    */

    public function show(Artikel $artikel)
    {
        return view('dashboard.artikel-show', compact('artikel'));
    }

    /*
    |--------------------------------------------------------------------------
    | EDIT
    |--------------------------------------------------------------------------
    */

    public function edit(Artikel $artikel)
    {
        return view('dashboard.artikel-edit', compact('artikel'));
    }

    /*
    |--------------------------------------------------------------------------
    | UPDATE
    |--------------------------------------------------------------------------
    */

    public function update(Request $request, Artikel $artikel)
    {
        $request->validate([
            'judul'     => 'required|max:255',
            'kategori'  => 'required',
            'isi'       => 'required',
            'status'    => 'required'
        ]);

        $thumbnail = $artikel->thumbnail;

        if ($request->hasFile('thumbnail')) {

            if ($thumbnail && File::exists(public_path('uploads/artikel/'.$thumbnail))) {

                File::delete(public_path('uploads/artikel/'.$thumbnail));

            }

            $thumbnail = time().'_'.$request->thumbnail->getClientOriginalName();

            $request->thumbnail->move(
                public_path('uploads/artikel'),
                $thumbnail
            );
        }

        $artikel->update([

            'judul'      => $request->judul,

            'slug'       => Str::slug($request->judul),

            'kategori'   => $request->kategori,

            'isi'        => $request->isi,

            'thumbnail'  => $thumbnail,

            'status'     => $request->status,

        ]);

        return redirect()
            ->route('dash.artikel')
            ->with('success','Artikel berhasil diperbarui.');
    }

    /*
    |--------------------------------------------------------------------------
    | DESTROY
    |--------------------------------------------------------------------------
    */

    public function destroy(Artikel $artikel)
    {
        if ($artikel->thumbnail) {

            if (File::exists(public_path('uploads/artikel/'.$artikel->thumbnail))) {

                File::delete(public_path('uploads/artikel/'.$artikel->thumbnail));

            }

        }

        $artikel->delete();

        return redirect()
            ->route('dash.artikel')
            ->with('success','Artikel berhasil dihapus.');
    }
}