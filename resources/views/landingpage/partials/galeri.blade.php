<section class="ve-section bg-light">

    <div class="container">

        <div class="ve-section-header text-center">

            <span class="ve-section-tag">
                Dokumentasi
            </span>

            <h2>

                Galeri <span>Madrasah</span>

            </h2>

            <p>

                Dokumentasi berbagai kegiatan Madrasah Diniyah Al-Hidayah.

            </p>

        </div>

        <div class="row">

            @forelse($galeris as $galeri)

                <div class="col-lg-4 col-md-6 mb-4">

                    <div class="ve-gallery-card">

                        <div class="ve-gallery-image">

                            <img src="{{ asset('uploads/galeri/'.$galeri->cover) }}"
                                 alt="{{ $galeri->judul }}">

                            <div class="ve-gallery-overlay">

                                <a href="{{ route('galeri.detail',$galeri->id) }}"
                                   class="ve-gallery-btn">

                                    Lihat Galeri

                                </a>

                            </div>

                        </div>

                        <div class="ve-gallery-content">

                            <span class="ve-gallery-category">

                                {{ $galeri->kategori }}

                            </span>

                            <h4>

                                {{ $galeri->judul }}

                            </h4>

                            <p>

                                {{ Str::limit($galeri->deskripsi,90) }}

                            </p>

                            <small>

                                <i class="fa fa-image"></i>

                                {{ $galeri->fotos->count() }} Foto

                            </small>

                        </div>

                    </div>

                </div>

            @empty

                <div class="col-12">

                    <div class="alert alert-warning text-center">

                        Belum ada galeri.

                    </div>

                </div>

            @endforelse

        </div>

        <div class="text-center mt-5">

            <a href="{{ route('galeri') }}"
               class="ve-btn-primary">

                Lihat Semua Galeri

            </a>

        </div>

    </div>

</section>