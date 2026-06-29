@extends('layouts.dashboard')

@section('title','Tambah Kegiatan Alumni')

@section('content')

<div class="container-fluid">

    <div class="card">

        <div class="card-header">

            <h3 class="card-title">

                Tambah Kegiatan Alumni

            </h3>

        </div>

        <form action="{{ route('kegiatan-alumni-store') }}"
              method="POST"
              enctype="multipart/form-data">

            @csrf

            @include('dashboard.kegiatan-alumni.form')

        </form>

    </div>

</div>

@endsection