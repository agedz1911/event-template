<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >

    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/tiny-slider.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/tobii.min.css') }}" type="text/css">

    <title>@yield('title') - Congress Event Template</title>
</head>

<body>
    @include('sweetalert::alert')
    
    <header id="topnav" class="defaultscroll sticky">
        @include('layouts.mainNavigation')
    </header>

    <section>
        @yield('content')
    </section>

    @include('layouts.footer')

    <a href="#" onclick="topFunction()" id="back-to-top" class="btn btn-icon btn-primary back-to-top"><i class="fa fa-chevron-up"></i></a>

    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>
    @yield('scripts')
    <script src="{{ asset('assets/js/tobii.min.js') }}"></script>
    <script src="{{ asset('assets/js/feather.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins.init.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
