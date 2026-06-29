@extends('layouts.dashboard')

@section('content')

<form action="{{ route('user-update', $user->id) }}"
      method="POST"
      enctype="multipart/form-data">

      @csrf
      @method('PUT')

    @include('dashboard.user-partials')

    {{-- <div class="card mt-4">

        <div class="card-header">

            Foto Saat Ini

        </div>

        <div class="card-body">

            <img src="{{ asset('uploads/user/' . $user->foto) }}"
                 width="200"
                 class="img-thumbnail">

            <br><br>

        </div>

    </div> --}}

    <div class="mt-3">

        <button class="btn btn-warning">

            <i class="bi bi-save"></i>
            Update

        </button>

        <a href="{{ route('dash.user') }}"
           class="btn btn-secondary">

            Kembali

        </a>

    </div>

</form>

@endsection