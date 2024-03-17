@extends('dashboard.dashboardLayout')

@section('title', 'Importants Dates')

@section('content')
<div class="container-fluid">
    <a href="/dashboard/admin/user-register" class="mt-3 btn btn-secondary">Back</a>
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

                        <h4 class="mt-4">Edit User</h4>
                    </div>
                    <form class="needs-validation" action="/dashboard/admin/edit_user/{{$users->id}}" method="post" novalidate>
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-3">
                            <label class="form-label" for="name">Name</label>
                            <input class="form-control" type="text" value="{{$users->name}}" id="name" required
                                name="name" placeholder="Enter your Name">
                        </div>

                        <div class="form-group mb-3">
                            <label class="form-label" for="emailaddress">Email address</label>
                            <input class="form-control" type="email" value="{{$users->email}}" id="emailaddress"
                                required name="email" placeholder="Enter your email">
                        </div>

                        {{-- <div class="form-group mb-3">
                            <label class="form-label" for="password">Password</label>
                            <input class="form-control" type="password" required name="password" id="password"
                                placeholder="Enter your password">
                        </div> --}}

                        <div class="form-group mb-3">
                            <div class="">
                                <label for="role" class="form-label">User Role</label>
                                <select id="role" name="role_id" class="form-select">
                                    <option value="{{$users->role_id}}">{{$users->roles->name}}</option>
                                    @foreach ($roles as $role)
                                    <option value="{{$role->id}}">{{$role->name}}</option>

                                    @endforeach

                                </select>
                            </div>
                        </div>

                        <div class="form-group mb-0 text-center">
                            <button class="btn btn-primary w-100" type="submit"> Update </button>
                        </div>

                    </form>

                </div> <!-- end card-body -->
            </div>
        </div>
    </div>
</div>


@endsection