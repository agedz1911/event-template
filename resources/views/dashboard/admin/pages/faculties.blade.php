@extends('dashboard.dashboardLayout')

@section('title', 'Faculties')

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
                    <li class="breadcrumb-item active">Faculties</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row justify-content-center mt-5">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-8 col-12">
                            <div class="d-flex flex-column gap-2">
                                <h4 class="">Faculties</h4>
                                <form action="" method="get">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" name="keyword" placeholder="Search">
                                        <button class="btn btn-primary" type="submit">Search</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-2 offset-lg-2 col-12">
                            <div class="d-flex flex-column gap-2">
                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add-data"><i class="fas fa-add"></i> Add Data</button>
                                <button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#deleted-data">Deleted Data</button>
                            </div>
                        </div>

                    </div>

                    <table class="table dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Country</th>
                                <th>Image</th>
                                <th>Session</th>
                                <th>Actions</th>

                            </tr>
                        </thead>
                        @foreach ($faculties as $faculty)
                        <tbody>
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $faculty->name }}</td>
                                <td>{{ $faculty->country }}</td>
                                <td>
                                    @if ($faculty->image != null)
                                    <img src="/assets/images/faculty/{{ $faculty->image }}" alt="{{ $faculty->name }}" width="80px" class="img-">
                                    @else
                                    <img src="/assets/images/user.png" alt="{{ $faculty->name }}" width="80px" class="img-thumbnail">
                                    @endif
                                </td>
                                <td>
                                    @foreach ($faculty->schedule as $schedule)
                                    <div>
                                        <p class="mb-0 mt-2">
                                            {{ \Carbon\Carbon::parse($schedule->date)->format(' j F') }}
                                            <small>todo: add room</small>
                                        </p>
                                        <small class="">{{ $schedule->title }}</small>
                                    </div>
                                    @endforeach
                                </td>
                                <td>
                                    <div>
                                        <a href="{{ url('/dashboard/admin/edit_faculties', $faculty->id) }}" class="btn btn-secondary">Edit</a>
                                        <a href="{{ url('/dashboard/admin/delete_faculty', $faculty->id) }}" data-confirm-delete="true" class="btn btn-danger">Delete</a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                    {{ $faculties->links() }}
                </div> <!-- end card body-->
            </div> <!-- end card -->
            <!--end card-->
        </div>
    </div>
</div> <!-- container -->
@endsection

<!--Modal add Data -->
<div id="add-data" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-body p-4">
                <div class="card">
                    <div class="card-body p-4">
                        <div class="text-center w-75 mx-auto auth-logo mb-4">
                            <a href="index.html" class="logo-dark">
                                <span><img src="{{ asset('assets/images/logo-dark.png') }}" alt="" height="22"></span>
                            </a>

                            <a href="index.html" class="logo-light">
                                <span><img src="{{ asset('assets/images/logo-dark.png') }}" alt="" height="22"></span>
                            </a>
                            <h4 class="mt-4">Add new Faculties</h4>
                        </div>

                        <form action="{{ '/dashboard/admin/storeFaculties' }}" enctype="multipart/form-data" method="post">
                            @csrf
                            <div class="form-group mb-3">
                                <label class="form-label" for="name">Name</label>
                                <input class="form-control" type="text" id="name" required name="name" placeholder="Enter Faculty Name">
                            </div>

                            <div class="form-group mb-3">
                                <label class="form-label" for="country">Country</label>
                                <select class="form-select" id="country" name="country">
                                    <option selected>Select Country</option>
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

                            <div class="form-group mb-0 text-center">
                                <button class="btn btn-primary w-100" type="submit"> Submit </button>
                            </div>

                        </form>
                    </div> <!-- end card-body -->
                </div>
                <!-- end card -->
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<!--Modal deleted Data -->
<div id="deleted-data" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">

            <div class="modal-body p-4">
                <div class="card">
                    <div class="card-body p-4">
                        <table class="table dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Country</th>
                                    <th>Image</th>
                                    <th>Actions</th>

                                </tr>
                            </thead>
                            @foreach ($deleted_faculty as $del_faculty)
                            <tbody>
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $del_faculty->name }}</td>
                                    <td>{{ $del_faculty->country }}</td>
                                    <td>
                                        @if ($del_faculty->image != null)
                                        <img src="/images/faculty/{{ $del_faculty->image }}" alt="{{ $del_faculty->name }}" width="80px" class="img-">
                                        @else
                                        <img src="/assets/images/user.png" alt="{{ $del_faculty->name }}" width="80px" class="img-thumbnail">
                                        @endif
                                    </td>
                                    <td>
                                        <div>
                                            <a href="/dashboard/admin/faculties/{{ $del_faculty->id }}/restore" class="btn btn-primary">Restore</a>

                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                    </div> <!-- end card-body -->
                </div>
                <!-- end card -->
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->