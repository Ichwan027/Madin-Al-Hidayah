@extends('layouts.dashboard')

@section('content')

<div class="page-heading">

    <div class="d-flex justify-content-between align-items-center mb-3">

        <h3>Detail Pengumuman</h3>

        <a href="{{ route('dash.pengumuman') }}"
           class="btn btn-secondary">

            <i class="bi bi-arrow-left"></i>
            Kembali

        </a>

    </div>

</div>

<div class="card shadow-sm">

    <div class="card-header">

        <h4>

            {{ $pengumuman->judul }}

        </h4>

    </div>

    <div class="card-body">

        <table class="table table-bordered">

            <tr>

                <th width="220">

                    Judul

                </th>

                <td>

                    {{ $pengumuman->judul }}

                </td>

            </tr>

            <tr>

                <th>

                    Tanggal

                </th>

                <td>

                    {{ \Carbon\Carbon::parse($pengumuman->tanggal)->format('d F Y') }}

                </td>

            </tr>

            <tr>

                <th>

                    Status

                </th>

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

            </tr>

        </table>

        <hr>

        <h5>

            Isi Pengumuman

        </h5>

        <div style="line-height:2; text-align:justify;">

            {!! nl2br(e($pengumuman->isi)) !!}

        </div>

    </div>

    <div class="card-footer text-end">

        <a href="{{ route('pengumuman-edit',$pengumuman->id) }}"
           class="btn btn-warning">

            <i class="bi bi-pencil"></i>

            Edit

        </a>

        <a href="{{ route('dash.pengumuman') }}"
           class="btn btn-secondary">

            <i class="bi bi-arrow-left"></i>

            Kembali

        </a>

    </div>

</div>

@endsection