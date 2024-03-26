@extends('dashboard.dashboardLayout')

@section('title', 'My Account')

@section('content')
<div class="container-fluid">

    <!-- start page title -->
    <div class="py-3 py-lg-4">
        <div class="row">
            <div class="col-lg-6">
                <h4 class="page-title mb-0">My Account</h4>
            </div>
            <div class="col-lg-6">
                <div class="d-none d-lg-block">
                    <ol class="breadcrumb m-0 float-end">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashtrap</a></li>
                        <li class="breadcrumb-item active">My Account</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- end page title -->
    <div class="card">
        <div class="card-body">
            <form action="{{route('storeProfile')}}" method="POST" class="needs-validation mx-2" novalidate>
                @csrf
                <div class="row">
                    <h3 class="mb-3">Biodata</h3>
                    <div class="col-md-6 col-12 pt-2">
                        <div class="form-group mb-3">
                            <label class="form-label" for="name">Full Name</label>
                            <input class="form-control" type="text" disabled id="name" value="{{Auth::user()->name}}"
                                required name="name" placeholder="Enter your Name">
                            <div class="invalid-feedback">
                                please input title
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-group mb-3">
                            <label class="form-label" for="email">Email</label>
                            <input class="form-control" type="text" id="email" disabled value="{{Auth::user()->email}}"
                                required name="email" placeholder="Enter your Name">
                            <div class="invalid-feedback">
                                please input title
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-6 col-12 pt-2">
                        <div class="row">
                            <div class="col-lg-4 col-12 pt-2">
                                <label for="title" class="form-label">Title</label>
                                <div class="d-flex gap-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="title" value="prof" id="prof"
                                            {{ $biodata && $biodata->title == 'prof' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="prof">
                                            Prof.
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="title" value="MD" id="MD" {{
                                            $biodata && $biodata->title == 'MD' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="MD">
                                            MD
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="title" value="Mr" id="Mr" {{
                                            $biodata && $biodata->title == 'Mr' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="Mr">
                                            Mr
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="title" value="Miss" id="Miss"
                                            {{ $biodata && $biodata->title == 'Miss' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="Miss">
                                            Miss
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 col-12 pt-2">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="speciality">Speciality</label>
                                    <select required class="form-select" id="speciality" name="speciality">
                                        <option value="" disabled selected>Select Speciality</option>

                                        @foreach(['Specialist', 'Subspecialist', 'General Practitioner', 'Resident',
                                        'Medical Student', 'Nurse'] as $speciality)

                                        <option value="{{ $speciality }}" {{ old('speciality', $biodata->speciality ??
                                            '') == $speciality ? 'selected' : '' }}>{{ $speciality }}</option>

                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">
                                        Select your speciality
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-12 pt-2">
                        <div class="form-group mb-3">
                            <label class="form-label" for="certificate">Name on Certificate</label>
                            <input class="form-control" type="text" id="certificate"
                                value="{{ $biodata ? $biodata->nameCertificate : '' }}" required name="nameCertificate"
                                placeholder="Enter for your Certificate">
                            <div class="invalid-feedback">
                                input your name certificate
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-12 pt-2">
                        <div class="form-group mb-3">
                            <label class="form-label" for="institution">Institutions</label>
                            <input class="form-control" value="{{ $biodata ? $biodata->institution : '' }}" type="text"
                                id="institution" required name="institution" placeholder="Enter your Institution">
                            <div class="invalid-feedback">
                                input your institution
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-12 pt-2">
                        <div class="form-group mb-3">
                            <label class="form-label" for="country">Country</label>
                            <select required class="form-select" id="country" name="country">
                                <option value="{{ $biodata ? $biodata->country : '' }}">{{ $biodata ? $biodata->country
                                    : 'Select Country' }}</option>
                                @foreach ($countries as $country)
                                <option value="{{ $country['name'] }}">{{ $country['emoji'] }}
                                    {{ $country['name'] }}
                                </option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback">
                                Select your Country
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-12 pt-2">
                        <div class="form-group mb-3">
                            <label class="form-label" for="province">Province / State</label>
                            <input class="form-control" value="{{ $biodata ? $biodata->province : '' }}" type="text"
                                id="province" name="province" placeholder="Enter your Province">
                            <div class="invalid-feedback">
                                input your Province / State
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-12 pt-2">
                        <div class="form-group mb-3">
                            <label class="form-label" for="city">City</label>
                            <input class="form-control" value="{{ $biodata ? $biodata->city : '' }}" required
                                type="text" id="city" name="city" placeholder="Enter your City">
                            <div class="invalid-feedback">
                                input your City
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-12 pt-2">
                        <div class="form-group mb-3">
                            <label class="form-label" for="address">Address</label>
                            <textarea class="form-control" placeholder="Enter your Address" name="address" id="address"
                                rows="3">{{ $biodata ? $biodata->address : '' }}</textarea>
                            <div class="invalid-feedback">
                                input your Address
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-12 pt-2">
                        <div class="form-group mb-3">
                            <label class="form-label" for="zipcode">Zip Code</label>
                            <input class="form-control" value="{{ $biodata ? $biodata->zipcode : '' }}" type="text"
                                id="zipcode" name="zipcode" placeholder="Enter your Zip Code">
                            <div class="invalid-feedback">
                                input your zip code
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-12 pt-2">
                        <div class="form-group mb-3">
                            <label class="form-label" for="phoneNumber">Phone Number</label>
                            <input class="form-control" value="{{ $biodata ? $biodata->phoneNumber : '' }}" required
                                type="tel" id="phoneNumber" name="phoneNumber" placeholder="Enter your Phone Number">
                            <div class="invalid-feedback">
                                input your Phone Number
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-12 pt-2">
                        <div class="form-group mb-3">
                            <label class="form-label" for="secondEmail">Second Email</label>
                            <input class="form-control" value="{{ $biodata ? $biodata->secondEmail : '' }}" type="email"
                                id="secondEmail" name="secondEmail" placeholder="Enter your fax">
                            <div class="invalid-feedback">
                                input your email
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <button class="btn btn-primary mt-3">
                        {{ $biodata ? 'Update' : 'Save' }}
                    </button>
                </div>
            </form>

        </div>
    </div>

</div> <!-- container -->
@endsection