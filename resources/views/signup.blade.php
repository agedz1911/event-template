<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page Event Template</title>

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/icons.css') }}">
    <script src="{{ asset('assets/js/config.js') }}"></script>
</head>

<body class="bg-primary">
    <div class="container">
        <div class="row justify-content-center align-items-center vh-100">
            <div class="col-xl-4 col-md-6">
                <div class="card">
                    <div class="card-body p-4">

                        <div class="text-center w-75 mx-auto auth-logo mb-4">
                            <a href="index.html" class="logo-dark">
                                <span><img src="assets/images/logo-dark.png" alt="" height="22"></span>
                            </a>

                            <a href="index.html" class="logo-light">
                                <span><img src="assets/images/logo-light.png" alt="" height="22"></span>
                            </a>
                            <h4 class="mt-4 mb-3 text-muted fw-bold">Sign Up</h4>
                        </div>
                        @if (Session::has('error'))
                            <div class="alert alert-danger" role="alert">
                                {{ Session::get('error') }}
                            </div>
                        @endif
                        <form class="needs-validation" action="{{ route('signup') }}" method="post" novalidate>
                            @csrf
                            <div class="form-group mb-3">
                                <label class="form-label" for="name">Name</label>
                                <input class="form-control" type="text" id="name" required name="name"
                                    placeholder="Enter your Name">
                                    <div class="invalid-feedback">
                                        please input title
                                    </div>
                            </div>

                            <div class="form-group mb-3">
                                <label class="form-label" for="emailaddress">Email address</label>
                                <input class="form-control" type="email" id="emailaddress" required name="email"
                                    placeholder="Enter your email">
                            </div>

                            <div class="form-group mb-3">
                                <label class="form-label" for="password">Password</label>
                                <input class="form-control" type="password" required name="password" id="password"
                                    placeholder="Enter your password">
                            </div>

                            <input type="text" hidden required name="role_id" value="3">
                            {!! NoCaptcha::renderJs() !!}
                            {!! NoCaptcha::display() !!}
                            <div class="invalid-feedback">
                                Enter Captcha
                            </div>
                            <div class="form-group mb-0 text-center">
                                <button class="btn btn-primary w-100" type="submit"> Register </button>
                            </div>

                        </form>
                    </div> <!-- end card-body -->
                </div>
                <!-- end card -->

                <div class="row mt-3">
                    <div class="col-12 text-center">
                        <p class="text-white-50">have an account? <a href="{{ route('login') }}"
                                class="text-white font-weight-medium ms-1">Login</a></p>
                    </div> <!-- end col -->
                </div>
                <!-- end row -->

            </div> <!-- end col -->
        </div>
        <!-- end row -->
    </div>

    <script src="{{ asset('assets/js/vendor.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
</body>

</html>
