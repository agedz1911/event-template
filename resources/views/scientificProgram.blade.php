@extends('layouts.mainLayout')

@section('title', 'Scientific Program')

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

    <section class="section" id="atglance">
        <div class="container ">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center mb-4 pb-2">
                        <h6 class=" text-primary">Scientific Program</h6>
                        <h4 class="title mb-4">Program at Glance</h4>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 mt-2 pt-2">
                    <div class="key-feature">
                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#modalAtglance"><img
                                src="/images/atglance-2.png" class="rounded img-fluid" alt="Program at Glance"></a>
                    </div>
                    <div class="mt-4">
                        <a href="../download/atglance.pdf" target="_blank" class="btn btn-primary m-2"><i
                                class="uil uil-file-download"></i> Download PDF</a>
                    </div>
                </div>
            </div>
        </div><!--end container-->
    </section><!--end section-->

    <section class="section bg-light" id="topics">
        <div class="container ">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center mb-4 pb-2">
                        <h6 class=" text-primary">Scientific Program</h6>
                        <h4 class="title mb-4">Topics</h4>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col mt-2 pt-2">
                    <ul>
                        <li>Topics</li>
                        <li>Topics</li>
                        <li>Topics</li>
                        <li>Topics</li>
                        <li>Topics</li>
                    </ul>
                </div>
                <div class="col mt-2 pt-2">
                    <ol>
                        <li>Topics</li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ol>
                </div>
            </div>
        </div><!--end container-->
    </section><!--end section-->

    <section class="section" id="schedule">
        <div class="container ">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center mb-4 pb-2">
                        <h6 class=" text-primary">Scientific Program</h6>
                        <h4 class="title mb-4">Schedule</h4>

                    </div>
                </div>
            </div>
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
