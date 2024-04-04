@extends('layouts.mainLayout')

@section('title', 'Congress Information')

@section('content')
    <section class="bg-half d-table w-100"
        style="background: url('{{ asset('assets/images/landing/aboutus.png') }}') bottom right;">
        <div class="bg-overlay bg-gradient-red-blue" style="opacity: 0.8;"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="page-next-level title-heading">
                        <h3 class="title-dark text-white"> Congress Information </h3>
                        <p class="text-white-50 para-desc mb-0 mx-auto"> Organizing Committee, Faculties <span
                                class="text-white fw-bold">INACHD</span></p>
                        <div class="page-next">
                            <nav aria-label="breadcrumb" class="d-inline-block bg-light rounded">
                                <ul class="breadcrumb rounded shadow mb-0">
                                    <li class="breadcrumb-item"><a href="#">INACHD</a></li>
                                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Congress Information</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div> <!--end container-->
        <!--end container-->
    </section>
    <div class="position-relative">
        <div class="shape overflow-hidden text-white">
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>

    <section class="section bg-light" id="welcome-message">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 pt-2 mt-sm-0 pt-sm-0">
                    <div class="section-title text-center mb-4 pb-2">
                        <p class="badge bg-primary bg-gradient-primary fw-bold rounded-pill">Congress Information</p>
                        <h4 class="title text-primary mb-4">Welcome Mesage</h4>

                    </div>
                </div><!--end col-->
            </div><!--end row-->

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

    <section class="section mt-100 mt-60" id="committee">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 pt-2 mt-sm-0 pt-sm-0">
                    <div class="section-title text-center mb-4 pb-2">
                        <p class="badge bg-primary bg-gradient-primary fw-bold rounded-pill">Congress Information</p>
                        <h4 class="title text-primary mb-4">Organizing Committee</h4>

                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row">
                <div class="col-12 mt-2 pt-2">

                    <div class="card-body py-5">
                        <div class="row">
                            <div class="col-lg-6">
                                <h4 class="mb-0">Steering Committee</h4>
                                <h5 class="card-title mb-0 ">Advisory:</h5>
                                <ul class="text-muted list-unstyled">
                                    <li><i class="uil uil-angle-double-right"></i> Radityo Prakoso, MD, FIHA</li>
                                    <li><i class="uil uil-angle-double-right"></i> Ganesja M. Harimurti, MD, FIHA</li>
                                    <li><i class="uil uil-angle-double-right"></i> Anna Ulfa Rahajoe, MD, FIHA</li>
                                    <li><i class="uil uil-angle-double-right"></i> Poppy S. Roebiono MD, FIHA</li>
                                </ul>
                                <h5 class="card-title mb-0 ">Chairman:</h5>
                                <ul class="text-muted list-unstyled">
                                    <li><i class="uil uil-angle-double-right"></i> Oktavia Lilyasari, MD, FIHA</li>
                                </ul>
                                <h5 class="card-title mb-0">Secretary:</h5>
                                <ul class="text-muted list-unstyled">
                                    <li><i class="uil uil-angle-double-right"></i> Alisia Yuana Putri, MD, FIHA</li>
                                </ul>
                                <h5 class="card-title mb-0">Treasurer: </h5>
                                <ul class="text-muted list-unstyled">
                                    <li><i class="uil uil-angle-double-right"></i> Olfi Lelya, MD, FIHA </li>
                                </ul>

                            </div><!--end col-->
                            <div class="col-lg-6">
                                <h4 class="mb-0">Scientific Committee</h4>
                                <h5 class="card-title mb-0">Chairman: </h5>
                                <ul class="text-muted list-unstyled">
                                    <li><i class="uil uil-angle-double-right"></i> Yovi Kurniawati, MD, FIHA</li>
                                </ul>
                                <h5 class="card-title mb-0">Secretary: </h5>
                                <ul class="text-muted list-unstyled">
                                    <li><i class="uil uil-angle-double-right"></i> Sisca Natalia Siagian, MD, FIHA</li>
                                </ul>
                                <h5 class="card-title mb-0">Members</h5>
                                <ul class="text-muted list-unstyled">
                                    <li><i class="uil uil-angle-double-right"></i> Indriwanto Sakidjan, MD, FIHA, PhD.</li>
                                    <li><i class="uil uil-angle-double-right"></i> Ali Nafiah Nasution MD, FIHA</li>
                                    <li><i class="uil uil-angle-double-right"></i> Charlotte J. Cool MD, FIHA</li>
                                    <li><i class="uil uil-angle-double-right"></i> Kino, MD, FIHA</li>
                                    <li><i class="uil uil-angle-double-right"></i> Valerinna Yogibuana Swastika P, MD, FIHA
                                    </li>
                                    <li><i class="uil uil-angle-double-right"></i> I Made Satria Yudha Dewangga, MD, FIHA
                                    </li>
                                    <li><i class="uil uil-angle-double-right"></i> Sefri Noventi Sofia, MD, FIHA</li>
                                </ul>

                            </div>
                        </div>
                        <div class="row mt-lg-3 mt-1">
                            <div class="col-lg-6">
                                <h4 class="mb-0">Organizing Committee</h4>
                                <h5 class="card-title mb-0">Promotion & Publication: </h5>
                                <ul class="text-muted list-unstyled">

                                    <li><i class="uil uil-angle-double-right"></i> Lowry Yunita, MD, FIHA</li>
                                    <li><i class="uil uil-angle-double-right"></i> Monique Rotty, MD, FIHA</li>
                                </ul>
                                <h5 class="card-title mb-0">Registration Website & IT: </h5>
                                <ul class="text-muted list-unstyled">
                                    <li><i class="uil uil-angle-double-right"></i> Aditya Agita Sembiring, MD, FIHA</li>
                                    <li><i class="uil uil-angle-double-right"></i> Lyra Febrianda, MD, FIHA</li>
                                </ul>
                                <h5 class="card-title mb-0">Exhibition & Logistic: </h5>
                                <ul class="text-muted list-unstyled">
                                    <li><i class="uil uil-angle-double-right"></i> Damba Dwisepto AS, MD, FIHA</li>
                                    <li><i class="uil uil-angle-double-right"></i> Putra Habibie, MD, FIHA</li>
                                </ul>
                                <h5 class="card-title mb-0">Coordinator Workshop: </h5>
                                <ul class="text-muted list-unstyled">
                                    <li><i class="uil uil-angle-double-right"></i> Asmoko Resta P, MD, FIHA</li>
                                </ul>
                                <h5 class="card-title mb-0">Abstract Submission: </h5>
                                <ul class="text-muted list-unstyled">
                                    <li><i class="uil uil-angle-double-right"></i> Sefri Noventi Sofia, MD, FIHA</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->

    <section class="section bg-light" id='faculties'>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 pt-2 mt-sm-0 pt-sm-0">
                    <div class="section-title text-center mb-4 pb-2">
                        <p class="badge bg-primary bg-gradient-primary fw-bold rounded-pill">Congress Information</p>
                        <h4 class="title text-primary mb-4">Faculties</h4>

                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row">
                <div class="col-lg-12">
                    <ul class="nav nav-pills nav-justified flex-column flex-sm-row rounded" id="pills-tab"
                        role="tablist">
                        <li class="nav-item">
                            <a class="nav-link rounded active" id="pills-cloud-tab" data-bs-toggle="pill"
                                href="#international" role="tab" aria-controls="international"
                                aria-selected="false">
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
                                                        <img src="assets/images/faculty/{{ $international->image }}"
                                                            class="img-fluid avatar avatar-ex-large rounded-circle shadow"
                                                            alt="{{ $international->name }}">
                                                    @else
                                                        <img src="{{ asset('assets/images/user.png') }}"
                                                            class="img-fluid avatar avatar-ex-large rounded-circle shadow"
                                                            alt="{{ $international->name }}">
                                                    @endif

                                                </div>
                                                <div class="content pt-3">
                                                    <h5 class="mb-0"><a href="javascript:void(0)"
                                                            class="name text-dark">{{ $international->name }}</a></h5>
                                                    <small
                                                        class="designation text-muted">{{ $international->country }}</small>
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
                                                        <img src="/assets/images/faculty/{{ $local->image }}"
                                                            class="img-fluid avatar avatar-ex-large rounded-circle shadow"
                                                            alt="{{ $local->name }}">
                                                    @else
                                                        <img src="{{ asset('assets/images/user.png') }}"
                                                            class="img-fluid avatar avatar-ex-large rounded-circle shadow"
                                                            alt="{{ $local->name }}">
                                                    @endif

                                                </div>
                                                <div class="content pt-3">
                                                    <h5 class="mb-0"><a href="javascript:void(0)"
                                                            class="name text-dark">{{ $local->name }} </a></h5>
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
