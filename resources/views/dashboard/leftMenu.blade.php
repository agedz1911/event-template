<div class="main-menu text-bg-dark">
    <!-- Brand Logo -->
    <div class="logo-box">
        <!-- Brand Logo Light -->
        <a href="javascript:void(0)" class="logo-light">
            <img src="{{asset('assets/images/logo-dark.png')}}" alt="logo" class="logo-lg" height="28">
            <img src="{{asset('assets/images/logo-dark.png')}}" alt="small logo" class="logo-sm" height="28">
        </a>

        <!-- Brand Logo Dark -->
        <a href="javascript:void(0)" class="logo-dark">
            <img src="{{asset('assets/images/logo-dark.png')}}" alt="dark logo" class="logo-lg" height="28">
            <img src="{{asset('assets/images/logo-dark.png')}}" alt="small logo" class="logo-sm" height="28">
        </a>
    </div>

    <!--- Menu -->
    <div data-simplebar>
        <ul class="app-menu">

            <li class="menu-title">Menu</li>
            @if (Auth::user()->role_id == 3)
            <li class="menu-item">
                <a href="/dashboard/user" class="menu-link waves-effect waves-light">
                    <span class="menu-icon"><i class="bx bx-home-smile"></i></span>
                    <span class="menu-text"> Dashboards </span>
                </a>
            </li>

            <li class="menu-item">
                <a href="/dashboard/profile/my-profile" class="menu-link waves-effect waves-light">
                    <span class="menu-icon"><i class="bx bx-user"></i></span>
                    <span class="menu-text"> Biodata </span>
                </a>
            </li>

            <li class="menu-item">
                <a href="/dashboard/user" class="menu-link waves-effect waves-light">
                    <span class="menu-icon"><i class="bx bx-shopping-bag"></i></span>
                    <span class="menu-text"> Registration </span>
                </a>
            </li>
            
            @else


            <li class="menu-item">
                <a href="/dashboard/admin" class="menu-link waves-effect waves-light">
                    <span class="menu-icon"><i class="bx bx-home-smile"></i></span>
                    <span class="menu-text"> Dashboards </span>
                </a>
            </li>
            <li class="menu-title">Setting</li>
            
            <li class="menu-item">
                <a href="#menuExpages" data-bs-toggle="collapse" class="menu-link waves-effect waves-light">
                    <span class="menu-icon"><i class="bx bx-file"></i></span>
                    <span class="menu-text"> Pages </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="menuExpages">
                    <ul class="sub-menu">
                        <li class="menu-item">
                            <a href="/dashboard/admin/important-dates" class="menu-link">
                                <span class="menu-text">Important Dates</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="/dashboard/admin/faculties" class="menu-link">
                                <span class="menu-text">Faculties</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="/dashboard/admin/schedule" class="menu-link">
                                <span class="menu-text">Schedule</span>
                            </a>
                        </li>

                    </ul>
                </div>
            </li>

            <li class="menu-item">
                <a href="#menuLayouts" data-bs-toggle="collapse" class="menu-link waves-effect waves-light">
                    <span class="menu-icon"><i class="fa fa-users"></i></span>
                    <span class="menu-text"> Users </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="menuLayouts">
                    <ul class="sub-menu">
                        <li class="menu-item">
                            <a href="/dashboard/admin/user-register" class="menu-link">
                                <span class="menu-text">Add user</span>
                            </a>
                        </li>

                        <li class="menu-item">
                            <a href="/dashboard/admin/user-role" class="menu-link">
                                <span class="menu-text">Role</span>
                            </a>
                        </li>

                    </ul>
                </div>
            </li>

            <li class="menu-title">Menu</li>
            <li class="menu-item">
                <a href="#menuCongress" data-bs-toggle="collapse" class="menu-link waves-effect waves-light">
                    <span class="menu-icon"><i class="fa fa-graduation-cap"></i></span>
                    <span class="menu-text"> Congress Event </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="menuCongress">
                    <ul class="sub-menu">
                        <li class="menu-item">
                            <a href="/dashboard/admin/abstracts" class="menu-link">
                                <span class="menu-text">Abstracts</span>
                            </a>
                        </li>

                    </ul>
                </div>
            </li>
            <li class="menu-item">
                <a href="#menuRegistrasi" data-bs-toggle="collapse" class="menu-link waves-effect waves-light">
                    <span class="menu-icon"><i class="fa fa-tag"></i></span>
                    <span class="menu-text"> Registration </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="menuRegistrasi">
                    <ul class="sub-menu">
                        <li class="menu-item">
                            <a href="/dashboard/admin/package-registration" class="menu-link">
                                <span class="menu-text">Package Registration</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="/dashboard/admin/category-registration" class="menu-link">
                                <span class="menu-text">Category Registration</span>
                            </a>
                        </li>

                    </ul>
                </div>
            </li>
            @endif
        </ul>
    </div>
</div>