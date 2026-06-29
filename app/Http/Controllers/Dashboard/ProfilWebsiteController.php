<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\ProfilWebsite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProfilWebsiteController extends Controller
{
    public function index()
    {
        $profil = ProfilWebsite::first();

        if (!$profil) {

            $profil = ProfilWebsite::create([
                'nama_website' => 'Madrasah Diniyah Al-Hidayah',
                'nama_madrasah' => 'Madrasah Diniyah Al-Hidayah'
            ]);

        }

        return view(
            'dashboard.profil-website',
            compact('profil')
        );
    }

    public function update(Request $request)
    {
        $profil = ProfilWebsite::first();

        $request->validate([

            'nama_website' => 'required',

            'nama_madrasah' => 'required',

            'logo' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',

            'favicon' => 'nullable|image|mimes:jpg,jpeg,png,ico|max:1024',

        ]);

        $logo = $profil->logo;

        if ($request->hasFile('logo')) {

            if ($logo && File::exists(public_path('uploads/profil/'.$logo))) {

                File::delete(public_path('uploads/profil/'.$logo));

            }

            $file = $request->file('logo');

            $logo = 'logo_'.time().'.'.$file->getClientOriginalExtension();

            $file->move(public_path('uploads/profil'),$logo);

        }

        $favicon = $profil->favicon;

        if ($request->hasFile('favicon')) {

            if ($favicon && File::exists(public_path('uploads/profil/'.$favicon))) {

                File::delete(public_path('uploads/profil/'.$favicon));

            }

            $file = $request->file('favicon');

            $favicon = 'favicon_'.time().'.'.$file->getClientOriginalExtension();

            $file->move(public_path('uploads/profil'),$favicon);

        }

        $profil->update([

            'nama_website'=>$request->nama_website,

            'nama_madrasah'=>$request->nama_madrasah,

            'slogan'=>$request->slogan,

            'deskripsi'=>$request->deskripsi,

            'logo'=>$logo,

            'favicon'=>$favicon,

            'alamat'=>$request->alamat,

            'telepon'=>$request->telepon,

            'whatsapp'=>$request->whatsapp,

            'email'=>$request->email,

            'facebook'=>$request->facebook,

            'instagram'=>$request->instagram,

            'youtube'=>$request->youtube,

            'maps'=>$request->maps,

            'jam_operasional'=>$request->jam_operasional,

            'footer'=>$request->footer

        ]);

        return redirect()
            ->route('dash.profil-website')
            ->with('success','Profil Website berhasil diperbarui.');

    }
}