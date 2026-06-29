@extends('layouts.landing-page')
@section('content')
    <!-- Hero -->
    <section class="ve-page-hero"
        style="background-image:url('{{ $artikel->thumbnail ? asset('uploads/artikel/' . $artikel->thumbnail) : asset('img/bg-img/10.jpg') }}');">

        <div class="ve-page-hero-overlay"></div>

        <div class="container ve-page-hero-content">

            <span class="ve-insight-cat">

                {{ strtoupper($artikel->kategori) }}

            </span>

            <h1>

                {{ $artikel->judul }}

            </h1>

            <div class="ve-post-meta-hero">

                <span>

                    <i class="fa fa-calendar"></i>

                    {{ $artikel->created_at->translatedFormat('d F Y') }}

                </span>

                <span>

                    <i class="fa fa-user"></i>

                    {{ $artikel->penulis }}

                </span>

            </div>

        </div>

    </section>

    <!-- Article -->
    <section class="ve-section">
        <div class="container">
            <div class="row">

                <div class="col-12 col-lg-8">

                    <article class="ve-article">

                        <div class="ve-article-featured bg-img"
                            style="background-image:url('{{ $artikel->thumbnail ? asset('uploads/artikel/' . $artikel->thumbnail) : asset('img/bg-img/10.jpg') }}');">
                        </div>

                        <div class="ve-article-body">

                            {!! $artikel->isi !!}

                        </div>

                    </article>

                    <!-- Komentar -->
                    <h3>

                        Komentar

                        ({{ $artikel->komentars()->where('status', 'Approve')->count() }})

                    </h3>

                    @foreach ($artikel->komentars()->where('status', 'Approve')->latest()->get() as $komen)
                        <div class="card mb-3">

                            <div class="card-body">

                                <strong>

                                    {{ $komen->nama }}

                                </strong>

                                <br>

                                <small>

                                    {{ $komen->created_at->translatedFormat('d F Y') }}

                                </small>

                                <hr>

                                {{ $komen->komentar }}

                            </div>

                        </div>
                    @endforeach

                    <!-- Form Komentar -->
                    <form action="{{ route('komentar.store', $artikel->slug) }}" method="POST">

                        @csrf

                        <div class="row">

                            <div class="col-md-6">

                                <input type="text" name="nama" class="form-control" placeholder="Nama">

                            </div>

                            <div class="col-md-6">

                                <input type="email" name="email" class="form-control" placeholder="Email">

                            </div>

                        </div>

                        <div class="mt-3">

                            <textarea class="form-control" name="komentar" rows="5" placeholder="Komentar..."></textarea>

                        </div>

                        <button class="btn btn-primary mt-3">

                            Kirim Komentar

                        </button>

                    </form>

                </div>
                <!-- Sidebar -->
                <div class="col-12 col-lg-4">

                    <div class="ve-sidebar">

                        <!-- Pencarian -->
                        <div class="ve-sidebar-widget">

                            <h5 class="ve-sidebar-title">
                                Pencarian
                            </h5>

                            <div class="ve-search-box">

                                <input type="text" placeholder="Cari artikel...">

                                <button>
                                    <i class="fa fa-search"></i>
                                </button>

                            </div>

                        </div>

                        <!-- Kategori -->
                        <div class="ve-sidebar-widget">

                            <h5 class="ve-sidebar-title">
                                Kategori
                            </h5>

                            <ul class="ve-cat-list">

                                <li>
                                    <a href="#">
                                        Kegiatan
                                        <span>12</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        Pendidikan
                                        <span>8</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        Tahfidz
                                        <span>6</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        Prestasi
                                        <span>9</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        Pengumuman
                                        <span>15</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        Keagamaan
                                        <span>11</span>
                                    </a>
                                </li>

                            </ul>

                        </div>

                        <!-- Artikel Terbaru -->
                        <div class="ve-sidebar-widget">

                            <h5 class="ve-sidebar-title">
                                Artikel Terbaru
                            </h5>

                            @foreach ($artikelTerbaru as $item)
                                <div class="ve-recent-post">

                                    <div class="ve-rp-img bg-img"
                                        style="background-image:url('{{ $item->thumbnail ? asset('uploads/artikel/' . $item->thumbnail) : asset('img/bg-img/10.jpg') }}');">
                                    </div>

                                    <div>

                                        <a href="{{ route('blog.detail', $item->slug) }}">

                                            {{ $item->judul }}

                                        </a>

                                        <span>

                                            <i class="fa fa-calendar"></i>

                                            {{ $item->created_at->translatedFormat('d F Y') }}

                                        </span>

                                    </div>

                                </div>
                            @endforeach

                            <div class="ve-recent-post">

                                <div class="ve-rp-img bg-img" style="background-image:url(img/bg-img/11.jpg);">
                                </div>

                                <div>

                                    <a href="#">
                                        Pembukaan Pendaftaran Santri Baru
                                    </a>

                                    <span>
                                        <i class="fa fa-calendar"></i>
                                        20 April 2026
                                    </span>

                                </div>

                            </div>

                            <div class="ve-recent-post">

                                <div class="ve-rp-img bg-img" style="background-image:url(img/bg-img/12.jpg);">
                                </div>

                                <div>

                                    <a href="#">
                                        Santri Al-Hidayah Raih Juara MTQ
                                    </a>

                                    <span>
                                        <i class="fa fa-calendar"></i>
                                        14 April 2026
                                    </span>

                                </div>

                            </div>

                        </div>

                        <!-- Tag Populer -->
                        <div class="ve-article-tags">

                            <strong>Tag :</strong>

                            <a href="#">

                                {{ $artikel->kategori }}

                            </a>

                        </div>

                        <div class="ve-article-share">

                            <strong>Bagikan :</strong>

                            <a target="_blank"
                                href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}">

                                <i class="fa fa-facebook"></i>

                            </a>

                            <a target="_blank"
                                href="https://wa.me/?text={{ urlencode($artikel->judul . ' ' . url()->current()) }}">

                                <i class="fa fa-whatsapp"></i>

                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <div class="mt-5">

            {{-- <h3>

        Artikel Terkait

    </h3> --}}

            <div class="row">

                @foreach ($artikelTerkait as $item)
                    <div class="col-md-4 mb-4">

                        <div class="card">

                            <img src="{{ $item->thumbnail ? asset('uploads/artikel/' . $item->thumbnail) : asset('img/bg-img/10.jpg') }}"
                                class="card-img-top">

                            <div class="card-body">

                                <h6>

                                    {{ $item->judul }}

                                </h6>

                                <a href="{{ route('blog.detail', $item->slug) }}">

                                    Baca →

                                </a>

                            </div>

                        </div>

                    </div>
                @endforeach

            </div>

        </div>
    </section>
@endsection
