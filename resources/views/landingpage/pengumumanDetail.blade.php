@extends('layouts.landing-page')

@section('content')

<!-- Hero -->
<section class="ve-page-hero"
    style="background-image:url({{ asset('img/bg-img/24.jpg') }});">

    <div class="ve-page-hero-overlay"></div>

    <div class="container ve-page-hero-content">

        <span class="ve-section-tag">

            PENGUMUMAN MADRASAH

        </span>

        <h1>

            {{ $pengumuman->judul }}

        </h1>

        <nav aria-label="breadcrumb">

            <ol class="ve-breadcrumb">

                <li>

                    <a href="{{ route('index') }}">

                        Beranda

                    </a>

                </li>

                <li>

                    <a href="{{ route('pengumuman') }}">

                        Pengumuman

                    </a>

                </li>

                <li class="active">

                    Detail

                </li>

            </ol>

        </nav>

    </div>

</section>

<section class="ve-section">

    <div class="container">

        <div class="row">

            <!-- CONTENT -->

            <div class="col-lg-8">

                <div class="card shadow-sm border-0">

                    <div class="card-body p-5">

                        <span class="badge bg-success">

                            {{ $pengumuman->status }}

                        </span>

                        <h2 class="mt-3">

                            {{ $pengumuman->judul }}

                        </h2>

                        <p class="text-muted mb-4">

                            <i class="fa fa-calendar"></i>

                            {{ \Carbon\Carbon::parse($pengumuman->tanggal)->translatedFormat('d F Y') }}

                        </p>

                        <hr>

                        <div class="mt-4">

                            {!! nl2br(e($pengumuman->isi)) !!}

                        </div>

                        <hr class="my-4">

                        <div class="d-flex justify-content-between align-items-center">

                            <a href="{{ route('pengumuman') }}"
                               class="btn btn-secondary">

                                <i class="fa fa-arrow-left"></i>

                                Kembali

                            </a>

                            <div>

                                <strong>Bagikan :</strong>

                                <a target="_blank"
                                   href="https://wa.me/?text={{ urlencode($pengumuman->judul.' '.url()->current()) }}"
                                   class="btn btn-success btn-sm">

                                    <i class="fa fa-whatsapp"></i>

                                </a>

                                <a target="_blank"
                                   href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}"
                                   class="btn btn-primary btn-sm">

                                    <i class="fa fa-facebook"></i>

                                </a>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <!-- SIDEBAR -->

            <div class="col-lg-4">

                <div class="ve-sidebar-widget">

                    <h5 class="ve-sidebar-title">

                        Pengumuman Terbaru

                    </h5>

                    @foreach($pengumumanTerbaru as $item)

                        <div class="ve-latest-post mb-3">

                            <a href="{{ route('pengumuman.detail',$item->slug) }}">

                                {{ $item->judul }}

                            </a>

                            <small class="d-block text-muted">

                                {{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('d F Y') }}

                            </small>

                        </div>

                    @endforeach

                </div>

                <div class="ve-sidebar-widget">

                    <h5 class="ve-sidebar-title">

                        Informasi

                    </h5>

                    <p>

                        Seluruh pengumuman yang dipublikasikan merupakan informasi resmi dari Madrasah Diniyah Al-Hidayah.

                    </p>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection