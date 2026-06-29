@extends('layouts.dashboard')

@section('content')

<div class="page-heading">

    <div class="d-flex justify-content-between align-items-center mb-3">

        <h3>Edit Artikel</h3>

        <a href="{{ route('dash.artikel') }}"
           class="btn btn-secondary">

            <i class="bi bi-arrow-left"></i>
            Kembali

        </a>

    </div>

</div>

<form action="{{ route('artikel-update', $artikel->id) }}"
      method="POST"
      enctype="multipart/form-data">

    @csrf
    @method('PUT')

    @include('dashboard.artikel-partials')

    <div class="card mt-4">

        <div class="card-header">

            <h5>Thumbnail Saat Ini</h5>

        </div>

        <div class="card-body">

            @if($artikel->thumbnail)

                <img src="{{ asset('uploads/artikel/'.$artikel->thumbnail) }}"
                     class="img-thumbnail"
                     width="250">

            @else

                <div class="alert alert-warning mb-0">

                    Thumbnail belum tersedia.

                </div>

            @endif

        </div>

    </div>

    <div class="mt-3">

        <button type="submit"
                class="btn btn-warning">

            <i class="bi bi-save"></i>
            Update

        </button>

        <button type="reset"
                class="btn btn-secondary">

            Reset

        </button>

        <a href="{{ route('dash.artikel') }}"
           class="btn btn-danger">

            Batal

        </a>

    </div>

</form>

@endsection