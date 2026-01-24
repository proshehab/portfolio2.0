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
                @yield('content')
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