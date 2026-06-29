@extends('layouts.dashboard')

@section('content')
    <div class="page-heading">

        <div class="d-flex justify-content-between mb-3">

            <h3>Manajemen User</h3>

            <a href="{{ route('user-create') }}" class="btn btn-primary">

                <i class="bi bi-plus-circle"></i>
                Tambah User

            </a>

        </div>

    </div>


    <div class="card">

        <div class="card-header">

            <h5>Daftar User</h5>

        </div>

        <div class="card-body">

            <table class="table table-bordered table-hover">

                <thead class="table-dark">

                    <tr>

                        <th>No</th>
                        <th>Foto</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Status</th>
                        <th>Aksi</th>

                    </tr>

                </thead>

                <tbody>

                    @forelse($users as $user)
                        <tr>

                            <td>
                                {{ $loop->iteration }}
                            </td>

                            <td>

                                @if ($user->foto)
                                    <img src="{{ asset('uploads/user/' . $user->foto) }}" width="70" height="70"
                                        class="rounded-circle" style="object-fit:cover">
                                @else
                                    <img src="{{ asset('dashboard/assets/compiled/jpg/1.jpg') }}" width="70"
                                        height="70" class="rounded-circle">
                                @endif

                            </td>

                            <td>

                                {{ $user->name }}

                            </td>

                            <td>

                                {{ $user->email }}

                            </td>

                            <td>

                                @if ($user->role == 'Admin')
                                    <span class="badge bg-primary">

                                        Admin

                                    </span>
                                @else
                                    <span class="badge bg-success">

                                        User

                                    </span>
                                @endif

                            </td>

                            <td>

                                @if ($user->status == 'Aktif')
                                    <span class="badge bg-success">

                                        Aktif

                                    </span>
                                @else
                                    <span class="badge bg-danger">

                                        Nonaktif

                                    </span>
                                @endif

                            </td>

                            <td>

                                <a href="{{ route('user-show', $user->id) }}" class="btn btn-info btn-sm">

                                    Detail

                                </a>

                                <a href="{{ route('user-edit', $user->id) }}" class="btn btn-warning btn-sm">

                                    Edit

                                </a>

                                <form action="{{ route('user-delete', $user->id) }}" method="POST" class="d-inline">

                                    @csrf
                                    @method('DELETE')

                                    <button class="btn btn-danger btn-sm" onclick="return confirm('Hapus user ini ?')">

                                        Hapus

                                    </button>

                                </form>

                            </td>

                        </tr>

                    @empty

                        <tr>

                            <td colspan="7" class="text-center">

                                Belum ada data user

                            </td>

                        </tr>
                    @endforelse

                </tbody>

            </table>

            <div class="mt-3">

                {{ $users->links() }}

            </div>

        </div>

    </div>
@endsection
