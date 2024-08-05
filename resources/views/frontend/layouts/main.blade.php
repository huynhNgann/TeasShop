<!DOCTYPE html>
<html lang="zxx">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('frontend/img/favicon.png')}}" type="image/png">

    <!-- Goggle Fonts-->
    <link href="{{asset('frontend/css.css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i')}}" rel="stylesheet">
    <link href="{{asset('frontend/css-1.css?family=Noto+Serif" rel="stylesheet')}}">
    <link href="{{asset('frontend/css-2.css?family=Playfair+Display" rel="stylesheet')}}">

    <!-- Libs CSS -->
    <link rel="stylesheet" href="{{asset('frontend/libs/boostrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{asset('frontend/libs/flaticon/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/libs/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/libs/owl.carousel/assets/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/libs/nivo-slider/css/nivo-slider.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/libs/nivo-slider/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/libs/nivo-slider/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/libs/slider-range/css/jslider.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/libs/font-cs/cs.css')}}">
    @yield('css')
    <!-- Template CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/responsive.css')}}">
    <!-- Pixel Code for https://leadee.ai/leadflows/ -->
    <script async="" src="https://leadee.ai/leadflows/pixel/utz6ml9zm82quionoyai7688g2rh9p7g"></script>
<!-- END Pixel Code -->
</head>

<body class="home-2 product-grid product-category-page product-detail blog-default blog-detail about-us contact-us-02">
    <div class="all">
       @include('frontend.layouts.header')

        @yield('content')

        @include('frontend.layouts.footer')
    </div>

    <!-- Back-To-Top Button -->
    <div class="back-to-top">
        <a href="#">
            <i class="fa fa-long-arrow-up"></i>
        </a>
    </div>

    <!-- Page Loader -->
    <div id="page-preloader">
        <div class="page-loading">
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
        </div>
    </div>

    <!-- Libs JS -->
    <script src="{{asset('frontend/libs/jquery/jquery-1.11.3.min.js')}}"></script>
    <script src="{{asset('frontend/libs/owl.carousel/owl.carousel.js')}}"></script>
    <script src="{{asset('frontend/libs/boostrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend/libs/boostrap/js/popper.min.js')}}"></script>
    <script src="{{asset('frontend/libs/nivo-slider/js/jquery.nivo.slider.js')}}"></script>
    <script src="{{asset('frontend/libs/jquery.elevatezoom/jquery.elevatezoom.js')}}"></script>
    <script src="{{asset('frontend/libs/slider-range/js/tmpl.js')}}"></script>
    <script src="{{asset('frontend/libs/slider-range/js/jquery.dependClass-0.1.js')}}"></script>
    <script src="{{asset('frontend/libs/slider-range/js/draggable-0.1.js')}}"></script>
    <script src="{{asset('frontend/libs/slider-range/js/jquery.slider.js')}}"></script>
    <script src="{{asset('frontend/libs/masonry/masonry.pkgd.min.js')}}"></script>
    <script src="{{asset('frontend/libs/jquery.countdown/jquery.countdown.js')}}"></script>
    <script src='{{asset('frontend/libs/imagesloaded/imagesloaded.pkgd.js')}}'></script>

    <!-- Template JS -->
    <script src="{{asset('frontend/js/custom.js')}}"></script>
    @yield('js')
</body>

</html>