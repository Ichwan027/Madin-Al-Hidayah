@extends('layouts.landing-page')
@section('content')

    <section class="ve-page-hero" style="background-image:url(img/bg-img/22.jpg);">
        <div class="ve-page-hero-overlay"></div>
        <div class="container ve-page-hero-content">
            <span class="ve-section-tag">Hubungi Kami</span>
            <h1>Kami Siap Membantu <br><span>Perjalanan Pendidikan Putra Putri Anda</span></h1>
            <nav aria-label="breadcrumb"><ol class="ve-breadcrumb"><li><a href="{{ asset('/') }}">Beranda</a></li><li class="active">Kontak</li></ol></nav>
        </div>
    </section>

    <section class="ve-contact-cards-section">
        <div class="container">
            <div class="ve-contact-cards-grid">
                <div class="ve-contact-info-card wow fadeInUp" data-wow-delay="100ms"><div class="ve-ci-icon"><i class="fa fa-map-marker"></i></div><h5>Kunjungi Madrasah Kami</h5><p>{{ $profil->alamat }}</p></div>
                <div class="ve-contact-info-card wow fadeInUp" data-wow-delay="250ms"><div class="ve-ci-icon"><i class="fa fa-phone"></i></div><h5>Hubungi Kami</h5><p>{{ $profil->telepon }}</p></div>
                <div class="ve-contact-info-card wow fadeInUp" data-wow-delay="400ms"><div class="ve-ci-icon"><i class="fa fa-envelope"></i></div><h5>Email Kami</h5><p>{{ $profil->email }}<br><small>Kami Akan Membalas Dalam Waktu 24 Jam</small></p></div>
            </div>
        </div>
    </section>

    <section class="ve-section ve-contact-section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-7 wow fadeInLeft" data-wow-delay="100ms">
                    <div class="ve-contact-form-wrap">
                        <span class="ve-section-tag">Kirim Pesan</span>
                        <h2>Pesan <span>Konsultasi Gratis</span></h2>
                        <p>Isi formulir ini dan salah satu penasihat kami akan menghubungi Anda dalam satu hari kerja.</p>
                        <form class="ve-contact-form" action="#" method="post">
                            <div class="ve-form-row">
                                <div class="ve-form-group"><label>Nama Lengkap</label><input type="text" placeholder="Your full name" required></div>
                                <div class="ve-form-group"><label>Alamat Email</label><input type="email" placeholder="Your email" required></div>
                            </div>
                            <div class="ve-form-row">
                                <div class="ve-form-group"><label>Nomor Telepon</label><input type="tel" placeholder="Your phone" required></div>
                                <div class="ve-form-group"><label>Pilih Keperluan</label>
                                    <select>
                                        <option>Pilih Program</option>
                                        <option>Tahfidz Qur'an</option>
                                        <option>Madrasah Diniyah</option>
                                        <option>Program Remaja</option>
                                        <option>Ekstrakurikuler</option>
                                        <option>Belajar Al-Miftah</option>
                                    </select>
                                </div>
                            </div>
                            <div class="ve-form-group"><label>Pesan Anda</label><textarea rows="5" placeholder="Tuliskan Pesan Anda Disini"></textarea></div>
                            <button type="submit" class="ve-btn-primary">Kirim Pesan <i class="fa fa-paper-plane"></i></button>
                        </form>
                    </div>
                </div>
                <div class="col-12 col-lg-5 wow fadeInRight" data-wow-delay="200ms">
                    <div class="ve-contact-aside">
                        <div class="ve-ca-box">
                            <h4>Mengapa Memilih Kami ?</h4>
                            <ul class="ve-ca-list">
                                <li><i class="fa fa-check-circle"></i> Pendidikan Agama Yang Berkualitas Dan Berkesinambungan</li>
                                <li><i class="fa fa-check-circle"></i> Ustadz Dan Ustadzah Yang Kompeten Serta Berpengalaman</li>
                                <li><i class="fa fa-check-circle"></i> Membentuk Generasi Berakhlakul Karimah</li>
                                <li><i class="fa fa-check-circle"></i> Pembelajaran Al-Qur'an dan Ilmu Agama Yang Terarah</li>
                                <li><i class="fa fa-check-circle"></i> Kegiatan Islami Dan Pembinaan Karakter Santri</li>
                            </ul>
                        </div>
                        <div class="ve-ca-hours">
                            <h5><i class="fa fa-clock-o"></i> Jam Operasional</h5>
                            <ul>
                                <li><span>Senin - Sabtu</span><strong>15.30 - 20.00</strong></li>
                                <li><span>Minggu</span><strong>Tutup</strong></li>
                            </ul>
                        </div>
                        {{-- <div class="ve-ca-social">
                            <h5>Terhubung Dengan Kami</h5>
                            <div class="ve-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection