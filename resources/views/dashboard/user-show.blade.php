@extends('layouts.dashboard')

@section('content')

<div class="card">

    <div class="card-header">
        <h4>Detail User</h4>
    </div>

    <div class="card-body text-center">

        @if($user->foto)
            <img src="{{ asset('uploads/user/' . $user->foto) }}"
                 width="180"
                 height="180"
                 class="rounded-circle mb-3"
                 style="object-fit: cover;">
        @else
            <img src="{{ asset('img/team/1.jpg') }}"
                 width="180"
                 height="180"
                 class="rounded-circle mb-3"
                 style="object-fit: cover;">
        @endif

        <hr>

        <table class="table">

            <tr>
                <th width="200">Nama Lengkap</th>
                <td>{{ $user->name }}</td>
            </tr>

            <tr>
                <th>Username</th>
                <td>{{ $user->username }}</td>
            </tr>

            <tr>
                <th>Email</th>
                <td>{{ $user->email }}</td>
            </tr>

            <tr>
                <th>Role</th>
                <td>
                    @if($user->role == 'Admin')
                        <span class="badge bg-primary">
                            {{ $user->role }}
                        </span>
                    @else
                        <span class="badge bg-secondary">
                            {{ $user->role }}
                        </span>
                    @endif
                </td>
            </tr>

            <tr>
                <th>Status</th>
                <td>

                    @if($user->status == 'Aktif')
                        <span class="badge bg-success">
                            {{ $user->status }}
                        </span>
                    @else
                        <span class="badge bg-danger">
                            {{ $user->status }}
                        </span>
                    @endif

                </td>
            </tr>

            <tr>
                <th>Dibuat Pada</th>
                <td>
                    {{ $user->created_at->format('d-m-Y H:i') }}
                </td>
            </tr>

        </table>

        <a href="{{ route('dash.user') }}"
           class="btn btn-secondary">

            <i class="bi bi-arrow-left"></i>
            Kembali

        </a>

    </div>

</div>

@endsection