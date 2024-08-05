@extends('frontend.layouts.main')
@section('content')
        <main>
            <div class="page-title-breadcrumbs">
                <div class="breadcrumbs-container container">
                    <div class="breadcrumbs_wrapper">
                        <div class="page-title-container">
                            <h1 class="text-center">Về Tea Shop</h1>
                        </div>

                        <div class="breadcrumbs-container text-center">
                            <ul class="breadcrumbs primary-font">
                                <li>
                                    <a href="/">
                                        <span>Trang chủ</span>
                                    </a>
                                </li>
                                <li class="breadcrumb-sep">/</li>
                                <li>
                                    <span>Về chúng tôi</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section about">
                <div class="container">
                    <div class="title text-center">
                        <div class="page-title color">
                            <h3 class="title-main">Về chúng tôi</h3>
                            <div class="title title-icon">
                                <h2 class="title-h2">Who we are</h2>
                                <p class="description">Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque
                                    nisl consectetur et.</p>
                            </div>
                        </div>
                    </div>

                    <div class="content-about text-center m-top">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-12 mg-bottom-50">
                                <div class="item">
                                    <div class="item-img">
                                        <a href="#" title="">
                                            <img class="img-fluid" src="{{asset('frontend/img/intro-blue-icon1.png')}}" alt="img">
                                        </a>
                                    </div>
                                    <div class="item-content">
                                        <div class="sub-title">
                                            <h4>Natural Farm</h4>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit felis euismod sempe.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-sm-12 mg-bottom-50">
                                <div class="item">
                                    <div class="item-img">
                                        <a href="#" title="">
                                            <img class="img-fluid" src="{{asset('frontend/img/intro-blue-icon2.png')}}" alt="img">
                                        </a>
                                    </div>
                                    <div class="item-content">
                                        <div class="sub-title">
                                            <h4>Healthy Food</h4>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit felis euismod sempe.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-sm-12 m-b-50">
                                <div class="item">
                                    <div class="item-img">
                                        <a href="#" title="">
                                            <img class="img-fluid" src="{{asset('frontend/img/intro-blue-icon3.png')}}" alt="img">
                                        </a>
                                    </div>
                                    <div class="item-content">
                                        <div class="sub-title">
                                            <h4>Conserves Biodiversity</h4>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit felis euismod sempe.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="item">
                                    <div class="item-img">
                                        <a href="#" title="">
                                            <img class="img-fluid" src="{{asset('frontend/img/intro-blue-icon4.png')}}" alt="img">
                                        </a>
                                    </div>
                                    <div class="item-content">
                                        <div class="sub-title">
                                            <h4>Biologically Safe</h4>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit felis euismod sempe.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="oars-store sm-text-center pd-top-bottom">
                <div class="container-full">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="item-img img-left">
                                <a href="#" title="">
                                    <img class="img-fluid" src="{{asset('frontend/img/intro-banner2.png')}}" alt="img">
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="title clearfix">
                                <div class="page-title color">
                                    <h3 class="title-main">Core Features</h3>
                                    <div class="title-icon text-left">
                                        <h2 class="title-h2">What is Oars Store?</h2>
                                    </div>
                                    <p class="description">Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel
                                        scelerisque nisl consectetur et.</p>
                                </div>

                                <div class="group-store m-top">
                                    <div class="index-core-group flex-center clearfix d-flex align-items-center">
                                        <div class="item-img float-left">
                                            <a href="#" title="">
                                                <img class="img-fluid" src="{{asset('frontend/img/intro-icon4.png')}}" alt="img">
                                            </a>
                                        </div>
                                        <div class="item-content">
                                            <div class="sub-title">
                                                <h4 class="no-ater">Free Shipping</h4>
                                                <p>With $100 or more orders. Go to Oars Store</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="index-core-group flex-center clearfix d-flex align-items-center">
                                        <div class="item-img float-left">
                                            <a href="#" title="">
                                                <img class="img-fluid" src="{{asset('frontend/img/intro-icon1.png')}}" alt="img">
                                            </a>
                                        </div>
                                        <div class="item-content">
                                            <div class="sub-title">
                                                <h4 class="no-ater">100% Organic Certified</h4>
                                                <p>100% Organic Cerfitifed Food & Textiles</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="index-core-group flex-center clearfix d-flex align-items-center">
                                        <div class="item-img float-left">
                                            <a href="#" title="">
                                                <img class="img-fluid" src="{{asset('frontend/img/intro-icon5.png')}}" alt="img">
                                            </a>
                                        </div>
                                        <div class="item-content">
                                            <div class="sub-title">
                                                <h4 class="no-ater">Secure Payment</h4>
                                                <p>Sercure Confirmed</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="index-core-group flex-center clearfix d-flex align-items-center">
                                        <div class="item-img float-left">
                                            <a href="#" title="">
                                                <img class="img-fluid" src="{{asset('frontend/img/intro-icon6.png')}}" alt="img">
                                            </a>
                                        </div>
                                        <div class="item-content">
                                            <div class="sub-title">
                                                <h4 class="no-ater">Friendly Support</h4>
                                                <p>Need help : +(12) 124 987 97</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section generalship">
                <div class="container-full">
                    <div class="row m-0">
                        <div class="col-lg-3 col-md-6 col-sm-12 pd-0">
                            <div class="inner step-1 img-hover-scale">
                                <div class="item-img">
                                    <a href="#" title="">
                                        <img class="img-fluid" src="{{asset('frontend/img/home1-intro-icon1.png')}}" alt="img">
                                    </a>
                                </div>
                                <div class="title-black item-content">
                                    <h2 class="title-h2">Step 01.</h2>
                                    <p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Morbi leo risus,
                                        porta ac consectetur ac, vestibulum at eros.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-12 pd-0">
                            <div class="inner step-2 img-hover-scale">
                                <div class="item-img">
                                    <a href="#" title="">
                                        <img class="img-fluid" src="{{asset('frontend/img/home1-intro-icon2.png')}}" alt="img">
                                    </a>
                                </div>
                                <div class="title-black item-content">
                                    <h2 class="title-h2">Step 02.</h2>
                                    <p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Morbi leo risus,
                                        porta ac consectetur ac, vestibulum at eros.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-12 pd-0">
                            <div class="inner step-3 img-hover-scale">
                                <div class="item-img">
                                    <a href="#" title="">
                                        <img class="img-fluid" src="{{asset('frontend/img/home1-intro-icon3.png')}}" alt="img">
                                    </a>
                                </div>
                                <div class="title-black item-content">
                                    <h2 class="title-h2">Step 03.</h2>
                                    <p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Morbi leo risus,
                                        porta ac consectetur ac, vestibulum at eros.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-12 pd-0">
                            <div class="inner step-4 img-hover-scale">
                                <div class="item-img">
                                    <a href="#" title="">
                                        <img class="img-fluid" src="{{asset('frontend/img/home1-intro-icon4.png')}}" alt="img">
                                    </a>
                                </div>
                                <div class="title-black item-content">
                                    <h2 class="title-h2">Step 04.</h2>
                                    <p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Morbi leo risus,
                                        porta ac consectetur ac, vestibulum at eros.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section meet-our-team">
                <div class="container">
                    <div class="title text-center">
                        <div class="page-title color">
                            <h3 class="title-main">Meet Our Team</h3>
                            <div class="title title-icon">
                                <h2 class="title-h2">Do You Know About Teams?</h2>
                                <p class="description">Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque
                                    nisl consectetur et.</p>
                            </div>
                        </div>
                    </div>

                    <div class="row m-top text-center">
                        <div class=" col-lg-3 col-sm-6">
                            <div class="item clearfix">
                                <div class="item-img">
                                    <img class="img-fluid" src="{{asset('frontend/img/team1.png')}}" alt="img">
                                </div>

                                <div class="item-content">
                                    <div class="user-info">
                                        <h4 class="user-name title-black">
                                            Veronica Anluz
                                        </h4>
                                        <span class="job font-italic">Smoothie Bartender</span>
                                    </div>
                                </div>

                                <div class="ourteam-social">
                                    <a class="social-item" target="_self" href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <a class="social-item" target="_self" href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                    <a class="social-item" target="_self" href="#">
                                        <i class="fa fa-pinterest-p"></i>
                                    </a>
                                    <a class="social-item" target="_self" href="#">
                                        <i class="fa fa-behance"></i>
                                    </a>
                                    <a class="social-item" target="_self" href="#">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class=" col-lg-3 col-sm-6">
                            <div class="item clearfix">
                                <div class="item-img">
                                    <img class="img-fluid" src="{{asset('frontend/img/team2.png')}}" alt="img">
                                </div>

                                <div class="item-content">
                                    <div class="user-info">
                                        <h4 class="user-name title-black">
                                            Jonny Miller
                                        </h4>
                                        <span class="job font-italic">Founder Oars Store</span>
                                    </div>
                                </div>

                                <div class="ourteam-social">
                                    <a class="social-item" target="_self" href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <a class="social-item" target="_self" href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                    <a class="social-item" target="_self" href="#">
                                        <i class="fa fa-pinterest-p"></i>
                                    </a>
                                    <a class="social-item" target="_self" href="#">
                                        <i class="fa fa-behance"></i>
                                    </a>
                                    <a class="social-item" target="_self" href="#">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class=" col-lg-3 col-sm-6">
                            <div class="item clearfix">
                                <div class="item-img">
                                    <img class="img-fluid" src="{{asset('frontend/img/team3.png')}}" alt="img">
                                </div>

                                <div class="item-content">
                                    <div class="user-info">
                                        <h4 class="user-name title-black">
                                            Karren Gillan
                                        </h4>
                                        <span class="job font-italic">Senior UI/UX Design</span>
                                    </div>
                                </div>

                                <div class="ourteam-social">
                                    <a class="social-item" target="_self" href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <a class="social-item" target="_self" href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                    <a class="social-item" target="_self" href="#">
                                        <i class="fa fa-pinterest-p"></i>
                                    </a>
                                    <a class="social-item" target="_self" href="#">
                                        <i class="fa fa-behance"></i>
                                    </a>
                                    <a class="social-item" target="_self" href="#">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class=" col-lg-3 col-sm-6">
                            <div class="item clearfix">
                                <div class="item-img">
                                    <img class="img-fluid" src="{{asset('frontend/img/team4.jpg')}}" alt="img">
                                </div>

                                <div class="item-content">
                                    <div class="user-info">
                                        <h4 class="user-name title-black">
                                            Dominic Pursay
                                        </h4>
                                        <span class="job font-italic">Developer</span>
                                    </div>
                                </div>

                                <div class="ourteam-social">
                                    <a class="social-item" target="_self" href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <a class="social-item" target="_self" href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                    <a class="social-item" target="_self" href="#">
                                        <i class="fa fa-pinterest-p"></i>
                                    </a>
                                    <a class="social-item" target="_self" href="#">
                                        <i class="fa fa-behance"></i>
                                    </a>
                                    <a class="social-item" target="_self" href="#">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="deal-layout">
                <div class="container">
                    <div class="inner">
                        <div class="row">
                            <div class="col-lg-6 col-sm-12">
                                <div class="title item-content clearfix">
                                    <div class=" page-title color">
                                        <h3 class="title-main">Deal Of The Day</h3>
                                        <div class="title-icon text-left">
                                            <h2 class="title-h2 background-position-left">Oars Store Offer 50% Off</h2>
                                            <p class="description">Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cras mattis
                                                consectetur purus sit amet fermentum. Lorem ipsum dolor sit amet, consectetur
                                                adipiscing elit. Donec ullamcorper nulla non metus auctor fringilla. Nullam
                                                quis risus eget urna mollis ornare vel eu leo.</p>
                                        </div>
                                        <span>
                                            <a href="#" class="btn view button-main">View more</a>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-12">
                                <div class="manufacturers-block">
                                    <div class="block-content">
                                        <ul class="deal-of-day-carousel">
                                            <li>
                                                <img class="img-fluid" src="{{asset('frontend/img/banner-promotion.png')}}" alt="img">
                                            </li>
                                            <li>
                                                <img class="img-fluid" src="{{asset('frontend/img/banner-promotion.png')}}" alt="img">
                                            </li>
                                            <li>
                                                <img class="img-fluid" src="{{asset('frontend/img/banner-promotion.png')}}" alt="img">
                                            </li>
                                            <li>
                                                <img class="img-fluid" src="{{asset('frontend/img/banner-promotion.png')}}" alt="img">
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="price d-flex justify-content-center align-items-center">
                                        <div class="price-inner">
                                            <span>Price Only</span>
                                            <p>
                                                <span class="woocommerce-Price-amount amount">$12</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
@endsection