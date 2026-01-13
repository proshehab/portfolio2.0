<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Personal Portfolio Website</title>

    <link rel="stylesheet" href="{{ asset('website') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('website') }}/css/all.css">
    <link rel="stylesheet" href="{{ asset('website') }}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('website') }}/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{ asset('website') }}/css/animate.css">
    <link rel="stylesheet" href="{{ asset('website') }}/css/custom.css">

    <link rel="icon" type="image/png" href="{{ asset('website') }}/images/man.png">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

</head>

<body>

    <div id="preloader">
        <div id="preloader_inner"></div>
    </div>

    @include('website.layouts.header')


    @yield('content')

    @include('website.layouts.footer')

    <a href="" class="scrollup">
        <i class="fas fa-chevron-up"></i>
    </a>


    <script src="{{ asset('website') }}/js/jquery-3.6.1.min.js"></script>
    <script src="{{ asset('website') }}/js/popper.min.js"></script>
    <script src="{{ asset('website') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('website') }}/js/jquery.waypoints.min.js"></script>
    <script src="{{ asset('website') }}/js/counterup.min.js"></script>
    <script src="{{ asset('website') }}/js/filter.min.js"></script>
    <script src="{{ asset('website') }}/js/owl.carousel.min.js"></script>
    <script src="{{ asset('website') }}/js/wow.min.js"></script>
    <script src="{{ asset('website') }}/js/custom.js"></script>

</body>

</html>