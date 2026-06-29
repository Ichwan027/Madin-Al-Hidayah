@extends('layouts.landing-page')

@section('content')

<!-- Hero -->
<section class="ve-page-hero"
    style="background-image:url('{{ $galeri->cover ? asset('uploads/galeri/'.$galeri->cover) : asset('img/bg-img/24.jpg') }}');">

    <div class="ve-page-hero-overlay"></div>

    <div class="container ve-page-hero-content">

        <span class="ve-section-tag">

            GALERI MADRASAH

        </span>

        <h1>

            {{ $galeri->judul }}

        </h1>

        <nav aria-label="breadcrumb">

            <ol class="ve-breadcrumb">

                <li>

                    <a href="{{ route('index') }}">

                        Beranda

                    </a>

                </li>

                <li>

                    <a href="{{ route('galeri') }}">

                        Galeri

                    </a>

                </li>

                <li class="active">

                    Detail Album

                </li>

            </ol>

        </nav>

    </div>

</section>

<section class="ve-section">

    <div class="container">

        <div class="row">

            <!-- ===================== -->
            <!-- CONTENT -->
            <!-- ===================== -->

            <div class="col-lg-8">

                <img src="{{ $galeri->cover ? asset('uploads/galeri/'.$galeri->cover) : asset('img/bg-img/10.jpg') }}"
                     class="img-fluid rounded shadow mb-4"
                     alt="{{ $galeri->judul }}">

                <span class="badge bg-primary">

                    {{ $galeri->kategori }}

                </span>

                <h2 class="mt-3">

                    {{ $galeri->judul }}

                </h2>

                <p class="text-muted">

                    <i class="fa fa-calendar"></i>

                    {{ $galeri->created_at->translatedFormat('d F Y') }}

                </p>

                <hr>

                <p>

                    {{ $galeri->deskripsi }}

                </p>

                <hr class="my-5">

                <h3>

                    Dokumentasi Foto

                </h3>

                <div class="row mt-4">

                    @forelse($galeri->fotos as $foto)

                        <div class="col-md-4 mb-4">

                            <a href="{{ asset('uploads/galeri/'.$foto->foto) }}"
                               data-lightbox="galeri"
                               data-title="{{ $galeri->judul }}">

                                <img src="{{ asset('uploads/galeri/'.$foto->foto) }}"
                                     class="img-fluid rounded shadow-sm"
                                     style="height:220px; width:100%; object-fit:cover;">

                            </a>

                        </div>

                    @empty

                        <div class="col-12">

                            <div class="alert alert-warning">

                                Belum ada foto pada album ini.

                            </div>

                        </div>

                    @endforelse

                </div>

            </div>

            <!-- ===================== -->
            <!-- SIDEBAR -->
            <!-- ===================== -->

            <div class="col-lg-4">

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

                <div class="ve-sidebar-widget">

                    <h5 class="ve-sidebar-title">

                        Informasi

                    </h5>

                    <p>

                        Dokumentasi kegiatan Madrasah Diniyah Al-Hidayah yang telah diabadikan dalam album foto.

                    </p>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection