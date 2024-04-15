@extends('layouts.mainLayout')

@section('title', 'Registrations')

@section('content')
<section class="bg-half d-table w-100"
    style="background: url('{{ asset('assets/images/landing/aboutus.png') }}') bottom right;">
    <div class="bg-overlay bg-gradient-red-blue" style="opacity: 0.8;"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 text-center">
                <div class="page-next-level title-heading">
                    <h3 class="title-dark text-white"> Registration </h3>
                    <p class="text-white-50 para-desc mb-0 mx-auto">Online Registration, Registration Information <span
                            class="text-white fw-bold">INACHD</span></p>
                    <div class="page-next">
                        <nav aria-label="breadcrumb" class="d-inline-block bg-light rounded">
                            <ul class="breadcrumb rounded shadow mb-0">
                                <li class="breadcrumb-item"><a href="#">INACHD</a></li>
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Registration</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>
<div class="position-relative">
    <div class="shape overflow-hidden text-white">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</div>

<section class="section" id="registration">
    <div class="container ">
        <div class="row justify-content-center">
            <div class="col-12 pt-2 mt-sm-0 pt-sm-0">
                <div class="section-title text-center mb-4 pb-2">
                    <p class="badge bg-primary bg-gradient-primary fw-bold rounded-pill">Registration</p>
                    <h4 class="title text-primary mb-4">Registration Fees</h4>

                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
        <div class="row justify-content-center">

            @foreach ($productReg as $registration)
            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                <div class="card pricing-rates business-rate shadow bg-light rounded text-center border-0">
                    <div class="card-body py-5">
                        <h6 class="title fw-bold text-uppercase text-primary mb-4">{{ $registration->product_name }}
                        </h6>
                        @php
                        $currentDate = \Carbon\Carbon::now();
                        @endphp
                        @if ($currentDate <= \Carbon\Carbon::parse($registration->end_date_early))
                            <p class="mb-0">Early Bird Up to<br>
                                <small>
                                    {{ \Carbon\Carbon::parse($registration->end_date_early)->format(' j FY') }}
                                </small>
                            </p>
                            <div class="d-flex justify-content-center mb-4">
                                <span class="h4 mb-0 mt-2">IDR</span>
                                <span class="price h1 mb-0">{{ number_format($registration->price_idr_early, 0, ',',
                                    '.') }}</span>
                            </div>
                            <div class="d-flex justify-content-center mb-4">
                                <span class="h4 mb-0 mt-2">USD</span>
                                <span class="price h1 mb-0">{{ number_format($registration->price_usd_early, 0, ',',
                                    '.') }}</span>
                            </div>
                            @elseif ($currentDate <= \Carbon\Carbon::parse($registration->end_date_normal))
                                <p class="mb-0">Regular Registration <br>
                                    <small>{{ \Carbon\Carbon::parse($registration->start_date_normal)->format(' j') }} -
                                        {{ \Carbon\Carbon::parse($registration->end_date_normal)->format(' j F Y') }}
                                    </small>
                                </p>
                                <div class="d-flex justify-content-center mb-4">
                                    <span class="h4 mb-0 mt-2">IDR</span>
                                    <span class="price h1 mb-0">{{ number_format($registration->price_idr_normal, 0,
                                        ',', '.') }}</span>
                                </div>
                                <div class="d-flex justify-content-center mb-4">
                                    <span class="h4 mb-0 mt-2">USD</span>
                                    <span class="price h1 mb-0">{{ number_format($registration->price_usd_normal, 0,
                                        ',', '.') }}</span>
                                </div>
                                @else
                                <p class="mb-0">Late / Onsite after <br>
                                    <small>{{ \Carbon\Carbon::parse($registration->start_date_onsite)->format(' j F
                                        Y') }}</small>
                                </p>
                                <div class="d-flex justify-content-center mb-4">
                                    <span class="h4 mb-0 mt-2">IDR</span>
                                    <span class="price h1 mb-0">{{ number_format($registration->price_idr_onsite, 0,
                                        ',', '.') }}</span>
                                </div>
                                <div class="d-flex justify-content-center mb-4">
                                    <span class="h4 mb-0 mt-2">IDR</span>
                                    <span class="price h1 mb-0">{{ number_format($registration->price_usd_onsite, 0,
                                        ',', '.') }}</span>
                                </div>
                                @endif

                                <ul class="list-unstyled mb-0 ps-0">
                                    <li class="h6 text-muted mb-0"><span class="text-primary h5 me-2"><i
                                                class="uil uil-check-circle align-middle"></i></span>{{
                                        $registration->classReg->class_name }}
                                    </li>
                                </ul>
                                <form action="{{ route('add.reg.to.cart') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="product_registration_id" value="{{ $registration->id }}">
                                    <button type="submit" class="btn btn-primary">Add to cart</button>
                                </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <!--end container-->
</section>
<!--end section-->

<section class="section bg-light" id="registration-info">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 pt-2 mt-sm-0 pt-sm-0">
                <div class="section-title text-center mb-4 pb-2">
                    <p class="badge bg-primary bg-gradient-primary fw-bold rounded-pill">Registration</p>
                    <h4 class="title text-primary mb-4">Registration Information</h4>

                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->

        <div class="row">
            <div class="col-md-4 mt-4 pt-2">
                <ul class="nav nav-pills nav-justified flex-column bg-gradient-red-blue rounded shadow p-3 mb-0 sticky-bar"
                    id="pills-tab" role="tablist">
                    <li class="nav-item border rounded">
                        <a class="nav-link rounded active" id="general-info" data-bs-toggle="pill" href="#general"
                            role="tab" aria-controls="general" aria-selected="false">
                            <div class="text-start py-1 px-2">
                                <h6 class="mb-0">Entitlements</h6>
                            </div>
                        </a>
                        <!--end nav link-->
                    </li>
                    <!--end nav item-->

                    <li class="nav-item border rounded mt-2">
                        <a class="nav-link rounded" id="cardeography" data-bs-toggle="pill" href="#payment" role="tab"
                            aria-controls="payment" aria-selected="false">
                            <div class="text-start py-1 px-2">
                                <h6 class="mb-0">Payment Registration</h6>
                            </div>
                        </a>
                        <!--end nav link-->
                    </li>
                    <!--end nav item-->

                    <li class="nav-item border rounded mt-2">
                        <a class="nav-link rounded" id="eyecare" data-bs-toggle="pill" href="#info" role="tab"
                            aria-controls="info" aria-selected="false">
                            <div class="text-start py-1 px-2">
                                <h6 class="mb-0">General Information</h6>
                            </div>
                        </a>
                        <!--end nav link-->
                    </li>
                    <!--end nav item-->

                </ul>
                <!--end nav pills-->
            </div>
            <!--end col-->

            <div class="col-md-8 col-12 mt-4 pt-2">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade bg-white show active p-4 rounded shadow" id="general" role="tabpanel"
                        aria-labelledby="general-info">
                        <div class="mt-4">
                            <h5>Entitlements</h5>
                            <p class="text-muted my-3">Registered participants are entitled to admission to all
                                scientific sessions including trade exhibits, scheduled coffee breaks as well as
                                lunches. Each participant will receive a name badge and congress kit</p>
                        </div>
                    </div>
                    <!--end teb pane-->

                    <div class="tab-pane fade bg-white p-4 rounded shadow" id="payment" role="tabpanel"
                        aria-labelledby="cardeography">
                        <div class="mt-4">
                            <h5>Payment Registration</h5>
                            <p class="text-muted my-3">All payment for Registration can be transfer to the following
                                Bank Account:
                            </p>
                            <p class="text-muted fw-bold">
                                Bank Account Name : PP PERKI.ASMIHA<br>
                                Account Number: 117 000 777 8822<br>
                                Bank Name & Address: Bank Mandiri KK Harapan Kita, Slipi, Jakarta</p>
                            <p class="text-muted">After receiving both valid registration and payment form, a
                                registration confirmation will be sent
                                back to participants. The organizing committee suggests you carry the registration form
                                to the
                                congress. You may be asked for proof of identity. Delivery of material kits at the
                                congress would
                                be administered at the A-to-Z desks</p>
                        </div>
                    </div>
                    <!--end teb pane-->

                    <div class="tab-pane fade bg-white p-4 rounded shadow" id="info" role="tabpanel"
                        aria-labelledby="eyecare">
                        <div class="mt-4">
                            <h5>General Information</h5>
                            <p class="text-muted my-3">For Further information about registration please contact:</p>
                            <p class="text-muted">
                                Phone: (021) 5681149 <br>
                                Fax: (021) 5684220 <br>
                                E-mail: <a href="mailto:secretariat@inaheart.org"
                                    class="text-danger">secretariat@inaheart.org</a> / <a
                                    href="mailto:scientific.inaheart@gmail.com"
                                    class="text-danger">scientific.inaheart@gmail.com</a></p>
                        </div>
                    </div>
                    <!--end teb pane-->


                </div>
                <!--end tab content-->
            </div>
            <!--end col-->
        </div>
    </div>
</section>
@endsection

