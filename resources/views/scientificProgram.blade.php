@extends('layouts.mainLayout')

@section('title', 'Scientific Program')

@section('content')

    <section class="bg-half d-table w-100" style="background: url('{{ asset('assets/images/landing/aboutus.png') }}') center center;">
        <div class="bg-overlay bg-gradient-red-blue" style="opacity: 0.8;"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="page-next-level title-heading">
                        <h3 class="title-dark text-white"> Scientific Program </h3>
                        <p class="text-white-50 para-desc mb-0 mx-auto">Program at Glance, Topics, Scientific Schedule <span
                                class="text-white fw-bold">INACHD</span></p>
                        <div class="page-next">
                            <nav aria-label="breadcrumb" class="d-inline-block bg-light rounded" >
                                <ul class="breadcrumb rounded shadow mb-0">
                                    <li class="breadcrumb-item"><a href="#">INACHD</a></li>
                                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Scientific Program</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div> <!--end container-->
    </section><!--end section-->
    <div class="position-relative">
        <div class="shape overflow-hidden text-white">
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>

    <section class="section" id="atglance">
        <div class="container ">
            <div class="row justify-content-center">
                <div class="col-12 pt-2 mt-sm-0 pt-sm-0">
                    <div class="section-title text-center mb-4 pb-2">
                        <p class="badge bg-primary bg-gradient-primary fw-bold rounded-pill">Scientific Program</p>
                        <h4 class="title text-primary mb-4">Program at Glance</h4>

                    </div>
                </div><!--end col-->
            </div><!--end row-->
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-12 mt-4 pt-2 text-center">
                    <ul class="nav nav-pills nav-justified flex-column flex-sm-row rounded" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link rounded active" id="11july-tab" data-bs-toggle="pill" href="#day1" role="tab" aria-controls="day1" aria-selected="false">
                                <div class="text-center py-2">
                                    <h6 class="mb-0">11 July</h6>
                                </div>
                            </a><!--end nav link-->
                        </li><!--end nav item-->
                        
                        <li class="nav-item">
                            <a class="nav-link rounded" id="12july-tab" data-bs-toggle="pill" href="#day2" role="tab" aria-controls="day2" aria-selected="false">
                                <div class="text-center py-2">
                                    <h6 class="mb-0">12 July</h6>
                                </div>
                            </a><!--end nav link-->
                        </li><!--end nav item-->
                        
                        <li class="nav-item">
                            <a class="nav-link rounded" id="13july-tab" data-bs-toggle="pill" href="#day3" role="tab" aria-controls="day3" aria-selected="false">
                                <div class="text-center py-2">
                                    <h6 class="mb-0">13 July</h6>
                                </div>
                            </a><!--end nav link-->
                        </li><!--end nav item-->

                        <li class="nav-item">
                            <a class="nav-link rounded" id="14july-tab" data-bs-toggle="pill" href="#day4" role="tab" aria-controls="day4" aria-selected="false">
                                <div class="text-center py-2">
                                    <h6 class="mb-0">14 July</h6>
                                </div>
                            </a><!--end nav link-->
                        </li><!--end nav item-->
                    </ul><!--end nav pills-->
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-10  mt-2 pt-2">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="day1" role="tabpanel" aria-labelledby="11july-tab">
                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#modalAtglance"><img src="/images/schedule/day1.jpg" class="rounded border img-fluid" alt="Program at Glance"></a> 
                        </div>
                        <div class="tab-pane fade" id="day2" role="tabpanel" aria-labelledby="12july-tab">
                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#modalAtglance"><img src="/images/schedule/day2.jpg" class="rounded border img-fluid" alt="Program at Glance"></a> 
                        </div>
                        <div class="tab-pane fade" id="day3" role="tabpanel" aria-labelledby="13july-tab">
                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#modalAtglance"><img src="/images/schedule/day3.jpg" class="rounded border img-fluid" alt="Program at Glance"></a> 
                        </div>
                        <div class="tab-pane fade" id="day4" role="tabpanel" aria-labelledby="14july-tab">
                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#modalAtglance"><img src="/images/schedule/day4.jpg" class="rounded border img-fluid" alt="Program at Glance"></a> 
                        </div>
                    </div>
                    
                    <div class="mt-4">
                        <a href="/download/atglance.pdf" target="_blank" class="btn btn-primary m-2"><i class="uil uil-file-download"></i> Download PDF</a>  
                    </div>
                </div>
            </div>
        </div><!--end container-->
    </section><!--end section-->

    <section class="section bg-light" id="topics">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 pt-2 mt-sm-0 pt-sm-0">
                    <div class="section-title text-center mb-4 pb-2">
                        <p class="badge bg-primary bg-gradient-primary fw-bold rounded-pill">Scientific Program</p>
                        <h4 class="title text-primary mb-4">Topics</h4>

                    </div>
                </div><!--end col-->
            </div><!--end row-->

        </div>
    </section>

    <section class="section" id="schedule">
        <div class="container ">
            <div class="row justify-content-center">
                <div class="col-12 pt-2 mt-sm-0 pt-sm-0">
                    <div class="section-title text-center mb-4 pb-2">
                        <p class="badge bg-primary bg-gradient-primary fw-bold rounded-pill">Scientific Program</p>
                        <h4 class="title text-primary mb-4">Scientific Schedule</h4>

                    </div>
                </div><!--end col-->
            </div><!--end row-->
            <div class="row">
                <div class="col mt-2 pt-2">
                    <div class="table-responsive-md">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                    <th scope="col">Handle 2</th>
                                    <th scope="col">Handle 2</th>
                                    <th scope="col">Handle 2</th>
                                    <th scope="col">Handle 2</th>
                                    <th scope="col">Handle 2</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td>@mdo 2</td>
                                    <td>@mdo 2</td>
                                    <td>@mdo 2</td>
                                    <td>@mdo 2</td>
                                    <td>@mdo 2</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                    <td>@fat 3</td>
                                    <td>@fat 3</td>
                                    <td>@fat 3</td>
                                    <td>@fat 3</td>
                                    <td>@fat 3</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td colspan="2">Larry the Bird</td>
                                    <td>@twitter</td>
                                    <td>@twitter 4</td>
                                    <td>@twitter 4</td>
                                    <td>@twitter 4</td>
                                    <td>@twitter 4</td>
                                    <td>@twitter 4</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div><!--end container-->
    </section><!--end section-->
@endsection
