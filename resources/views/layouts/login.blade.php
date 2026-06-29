<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Madrasah Diniyah Al-Hidayah</title>

    <link rel="shortcut icon"
          href="{{ asset('dashboard/assets/compiled/svg/favicon.svg') }}"
          type="image/x-icon">

    <link rel="stylesheet"
          href="{{ asset('dashboard/assets/compiled/css/app.css') }}">

    <link rel="stylesheet"
          href="{{ asset('dashboard/assets/compiled/css/iconly.css') }}">

    <link rel="stylesheet"
          href="{{ asset('dashboard/assets/compiled/css/app-dark.css') }}">

    <link rel="stylesheet"
          href="{{ asset('dashboard/assets/compiled/css/auth.css') }}">
</head>

<body>

<script src="{{ asset('dashboard/assets/static/js/initTheme.js') }}"></script>

<div id="auth">

    <div class="row h-100">

        <div class="col-lg-5 col-12">

            <div id="auth-left">

                <div class="auth-logo">
                    <a href="/">
                        <img src="{{ asset('dashboard/assets/compiled/svg/logo.svg') }}"
                             alt="Logo">
                    </a>
                </div>

                <h1 class="auth-title">
                    Login
                </h1>

                <p class="auth-subtitle mb-5">
                    Silahkan Masuk Menggunakan Akun Anda
                </p>


                {{-- Error --}}
                @if(session('error'))

                    <div class="alert alert-danger">

                        {{ session('error') }}

                    </div>

                @endif


                @if ($errors->any())

                    <div class="alert alert-danger">

                        {{ $errors->first() }}

                    </div>

                @endif


                <form method="POST"
                      action="{{ route('login') }}">

                    @csrf


                    {{-- EMAIL --}}
                    <div class="form-group position-relative has-icon-left mb-4">

                        <input type="email"
                               name="email"
                               class="form-control form-control-xl"
                               placeholder="Email"
                               value="{{ old('email') }}"
                               required>

                        <div class="form-control-icon">

                            <i class="bi bi-envelope"></i>

                        </div>

                    </div>


                    {{-- PASSWORD --}}
                    <div class="form-group position-relative has-icon-left mb-4">

                        <input type="password"
                               name="password"
                               class="form-control form-control-xl"
                               placeholder="Password"
                               required>

                        <div class="form-control-icon">

                            <i class="bi bi-shield-lock"></i>

                        </div>

                    </div>


                    {{-- REMEMBER ME --}}
                    <div class="form-check form-check-lg d-flex align-items-end">

                        <input class="form-check-input me-2"
                               type="checkbox"
                               name="remember"
                               id="remember">

                        <label class="form-check-label text-gray-600"
                               for="remember">

                            Ingat Saya

                        </label>

                    </div>


                    {{-- BUTTON LOGIN --}}
                    <button type="submit"
                            class="btn btn-primary btn-block btn-lg shadow-lg mt-5">

                        Masuk

                    </button>

                </form>

            </div>

        </div>


        <div class="col-lg-7 d-none d-lg-block">

            <div id="auth-right">

            </div>

        </div>

    </div>

</div>

</body>

</html>