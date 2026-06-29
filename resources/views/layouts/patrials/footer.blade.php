<footer class="ve-footer">
    <div class="container">
        <div class="row">
            <!-- Col 1: Brand -->
            <div class="col-12 col-sm-6 col-lg-4 mb-50">
                <div class="ve-footer-brand">

                    <a href="{{ route('index') }}" class="ve-footer-logo">

                        <img src="{{ asset('img/gallery/madin.png') }}" alt="Logo Madrasah" class="ve-footer-logo-img">

                        <div class="ve-footer-logo-text">

                            Madin <strong>AL-HIDAYAH</strong>

                        </div>

                    </a>

                    <p>

                        Membentuk generasi yang berilmu,
                        beriman, dan berakhlakul karimah
                        melalui pendidikan Islam yang
                        berkualitas sejak tahun 2000.

                    </p>

                    <div class="ve-social">

    @if(!empty($profil->facebook))
        <a href="{{ $profil->facebook }}" target="_blank">
            <i class="fa fa-facebook"></i>
        </a>
    @endif

    @if(!empty($profil->instagram))
        <a href="{{ $profil->instagram }}" target="_blank">
            <i class="fa fa-instagram"></i>
        </a>
    @endif

    @if(!empty($profil->youtube))
        <a href="{{ $profil->youtube }}" target="_blank">
            <i class="fa fa-youtube-play"></i>
        </a>
    @endif

    @if(!empty($profil->whatsapp))
        <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $profil->whatsapp) }}"
           target="_blank">
            <i class="fa fa-whatsapp"></i>
        </a>
    @endif

</div>

                </div>
            </div>
            <!-- Col 2: Quick Links -->
            <div class="col-12 col-sm-6 col-lg-2 mb-50">
                <h5 class="ve-footer-title">Quick Links</h5>
                <ul class="ve-footer-links">
                    <li><a href={{ asset('/') }}>Beranda</a></li>
                    <li><a href={{ asset('tentang') }}>Tentang Kami</a></li>
                    <li><a href={{ asset('galeri') }}>Galeri</a></li>
                    <li><a href={{ asset('blog') }}>Artikel</a></li>
                    <li><a href={{ asset('kontak') }}>Kontak</a></li>
                </ul>
            </div>

            <div class="col-12 col-sm-6 col-lg-3 mb-50">
                <h5 class="ve-footer-title">Hubungi Kami</h5>
                <ul class="ve-footer-contact">
                    <li><i class="fa fa-map-marker"></i> {{ $profil->alamat }}</li>
                    <li><i class="fa fa-phone"></i> {{ $profil->telepon }}</li>
                    <li><i class="fa fa-envelope"></i> {{ $profil->email }}</li>
                    <li><i class="fa fa-clock-o"></i> {{ $profil->jam_operasional }}</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Footer Bottom Bar -->
    <!-- Footer Bottom -->
<div class="ve-footer-bottom">
    <div class="container">

        <div class="ve-footer-bottom-inner">

            <p class="mb-0">
                &copy; {{ date('Y') }} <strong>Madrasah Diniyah Al-Hidayah</strong>.
                All Rights Reserved.
            </p>

            <p class="mb-0">
                Developed by
                <strong>Muhammad Ichwan</strong>
            </p>

        </div>

    </div>
</div>
</footer>
