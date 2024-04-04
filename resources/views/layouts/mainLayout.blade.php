<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>@yield('title') - Congress Event Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Scientific Meeting of Indonesian Congenital Heart Disease" />
    <meta name="keywords" content="PERKI, kardiovascular, Congenital Heart Disease, INCHD," />

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/tobii.min.css') }}"> --}}
    <link rel="stylesheet" href="{{asset('assets/css/icons.css')}}" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/tiny-slider.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/colors/default.css') }}">



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

    <a href="#" onclick="topFunction()" id="back-to-top" class="btn btn-icon btn-primary back-to-top"><i data-feather="arrow-up" class="icons"></i></a>


    @yield('scripts')
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/tiny-slider.js') }}"></script>
    {{-- <script src="{{ asset('assets/js/tobii.min.js') }}"></script> --}}
    <script src="{{ asset('assets/js/feather.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins.init.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
