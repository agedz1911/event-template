@extends('layouts.mainLayout')

@section('title', 'Home')

@section('content')

<section class="bg-half-260 d-table w-100" style="background-image: url('{{asset('assets/images/comingsoon.jpg')}}');">
    <div class="bg-overlay bg-gradient-red-blue" style="opacity: 0.8;"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12">
                <div class="title-heading mt-2">
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <img src="/images/logo-icon.png" class="avatar avatar-small" alt="">
                        <div class="">
                            <!-- <p class="mb-0 fst-italic fw-bold text-white">The 5<sup>th</sup></p> -->
                            <h1 class="display-1 pt-0 fw-bold text-white mb-0">INACHD</h1>
                        </div>
                    </div>
                    <h5 class="text-center text-white">The 5<sup>th</sup> Scientific Meeting of Indonesian Congenital Heart Disease</h6>
                        <div class="text-center">
                            <p class="badge bg-primary text-white fst-italic">“ Unite to Fight Congenital Heart Disease ”</p>
                        </div>
                        <p class="text-center text-white">July 11<sup>th</sup> - 14<sup>th</sup>, 2024 <br>
                            Double Tree by Hilton Hotel, Jakarta, Indonesia</p>
                        <div class="mt-4 pt-2 text-center">
                            <a href="/registration/" class="btn btn-outline-primary"><i class="uil uil-plus"></i> Join the Congress</a>
                        </div>
                </div>
            </div><!--end col-->

            <!-- <div class="col-lg-6 col-md-6 mt-5 mt-sm-0">
                <img src="images/landing-02.png" class="img-fluid" alt="">
            </div> -->
        </div>
    </div>
</section>
<!--end section-->
<!-- <div class="position-relative">
    <div class="shape overflow-hidden text-white">
        <svg viewBox="0 0 2880 250" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M720 125L2160 0H2880V250H0V125H720Z" fill="currentColor"></path>
        </svg>
    </div>
</div> -->
<div class="position-relative">
    <div class="shape overflow-hidden text-white">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</div>

<section class="section">
    <!-- About Start -->
    <div class="container ">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="features-absolute">
                    <div class="row" id="countdown">
                        <div class="col-lg-3 col-md-3 col-6 mt-4 mt-md-0 pt-2 pt-md-0">
                            <div class="card features feature-clean explore-feature bg-gradient-blue p-4 px-md-3 border-0 rounded-md shadow text-center">
                                <div class="h4 icons text-light text-center mx-auto" id="days">
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class="col-lg-3 col-md-3 col-6 mt-4 mt-md-0 pt-2 pt-md-0">
                            <div class="card features feature-clean explore-feature bg-gradient-blue p-4 px-md-3 border-0 rounded-md shadow text-center">
                                <div class="h4 icons text-light text-center mx-auto" id="hours">
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class="col-lg-3 col-md-3 col-6 mt-4 mt-md-0 pt-2 pt-md-0">
                            <div class="card features feature-clean explore-feature bg-gradient-blue p-4 px-md-3 border-0 rounded-md shadow text-center">
                                <div class="h4 icons text-light text-center mx-auto" id="mins">
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class="col-lg-3 col-md-3 col-6 mt-4 mt-md-0 pt-2 pt-md-0">
                            <div class="card features feature-clean explore-feature bg-gradient-blue p-4 px-md-3 border-0 rounded-md shadow text-center">
                                <div class="h4 icons text-light text-center mx-auto" id="secs">
                                </div>
                            </div>
                        </div><!--end col-->
                    </div>
                </div>
            </div>
        </div><!--end row-->
        <div class="row align-items-center mt-100 mt-60">
            <div class="col-lg-6 col-md-6">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-5 mt-4 mt-lg-0 pt-2 pt-lg-0">
                        <div class="card bg-gradient-blue work-container work-modern overflow-hidden rounded border-0 shadow-md">
                            <div class="card-body p-0 ">
                                <img src="{{asset('assets/images/landing/doubletre.jpg')}}" class="img-fluid" alt="Doubletree">
                                <div class="overlay-work bg-dark"></div>
                                <div class="content">
                                    <a href="javascript:void(0)" class="title text-white d-block fw-bold">DoubleTree by hilton</a>

                                    <small class="text-light">Jakarta</small>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-7 col-7">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 mt-4 mt-lg-0 pt-2 pt-lg-0">
                                <div class="card bg-gradient-blue work-container work-modern overflow-hidden rounded border-0 shadow-md">
                                    <div class="card-body p-0">
                                        <img src="{{asset('assets/images/landing/harapan-kita.jpg')}}" class="img-fluid" alt="Doubletree">
                                        <div class="overlay-work bg-dark"></div>
                                        <div class="content">
                                            <a href="javascript:void(0)" class="title text-white d-block fw-bold">National Cardiovascular Centre</a>

                                            <small class="text-light">Harapan Kita</small>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end col-->

                            <div class="col-lg-12 col-md-12 mt-4 pt-2">
                                <div class="card bg-gradient-blue work-container work-modern overflow-hidden rounded border-0 shadow-md">
                                    <div class="card-body p-0">
                                        <img src="{{asset('assets/images/landing/doubletre2.jpg')}}" class="img-fluid" alt="Doubletree">
                                        <div class="overlay-work bg-dark"></div>
                                        <div class="content">
                                            <a href="javascript:void(0)" class="title text-white d-block fw-bold">DoubleTree by hilton</a>
                                            <small class="text-light">Jakarta</small>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end col-->

            <div class="col-lg-6 col-md-6 mt-4 mt-lg-0 pt- pt-lg-0">
                <div class="ms-lg-4">
                    <div class="section-title mb-0 pb-2">
                        <img src="images/logo-icon.png" class="avatar avatar-ex-md mb-3" alt="">
                        <h1 class="heading fw-bold text-primary">The 5<sup>th</sup> INACHD</h1>
                        <h4 class="mb-2 fw-bold text-primary"> Scientific Meeting of Indonesian Congenital Heart Disease</h4>
                        <h6 class="text-danger">" Unite to Fight Congenital Heart Disease "</h6>
                        <p class="text-muted para-desc">Double Tree by Hilton Hotel, <br>
                            National Cardiovascular Centre Harapan Kita (NCCHK)
                        </p>
                        <p class="text-muted para-desc mb-0">July 11<sup>th</sup> - 14<sup>th</sup>, 2024 </p>
                        <p class="text-muted para-desc mb-0">Jakarta, Indonesia </p>
                    </div>

                    <div class="mt-2 pt-2">
                        <!-- <a href="javascript:void()"  class="btn btn-primary m-1">Read More<i class="uil uil-angle-right-b align-middle"></i></a> -->
                        <!-- <a href="javascript:void()" class="btn btn-icon btn-pills btn-primary m-1 lightbox"><i data-feather="video" class="icons"></i></a> -->
                        <!-- <a href="#!" data-type="youtube" data-id="yba7hPeTSjk" class="btn btn-icon btn-pills btn-primary m-1 lightbox"><i data-feather="video" class="icons"></i></a> -->
                    </div>
                </div>
            </div>
        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->

<section class="section bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="section-title">
                    <p class="badge bg-gradient-primary fw-bold rounded-pill">Important Dates</p>
                    <ul class="list-unstyled mb-0 text-muted">
                        @foreach ($important_dates as $item)
                        <li class="mb-0"><span class="text-primary h5 me-2"><i class="uil uil-angle-double-right align-middle"></i></span>{{$item->title}}:
                            {{\Carbon\Carbon::parse($item->date)->format('l, j F Y')}}
                        </li>
                        @endforeach
                    </ul>

                    <p class="badge bg-gradient-primary mt-3 fw-bold rounded-pill">Abstract Submission Deadline </p>
                    <ul class="list-unstyled mb-0 text-muted mt-2 mb-4">
                        <li class="mb-0"><span class="text-primary h5 me-2"><i class="uil uil-angle-double-right align-middle"></i></span>Open submission: </li>
                        <li class="mb-0"><span class="text-primary h5 me-2"><i class="uil uil-angle-double-right align-middle"></i></span>Acceptance announcement: </li>
                        <li class="mb-0"><span class="text-primary h5 me-2"><i class="uil uil-angle-double-right align-middle"></i></span>INACHD Conference: </li>

                    </ul>
                </div>
            </div><!--end col-->

            <div class="col-lg-6 col-md-6 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <div class="section-title text-center">
                    <p class="badge bg-gradient-primary fw-bold rounded-pill">Main Menu Shortcut</p>
                    <div class="row justify-content-evenly">
                        <div class="col-lg-4 col-md-4 col-6 pt-2">
                            <div class="features text-center pt-3 pb-3">
                                <i class="uil uil-graduation-cap h1 text-danger"></i>
                                <div class="content mt-3">
                                    <a href="/congress-information/#faculties" class="text-primary">
                                        <h5>Faculties</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-6 pt-2">
                            <div class="features text-center pt-3 pb-3">
                                <i class="uil uil-user-arrows h1 text-danger"></i>
                                <div class="content mt-3">
                                    <a href="/congress-information/#committee" class="text-primary">
                                        <h5>Organizing Committee</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-6 pt-2">
                            <div class="features text-center pt-3 pb-3">
                                <i class="uil uil-presentation-line h1 text-danger"></i>
                                <div class="content mt-3">
                                    <a href="/scientific-program/#schedule" class="text-primary">
                                        <h5>Scientific Schedule</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-6 pt-2">
                            <div class="features text-center pt-3 pb-3">
                                <i class="uil uil-pricetag-alt h1 text-danger"></i>
                                <div class="content mt-3">
                                    <a href="/registration/" class="text-primary">
                                        <h5>Registration</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-lg-4 col-md-4 col-6 pt-2">
                                <div class="features text-center pt-3 pb-3">
                                    <i class="uil uil-comment-message h1 text-danger"></i>
                                    <div class="content mt-3">
                                        <a href="javascript:void(0)" class="text-primary"><h5>Registration</h5></a>
                                    </div>
                                </div>
                            </div> -->
                        <div class="col-lg-4 col-md-4 col-6 pt-2">
                            <div class="features text-center pt-3 pb-3">
                                <i class="uil uil-upload h1 text-danger"></i>
                                <div class="content mt-3">
                                    <a href="submission/#submission" class="text-primary">
                                        <h5>Abstract Submission</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end col-->

        </div><!--end row-->
    </div><!--end container-->
</section>

<section class="section pt-0 bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="video-solution-cta position-relative" style="z-index: 1;">
                    <div class="content mt-md-4 pt-md-2">
                        <div class="row justify-content-center">
                            <div class="col-lg-10 text-center">
                                <div class="ratio ratio-21x9">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.4884569711357!2d106.84049797464631!3d-6.199105360728468!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f46ad4ba231d%3A0x2dbd0001fc1c5d26!2sDoubleTree%20by%20Hilton%20Hotel%20Jakarta%20-%20Diponegoro!5e0!3m2!1sid!2sid!4v1711078615943!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-md-6 mt-4 pt-2">
                                        <div class="section-title text-md-start text-light">
                                            <h6 class="">Welcome to the Magnificent Venue</h6>
                                            <h4 class="title mb-0">Bali, Indonesia</h4>
                                            <p>Join us to Discover and Explore Bali in social program <br><a href="/social-program/#tours" class="text-white-50">Read More <i data-feather="arrow-right" class="fea icon-sm"></i></a></p>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-12 mt-4 pt-md-2">
                                        <div class="section-title text-light text-md-start">
                                            <p class="para-desc">Bali has developed into a world of
                                                its own. It captures not only what is special about Indonesia, but
                                                embodies a unique spirit that can only be found on the island.</p>
                                            <a href="/venue/#venue" class="text-white-50">Read More <i data-feather="arrow-right" class="fea icon-sm"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row -->
        <div class="feature-posts-placeholder bg-gradient-blue-red"></div>
    </div><!--end container-->
</section><!--end section-->

@endsection