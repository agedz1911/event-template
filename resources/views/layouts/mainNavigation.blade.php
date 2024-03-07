{{-- <div id="topnav" class="defaultscroll sticky-top">
    <div class="container">
        <!-- Logo container-->
        <a class="logo" href="/">
            <span class="logo-light-mode">
                <img src="{{asset('assets/images/logo-dark.png')}}" class="l-dark" height="32" alt="">
                <img src="{{asset('assets/images/logo-dark.png')}}F" class="l-light" height="32" alt="">
            </span>
            <img src="images/logo-dark.png" height="32" class="logo-dark-mode" alt="">
        </a>
        <!-- <div class="buy-button">
            <a href="https://1.envato.market/4n73n" target="_blank">
                <div class="btn btn-primary login-btn-primary">Buy Now</div>
                <div class="btn btn-light login-btn-light">Buy Now</div>
            </a>
        </div> -->
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
</div><!--end header--> --}}

<nav class="navbar fixed-top navbar-expand-lg bg-body-tertiary">
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
                {{-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li> --}}
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
