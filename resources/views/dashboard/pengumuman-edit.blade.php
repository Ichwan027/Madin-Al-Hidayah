@extends('layouts.dashboard')

@section('content')

<div class="page-heading">

    <div class="d-flex justify-content-between align-items-center mb-3">

        <h3>Edit Pengumuman</h3>

        <a href="{{ route('dash.pengumuman') }}"
           class="btn btn-secondary">

            <i class="bi bi-arrow-left"></i>
            Kembali

        </a>

    </div>

</div>

<form action="{{ route('pengumuman-update',$pengumuman->id) }}"
      method="POST">

    @csrf
    @method('PUT')

    @include('dashboard.pengumuman-partials')

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

        <a href="{{ route('dash.pengumuman') }}"
           class="btn btn-danger">

            Batal

        </a>

    </div>

</form>

@endsection