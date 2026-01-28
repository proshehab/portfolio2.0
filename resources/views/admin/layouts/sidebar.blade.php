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
                                <a href="{{ route('admin.home.banner') }}" class="tp-link">Banner</a>
                            </li>
                            <li>
                                <a href="{{ route('admin.home.about') }}" class="tp-link">About</a>
                            </li>
                            <li>
                                <a href="{{ route('admin.home.skill') }}" class="tp-link">Skill</a>
                            </li>
                            <li>
                                <a href="{{ route('admin.home.qualification') }}" class="tp-link">Qualification</a>
                            </li>
                            <li>
                                <a href="{{ route('admin.home.service') }}" class="tp-link">Services</a>
                            </li>
                            <li>
                                <a href="{{ route('admin.home.portfolio') }}" class="tp-link">Portfolio</a>
                            </li>
                            <li>
                                <a href="{{ route('admin.home.testimonial') }}" class="tp-link">Testimonials</a>
                            </li>

                            <li>
                                <a href="{{ route('admin.home.blog') }}" class="tp-link">Blog</a>
                            </li>

                            <li>
                                <a href="auth-logout.html" class="tp-link">Clients</a>
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