@extends('dashboard.dashboardLayout')

@section('title', 'Faculties')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center mt-5">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Faculties</h4>
                    <p class="text-muted font-size-13 mb-4">
                        DataTables has most features enabled by default, so all you need to do to use it with your own
                        tables is to call the construction
                        function:
                        <code>$().DataTable();</code>.
                    </p>

                    <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Country</th>
                                <th>Image</th>
                                <th>Actions</th>

                            </tr>
                        </thead>
                        @foreach ($faculties as $faculty)

                        <tbody>
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$faculty->name}}</td>
                                <td>{{$faculty->country}}</td>
                                <td>
                                    @if ($faculty->image != null)
                                    <img src="/images/faculty/{{$faculty->image}}" alt="{{$faculty->name}}" width="80px"
                                        class="img-">
                                    @else
                                    <img src="/assets/images/user.png" alt="{{$faculty->name}}" width="80px"
                                        class="img-thumbnail">
                                    @endif
                                </td>
                                <td>
                                    <div>
                                        <a href="" class="btn btn-primary">Edit</a>
                                        <a href="" class="btn btn-danger">Delete</a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                    {{$faculties->links()}}
                </div> <!-- end card body-->
            </div> <!-- end card -->
            <!--end card-->
        </div>
        <div class="col-lg-4 col-md-5">
            <div class="card">
                <div class="card-body p-4">
                    <div class="text-center w-75 mx-auto auth-logo mb-4">
                        <a href="index.html" class="logo-dark">
                            <span><img src="{{asset('assets/images/logo-dark.png')}}" alt="" height="22"></span>
                        </a>

                        <a href="index.html" class="logo-light">
                            <span><img src="{{asset('assets/images/logo-dark.png')}}" alt="" height="22"></span>
                        </a>
                        <h4 class="mt-4">Add new Faculties</h4>
                    </div>

                    <form action="{{'/dashboard/admin/storeFaculties'}}" enctype="multipart/form-data" method="post">
                        @csrf
                        <div class="form-group mb-3">
                            <label class="form-label" for="name">Name</label>
                            <input class="form-control" type="text" id="name" required name="name"
                                placeholder="Enter Faculty Name">
                        </div>

                        <div class="form-group mb-3">
                            <label class="form-label" for="country">Country</label>
                            <select class="form-select" id="country" name="country">
                                <option selected>Select Country</option>
                                @foreach ($countries as $country)
                                <option value="{{ $country['name'] }}">{{$country['emoji']}} {{ $country['name'] }}
                                </option>

                                @endforeach

                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label class="form-label" for="image">Image</label>
                            <input class="form-control" type="file" name="image"
                                accept="image/jpg, image/jpeg, image/png" id="image">
                        </div>

                        <div class="form-group mb-0 text-center">
                            <button class="btn btn-primary w-100" type="submit"> Submit </button>
                        </div>

                    </form>
                </div> <!-- end card-body -->
            </div>
            <!-- end card -->

            <div class="row mt-3">
                <div class="col-12 text-center">
                    <p class="text-white-50">Already have an account ? <a href="pages-login.html"
                            class="text-white font-weight-medium ms-1">Log In</a></p>
                </div> <!-- end col -->
            </div>
            <!-- end row -->

        </div> <!-- end col -->

    </div>
</div> <!-- container -->
@endsection