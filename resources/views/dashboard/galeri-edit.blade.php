@extends('layouts.dashboard')

@section('content')

<div class="page-heading">

    <h3>Edit Galeri</h3>

</div>

<form action="{{ route('galeri-update', $galeri->id) }}"
      method="POST"
      enctype="multipart/form-data">

    @csrf
    @method('PUT')

    @include('dashboard.galeri-partials')

    <div class="card mt-4">

   <div class="card">

    <div class="card-header">
        <h5>Foto Yang Sudah Diupload</h5>
    </div>

    </form>

    <div class="card-body">

        <div class="row">

            @forelse($galeri->fotos as $foto)

                <div class="col-lg-2 col-md-3 col-6 mb-4">

                    <div class="card">

                        <img src="{{ asset('uploads/galeri/'.$foto->foto) }}"
                             class="card-img-top"
                             style="height:120px; object-fit:cover;">

                        <div class="card-body p-2 text-center">

                            <form action="{{ route('galeri-foto-delete', $foto->id) }}"
                                  method="POST"
                                  cass="d-inline">

                                @csrf
                                @method('DELETE')

                                <button class="btn btn-danger btn-sm"
                                    onclick="return confirm('Hapus foto ini ?')">

                                    <i class="bi bi-trash"></i>
                                    Hapus

                                </button>

                            </form>

                        </div>

                    </div>

                </div>

            @empty

                <div class="col-12">

                    <div class="alert alert-warning">

                        Belum ada foto yang diupload.

                    </div>

                </div>

            @endforelse

        </div>

    </div>

</div>

</div>

    <div class="mt-3">

        <button class="btn btn-warning">

            <i class="bi bi-save"></i>
            Update

        </button>

        <a href="{{ route('dash.galeri') }}"
           class="btn btn-secondary">

            Kembali

        </a>

    </div>

@endsection

