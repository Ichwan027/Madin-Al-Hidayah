@extends('layouts.landing-page')

@section('content')
    <!-- Hero -->
    <section class="ve-page-hero" style="background-image:url({{ asset('img/bg-img/24.jpg') }});">

        <div class="ve-page-hero-overlay"></div>

        <div class="container ve-page-hero-content">

            <span class="ve-section-tag">
                ARTIKEL & BERITA
            </span>

            <h1>

                <h1>

                    Artikel <span>Madrasah</span>

                </h1>

                <p class="text-white mt-3">

                    Total Artikel :

                    <strong>

                        {{ $artikels->total() }}

                    </strong>

                </p>

            </h1>

            <nav aria-label="breadcrumb">

                <ol class="ve-breadcrumb">

                    <li>
                        <a href="{{ url('/') }}">
                            Beranda
                        </a>
                    </li>

                    <li class="active">
                        Artikel
                    </li>

                </ol>

            </nav>

        </div>

    </section>

    <!-- Blog -->
    <section class="ve-section">

        <div class="container">

            <div class="row">

                <!-- ========================= -->
                <!-- ARTIKEL -->
                <!-- ========================= -->

                <div class="col-lg-8">

                    <div class="row">

                        @forelse($artikels as $artikel)
                            <div class="col-md-6 mb-4 wow fadeInUp" data-wow-delay="100ms">

                                <div class="ve-insight-card">

                                    <div class="ve-insight-img bg-img"
                                        style="background-image:url('{{ $artikel->thumbnail ? asset('uploads/artikel/' . $artikel->thumbnail) : asset('img/bg-img/10.jpg') }}');">
                                    </div>

                                    <div class="ve-insight-body">

                                        <span class="ve-insight-cat">

                                            {{ strtoupper($artikel->kategori) }}

                                        </span>

                                        <h5>

                                            <a href="{{ route('blog.detail', $artikel->slug) }}">

                                                {{ $artikel->judul }}

                                            </a>

                                        </h5>

                                        <p>

                                            {{ \Illuminate\Support\Str::limit(strip_tags($artikel->isi), 120) }}

                                        </p>

                                        <div class="ve-insight-meta">

                                            <span>

                                                <i class="fa fa-calendar"></i>

                                                {{ $artikel->created_at->translatedFormat('d F Y') }}

                                            </span>

                                            <a href="{{ route('blog.detail', $artikel->slug) }}">

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

                                    Belum ada artikel.

                                </div>

                            </div>
                        @endforelse

                    </div>

                    <div class="mt-5 d-flex justify-content-center">

                        {{ $artikels->links() }}

                    </div>

                </div>

                <!-- ========================= -->
                <!-- SIDEBAR -->
                <!-- ========================= -->

                <div class="col-lg-4">

                    <!-- Pencarian -->

                    <form method="GET" action="{{ route('blog') }}">

                        <div class="ve-search-box">

                            <input type="text" name="search" value="{{ request('search') }}"
                                placeholder="Cari artikel...">

                            <button>

                                <i class="fa fa-search"></i>

                            </button>

                        </div>

                    </form>

                    <!-- Kategori -->

                    <div class="ve-sidebar-widget">

                        <h5 class="ve-sidebar-title">

                            Kategori

                        </h5>

                        <ul class="ve-cat-list">

                            @foreach ($kategori as $item)
                                <li>

                                    <a href="{{ route('blog', ['kategori' => $item->kategori]) }}">

                                        {{ $item->kategori }}

                                        <span>

                                            {{ $item->total }}

                                        </span>

                                    </a>

                                </li>
                            @endforeach

                        </ul>

                    </div>

                    <!-- Artikel Terbaru -->

                    <div class="ve-sidebar-widget">

                        <h5 class="ve-sidebar-title">

                            Artikel Terbaru

                        </h5>

                        @foreach ($artikelTerbaru as $item)
                            <div class="ve-latest-post d-flex mb-3">

                                <img src="{{ asset('uploads/artikel/' . $item->thumbnail) }}" width="70" height="70"
                                    class="rounded me-3" style="object-fit:cover">

                                <div>

                                    <a href="{{ route('blog.detail', $item->slug) }}">

                                        {{ $item->judul }}

                                    </a>

                                    <small class="d-block text-muted">

                                        {{ $item->created_at->translatedFormat('d F Y') }}

                                    </small>

                                </div>

                            </div>
                        @endforeach

                    </div>

                    <!-- Tag -->

                    <div class="ve-sidebar-widget">

                        <h5 class="ve-sidebar-title">

                            Tag Populer

                        </h5>

                        <div class="ve-tags">

                            <a href="#">Santri</a>

                            <a href="#">Tahfidz</a>

                            <a href="#">MTQ</a>

                            <a href="#">Ramadhan</a>

                            <a href="#">Kajian Kitab</a>

                            <a href="#">TPQ</a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>
@endsection
