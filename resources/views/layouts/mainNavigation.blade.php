<div id="topnav" class="defaultscroll sticky-top">
    <div class="container">
        <!-- Logo container-->
        <a class="logo" href="/">
            <span class="logo-light-mode">
                <img src="{{asset('assets/images/logo-dark.png')}}" class="l-dark" height="32" alt="">
                <img src="{{asset('assets/images/logo-dark.png')}}" class="l-light" height="32" alt="">
            </span>
            <img src="images/logo-dark.png" height="32" class="logo-dark-mode" alt="">
        </a>
        <ul class="buy-button list-inline mb-0">
            @guest 
            <a href="/login">
                <div class="btn btn-primary login-btn-primary">Login</div>
                <div class="btn btn-light login-btn-light">Login</div>
            </a>
            @else
            <li class="list-inline-item mb-0">
                <div class="dropdown">
                    <button type="button" class="btn btn-link text-decoration-none dropdown-toggle p-0 pe-2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-search h5 text-muted"></i>
                    </button>
                    <div class="dropdown-menu dd-menu dropdown-menu-end bg-white shadow rounded border-0 mt-3 py-0" style="width: 300px;">
                        <form>
                            <input type="text" id="text" name="name" class="form-control border bg-white" placeholder="Search...">
                        </form>
                    </div>
                </div>
            </li>
            <li class="list-inline-item mb-0 pe-1">
                <div class="dropdown">
                    <button type="button" class="btn btn-icon btn-soft-primary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-shopping-cart align-middle icons"></i></button>
                    <div class="dropdown-menu dd-menu dropdown-menu-end bg-white shadow rounded border-0 mt-3 p-4" style="width: 300px;">
                        <div class="pb-4">
                            TODO: list cart
                        </div>

                        <div class="d-flex align-items-center justify-content-between pt-4 border-top">
                            <h6 class="text-dark mb-0">Total($):</h6>
                            <h6 class="text-dark mb-0">$1690</h6>
                        </div>

                        <div class="mt-3 text-center">
                            <a href="javascript:void(0)" class="btn btn-primary me-2">View Cart</a>
                            <a href="javascript:void(0)" class="btn btn-primary">Checkout</a>
                        </div>
                    </div>
                </div>
            </li>
            <li class="list-inline-item mb-0">
                <div class="dropdown dropdown-primary">
                    <button type="button" class="btn btn-icon btn-soft-primary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user align-middle icons"></i></button>
                    <div class="dropdown-menu dd-menu dropdown-menu-end bg-white shadow rounded border-0 mt-3 " style="width: 200px;">
                        <small class="dropdown-item text-dark">Welcome {{Auth::user()->name}}!</small>
                        <div class="dropdown-divider my-2 border-top"></div>
                        <a class="dropdown-item text-dark" href="/dashboard/profile/my-profile"><i class="fa fa-user-alt align-middle me-1"></i>My Account</a>
                        <a class="dropdown-item text-dark" href="javascript:void(0)"><i class="fa fa-edit align-middle me-1"></i> Change Password</a>
                        <div class="dropdown-divider my-3 border-top"></div>
                        <form action="{{route('logout')}}" method="POST">
                            @csrf
                            <button type="submit" class="dropdown-item notify-item">
                                <i class="fa fa-sign-out"></i>
                                <span>Logout</span>
                            </button>
                        </form>
                    </div>
                </div>
            </li>
            {{-- <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                <!-- item-->
                <div class="dropdown-header noti-title">
                    <h6 class="text-overflow m-0">Welcome {{Auth::user()->name}}!</h6>
                </div>
                
                <!-- item-->
                <a href="/dashboard/profile/my-profile" class="dropdown-item notify-item">
                    <i class="fa fa-user"></i>
                    <span>My Account</span>
                </a>
                
                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i class="fa fa-edit"></i>
                    <span>Change Password</span>
                </a>
                
                
                <div class="dropdown-divider"></div>
                
                <!-- item-->
                <form action="{{route('logout')}}" method="POST">
                    @csrf
                    
                    <button type="submit" class="dropdown-item notify-item">
                        <i class="fa fa-sign-out"></i>
                        <span>Logout</span>
                    </button>
                </form>
            </div> --}}
            @endguest
        </ul>
        <!--end login button-->
        <!-- End Logo container-->
        <div class="menu-extras">
            <div class="menu-item">
                <!-- Mobile menu toggle-->
                <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <!-- End mobile menu toggle-->
            </div>
        </div>

        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu nav-light">
                <li class="active parent-menu-item"><a href="#" class="sub-menu-item">Home</a></li>

                <li class="has-submenu parent-menu-item ">
                    <a href="/congress-information/">Congress Information</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <!-- <li><a href="/congress-info/#welcome-message" class="sub-menu-item">Welcome Message</a></li> -->
                        <li><a href="/congress-information/#committee" class="sub-menu-item">Organizing Committee</a></li>
                        <li><a href="/congress-information/#faculties" class="sub-menu-item">Faculties</a></li>
                        <li><a href="javascript:void(0)" class="sub-menu-item">Venue</a></li>
                    </ul>
                </li>

                <li class="has-submenu parent-menu-item">
                    <a href="/scientific-program/">Scientific Program</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li><a href="/scientific-program/#atglance" class="sub-menu-item">Program at Glance</a></li>
                        <li><a href="javascript:void(0)" class="sub-menu-item">Topics</a></li>
                        <li><a href="javascript:void(0)" class="sub-menu-item">Scientific Schedule</a>
                        </li>
                        <!-- <li><a href="/scientific-program/#course" class="sub-menu-item">Educational Course</a></li> -->
                    </ul>
                </li>

                <li class="has-submenu parent-menu-item">
                    <a href="/registration/" class="has-submenu parent-menu-item">Registration</a><span
                        class="menu-arrow"></span>
                    <ul class="submenu">
                        <li><a href="/registration/#registration" class="sub-menu-item">
                                Registration</a></li>
                        <li><a href="javascript:void(0)" class="sub-menu-item">Accommodation</a></li>
                        <!-- <li><a href="javascript:void(0)" class="sub-menu-item">Social Program</a></li> -->
                    </ul>
                </li>

                <li class="has-submenu parent-menu-item">
                    <a href="/submission/" class="has-submenu parent-menu-item">Abstract</a><span
                        class="menu-arrow"></span>
                    <ul class="submenu">
                        <li><a href="/submission/#guideline" class="sub-menu-item">Guideline for abstract</a></li>
                        <li><a href="/submission/#submit" class="sub-menu-item">Submission</a></li>
                    </ul>
                </li>

            </ul><!--end navigation menu-->

            <!--end login button-->
        </div><!--end navigation-->
    </div><!--end container-->
</div><!--end header-->

{{-- <nav class="navbar fixed-top navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{asset('assets/images/logo-dark.png')}}" class="l-dark" height="32" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/congress-information">Congress Information</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/scientific-program">Scientific Program</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/registration">Registration</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/submission">Submission</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav> --}}
