@extends('frontend.layouts.layouts')
@section('content')
    <main>
        <div class="page-title-breadcrumbs">
            <div class="breadcrumbs-container container">
                <div class="breadcrumbs_wrapper">
                    <div class="page-title-container">
                        <h1 class="text-center">Tin tức</h1>
                    </div>
                    <div class="breadcrumbs-container text-center">
                        <ul class="breadcrumbs primary-font">
                            <li>Trang chủ</li>
                            <li class="breadcrumb-sep">/</li>
                            <li>
                                <span>Tin tức</span>
                            </li>
                           
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <section>
            <div class="section blog-news">
                <div class="container">
                    <div class="block-content m-top">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-12 card-container">
                                <div class="product-container">
                                    <div class="left-block item-img">
                                        <div class="product-image-container ">
                                            <a class="product-img-link" href="/chi-tiet-tin-tuc" title="">
                                                <img src="{{asset('frontend/img/blog/blog1.png')}}" alt="img" class="w-100 image-effect">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="right-block">
                                        <div class="product-box text-center">
                                            <div class="meta-cat">
                                                <span>
                                                    <a href="blog-category-grid-sidebar.html">Smoothie</a>
                                                </span>
                                            </div>
                                            <h4 class="name-blog">
                                                <a href="blog-detail.html" class="title-black">Broad bean and goats’
                                                    cheese</a>
                                            </h4>
                                            <ul class="article-info">
                                                <li>
                                                    <a href="#">July 24, 2017</a>
                                                </li>
                                                <li>
                                                    <a href="#">0 Comments</a>
                                                </li>
                                                <li>
                                                    <a href="#">Share</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-12 card-container">
                                <div class="product-container">
                                    <div class="left-block item-img">
                                        <div class="product-image-container">
                                            <a class="product-img-link" href="/chi-tiet-tin-tuc" title="">
                                                <img src="{{asset('frontend/img/blog/blog2.png')}}" alt="img" class="w-100 image-effect">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="right-block">
                                        <div class="product-box text-center">
                                            <div class="meta-cat">
                                                <span>
                                                    <a href="blog-category-grid-sidebar.html">Smoothie</a>
                                                </span>
                                            </div>
                                            <h4 class="name-blog">
                                                <a href="blog-detail.html" class="title-black">Tomato: Nature’s Sweet Summer
                                                    Treat</a>
                                            </h4>
                                            <ul class="article-info">
                                                <li>
                                                    <a href="#">July 24, 2017</a>
                                                </li>
                                                <li>
                                                    <a href="#">0 Comments</a>
                                                </li>
                                                <li>
                                                    <a href="#">Share</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="blog-carousel owl-carousel navigation">
                                    <div class="item">
                                        <div class="product-container">
                                            <div class="left-block item-img">
                                                <div class="product-image-container">
                                                    <a class="product-img-link" href="/chi-tiet-tin-tuc" title="">
                                                        <img src="{{asset('frontend/img/blog/blog3.png')}}" alt="img"
                                                            class="w-100 image-effect">
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="right-block">
                                                <div class="product-box text-center">
                                                    <div class="meta-cat">
                                                        <span>
                                                            <a href="blog-category-grid-sidebar.html">Smoothie</a>
                                                        </span>
                                                    </div>
                                                    <h4 class="name-blog">
                                                        <a href="blog-detail.html" class="title-black">A Better Way to Get
                                                            Vitamin C</a>
                                                    </h4>
                                                    <ul class="article-info">
                                                        <li>
                                                            <a href="#">July 24, 2017</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">0 Comments</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Share</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="product-container">
                                            <div class="left-block item-img">
                                                <div class="product-image-container">
                                                    <a class="product-img-link" href="/chi-tiet-tin-tuc" title="">
                                                        <img src="{{asset('frontend/img/blog/blog4.png')}}" alt="img"
                                                            class="w-100 image-effect">
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="right-block">
                                                <div class="product-box text-center">
                                                    <div class="meta-cat">
                                                        <span>
                                                            <a href="blog-category-grid-sidebar.html">Smoothie</a>
                                                        </span>
                                                    </div>
                                                    <h4 class="name-blog">
                                                        <a href="blog-detail.html" title="">
                                                            A Better Way to Get Vitamin C
                                                        </a>
                                                    </h4>
                                                    <ul class="article-info">
                                                        <li>
                                                            <a href="#">July 24, 2017</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">0 Comments</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Share</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-12 card-container">
                                <div class="product-container">
                                    <div class="left-block item-img">
                                        <div class="product-image-container ">
                                            <a class="product-img-link" href="/chi-tiet-tin-tuc" title="">
                                                <img src="{{asset('frontend/img/blog/blog5.png')}}" alt="img" class="w-100 image-effect">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="right-block">
                                        <div class="product-box text-center">
                                            <div class="meta-cat">
                                                <span>
                                                    <a href="blog-category-grid-sidebar.html">Smoothie</a>
                                                </span>
                                            </div>
                                            <h4 class="name-blog">
                                                <a href="blog-detail.html" class="title-black">Broad bean and goats’
                                                    cheese</a>
                                            </h4>
                                            <ul class="article-info">
                                                <li>
                                                    <a href="#">July 24, 2017</a>
                                                </li>
                                                <li>
                                                    <a href="#">0 Comments</a>
                                                </li>
                                                <li>
                                                    <a href="#">Share</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-12 card-container">
                                <div class="product-container">
                                    <div class="left-block item-img">
                                        <div class="product-image-container">
                                            <a class="product-img-link" href="/chi-tiet-tin-tuc" title="">
                                                <img src="{{asset('frontend/img/blog/blog6.png')}}" alt="img" class="w-100 image-effect">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="right-block">
                                        <div class="product-box text-center">
                                            <div class="meta-cat">
                                                <span>
                                                    <a href="blog-category-grid-sidebar.html">Smoothie</a>
                                                </span>
                                            </div>
                                            <h4 class="name-blog">
                                                <a href="blog-detail.html" class="title-black">Tomato: Nature’s Sweet
                                                    Summer Treat</a>
                                            </h4>
                                            <ul class="article-info">
                                                <li>
                                                    <a href="#">July 24, 2017</a>
                                                </li>
                                                <li>
                                                    <a href="#">0 Comments</a>
                                                </li>
                                                <li>
                                                    <a href="#">Share</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-12 card-container">
                                <div class="product-container">
                                    <div class="left-block item-img">
                                        <div class="product-image-container ">
                                            <a class="product-img-link" href="/chi-tiet-tin-tuc" title="">
                                                <img src="{{asset('frontend/img/blog/blog7.png')}}" alt="img" class="w-100 image-effect">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="right-block">
                                        <div class="product-box text-center">
                                            <div class="meta-cat">
                                                <span>
                                                    <a href="blog-category-grid-sidebar.html">Smoothie</a>
                                                </span>
                                            </div>
                                            <h4 class="name-blog">
                                                <a href="blog-detail.html" class="title-black">Broad bean and goats’
                                                    cheese</a>
                                            </h4>
                                            <ul class="article-info">
                                                <li>
                                                    <a href="#">July 24, 2017</a>
                                                </li>
                                                <li>
                                                    <a href="#">0 Comments</a>
                                                </li>
                                                <li>
                                                    <a href="#">Share</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-12 card-container">
                                <div class="product-container">
                                    <div class="left-block item-img">
                                        <div class="product-image-container">
                                            <a class="product-img-link" href="/chi-tiet-tin-tuc" title="">
                                                <img src="{{asset('frontend/img/blog/blog8.png')}}" alt="img" class="w-100 image-effect">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="right-block">
                                        <div class="product-box text-center">
                                            <div class="meta-cat">
                                                <span>
                                                    <a href="blog-category-grid-sidebar.html">Smoothie</a>
                                                </span>
                                            </div>
                                            <h4 class="name-blog">
                                                <a href="blog-detail.html" class="title-black">Tomato: Nature’s Sweet
                                                    Summer Treat</a>
                                            </h4>
                                            <ul class="article-info">
                                                <li>
                                                    <a href="#">July 24, 2017</a>
                                                </li>
                                                <li>
                                                    <a href="#">0 Comments</a>
                                                </li>
                                                <li>
                                                    <a href="#">Share</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-12 card-container">
                                <div class="product-container">
                                    <div class="left-block item-img">
                                        <div class="product-image-container ">
                                            <a class="product-img-link" href="/chi-tiet-tin-tuc" title="">
                                                <img src="{{asset('frontend/img/blog/blog9.png')}}" alt="img" class="w-100 image-effect">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="right-block">
                                        <div class="product-box text-center">
                                            <div class="meta-cat">
                                                <span>
                                                    <a href="blog-category-grid-sidebar.html">Smoothie</a>
                                                </span>
                                            </div>
                                            <h4 class="name-blog">
                                                <a href="blog-detail.html" class="title-black">Broad bean and goats’
                                                    cheese</a>
                                            </h4>
                                            <ul class="article-info">
                                                <li>
                                                    <a href="#">July 24, 2017</a>
                                                </li>
                                                <li>
                                                    <a href="#">0 Comments</a>
                                                </li>
                                                <li>
                                                    <a href="#">Share</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-12 card-container">
                                <div class="product-container">
                                    <div class="left-block item-img">
                                        <div class="product-image-container">
                                            <a class="product-img-link" href="/chi-tiet-tin-tuc" title="">
                                                <img src="{{asset('frontend/img/blog/blog4.png')}}" alt="img" class="w-100 image-effect">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="right-block">
                                        <div class="product-box text-center">
                                            <div class="meta-cat">
                                                <span>
                                                    <a href="blog-category-grid-sidebar.html">Smoothie</a>
                                                </span>
                                            </div>
                                            <h4 class="name-blog">
                                                <a href="blog-detail.html" class="title-black">Tomato: Nature’s Sweet
                                                    Summer Treat</a>
                                            </h4>
                                            <ul class="article-info">
                                                <li>
                                                    <a href="#">July 24, 2017</a>
                                                </li>
                                                <li>
                                                    <a href="#">0 Comments</a>
                                                </li>
                                                <li>
                                                    <a href="#">Share</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="page-pagination clearfix text-center">
                        <a class="page-numbers" href="#">
                            <i class="fa fa-long-arrow-left"></i>
                        </a>
                        <a class="page-numbers active" href="#">1</a>
                        <a class="page-numbers" href="#">2</a>
                        <a class="page-numbers" href="#">3</a>
                        <a class="page-numbers" href="#">
                            <i class="fa fa-long-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
