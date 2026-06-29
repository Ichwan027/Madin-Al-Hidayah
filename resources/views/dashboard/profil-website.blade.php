@extends('layouts.dashboard')

@section('title', 'Profil Website')

@section('content')

<div class="container-fluid">

    @if(session('success'))

        <div class="alert alert-success">

            {{ session('success') }}

        </div>

    @endif

    <form action="{{ route('profil-website-update') }}"
          method="POST"
          enctype="multipart/form-data">

        @csrf

        <div class="row">

            <!-- ======================== -->
            <!-- LOGO & FAVICON -->
            <!-- ======================== -->

            <div class="col-md-4">

                <div class="card">

                    <div class="card-header">

                        <h3 class="card-title">

                            Logo Website

                        </h3>

                    </div>

                    <div class="card-body text-center">

                        @if($profil->logo)

                            <img src="{{ asset('uploads/profil/'.$profil->logo) }}"
                                 class="img-fluid mb-3"
                                 style="max-height:180px;">

                        @else

                            <img src="{{ asset('img/no-image.png') }}"
                                 class="img-fluid mb-3"
                                 style="max-height:180px;">

                        @endif

                        <input type="file"
                               name="logo"
                               class="form-control">

                    </div>

                </div>

                <div class="card mt-3">

                    <div class="card-header">

                        <h3 class="card-title">

                            Favicon

                        </h3>

                    </div>

                    <div class="card-body text-center">

                        @if($profil->favicon)

                            <img src="{{ asset('uploads/profil/'.$profil->favicon) }}"
                                 class="img-thumbnail mb-3"
                                 width="80">

                        @endif

                        <input type="file"
                               name="favicon"
                               class="form-control">

                    </div>

                </div>

            </div>

            <!-- ======================== -->
            <!-- DATA WEBSITE -->
            <!-- ======================== -->

            <div class="col-md-8">

                <div class="card">

                    <div class="card-header">

                        <h3 class="card-title">

                            Informasi Website

                        </h3>

                    </div>

                    <div class="card-body">

                        <div class="form-group">

                            <label>Nama Website</label>

                            <input type="text"
                                   name="nama_website"
                                   class="form-control"
                                   value="{{ old('nama_website',$profil->nama_website) }}">

                        </div>

                        <div class="form-group">

                            <label>Nama Madrasah</label>

                            <input type="text"
                                   name="nama_madrasah"
                                   class="form-control"
                                   value="{{ old('nama_madrasah',$profil->nama_madrasah) }}">

                        </div>

                        <div class="form-group">

                            <label>Slogan</label>

                            <input type="text"
                                   name="slogan"
                                   class="form-control"
                                   value="{{ old('slogan',$profil->slogan) }}">

                        </div>

                        <div class="form-group">

                            <label>Deskripsi</label>

                            <textarea
                                name="deskripsi"
                                rows="4"
                                class="form-control">{{ old('deskripsi',$profil->deskripsi) }}</textarea>

                        </div>

                        <div class="form-group">

                            <label>Alamat</label>

                            <textarea
                                name="alamat"
                                rows="3"
                                class="form-control">{{ old('alamat',$profil->alamat) }}</textarea>

                        </div>

                        <div class="row">

                            <div class="col-md-6">

                                <div class="form-group">

                                    <label>Telepon</label>

                                    <input type="text"
                                           name="telepon"
                                           class="form-control"
                                           value="{{ old('telepon',$profil->telepon) }}">

                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="form-group">

                                    <label>WhatsApp</label>

                                    <input type="text"
                                           name="whatsapp"
                                           class="form-control"
                                           value="{{ old('whatsapp',$profil->whatsapp) }}">

                                </div>

                            </div>

                        </div>

                        <div class="form-group">

                            <label>Email</label>

                            <input type="email"
                                   name="email"
                                   class="form-control"
                                   value="{{ old('email',$profil->email) }}">

                        </div>

                        <div class="form-group">

                            <label>Facebook</label>

                            <input type="text"
                                   name="facebook"
                                   class="form-control"
                                   value="{{ old('facebook',$profil->facebook) }}">

                        </div>

                        <div class="form-group">

                            <label>Instagram</label>

                            <input type="text"
                                   name="instagram"
                                   class="form-control"
                                   value="{{ old('instagram',$profil->instagram) }}">

                        </div>

                        <div class="form-group">

                            <label>Youtube</label>

                            <input type="text"
                                   name="youtube"
                                   class="form-control"
                                   value="{{ old('youtube',$profil->youtube) }}">

                        </div>

                        <div class="form-group">

                            <label>Jam Operasional</label>

                            <input type="text"
                                   name="jam_operasional"
                                   class="form-control"
                                   value="{{ old('jam_operasional',$profil->jam_operasional) }}">

                        </div>

                        {{-- <div class="form-group">

                            <label>Google Maps (Embed)</label>

                            <textarea
                                name="maps"
                                rows="4"
                                class="form-control">{{ old('maps',$profil->maps) }}</textarea>

                        </div> --}}

                        {{-- <div class="form-group">

                            <label>Footer</label>

                            <input type="text"
                                   name="footer"
                                   class="form-control"
                                   value="{{ old('footer',$profil->footer) }}">

                        </div> --}}

                    </div>

                    <div class="card-footer">

                        <button class="btn btn-primary">

                            <i class="fa fa-save"></i>

                            Simpan Perubahan

                        </button>

                    </div>

                </div>

            </div>

        </div>

    </form>

</div>

@endsection