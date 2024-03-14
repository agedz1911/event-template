@extends('dashboard.dashboardLayout')

@section('title', 'Importants Dates')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center mt-5">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body p-4">

                        <div class="text-center w-75 mx-auto auth-logo mb-4">
                            <a href="" class="logo-dark">
                                <span><img src="{{ asset('assets/images/logo-dark.png') }}" alt=""
                                        height="22"></span>
                            </a>

                            <a href="" class="logo-light">
                                <span><img src="{{ asset('assets/images/logo-dark.png') }}" alt=""
                                        height="22"></span>
                            </a>
                            <h4 class="mt-4">Edit Important Dates</h4>
                        </div>
                        <form class="needs-validation"
                            action="{{ url('/dashboard/admin/update_importantDate', $important_dates->id) }}"
                            method="post">
                            @method('PUT')
                            @csrf
                            <div class="form-group mb-3">
                                <label class="form-label" for="title">Title</label>
                                <input class="form-control" value="{{ $important_dates->title }}" type="text"
                                    id="title" name="title" required placeholder="Enter your Title">

                                <div class="invalid-feedback">
                                    please input title
                                </div>
                            </div>

                            <div class="form-group mb-3">
                                <label class="form-label" for="date">Date</label>
                                <input class="form-control" value="{{ $important_dates->date }}" type="date"
                                    id="date" name="date" required>
                                <div class="invalid-feedback">
                                    please input valid date
                                </div>
                            </div>

                            <div class="form-group mb-0 text-center">
                                <button class="btn btn-primary w-100" type="submit"> Submit </button>
                            </div>

                        </form>
                    </div> <!-- end card-body -->
                </div>
            </div>
        </div>
    </div>


@endsection
