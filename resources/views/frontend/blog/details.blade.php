@extends('frontend.layouts.main')
@section('content')
    <main>
        <div class="page-title-breadcrumbs">
            <div class="breadcrumbs-container container">
                <div class="breadcrumbs_wrapper">
                    <div class="page-title-container">
                        <h1 class="text-center">Avocado Seeds- Superfoods For Your Health</h1>
                    </div>

                    <div class="breadcrumbs-container text-center">
                        <ul class="breadcrumbs primary-font">
                            <li>
                                <a href="#">
                                    <span>Home</span>
                                </a>
                            </li>
                            <li class="breadcrumb-sep">/</li>
                            <li>
                                <span>Blog</span>
                            </li>
                            <li class="breadcrumb-sep">/</li>
                            <li>
                                <span>Avocado Seeds- Superfoods For Your Health</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="blog-news">
            <div class="container">
                <div class="row block-content m-top">
                    <div class="col-md-9 col-sm-12 wrap-main m-b-30">
                        <div class="m-bottom-2 product-container">
                            <div class="left-block item-img">
                                <div class="product-image-container ">
                                    <a class="product-img-link" href="blog-detail.html" title="">
                                        <img src="{{asset('frontend/img/blog/blog-detail.jpg')}}" alt="img" class="w-100 image-effect">
                                    </a>
                                </div>
                            </div>

                            <div class="right-block">
                                <div class="product-box text-left">
                                    <div class="meta-cat">
                                        <span>
                                            <a href="blog-category-grid-sidebar.html">Smoothie</a>
                                        </span>
                                        <span>
                                            <a href="blog-category-grid-sidebar.html">Vegetables</a>
                                        </span>
                                    </div>
                                    <ul class="article-info">
                                        <li>
                                            <i class="fa fa-calendar-o" aria-hidden="true"></i>
                                            <a href="#">July 24, 2018</a>
                                        </li>
                                        <li>
                                            <i class="fa fa-user-o" aria-hidden="true"></i>
                                            <a href="#">Andrew Noah</a>
                                        </li>
                                        <li>
                                            <i class="fa fa-comment-o" aria-hidden="true"></i>
                                            <a href="#">2 Comments</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="articledescript-group">
                            <div class="article-description">
                                <p>
                                    <strong class="font-italic">Praesent commodo cursus magna, vel scelerisque nisl
                                        consectetur et. Cras mattis consectetur
                                        purus sit amet fermentum. Vestibulum id ligula porta felis euismod semper.
                                    </strong>
                                </p>
                                <p>Maecenas faucibus mollis interdum. Nullam quis risus eget urna mollis ornare vel eu leo.
                                    Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
                                </p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet,
                                    consectetur adipiscing elit. Praesent commodo cursus magna, vel scelerisque nisl
                                    consectetur et. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum
                                    nibh, ut fermentum massa justo sit amet risus. Integer posuere erat a ante venenatis
                                    dapibus posuere velit aliquet. Cras justo odio, dapibus ac facilisis in, egestas
                                    eget quam. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
                                <p>
                                    <img src="{{asset('frontend/img/blog/blog-detail-content.jpg')}}" alt="">
                                </p>
                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cras mattis
                                    consectetur
                                    purus sit amet fermentum. Vestibulum id ligula porta felis euismod semper.&nbsp;
                                </p>
                                <p>Maecenas faucibus mollis interdum. Nullam quis risus eget urna mollis ornare vel eu leo.
                                    Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
                                </p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet,
                                    consectetur adipiscing elit. Praesent commodo cursus magna, vel scelerisque nisl
                                    consectetur et. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum
                                    nibh, ut fermentum massa justo sit amet risus. Integer posuere erat a ante venenatis
                                    dapibus posuere velit aliquet. Cras justo odio, dapibus ac facilisis in, egestas
                                    eget quam. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cras mattis
                                    consectetur
                                    purus sit amet fermentum. Vestibulum id ligula porta felis euismod semper.</p>
                                <p>Maecenas faucibus mollis interdum. Nullam quis risus eget urna mollis ornare vel eu leo.
                                    Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
                                </p>
                                <p>
                                    <span class="green font-italic">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit. Praesent commodo cursus magna, vel scelerisque nisl
                                        consectetur et. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum
                                        nibh, ut fermentum massa justo sit amet risus. Integer posuere erat.
                                    </span>
                                </p>
                                <p>
                                    Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cras mattis
                                    consectetur purus sit amet fermentum. Vestibulum
                                    id ligula porta felis euismod semper.&nbsp;
                                </p>
                                <p>Maecenas faucibus mollis interdum. Nullam quis risus eget urna mollis ornare vel eu leo.
                                    Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
                                </p>
                            </div>
                        </div>

                        <div class="like-share d-flex justify-content-between align-items-center">
                            <div class="tags-area">
                                <span>Tags: </span>
                                <a href="#" title="Show articles tagged Oars">Oars</a>,
                                <a href="#" title="Show articles tagged Organic">Organic</a>,
                                <a href="#" title="Show articles tagged Fresh">Fresh</a>
                            </div>

                            <div class="social">
                                <div class="post-share">
                                    <ul class="social-icon social-icon-circle">
                                        <li class="facebook">
                                            <a class="hover-circle" href="#">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="twitter">
                                            <a class="hover-circle" href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="google">
                                            <a class="hover-circle" href="#">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                        </li>
                                        <li class="linkedin">
                                            <a class="hover-circle" href="#">
                                                <i class="fa fa-linkedin"></i>
                                            </a>
                                        </li>
                                        <li class="tumblr">
                                            <a class="hover-circle" href="#">
                                                <i class="fa fa-tumblr"></i>
                                            </a>
                                        </li>
                                        <li class="pinterest">
                                            <a class="hover-circle" href="#">
                                                <i class="fa fa-pinterest"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <nav class="post-navigation section">
                            <div class="post-prev">
                                <span>
                                    <a class="post-link" href="#" title="Preview Post">
                                        <i class="fa fa-angle-left" aria-hidden="true"></i>Preview Post</a>
                                </span>
                                <h3 class="post-title d-none d-md-block">Using a food processor to pulse ingredientsv</h3>
                            </div>

                            <div class="post-next">
                                <span>
                                    <a class="post-link" href="#" title="Next Post">Next Post
                                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                                    </a>
                                </span>
                                <h3 class="post-title d-none d-md-block">Using a food processor to pulse ingredientsv</h3>
                            </div>
                        </nav>

                        <div class="blog-news">
                            <div class="title text-center">
                                <div class="page-title color">
                                    <div class="title title-icon">
                                        <h5 class="text-left title-h5">You May Also Like</h5>
                                    </div>
                                </div>
                            </div>

                            <div class="block-content">
                                <div class="row">
                                    <div class="col-md-4 col-sm-12">
                                        <div class="product-container">
                                            <div class="left-block item-img">
                                                <div class="product-image-container ">
                                                    <a class="product-img-link" href="blog-detail.html" title="">
                                                        <img src="{{asset('frontend/img/blog/blog1.png')}}" alt="img"
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
                                                        <a href="blog-detail.html" class="title-black">Broad bean and
                                                            goats’ cheese</a>
                                                    </h4>
                                                    <ul class="article-info">
                                                        <li>
                                                            <a href="#">July 24, 2017</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">0 Comments</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 col-sm-12">
                                        <div class="product-container">
                                            <div class="left-block item-img">
                                                <div class="product-image-container">
                                                    <a class="product-img-link" href="blog-detail.html" title="">
                                                        <img src="{{asset('frontend/img/blog/blog2.png')}}" alt="img"
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
                                                        <a href="blog-detail.html" class="title-black">Tomato: Nature’s
                                                            Sweet Summer</a>
                                                    </h4>
                                                    <ul class="article-info">
                                                        <li>
                                                            <a href="#">July 24, 2017</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">0 Comments</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 col-sm-12">
                                        <div class="product-container">
                                            <div class="left-block item-img">
                                                <div class="product-image-container">
                                                    <a class="product-img-link" href="blog-detail.html" title="">
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
                                                        <a href="blog-detail.html" class="title-black">Tomato: Nature’s
                                                            Sweet Summer</a>
                                                    </h4>
                                                    <ul class="article-info">
                                                        <li>
                                                            <a href="#">July 24, 2017</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">0 Comments</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-12 m-b-50">
                        <div class="sidebar sidebar-collection">
                            <!-- Categories -->
                            <div class="sidebar-block">
                                <div class="sub-title">
                                    <h4>Categories</h4>
                                </div>

                                <div class="block-content">
                                    <div class="cateTitle has-sub-category open level1">
                                        <span class="arrow collapse-icons collapsed" data-toggle="collapse"
                                            data-target="#livingroom" aria-expanded="false" role="status">
                                            <i class="fa fa-angle-down"></i>
                                            <i class="fa fa-angle-right"></i>
                                        </span>
                                        <a class="cateItem" href="#">Vegetables</a>
                                        <div class="subCategory collapse" id="livingroom" aria-expanded="true"
                                            role="status">
                                            <div class="cateTitle">
                                                <a href="#" class="cateItem">Purple Cabbage</a>
                                            </div>
                                            <div class="cateTitle">
                                                <a href="#" class="cateItem">Organic Mushroom</a>
                                            </div>
                                            <div class="cateTitle">
                                                <a href="#" class="cateItem">Fresh Tomatoes</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="cateTitle has-sub-category open level1">
                                        <span class="arrow collapsed collapse-icons" data-toggle="collapse"
                                            data-target="#bathroom" aria-expanded="false" role="status">
                                            <i class="fa fa-angle-down"></i>
                                            <i class="fa fa-angle-right"></i>
                                        </span>
                                        <a class="cateItem" href="#">Juice</a>
                                        <div class="subCategory collapse" id="bathroom" aria-expanded="false"
                                            role="status">
                                            <div class="cateTitle">
                                                <a href="#" class="cateItem">Green Detox Drink</a>
                                            </div>
                                            <div class="cateTitle">
                                                <a href="#" class="cateItem">Simple Kiwi Juice</a>
                                            </div>
                                            <div class="cateTitle">
                                                <a href="#" class="cateItem">Cucumber Juice</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="cateTitle has-sub-category open level1">
                                        <span class="arrow collapsed collapse-icons" data-toggle="collapse"
                                            data-target="#diningroom" aria-expanded="false" role="status">
                                            <i class="fa fa-angle-down"></i>
                                            <i class="fa fa-angle-right"></i>
                                        </span>
                                        <a class="cateItem" href="#">Meat</a>
                                        <div class="subCategory collapse" id="diningroom" aria-expanded="true"
                                            role="status">
                                            <div class="cateTitle">
                                                <a href="#" class="cateItem">Osso Buco</a>
                                            </div>
                                            <div class="cateTitle">
                                                <a href="#" class="cateItem">Organic Beef Sausages</a>
                                            </div>
                                            <div class="cateTitle">
                                                <a href="#" class="cateItem">Raw Chicken</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="cateTitle has-sub-category open level1">
                                        <span class="arrow collapsed collapse-icons" data-toggle="collapse"
                                            data-target="#bedroom" aria-expanded="false" role="status">
                                            <i class="fa fa-angle-down"></i>
                                            <i class="fa fa-angle-right"></i>
                                        </span>
                                        <a class="cateItem" href="#">Smoothie</a>
                                        <div class="subCategory collapse" id="bedroom" aria-expanded="true"
                                            role="status">
                                            <div class="cateTitle">
                                                <a href="#" class="cateItem">Orange Juices</a>
                                            </div>
                                            <div class="cateTitle">
                                                <a href="#" class="cateItem">Tomato Juices</a>
                                            </div>
                                            <div class="cateTitle">
                                                <a href="#" class="cateItem">Apple Juices</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="cateTitle has-sub-category open level1">
                                        <span class="arrow collapsed collapse-icons" data-toggle="collapse"
                                            data-target="#kitchen" aria-expanded="false" role="status">
                                            <i class="fa fa-angle-down"></i>
                                            <i class="fa fa-angle-right"></i>
                                        </span>
                                        <a class="cateItem" href="#">Teas</a>
                                        <div class="subCategory collapse" id="kitchen" aria-expanded="true"
                                            role="status">
                                            <div class="cateTitle">
                                                <a href="#" class="cateItem">Orange Juices</a>
                                            </div>
                                            <div class="cateTitle">
                                                <a href="#" class="cateItem">Tomato Juices</a>
                                            </div>
                                            <div class="cateTitle">
                                                <a href="#" class="cateItem">Apple Juices</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Latest Posts -->
                            <div class="sidebar-block blogs-recent">
                                <div class="sub-title">
                                    <h4>Latest Posts</h4>
                                </div>

                                <div class="recent-article">
                                    <div class="ra-item-inner">
                                        <div class="article-item clearfix d-flex">
                                            <div class="article-image">
                                                <a href="blog-detail.html">
                                                    <img class="img-fluid" src="{{asset('frontend/img/blog/blog8.png')}}" alt="">
                                                </a>
                                            </div>

                                            <div class="articleinfo-group">
                                                <div class="blog-title-group">
                                                    <a class="blog-title" href="blog-category-grid-sidebar.html">
                                                        Lifestyle
                                                    </a>
                                                </div>

                                                <div class="article-title">
                                                    <h2 class="article-name">
                                                        <a href="blog-detail.html">The world’s oldest skyscrapers?
                                                        </a>
                                                    </h2>
                                                </div>

                                                <ul class="article-info list-inline">
                                                    <li class="article-date">Apr 18, 2018</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="article-item clearfix d-flex">
                                            <div class="article-image">
                                                <a href="blog-detail.html">
                                                    <img class="img-fluid" src="{{asset('frontend/img/blog/blog3.png')}}" alt="">
                                                </a>
                                            </div>

                                            <div class="articleinfo-group">
                                                <div class="blog-title-group">
                                                    <a class="blog-title" href="blog-category-grid-sidebar.html">
                                                        Photography
                                                    </a>
                                                </div>

                                                <div class="article-title">
                                                    <h2 class="article-name">
                                                        <a href="blog-detail.html">Will outdoor offices take off?</a>
                                                    </h2>
                                                </div>

                                                <ul class="article-info list-inline">
                                                    <li class="article-date">Apr 18, 2018</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="article-item clearfix d-flex">
                                            <div class="article-image">
                                                <a href="blog-detail.html">
                                                    <img class="img-fluid" src="{{asset('frontend/img/blog/blog5.png')}}" alt="">
                                                </a>
                                            </div>

                                            <div class="articleinfo-group">
                                                <div class="blog-title-group">
                                                    <a class="blog-title" href="blog-category-grid-sidebar.html">
                                                        Lifestyle
                                                    </a>
                                                </div>

                                                <div class="article-title">
                                                    <h2 class="article-name">
                                                        <a href="blog-detail.html">The weird sheep that baffled
                                                            scientists</a>
                                                    </h2>
                                                </div>

                                                <ul class="article-info list-inline">
                                                    <li class="article-date">Apr 18, 2018</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="article-item clearfix d-flex">
                                            <div class="article-image">
                                                <a href="blog-detail.html">
                                                    <img class="img-fluid" src="{{asset('frontend/img/blog/blog9.png')}}" alt="">
                                                </a>
                                            </div>

                                            <div class="articleinfo-group">
                                                <div class="blog-title-group">
                                                    <a class="blog-title" href="blog-category-grid-sidebar.html">
                                                        Lifestyle
                                                    </a>
                                                </div>

                                                <div class="article-title">
                                                    <h2 class="article-name">
                                                        <a href="blog-detail.html">How army rations helped change food</a>
                                                    </h2>
                                                </div>

                                                <ul class="article-info list-inline">
                                                    <li class="article-date">Apr 18, 2018</li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <!-- Latest Tweets -->
                            <div class="widget-twitter">
                                <div class="sub-title">
                                    <h4>Latest Tweets</h4>
                                </div>

                                <div class="widget-twitter-wrapper">
                                    <div class="widget-twitter-item">
                                        <div class="twitter-content">
                                            Did you know an
                                            <a href="#">@envatoelements </a> subscription now gets you access to
                                            1000+
                                            <a href="#">@tutsplus</a> courses? Learn more at
                                            <a href="#">@envatoelements</a>
                                        </div>
                                        <div class="twitter-meta">
                                            <i class="fa fa-twitter"></i>
                                            <div class="twitter-date">
                                                <span>Tweeted on </span>2:21 AM Jul 26
                                            </div>
                                        </div>
                                    </div>

                                    <div class="widget-twitter-item">
                                        <div class="twitter-content">
                                            Did you know an
                                            <a href="#">@envatoelements </a> subscription now gets you access to
                                            1000+
                                            <a href="#">@tutsplus</a> courses? Learn more at
                                            <a href="#">@envatoelements</a>
                                        </div>
                                        <div class="twitter-meta">
                                            <i class="fa fa-twitter"></i>
                                            <div class="twitter-date">
                                                <span>Tweeted on </span>2:21 AM Jul 26
                                            </div>
                                        </div>
                                    </div>

                                    <div class="widget-twitter-item">
                                        <div class="twitter-content">
                                            Did you know an
                                            <a href="#">@envatoelements </a> subscription now gets you access to
                                            1000+
                                            <a href="#">@tutsplus</a> courses? Learn more at
                                            <a href="#">@envatoelements</a>
                                        </div>
                                        <div class="twitter-meta">
                                            <i class="fa fa-twitter"></i>
                                            <div class="twitter-date">
                                                <span>Tweeted on </span>10:00 AM Jun 21
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="comment pd-top-bottom">
                <div class="container">
                    <div class="title d-flex justify-content-between align-items-end">
                        <h5 class="title-h5">Comments (3)</h5>
                        <button class="add-to-cart" type="submit">
                            <span class="btn view button-main">Leave a comment</span>
                        </button>
                    </div>

                    <div id="review" class="tab-pane fade active show">
                        <div class="spr-form d-block">
                            <div class="user-comment">
                                <div class="user-comment-item d-flex">
                                    <div>
                                        <img src="{{asset('frontend/img/user1.png')}}" alt="">
                                    </div>
                                    <div class="spr-review">
                                        <div class="spr-review-header d-flex justify-content-between">
                                            <span class="spr-review-header-byline">
                                                <strong>Peter Capidal</strong>
                                                <span>Apr 14, 2018</span>
                                            </span>
                                        </div>
                                        <div class="spr-review-content w-100">
                                            <p class="spr-review-content-body">Morbi leo risus, porta ac consectetur ac,
                                                vestibulum at eros. Nulla vitae
                                                elit libero, a pharetra augue. Cras justo odio, dapibus ac . Donec sed
                                                odio dui. Donec sed odio dui.
                                            </p>
                                            <a class="reply-comment font-italic color-default" href="#">Reply
                                                Comment</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="user-comment-item d-flex">
                                    <div>
                                        <img src="{{asset('frontend/img/user2.png')}}" alt="">
                                    </div>
                                    <div class="spr-review preview2">
                                        <div class="spr-review-header d-flex justify-content-between">
                                            <span class="spr-review-header-byline">
                                                <strong>David James</strong>
                                                <span>Apr 13, 2018</span>
                                            </span>
                                        </div>
                                        <div class="spr-review-content">
                                            <p class="spr-review-content-body">Morbi leo risus, porta ac consectetur ac,
                                                vestibulum at eros. Nulla vitae
                                                elit libero, a pharetra augue. Cras justo odio, dapibus ac . Donec sed
                                                odio dui. Donec sed odio dui.
                                            </p>
                                            <a class="reply-comment font-italic color-default" href="#">Reply
                                                Comment</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="user-comment-item d-flex">
                                    <div>
                                        <img src="{{asset('frontend/img/user3.png')}}" alt="">
                                    </div>
                                    <div class="spr-review">
                                        <div class="spr-review-header d-flex justify-content-between">
                                            <span class="spr-review-header-byline">
                                                <strong>Peter Capidal</strong>
                                                <span>Apr 14, 2018</span>
                                            </span>
                                        </div>
                                        <div class="spr-review-content w-100">
                                            <p class="spr-review-content-body">Morbi leo risus, porta ac consectetur ac,
                                                vestibulum at eros. Nulla vitae
                                                elit libero, a pharetra augue. Cras justo odio, dapibus ac . Donec sed
                                                odio dui. Donec sed odio dui.
                                            </p>
                                            <a class="reply-comment font-italic color-default" href="#">Reply
                                                Comment</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <form method="post" action="index.html" class="new-review-form">
                            <input type="hidden" name="review[rating]" value="3">
                            <input type="hidden" name="product_id">
                            <h3 class="spr-form-title title-black">Post A Comment</h3>
                            <p class="m-bottom-30">Nullam quis risus eget urna mollis ornare vel eu leo.</p>

                            <fieldset class="spr-form-contact">
                                <div class="row">
                                    <div class="col-md-4 col-sm-12 spr-form-contact-name">
                                        <input class="spr-form-input spr-form-input-text form-control" value=""
                                            placeholder="Họ tên *">
                                    </div>
                                    <div class="col-md-4 col-sm-12 spr-form-contact-email">
                                        <input class="spr-form-input spr-form-input-email form-control" value=""
                                            placeholder="Email *">
                                    </div>
                                    <div class="col-md-4 col-sm-12 spr-form-contact-website">
                                        <input class="spr-form-input spr-form-input-website form-control" value=""
                                            placeholder="Website *">
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <div class="spr-form-review-body">
                                    <div class="spr-form-input">
                                        <textarea class="spr-form-input-textarea" rows="10" placeholder="Nhập nội dung..."></textarea>
                                    </div>
                                </div>
                            </fieldset>

                            <div class="submit">
                                <button class="add-to-cart" type="submit">
                                    <span class="btn view button-main">Gửi</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
