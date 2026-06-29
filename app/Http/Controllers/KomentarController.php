<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Komentar;
use Illuminate\Http\Request;

class KomentarController extends Controller
{
    public function store(Request $request,$slug)
    {

        $request->validate([

            'nama'=>'required|max:100',

            'email'=>'required|email',

            'komentar'=>'required'

        ]);

        $artikel = Artikel::where('slug',$slug)
            ->firstOrFail();

        Komentar::create([

            'artikel_id'=>$artikel->id,

            'nama'=>$request->nama,

            'email'=>$request->email,

            'komentar'=>$request->komentar,

            'status'=>'Pending'

        ]);

        return back()->with(
            'success',
            'Komentar berhasil dikirim dan menunggu persetujuan Admin.'
        );

    }
}