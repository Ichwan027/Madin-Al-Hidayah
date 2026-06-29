@extends('layouts.landing-page')

@section('content')

<!-- Hero -->
<section class="ve-page-hero"
    style="background-image:url({{ asset('img/bg-img/24.jpg') }});">

    <div class="ve-page-hero-overlay"></div>

    <div class="container ve-page-hero-content">

        <span class="ve-section-tag">

            KEGIATAN ALUMNI

        </span>

        <h1>

            Kegiatan <span>Alumni</span>

        </h1>

        <nav aria-label="breadcrumb">

            <ol class="ve-breadcrumb">

                <li>

                    <a href="{{ route('index') }}">

                        Beranda

                    </a>

                </li>

                <li class="active">

                    Kegiatan Alumni

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

                <div class="row">

                    @forelse($kegiatans as $item)

                        <div class="col-md-6 mb-4">

                            <div class="ve-insight-card h-100">

                                <div class="ve-insight-img bg-img"
                                    style="background-image:url('{{ $item->cover ? asset('uploads/kegiatan-alumni/'.$item->cover) : asset('img/bg-img/10.jpg') }}')">
                                </div>

                                <div class="ve-insight-body">

                                    <span class="ve-insight-cat">

                                        {{ strtoupper($item->status) }}

                                    </span>

                                    <h5>

                                        <a href="{{ route('kegiatan-alumni.detail',$item->slug) }}">

                                            {{ $item->judul }}

                                        </a>

                                    </h5>

                                    <p>

                                        {{ \Illuminate\Support\Str::limit(strip_tags($item->isi),120) }}

                                    </p>

                                    <div class="ve-insight-meta">

                                        <span>

                                            <i class="fa fa-calendar"></i>

                                            {{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('d F Y') }}

                                        </span>

                                        <a href="{{ route('kegiatan-alumni.detail',$item->slug) }}">

                                            Selengkapnya

                                            <i class="fa fa-arrow-right"></i>

                                        </a>

                                    </div>

                                </div>

                            </div>

                        </div>

                    @empty

                        <div class="col-12">

                            <div class="alert alert-warning">

                                Belum ada kegiatan alumni.

                            </div>

                        </div>

                    @endforelse

                </div>

                <div class="mt-5 d-flex justify-content-center">

                    {{ $kegiatans->links() }}

                </div>

            </div>

            <!-- SIDEBAR -->

            <div class="col-lg-4">

                <div class="ve-sidebar-widget">

                    <h5 class="ve-sidebar-title">

                        Cari Kegiatan

                    </h5>

                    <form method="GET">

                        <div class="ve-search-box">

                            <input
                                type="text"
                                name="search"
                                value="{{ request('search') }}"
                                placeholder="Cari kegiatan...">

                            <button>

                                <i class="fa fa-search"></i>

                            </button>

                        </div>

                    </form>

                </div>

                <div class="ve-sidebar-widget">

                    <h5 class="ve-sidebar-title">

                        Kegiatan Terbaru

                    </h5>

                    @foreach($kegiatanTerbaru as $item)

                        <div class="ve-latest-post mb-3">

                            <a href="{{ route('kegiatan-alumni.detail',$item->slug) }}">

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

                        Tentang Alumni

                    </h5>

                    <p>

                        Halaman ini berisi seluruh kegiatan resmi Alumni Madrasah Diniyah Al-Hidayah.

                    </p>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection