@extends('layouts.dashboard')

@section('title','Edit Kegiatan Alumni')

@section('content')

<div class="container-fluid">

    <div class="card">

        <div class="card-header">

            <h3 class="card-title">

                Edit Kegiatan Alumni

            </h3>

        </div>

        <form action="{{ route('kegiatan-alumni-update',$kegiatan_alumni->id) }}"
              method="POST"
              enctype="multipart/form-data">

            @csrf
            @method('PUT')

            @include('dashboard.kegiatan-alumni.form')

        </form>

    </div>

</div>

@endsection