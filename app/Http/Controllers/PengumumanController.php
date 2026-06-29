<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PengumumanController extends Controller
{
    public function index()
    {
        $pengumumen = Pengumuman::latest()->paginate(10);

        return view('dashboard.pengumuman', compact('pengumumen'));
    }

    public function create()
    {
        return view('dashboard.pengumuman-create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul'   => 'required|max:255',
            'isi'     => 'required',
            'tanggal' => 'required|date',
            'status'  => 'required',
        ]);

        Pengumuman::create([
            'judul'   => $request->judul,
            'slug'    => Str::slug($request->judul),
            'isi'     => $request->isi,
            'tanggal' => $request->tanggal,
            'status'  => $request->status,
        ]);

        return redirect()
            ->route('dash.pengumuman')
            ->with('success', 'Pengumuman berhasil ditambahkan.');
    }

    public function show(Pengumuman $pengumuman)
    {
        return view('dashboard.pengumuman-show', compact('pengumuman'));
    }

    public function edit(Pengumuman $pengumuman)
    {
        return view('dashboard.pengumuman-edit', compact('pengumuman'));
    }

    public function update(Request $request, Pengumuman $pengumuman)
    {
        $request->validate([
            'judul'   => 'required|max:255',
            'isi'     => 'required',
            'tanggal' => 'required|date',
            'status'  => 'required',
        ]);

        $pengumuman->update([
            'judul'   => $request->judul,
            'slug'    => Str::slug($request->judul),
            'isi'     => $request->isi,
            'tanggal' => $request->tanggal,
            'status'  => $request->status,
        ]);

        return redirect()
            ->route('dash.pengumuman')
            ->with('success', 'Pengumuman berhasil diperbarui.');
    }

    public function destroy(Pengumuman $pengumuman)
    {
        $pengumuman->delete();

        return redirect()
            ->route('dash.pengumuman')
            ->with('success', 'Pengumuman berhasil dihapus.');
    }
}