@extends('layouts.dashboard')

@section('content')
    <div class="page-heading">

        <div class="d-flex justify-content-between align-items-center">

            <h3>DASHBOARD</h3>

            <div class="text-end">

                <h5 id="clock" class="mb-0 text-primary fw-bold">

                    00:00:00

                </h5>

                <small id="date" class="text-muted">

                </small>

            </div>

        </div>

    </div>

    <div class="page-content">

        <section class="row">

            <!-- KIRI -->
            <div class="col-lg-9">

                <!-- SELAMAT DATANG -->
                <div class="card">
                    <div class="card-header">
                        <h4>Selamat Datang {{ auth()->user()->name }} 👋</h4>
                    </div>

                    <div class="card-body">

                        Semoga aktivitas Anda hari ini berjalan lancar.
                        Saat ini Anda login sebagai
                        <strong>{{ auth()->user()->role }}</strong>.

                    </div>
                </div>

                <!-- CARD STATISTIK -->
                <div class="row">

                    <div class="col-md-3 col-6">
                        <div class="card">
                            <div class="card-body text-center">
                                <i class="bi bi-images fs-1 text-primary"></i>
                                <h3>{{ $jumlahGaleri }}</h3>
                                <p>Total Galeri</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-6">
                        <div class="card">
                            <div class="card-body text-center">
                                <i class="bi bi-newspaper fs-1 text-success"></i>
                                <h3>{{ $jumlahArtikel }}</h3>
                                <p>Total Artikel</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-6">
                        <div class="card">
                            <div class="card-body text-center">
                                <i class="bi bi-megaphone fs-1 text-warning"></i>
                                <h3>{{ $jumlahPengumuman }}</h3>
                                <p>Total Pengumuman</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-6">
                        <div class="card">
                            <div class="card-body text-center">
                                <i class="bi bi-people fs-1 text-danger"></i>
                                <h3>{{ $jumlahUser }}</h3>
                                <p>Total User</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ARTIKEL TERBARU -->
                <div class="card">

                    <div class="card-header">
                        <h4>Artikel Terbaru</h4>
                    </div>

                    <div class="card-body">

                        <table class="table">

                            <tr>
                                <td>{{ $artikelTerbaru->first()->judul ?? 'Tidak ada artikel terbaru' }}</td>
                                <td>{{ $artikelTerbaru->first()->created_at->format('d M Y') ?? 'Tidak ada tanggal' }}</td>
                            </tr>

                        </table>

                    </div>

                </div>

                <!-- PENGUMUMAN TERBARU -->
                <div class="card">

                    <div class="card-header">
                        <h4>Pengumuman Terbaru</h4>
                    </div>

                    <div class="card-body">

                        <table class="table">

                            <tr>
                                <td>{{ $pengumumanTerbaru->first()->judul ?? 'Tidak ada pengumuman terbaru' }}</td>
                                <td>{{ $pengumumanTerbaru->first()->created_at->format('d M Y') ?? 'Tidak ada tanggal' }}
                                </td>
                            </tr>

                        </table>

                    </div>

                </div>

            </div>


            <!-- KANAN -->
            <div class="col-lg-3">

                <!-- PROFIL USER -->
                <div class="card">

                    <div class="card-body text-center">

                        @if (auth()->check() && auth()->user()->foto)
                            <img src="{{ asset('uploads/user/' . auth()->user()->foto) }}" class="rounded-circle mb-3"
                                width="120" height="120" style="object-fit:cover;">
                        @else
                            <img src="{{ asset('img/team/1.jpg') }}" class="rounded-circle mb-3" width="120"
                                height="120" style="object-fit:cover;">
                        @endif

                        <h5>
                            {{ auth()->user()->name }}
                        </h5>

                        <p class="text-muted">
                            {{ auth()->user()->role }}
                        </p>

                        <hr>

                        <strong>
                            {{ auth()->user()->email }}
                        </strong>

                        <br><br>

                        @if (auth()->user()->status == 'Aktif')
                            <span class="badge bg-success">
                                {{ auth()->user()->status }}
                            </span>
                        @else
                            <span class="badge bg-danger">
                                {{ auth()->user()->status }}
                            </span>
                        @endif

                        <hr>

                        <a href="{{ route('user-show', auth()->user()->id) }}" class="btn btn-primary w-100">

                            <i class="bi bi-person-circle"></i>
                            Profil Saya

                        </a>

                    </div>

                </div>

            </div>

        </section>

    </div>

    <script>
        function updateClock() {

            const now = new Date();

            document.getElementById("clock").innerHTML =
                now.toLocaleTimeString();

            document.getElementById("date").innerHTML =
                now.toLocaleDateString('id-ID');

        }

        setInterval(updateClock, 1000);

        updateClock();
    </script>
@endsection
