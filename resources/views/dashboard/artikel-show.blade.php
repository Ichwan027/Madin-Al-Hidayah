@extends('layouts.dashboard')

@section('content')

<div class="page-heading">

    <div class="d-flex justify-content-between align-items-center mb-3">

        <h3>Detail Artikel</h3>

        <a href="{{ route('dash.artikel') }}"
           class="btn btn-secondary">

            <i class="bi bi-arrow-left"></i>
            Kembali

        </a>

    </div>

</div>

<div class="card shadow-sm">

    <div class="card-body">

        {{-- Thumbnail --}}
        @if($artikel->thumbnail)

            <div class="text-center mb-4">

                <img src="{{ asset('uploads/artikel/'.$artikel->thumbnail) }}"
                     class="img-fluid rounded shadow"
                     style="max-height:420px; object-fit:cover;">

            </div>

        @endif

        {{-- Kategori --}}
        <div class="text-center mb-3">

            <span class="badge bg-success fs-6">

                {{ $artikel->kategori }}

            </span>

        </div>

        {{-- Judul --}}
        <h2 class="text-center fw-bold mb-2">

            {{ $artikel->judul }}

        </h2>

        {{-- Penulis --}}
        <p class="text-center text-muted mb-4">

            <i class="bi bi-person"></i>

            {{ $artikel->penulis }}

            &nbsp; | &nbsp;

            <i class="bi bi-calendar"></i>

            {{ $artikel->created_at->format('d F Y') }}

        </p>

        <hr>

        <div class="row mb-4">

            <div class="col-md-3">

                <strong>Status</strong>

            </div>

            <div class="col-md-9">

                @if($artikel->status == 'Publish')

                    <span class="badge bg-primary">

                        Publish

                    </span>

                @else

                    <span class="badge bg-warning text-dark">

                        Draft

                    </span>

                @endif

            </div>

        </div>

        <hr>

        <h5 class="mb-3">

            Isi Artikel

        </h5>

        <div style="text-align:justify; line-height:2; font-size:16px;">

            {!! nl2br(e($artikel->isi)) !!}

        </div>

    </div>

    <div class="card-footer text-end">

        <a href="{{ route('artikel-edit',$artikel->id) }}"
           class="btn btn-warning">

            <i class="bi bi-pencil"></i>

            Edit

        </a>

        <a href="{{ route('dash.artikel') }}"
           class="btn btn-secondary">

            <i class="bi bi-arrow-left"></i>

            Kembali

        </a>

    </div>

</div>

@endsection