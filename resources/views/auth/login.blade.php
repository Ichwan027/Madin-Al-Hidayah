<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Madrasah Diniyah Al-Hidayah</title>

    <link rel="stylesheet" href="{{ asset('dashboard/assets/compiled/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/assets/compiled/css/app-dark.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/assets/compiled/css/iconly.css') }}">
</head>

<body>

<div id="auth">

    <div class="row h-100">

        <div class="col-lg-5 col-12">

            <div id="auth-left">

                <h1 class="auth-title">
                    Login
                </h1>

                <p class="auth-subtitle mb-5">
                    Silahkan masuk ke Dashboard Admin
                </p>

                @if(session('error'))

                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>

                @endif

                <form method="POST" action="{{ route('login') }}">

                    @csrf

                    <!-- Email -->
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

                    <!-- Password -->
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

                    <!-- Remember Me -->
                    <div class="form-check form-check-lg d-flex align-items-end mb-4">

                        <input class="form-check-input me-2"
                               type="checkbox"
                               name="remember"
                               id="remember">

                        <label class="form-check-label text-gray-600"
                               for="remember">

                            Remember Me

                        </label>

                    </div>

                    <button class="btn btn-primary btn-block btn-lg shadow-lg mt-3">

                        Login

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

<script src="{{ asset('dashboard/assets/static/js/initTheme.js') }}"></script>
<script src="{{ asset('dashboard/assets/compiled/js/app.js') }}"></script>

</body>

</html>