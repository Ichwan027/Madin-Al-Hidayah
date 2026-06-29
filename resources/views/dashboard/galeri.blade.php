@extends('layouts.dashboard')

@section('content')

<div class="page-heading">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3>Data Galeri</h3>

        <a href="{{ route('galeri-create') }}" class="btn btn-primary">
            <i class="bi bi-plus-circle"></i>
            Tambah Galeri
        </a>
    </div>
</div>

<div class="card">

    <div class="card-header">
        <h5>Daftar Galeri Madrasah</h5>
    </div>

    <div class="card-body">

        <div class="table-responsive">

            <table class="table table-bordered table-hover">

                <thead class="table-dark">

                    <tr>
                        <th width="5%">No</th>
                        <th width="12%">Cover</th>
                        <th>Kategori</th>
                        <th>Judul Galeri</th>
                        <th>Deskripsi</th>
                        <th>Jumlah Foto</th>
                        <th width="20%">Aksi</th>
                    </tr>

                </thead>

                <tbody>

                    @forelse ($galeris as $galeri)

                        <tr>

                            <td>
                                {{ $loop->iteration }}
                            </td>

                            <td>

                                @if ($galeri->cover)

                                    <img src="{{ asset('uploads/galeri/'.$galeri->cover) }}"
                                         width="100"
                                         class="img-thumbnail">

                                @else

                                    -

                                @endif

                            </td>

                            <td>

                                <span class="badge bg-primary">
                                    {{ $galeri->kategori }}
                                </span>

                            </td>

                            <td>
                                {{ $galeri->judul }}
                            </td>

                            <td>
                                {{ Str::limit($galeri->deskripsi,50) }}
                            </td>

                            <td>
                                {{ $galeri->fotos->count() }}
                            </td>

                            <td>

                                <a href="{{ route('galeri-show',$galeri->id) }}"
                                   class="btn btn-info btn-sm">

                                    <i class="bi bi-eye"></i>

                                </a>

                                <a href="{{ route('galeri-edit',$galeri->id) }}"
                                   class="btn btn-warning btn-sm">

                                    <i class="bi bi-pencil"></i>

                                </a>

                                <form action="{{ route('galeri-delete', $galeri->id) }}"
                                      method="POST"
                                      class="d-inline">

                                    @csrf
                                    @method('DELETE')

                                    <button class="btn btn-danger btn-sm"
                                            onclick="return confirm('Hapus galeri ini ?')">

                                        <i class="bi bi-trash"></i>

                                    </button>

                                </form>

                            </td>

                        </tr>

                    @empty

                        <tr>

                            <td colspan="7" class="text-center">

                                Belum ada data galeri

                            </td>

                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

        <div class="mt-3">
            {{ $galeris->links() }}
        </div>

    </div>

</div>

@endsection