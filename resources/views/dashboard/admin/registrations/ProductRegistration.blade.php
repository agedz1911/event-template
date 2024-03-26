@extends('dashboard.dashboardLayout')

@section('title', 'Registrations Dashboard')

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
                    <li class="breadcrumb-item active">Registration Product</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row justify-content-center mt-5">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-8 col-12">
                            <div class="d-flex flex-column gap-2">
                                <h4 class="">Registration Package</h4>
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

                    <hr class="my-4">

                    
                </div> <!-- end card body-->
            </div> <!-- end card -->
            <!--end card-->

        </div>

    </div>
</div>
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
                            <h4 class="mt-4">Add new Important Dates</h4>

                        </div>
                        <form class="needs-validation" action="{{'/dashboard/admin/storeImportantDates'}}" method="post" novalidate>
                            @csrf
                            <div class="form-group mb-3">
                                <label class="form-label" for="title">Title</label>
                                <input class="form-control" type="text" id="title" name="title" required placeholder="Enter your Title">

                                <div class="invalid-feedback">
                                    please input title
                                </div>
                            </div>

                            <div class="form-group mb-3">
                                <label class="form-label" for="date">Date</label>
                                <input class="form-control" type="date" id="date" name="date" required>
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
                <!-- end card -->
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->