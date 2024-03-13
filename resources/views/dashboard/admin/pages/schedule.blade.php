@extends('dashboard.dashboardLayout')

@section('title', 'Schedule')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center mt-5">
        <div class="col-lg-10">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-8 col-12">
                            <div class="d-flex flex-column gap-2">
                                <h4 class="">Schedule</h4>
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

                    <hr class="my-4">

                    <table class="table dt-responsive nowrap w-100 ">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Day / Date</th>
                                <th>Time</th>
                                <th>Session / Title</th>
                                <th>Speakers / Moderator</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <div>
                                        <a href="{{url('/dashboard/admin/important-dates',)}}"
                                            class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#edit-data">Edit</a>
                                        <a href="{{url('/dashboard/admin/delete_importantDate',)}}"
                                            data-confirm-delete="true" class="btn btn-danger">Delete</a>
                                    </div>
                                </td>

                            </tr>
                        </tbody>
                        
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection