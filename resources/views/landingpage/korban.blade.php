@extends('layouts.landing-page')
@section('content')

    <section class="ve-page-hero" style="background-image:url({{ asset('img/bg-img/24.jpg') }});">
        <div class="ve-page-hero-overlay"></div>
        <div class="container ve-page-hero-content">
            <span class="ve-section-tag">GALERI FOTO</span>
            <h1>Dokumentasi <span>Kegiatan Madrasah</span></h1>
            <nav aria-label="breadcrumb"><ol class="ve-breadcrumb"><li><a href="{{ asset('/') }}">Beranda</a></li><li class="active">Galeri</li></ol></nav>
        </div>
    </section>

<section class="ve-section">

    <div class="container">

        <div class="ve-section-heading text-center">

            <h2>
                Dokumentasi <span>Kegiatan Madrasah</span>
            </h2>

            <p>
                Berbagai momen kegiatan santri, pembelajaran, perlombaan,
                dan acara keagamaan di Madrasah Diniyah Al-Hidayah.
            </p>

        </div>

        <div class="row">

            <!-- Item 1 -->
            <div class="col-12 col-md-6 col-lg-4 wow fadeInUp">

                <div class="ve-gallery-card">

                    <div class="ve-gallery-img bg-img"
                        style="background-image:url({{ asset('img/gallery/1.jpg') }});">

                        <div class="ve-gallery-overlay">

                            <a href="{{ asset('img/gallery/1.jpg') }}"
                                class="gallery-img">

                                <i class="fa fa-search-plus"></i>

                            </a>

                        </div>

                    </div>

                    <div class="ve-gallery-body">

                        <span class="ve-gallery-category">
                            KEGIATAN
                        </span>

                        <h5>
                            Peringatan Tahun Baru Islam
                        </h5>

                        <p>
                            Kegiatan peringatan Tahun Baru Islam bersama seluruh santri.
                        </p>

                    </div>

                </div>

            </div>

            <!-- Item 2 -->
            <div class="col-12 col-md-6 col-lg-4 wow fadeInUp">

                <div class="ve-gallery-card">

                    <div class="ve-gallery-img bg-img"
                        style="background-image:url({{ asset('img/gallery/2.jpg') }});">

                        <div class="ve-gallery-overlay">

                            <a href="{{ asset('img/gallery/2.jpg') }}"
                                class="gallery-img">

                                <i class="fa fa-search-plus"></i>

                            </a>

                        </div>

                    </div>

                    <div class="ve-gallery-body">

                        <span class="ve-gallery-category">
                            PEMBELAJARAN
                        </span>

                        <h5>
                            Kajian Kitab Kuning
                        </h5>

                        <p>
                            Pembelajaran kitab kuning bersama ustadz dan santri.
                        </p>

                    </div>

                </div>

            </div>

            <!-- Item 3 -->
            <div class="col-12 col-md-6 col-lg-4 wow fadeInUp">

                <div class="ve-gallery-card">

                    <div class="ve-gallery-img bg-img"
                        style="background-image:url({{ asset('img/gallery/3.jpg') }});">

                        <div class="ve-gallery-overlay">

                            <a href="{{ asset('img/gallery/3.jpg') }}"
                                class="gallery-img">

                                <i class="fa fa-search-plus"></i>

                            </a>

                        </div>

                    </div>

                    <div class="ve-gallery-body">

                        <span class="ve-gallery-category">
                            PRESTASI
                        </span>

                        <h5>
                            Juara MTQ Tingkat Kecamatan
                        </h5>

                        <p>
                            Santri Madrasah Diniyah Al-Hidayah meraih prestasi membanggakan.
                        </p>

                    </div>

                </div>

            </div>

            <!-- Item 4 -->
            <div class="col-12 col-md-6 col-lg-4 wow fadeInUp">

                <div class="ve-gallery-card">

                    <div class="ve-gallery-img bg-img"
                        style="background-image:url({{ asset('img/gallery/4.jpg') }});">

                        <div class="ve-gallery-overlay">

                            <a href="{{ asset('img/gallery/4.jpg') }}"
                                class="gallery-img">

                                <i class="fa fa-search-plus"></i>

                            </a>

                        </div>

                    </div>

                    <div class="ve-gallery-body">

                        <span class="ve-gallery-category">
                            RAMADHAN
                        </span>

                        <h5>
                            Buka Bersama Santri
                        </h5>

                        <p>
                            Kegiatan buka bersama dan tadarus Al-Qur'an selama bulan Ramadhan.
                        </p>

                    </div>

                </div>

            </div>

            <!-- Item 5 -->
            <div class="col-12 col-md-6 col-lg-4 wow fadeInUp">

                <div class="ve-gallery-card">

                    <div class="ve-gallery-img bg-img"
                        style="background-image:url({{ asset('img/gallery/5.jpg') }});">

                        <div class="ve-gallery-overlay">

                            <a href="{{ asset('img/gallery/5.jpg') }}"
                                class="gallery-img">

                                <i class="fa fa-search-plus"></i>

                            </a>

                        </div>

                    </div>

                    <div class="ve-gallery-body">

                        <span class="ve-gallery-category">
                            WISUDA
                        </span>

                        <h5>
                            Haflah Akhirussanah
                        </h5>

                        <p>
                            Wisuda dan pelepasan santri Madrasah Diniyah Al-Hidayah.
                        </p>

                    </div>

                </div>

            </div>

            <!-- Item 6 -->
            <div class="col-12 col-md-6 col-lg-4 wow fadeInUp">

                <div class="ve-gallery-card">

                    <div class="ve-gallery-img bg-img"
                        style="background-image:url({{ asset('img/gallery/6.jpg') }});">

                        <div class="ve-gallery-overlay">

                            <a href="{{ asset('img/gallery/6.jpg') }}"
                                class="gallery-img">

                                <i class="fa fa-search-plus"></i>

                            </a>

                        </div>

                    </div>

                    <div class="ve-gallery-body">

                        <span class="ve-gallery-category">
                            EKSTRAKURIKULER
                        </span>

                        <h5>
                            Lomba Kaligrafi
                        </h5>

                        <p>
                            Pengembangan bakat dan kreativitas santri melalui lomba kaligrafi.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection