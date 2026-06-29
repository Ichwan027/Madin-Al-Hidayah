@extends('layouts.dashboard')

@section('content')

<div class="page-heading">

    <div class="d-flex justify-content-between align-items-center mb-3">

        <h3>Tambah Galeri</h3>

        <a href="{{ route('dash.galeri') }}" class="btn btn-secondary">

            <i class="bi bi-arrow-left"></i>
            Kembali

        </a>

    </div>

</div>


<form action="{{ route('galeri-store') }}"
      method="POST"
      enctype="multipart/form-data">

    @csrf

    @include('dashboard.galeri-partials')

    <div class="mt-4">

        <button type="submit"
                class="btn btn-primary">

            <i class="bi bi-save"></i>
            Simpan

        </button>

        <button type="reset"
                class="btn btn-warning">

            <i class="bi bi-arrow-clockwise"></i>
            Reset

        </button>

        <a href="{{ route('dash.galeri') }}"
           class="btn btn-secondary">

            Batal

        </a>

    </div>

</form>

@endsection