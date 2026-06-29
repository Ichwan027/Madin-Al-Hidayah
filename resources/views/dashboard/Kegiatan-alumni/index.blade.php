@extends('layouts.dashboard')

@section('title','Kegiatan Alumni')

@section('content')

<div class="container-fluid">

    <div class="card">

        <div class="card-header">

            <div class="d-flex justify-content-between align-items-center">

                <h3 class="card-title">

                    Data Kegiatan Alumni

                </h3>

                <a href="{{ route('kegiatan-alumni-create') }}"
                   class="btn btn-primary">

                    <i class="fas fa-plus"></i>

                    Tambah

                </a>

            </div>

        </div>

        <div class="card-body">

            <form method="GET">

                <div class="row mb-3">

                    <div class="col-md-4">

                        <input
                            type="text"
                            name="search"
                            value="{{ request('search') }}"
                            class="form-control"
                            placeholder="Cari judul kegiatan...">

                    </div>

                    <div class="col-md-2">

                        <button class="btn btn-secondary">

                            Cari

                        </button>

                    </div>

                </div>

            </form>

            <div class="table-responsive">

                <table class="table table-bordered table-hover">

                    <thead>

                        <tr>

                            <th width="60">

                                No

                            </th>

                            <th width="120">

                                Cover

                            </th>

                            <th>

                                Judul

                            </th>

                            <th width="140">

                                Tanggal

                            </th>

                            <th width="120">

                                Status

                            </th>

                            <th width="180">

                                Aksi

                            </th>

                        </tr>

                    </thead>

                    <tbody>

                        @forelse($kegiatan as $item)

                            <tr>

                                <td>

                                    {{ $loop->iteration + ($kegiatan->firstItem()-1) }}

                                </td>

                                <td>

                                    @if($item->cover)

                                        <img
                                            src="{{ asset('uploads/kegiatan-alumni/'.$item->cover) }}"
                                            width="100"
                                            class="img-thumbnail">

                                    @endif

                                </td>

                                <td>

                                    {{ $item->judul }}

                                </td>

                                <td>

                                    {{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('d F Y') }}

                                </td>

                                <td>

                                    @if($item->status=='Publish')

                                        <span class="badge badge-success">

                                            Publish

                                        </span>

                                    @else

                                        <span class="badge badge-secondary">

                                            Draft

                                        </span>

                                    @endif

                                </td>

                                <td>

    <a href="{{ route('kegiatan-alumni-edit', $item->id) }}"
       class="btn btn-warning btn-sm">

        <i class="bi bi-pencil"></i>

    </a>

    <form action="{{ route('kegiatan-alumni-delete', $item->id) }}"
          method="POST"
          class="d-inline">

        @csrf
        @method('DELETE')

        <button type="submit"
                class="btn btn-danger btn-sm"
                onclick="return confirm('Hapus data ini?')">

            <i class="bi bi-trash"></i>

        </button>

    </form>

</td>

                            </tr>

                        @empty

                            <tr>

                                <td colspan="6"
                                    class="text-center">

                                    Belum ada data.

                                </td>

                            </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

            <div class="mt-3">

                {{ $kegiatan->links() }}

            </div>

        </div>

    </div>

</div>

@endsection