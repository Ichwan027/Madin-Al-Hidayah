@extends('layouts.dashboard')

@section('content')

<div class="page-heading">

    <h3>Data Komentar</h3>

</div>

<div class="card">

    <div class="card-header">

        <h5>Daftar Komentar Pengunjung</h5>

    </div>

    <div class="card-body">

        <div class="table-responsive">

            <table class="table table-bordered table-hover">

                <thead class="table-dark">

                    <tr>

                        <th>No</th>
                        <th>Artikel</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Komentar</th>
                        <th>Status</th>
                        <th>Aksi</th>

                    </tr>

                </thead>

                <tbody>

                    @forelse($komentars as $komentar)

                        <tr>

                            <td>{{ $loop->iteration }}</td>

                            <td>

                                {{ $komentar->artikel->judul }}

                            </td>

                            <td>

                                {{ $komentar->nama }}

                            </td>

                            <td>

                                {{ $komentar->email }}

                            </td>

                            <td>

                                {{ \Illuminate\Support\Str::limit($komentar->komentar,80) }}

                            </td>

                            <td>

                                @if($komentar->status=='Approve')

                                    <span class="badge bg-success">

                                        Approve

                                    </span>

                                @else

                                    <span class="badge bg-warning">

                                        Pending

                                    </span>

                                @endif

                            </td>

                            <td>

                                @if($komentar->status=='Pending')

                                    <form action="{{ route('komentar.approve',$komentar->id) }}"
                                          method="POST"
                                          class="d-inline">

                                        @csrf
                                        @method('PUT')

                                        <button class="btn btn-success btn-sm">

                                            Approve

                                        </button>

                                    </form>

                                @else

                                    <form action="{{ route('komentar.pending',$komentar->id) }}"
                                          method="POST"
                                          class="d-inline">

                                        @csrf
                                        @method('PUT')

                                        <button class="btn btn-warning btn-sm">

                                            Pending

                                        </button>

                                    </form>

                                @endif

                                <form action="{{ route('komentar.delete',$komentar->id) }}"
                                      method="POST"
                                      class="d-inline"
                                      onsubmit="return confirm('Hapus komentar ini?')">

                                    @csrf
                                    @method('DELETE')

                                    <button class="btn btn-danger btn-sm">

                                        Hapus

                                    </button>

                                </form>

                            </td>

                        </tr>

                    @empty

                        <tr>

                            <td colspan="7" class="text-center">

                                Belum ada komentar.

                            </td>

                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

        <div class="mt-3">

            {{ $komentars->links() }}

        </div>

    </div>

</div>

@endsection