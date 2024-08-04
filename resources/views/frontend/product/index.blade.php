@extends('frontend.layouts.layouts')
@section('content')
    <main>
        <div class="page-title-breadcrumbs">
            <div class="breadcrumbs-container container">
                <div class="breadcrumbs_wrapper">
                    <div class="page-title-container">
                        <h1 class="text-center">Chi tiết sản phẩm</h1>
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
                                <span>Chi tiết sản phẩm</span>
                            </li>
                            <li class="breadcrumb-sep">/</li>
                            <li>
                                <span>Pomegrante Juice</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="product-detail-wrap">
            <div class="container">
                <div class="row d-flex flex-wrap product-detail-info">
                    <div class="col-md-7 col-sm-12 layout-left">
                        <div class="product-image vertical">
                            <div class="main-image">
                                <img class="w-100" src="{{asset('frontend/img/products/product-32.jpg')}}" alt="Product Image">
                            </div>
                            <div class="thumb-images">
                                <img class="w-100" src="{{asset('frontend/img/products/product-32.jpg')}}" alt="Product Image">
                                <img class="w-100" src="{{asset('frontend/img/products/product-33.jpg')}}" alt="Product Image">
                                <img class="w-100" src="{{asset('frontend/img/products/product-34.jpg')}}" alt="Product Image">
                                <img class="w-100" src="{{asset('frontend/img/products/product-35.jpg')}}" alt="Product Image">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-5 col-sm-12 product-information">
                        <h1 class="title">Fresh Tomatoes</h1>
                        <div class="rating-description">
                            <div class="rating d-flex align-items-center">
                                <div class="star-content">
                                    <div class="star active"></div>
                                    <div class="star active"></div>
                                    <div class="star active"></div>
                                    <div class="star active"></div>
                                    <div class="star active"></div>
                                </div>
                                <div class="review">(4 customer reviews)</div>
                            </div>
                        </div>

                        <div class="product-price">
                            <h2 class="price">
                                <span class="money">$30.00</span>
                                <del>
                                    <span class="money">$60.00</span>
                                </del>
                            </h2>
                        </div>

                        <div class="product-stock management-content d-flex flex-wrap">
                            <span class="management-title">Availability:</span>
                            <div class="management-description">In Stock</div>
                        </div>

                        <div class="description">
                            Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit
                            dolor sit amet, consectetur.
                        </div>

                        <div class="purchase-section multiple d-flex flex-wrap align-items-center">
                            <div class="quantity-wrapper clearfix">
                                <div class="wrapper d-flex">
                                    <input id="quantity" type="text" name="quantity" value="1" maxlength="5"
                                        size="5" class="item-quantity">
                                    <div class="qty-btn-vertical">
                                        <span class="qty-up cs-icon icon-ion-ios-arrow-up" title="Increase"
                                            data-src="#quantity">
                                        </span>
                                        <span class="qty-down cs-icon icon-ion-ios-arrow-down" title="Decrease"
                                            data-src="#quantity">
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="purchase">
                                <button class="add-to-cart" type="submit">
                                    <span class="btn view button-main">Add to cart</span>
                                </button>
                            </div>

                            <div class="comWish-content">
                                <a title="Add To Wishlist" class="wishlist wishlist-fresh-tomatoes"
                                    data-wishlisthandle="fresh-tomatoes">
                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>

                        <div class="product-share">
                            <div class="share-item d-table">
                                <div class="share-title">SKU:</div>
                                <div class="share-info d-table-cell">CA78963</div>
                            </div>

                            <div class="share-item d-table">
                                <div class="share-title">Categories :</div>
                                <div class="share-info d-table-cell">
                                    <a href="product-category-grid.html">Fruit</a>,
                                    <a href="product-category-grid.html">Organic Product</a>
                                </div>
                            </div>

                            <div class="share-item d-table">
                                <div class="share-title">Expire Date : </div>
                                <div class="share-info d-table-cell">20/06/2017</div>
                            </div>

                            <div class="share-item d-table">
                                <div class="share-title">Tags:</div>
                                <div class="share-info d-table-cell">
                                    <a href="product-category-grid.html">oars</a>,
                                    <a href="product-category-grid.html">fresh</a>,
                                    <a href="product-category-grid.html">organic</a>
                                </div>
                            </div>

                            <div class="share-item d-table">
                                <div class="share-title">Share:</div>
                                <div class="share-info d-table-cell">
                                    <div class="social-sharing is-clean">
                                        <a target="_blank" href="#" class="share-facebook">
                                            <span class="fa fa-facebook"></span>
                                        </a>
                                        <a target="_blank" href="#" class="share-twitter">
                                            <span class="fa fa-twitter"></span>
                                        </a>
                                        <a target="_blank" href="#" class="share-pinterest">
                                            <span class="fa fa-pinterest"></span>
                                        </a>
                                        <a target="_blank" href="#" class="share-google">
                                            <span class="fa fa-google-plus"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="review-product">
                    <ul class="nav nav-tabs d-flex justify-content-center">
                        <li class="active">
                            <a data-toggle="tab" href="#description" class="active show">Description</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#tag" class="">Additional Info</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#review" class="">Reviews (2)</a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div id="description" class="tab-pane fade in active show">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                        </div>

                        <div id="review" class="tab-pane fade">
                            <div class="spr-form d-block">
                                <div class="user-comment">
                                    <div class="user-comment-item d-flex">
                                        <div>
                                            <img src="{{asset('frontend/img/user1.png')}}" alt="">
                                        </div>

                                        <div class="spr-review w-100">
                                            <div class="spr-review-header d-flex justify-content-between">
                                                <span class="spr-review-header-byline">
                                                    <strong>Peter Capidal</strong>
                                                    <span>Apr 14, 2018</span>
                                                </span>
                                                <div class="rating">
                                                    <div class="star-content">
                                                        <div class="star active"></div>
                                                        <div class="star active"></div>
                                                        <div class="star active"></div>
                                                        <div class="star active"></div>
                                                        <div class="star active"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="spr-review-content">
                                                <p class="spr-review-content-body">Morbi leo risus, porta ac consectetur
                                                    ac, vestibulum at eros. Nulla vitae
                                                    elit libero, a pharetra augue. Cras justo odio, dapibus ac . Donec
                                                    sed odio dui. Donec sed odio dui.
                                                </p>
                                                <p class="font-italic">
                                                    <a href="#">Reply Comment</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="user-comment-item d-flex">
                                        <div>
                                            <img src="{{asset('frontend/img/user2.png')}}" alt="">
                                        </div>
                                        <div class="spr-review preview2 w-100">
                                            <div class="spr-review-header d-flex justify-content-between">
                                                <span class="spr-review-header-byline">
                                                    <strong>David James</strong>
                                                    <span>Apr 13, 2018</span>
                                                </span>

                                                <div class="rating">
                                                    <div class="star-content">
                                                        <div class="star active"></div>
                                                        <div class="star active"></div>
                                                        <div class="star active"></div>
                                                        <div class="star active"></div>
                                                        <div class="star active"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="spr-review-content">
                                                <p class="spr-review-content-body">Morbi leo risus, porta ac consectetur
                                                    ac, vestibulum at eros. Nulla vitae
                                                    elit libero, a pharetra augue. Cras justo odio, dapibus ac . Donec
                                                    sed odio dui. Donec sed odio dui.
                                                </p>
                                                <p class="font-italic">
                                                    <a href="#">Reply Comment</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <form method="post" action="index.html" class="new-review-form">
                                <input type="hidden" name="review[rating]" value="3">
                                <input type="hidden" name="product_id">
                                <h3 class="spr-form-title title-black">Write a review</h3>
                                <p>Nullam quis risus eget urna mollis ornare vel eu leo.</p>

                                <fieldset>
                                    <div class="spr-form-review-rating d-flex">
                                        <label class="spr-form-label">Your Rating: </label>
                                        <fieldset class="ratings">
                                            <input type="radio" id="star5" name="rating" value="5">
                                            <label class="full" for="star5" title="Awesome - 5 stars"></label>
                                            <input type="radio" id="star4half" name="rating" value="4 and a half">
                                            <input type="radio" id="star4" name="rating" value="4">
                                            <label class="full" for="star4" title="Pretty good - 4 stars"></label>
                                            <input type="radio" id="star3half" name="rating" value="3 and a half">
                                            <input type="radio" id="star3" name="rating" value="3">
                                            <label class="full" for="star3" title="Meh - 3 stars"></label>
                                            <input type="radio" id="star2half" name="rating" value="2 and a half">
                                            <input type="radio" id="star2" name="rating" value="2">
                                            <label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                                            <input type="radio" id="star1half" name="rating" value="1 and a half">
                                            <input type="radio" id="star1" name="rating" value="1">
                                            <label class="full" for="star1" title="Sucks big time - 1 star"></label>
                                            <input type="radio" id="starhalf" name="rating" value="half">
                                        </fieldset>
                                    </div>
                                </fieldset>

                                <fieldset class="spr-form-contact">
                                    <div class="row">
                                        <div class="col-lg-6 col-sm-12 spr-form-contact-name">
                                            <input class="spr-form-input spr-form-input-text form-control" value=""
                                                placeholder="Enter your name">
                                        </div>
                                        <div class="col-lg-6 col-sm-12 spr-form-contact-email">
                                            <input class="spr-form-input spr-form-input-text form-control" value=""
                                                placeholder="Enter your email">
                                        </div>
                                    </div>
                                </fieldset>

                                <fieldset>
                                    <div class="spr-form-review-body">
                                        <div class="spr-form-input">
                                            <textarea class="spr-form-input-textarea" rows="10" placeholder="Write your comments here"></textarea>
                                        </div>
                                    </div>
                                </fieldset>

                                <div class="submit">
                                    <button class="add-to-cart" type="submit">
                                        <span class="btn view button-main">Submit</span>
                                    </button>
                                </div>
                            </form>
                        </div>

                        <div id="tag" class="tab-pane fade in">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet.
                            </p>
                            <ul>
                                <li>Cum sociis natoque penatibus et magnis.</li>
                                <li>Sed posuere consectetur est at lobortis.</li>
                                <li>Vestibulum id ligula porta felis euismod semper.</li>
                                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section feature-products">
            <div class="container">
                <div class="title text-center m-bottom-2">
                    <div class="page-title color">
                        <h3 class="title-main">Recent</h3>
                        <div class="title title-icon">
                            <h2 class="title-h2">Viewed Products</h2>
                        </div>
                    </div>
                </div>

                <div class="product-tab">
                    <div class="tab-content m-top">
                        <div class="tab-pane active">
                            <div class="product">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <div class="item item-hover-view-cart">
                                            <div class="product-thumb">
                                                <div class="product-container item-img">
                                                    <div class="product-image-container">
                                                        <a class="product-img-link" href="product-detail.html"
                                                            title="">
                                                            <img class="img-fluid" src="{{asset('frontend/img/products/product-1.jpg')}}"
                                                                alt="img">
                                                            <img class="img-fluid img-hover"
                                                                src="{{asset('frontend/img/products/product-2.jpg')}}" alt="img">
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

                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <div class="item item-hover-view-cart">
                                            <div class="product-thumb">
                                                <div class="product-container item-img">
                                                    <div class="product-image-container">
                                                        <a class="product-img-link" href="product-detail.html"
                                                            title="">
                                                            <img class="img-fluid" src="{{asset('frontend/img/products/product-14.jpg')}}"
                                                                alt="img">
                                                            <img class="img-fluid img-hover"
                                                                src="{{asset('frontend/img/products/product-13.jpg')}}" alt="img">
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

                                    <div class="col-lg-3 col-md-6 col-sm-12">
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

                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <div class="item item-hover-view-cart">
                                            <div class="product-thumb">
                                                <div class="product-container item-img">
                                                    <div class="product-image-container">
                                                        <a class="product-img-link" href="product-detail.html"
                                                            title="">
                                                            <img class="img-fluid" src="{{asset('frontend/img/products/product-5.jpg')}}"
                                                                alt="img">
                                                            <img class="img-fluid img-hover"
                                                                src="{{asset('frontend/img/products/product-6.jpg')}}" alt="img">
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
