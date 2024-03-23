<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{--
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    --}}


    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/icons.css')}}" type="text/css">
    <script src="{{asset('assets/js/config.js')}}"></script>
    <title>Dashboard - @yield('title')</title>
</head>

<body>
    @include('sweetalert::alert')

    <div class="layout-wrapper">
        @include('dashboard.leftMenu')

        <section class="page-content">
            @include('dashboard.topMenu')

            <div class="px-3">
                
                @yield('content')
            </div>

            @include('dashboard.footer')

        </section>
    </div>

    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script> --}}

    <script src="{{asset('assets/js/vendor.js')}}"></script>
    <script src="{{asset('assets/js/app.js')}}"></script>
    <script src="{{asset('assets/js/datatables.js')}}"></script>
    <script src="{{asset('assets/js/dashboard.js')}}"></script>


</body>

</html>