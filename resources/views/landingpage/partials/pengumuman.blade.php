<section class="ve-section">
    <div class="container">

        <div class="ve-section-header text-center">
            <span class="ve-section-tag">
                Informasi Terbaru
            </span>

            <h2>
                Pengumuman <span>Madrasah</span>
            </h2>

            <p>
                Informasi terbaru mengenai kegiatan dan agenda
                Madrasah Diniyah Al-Hidayah.
            </p>
        </div>

        <div class="row">

            @forelse($pengumumen as $pengumuman)

                <div class="col-lg-4 col-md-6 mb-4">

                    <div class="ve-news-card h-100">

                        <div class="ve-news-date">

                            <i class="fa fa-calendar"></i>

                            {{ \Carbon\Carbon::parse($pengumuman->tanggal)->translatedFormat('d F Y') }}

                        </div>

                        <h4>

                            {{ $pengumuman->judul }}

                        </h4>

                        <p>

                            {{ Str::limit(strip_tags($pengumuman->isi),120) }}

                        </p>

                        <a href="{{ route('pengumuman.detail',$pengumuman->slug) }}">

                            Baca Selengkapnya

                            <i class="fa fa-arrow-right"></i>

                        </a>

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

        <div class="text-center mt-5">

            <a href="{{ route('pengumuman') }}"
               class="ve-btn-primary">

                Lihat Semua Pengumuman

            </a>

        </div>

    </div>
</section>