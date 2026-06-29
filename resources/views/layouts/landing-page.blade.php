{{-- <!DOCTYPE html>
<html lang="en"> --}}

@include('layouts.patrials.head')
<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

 @include('layouts.patrials.navbar')

@yield('content')

@include('layouts.patrials.footer')

@include('layouts.patrials.script')

