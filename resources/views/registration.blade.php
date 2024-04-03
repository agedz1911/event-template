@extends('layouts.mainLayout')

@section('title', 'Registrations')

@section('content')
    <section class="bg-half d-table w-100" style="background: url('{{ asset('assets/images/aboutus.png') }}') center center;">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="page-next-level title-heading">
                        <h3 class="title-dark text-primary"> Congress Information </h3>
                        <p class="text-dark para-desc mb-0 mx-auto"> Organizing Committee, Faculties, General Information
                            <span class="text-primary">AESC 2024</span>
                        </p>
                        <div class="page-next">
                            <nav aria-label="breadcrumb" class="d-inline-block bg-primary rounded px-4 py-2">
                                <ul class="breadcrumb rounded shadow mb-0">
                                    <li class="breadcrumb-item"><a href="#">AESC</a></li>
                                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                                    <li class="breadcrumb-item text-dark" aria-current="page">Congress Information</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div> <!--end container-->
    </section><!--end section-->

    <section class="section bg-light" id="registration">
        <div class="container ">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center mb-4 pb-2">
                        <h6 class=" text-primary">Registration</h6>
                        <h4 class="title mb-4">Online Registration</h4>

                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <ul class="nav nav-pills nav-justified flex-column flex-sm-row rounded" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link rounded active" id="pills-cloud-tab" data-bs-toggle="pill"
                                href="#international" role="tab" aria-controls="international" aria-selected="false">
                                <div class="text-center py-2">
                                    <h6 class="mb-0">Indonesian Participant</h6>
                                </div>
                            </a>
                            <!--end nav link-->
                        </li>
                        <!--end nav item-->
    
                        <li class="nav-item">
                            <a class="nav-link rounded" id="pills-smart-tab" data-bs-toggle="pill" href="#national"
                                role="tab" aria-controls="national" aria-selected="false">
                                <div class="text-center py-2">
                                    <h6 class="mb-0">Foreign Participant</h6>
                                </div>
                            </a>
                            <!--end nav link-->
                        </li>
                        <!--end nav item-->
    
                        <!-- <li class="nav-item">
                                        <a class="nav-link rounded" id="pills-apps-tab" data-bs-toggle="pill" href="#pills-apps" role="tab" aria-controls="pills-apps" aria-selected="false">
                                            <div class="text-center py-2">
                                                <h6 class="mb-0">Service</h6>
                                            </div>
                                        </a>
                                    </li> -->
                    </ul>
                </div>
                
            </div>
            <div class="row pt-2">
                <a class="btn btn-outline-dark" href="">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart <span class="badge bg-danger">{{ count((array) session('cart')) }}</span>
                </a>
                <div class="col-12">
                   
                    <div class="tab-content" id="pills-tabContent">
                        
                        <div class="tab-pane fade show active" id="international" role="tabpanel"
                            aria-labelledby="pills-cloud-tab">
                            <div class="row mt-4">
                                
                                @foreach ($productReg as $registration)
                                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                                    <div class="card pricing-rates business-rate shadow bg-light rounded text-center border-0">
                                        <div class="card-body py-5">
                                            <h6 class="title fw-bold text-uppercase text-primary mb-4">{{$registration->product_name}}</h6>
                                            <p class="mb-0">Early Bird Up to<br>
                                            <small> {{\Carbon\Carbon::parse($registration->end_date_early)->format(' j F Y')}}</small></p>
                                            <div class="d-flex justify-content-center mb-4">
                                                <span class="h4 mb-0 mt-2">IDR</span>
                                                <span class="price h1 mb-0">{{ number_format($registration->price_idr_early, 0, ',', '.') }}</span>
                                            </div>
                                            <p class="mb-0">Regular Registration <br>
                                            <small>{{\Carbon\Carbon::parse($registration->start_date_normal)->format(' j')}} - {{\Carbon\Carbon::parse($registration->end_date_normal)->format(' j F Y')}}</small></p>
                                            <div class="d-flex justify-content-center mb-4">
                                                <span class="h4 mb-0 mt-2">IDR</span>
                                                <span class="price h1 mb-0">{{ number_format($registration->price_idr_normal, 0, ',', '.')}}</span>
                                            </div>
                                            <p class="mb-0">Late / Onsite after <br>
                                            <small>{{\Carbon\Carbon::parse($registration->start_date_onsite)->format(' j F Y')}}</small></p>
                                            <div class="d-flex justify-content-center mb-4">
                                                <span class="h4 mb-0 mt-2">IDR</span>
                                                <span class="price h1 mb-0">{{ number_format($registration->price_idr_onsite, 0, ',' , '.')}}</span>
                                            </div>
                                            
                                            <ul class="list-unstyled mb-0 ps-0">
                                                <li class="h6 text-muted mb-0"><span class="text-primary h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>{{$registration->classReg->class_name}}</li>
                                            </ul>
                                            <form action="{{route('add.reg.to.cart')}}" method="POST">
                                                @csrf
                                                <input type="hidden" name="product_registration_id" value="{{$registration->id}}">
                                                <button type="submit" class="btn btn-primary">Add to cart</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                
                            </div>
                        </div>
    
                        <div class="tab-pane fade" id="national" role="tabpanel" aria-labelledby="pills-smart-tab">
                            <div class="row mt-4">
                                @foreach ($productReg as $registration)
                                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                                    <div class="card pricing-rates business-rate shadow bg-light rounded text-center border-0">
                                        <div class="card-body py-5">
                                            <h6 class="title fw-bold text-uppercase text-primary mb-4">{{$registration->product_name}}</h6>
                                            <p class="mb-0">Early Bird Up to<br>
                                                <small> {{\Carbon\Carbon::parse($registration->end_date_early)->format(' j F Y')}}</small></p>
                                            <div class="d-flex justify-content-center mb-4">
                                                <span class="h4 mb-0 mt-2">USD</span>
                                                <span class="price h1 mb-0">{{$registration->price_usd_early}}</span>
                                            </div>
                                            <p class="mb-0">Regular Registration <br>
                                                <small>{{\Carbon\Carbon::parse($registration->start_date_normal)->format(' j')}} - {{\Carbon\Carbon::parse($registration->end_date_normal)->format(' j F Y')}}</small></p>
                                            <div class="d-flex justify-content-center mb-4">
                                                <span class="h4 mb-0 mt-2">USD</span>
                                                <span class="price h1 mb-0">{{$registration->price_usd_normal}}</span>
                                            </div>
                                            <p class="mb-0">Late / Onsite after <br>
                                                <small>{{\Carbon\Carbon::parse($registration->start_date_onsite)->format(' j F Y')}}</small></p>
                                            <div class="d-flex justify-content-center mb-4">
                                                <span class="h4 mb-0 mt-2">USD</span>
                                                <span class="price h1 mb-0">{{$registration->price_usd_onsite}}</span>
                                            </div>
                                            
                                            <ul class="list-unstyled mb-0 ps-0">
                                                <li class="h6 text-muted mb-0"><span class="text-primary h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>{{$registration->classReg->class_name}}</li>
                                            </ul>
                                            <form action="{{route('add.reg.to.cart')}}" method="POST">
                                                @csrf
                                                <input type="hidden" name="product_registration_id" value="{{$registration->id}}">
                                                <button type="submit" class="btn btn-primary">Add to cart</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div><!--end container-->
    </section><!--end section-->
    {{-- <div class="col-lg-10 col-12 mt-2 pt-2 ">
        <table class="table table-responsive table-hover table-bordered">
            <tr class="bg-warning text-center align-middle">
                <th style="width: 35%;">Category</th>
                <th colspan="2">Early Bird <br> Upto August 5<sup>th</sup>, 2024</th>
                <th colspan="2">Late / Onsite</th>
                <th>#</th>
            </tr>
            <tr class="align-middle text-muted">
                <td class="fw-bold">Specialist / Other Specialist</td>
                <td>IDR 1.500.000 </td>
                <td>USD 100</td>
                <td>IDR 2.000.000</td>
                <td>USD 150</td>
                <td class="text-end"><a href="https://expo.virconex-id.com/registration/aesc2024/"
                        class="btn btn-primary">Register Now </a></td>
            </tr>
            <tr class="align-middle text-muted">
                <td class="fw-bold">Resident / GP</td>
                <td>IDR 1.000.000 </td>
                <td>USD 70</td>
                <td>IDR 1.500.000</td>
                <td>USD 100</td>
                <td class="text-end"><a href="https://expo.virconex-id.com/registration/aesc2024/"
                        class="btn btn-primary">Register Now </a></td>
            </tr>

        </table>
    </div>
    <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
        <div class="card pricing-rates business-rate shadow bg-light rounded text-center border-0">
            <div class="card-body py-5">
                <h6 class="title fw-bold text-uppercase text-primary mb-4">Free</h6>
                <div class="d-flex justify-content-center mb-4">
                    <span class="h4 mb-0 mt-2">$</span>
                    <span class="price h1 mb-0">0</span>
                    <span class="h4 align-self-end mb-1">/mo</span>
                </div>
                
                <ul class="list-unstyled mb-0 ps-0">
                    <li class="h6 text-muted mb-0"><span class="text-primary h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>Full Access</li>
                    <li class="h6 text-muted mb-0"><span class="text-primary h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>Enhanced Security</li>
                    <li class="h6 text-muted mb-0"><span class="text-primary h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>Source Files</li>
                    <li class="h6 text-muted mb-0"><span class="text-primary h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>1 Domain Free</li>
                </ul>
                <a href="javascript:void(0)" class="btn btn-primary mt-4">Buy Now</a>
            </div>
        </div>
    </div><!--end col--> --}}

    <section class="section" id="regis-info">
        <div class="container">
            <div class="row align-items-end mb-4 pb-4">
                <div class="col-md-8">
                    <div class="section-title text-center text-md-start">
                        <h6 class="text-primary">Information</h6>
                        <h4 class="title mb-4">Registration & Accommodation</h4>
                        <p class="text-white-50 mb-0 para-desc">for all information regarding registration and accommodation
                            listed below</p>
                    </div>
                </div><!--end col-->

                <div class="col-md-4 mt-4 mt-sm-0">
                    <div class="text-center text-white text-md-end">
                        <i class="uil uil-info-circle"></i>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row">
                <div class="col-md-4 mt-4 pt-2">
                    <ul class="nav nav-pills nav-justified flex-column bg-white rounded shadow p-3 mb-0 sticky-bar"
                        id="pills-tab" role="tablist">

                        <li class="nav-item mt-2 border border-1">
                            <a class="nav-link rounded active" id="webdeveloping" data-bs-toggle="pill" href="#entitlement"
                                role="tab" aria-controls="entitlement" aria-selected="false">
                                <div class="text-center py-1">
                                    <h6 class="mb-0">Entitlements</h6>
                                </div>
                            </a>
                        </li><!--end nav item-->

                        <li class="nav-item mt-2 border border-1">
                            <a class="nav-link rounded" id="database" data-bs-toggle="pill" href="#fee" role="tab"
                                aria-controls="fee" aria-selected="false">
                                <div class="text-center py-1">
                                    <h6 class="mb-0">Registration Fee</h6>
                                </div>
                            </a><!--end nav link-->
                        </li><!--end nav item-->

                        <li class="nav-item mt-2 border border-1">
                            <a class="nav-link rounded" id="server" data-bs-toggle="pill" href="#cancellation"
                                role="tab" aria-controls="cancellation" aria-selected="false">
                                <div class="text-center py-1">
                                    <h6 class="mb-0">Cancellation Policy of Registration</h6>
                                </div>
                            </a><!--end nav link-->
                        </li><!--end nav item-->

                        <li class="nav-item mt-2 border border-1">
                            <a class="nav-link rounded" id="webdesigning" data-bs-toggle="pill" href="#onsite"
                                role="tab" aria-controls="onsite" aria-selected="false">
                                <div class="text-center py-1">
                                    <h6 class="mb-0">On-Site Registration</h6>
                                </div>
                            </a><!--end nav link-->
                        </li><!--end nav item-->

                        <!-- <li class="nav-item mt-2 border border-1">
                                <a class="nav-link rounded" id="webdesigning" data-bs-toggle="pill" href="#room-rate" role="tab" aria-controls="room-rate" aria-selected="false">
                                    <div class="text-center py-1">
                                        <h6 class="mb-0">Room Rate</h6>
                                    </div>
                                </a>
                            </li> --><!--end nav item-->

                        <!-- <li class="nav-item mt-2 border border-1">
                                <a class="nav-link rounded" id="webdesigning" data-bs-toggle="pill" href="#hotel-res" role="tab" aria-controls="hotel-res" aria-selected="false">
                                    <div class="text-center py-1">
                                        <h6 class="mb-0">Hotel Reservation</h6>
                                    </div>
                                </a>
                            </li> --><!--end nav item-->
                    </ul><!--end nav pills-->
                </div><!--end col-->

                <div class="col-md-8 col-12 mt-4 pt-2">
                    <div class="tab-content" id="pills-tabContent">

                        <div class="tab-pane fade bg-white show active p-4 rounded shadow" id="entitlement"
                            role="tabpanel" aria-labelledby="webdeveloping">

                            <div class="mt-4">
                                <p class="text-muted">Registered participants are entitled to admission to all scientific
                                    sessions including trade exhibits, scheduled coffee breaks as well as lunches. Each
                                    participant will receive a name badge and congress kit containing the final
                                    program/abstract.</p>

                            </div>
                        </div><!--end teb pane-->

                        <div class="tab-pane fade bg-white p-4 rounded shadow" id="fee" role="tabpanel"
                            aria-labelledby="database">

                            <div class="mt-4">
                                <p class="text-muted">All scientific registrants, including those presenting free paper
                                    must register as full participant and pay the relevant registration fees. Registration
                                    will not be confirmed until the committee has received the respective registration fee.
                                    To register, complete and mail the registration form together with your payment to the
                                    congress secretariat. Payment method can be through bank transfer of credit card (visa
                                    and master card only). </p>
                                <p class="text-muted">All payment for Registration can be transfer to the following Bank
                                    Account:</p>
                                <!-- <h5 class="mt-0">Indonesian Participant (IDR)</h5>
                                    <p class="text-muted">
                                        Bank Account Name : <span class="fw-bold"> PERSPEBSI </span><br>
                                        Account Number : <span class="fw-bold"> 22013-01-000412-30-9  </span><br>
                                        Bank Name & Address : <span class="fw-bold"> BRI Branch Kuningan Epicentrum </span>
                                    </p>
                                    <h5 class="mt-0">International Participant (USD)</h5>
                                    <p class="text-muted">
                                        Bank Account Name : <span class="fw-bold"> PT. PHARMA-PRO INTERNATIONAL </span><br>
                                        Account Number : <span class="fw-bold"> 308-2525-308  </span><br>
                                        Bank Name & Address : <span class="fw-bold"> Bank Central Asia </span> <br>
                                        Swift Code : <span class="fw-bold"> CENAIDJA </span>
                                    </p>
                                    <p class="text-muted">Bank charges will be borne by participants</p> -->

                            </div>
                        </div><!--end teb pane-->

                        <div class="tab-pane fade bg-white p-4 rounded shadow" id="cancellation" role="tabpanel"
                            aria-labelledby="server">

                            <div class="mt-4">
                                <p class="text-muted">Written notification of Registration must be received to the 18th
                                    Asian Epilepsy Surgery Congress secretariat. Refund of registration fees will be
                                    processed after the congress </p>
                            </div>
                        </div><!--end teb pane-->

                        <div class="tab-pane fade bg-white p-4 rounded shadow" id="onsite" role="tabpanel"
                            aria-labelledby="webdesigning">

                            <div class="mt-4">
                                <p class="text-muted">Those who have not registered in advance may register at on-site
                                    registration desk.</p>
                                <p class="text-muted">Only Debit / Credit Card (Master and Visa only) payment will be
                                    accepted during on-site registration. No refund will be made for on-site registration
                                    fees.</p>
                            </div>
                        </div><!--end teb pane-->

                        <div class="tab-pane fade bg-white p-4 rounded shadow" id="room-rate" role="tabpanel"
                            aria-labelledby="webdesigning">

                            <div class="mt-4">
                                <p class="text-muted">Hotel rooms at special congress rate are being held for the congress
                                    participants. <br>
                                    All rates are per night and per room included breakfast. </p>
                                <p class="text-muted">Reservation must be made through the congress secretariat to
                                    guarantee the indicated rate negotiated for the congress.</p>
                            </div>
                        </div><!--end teb pane-->

                        <div class="tab-pane fade bg-white p-4 rounded shadow" id="hotel-res" role="tabpanel"
                            aria-labelledby="webdesigning">

                            <div class="mt-4">
                                <p class="text-muted">Hotel Room availability is on “FIRST COME FIRST SERVE BASIS”. <br>
                                    The committee reserves the right to place participants at another hotel with similar
                                    standards in the event that rooms are no longer available at the hotel selected by
                                    participant. </p>
                                <p class="text-muted">Hotel reservations can be made by filing out website at
                                    https://aosbs-ins2024.org/ registration/#accommodationn.</p>
                                <p class="text-muted">Full payment is required and should be paid. Payment can be made with
                                    credit card (Master and Visa only) or bank transfer. NO CANCELLATION </p>
                            </div>
                        </div><!--end teb pane-->
                    </div><!--end tab content-->
                </div><!--end col-->
            </div><!--end row-->
        </div>
    </section>
@endsection
