<section class="ve-section">

    <div class="container">

        <div class="ve-section-header text-center">

            <span class="ve-section-tag">

                Alumni

            </span>

            <h2>

                Kegiatan <span>Alumni</span>

            </h2>

            <p>

                Dokumentasi kegiatan dan aktivitas Alumni Madrasah Diniyah Al-Hidayah.

            </p>

        </div>

        <div class="row">

            @forelse($kegiatans as $item)

                <div class="col-lg-4 col-md-6 mb-4">

                    <div class="ve-insight-card h-100">

                        <div class="ve-insight-img bg-img"
                            style="background-image:url('{{ $item->cover ? asset('uploads/kegiatan-alumni/'.$item->cover) : asset('img/bg-img/10.jpg') }}')">
                        </div>

                        <div class="ve-insight-body">

                            <span class="ve-insight-cat">

                                {{ strtoupper($item->status) }}

                            </span>

                            <h5>

                                <a href="{{ route('kegiatan-alumni.detail',$item->slug) }}">

                                    {{ $item->judul }}

                                </a>

                            </h5>

                            <p>

                                {{ \Illuminate\Support\Str::limit(strip_tags($item->isi),100) }}

                            </p>

                            <div class="ve-insight-meta">

                                <span>

                                    <i class="fa fa-calendar"></i>

                                    {{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('d F Y') }}

                                </span>

                                <a href="{{ route('kegiatan-alumni.detail',$item->slug) }}">

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

                        Belum ada kegiatan alumni.

                    </div>

                </div>

            @endforelse

        </div>

        <div class="text-center mt-4">

            <a href="{{ route('kegiatan-alumni') }}"
               class="btn btn-primary">

                Lihat Semua Kegiatan Alumni

            </a>

        </div>

    </div>

</section>