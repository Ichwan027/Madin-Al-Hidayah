<head>
    <meta charset="UTF-8">
    <meta name="description" content="VaultEdge - Premium financial planning and investment management HTML template">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>

        {{ $profil->nama_website ?? 'Madrasah Diniyah Al-Hidayah' }}

    </title>

    @if ($profil && $profil->favicon)
        <link rel="icon" href="{{ asset('uploads/profil/' . $profil->favicon) }}">
    @else
        <link rel="icon" href="{{ asset('img/core-img/favicon.ico') }}">
    @endif
    <link rel="stylesheet" href={{ asset('style.css') }}>
    <link rel="stylesheet" href={{ asset('css/custom-override.css') }}>
    <link rel="stylesheet"
        href={{ asset('https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css') }}
        integrity="sha512-+EoPw+Fiwh6eSeRK7zwIKc1sFeLXueYJ4CjmDxHZBOlXcG5D9qW6VfEDde/x0fGJ5sA8ERnJzN9dM2KmP4aQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
