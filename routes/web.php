<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Dashboard\ProfilWebsiteController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\KomentarController;
use App\Http\Controllers\Dashboard\KomentarController as DashboardKomentarController;
use App\Http\Controllers\Dashboard\KegiatanAlumniController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| FORNT END
|--------------------------------------------------------------------------
*/

Route::get('/', [LandingPageController::class, 'index'])
    ->name('index');

Route::get('/', [LandingPageController::class, 'index'])->name('index');

Route::get('/tentang', [LandingPageController::class, 'tentang'])->name('tentang');

Route::get(
    '/galeri',
    [LandingPageController::class, 'galeri']
)
    ->name('galeri');

Route::get(
    '/galeri/{id}',
    [LandingPageController::class, 'galeriDetail']
)
    ->name('galeri.detail');

Route::get('/pengumuman', [LandingPageController::class, 'pengumuman'])
    ->name('pengumuman');

Route::get('/pengumuman/{slug}', [LandingPageController::class, 'pengumumanDetail'])
    ->name('pengumuman.detail');

Route::get('/kegiatan-alumni', [LandingPageController::class, 'kegiatanAlumni'])
    ->name('kegiatan-alumni');

Route::get('/kegiatan-alumni/{slug}', [LandingPageController::class, 'kegiatanAlumniDetail'])
    ->name('kegiatan-alumni.detail');

Route::get('/blog', [LandingPageController::class, 'blog'])
    ->name('blog');

Route::get('/blog/{slug}', [LandingPageController::class, 'blogDetail'])
    ->name('blog.detail');

Route::get('/kontak', [LandingPageController::class, 'kontak'])
    ->name('kontak');

Route::post(
    '/blog/{slug}/komentar',
    [KomentarController::class, 'store']
)
    ->name('komentar.store');

/*
|--------------------------------------------------------------------------
| LOGIN
|--------------------------------------------------------------------------
*/

Route::get('/login', [AuthController::class, 'index'])->name('login');

Route::post('/login', [AuthController::class, 'authenticate']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

/*
|--------------------------------------------------------------------------
| DASHBOARD
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    // DASHBOARD
    Route::get('/admin/index', [DashboardController::class, 'index'])->name('dash.index');

    // GALERI
    Route::get('/admin/galeri', [GaleriController::class, 'index'])
        ->name('dash.galeri');

    Route::get('/admin/galeri-create', [GaleriController::class, 'create'])
        ->name('galeri-create');

    Route::post('/admin/galeri-store', [GaleriController::class, 'store'])
        ->name('galeri-store');

    Route::get('/admin/galeri-show/{galeri}', [GaleriController::class, 'show'])
        ->name('galeri-show');

    Route::get('/admin/galeri-edit/{galeri}', [GaleriController::class, 'edit'])
        ->name('galeri-edit');

    Route::put('/admin/galeri-update/{galeri}', [GaleriController::class, 'update'])
        ->name('galeri-update');

    Route::delete('/admin/galeri-delete/{galeri}', [GaleriController::class, 'destroy'])
        ->name('galeri-delete');
    Route::delete('/admin/galeri-foto-delete/{foto}', [GaleriController::class, 'destroyFoto'])
        ->name('galeri-foto-delete');


    // ARTIKEL
    Route::get('/admin/artikel', [ArtikelController::class, 'index'])
        ->name('dash.artikel');

    Route::get('/admin/artikel-create', [ArtikelController::class, 'create'])
        ->name('artikel-create');

    Route::post('/admin/artikel-store', [ArtikelController::class, 'store'])
        ->name('artikel-store');

    Route::get('/admin/artikel-show/{artikel}', [ArtikelController::class, 'show'])
        ->name('artikel-show');

    Route::get('/admin/artikel-edit/{artikel}', [ArtikelController::class, 'edit'])
        ->name('artikel-edit');

    Route::put('/admin/artikel-update/{artikel}', [ArtikelController::class, 'update'])
        ->name('artikel-update');

    Route::delete('/admin/artikel-delete/{artikel}', [ArtikelController::class, 'destroy'])
        ->name('artikel-delete');

    // KOMENTAR
    Route::get(
        '/admin/komentar',
        [DashboardKomentarController::class, 'index']
    )
        ->name('dash.komentar');

    Route::put(
        '/admin/komentar/{komentar}/approve',
        [DashboardKomentarController::class, 'approve']
    )
        ->name('komentar.approve');

    Route::put(
        '/admin/komentar/{komentar}/pending',
        [DashboardKomentarController::class, 'pending']
    )
        ->name('komentar.pending');

    Route::delete(
        '/admin/komentar/{komentar}',
        [DashboardKomentarController::class, 'destroy']
    )
        ->name('komentar.delete');

    // PENGUMUMAN
    // PENGUMUMAN

    Route::get('/admin/pengumuman', [PengumumanController::class, 'index'])
        ->name('dash.pengumuman');

    Route::get('/admin/pengumuman-create', [PengumumanController::class, 'create'])
        ->name('pengumuman-create');

    Route::post('/admin/pengumuman-store', [PengumumanController::class, 'store'])
        ->name('pengumuman-store');

    Route::get('/admin/pengumuman-show/{pengumuman}', [PengumumanController::class, 'show'])
        ->name('pengumuman-show');

    Route::get('/admin/pengumuman-edit/{pengumuman}', [PengumumanController::class, 'edit'])
        ->name('pengumuman-edit');

    Route::put('/admin/pengumuman-update/{pengumuman}', [PengumumanController::class, 'update'])
        ->name('pengumuman-update');

    Route::delete('/admin/pengumuman-delete/{pengumuman}', [PengumumanController::class, 'destroy'])
        ->name('pengumuman-delete');

    });

// |--------------------------------------------------------------------------
// | KEGIATAN ALUMNI
// |--------------------------------------------------------------------------
// */

    Route::controller(KegiatanAlumniController::class)->group(function () {

        Route::get('/admin/kegiatan-alumni', 'index')
            ->name('dash.kegiatan-alumni');

        Route::get('/admin/kegiatan-alumni-create', 'create')
            ->name('kegiatan-alumni-create');

        Route::post('/admin/kegiatan-alumni-store', 'store')
            ->name('kegiatan-alumni-store');

        Route::get('/admin/kegiatan-alumni-show/{kegiatanAlumni}', 'show')
            ->name('kegiatan-alumni-show');

        Route::get('/admin/kegiatan-alumni-edit/{kegiatanAlumni}', 'edit')
            ->name('kegiatan-alumni-edit');

        Route::put('/admin/kegiatan-alumni-update/{kegiatanAlumni}', 'update')
            ->name('kegiatan-alumni-update');

        Route::delete('/admin/kegiatan-alumni-delete/{kegiatanAlumni}', 'destroy')
            ->name('kegiatan-alumni-delete');
    });


    // PROFIL WEBSITE
    Route::controller(ProfilWebsiteController::class)->group(function () {

    Route::get('/admin/profil-website','index')
        ->name('dash.profil-website');

    Route::post('/admin/profil-website','update')
        ->name('profil-website-update');

});


/*
|--------------------------------------------------------------------------
| USER KHUSUS ADMIN
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'admin'])->group(function () {

    Route::get('/admin/user', [UserController::class, 'index'])
        ->name('dash.user');

    Route::get('/admin/user-create', [UserController::class, 'create'])
        ->name('user-create');

    Route::post('/admin/user-store', [UserController::class, 'store'])
        ->name('user-store');

    Route::get('/admin/user-show/{user}', [UserController::class, 'show'])
        ->name('user-show');

    Route::get('/admin/user-edit/{user}', [UserController::class, 'edit'])
        ->name('user-edit');

    Route::put('/admin/user-update/{user}', [UserController::class, 'update'])
        ->name('user-update');

    Route::delete('/admin/user-delete/{user}', [UserController::class, 'destroy'])
        ->name('user-delete');
});