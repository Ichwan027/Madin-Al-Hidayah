@extends('layouts.landing-page')

@section('content')

<!-- Hero -->
<section class="ve-page-hero"
    style="background-image:url({{ asset('img/bg-img/24.jpg') }});">

    <div class="ve-page-hero-overlay"></div>

    <div class="container ve-page-hero-content">

        <span class="ve-section-tag">

            DOKUMENTASI

        </span>

        <h1>

            Galeri <span>Madrasah</span>

        </h1>

        <nav aria-label="breadcrumb">

            <ol class="ve-breadcrumb">

                <li>

                    <a href="{{ route('index') }}">

                        Beranda

                    </a>

                </li>

                <li class="active">

                    Galeri

                </li>

            </ol>

        </nav>

    </div>

</section>

<!-- Galeri -->
<section class="ve-section">

    <div class="container">

        <div class="row">

            <!-- ========================= -->
            <!-- ALBUM GALERI -->
            <!-- ========================= -->

            <div class="col-lg-8">

                <div class="row">

                    @forelse($galeris as $galeri)

                        <div class="col-md-6 mb-4">

                            <div class="ve-insight-card h-100">

                                <div class="ve-insight-img bg-img"
                                    style="background-image:url('{{ $galeri->cover ? asset('uploads/galeri/'.$galeri->cover) : asset('img/bg-img/10.jpg') }}');">
                                </div>

                                <div class="ve-insight-body">

                                    <span class="ve-insight-cat">

                                        {{ strtoupper($galeri->kategori) }}

                                    </span>

                                    <h5>

                                        <a href="{{ route('galeri.detail',$galeri->id) }}">

                                            {{ $galeri->judul }}

                                        </a>

                                    </h5>

                                    <p>

                                        {{ \Illuminate\Support\Str::limit(strip_tags($galeri->deskripsi),120) }}

                                    </p>

                                    <div class="ve-insight-meta">

                                        <span>

                                            <i class="fa fa-image"></i>

                                            {{ $galeri->fotos_count }} Foto

                                        </span>

                                        <a href="{{ route('galeri.detail',$galeri->id) }}">

                                            Lihat Album

                                            <i class="fa fa-arrow-right"></i>

                                        </a>

                                    </div>

                                </div>

                            </div>

                        </div>

                    @empty

                        <div class="col-12">

                            <div class="alert alert-warning text-center">

                                Belum ada galeri.

                            </div>

                        </div>

                    @endforelse

                </div>

                <div class="mt-5 d-flex justify-content-center">

                    {{ $galeris->links() }}

                </div>

            </div>

            <!-- ========================= -->
            <!-- SIDEBAR -->
            <!-- ========================= -->

            <div class="col-lg-4">

                <!-- Album Terbaru -->

                <div class="ve-sidebar-widget">

                    <h5 class="ve-sidebar-title">

                        Album Terbaru

                    </h5>

                    @foreach($galeriTerbaru as $item)

                        <div class="ve-latest-post mb-3">

                            <a href="{{ route('galeri.detail',$item->id) }}">

                                {{ $item->judul }}

                            </a>

                            <small class="d-block text-muted">

                                {{ $item->created_at->translatedFormat('d F Y') }}

                            </small>

                        </div>

                    @endforeach

                </div>

                <!-- Informasi -->

                <div class="ve-sidebar-widget">

                    <h5 class="ve-sidebar-title">

                        Informasi

                    </h5>

                    <p>

                        Dokumentasi kegiatan Madrasah Diniyah Al-Hidayah yang diabadikan dalam bentuk album foto.

                    </p>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection