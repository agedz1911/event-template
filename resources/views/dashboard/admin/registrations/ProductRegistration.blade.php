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
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h4 class="">Category Congress</h4>
                        <button class="btn btn-primary btn-sm" data-bs-toggle="modal"
                            data-bs-target="#add-data-category">Add </button>
                    </div>
                    <div class="table-responsive mt-2">
                        <table class="table table-hover ">
                            <thead>
                                <tr>
                                    <th scope="col">id</th>
                                    <th scope="col">Category Name</th>
                                    <th scope="col">Created at</th>
                                    <th scope="col">Actions</th>

                                </tr>
                            </thead>
                            @foreach ($categoryReg as $category)
                            <tbody>
                                <tr>
                                    <th scope="row">{{$loop->iteration}}</th>
                                    <td>{{$category->category_name}}</td>
                                    <td>{{ \Carbon\Carbon::parse($category->created_at)->diffForHumans()}}</td>
                                    <td>
                                        <div>
                                            <button class="btn btn-secondary btn-sm">Edit</button>
                                            <button class="btn btn-danger btn-sm">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                        {{$categoryReg->links()}}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h4 class="">Class Category</h4>
                        <button class="btn btn-primary btn-sm" data-bs-toggle="modal"
                            data-bs-target="#add-data-class">Add </button>
                    </div>
                    <div class="table-responsive mt-2">
                        <table class="table  table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">id</th>
                                    <th scope="col">Class Name</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Time</th>
                                    <th scope="col">Actions</th>

                                </tr>
                            </thead>
                            @foreach ($classCategory as $class)
                            <tbody>
                                <tr>
                                    <th scope="row">{{$loop->iteration}}</th>
                                    <td>{{$class->class_name}}</td>
                                    <td>{{$class->categoryReg->category_name}}</td>
                                    <td>{{\Carbon\Carbon::parse($class->date)->format(' j F Y') }}</td>
                                    <td>{{$class->time}}</td>
                                    <td>
                                        <div>
                                            <button class="btn btn-secondary btn-sm">Edit</button>
                                            <button class="btn btn-danger btn-sm">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                        {{$classCategory->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                    <hr>
                    <div class="col-12">
                        <div class="table-responsive px-2">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr class="text-center">
                                        <th scope="col">#</th>
                                        <th scope="col">Code</th>
                                        <th scope="col">Registration Product</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Active Date</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Class</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                @foreach ($productReg as $product)
                                <tbody>
                                    <tr class="text-center">
                                        <th scope="row">{{$loop->iteration}}</th>
                                        <td>{{$product->code_product}}</td>
                                        <td>{{$product->product_name}}</td>
                                        <td>
                                            <div class="d-flex flex-column">
                                                <small>early bird Rp{{$product->price_idr_early}} | USD{{$product->price_usd_early}}</small>
                                                <small>Normal Rp{{$product->price_idr_normal}} | USD{{$product->price_usd_normal}}</small>
                                                <small>Late / Onsite bird Rp{{$product->price_idr_onsite}} | USD{{$product->price_usd_onsite}}</small>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex flex-column">
                                                <small>{{\Carbon\Carbon::parse($product->start_date_early)->format(' j F Y')}} Up to {{\Carbon\Carbon::parse($product->end_date_early)->format(' j F Y')}}</small>
                                                <small>{{\Carbon\Carbon::parse($product->start_date_normal)->format(' j F Y')}} Up to {{\Carbon\Carbon::parse($product->end_date_normal)->format(' j F Y')}}</small>
                                                <small>{{\Carbon\Carbon::parse($product->start_date_onsite)->format(' j F Y')}} Up to {{\Carbon\Carbon::parse($product->end_date_onsite)->format(' j F Y')}}</small>
                                            </div>
                                        </td>
                                        <td>{{$product->classReg->categoryReg->category_name}}</td>
                                        <td>{{$product->classReg->class_name}}</td>
                                        <td>@switch($product->status)
                                            @case(1)
                                            Publish
                                            @break
                                            @case(0)
                                            Unpublish
                                            @break
                                            @default
                                            -
                                            @endswitch</td>
                                        <td>
                                            <div>
                                                <button class="btn btn-secondary btn-sm">Edit</button>
                                                <button class="btn btn-danger btn-sm">Delete</button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div> <!-- end card body-->
            </div> <!-- end card -->
            <!--end card-->
        </div>
    </div>
</div>
@endsection


<!--Modal add Data -->
<div id="add-data" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Registration Product</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body p-4">
                <div class="card">
                    <div class="card-body p-4">
                        <div class="text-center w-75 mx-auto auth-logo mb-4">
                            <a href="" class="logo-dark">
                                <span><img src="{{ asset('assets/images/logo-dark.png') }}" alt="" height="22"></span>
                            </a>

                            <a href="" class="logo-light">
                                <span><img src="{{ asset('assets/images/logo-dark.png') }}" alt="" height="22"></span>
                            </a>
                            <h4 class="mt-4">Add new Registration Product</h4>

                        </div>
                        <form class="needs-validation" action="{{route('storeProductRegistration')}}" method="post"
                            novalidate>
                            @csrf
                            <div class="d-flex justify-content-between gap-2">
                                <div class="col">
                                    <div class="form-group mb-3">
                                        <label class="form-label" for="category">Category Congress</label>
                                        <select class="form-select" name="category_id" id="category">
                                            <option selected disabled> Category</option>
                                            @foreach ($categoryReg as $category)
                                            <option value="{{$category->id}}">{{$category->category_name}}</option>
                                            @endforeach
                                        </select>

                                        <div class="invalid-feedback">
                                            please select category
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group mb-3">
                                        <label class="form-label" for="class">Class Category</label>
                                        <select class="form-select" name="class_id" id="class">
                                            <option selected disabled>Select Class</option>
                                            @foreach ($classCategory as $class)
                                            <option value="{{$class->id}}">{{$class->class_name}}</option>
                                            @endforeach
                                        </select>

                                        <div class="invalid-feedback">
                                            please select Class
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-lg-flex justify-content-between gap-2">

                                <div class="col-6">
                                    <div class="form-group mb-3">
                                        <label class="form-label" for="product_name">Product Name</label>
                                        <input class="form-control" type="text" id="product_name" name="product_name"
                                            required placeholder="Enter Registration Product">

                                        <div class="invalid-feedback">
                                            please input Registration Product
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-lg-flex justify-content-between gap-2 border p-2 rounded align-items-center ">
                                <div class="col">
                                    <div class="form-group mb-3">
                                        <label class="form-label" for="start_date">Start Early Bird</label>
                                        <input class="form-control" type="date" id="start_date" name="start_date_early"
                                            required>
                                        <div class="invalid-feedback">
                                            please input valid date
                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="form-label" for="end_date">End Early Bird</label>
                                        <input class="form-control" type="date" id="end_date" name="end_date_early"
                                            required>
                                        <div class="invalid-feedback">
                                            please input valid date
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group mb-3">
                                        <label class="form-label" for="price_idr_early">Price IDR</label>
                                        <input class="form-control" type="number" id="price_idr_early"
                                            name="price_idr_early" placeholder="0" required>
                                        <div class="invalid-feedback">
                                            please input Price
                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="form-label" for="price_usd_early">Price USD</label>
                                        <input class="form-control" type="number" id="price_usd_early"
                                            name="price_usd_early" placeholder="0" required>
                                        <div class="invalid-feedback">
                                            please input Price
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-lg-flex  border p-2 justify-content-between gap-2 mt-2 align-items-center">
                                <div class="col-12 col-md-6">
                                    <div class="form-group mb-3">
                                        <label class="form-label" for="start_date_normal">Start Normal Price
                                            Date</label>
                                        <input class="form-control" type="date" id="start_date_normal"
                                            name="start_date_normal" required>
                                        <div class="invalid-feedback">
                                            please input valid date
                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="form-label" for="end_date_normal">End Normal Price Date</label>
                                        <input class="form-control" type="date" id="end_date_normal"
                                            name="end_date_normal" required>
                                        <div class="invalid-feedback">
                                            please input valid date
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group mb-3">
                                        <label class="form-label" for="price_idr_normal">Price IDR</label>
                                        <input class="form-control" type="number" id="price_idr_normal"
                                            name="price_idr_normal" placeholder="0" required>
                                        <div class="invalid-feedback">
                                            please input Price
                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="form-label" for="price_usd_normal">Price USD</label>
                                        <input class="form-control" type="number" id="price_usd_normal"
                                            name="price_usd_normal" placeholder="0" required>
                                        <div class="invalid-feedback">
                                            please input Price
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-lg-flex border p-2 justify-content-between gap-2 mt-2 align-items-center ">
                                <div class="col-12 col-md-6">
                                    <div class="form-group mb-3">
                                        <label class="form-label" for="start_date_onsite">late / Onsite Date</label>
                                        <input class="form-control" type="date" id="start_date_onsite"
                                            name="start_date_onsite" required>
                                        <div class="invalid-feedback">
                                            please input valid date
                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="form-label" for="end_date_onsite">late / Onsite Date</label>
                                        <input class="form-control" type="date" id="end_date_onsite"
                                            name="end_date_onsite" required>
                                        <div class="invalid-feedback">
                                            please input valid date
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group mb-3">
                                        <label class="form-label" for="price_idr_onsite">Price IDR</label>
                                        <input class="form-control" type="number" id="price_idr_onsite"
                                            name="price_idr_onsite" placeholder="0" required>
                                        <div class="invalid-feedback">
                                            please input Price
                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="form-label" for="price_usd_onsite">Price USD</label>
                                        <input class="form-control" type="number" id="price_usd_onsite"
                                            name="price_usd_onsite" placeholder="0" required>
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
                                        <input class="form-control" type="number" id="kuota" name="kuota"
                                            placeholder="0">
                                        <div class="invalid-feedback">
                                            please input Price
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group mb-3">
                                        <label class="form-label" for="status">Status</label>
                                        <select class="form-select" name="status" id="status">
                                            <option selected>Select Status</option>
                                            <option value="1">Publish</option>
                                            <option value="0">UnPublish</option>
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
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
                <!-- end card -->
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<!-- modal category -->
<div id="add-data-category" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header px-2">
                <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Category</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center w-75 mx-auto auth-logo mb-4">
                            <a href="" class="logo-dark">
                                <span><img src="{{ asset('assets/images/logo-dark.png') }}" alt="" height="22"></span>
                            </a>

                            <a href="" class="logo-light">
                                <span><img src="{{ asset('assets/images/logo-dark.png') }}" alt="" height="22"></span>
                            </a>
                            <h4 class="mt-4">Add new Category</h4>
                        </div>
                        <form class="needs-validation" action="{{route('storeCategoryReg')}}" method="post" novalidate>
                            @csrf
                            <div class="form-group mb-3">
                                <label class="form-label" for="category_name">Category</label>
                                <input class="form-control" name="category_name" type="text" id="category_name"
                                    placeholder="Input Category" required>
                                <div class="invalid-feedback">
                                    please input Category
                                </div>
                            </div>
                            <div class="form-group mb-0 text-center">
                                <button class="btn btn-primary w-100" type="submit"> Submit </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- modal ClassRegis -->
<div id="add-data-class" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header px-3">
                <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Class Category</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center w-75 mx-auto auth-logo mb-4">
                            <a href="" class="logo-dark">
                                <span><img src="{{ asset('assets/images/logo-dark.png') }}" alt="" height="22"></span>
                            </a>
                            <a href="" class="logo-light">
                                <span><img src="{{ asset('assets/images/logo-dark.png') }}" alt="" height="22"></span>
                            </a>
                            <h4 class="mt-4">Add new Class</h4>
                        </div>
                        <form class="needs-validation" action="{{route('storeClassCategory')}}" method="post"
                            novalidate>
                            @csrf
                            <div class="form-group mb-3">
                                <label class="form-label" for="class_name">Class Name</label>
                                <input class="form-control" type="text" name="class_name" id="class_name" required
                                    placeholder="Input Class">
                                <div class="invalid-feedback">
                                    please input Class Name
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label" for="class-category">Category</label>
                                <select class="form-select" name="category_id" id="class-category" required>
                                    @foreach ($categoryReg as $category)
                                    <option value="{{$category->id}}">{{$category->category_name}}</option>
                                    @endforeach
                                </select>
                                <div class="invalid-feedback">
                                    please Select Category
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label" for="date-class">Date</label>
                                <input class="form-control" type="date" name="date" id="date-class">
                                <div class="invalid-feedback">
                                    please Select Date
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label" for="date-time">Time</label>
                                <input class="form-control" type="time" name="time" id="date-time">
                                <div class="invalid-feedback">
                                    please Input time
                                </div>
                            </div>
                            <div class="form-group mb-0 text-center">
                                <button class="btn btn-primary w-100" type="submit"> Submit </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>