<header class="ve-header" id="ve-sticky">
    <div class="container-fluid ve-nav-wrap">
        <!-- Logo -->
        <div class="ve-logo">

            <a href="{{ route('index') }}">

                @if ($profil && $profil->logo)
                    <img src="{{ asset('uploads/profil/' . $profil->logo) }}" class="ve-logo-img">
                @else
                    <img src="{{ asset('img/gallery/madin.png') }}" class="ve-logo-img">
                @endif

                <span class="ve-logo-text">

                    {{ $profil->nama_madrasah ?? 'Madrasah Diniyah Al-Hidayah' }}

                </span>

            </a>

        </div>

        <!-- Nav Links -->
        <nav class="ve-nav">
            <ul>
                <li><a href={{ asset('/') }} class="">Beranda</a></li>
                <li class="has-drop">
                    <a href={{ asset('tentang') }}>Tentang Kami</i></a>
                    {{-- <ul class="ve-dropdown">
                            <li><a href={{ asset('about.html') }}>About Us</a></li>
                            <li><a href={{ asset('elements.html') }}>UI Elements</a></li>
                        </ul> --}}
                </li>
                <li><a href={{ asset('galeri') }}>Galeri</a></li>
                <li><a href={{ asset('pengumuman') }}>Pengumuman</a></li>
                <li><a href={{ asset('blog') }}>Blog</a></li>
                <li><a href={{ asset('kegiatan-alumni') }}>Kegiatan Alumni</a></li>
                <li><a href={{ asset('kontak') }}>Kontak</a></li>
            </ul>
        </nav>

        <!-- CTA -->
        {{-- <div class="ve-nav-cta">
            <a href={{ asset('kontak') }} class="ve-cta-btn">Get Started <i class="fa fa-arrow-right"></i></a>
        </div> --}}

        <!-- Mobile Toggle -->
        <button class="ve-toggler" id="ve-toggle">
            <span></span><span></span><span></span>
        </button>
    </div>

    <!-- Mobile Menu -->
    <div class="ve-mobile-menu" id="ve-mobile-menu">
        <ul>
            <li><a href={{ asset('/') }} class="active">Beranda</a></li>
            <li class="has-drop">
                <a href={{ asset('tentang') }}>Tentang Kami</i></a>
                {{-- <ul class="ve-dropdown">
                            <li><a href={{ asset('about.html') }}>About Us</a></li>
                            <li><a href={{ asset('elements.html') }}>UI Elements</a></li>
                        </ul> --}}
            </li>
            <li><a href={{ asset('galeri') }}>Galeri</a></li>
            <li><a href={{ asset('pengumuman') }}>Pengumuman</a></li>
            <li><a href={{ asset('blog') }}>Blog</a></li>
            <li><a href={{ asset('kontak') }}>Kontak</a></li>
        </ul>
    </div>
</header>
