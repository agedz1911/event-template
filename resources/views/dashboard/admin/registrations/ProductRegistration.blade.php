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
        <div class="row justify-content-center mt-2">
            <div class="col-12">
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
                                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add-data"><i
                                            class="fas fa-add"></i> Add Data</button>
                                    <button class="btn btn-info" data-bs-toggle="modal"
                                        data-bs-target="#deleted-data">Deleted Data</button>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end card body-->
                </div> <!-- end card -->
                <!--end card-->
            </div>
            <div class="col-12">
                <div class="table-responsive px-2">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Code</th>
                                <th scope="col">Registration Product</th>
                                <th scope="col">Price</th>
                                <th scope="col">Active Date</th>
                                <th scope="col">Regional</th>
                                <th scope="col">Status</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>R-0001</td>
                                <td>Specialist</td>
                                <td>IDR 500000</td>
                                <td>12 jan 2024</td>
                                <td>Indonesian</td>
                                <td>Publish</td>
                                <td>
                                    <div>
                                        <button class="btn btn-secondary btn-sm">Edit</button>
                                        <button class="btn btn-danger btn-sm">Delete</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>R-0002</td>
                                <td>Specialist</td>
                                <td>USD 500</td>
                                <td>12 jan 2024</td>
                                <td>Foreign</td>
                                <td>Publish</td>
                                <td>
                                    <div>
                                        <button class="btn btn-secondary btn-sm">Edit</button>
                                        <button class="btn btn-danger btn-sm">Delete</button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
@endsection


<!--Modal add Data -->
<div id="add-data" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-xl">
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
                            <h4 class="mt-4">Add new Registration Product</h4>

                        </div>
                        <form class="needs-validation" action="" method="post" novalidate>
                            @csrf
                            <div class="d-flex justify-content-between gap-2">
                                <div class="col">
                                    <div class="form-group mb-3">
                                        <label class="form-label" for="regional">Regional Participant</label>
                                        <select class="form-select" id="regional">
                                            <option selected>Select Reginal</option>
                                            <option value="1">Indonesian</option>
                                            <option value="2">Foreign</option>
                                        </select>

                                        <div class="invalid-feedback">
                                            please select Regional
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group mb-3">
                                        <label class="form-label" for="category">Category Congress</label>
                                        <select class="form-select" id="category">
                                            <option selected>Select Category</option>
                                            <option value="1">Symposium</option>
                                            <option value="2">Workshop</option>
                                            <option value="2">Package</option>
                                        </select>

                                        <div class="invalid-feedback">
                                            please select category
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label" for="name_product">Product Name</label>
                                <input class="form-control" type="text" id="name_product" name="name_product"
                                    required placeholder="Enter Registration Product">

                                <div class="invalid-feedback">
                                    please input Registration Product
                                </div>
                            </div>
                            <div class="d-lg-flex  justify-content-between gap-2 border p-2 rounded align-items-center ">
                                <div class="col">
                                    <div class="form-group mb-3">
                                        <label class="form-label" for="start_date">Start Early Bird</label>
                                        <input class="form-control" type="date" id="start_date" name="start_date"
                                            required>
                                        <div class="invalid-feedback">
                                            please input valid date
                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="form-label" for="start_date">End Early Bird</label>
                                        <input class="form-control" type="date" id="start_date" name="start_date"
                                            required>
                                        <div class="invalid-feedback">
                                            please input valid date
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group mb-3">
                                        <label class="form-label" for="price1">Price</label>
                                        <input class="form-control" type="number" id="price1" name="price1"
                                            placeholder="0" required>
                                        <div class="invalid-feedback">
                                            please input Price
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-lg-flex  border p-2 justify-content-between gap-2 mt-2 align-items-center">
                                <div class="col-12 col-md-6">
                                    <div class="form-group mb-3">
                                        <label class="form-label" for="normal_date">Start Normal Price Date</label>
                                        <input class="form-control" type="date" id="normal_date" name="normal_date"
                                            required>
                                        <div class="invalid-feedback">
                                            please input valid date
                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="form-label" for="normal_date">End Normal Price Date</label>
                                        <input class="form-control" type="date" id="normal_date" name="normal_date"
                                            required>
                                        <div class="invalid-feedback">
                                            please input valid date
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group mb-3">
                                        <label class="form-label" for="price2">Price</label>
                                        <input class="form-control" type="number" id="price2" name="price2"
                                            placeholder="0" required>
                                        <div class="invalid-feedback">
                                            please input Price
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-lg-flex border p-2 justify-content-between gap-2 mt-2 align-items-center ">
                                <div class="col-12 col-md-6">
                                    <div class="form-group mb-3">
                                        <label class="form-label" for="late_date">late / Onsite Date</label>
                                        <input class="form-control" type="date" id="late_date" name="late_date"
                                            required>
                                        <div class="invalid-feedback">
                                            please input valid date
                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="form-label" for="late_date">late / Onsite Date</label>
                                        <input class="form-control" type="date" id="late_date" name="late_date"
                                            required>
                                        <div class="invalid-feedback">
                                            please input valid date
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group mb-3">
                                        <label class="form-label" for="price3">Price</label>
                                        <input class="form-control" type="number" id="price3" name="price3"
                                            placeholder="0" required>
                                        <div class="invalid-feedback">
                                            please input Price
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row mt-2">
                                <div class="col-12 col-md-6">
                                    <div class="form-group mb-3">
                                        <label class="form-label" for="kuota">Kuota</label>
                                        <input class="form-control" type="number" id="kuota" placeholder="0">
                                        <div class="invalid-feedback">
                                            please input Price
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group mb-3">
                                        <label class="form-label" for="status">Status</label>
                                        <select class="form-select" id="status">
                                            <option selected>Select Status</option>
                                            <option value="1">Publish</option>
                                            <option value="2">UnPublish</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            please input Price
                                        </div>
                                    </div>
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
