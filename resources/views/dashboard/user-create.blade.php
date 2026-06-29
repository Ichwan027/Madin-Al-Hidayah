@extends('layouts.dashboard')

@section('content')
    <form action="{{ route('user-store') }}" method="POST" enctype="multipart/form-data">

        @csrf

        @include('dashboard.user-partials')

        <div class="mt-3">

            <button class="btn btn-primary">

                <i class="bi bi-save"></i>
                Simpan

            </button>

            <button class="btn btn-warning">

                Reset

            </button>

            <a href="{{ route('dash.user') }}" class="btn btn-secondary">

                Batal

            </a>

        </div>

    </form>
@endsection
