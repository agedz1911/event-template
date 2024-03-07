@extends('layouts.mainLayout')

@section('title', 'Home')

@section('content')

    <div class="bg-half-170 pb-0 bg-gradient-blue d-table w-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 order-last order-md-first mt-sm-2 ">
                    <div class="title-heading">
                        <img src="images/logo-icon.png" class="avatar avatar-small" alt="">
                        <h4 class="heading text-white">Kongres Nasional </h4>
                        <h4 class="text-white mb-3 title-dark"> Perhimpunan Dokter Spesialis THT Bedah Kepala Dan Leher
                            Indonesia Ke-XX</h4>
                        <p class="para-desc text-white-50">Lombok, Nusa Tenggara Barat, Indonesia <br>
                            30 Oktober - 1 November 2025</p>
                        <div class="mt-4 pt-2">
                            <a href="javascript:void(0)" class="btn btn-light">Baca Lebih</a>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-6 col-md-6 mt-5 mt-sm-0">
                    <img src="{{ asset('assets/images/landing-02.png') }}" class="img-fluid" alt="">
                </div>
            </div><!--end row-->
        </div> <!--end container-->
    </div><!--end section-->
    <div class="position-relative">
        <div class="shape overflow-hidden text-white">
            <svg viewBox="0 0 2880 250" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M720 125L2160 0H2880V250H0V125H720Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>

    <section class="section">
        <!-- About Start -->
        <div class="container mt-100 mt-60">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-6 mt-4 mt-lg-0 pt-2 pt-lg-0">
                            <div
                                class="card bg-gradient-blue work-container work-modern overflow-hidden rounded border-0 shadow-md">
                                <div class="card-body p-0 ">
                                    <img src="{{ asset('assets/images/j2.png') }}" class="img-fluid" alt="work-image">
                                    <div class="overlay-work"></div>
                                    <!-- <div class="content">
                                                    <a href="javascript:void(0)" class="title text-white d-block fw-bold">Web Development</a>
                                                    <small class="text-light">IT & Software</small>
                                                </div> -->
                                </div>
                            </div>
                        </div><!--end col-->

                        <div class="col-lg-6 col-6">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 mt-4 mt-lg-0 pt-2 pt-lg-0">
                                    <div
                                        class="card bg-gradient-blue work-container work-modern overflow-hidden rounded border-0 shadow-md">
                                        <div class="card-body p-0">
                                            <img src="{{ asset('assets/images/j1.png') }}" class="img-fluid"
                                                alt="work-image">
                                            <div class="overlay-work bg-dark"></div>
                                            <!-- <div class="content">
                                                            <a href="javascript:void(0)" class="title text-white d-block fw-bold">Michanical Engineer</a>
                                                            <small class="text-light">Engineering</small>
                                                        </div> -->
                                        </div>
                                    </div>
                                </div><!--end col-->

                                <div class="col-lg-12 col-md-12 mt-4 pt-2">
                                    <div
                                        class="card bg-gradient-blue work-container work-modern overflow-hidden rounded border-0 shadow-md">
                                        <div class="card-body p-0">
                                            <img src="{{ asset('assets/images/j3.png') }}" class="img-fluid"
                                                alt="work-image">
                                            <div class="overlay-work bg-dark"></div>
                                            <!-- <div class="content">
                                                            <a href="javascript:void(0)" class="title text-white d-block fw-bold">Chartered Accountant</a>
                                                            <small class="text-light">C.A.</small>
                                                        </div> -->
                                        </div>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end col-->

                <div class="col-lg-6 col-md-6 mt-4 mt-lg-0 pt- pt-lg-0">
                    <div class="ms-lg-4">
                        <div class="section-title mb-4 pb-2">
                            <h4 class="title mb-4">KONAS XX PERHATI-KL</h4>
                            <p class="text-muted para-desc">Kongres Nasional
                                Perhimpunan Dokter Spesialis <span class="text-primary"> THT Bedah Kepala Dan Leher</span>
                                Indonesia Ke-XX</p>
                            <p class="text-muted para-desc mb-0">30 Oktober - 1 November 2025</p>
                            <p class="text-muted para-desc mb-0">Lombok, Nusa Tenggara Barat, Indonesia </p>
                        </div>

                        <div class="mt-4 pt-2">
                            <a href="javascript:void()" class="btn btn-primary m-1">Daftar Sekarang <i
                                    class="uil uil-angle-right-b align-middle"></i></a>
                            <a href="javascript:void()" class="btn btn-icon btn-pills btn-primary m-1 lightbox"><i
                                    data-feather="video" class="icons"></i></a>
                            <!-- <a href="#!" data-type="youtube" data-id="yba7hPeTSjk" class="btn btn-icon btn-pills btn-primary m-1 lightbox"><i data-feather="video" class="icons"></i></a> -->
                        </div>
                    </div>
                </div>
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->

    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title ms-lg-4">
                        <h4 class="title mb-4">Important Dates</h4>
                        <ul class="list-unstyled mb-0 text-muted">
                            <li class="mb-0"><span class="text-primary h5 me-2"><i
                                        class="uil uil-angle-double-right align-middle"></i></span>Early Bird Registration:
                                Friday, March 1<sup>st</sup>, 2024</li>
                            <li class="mb-0"><span class="text-primary h5 me-2"><i
                                        class="uil uil-angle-double-right align-middle"></i></span>Deadline for abstract
                                submission: Friday, April 26<sup>th</sup>, 2024</li>
                            <li class="mb-0"><span class="text-primary h5 me-2"><i
                                        class="uil uil-angle-double-right align-middle"></i></span>Pre Congress Workshop:
                                Thursday, June 6<sup>th</sup>, 2024</li>
                            <li class="mb-0"><span class="text-primary h5 me-2"><i
                                        class="uil uil-angle-double-right align-middle"></i></span>Nurse Symposium &
                                Workshop: Thursday, June 6<sup>th</sup>, 2024</li>
                            <li class="mb-0"><span class="text-primary h5 me-2"><i
                                        class="uil uil-angle-double-right align-middle"></i></span>Opening Ceremony:
                                Friday, June 7<sup>th</sup>, 2024 </li>
                            <li class="mb-0"><span class="text-primary h5 me-2"><i
                                        class="uil uil-angle-double-right align-middle"></i></span>Business Meeting of INS:
                                Friday, June 7<sup>th</sup>, 2024</li>
                            <li class="mb-0"><span class="text-primary h5 me-2"><i
                                        class="uil uil-angle-double-right align-middle"></i></span>Conference: Friday -
                                Sunday, June 7<sup>th</sup> - 9<sup>th</sup>, 2024</li>
                            <li class="mb-0"><span class="text-primary h5 me-2"><i
                                        class="uil uil-angle-double-right align-middle"></i></span>Free Paper Presentation:
                                Friday & Saturday, June 7<sup>th</sup> & 8<sup>th</sup>, 2024</li>
                            <li class="mb-0"><span class="text-primary h5 me-2"><i
                                        class="uil uil-angle-double-right align-middle"></i></span>Exhibition: Friday -
                                Sunday, June 7<sup>th</sup> - 9<sup>th</sup>, 2024 </li>
                            <li class="mb-0"><span class="text-primary h5 me-2"><i
                                        class="uil uil-angle-double-right align-middle"></i></span>Closing Ceremony:
                                Sunday, June 9<sup>th</sup>, 2024 </li>
                            <li class="mb-0"><span class="text-primary h5 me-2"><i
                                        class="uil uil-angle-double-right align-middle"></i></span>Cultural Dinner:
                                Saturday, June 8<sup>th</sup>, 2024 </li>
                        </ul>
                        <!-- <a href="javascript:void(0)" class="btn btn-primary mt-3">Join now</a> -->
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card rounded shadow border-0">
                        <div class="card-body p-1">
                            <div class="ratio ratio-21x9">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.720459553037!2d106.63387677464756!3d-6.3004148616611815!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fb535f152305%3A0x34406ed8b098f478!2sIndonesia%20Convention%20Exhibition!5e0!3m2!1sid!2sid!4v1699941398955!5m2!1sid!2sid"
                                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 pt-2">
                        <a href="https://www.google.com/maps/dir//Indonesia+Convention+Exhibition,+Jl.+BSD+Grand+Boulevard+No.1,+Pagedangan,+Kec.+Pagedangan,+Kabupaten+Tangerang,+Banten+15339/@-6.3004149,106.6338768,17z/data=!4m9!4m8!1m0!1m5!1m1!1s0x2e69fb535f152305:0x34406ed8b098f478!2m2!1d106.6364517!2d-6.3004202!3e0?entry=ttu"
                            target="_blank" class="btn btn-primary m-1"><i class="uil uil-compass mx-1"></i> Direction to
                            Venue</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
