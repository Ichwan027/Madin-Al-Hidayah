@extends('layouts.landing-page')

@section('content')

<section class="ve-page-hero"
    style="background-image:url({{ asset('img/bg-img/24.jpg') }});">

    <div class="ve-page-hero-overlay"></div>

    <div class="container ve-page-hero-content">

        <span class="ve-section-tag">

            KEGIATAN ALUMNI

        </span>

        <h1>

            {{ $kegiatan->judul }}

        </h1>

    </div>

</section>

<section class="ve-section">

    <div class="container">

        <div class="row">

            <div class="col-lg-8">

                @if($kegiatan->cover)

                    <img
                        src="{{ asset('uploads/kegiatan-alumni/'.$kegiatan->cover) }}"
                        class="img-fluid rounded mb-4">

                @endif

                <div class="mb-3 text-muted">

                    <i class="fa fa-calendar"></i>

                    {{ \Carbon\Carbon::parse($kegiatan->tanggal)->translatedFormat('d F Y') }}

                </div>

                {!! $kegiatan->isi !!}

            </div>

            <div class="col-lg-4">

                <div class="ve-sidebar-widget">

                    <h5 class="ve-sidebar-title">

                        Kegiatan Terbaru

                    </h5>

                    @foreach($terbaru as $item)

                        <div class="ve-latest-post mb-3">

                            <a href="{{ route('kegiatan-alumni.detail',$item->slug) }}">

                                {{ $item->judul }}

                            </a>

                            <small class="d-block text-muted">

                                {{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('d F Y') }}

                            </small>

                        </div>

                    @endforeach

                </div>

            </div>

        </div>

    </div>

</section>

@endsection