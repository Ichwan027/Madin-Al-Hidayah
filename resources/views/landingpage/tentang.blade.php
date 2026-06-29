@extends('layouts.landing-page')
@section('content')
    <section class="ve-page-hero" style="background-image:url(img/bg-img/22.jpg);">
        <div class="ve-page-hero-overlay"></div>
        <div class="container ve-page-hero-content">
            <span class="ve-section-tag">Tentang Kami</span>
            <h1>Selamat Datang di <br><span>Madrasah Diniyah Al-Hidayah</span></h1>
            <nav aria-label="breadcrumb">
                <ol class="ve-breadcrumb">
                    <li><a href="{{ asset('/') }}">Beranda</a></li>
                    <li class="active">Tentang</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- ABOUT -->
    <section class="ve-section">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-12 col-lg-6 wow fadeInLeft" data-wow-delay="100ms">
                    <div class="ve-about-img-stack">
                        <div class="ve-about-img-1 bg-img" style="background-image:url(img/bg-img/14.jpg);">
                        </div>

                        <div class="ve-about-img-2 bg-img" style="background-image:url(img/bg-img/5.jpg);">
                        </div>

                        <div class="ve-about-ribbon">
                            <strong>24+</strong>
                            <span>Tahun Pengabdian</span>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6 wow fadeInRight" data-wow-delay="200ms">
                    <div class="ve-about-text">

                        <span class="ve-section-tag">
                            Tentang Madrasah
                        </span>

                        <h2>
                            Membentuk Generasi
                            <span>Berilmu dan Berakhlakul Karimah</span>
                        </h2>

                        <p class="ve-lead">
                            Madrasah Diniyah Al-Hidayah berkomitmen memberikan pendidikan Islam yang berkualitas melalui
                            pembelajaran Al-Qur'an, ilmu agama, dan pembinaan akhlak mulia.
                        </p>
                        <div class="ve-about-features">
                            <div class="ve-af-item">
                                <i class="fa fa-check"></i>
                                <span>Pembelajaran Al-Qur'an dan Tahfidz</span>
                            </div>

                            <div class="ve-af-item">
                                <i class="fa fa-check"></i>
                                <span>Ustadz dan Ustadzah Berpengalaman</span>
                            </div>

                            <div class="ve-af-item">
                                <i class="fa fa-check"></i>
                                <span>Pembinaan Akhlakul Karimah</span>
                            </div>

                            <div class="ve-af-item">
                                <i class="fa fa-check"></i>
                                <span>Lingkungan Belajar Islami dan Nyaman</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- VISI MISI -->
    <section class="ve-mvv-section">
        <div class="container">

            <div class="ve-section-header text-center">
                <span class="ve-section-tag">
                    Landasan Pendidikan
                </span>

                <h2>
                    Visi, Misi dan
                    <span>Nilai-Nilai Madrasah</span>
                </h2>
            </div>

            <div class="ve-mvv-grid">

                <div class="ve-mvv-card wow fadeInUp" data-wow-delay="100ms">
                    <div class="ve-mvv-icon">
                        <i class="fa fa-bullseye"></i>
                    </div>

                    <h4>Misi</h4>

                    <p>
                        Menyelenggarakan pendidikan Islam yang berkualitas, meningkatkan pemahaman Al-Qur'an serta membina
                        karakter santri yang berakhlakul karimah.
                    </p>
                </div>

                <div class="ve-mvv-card wow fadeInUp" data-wow-delay="250ms">
                    <div class="ve-mvv-icon">
                        <i class="fa fa-eye"></i>
                    </div>

                    <h4>Visi</h4>

                    <p>
                        Menjadi lembaga pendidikan Islam yang unggul dalam membentuk generasi Qurani yang berilmu, beriman,
                        dan berakhlakul karimah.
                    </p>
                </div>

                <div class="ve-mvv-card wow fadeInUp" data-wow-delay="400ms">
                    <div class="ve-mvv-icon">
                        <i class="fa fa-heart"></i>
                    </div>

                    <h4>Nilai-Nilai</h4>

                    <p>
                        Keikhlasan, kedisiplinan, tanggung jawab, ukhuwah Islamiyah dan semangat menuntut ilmu menjadi
                        landasan pendidikan Madrasah Diniyah Al-Hidayah.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!-- TENAGA PENGAJAR -->
    <section class="ve-section ve-team-section">
        <div class="container">

            <div class="ve-section-header text-center">

                <span class="ve-section-tag">
                    Tenaga Pengajar
                </span>

                <h2>
                    Ustadz dan
                    <span>Ustadzah</span>
                </h2>

                <p>
                    Didukung oleh tenaga pengajar yang berpengalaman dan berdedikasi dalam mendidik para santri.
                </p>

            </div>

            <div class="row">

                <div class="col-12 col-sm-6 col-lg-3 wow fadeInUp" data-wow-delay="100ms">
                    <div class="ve-team-card">
                        <div class="ve-team-img bg-img" style="background-image:url(img/bg-img/15.jpg);">
                        </div>

                        <div class="ve-team-info">
                            <h5>KH. Ahmad Fauzi</h5>
                            <span>Pimpinan Madrasah</span>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-3 wow fadeInUp" data-wow-delay="100ms">
                    <div class="ve-team-card">
                        <div class="ve-team-img bg-img" style="background-image:url(img/bg-img/15.jpg);">
                        </div>

                        <div class="ve-team-info">
                            <h5>KH. Ahmad Fauzi</h5>
                            <span>Pimpinan Madrasah</span>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-3 wow fadeInUp" data-wow-delay="100ms">
                    <div class="ve-team-card">
                        <div class="ve-team-img bg-img" style="background-image:url(img/bg-img/15.jpg);">
                        </div>

                        <div class="ve-team-info">
                            <h5>KH. Ahmad Fauzi</h5>
                            <span>Pimpinan Madrasah</span>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-3 wow fadeInUp" data-wow-delay="100ms">
                    <div class="ve-team-card">
                        <div class="ve-team-img bg-img" style="background-image:url(img/bg-img/15.jpg);">
                        </div>

                        <div class="ve-team-info">
                            <h5>KH. Ahmad Fauzi</h5>
                            <span>Pimpinan Madrasah</span>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-3 wow fadeInUp" data-wow-delay="100ms">
                    <div class="ve-team-card">
                        <div class="ve-team-img bg-img" style="background-image:url(img/bg-img/15.jpg);">
                        </div>

                        <div class="ve-team-info">
                            <h5>KH. Ahmad Fauzi</h5>
                            <span>Pimpinan Madrasah</span>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-3 wow fadeInUp" data-wow-delay="100ms">
                    <div class="ve-team-card">
                        <div class="ve-team-img bg-img" style="background-image:url(img/bg-img/15.jpg);">
                        </div>

                        <div class="ve-team-info">
                            <h5>KH. Ahmad Fauzi</h5>
                            <span>Pimpinan Madrasah</span>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-3 wow fadeInUp" data-wow-delay="200ms">
                    <div class="ve-team-card">
                        <div class="ve-team-img bg-img" style="background-image:url(img/bg-img/16.jpg);">
                        </div>

                        <div class="ve-team-info">
                            <h5>Ustadz Muhammad Ridwan</h5>
                            <span>Pengajar Tahfidz Al-Qur'an</span>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-3 wow fadeInUp" data-wow-delay="300ms">
                    <div class="ve-team-card">
                        <div class="ve-team-img bg-img" style="background-image:url(img/bg-img/17.jpg);">
                        </div>

                        <div class="ve-team-info">
                            <h5>Ustadzah Siti Aminah</h5>
                            <span>Pengajar Fiqih dan Akhlak</span>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-3 wow fadeInUp" data-wow-delay="400ms">
                    <div class="ve-team-card">
                        <div class="ve-team-img bg-img" style="background-image:url(img/bg-img/18.jpg);">
                        </div>

                        <div class="ve-team-info">
                            <h5>Ustadz Abdullah</h5>
                            <span>Pengajar Kitab Kuning</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- COUNTER -->
    <section class="ve-counter-section">
        <div class="container">

            <div class="ve-counter-grid">

                <div class="ve-counter-item wow fadeInUp" data-wow-delay="100ms">
                    <i class="fa fa-users"></i>
                    <strong class="counter" data-count="420">0</strong>
                    <span>+</span>
                    <p>Santri dan Santriwati</p>
                </div>

                <div class="ve-counter-item wow fadeInUp" data-wow-delay="200ms">
                    <i class="fa fa-graduation-cap"></i>
                    <strong class="counter" data-count="25">0</strong>
                    <span>+</span>
                    <p>Ustadz dan Ustadzah</p>
                </div>

                <div class="ve-counter-item wow fadeInUp" data-wow-delay="300ms">
                    <i class="fa fa-university"></i>
                    <strong class="counter" data-count="24">0</strong>
                    <span>+</span>
                    <p>Tahun Mengabdi</p>
                </div>

                <div class="ve-counter-item wow fadeInUp" data-wow-delay="400ms">
                    <i class="fa fa-trophy"></i>
                    <strong class="counter" data-count="18">0</strong>
                    <span>+</span>
                    <p>Prestasi dan Penghargaan</p>
                </div>

            </div>

        </div>
    </section>
@endsection
