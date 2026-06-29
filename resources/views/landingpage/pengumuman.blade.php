@extends('layouts.landing-page')

@section('content')

    <!-- Hero -->
    <section class="ve-page-hero" style="background-image:url({{ asset('img/bg-img/24.jpg') }});">

        <div class="ve-page-hero-overlay"></div>

        <div class="container ve-page-hero-content">

            <span class="ve-section-tag">
                INFORMASI MADRASAH
            </span>

            <h1>

                Pengumuman <span>Madrasah</span>

            </h1>

            <nav aria-label="breadcrumb">

                <ol class="ve-breadcrumb">

                    <li>

                        <a href="{{ route('index') }}">

                            Beranda

                        </a>

                    </li>

                    <li class="active">

                        Pengumuman

                    </li>

                </ol>

            </nav>

        </div>

    </section>

    <!-- Content -->
    <section class="ve-section">

        <div class="container">

            <div class="row">

                <!-- ===================== -->
                <!-- DAFTAR PENGUMUMAN -->
                <!-- ===================== -->

                <div class="col-lg-8">

                    <div class="row">

                        @forelse($pengumumen as $pengumuman)
                            <div class="col-md-6 mb-4">

                                <div class="ve-insight-card h-100">

                                    <div class="ve-insight-body">

                                        <span class="ve-insight-cat">

                                            {{ strtoupper($pengumuman->status) }}

                                        </span>

                                        <h5>

                                            <a href="{{ route('pengumuman.detail', $pengumuman->slug) }}">

                                                {{ $pengumuman->judul }}

                                            </a>

                                        </h5>

                                        <p>

                                            {{ \Illuminate\Support\Str::limit(strip_tags($pengumuman->isi), 120) }}

                                        </p>

                                        <div class="ve-insight-meta">

                                            <span>

                                                <i class="fa fa-calendar"></i>

                                                {{ \Carbon\Carbon::parse($pengumuman->tanggal)->translatedFormat('d F Y') }}

                                            </span>

                                            <a href="{{ route('pengumuman.detail', $pengumuman->slug) }}">

                                                Selengkapnya

                                                <i class="fa fa-arrow-right"></i>

                                            </a>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        @empty

                            <div class="col-12">

                                <div class="alert alert-warning text-center">

                                    Belum ada pengumuman.

                                </div>

                            </div>
                        @endforelse

                    </div>

                    @if ($pengumumen->hasPages())
                        <div class="ve-pagination mt-5">

                            {{-- Tombol Sebelumnya --}}
                            @if ($pengumumen->onFirstPage())
                                <span class="ve-page disabled">
                                    <i class="fa fa-angle-left"></i>
                                </span>
                            @else
                                <a href="{{ $pengumumen->previousPageUrl() }}" class="ve-page">
                                    <i class="fa fa-angle-left"></i>
                                </a>
                            @endif

                            {{-- Nomor Halaman --}}
                            @for ($i = 1; $i <= $pengumumen->lastPage(); $i++)
                                <a href="{{ $pengumumen->url($i) }}"
                                    class="ve-page {{ $pengumumen->currentPage() == $i ? 'active' : '' }}">

                                    {{ $i }}

                                </a>
                            @endfor

                            {{-- Tombol Berikutnya --}}
                            @if ($pengumumen->hasMorePages())
                                <a href="{{ $pengumumen->nextPageUrl() }}" class="ve-page">
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            @else
                                <span class="ve-page disabled">
                                    <i class="fa fa-angle-right"></i>
                                </span>
                            @endif

                        </div>
                    @endif

                </div>

                <!-- ===================== -->
                <!-- SIDEBAR -->
                <!-- ===================== -->

                <div class="col-lg-4">

                    <!-- Search -->

                    <div class="ve-sidebar-widget">

                        <h5 class="ve-sidebar-title">

                            Cari Pengumuman

                        </h5>

                        <form method="GET" action="{{ route('pengumuman') }}">

                            <div class="ve-search-box">

                                <input type="text" name="search" value="{{ request('search') }}"
                                    placeholder="Cari pengumuman...">

                                <button>

                                    <i class="fa fa-search"></i>

                                </button>

                            </div>

                        </form>

                    </div>

                    <!-- Pengumuman Terbaru -->

                    <div class="ve-sidebar-widget">

                        <h5 class="ve-sidebar-title">

                            Pengumuman Terbaru

                        </h5>

                        @foreach ($pengumumanTerbaru as $item)
                            <div class="ve-latest-post mb-3">

                                <a href="{{ route('pengumuman.detail', $item->slug) }}">

                                    {{ $item->judul }}

                                </a>

                                <small class="d-block text-muted">

                                    {{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('d F Y') }}

                                </small>

                            </div>
                        @endforeach

                    </div>

                    <!-- Info -->

                    <div class="ve-sidebar-widget">

                        <h5 class="ve-sidebar-title">

                            Informasi

                        </h5>

                        <p class="mb-0">

                            Halaman ini berisi seluruh informasi resmi
                            Madrasah Diniyah Al-Hidayah yang telah dipublikasikan.

                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>

@endsection
