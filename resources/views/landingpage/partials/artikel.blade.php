<section class="ve-section">

    <div class="container">

        <div class="ve-section-header text-center">

            <span class="ve-section-tag">

                Latest Insights

            </span>

            <h2>

                Artikel <span>Terbaru</span>

            </h2>

            <p>

                Temukan berita, informasi, dan kegiatan terbaru Madrasah Diniyah Al-Hidayah.

            </p>

        </div>

        <div class="row">

            @forelse($artikels as $artikel)

                <div class="col-lg-4 col-md-6 mb-4">

                    <div class="ve-blog-card">

                        <div class="ve-blog-image">

                            @if($artikel->thumbnail)

                                <img src="{{ asset('uploads/artikel/'.$artikel->thumbnail) }}"
                                     alt="{{ $artikel->judul }}">

                            @else

                                <img src="{{ asset('img/bg-img/10.jpg') }}"
                                     alt="No Image">

                            @endif

                        </div>

                        <div class="ve-blog-content">

                            <span class="ve-blog-category">

                                {{ $artikel->kategori }}

                            </span>

                            <h4>

                                {{ $artikel->judul }}

                            </h4>

                            <div class="ve-blog-meta">

                                <small>

                                    <i class="fa fa-user"></i>

                                    {{ $artikel->penulis }}

                                </small>

                                <small>

                                    <i class="fa fa-calendar"></i>

                                    {{ $artikel->created_at->format('d M Y') }}

                                </small>

                            </div>

                            <p>

                                {{ Str::limit(strip_tags($artikel->isi),120) }}

                            </p>

                            <a href="{{ route('blog.detail',$artikel->slug) }}"
                               class="ve-blog-btn">

                                Baca Selengkapnya

                                <i class="fa fa-arrow-right"></i>

                            </a>

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

        <div class="text-center mt-5">

            <a href="{{ route('blog') }}"
               class="ve-btn-primary">

                Lihat Semua Artikel

            </a>

        </div>

    </div>

</section>