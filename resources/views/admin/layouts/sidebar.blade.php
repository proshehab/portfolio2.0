<!-- Left Sidebar Start -->
<div class="app-sidebar-menu">
    <div class="h-100" data-simplebar>

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <div class="logo-box">
                <a href="index.html" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{ asset('admin') }}/images/logo-sm.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('admin') }}/images/logo-light.png" alt="" height="24">
                    </span>
                </a>
                <a href="index.html" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{ asset('admin') }}/images/logo-sm.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('admin') }}/images/logo-dark.png" alt="" height="24">
                    </span>
                </a>
            </div>

            <ul id="side-menu">

                <li class="menu-title">Menu</li>

                <li>
                    <a href="{{ route('dashboard.index') }}">
                        <i data-feather="home"></i>
                        <span> Dashboard </span>
                        <span class="menu-arrow"></span>
                    </a>

                </li>

                <li class="menu-title">Pages</li>

                <li>
                    <a href="#sidebarAuth" data-bs-toggle="collapse">
                        <i data-feather="users"></i>
                        <span> Home </span>
                        <span class="menu-arrow"></span>
                    </a>

                    <div class="collapse" id="sidebarAuth">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('admin.home.banner') }}" class="tp-link">Banner Section</a>
                            </li>
                            <li>
                                <a href="auth-register.html" class="tp-link">Register</a>
                            </li>
                            <li>
                                <a href="auth-recoverpw.html" class="tp-link">Recover Password</a>
                            </li>
                            <li>
                                <a href="auth-lock-screen.html" class="tp-link">Lock Screen</a>
                            </li>
                            <li>
                                <a href="auth-confirm-mail.html" class="tp-link">Confirm Mail</a>
                            </li>
                            <li>
                                <a href="email-verification.html" class="tp-link">Email Verification</a>
                            </li>
                            <li>
                                <a href="auth-logout.html" class="tp-link">Logout</a>
                            </li>
                        </ul>
                    </div>

                </li>

                <li>
                    <a href="{{ route('frontend.master') }}" target="_blank">
                        <i data-feather="aperture"></i>
                        <span> Website </span>
                        <span class="menu-arrow"></span>
                    </a>

                </li>



            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
</div>
<!-- Left Sidebar End -->