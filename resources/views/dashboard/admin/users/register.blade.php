@extends('dashboard.dashboardLayout')

@section('title', 'Add User')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center mt-5">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-8 col-12">
                                <div class="d-flex flex-column gap-2">
                                    <h4 class="">Users</h4>
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
                                    @if (Auth::user()->role_id == 4)
                                        <button class="btn btn-info" data-bs-toggle="modal"
                                            data-bs-target="#deleted-data">Deleted Data</button>
                                    @endif
                                </div>
                            </div>

                        </div>

                        <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Biodata</th>
                                    <th>Updated</th>
                                    <th>Actions</th>

                                </tr>
                            </thead>
                            @foreach ($users as $user)
                                <tbody>
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->roles->name }}</td>
                                        <td>
                                            <p>{{ $user->biodata ? $user->biodata->speciality : '' }} <br>
                                                {{ $user->biodata ? $user->biodata->institution : '' }} <br>
                                                {{ $user->biodata ? $user->biodata->country : '' }}
                                            </p>
                                        </td>
                                        <td>{{ \Carbon\Carbon::parse($user->updated_at)->diffForHumans() }}</td>
                                        <td>
                                            <a href="{{ url('/dashboard/admin/edit_user', $user->id) }}"
                                                class="btn btn-secondary">Edit</a>
                                            <a href="{{ url('/dashboard/admin/delete_user', $user->id) }}"
                                                data-confirm-delete="true" class="btn btn-danger">Delete</a>
                                        </td>

                                    </tr>
                                </tbody>
                            @endforeach
                        </table>
                        {{ $users->links() }}
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
                                <span><img src="{{ asset('assets/images/logo-dark.png') }}" alt=""
                                        height="22"></span>
                            </a>

                            <a href="" class="logo-light">
                                <span><img src="{{ asset('assets/images/logo-dark.png') }}" alt=""
                                        height="22"></span>
                            </a>
                            <h4 class="mt-4">Add new User</h4>

                        </div>
                        <form class="needs-validation" action="{{ route('storeUser') }}" method="post" novalidate>
                            @csrf
                            <div class="form-group mb-3">
                                <label class="form-label" for="name">Name</label>
                                <input class="form-control" type="text" id="name" required name="name"
                                    placeholder="Enter your Name">
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

                            <div class="form-group mb-3">
                                <div class="">
                                    <label for="role" class="form-label">User Role</label>
                                    <select id="role" name="role_id" class="form-select">
                                        @foreach ($roles as $role)
                                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                                        @endforeach

                                    </select>
                                </div>
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
                        <table class="table dt-responsive">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Actions</th>

                                </tr>
                            </thead>
                            @foreach ($deleted_user as $user)
                                <tbody>
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->roles->name }}</td>
                                        <td>
                                            <a href="/dashboard/admin/delete_user/{{ $user->id }}/restore"
                                                class="btn btn-primary">Restore</a>
                                        </td>

                                    </tr>
                                </tbody>
                            @endforeach
                        </table>
                        {{-- <table class="table dt-responsive nowrap w-100 mt-3">
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
                        </table> --}}

                    </div> <!-- end card-body -->
                </div>
                <!-- end card -->
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
