@extends('layouts.dashboard')

@section('content')

<div class="page-heading">

    <div class="d-flex justify-content-between align-items-center mb-3">

        <h3>Data Artikel</h3>

        <a href="{{ route('artikel-create') }}"
           class="btn btn-primary">

            <i class="bi bi-plus-circle"></i>
            Tambah Artikel

        </a>

    </div>

</div>

<div class="card">

    <div class="card-header">

        <h5>Daftar Artikel Madrasah</h5>

    </div>

    <div class="card-body">

        <div class="table-responsive">

            <table class="table table-bordered table-hover align-middle">

                <thead class="table-dark">

                    <tr>

                        <th width="5%">No</th>

                        <th width="10%">Thumbnail</th>

                        <th>Kategori</th>

                        <th>Judul Artikel</th>

                        <th>Penulis</th>

                        <th>Tanggal</th>

                        <th>Status</th>

                        <th width="23%">Aksi</th>

                    </tr>

                </thead>

                <tbody>

                    @forelse ($artikels as $artikel)

                        <tr>

                            <td>

                                {{ $loop->iteration + ($artikels->currentPage()-1) * $artikels->perPage() }}

                            </td>

                            <td>

                                @if($artikel->thumbnail)

                                    <img src="{{ asset('uploads/artikel/'.$artikel->thumbnail) }}"
                                         width="90"
                                         class="img-thumbnail">

                                @else

                                    <span class="text-muted">
                                        Tidak ada
                                    </span>

                                @endif

                            </td>

                            <td>

                                <span class="badge bg-success">

                                    {{ $artikel->kategori }}

                                </span>

                            </td>

                            <td>

                                {{ $artikel->judul }}

                            </td>

                            <td>

                                {{ $artikel->penulis }}

                            </td>

                            <td>

                                {{ $artikel->created_at->format('d M Y') }}

                            </td>

                            <td>

                                @if($artikel->status == 'Publish')

                                    <span class="badge bg-primary">

                                        Publish

                                    </span>

                                @else

                                    <span class="badge bg-warning text-dark">

                                        Draft

                                    </span>

                                @endif

                            </td>

                            <td>

                                <a href="{{ route('artikel-show',$artikel->id) }}"
                                   class="btn btn-info btn-sm">

                                    <i class="bi bi-eye"></i>

                                </a>

                                <a href="{{ route('artikel-edit',$artikel->id) }}"
                                   class="btn btn-warning btn-sm">

                                    <i class="bi bi-pencil"></i>

                                </a>

                                <form action="{{ route('artikel-delete',$artikel->id) }}"
                                      method="POST"
                                      class="d-inline"
                                      onsubmit="return confirm('Hapus artikel ini?')">

                                    @csrf
                                    @method('DELETE')

                                    <button class="btn btn-danger btn-sm">

                                        <i class="bi bi-trash"></i>

                                    </button>

                                </form>

                            </td>

                        </tr>

                    @empty

                        <tr>

                            <td colspan="8" class="text-center">

                                Belum ada data artikel.

                            </td>

                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

        <div class="mt-3">

            {{ $artikels->links() }}

        </div>

    </div>

</div>

@endsection