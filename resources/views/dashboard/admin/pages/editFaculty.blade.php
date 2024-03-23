@extends('dashboard.dashboardLayout')

@section('title', 'Importants Dates')

@section('content')
<div class="py-3 py-lg-4">
    <div class="row">
        <div class="col-lg-6">
            <h4 class="page-title mb-0">Dashboard</h4>
        </div>
        <div class="col-lg-6">
            <div class="d-none d-lg-block">
                <ol class="breadcrumb m-0 float-end">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashtrap</a></li>
                    <li class="breadcrumb-item active">Edit Faculty</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <a href="/dashboard/admin/faculties" class="mt-3 btn btn-secondary">Back</a>
    <div class="row justify-content-center mt-3">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body p-4">

                    <div class="text-center w-75 mx-auto auth-logo mb-4">
                        <a href="index.html" class="logo-dark">
                            <span><img src="{{ asset('assets/images/logo-dark.png') }}" alt="" height="22"></span>
                        </a>

                        <a href="index.html" class="logo-light">
                            <span><img src="{{ asset('assets/images/logo-dark.png') }}" alt="" height="22"></span>
                        </a>

                        <h4 class="mt-4">Edit Faculties</h4>
                    </div>

                    <form action="{{ url('/dashboard/admin/update_faculties', $faculties->id) }}" enctype="multipart/form-data" method="post">
                        @method('PUT')
                        @csrf
                        <div class="form-group mb-3">
                            <label class="form-label" for="name">Name</label>
                            <input class="form-control" type="text" value="{{ $faculties->name }}" id="name" required name="name" placeholder="Enter Faculty Name">
                        </div>

                        <div class="form-group mb-3">
                            <label class="form-label" for="country">Country</label>
                            <select class="form-select" id="country" name="country">
                                <option selected>{{ $faculties->country }}</option>
                                @foreach ($countries as $country)
                                <option value="{{ $country['name'] }}">{{ $country['emoji'] }}
                                    {{ $country['name'] }}
                                </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label class="form-label" for="image">Image</label>
                            <input class="form-control" type="file" name="image" accept="image/jpg, image/jpeg, image/png" id="image">
                        </div>

                        <div>
                            @if ($faculties->image != null)
                            <img src="/assets/images/faculty/{{ $faculties->image }}" alt="{{ $faculties->name }}" width="80px" class="img-">
                            @else
                            <img src="/assets/images/user.png" alt="{{ $faculties->name }}" width="80px" class="img-thumbnail">
                            @endif
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