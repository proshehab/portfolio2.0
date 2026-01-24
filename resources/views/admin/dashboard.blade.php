<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Dashboard | Tapeli - Responsive Admin Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc." />
    <meta name="author" content="Zoyothemes" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('admin') }}/images/favicon.ico">

    <!-- App css -->
    <link href="{{ asset('admin') }}/css/app.min.css" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons -->
    <link href="{{ asset('admin') }}/css/icons.min.css" rel="stylesheet" type="text/css" />

</head>

<!-- body start -->

<body data-menu-color="light" data-sidebar="default">

    <!-- Begin page -->
    <div id="app-layout">


        @include('admin.layouts.header')

        @include('admin.layouts.sidebar')

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">

                <!-- Start Content-->
                <div class="container-xxl">

                    <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
                        <div class="flex-grow-1">
                            <h4 class="fs-18 fw-semibold m-0">Dashboard</h4>
                        </div>
                    </div>

                    <!-- start row -->
                    <div class="row">
                        <div class="col-md-12 col-xl-12">
                            <div class="row g-3">

                                <div class="col-md-6 col-xl-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="fs-14 mb-1">Website Traffic</div>
                                            </div>

                                            <div class="d-flex align-items-baseline mb-2">
                                                <div class="fs-22 mb-0 me-2 fw-semibold text-black">91.6K</div>
                                                <div class="me-auto">
                                                    <span class="text-primary d-inline-flex align-items-center">
                                                        15%
                                                        <i data-feather="trending-up" class="ms-1"
                                                            style="height: 22px; width: 22px;"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div id="website-visitors" class="apex-charts"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-xl-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="fs-14 mb-1">Conversion rate</div>
                                            </div>

                                            <div class="d-flex align-items-baseline mb-2">
                                                <div class="fs-22 mb-0 me-2 fw-semibold text-black">15%</div>
                                                <div class="me-auto">
                                                    <span class="text-danger d-inline-flex align-items-center">
                                                        10%
                                                        <i data-feather="trending-down" class="ms-1"
                                                            style="height: 22px; width: 22px;"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div id="conversion-visitors" class="apex-charts"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-xl-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="fs-14 mb-1">Session duration</div>
                                            </div>

                                            <div class="d-flex align-items-baseline mb-2">
                                                <div class="fs-22 mb-0 me-2 fw-semibold text-black">90 Sec</div>
                                                <div class="me-auto">
                                                    <span class="text-success d-inline-flex align-items-center">
                                                        25%
                                                        <i data-feather="trending-up" class="ms-1"
                                                            style="height: 22px; width: 22px;"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div id="session-visitors" class="apex-charts"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-xl-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="fs-14 mb-1">Active Users</div>
                                            </div>

                                            <div class="d-flex align-items-baseline mb-2">
                                                <div class="fs-22 mb-0 me-2 fw-semibold text-black">2,986</div>
                                                <div class="me-auto">
                                                    <span class="text-success d-inline-flex align-items-center">
                                                        4%
                                                        <i data-feather="trending-up" class="ms-1"
                                                            style="height: 22px; width: 22px;"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div id="active-users" class="apex-charts"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end sales -->
                    </div> <!-- end row -->




                </div> <!-- container-fluid -->
            </div> <!-- content -->

            @include('admin.layouts.footer')

        </div>
        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <!-- Vendor -->
    <script src="{{ asset('admin') }}/libs/jquery/jquery.min.js"></script>
    <script src="{{ asset('admin') }}/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('admin') }}/libs/simplebar/simplebar.min.js"></script>
    <script src="{{ asset('admin') }}/libs/node-waves/waves.min.js"></script>
    <script src="{{ asset('admin') }}/libs/waypoints/lib/jquery.waypoints.min.js"></script>
    <script src="{{ asset('admin') }}/libs/jquery.counterup/jquery.counterup.min.js"></script>
    <script src="{{ asset('admin') }}/libs/feather-icons/feather.min.js"></script>

    <!-- Apexcharts JS -->
    <script src="{{ asset('admin') }}/libs/apexcharts/apexcharts.min.js"></script>

    <!-- for basic area chart -->
    <script src="https://apexcharts.com/samples/{{ asset('admin') }}/stock-prices.js"></script>

    <!-- Widgets Init Js -->
    <script src="{{ asset('admin') }}/js/pages/analytics-dashboard.init.js"></script>

    <!-- App js-->
    <script src="{{ asset('admin') }}/js/app.js"></script>

</body>

</html>