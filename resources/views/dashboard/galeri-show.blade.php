@extends('layouts.dashboard')

@section('content')

<div class="page-heading">
    <h3>Detail Galeri</h3>
</div>

<div class="card">

    <div class="card-body">

        <table class="table">

            <tr>
                <th width="200">Kategori</th>
                <td>Kegiatan</td>
            </tr>

            <tr>
                <th>Judul</th>
                <td>Haflah Akhirussanah 2026</td>
            </tr>

            <tr>
                <th>Deskripsi</th>
                <td>
                    Dokumentasi kegiatan Haflah Akhirussanah Madrasah Diniyah Al-Hidayah Tahun 2026.
                </td>
            </tr>

            <tr>
                <th>Cover</th>
                <td>
                    <img src="{{ asset('img/gallery/1.jpg') }}"
                         class="img-thumbnail"
                         width="250">
                </td>
            </tr>

        </table>

    </div>

</div>

<div class="card">

    <div class="card-header">
        <h5>Foto Galeri</h5>
    </div>

    <div class="card-body">

        <div class="row">

            <div class="col-md-3 mb-3">
                <img src="{{ asset('img/gallery/1.jpg') }}"
                     class="img-fluid rounded">
            </div>

            <div class="col-md-3 mb-3">
                <img src="{{ asset('img/gallery/2.jpg') }}"
                     class="img-fluid rounded">
            </div>

            <div class="col-md-3 mb-3">
                <img src="{{ asset('img/gallery/3.jpg') }}"
                     class="img-fluid rounded">
            </div>

            <div class="col-md-3 mb-3">
                <img src="{{ asset('img/gallery/4.jpg') }}"
                     class="img-fluid rounded">
            </div>

        </div>

    </div>

</div>

<a href="{{ route('dash.galeri') }}" class="btn btn-secondary">
    Kembali
</a>

@endsection