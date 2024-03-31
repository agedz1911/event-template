<div class="navbar-custom text-bg-light">
    <div class="topbar">
        <div class="topbar-menu d-flex align-items-center gap-lg-2 gap-1">

            <!-- Brand Logo -->
            <div class="logo-box">
                <!-- Brand Logo Light -->
                <a href="index.html" class="logo-light">
                    <img src="{{asset('assets/images/logo-dark.png')}}" alt="logo" class="logo-lg" height="22">
                    <img src="{{asset('assets/images/logo-dark.png')}}" alt="small logo" class="logo-sm" height="22">
                </a>

                <!-- Brand Logo Dark -->
                <a href="index.html" class="logo-dark">
                    <img src="{{asset('assets/images/logo-dark.png')}}" alt="dark logo" class="logo-lg" height="22">
                    <img src="{{asset('assets/images/logo-dark.png')}}" alt="small logo" class="logo-sm" height="22">
                </a>
            </div>

            <!-- Sidebar Menu Toggle Button -->
            <button class="button-toggle-menu">
                <i class="mdi mdi-menu"></i>
            </button>
        </div>

        <ul class="topbar-menu d-flex align-items-center gap-4">

            <li class="nav-link" id="theme-mode">
                <i class="bx bx-moon font-size-24"></i>
            </li>

            <li class="dropdown">
                <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <img src="{{asset('assets/images/user.png')}}" alt="user-image" class="rounded-circle">
                    <span class="ms-1 d-none d-md-inline-block">
                        {{Auth::user()->name}} <i class="mdi mdi-chevron-down"></i>
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
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



                </div>
            </li>

        </ul>
    </div>
</div>