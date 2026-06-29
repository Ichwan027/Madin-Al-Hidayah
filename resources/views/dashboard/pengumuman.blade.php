@extends('layouts.dashboard')

@section('content')

<div class="page-heading">

    <div class="d-flex justify-content-between align-items-center mb-3">

        <h3>Data Pengumuman</h3>

        <a href="{{ route('pengumuman-create') }}"
           class="btn btn-primary">

            <i class="bi bi-plus-circle"></i>
            Tambah Pengumuman

        </a>

    </div>

</div>

<div class="card">

    <div class="card-header">

        <h5>Daftar Pengumuman</h5>

    </div>

    <div class="card-body">

        <div class="table-responsive">

            <table class="table table-bordered table-hover align-middle">

                <thead class="table-dark">

                    <tr>

                        <th width="5%">No</th>

                        <th>Judul</th>

                        <th width="15%">Tanggal</th>

                        <th width="15%">Status</th>

                        <th width="25%">Aksi</th>

                    </tr>

                </thead>

                <tbody>

                    @forelse ($pengumumen as $pengumuman)

                        <tr>

                            <td>

                                {{ $loop->iteration + ($pengumumen->currentPage()-1) * $pengumumen->perPage() }}

                            </td>

                            <td>

                                {{ $pengumuman->judul }}

                            </td>

                            <td>

                                {{ \Carbon\Carbon::parse($pengumuman->tanggal)->format('d F Y') }}

                            </td>

                            <td>

                                @if($pengumuman->status == 'Publish')

                                    <span class="badge bg-success">

                                        Publish

                                    </span>

                                @else

                                    <span class="badge bg-warning text-dark">

                                        Draft

                                    </span>

                                @endif

                            </td>

                            <td>

                                <a href="{{ route('pengumuman-show',$pengumuman->id) }}"
                                   class="btn btn-info btn-sm">

                                    <i class="bi bi-eye"></i>

                                </a>

                                <a href="{{ route('pengumuman-edit',$pengumuman->id) }}"
                                   class="btn btn-warning btn-sm">

                                    <i class="bi bi-pencil"></i>

                                </a>

                                <form action="{{ route('pengumuman-delete',$pengumuman->id) }}"
                                      method="POST"
                                      class="d-inline"
                                      onsubmit="return confirm('Hapus pengumuman ini?')">

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

                            <td colspan="5"
                                class="text-center">

                                Belum ada data pengumuman.

                            </td>

                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

        <div class="mt-3">

            {{ $pengumumen->links() }}

        </div>

    </div>

</div>

@endsection