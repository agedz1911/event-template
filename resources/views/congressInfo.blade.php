@extends('layouts.mainLayout')

@section('title', 'Congress Information')

@section('content')
<section class="bg-half d-table w-100"
    style="background: url('{{ asset('assets/images/aboutus.png') }}') center center;">
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
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>
<!--end section-->
<section class="section bg-gradient-blue">
    <div class="container ">
        <div class="row align-items-center" id="counter">
            <div class="col-md-5">
                <img src="{{ asset('assets/images/landing-02.png') }}" class="img-fluid" alt="">
                <div class="play-icon">
                    <!-- <a href="#!" data-type="youtube" data-id="AdnY07fN2Ig" class="play-btn lightbox"> -->
                    <a href="javascript:void(0)" class="play-btn lightbox">
                        <i class="mdi mdi-play text-primary rounded-circle bg-white shadow-lg"></i>
                    </a>
                </div>
            </div>
            <!--end col-->

            <div class="col-md-6 mt-4 pt-2 mt-sm-0 pt-sm-0">
                <div class="ms-lg-4">
                    <!--<div class="d-flex mb-4">
                                                <span class="text-primary h1 mb-0"><span class="counter-value display-1 fw-bold" data-target="16">0</span>th</span>
                                                <span class="h6 align-self-end ms-2">Years <br> Experience</span>
                                            </div>-->
                    <h6 class="text-white-50 mb-4">Kongres Informasi</h6>
                    <div class="section-title">
                        <h4 class="title text-white mb-4">Kongres Nasional
                            Perhimpunan Dokter Spesialis THT Bedah Kepala Dan Leher Indonesia Ke-XX</h4>
                        <!-- <p class="text-dark fw-bold mx-auto para-desc">"Collaborative Approach In Optimizing
                                                Cardiovascular Imaging" </p> -->
                        <p class="text-muted mt-3 mb-0">Lombok, Nusa Tenggara Barat, Indonesia </p>
                        <p class="text-muted">Oktober 2025</p>

                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#contactUs"
                            class="btn btn-primary mt-3">Hubungi kami</a>
                    </div>
                </div>
                <div class="mt-3">
                    <img src="{{ asset('assets/images/logo-icon.png') }}" class="avatar avatar-ex-sm" alt="">
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>
<!--end section-->

<section class="section bg-light" id="welcome-message">
    <div class="container">
        <div class="row justify-content-center mt-4">
            <div class="col-12">
                <div class="section-title text-center mb-4 pb-2">
                    <h6 class="">Congress Information</h6>
                    <h4 class="title text-primary mb-4">Welcome Message</h4>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 mt-2 pt-2">
                <div class="row">
                    <div class="col-lg-12 text-muted" style="text-align: justify;">
                        <p class="">Dear Friends and Colleagues,</p>
                        <p class=" ">
                            On behalf of the Organizing Committee, we are thrilled to announce “The 18<sup>th</sup>
                            Asian Epilepsy Surgery Congress (AESC2024)”, to be held on October 10<sup>th</sup> to
                            12<sup>th</sup>, 2024, at the ASEEC Tower of Medicine, Universitas Airlangga, Surabaya,
                            Indonesia
                        </p>
                        <p>With the theme "Bridging The Asian Nations Through Epilepsy Surgery Services,"
                            This congress aims to foster collaboration and advancement in the field. Currently, the
                            organizing committee is diligently crafting the program details, which will feature advanced
                            workshops and presentations covering a wide array of topics by esteemed speakers from both
                            domestic and international backgrounds. Each session will be meticulously designed to offer
                            profound insights and practical solutions for managing epilepsy surgery
                        </p>
                        <p>For comprehensive program details, registration, and booking accommodations at special rates
                            for congress participants, kindly visit the conference website at www.aesc2024.com. Seize
                            this invaluable opportunity to enrich your knowledge and skills in this dynamic and evolving
                            field. We also extend a warm invitation to fellow neurosurgeons and residents to submit
                            scientific papers and partake in the free paper competition. Please submit your abstracts
                            via the congress website before September 2, 2024</p>
                        <p>Additionally, feel free to encourage your colleagues and other medical professionals to join
                            us at this event, where valuable networking opportunities and the exchange of experiences
                            await</p>
                        <p>Ensure to mark your calendars and extend invitations to your family to join us in Surabaya, a
                            city renowned for its uniqueness, cultural richness, and beauty. Serving as a hub for
                            economic, cultural, and educational activities in Indonesia, Surabaya offers a plethora of
                            tourist attractions, authentic culinary delights, and the warm hospitality characteristic of
                            its residents. Known as the "City of Heroes" for its pivotal role in Indonesia's struggle
                            for independence, Surabaya promises an unforgettable experience for all attendees</p>
                        <p>Sincerely regards,</p>
                        <div class="row">
                            <div class="col-6">
                                <p class="text-muted mt-5"><span class="fw-bold"><u> Dr. dr. Asra Al Fauzi, Sp.BS
                                            (K).,FICS.,IFAANS</u></span> <br>Congress Chairman of AESC </p>
                            </div>
                            <div class="col-6">
                                <p class="text-muted mt-5"><span class="fw-bold"><u> dr. Heri Subianto Sp.BS (K)
                                            Subsp.NF, FINPS</u></span> <br>Secretary </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section" id="committee">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-title text-center mb-4 pb-2">
                    <h6 class="">Congress Information</h6>
                    <h4 class="title text-primary mb-4">Organizing Committee</h4>

                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->

        <div class="row">
            <div class="col-12 mt-2 pt-2">

                <div class="card-body py-5">
                    <div class="row">
                        <div class="col-lg-6">
                            <h5 class="card-title mb-0 ">Patron</h5>
                            <ul class="text-muted">
                                <li>Prof. Dr. Abdul Hafid Bajamal, dr., Sp. BS(K)</li>
                                <li>Dr. dr. Agus Turchan, Sp.BS (K)</li>
                                <li>Dr. dr. Muhammad Arifin Parenrengi, Sp.BS (K)</li>
                                <li>Prof. Dr. dr. Joni Wahyuhadi, Sp.BS (K) MARS</li>
                            </ul>
                            <h5 class="card-title mb-0 ">Congress Chairman</h5>
                            <ul class="text-muted">
                                <li>Dr. dr. Asra Al Fauzi, Sp.BS (K)., FICS., IFAANS</li>
                            </ul>
                            <h5 class="card-title mb-0">Congress Vice Chairman</h5>
                            <ul class="text-muted">
                                <li>Dr. dr. Achmad Fahmi, Sp.BS(K) Subsp.NF, FINPS, IFAANS</li>
                            </ul>
                            <h5 class="card-title mb-0">Treasurer</h5>
                            <ul class="text-muted">
                                <li>dr. Rizki Meizikri</li>
                            </ul>
                            <h5 class="card-title mb-0">Secretary</h5>
                            <ul class="text-muted">
                                <li>dr. Heri Subianto Sp.BS (K) Subsp.NF, FINPS</li>
                                <li>dr. Khrisna Rangga Permana</li>
                            </ul>

                        </div>
                        <!--end col-->
                        <div class="col-lg-6">
                            <h5 class="card-title mb-0">Organizing Scientific</h5>
                            <ul class="text-muted">
                                <li>Dr. dr. Wihasto Suryaningtyas, Sp.BS (K) </li>
                                <li>dr. Surya Pratama B</li>
                                <li>dr. Novaldi Rizky Kurniawan</li>
                            </ul>
                            <h5 class="card-title mb-0">Equipment</h5>
                            <ul class="text-muted">
                                <li>dr. M. Aditya Wisnudharma</li>
                                <li>dr. Candra Dwantara Ramadhan</li>
                            </ul>
                            <h5 class="card-title mb-0">Public Relations</h5>
                            <ul class="text-muted">
                                <li>dr. Gunna Hutomo Putra, M.Ked.Klin, Sp.BS</li>
                                <li>dr. Kahexa Firman R</li>
                                <li>dr. Reza Mawardy</li>
                            </ul>
                            <h5 class="card-title mb-0">Publication</h5>
                            <ul class="text-muted">
                                <li>dr. Vira Dwi N</li>
                            </ul>
                            <h5 class="card-title mb-0">Transportation and Accommodation</h5>
                            <ul class="text-muted">
                                <li>dr. Tegar Maulana </li>
                                <li>dr. Muhammad Alfian Zaini Adhim</li>
                            </ul>
                            <h5 class="card-title mb-0">Registration</h5>
                            <ul class="text-muted">
                                <li>dr. Satrio Pamungkas</li>
                                <li>dr. Irfaanstio Akbar Hakim</li>
                            </ul>

                        </div>
                    </div>
                </div>

            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>
<!--end section-->

<section class="section bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-title text-center mb-4 pb-2">
                    <h6 class="">Congress Information</h6>
                    <h4 class="title text-primary mb-4">Faculties</h4>
                </div>
            </div>
            <!--end col-->
        </div>

        <div class="row">
            <div class="col-lg-12">
                <ul class="nav nav-pills nav-justified flex-column flex-sm-row rounded" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link rounded active" id="pills-cloud-tab" data-bs-toggle="pill"
                            href="#international" role="tab" aria-controls="international" aria-selected="false">
                            <div class="text-center py-2">
                                <h6 class="mb-0">International Faculties</h6>
                            </div>
                        </a>
                        <!--end nav link-->
                    </li>
                    <!--end nav item-->

                    <li class="nav-item">
                        <a class="nav-link rounded" id="pills-smart-tab" data-bs-toggle="pill" href="#national"
                            role="tab" aria-controls="national" aria-selected="false">
                            <div class="text-center py-2">
                                <h6 class="mb-0">Indonesian Faculties</h6>
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
                <!--end nav pills-->
            </div>
            <!--end col-->
        </div>
        <!--end row-->

        <div class="row pt-2">
            <div class="col-12">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="international" role="tabpanel"
                        aria-labelledby="pills-cloud-tab">
                        <div class="row mt-4">
                            @foreach ($intfaculties as $international)

                            <div class="col-lg-3 col-md-4 pt-2">
                                <div class="card text-center rounded shadow border-0">
                                    <div class="card-body">
                                        <div class="position-relative">
                                            @if ($international->image != null)
                                            <img src="assets/images/faculty/{{$international->image}}"
                                                class="img-fluid avatar avatar-ex-large rounded-circle shadow"
                                                alt="{{$international->name}}">
                                            @else
                                            <img src="{{ asset('assets/images/user.png') }}"
                                                class="img-fluid avatar avatar-ex-large rounded-circle shadow"
                                                alt="{{$international->name}}">
                                            @endif

                                        </div>
                                        <div class="content pt-3">
                                            <h5 class="mb-0"><a href="javascript:void(0)"
                                                    class="name text-dark">{{$international->name}}</a></h5>
                                            <small class="designation text-muted">{{$international->country}}</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="tab-pane fade" id="national" role="tabpanel" aria-labelledby="pills-smart-tab">
                        <div class="row">
                            @foreach ($localfaculties as $local)

                            <div class="col-lg-3 col-md-4 pt-2">
                                <div class="card  text-center rounded shadow border-0">
                                    <div class="card-body">
                                        <div class="position-relative">
                                            @if ($local->image != null)
                                            <img src="/assets/images/faculty/{{$local->image}}"
                                                class="img-fluid avatar avatar-ex-large rounded-circle shadow"
                                                alt="{{$local->name}}">
                                            @else
                                            <img src="{{ asset('assets/images/user.png') }}"
                                                class="img-fluid avatar avatar-ex-large rounded-circle shadow"
                                                alt="{{$local->name}}">
                                            @endif

                                        </div>
                                        <div class="content pt-3">
                                            <h5 class="mb-0"><a href="javascript:void(0)"
                                                    class="name text-dark">{{$local->name}} </a></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection