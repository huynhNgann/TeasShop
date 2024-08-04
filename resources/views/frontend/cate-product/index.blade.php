@extends('frontend.layouts.layouts')
@section('content')
    <main>
        <div class="page-title-breadcrumbs">
            <div class="breadcrumbs-container container">
                <div class="breadcrumbs_wrapper">
                    <div class="page-title-container">
                        <h1 class="text-center">Shop Page</h1>
                    </div>

                    <div class="breadcrumbs-container text-center">
                        <ul class="breadcrumbs primary-font">
                            <li>
                                <a href="#">
                                    <span>Trang chủ</span>
                                </a>
                            </li>
                            <li class="breadcrumb-sep">/</li>
                            <li>
                                <span>Danh sách sản phẩm</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="section product-default-item">
            <div class="container">
                <div class="title-default d-flex justify-content-between w-100 flex-wrap">
                    <div class="content-left d-flex justify-content-start align-items-center">
                        <div class="filter">
                            <i class="flaticon-filter"></i>
                            <span>Filter</span>
                        </div>

                        <div class="sort-by">
                            <div class="products-sort-order d-flex">
                                <span class="toolbar-title">Sắp xếp :</span>

                                <button class="sortButton">
                                    <span class="name">Tính năng</span>
                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </button>

                                <div class="sortBox control-container dropdown-menu">
                                    <ul class="sortForm list-unstyled option-set text-left list-styled"
                                        data-option-key="sortBy">
                                        <li class="sort manual">
                                            <a href="#">Featured</a>
                                        </li>
                                        <li class="sort price-ascending">
                                            <a href="#">Price, low to high</a>
                                        </li>
                                        <li class="sort price-descending">
                                            <a href="#">Price, high to low</a>
                                        </li>
                                        <li class="sort title-ascending">
                                            <a href="#">Alphabetically, A-Z</a>
                                        </li>
                                        <li class="sort title-descending">
                                            <a href="#">Alphabetically, Z-A</a>
                                        </li>
                                        <li class="sort created-ascending">
                                            <a href="#">Date, old to new</a>
                                        </li>
                                        <li class="sort created-descending">
                                            <a href="#">Date, new to old</a>
                                        </li>
                                        <li class="sort best-selling">
                                            <a href="#">Best Selling</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="content-right d-flex align-items-center justify-content-end">
                        <div class="product-counter">
                            Items
                            <span class="color-default">1 - 12</span> of
                            <span class="color-default">19</span> total
                        </div>

                        <div class="list-grid">
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#grid">
                                        <i class="fa fa-th-large" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#list">
                                        <i class="fa fa-list" aria-hidden="true"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="feature-products tab-content">
                    <!-- Grid -->
                    <div id="grid" class="tab-pane active">
                        <div class="product">
                            <div class="row">
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                    <div class="item item-hover-view-cart">
                                        <div class="product-thumb">
                                            <div class="product-container item-img">
                                                <div class="product-image-container">
                                                    <a class="product-img-link" href="product-detail.html" title="">
                                                        <img class="img-fluid" src="{{asset('frontend/img/products/product-1.jpg')}}"
                                                            alt="img">
                                                        <img class="img-fluid img-hover" src="{{asset('frontend/img/products/product-2.jpg')}}"
                                                            alt="img">
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="product-cart-icon d-flex justify-content-around">
                                                <div class="product-actions">
                                                    <a href="#">
                                                        <i class="cs-icon icon-cs-cart"></i>
                                                    </a>
                                                </div>
                                                <div class="product-actions">
                                                    <a href="#">
                                                        <i class="cs-icon icon-search"></i>
                                                    </a>
                                                </div>
                                                <div class="product-actions">
                                                    <a href="#">
                                                        <i class="cs-icon icon-heart"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="product-label">
                                            <span class="product-flash">Hot</span>
                                            <span class="product-flash sale">Sale</span>
                                        </div>

                                        <div class="product-info text-center">
                                            <h4 class="product-name">
                                                <a href="product-detail.html">Fresh Tomatoes</a>
                                            </h4>
                                            <div class="price">
                                                <span>$23.00</span>
                                                <del>$25.00</del>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                    <div class="item item-hover-view-cart">
                                        <div class="product-thumb">
                                            <div class="product-container item-img">
                                                <div class="product-image-container">
                                                    <a class="product-img-link" href="product-detail.html"
                                                        title="">
                                                        <img class="img-fluid" src="{{asset('frontend/img/products/product-14.jpg')}}"
                                                            alt="img">
                                                        <img class="img-fluid img-hover" src="{{asset('frontend/img/products/product-13.jpg')}}"
                                                            alt="img">
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="product-cart-icon d-flex justify-content-around">
                                                <div class="product-actions">
                                                    <a href="#">
                                                        <i class="cs-icon icon-cs-cart"></i>
                                                    </a>
                                                </div>
                                                <div class="product-actions">
                                                    <a href="#">
                                                        <i class="cs-icon icon-search"></i>
                                                    </a>
                                                </div>
                                                <div class="product-actions">
                                                    <a href="#">
                                                        <i class="cs-icon icon-heart"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="product-label">
                                            <span class="product-flash">Hot</span>
                                            <span class="product-flash sale">Sale</span>
                                        </div>

                                        <div class="product-info text-center">
                                            <h4 class="product-name">
                                                <a href="product-detail.html">Fresh Tomatoes</a>
                                            </h4>
                                            <div class="price">
                                                <span>$23.00</span>
                                                <del>$25.00</del>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                    <div class="item item-hover-view-cart">
                                        <div class="product-thumb">
                                            <div class="product-container item-img">
                                                <div class="product-image-container">
                                                    <a class="product-img-link" href="product-detail.html"
                                                        title="">
                                                        <img class="img-fluid" src="{{asset('frontend/img/products/product-4.jpg')}}"
                                                            alt="img">
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="product-cart-icon d-flex justify-content-around">
                                                <div class="product-actions">
                                                    <a href="#">
                                                        <i class="cs-icon icon-cs-cart"></i>
                                                    </a>
                                                </div>
                                                <div class="product-actions">
                                                    <a href="#">
                                                        <i class="cs-icon icon-search"></i>
                                                    </a>
                                                </div>
                                                <div class="product-actions">
                                                    <a href="#">
                                                        <i class="cs-icon icon-heart"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="product-label">
                                            <span class="product-flash">Hot</span>
                                        </div>

                                        <div class="product-info text-center">
                                            <h4 class="product-name">
                                                <a href="product-detail.html">Organic Mushroom</a>
                                            </h4>
                                            <div class="price">
                                                <span>$41.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                    <div class="item item-hover-view-cart">
                                        <div class="product-thumb">
                                            <div class="product-container item-img">
                                                <div class="product-image-container">
                                                    <a class="product-img-link" href="product-detail.html"
                                                        title="">
                                                        <img class="img-fluid" src="{{asset('frontend/img/products/product-5.jpg')}}"
                                                            alt="img">
                                                        <img class="img-fluid img-hover" src="{{asset('frontend/img/products/product-6.jpg')}}"
                                                            alt="img">
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="product-cart-icon d-flex justify-content-around">
                                                <div class="product-actions">
                                                    <a href="#">
                                                        <i class="cs-icon icon-cs-cart"></i>
                                                    </a>
                                                </div>
                                                <div class="product-actions">
                                                    <a href="#">
                                                        <i class="cs-icon icon-search"></i>
                                                    </a>
                                                </div>
                                                <div class="product-actions">
                                                    <a href="#">
                                                        <i class="cs-icon icon-heart"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="product-label">
                                            <span class="product-flash">Hot</span>
                                        </div>

                                        <div class="product-info text-center">
                                            <h4 class="product-name">
                                                <a href="product-detail.html">Pomegranate Juice</a>
                                            </h4>
                                            <div class="price">
                                                <span>$16.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                    <div class="item item-hover-view-cart">
                                        <div class="product-thumb">
                                            <div class="product-container item-img">
                                                <div class="product-image-container">
                                                    <a class="product-img-link" href="product-detail.html"
                                                        title="">
                                                        <img class="img-fluid" src="{{asset('frontend/img/products/product-7.jpg')}}"
                                                            alt="img">
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="product-cart-icon d-flex justify-content-around">
                                                <div class="product-actions">
                                                    <a href="#">
                                                        <i class="cs-icon icon-cs-cart"></i>
                                                    </a>
                                                </div>
                                                <div class="product-actions">
                                                    <a href="#">
                                                        <i class="cs-icon icon-search"></i>
                                                    </a>
                                                </div>
                                                <div class="product-actions">
                                                    <a href="#">
                                                        <i class="cs-icon icon-heart"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="product-label">
                                            <span class="product-flash">Hot</span>
                                        </div>

                                        <div class="product-info text-center">
                                            <h4 class="product-name">
                                                <a href="product-detail.html">Purple Cabbage</a>
                                            </h4>
                                            <div class="price">
                                                <span>$18.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                    <div class="item item-hover-view-cart">
                                        <div class="product-thumb">
                                            <div class="product-container item-img">
                                                <div class="product-image-container">
                                                    <a class="product-img-link" href="product-detail.html"
                                                        title="">
                                                        <img class="img-fluid" src="{{asset('frontend/img/products/product-8.jpg')}}"
                                                            alt="img">
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="product-cart-icon d-flex justify-content-around">
                                                <div class="product-actions">
                                                    <a href="#">
                                                        <i class="cs-icon icon-cs-cart"></i>
                                                    </a>
                                                </div>
                                                <div class="product-actions">
                                                    <a href="#">
                                                        <i class="cs-icon icon-search"></i>
                                                    </a>
                                                </div>
                                                <div class="product-actions">
                                                    <a href="#">
                                                        <i class="cs-icon icon-heart"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="product-label">
                                            <span class="product-flash">Hot</span>
                                        </div>

                                        <div class="product-info text-center">
                                            <h4 class="product-name">
                                                <a href="product-detail.html">Aubergine</a>
                                            </h4>
                                            <div class="price">
                                                <span>$22.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                    <div class="item item-hover-view-cart">
                                        <div class="product-thumb">
                                            <div class="product-container item-img">
                                                <div class="product-image-container">
                                                    <a class="product-img-link" href="product-detail.html"
                                                        title="">
                                                        <img class="img-fluid" src="{{asset('frontend/img/products/product-9.jpg')}}"
                                                            alt="img">
                                                        <img class="img-fluid img-hover" src="{{asset('frontend/img/products/product-10.jpg')}}"
                                                            alt="img">
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="product-cart-icon d-flex justify-content-around">
                                                <div class="product-actions">
                                                    <a href="#">
                                                        <i class="cs-icon icon-cs-cart"></i>
                                                    </a>
                                                </div>
                                                <div class="product-actions">
                                                    <a href="#">
                                                        <i class="cs-icon icon-search"></i>
                                                    </a>
                                                </div>
                                                <div class="product-actions">
                                                    <a href="#">
                                                        <i class="cs-icon icon-heart"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="product-label">
                                            <span class="product-flash">Hot</span>
                                            <span class="product-flash sale">Sale</span>
                                        </div>

                                        <div class="product-info text-center">
                                            <h4 class="product-name">
                                                <a href="product-detail.html">Banana Blossoms</a>
                                            </h4>
                                            <div class="price">
                                                <span>$21.00</span>
                                                <del>$25.00</del>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                    <div class="item item-hover-view-cart">
                                        <div class="product-thumb">
                                            <div class="product-container item-img">
                                                <div class="product-image-container">
                                                    <a class="product-img-link" href="product-detail.html"
                                                        title="">
                                                        <img class="img-fluid" src="{{asset('frontend/img/products/product-11.jpg')}}"
                                                            alt="img">
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="product-cart-icon d-flex justify-content-around">
                                                <div class="product-actions">
                                                    <a href="#">
                                                        <i class="cs-icon icon-cs-cart"></i>
                                                    </a>
                                                </div>
                                                <div class="product-actions">
                                                    <a href="#">
                                                        <i class="cs-icon icon-search"></i>
                                                    </a>
                                                </div>
                                                <div class="product-actions">
                                                    <a href="#">
                                                        <i class="cs-icon icon-heart"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="product-label">
                                            <span class="product-flash">Hot</span>
                                            <span class="product-flash sale">Sale</span>
                                        </div>

                                        <div class="product-info text-center">
                                            <h4 class="product-name">
                                                <a href="product-detail.html">Green Detox Drink</a>
                                            </h4>
                                            <div class="price">
                                                <span>$23.00</span>
                                                <del>$25.00</del>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                    <div class="item item-hover-view-cart">
                                        <div class="product-thumb">
                                            <div class="product-container item-img">
                                                <div class="product-image-container">
                                                    <a class="product-img-link" href="product-detail.html"
                                                        title="">
                                                        <img class="img-fluid" src="{{asset('frontend/img/products/product-9.jpg')}}"
                                                            alt="img">
                                                        <img class="img-fluid img-hover" src="{{asset('frontend/img/products/product-10.jpg')}}"
                                                            alt="img">
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="product-cart-icon d-flex justify-content-around">
                                                <div class="product-actions">
                                                    <a href="#">
                                                        <i class="cs-icon icon-cs-cart"></i>
                                                    </a>
                                                </div>
                                                <div class="product-actions">
                                                    <a href="#">
                                                        <i class="cs-icon icon-search"></i>
                                                    </a>
                                                </div>
                                                <div class="product-actions">
                                                    <a href="#">
                                                        <i class="cs-icon icon-heart"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="product-label">
                                            <span class="product-flash">Hot</span>
                                        </div>

                                        <div class="product-info text-center">
                                            <h4 class="product-name">
                                                <a href="product-detail.html">Pomegranate Juice</a>
                                            </h4>
                                            <div class="price">
                                                <span>$16.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                    <div class="item item-hover-view-cart">
                                        <div class="product-thumb">
                                            <div class="product-container item-img">
                                                <div class="product-image-container">
                                                    <a class="product-img-link" href="product-detail.html"
                                                        title="">
                                                        <img class="img-fluid" src="{{asset('frontend/img/products/product-12.jpg')}}"
                                                            alt="img">
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="product-cart-icon d-flex justify-content-around">
                                                <div class="product-actions">
                                                    <a href="#">
                                                        <i class="cs-icon icon-cs-cart"></i>
                                                    </a>
                                                </div>
                                                <div class="product-actions">
                                                    <a href="#">
                                                        <i class="cs-icon icon-search"></i>
                                                    </a>
                                                </div>
                                                <div class="product-actions">
                                                    <a href="#">
                                                        <i class="cs-icon icon-heart"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="product-label">
                                            <span class="product-flash">Hot</span>
                                        </div>

                                        <div class="product-info text-center">
                                            <h4 class="product-name">
                                                <a href="product-detail.html">Purple Cabbage</a>
                                            </h4>
                                            <div class="price">
                                                <span>$18.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                    <div class="item item-hover-view-cart">
                                        <div class="product-thumb">
                                            <div class="product-container item-img">
                                                <div class="product-image-container">
                                                    <a class="product-img-link" href="product-detail.html"
                                                        title="">
                                                        <img class="img-fluid" src="{{asset('frontend/img/products/product-13.jpg')}}"
                                                            alt="img">
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="product-cart-icon d-flex justify-content-around">
                                                <div class="product-actions">
                                                    <a href="#">
                                                        <i class="cs-icon icon-cs-cart"></i>
                                                    </a>
                                                </div>
                                                <div class="product-actions">
                                                    <a href="#">
                                                        <i class="cs-icon icon-search"></i>
                                                    </a>
                                                </div>
                                                <div class="product-actions">
                                                    <a href="#">
                                                        <i class="cs-icon icon-heart"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="product-label">
                                            <span class="product-flash">Hot</span>
                                        </div>

                                        <div class="product-info text-center">
                                            <h4 class="product-name">
                                                <a href="product-detail.html">Aubergine</a>
                                            </h4>
                                            <div class="price">
                                                <span>$22.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                    <div class="item item-hover-view-cart">
                                        <div class="product-thumb">
                                            <div class="product-container item-img">
                                                <div class="product-image-container">
                                                    <a class="product-img-link" href="product-detail.html"
                                                        title="">
                                                        <img class="img-fluid" src="{{asset('frontend/img/products/product-14.jpg')}}"
                                                            alt="img">
                                                        <img class="img-fluid img-hover" src="{{asset('frontend/img/products/product-15.jpg')}}"
                                                            alt="img">
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="product-cart-icon d-flex justify-content-around">
                                                <div class="product-actions">
                                                    <a href="#">
                                                        <i class="cs-icon icon-cs-cart"></i>
                                                    </a>
                                                </div>
                                                <div class="product-actions">
                                                    <a href="#">
                                                        <i class="cs-icon icon-search"></i>
                                                    </a>
                                                </div>
                                                <div class="product-actions">
                                                    <a href="#">
                                                        <i class="cs-icon icon-heart"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="product-label">
                                            <span class="product-flash">Hot</span>
                                            <span class="product-flash sale">Sale</span>
                                        </div>

                                        <div class="product-info text-center">
                                            <h4 class="product-name">
                                                <a href="product-detail.html">Banana Blossoms</a>
                                            </h4>
                                            <div class="price">
                                                <span>$21.00</span>
                                                <del>$25.00</del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- List -->
                    <div id="list" class="tab-pane">
                        <div class="product">
                            <div class="item">
                                <div class="row">
                                    <div class="col-md-5 col-sm-12">
                                        <div class="product-thumb">
                                            <div class="product-container item-img">
                                                <div class="product-image-container">
                                                    <a class="product-img-link" href="product-detail.html"
                                                        title="">
                                                        <img class="w-100" src="{{asset('frontend/img/products/product-1.jpg')}}"
                                                            alt="img">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="product-label">
                                            <span class="product-flash">Hot</span>
                                        </div>
                                    </div>

                                    <div class="col-md-7 col-sm-12">
                                        <div class="content-right">
                                            <h2>
                                                <a href="/chi-tiet-san-pham">Osso Buco</a>
                                            </h2>

                                            <div class="rating d-flex align-items-center">
                                                <div class="star-content">
                                                    <div class="star active"></div>
                                                    <div class="star active"></div>
                                                    <div class="star active"></div>
                                                    <div class="star active"></div>
                                                    <div class="star active"></div>
                                                </div>
                                                <span class="number-rate">3</span>
                                            </div>

                                            <div class="price font-600 color-default">
                                                <span>$120.00</span>
                                            </div>

                                            <div class="des">
                                                Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget
                                                lacinia odio sem nec elit. Lorem ipsum dolor sit amet,
                                                consectetur adipiscing elit. Nulla vitae elit libero, a pharetra augue.
                                                Nullam quis risus eget urna mollis ornare
                                                vel eu leo. Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                                                Lorem ipsum dolor sit amet, consectetur
                                                adipiscing elit.
                                            </div>

                                            <div class="button d-flex align-items-center">
                                                <a href="#" class="btn view button-main">Add To Cart</a>
                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="row">
                                    <div class="col-md-5 col-sm-12">
                                        <div class="product-thumb">
                                            <div class="product-container item-img">
                                                <div class="product-image-container">
                                                    <a class="product-img-link" href="/chi-tiet-san-pham"
                                                        title="">
                                                        <img class="w-100" src="img/products/product-2.jpg"
                                                            alt="img">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="product-label">
                                            <span class="product-flash">Hot</span>
                                        </div>
                                    </div>

                                    <div class="col-md-7 col-sm-12">
                                        <div class="content-right">
                                            <h2>
                                                <a href="product-detail.html">Fresh Tomatoes</a>
                                            </h2>

                                            <div class="rating d-flex align-items-center">
                                                <div class="star-content">
                                                    <div class="star active"></div>
                                                    <div class="star active"></div>
                                                    <div class="star active"></div>
                                                    <div class="star active"></div>
                                                    <div class="star active"></div>
                                                </div>
                                                <span class="number-rate">3</span>
                                            </div>

                                            <div class="price font-600 color-default">
                                                <span>
                                                    <span>$120.00</span>
                                                </span>
                                            </div>

                                            <div class="des">
                                                Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget
                                                lacinia odio sem nec elit. Lorem ipsum dolor sit amet,
                                                consectetur adipiscing elit. Nulla vitae elit libero, a pharetra augue.
                                                Nullam quis risus eget urna mollis ornare
                                                vel eu leo. Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                                                Lorem ipsum dolor sit amet, consectetur
                                                adipiscing elit.
                                            </div>

                                            <div class="button d-flex align-items-center">
                                                <a href="#" class="btn view button-main">Add To Cart</a>
                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="row">
                                    <div class="col-md-5 col-sm-12">
                                        <div class="product-thumb">
                                            <div class="product-container item-img">
                                                <div class="product-image-container">
                                                    <a class="product-img-link" href="/chi-tiet-san-pham"
                                                        title="">
                                                        <img class="w-100" src="{{asset('frontend/img/products/product-3.jpg')}}"
                                                            alt="img">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="product-label">
                                            <span class="product-flash">Hot</span>
                                            <span class="product-flash sale">Sale</span>
                                        </div>
                                    </div>

                                    <div class="col-md-7 col-sm-12">
                                        <div class="content-right">
                                            <h2>
                                                <a href="product-detail.html">Organic Mushroom</a>
                                            </h2>

                                            <div class="rating d-flex align-items-center">
                                                <div class="star-content">
                                                    <div class="star active"></div>
                                                    <div class="star active"></div>
                                                    <div class="star active"></div>
                                                    <div class="star active"></div>
                                                    <div class="star active"></div>
                                                </div>
                                                <span class="number-rate">3</span>
                                            </div>

                                            <div class="price font-600">
                                                <span class="color-default">$120.00</span>
                                                <del>$69.00</del>
                                            </div>

                                            <div class="des">
                                                Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget
                                                lacinia odio sem nec elit. Lorem ipsum dolor sit amet,
                                                consectetur adipiscing elit. Nulla vitae elit libero, a pharetra augue.
                                                Nullam quis risus eget urna mollis ornare
                                                vel eu leo. Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                                                Lorem ipsum dolor sit amet, consectetur
                                                adipiscing elit.
                                            </div>

                                            <div class="button d-flex align-items-center">
                                                <a href="#" class="btn view button-main">Add To Cart</a>
                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="row">
                                    <div class="col-md-5 col-sm-12">
                                        <div class="product-thumb">
                                            <div class="product-container item-img">
                                                <div class="product-image-container">
                                                    <a class="product-img-link" href="/chi-tiet-san-pham"
                                                        title="">
                                                        <img class="w-100" src="{{asset('frontend/img/products/product-4.jpg')}}"
                                                            alt="img">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="product-label">
                                            <span class="product-flash">Hot</span>
                                        </div>
                                    </div>

                                    <div class="col-md-7 col-sm-12">
                                        <div class="content-right">
                                            <h2>
                                                <a href="product-detail.html">Pomegranate Juice</a>
                                            </h2>

                                            <div class="rating d-flex align-items-center">
                                                <div class="star-content">
                                                    <div class="star active"></div>
                                                    <div class="star active"></div>
                                                    <div class="star active"></div>
                                                    <div class="star active"></div>
                                                    <div class="star active"></div>
                                                </div>
                                                <span class="number-rate">3</span>
                                            </div>

                                            <div class="price font-600 color-default">
                                                <span>$120.00</span>
                                            </div>

                                            <div class="des">
                                                Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget
                                                lacinia odio sem nec elit. Lorem ipsum dolor sit amet,
                                                consectetur adipiscing elit. Nulla vitae elit libero, a pharetra augue.
                                                Nullam quis risus eget urna mollis ornare
                                                vel eu leo. Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                                                Lorem ipsum dolor sit amet, consectetur
                                                adipiscing elit.
                                            </div>

                                            <div class="button d-flex align-items-center">
                                                <a href="#" class="btn view button-main">Add To Cart</a>
                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="row">
                                    <div class="col-md-5 col-sm-12">
                                        <div class="product-thumb">
                                            <div class="product-container item-img">
                                                <div class="product-image-container">
                                                    <a class="product-img-link" href="/chi-tiet-san-pham"
                                                        title="">
                                                        <img class="w-100" src="{{asset('frontend/img/products/product-5.jpg')}}"
                                                            alt="img">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="product-label">
                                            <span class="product-flash">Hot</span>
                                        </div>
                                    </div>

                                    <div class="col-md-7 col-sm-12">
                                        <div class="content-right">
                                            <h2>
                                                <a href="product-detail.html">Purple Cabage</a>
                                            </h2>

                                            <div class="rating d-flex align-items-center">
                                                <div class="star-content">
                                                    <div class="star active"></div>
                                                    <div class="star active"></div>
                                                    <div class="star active"></div>
                                                    <div class="star active"></div>
                                                    <div class="star active"></div>
                                                </div>
                                                <span class="number-rate">3</span>
                                            </div>

                                            <div class="price font-600 color-default">
                                                <span>$120.00</span>
                                            </div>

                                            <div class="des">
                                                Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget
                                                lacinia odio sem nec elit. Lorem ipsum dolor sit amet,
                                                consectetur adipiscing elit. Nulla vitae elit libero, a pharetra augue.
                                                Nullam quis risus eget urna mollis ornare
                                                vel eu leo. Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                                                Lorem ipsum dolor sit amet, consectetur
                                                adipiscing elit.
                                            </div>

                                            <div class="button d-flex align-items-center">
                                                <a href="#" class="btn view button-main">Add To Cart</a>
                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="row">
                                    <div class="col-md-5 col-sm-12">
                                        <div class="product-thumb">
                                            <div class="product-container item-img">
                                                <div class="product-image-container">
                                                    <a class="product-img-link" href="/chi-tiet-san-pham"
                                                        title="">
                                                        <img class="w-100" src="{{asset('frontend/img/products/product-6.jpg')}}"
                                                            alt="img">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="product-label">
                                            <span class="product-flash">Hot</span>
                                            <span class="product-flash sale">Sale</span>
                                        </div>
                                    </div>

                                    <div class="col-md-7 col-sm-12">
                                        <div class="content-right m-b-0">
                                            <h2>
                                                <a href="product-detail.html">Osso Buco</a>
                                            </h2>

                                            <div class="rating d-flex align-items-center">
                                                <div class="star-content">
                                                    <div class="star active"></div>
                                                    <div class="star active"></div>
                                                    <div class="star active"></div>
                                                    <div class="star active"></div>
                                                    <div class="star active"></div>
                                                </div>
                                                <span class="number-rate">3</span>
                                            </div>

                                            <div class="price font-600 color-default">
                                                <span>$120.00</span>
                                            </div>

                                            <div class="des">
                                                Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget
                                                lacinia odio sem nec elit. Lorem ipsum dolor sit amet,
                                                consectetur adipiscing elit. Nulla vitae elit libero, a pharetra augue.
                                                Nullam quis risus eget urna mollis ornare
                                                vel eu leo. Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                                                Lorem ipsum dolor sit amet, consectetur
                                                adipiscing elit.
                                            </div>

                                            <div class="button d-flex align-items-center">
                                                <a href="#" class="btn view button-main">Add To Cart</a>
                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                            </div>
                                        </div>
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
    </main>
@endsection
