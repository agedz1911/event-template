@extends('dashboard.dashboardLayout')

@section('title', 'User Roles')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center mt-5">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-8 col-12">
                            <div class="d-flex flex-column gap-2">
                                <h4 class="">Roles</h4>
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
                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add-data"><i
                                        class="fas fa-add"></i> Add Data</button>
                                <button class="btn btn-info" data-bs-toggle="modal"
                                    data-bs-target="#deleted-data">Deleted Data</button>
                            </div>
                        </div>

                    </div>

                    <table class="table dt-responsive nowrap w-100 mt-3">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>name</th>
                                <th>Actions</th>

                            </tr>
                        </thead>
                        @foreach ($roles as $role)

                        <tbody>
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$role->name}}</td>
                                <td>
                                    <button class="btn btn-secondary">Edit</button>
                                    <a href="{{url('/dashboard/admin/delete_role', $role->id)}}"
                                        data-confirm-delete="true" class="btn btn-danger">Delete</a>
                                </td>

                            </tr>
                        </tbody>
                        @endforeach
                    </table>

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
                            <a href="" class="logo-dark">
                                <span><img src="{{asset('assets/images/logo-dark.png')}}" alt="" height="22"></span>
                            </a>

                            <a href="" class="logo-light">
                                <span><img src="{{asset('assets/images/logo-dark.png')}}" alt="" height="22"></span>
                            </a>
                            <h4 class="mt-4">Add new Role</h4>

                        </div>
                        <form class="needs-validation" action="{{route('storeRole')}}" method="post" novalidate>
                            @csrf
                            <form action="#">

                                <div class="form-group mb-3">
                                    <label class="form-label" for="name">Name</label>
                                    <input class="form-control" name="name" type="text" id="name" required=""
                                        placeholder="add new Role">
                                </div>

                                <div class="form-group mb-0 text-center">
                                    <button class="btn btn-primary w-100" type="submit"> Submit </button>
                                </div>

                            </form>

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
                        <table class="table dt-responsive nowrap w-100 mt-3">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>name</th>
                                    <th>Actions</th>

                                </tr>
                            </thead>
                            @foreach ($deleted_role as $role)

                            <tbody>
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$role->name}}</td>
                                    <td>
                                        <a href="/dashboard/admin/user-role/{{$role->id}}/restore"
                                            class="btn btn-primary">Restore</a>
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