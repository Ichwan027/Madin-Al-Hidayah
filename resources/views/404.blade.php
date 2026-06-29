@extends('layouts.landing-page')

@section('title','404')

@section('content')

<section class="ve-section">

    <div class="container text-center">

        <h1 style="font-size:120px;">

            404

        </h1>

        <h3>

            Halaman Tidak Ditemukan

        </h3>

        <p>

            Halaman yang Anda cari tidak tersedia atau telah dipindahkan.

        </p>

        <a href="{{ route('index') }}"
           class="btn btn-primary">

            Kembali ke Beranda

        </a>

    </div>

</section>

@endsection