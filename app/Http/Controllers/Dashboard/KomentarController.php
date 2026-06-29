<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Komentar;

class KomentarController extends Controller
{
    public function index()
    {
        $komentars = Komentar::with('artikel')
            ->latest()
            ->paginate(10);

        return view('dashboard.komentar', compact('komentars'));
    }

    public function approve(Komentar $komentar)
    {
        $komentar->update([
            'status' => 'Approve'
        ]);

        return back()->with('success', 'Komentar berhasil disetujui.');
    }

    public function pending(Komentar $komentar)
    {
        $komentar->update([
            'status' => 'Pending'
        ]);

        return back()->with('success', 'Komentar dikembalikan ke Pending.');
    }

    public function destroy(Komentar $komentar)
    {
        $komentar->delete();

        return back()->with('success', 'Komentar berhasil dihapus.');
    }
}