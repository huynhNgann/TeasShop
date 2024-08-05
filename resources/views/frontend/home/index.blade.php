@extends('frontend.layouts.main')
@section('content')
        <main>
            <section>
                <div class="section tiva-slideshow-wrapper nav-number m-bottom-0">
                    <div id="tiva-slideshow" class="nivoSlider">
                        <a href="#" title="Slideshow image">
                            <img class="img-fluid" src="{{asset('frontend/img/slideshow/home2-slider1.jpg')}}" title="#caption1" alt="Slideshow image">
                        </a>
                        <a href="#" title="Slideshow image">
                            <img class="img-fluid" src="{{asset('frontend/img/slideshow/home2-slider2.jpg')}}" title="#caption2" alt="Slideshow image">
                        </a>
                        <a href="#" title="Slideshow image">
                            <img class="img-fluid" src="{{asset('frontend/img/slideshow/home2-slider1.jpg')}}" title="#caption1" alt="Slideshow image">
                        </a>
                        <a href="#" title="Slideshow image">
                            <img class="img-fluid" src="{{asset('frontend/img/slideshow/home2-slider2.jpg')}}" title="#caption2" alt="Slideshow image">
                        </a>
                    </div>

                    <div id="caption1" class="nivo-html-caption hidden-sm hidden-xs">
                        <div class="tiva-caption m-left text-center">
                            <div class="left-right hidden-xs">
                                <img src="{{asset('frontend/img/slideshow/home2-slide-img.png')}}" alt="img">
                            </div>
                            <div class="right-left hidden-xs normal text-center w-500">
                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur. Cras mattis consectetur
                                    purus sit fermentum.</p>
                            </div>
                            <div class="Praesent">
                            </div>
                            <div class="right-left hidden-xs slow disciver-now">
                                <a class="btn button btn-green button-main" href="blog-list-right-sidebar.html" title="Shop now">learn more</a>
                            </div>
                            <div class="right-left hidden-xs slow disciver-now">
                                <a class="btn button button-main" href="blog-list-right-sidebar.html" title="Shop now">purchase now</a>
                            </div>
                        </div>
                    </div>

                    <div id="caption2" class="nivo-html-caption hidden-sm hidden-xs">
                        <div class="tiva-caption m-right text-center">
                            <div class="left-right hidden-xs">
                                <img src="{{asset('frontend/img/slideshow/home2-slide-img.png')}}" alt="img">
                            </div>
                            <div class="roll hidden-xs normal text-center w-500">
                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur. Cras mattis consectetur
                                    purus sit fermentum.</p>
                            </div>
                            <div class="right-left hidden-xs slow disciver-now">
                                <a class="btn button btn-green button-main" href="blog-list-right-sidebar.html" title="Shop now">learn more</a>
                            </div>
                            <div class="right-left hidden-xs slow disciver-now">
                                <a class="btn button button-main" href="blog-list-right-sidebar.html" title="Shop now">purchase now</a>
                            </div>

                        </div>
                    </div>

                    <div id="caption3" class="nivo-html-caption hidden-sm hidden-xs">
                        <div class="tiva-caption m-left">
                            <div class="left-right hidden-xs">
                                <img src="{{asset('frontend/img/slideshow/home2-slide-img.png')}}" alt="img">
                            </div>
                            <div class="right-left hidden-xs normal text-center w-500">
                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur. Cras mattis consectetur
                                    purus sit fermentum.</p>
                            </div>
                            <div class="Praesent">
                            </div>
                            <div class="right-left hidden-xs slow disciver-now">
                                <a class="btn button btn-green button-main" href="blog-list-right-sidebar.html" title="Shop now">learn more</a>
                            </div>
                            <div class="right-left hidden-xs slow disciver-now">
                                <a class="btn button button-main" href="blog-list-right-sidebar.html" title="Shop now">purchase now</a>
                            </div>
                        </div>
                    </div>

                    <div id="caption4" class="nivo-html-caption hidden-sm hidden-xs">
                        <div class="tiva-caption m-right">
                            <div class="left-right hidden-xs">
                                <img src="{{asset('frontend/img/slideshow/home2-slide-img.png')}}" alt="img">
                            </div>
                            <div class="roll hidden-xs normal text-center w-500">
                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur. Cras mattis consectetur
                                    purus sit fermentum.</p>
                            </div>
                            <div class="right-left hidden-xs slow disciver-now">
                                <a class="btn button btn-green button-main" href="blog-list-right-sidebar.html" title="Shop now">learn more</a>
                            </div>
                            <div class="right-left hidden-xs slow disciver-now">
                                <a class="btn button button-main" href="blog-list-right-sidebar.html" title="Shop now">purchase now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="about-smoothie">
                <div class="section about">
                    <div class="container">
                        <div class="title text-center">
                            <div class="page-title color">
                                <h3 class="title-main">About Us</h3>
                                <div class="title title-icon">
                                    <h2 class="title-h2">Who we are</h2>
                                    <p class="description">Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel
                                        scelerisque nisl consectetur et.</p>
                                </div>
                            </div>
                        </div>
						
                        <div class="content-about text-center m-top">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-sm-12 mg-bottom-50">
                                    <div class="item">
                                        <div class="item-img">
                                            <a href="#" title="">
                                                <img class="img-fluid" src="{{asset('frontend/img/intro-orange-icon1.png')}}" alt="img">
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
                                                <img class="img-fluid" src="{{asset('frontend/img/intro-orange-icon2.png')}}" alt="img">
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
                                                <img class="img-fluid" src="{{asset('frontend/img/intro-orange-icon3.png')}}" alt="img">
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
                                                <img class="img-fluid" src="{{asset('frontend/img/intro-orange-icon4.png')}}" alt="img">
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

				<div class="deal-layout">
					<div class="container">
						<div class="inner">
							<div class="row">
								<div class="col-md-6 col-sm-12 m-b-30">
									<div class="title item-content clearfix">
										<div class="page-title color pd-top-0 text-left">
											<h3 class="title-main">Fresh Smoothie</h3>
											<div class="title-icon text-left">
												<h2 class="title-h2 background-position-left">100% Made With Fruits</h2>
												<p class="description">Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cras
													mattis consectetur purus sit amet fermentum. Lorem ipsum dolor sit
													amet, consectetur adipiscing elit. Donec ullamcorper nulla non metus
													auctor fringilla. Nullam quis risus eget urna mollis ornare vel eu
													leo.
												</p>
											</div>
											<span>
												<a href="#" class="btn view button-main m-b-30">Shop Now</a>
											</span>
										</div>
									</div>
								</div>
								
								<div class="col-md-6 col-sm-12">
									<div class="manufacturers-block">
										<div class="block-content">
											<img src="{{asset('frontend/img/home2-banner1.jpg')}}" alt="img" class="img-fluid">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
                </div>
            </section>

            <section>
                <div class="section smoothie pd-top-bottom-60">
                    <div class="container">
                        <div class="row text-center">
                            <div class="title">
                                <div class="page-title color">
                                    <h3 class="title-main">Fresh Smoothie</h3>
                                    <div class="title title-icon">
                                        <h2 class="title-h2">Recipe Detox Smoothie</h2>
                                        <p class="description">Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna,
                                            vel scelerisque nisl consectetur et.</p>
                                    </div>
                                </div>
                            </div>
							
                            <div class="home-smoothie-inner">
                                <div class="home-smoothie-content d-flex justify-content-around align-items-center">
                                    <div class="smoothie-icon icon-left">
                                        <div class="icon-item smoothie-icon-1 zoomIn animated d-flex align-items-center" data-animate="zoomIn" data-delay="100">
                                            <div class="icon-item-group text-right">
                                                <h5 class="item-title title-black">Cucumber</h5>
                                                <p class="item-caption">Maecenas faucibus mollis interdum. Aenean eu leo.</p>
                                            </div>
                                            <div class="icon-item-img">
                                                <img src="{{asset('frontend/img/home2-intro-icon1.png')}}" alt="img">
                                            </div>
                                        </div>
										
                                        <div class="icon-item smoothie-icon-2 zoomIn animated d-flex align-items-center" data-animate="zoomIn" data-delay="200">
                                            <div class="icon-item-group text-right">
                                                <h5 class="item-title title-black">Apple</h5>
                                                <p class="item-caption">Maecenas faucibus mollis interdum. Aenean eu leo.</p>
                                            </div>
                                            <div class="icon-item-img">
                                                <img src="{{asset('frontend/img/home2-intro-icon2.png')}}" alt="img">
                                            </div>
                                        </div>
                                    </div>
									
                                    <div class="smoothie-banner d-none d-lg-block">
                                        <div class="smoothie-banner-group">
                                            <img class="banner-image" src="{{asset('frontend/img/home2-intro.png')}}" alt="img">
                                        </div>
                                    </div>
									
                                    <div class="smoothie-icon icon-right">
                                        <div class="icon-item smoothie-icon-1 zoomIn animated d-flex justify-content-around align-items-center" data-animate="zoomIn" data-delay="100">
                                            <div class="icon-item-img">
                                                <img src="{{asset('frontend/img/home2-intro-icon3.png')}}" alt="img">
                                            </div>
                                            <div class="icon-item-group text-left">
                                                <h5 class="item-title title-black">Lemon</h5>
                                                <p class="item-caption">Maecenas faucibus mollis interdum. Aenean eu leo.</p>
                                            </div>
                                        </div>
										
                                        <div class="icon-item smoothie-icon-2 zoomIn animated d-flex justify-content-around align-items-center" data-animate="zoomIn" data-delay="200">
                                            <div class="icon-item-img">
                                                <img src="{{asset('frontend/img/home2-intro-icon4.png')}}" alt="img">
                                            </div>
                                            <div class="icon-item-group text-left">
                                                <h5 class="item-title title-black">Fresh Spinach</h5>
                                                <p class="item-caption">Maecenas faucibus mollis interdum. Aenean eu leo.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <span class="text-center">
                                    <a href="#" class="btn view button-main">view all recipe</a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="section feature-products">
                    <div class="container">
                        <div class="title text-center m-bottom-2">
                            <div class="page-title color">
                                <h3 class="title-main">Fresh Food</h3>
                                <div class="title title-icon">
                                    <h2 class="title-h2">Feature Products</h2>
                                </div>
                            </div>
                        </div>

                        <div class="product-tab">
                            <div class="flex-t-center">
                                <ul class="nav nav-pills text-center justify-content-center" role="tablist">
                                    <li class="nav-item">
                                        <a class="name-tab nav-link active show" data-toggle="pill" href="#all">All</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="name-tab nav-link" data-toggle="pill" href="#smoothie">Smoothie</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="name-tab nav-link" data-toggle="pill" href="#juices">Juices</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="name-tab nav-link" data-toggle="pill" href="#vegetables">Vegetables</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="name-tab nav-link" data-toggle="pill" href="#tea">Tea</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="tab-content m-top">
                                <!-- All -->
                                <div id="all" class="tab-pane active">
                                    <div class="product">
                                        <div class="row">
                                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                                <div class="item item-hover-view-cart">
                                                    <div class="product-thumb">
                                                        <div class="product-container item-img">
                                                            <div class="product-image-container">
                                                                <a class="product-img-link" href="product-detail.html" title="">
                                                                    <img class="img-fluid" src="{{asset('frontend/img/products/product-1.jpg')}}" alt="img">
                                                                    <img class="img-fluid img-hover" src="{{asset('frontend/img/products/product-2.jpg')}}" alt="img">
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
                                                                <a class="product-img-link" href="product-detail.html" title="">
                                                                    <img class="img-fluid" src="{{asset('frontend/img/products/product-14.jpg')}}" alt="img">
                                                                    <img class="img-fluid img-hover" src="{{asset('frontend/img/products/product-13.jpg')}}" alt="img">
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
                                                                <a class="product-img-link" href="product-detail.html" title="">
                                                                    <img class="img-fluid" src="{{asset('frontend/img/products/product-4.jpg')}}" alt="img">
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
                                                                <a class="product-img-link" href="product-detail.html" title="">
                                                                    <img class="img-fluid" src="{{asset('frontend/img/products/product-5.jpg')}}" alt="img">
                                                                    <img class="img-fluid img-hover" src="{{asset('frontend/img/products/product-6.jpg')}}" alt="img">
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
                                                <div class="item item-hover-view-cart m-bottom-0">
                                                    <div class="product-thumb">
                                                        <div class="product-container item-img">
                                                            <div class="product-image-container">
                                                                <a class="product-img-link" href="product-detail.html" title="">
                                                                    <img class="img-fluid" src="{{asset('frontend/img/products/product-7.jpg')}}" alt="img">
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
                                                <div class="item item-hover-view-cart m-bottom-0">
                                                    <div class="product-thumb">
                                                        <div class="product-container item-img">
                                                            <div class="product-image-container">
                                                                <a class="product-img-link" href="product-detail.html" title="">
                                                                    <img class="img-fluid" src="{{asset('frontend/img/products/product-8.jpg')}}" alt="img">
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
                                                <div class="item item-hover-view-cart m-bottom-0">
                                                    <div class="product-thumb">
                                                        <div class="product-container item-img">
                                                            <div class="product-image-container">
                                                                <a class="product-img-link" href="product-detail.html" title="">
                                                                    <img class="img-fluid" src="{{asset('frontend/img/products/product-9.jpg')}}" alt="img">
                                                                    <img class="img-fluid img-hover" src="{{asset('frontend/img/products/product-10.jpg')}}" alt="img">
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
                                                <div class="item item-hover-view-cart m-bottom-0">
                                                    <div class="product-thumb">
                                                        <div class="product-container item-img">
                                                            <div class="product-image-container">
                                                                <a class="product-img-link" href="product-detail.html" title="">
                                                                    <img class="img-fluid" src="{{asset('frontend/img/products/product-11.jpg')}}" alt="img">
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
                                        </div>
                                    </div>
                                </div>

                                <!-- Smoothie -->
                                <div id="smoothie" class="tab-pane fade">
                                    <div class="product">
                                        <div class="row">
                                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                                <div class="item item-hover-view-cart">
                                                    <div class="product-thumb">
                                                        <div class="product-container item-img">
                                                            <div class="product-image-container">
                                                                <a class="product-img-link" href="product-detail.html" title="">
                                                                    <img class="img-fluid" src="{{asset('frontend/img/products/product-12.jpg')}}" alt="img">
                                                                    <img class="img-fluid img-hover" src="{{asset('frontend/img/products/product-13.jpg')}}" alt="img">
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
                                                                <a class="product-img-link" href="product-detail.html" title="">
                                                                    <img class="img-fluid" src="{{asset('frontend/img/products/product-14.jpg')}}" alt="img">
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
                                                            <a href="product-detail.html">Fresh Ly Son Garlic</a>
                                                        </h4>
                                                        <div class="price">
                                                            <span>$21.00</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                                <div class="item item-hover-view-cart">
                                                    <div class="product-thumb">
                                                        <div class="product-container item-img">
                                                            <div class="product-image-container">
                                                                <a class="product-img-link" href="product-detail.html" title="">
                                                                    <img class="img-fluid" src="{{asset('frontend/img/products/product-15.jpg')}}" alt="img">
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
                                                                <a class="product-img-link" href="product-detail.html" title="">
                                                                    <img class="img-fluid" src="{{asset('frontend/img/products/product-16.jpg')}}" alt="img">
                                                                    <img class="img-fluid img-hover" src="{{asset('frontend/img/products/product-17.jpg')}}" alt="img">
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
                                                <div class="item item-hover-view-cart m-bottom-0">
                                                    <div class="product-thumb">
                                                        <div class="product-container item-img">
                                                            <div class="product-image-container">
                                                                <a class="product-img-link" href="product-detail.html" title="">
                                                                    <img class="img-fluid" src="{{asset('frontend/img/products/product-18.jpg')}}" alt="img">
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
                                                <div class="item item-hover-view-cart m-bottom-0">
                                                    <div class="product-thumb">
                                                        <div class="product-container item-img">
                                                            <div class="product-image-container">
                                                                <a class="product-img-link" href="product-detail.html" title="">
                                                                    <img class="img-fluid" src="{{asset('frontend/img/products/product-19.jpg')}}" alt="img">
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
                                                <div class="item item-hover-view-cart m-bottom-0">
                                                    <div class="product-thumb">
                                                        <div class="product-container item-img">
                                                            <div class="product-image-container">
                                                                <a class="product-img-link" href="product-detail.html" title="">
                                                                    <img class="img-fluid" src="{{asset('frontend/img/products/product-20.jpg')}}" alt="img">
                                                                    <img class="img-fluid img-hover" src="{{asset('frontend/img/products/product-21.jpg')}}" alt="img">
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
                                                <div class="item item-hover-view-cart m-bottom-0">
                                                    <div class="product-thumb">
                                                        <div class="product-container item-img">
                                                            <div class="product-image-container">
                                                                <a class="product-img-link" href="product-detail.html" title="">
                                                                    <img class="img-fluid" src="{{asset('frontend/img/products/product-22.jpg')}}" alt="img">
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
                                        </div>
                                    </div>
                                </div>

                                <!-- Juices -->
                                <div id="juices" class="tab-pane fade">
                                    <div class="product">
                                        <div class="row">
                                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                                <div class="item item-hover-view-cart">
                                                    <div class="product-thumb">
                                                        <div class="product-container item-img">
                                                            <div class="product-image-container">
                                                                <a class="product-img-link" href="product-detail.html" title="">
                                                                    <img class="img-fluid" src="{{asset('frontend/img/products/product-17.jpg')}}" alt="img">
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
                                                                <a class="product-img-link" href="product-detail.html" title="">
                                                                    <img class="img-fluid" src="{{asset('frontend/img/products/product-18.jpg')}}" alt="img">
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
                                                            <a href="product-detail.html">Fresh Ly Son Garlic</a>
                                                        </h4>
                                                        <div class="price">
                                                            <span>$21.00</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                                <div class="item item-hover-view-cart">
                                                    <div class="product-thumb">
                                                        <div class="product-container item-img">
                                                            <div class="product-image-container">
                                                                <a class="product-img-link" href="product-detail.html" title="">
                                                                    <img class="img-fluid" src="{{asset('frontend/img/products/product-19.jpg')}}" alt="img">
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
                                                                <a class="product-img-link" href="product-detail.html" title="">
                                                                    <img class="img-fluid" src="{{asset('frontend/img/products/product-20.jpg')}}" alt="img">
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
                                                <div class="item item-hover-view-cart m-bottom-0">
                                                    <div class="product-thumb">
                                                        <div class="product-container item-img">
                                                            <div class="product-image-container">
                                                                <a class="product-img-link" href="product-detail.html" title="">
                                                                    <img class="img-fluid" src="{{asset('frontend/img/products/product-21.jpg')}}" alt="img">
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
                                                        <span class="product-flash sale">Sale</span>
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
                                                <div class="item item-hover-view-cart m-bottom-0">
                                                    <div class="product-thumb">
                                                        <div class="product-container item-img">
                                                            <div class="product-image-container">
                                                                <a class="product-img-link" href="product-detail.html" title="">
                                                                    <img class="img-fluid" src="{{asset('frontend/img/products/product-22.jpg')}}" alt="img">
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
                                                <div class="item item-hover-view-cart m-bottom-0">
                                                    <div class="product-thumb">
                                                        <div class="product-container item-img">
                                                            <div class="product-image-container">
                                                                <a class="product-img-link" href="product-detail.html" title="">
                                                                    <img class="img-fluid" src="{{asset('frontend/img/products/product-3.jpg')}}" alt="img">
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
                                                <div class="item item-hover-view-cart m-bottom-0">
                                                    <div class="product-thumb">
                                                        <div class="product-container item-img">
                                                            <div class="product-image-container">
                                                                <a class="product-img-link" href="product-detail.html" title="">
                                                                    <img class="img-fluid" src="{{asset('frontend/img/products/product-14.jpg')}}" alt="img">
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
                                        </div>
                                    </div>
                                </div>

                                <!-- Vegetables -->
                                <div id="vegetables" class="tab-pane fade">
                                    <div class="product">
                                        <div class="row">
                                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                                <div class="item item-hover-view-cart">
                                                    <div class="product-thumb">
                                                        <div class="product-container item-img">
                                                            <div class="product-image-container">
                                                                <a class="product-img-link" href="product-detail.html" title="">
                                                                    <img class="img-fluid" src="{{asset('frontend/img/products/product-6.jpg')}}" alt="img">
                                                                    <img class="img-fluid img-hover" src="{{asset('frontend/img/products/product-7.jpg')}}" alt="img">
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
                                                                <a class="product-img-link" href="product-detail.html" title="">
                                                                    <img class="img-fluid" src="{{asset('frontend/img/products/product-8.jpg')}}" alt="img">
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
                                                            <a href="product-detail.html">Fresh Ly Son Garlic</a>
                                                        </h4>
                                                        <div class="price">
                                                            <span>$21.00</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                                <div class="item item-hover-view-cart">
                                                    <div class="product-thumb">
                                                        <div class="product-container item-img">
                                                            <div class="product-image-container">
                                                                <a class="product-img-link" href="product-detail.html" title="">
                                                                    <img class="img-fluid" src="{{asset('frontend/img/products/product-9.jpg')}}" alt="img">
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
                                                                <a class="product-img-link" href="product-detail.html" title="">
                                                                    <img class="img-fluid" src="{{asset('frontend/img/products/product-10.jpg')}}" alt="img">
                                                                    <img class="img-fluid img-hover" src="{{asset('frontend/img/products/product-11.jpg')}}" alt="img">
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
                                                <div class="item item-hover-view-cart m-bottom-0">
                                                    <div class="product-thumb">
                                                        <div class="product-container item-img">
                                                            <div class="product-image-container">
                                                                <a class="product-img-link" href="product-detail.html" title="">
                                                                    <img class="img-fluid" src="{{asset('frontend/img/products/product-12.jpg')}}" alt="img">
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
                                                <div class="item item-hover-view-cart m-bottom-0">
                                                    <div class="product-thumb">
                                                        <div class="product-container item-img">
                                                            <div class="product-image-container">
                                                                <a class="product-img-link" href="product-detail.html" title="">
                                                                    <img class="img-fluid" src="{{asset('frontend/img/products/product-13.jpg')}}" alt="img">
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
                                                <div class="item item-hover-view-cart m-bottom-0">
                                                    <div class="product-thumb">
                                                        <div class="product-container item-img">
                                                            <div class="product-image-container">
                                                                <a class="product-img-link" href="product-detail.html" title="">
                                                                    <img class="img-fluid" src="{{asset('frontend/img/products/product-14.jpg')}}" alt="img">
                                                                    <img class="img-fluid img-hover" src="{{asset('frontend/img/products/product-15.jpg')}}" alt="img">
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
                                                <div class="item item-hover-view-cart m-bottom-0">
                                                    <div class="product-thumb">
                                                        <div class="product-container item-img">
                                                            <div class="product-image-container">
                                                                <a class="product-img-link" href="product-detail.html" title="">
                                                                    <img class="img-fluid" src="{{asset('frontend/img/products/product-16.jpg')}}" alt="img">
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
                                        </div>
                                    </div>
                                </div>

                                <!-- Tea -->
                                <div id="tea" class="tab-pane fade">
                                    <div class="product">
                                        <div class="row">
                                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                                <div class="item item-hover-view-cart">
                                                    <div class="product-thumb">
                                                        <div class="product-container item-img">
                                                            <div class="product-image-container">
                                                                <a class="product-img-link" href="product-detail.html" title="">
                                                                    <img class="img-fluid" src="{{asset('frontend/img/products/product-17.jpg')}}" alt="img">
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
                                                                <a class="product-img-link" href="product-detail.html" title="">
                                                                    <img class="img-fluid" src="{{asset('frontend/img/products/product-18.jpg')}}" alt="img">
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
                                                            <a href="product-detail.html">Fresh Ly Son Garlic</a>
                                                        </h4>
                                                        <div class="price">
                                                            <span>$21.00</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                                <div class="item item-hover-view-cart">
                                                    <div class="product-thumb">
                                                        <div class="product-container item-img">
                                                            <div class="product-image-container">
                                                                <a class="product-img-link" href="product-detail.html" title="">
                                                                    <img class="img-fluid" src="{{asset('frontend/img/products/product-19.jpg')}}" alt="img">
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
                                                                <a class="product-img-link" href="product-detail.html" title="">
                                                                    <img class="img-fluid" src="{{asset('frontend/img/products/product-20.jpg')}}" alt="img">
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
                                                <div class="item item-hover-view-cart m-bottom-0">
                                                    <div class="product-thumb">
                                                        <div class="product-container item-img">
                                                            <div class="product-image-container">
                                                                <a class="product-img-link" href="product-detail.html" title="">
                                                                    <img class="img-fluid" src="{{asset('frontend/img/products/product-21.jpg')}}" alt="img">
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
                                                        <span class="product-flash sale">Sale</span>
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
                                                <div class="item item-hover-view-cart m-bottom-0">
                                                    <div class="product-thumb">
                                                        <div class="product-container item-img">
                                                            <div class="product-image-container">
                                                                <a class="product-img-link" href="product-detail.html" title="">
                                                                    <img class="img-fluid" src="{{asset('frontend/img/products/product-22.jpg')}}" alt="img">
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
                                                <div class="item item-hover-view-cart m-bottom-0">
                                                    <div class="product-thumb">
                                                        <div class="product-container item-img">
                                                            <div class="product-image-container">
                                                                <a class="product-img-link" href="product-detail.html" title="">
                                                                    <img class="img-fluid" src="{{asset('frontend/img/products/product-3.jpg')}}" alt="img">
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
                                                <div class="item item-hover-view-cart m-bottom-0">
                                                    <div class="product-thumb">
                                                        <div class="product-container item-img">
                                                            <div class="product-image-container">
                                                                <a class="product-img-link" href="product-detail.html" title="">
                                                                    <img class="img-fluid" src="{{asset('frontend/img/products/product-14.jpg')}}" alt="img">
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
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="section our-history sm-text-center">
                    <div class="container">
                        <div class="inner">
                            <div class="w-100 d-flex flex-wrap">
                                <div class="layout-left">
                                    <div class="title item-content clearfix">
                                        <div class="page-title color text-left">
                                            <h3 class="title-main">Our History</h3>
                                            <div class="title-icon text-left">
                                                <h2 class="title-h2 background-position-left">What is Oars Smoothie</h2>
                                                <p class="description">Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cras
                                                    mattis consectetur purus sit amet fermentum. Lorem ipsum dolor sit amet,
                                                    consectetur adipiscing elit. Donec ullamcorper nulla non metus auctor
                                                    fringilla. Nullam quis risus eget urna mollis ornare vel eu leo.
                                                </p>
                                            </div>
                                            <span>
                                                <a href="#" class="btn view button-main">View more</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="layout-right navigation">
                                    <div class="slider-history owl-carousel">
                                        <div class="history-chart-content text-center">
                                            <div class="chart-dots">
                                                <span class="chart-year">2012</span>
                                                <span class="chart-circle"></span>
                                            </div>
                                            <div class="chart-caption">
                                                <p class="caption">
                                                    Curabitur blandit tempus. Maecenas sed diam eget risus varius blandit sit porta felis euismod semper.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="history-chart-content text-center">
                                            <div class="chart-dots">
                                                <span class="chart-year">2014</span>
                                                <span class="chart-circle"></span>
                                            </div>
                                            <div class="chart-caption">
                                                <p class="caption">
                                                    Curabitur blandit tempus. Maecenas sed diam eget risus varius blandit sit porta felis euismod semper.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="history-chart-content text-center">
                                            <div class="chart-dots">
                                                <span class="chart-year">2016</span>
                                                <span class="chart-circle"></span>
                                            </div>
                                            <div class="chart-caption">
                                                <p class="caption">
                                                    Curabitur blandit tempus. Maecenas sed diam eget risus varius blandit sit porta felis euismod semper.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="history-chart-content text-center">
                                            <div class="chart-dots">
                                                <span class="chart-year">2018</span>
                                                <span class="chart-circle"></span>
                                            </div>
                                            <div class="chart-caption">
                                                <p class="caption">
                                                    Curabitur blandit tempus. Maecenas sed diam eget risus varius blandit sit porta felis euismod semper.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="history-chart-content text-center">
                                            <div class="chart-dots">
                                                <span class="chart-year">2020</span>
                                                <span class="chart-circle"></span>
                                            </div>
                                            <div class="chart-caption">
                                                <p class="caption">
                                                    Curabitur blandit tempus. Maecenas sed diam eget risus varius blandit sit porta felis euismod semper.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="history-chart-content text-center">
                                            <div class="chart-dots">
                                                <span class="chart-year">2021</span>
                                                <span class="chart-circle"></span>
                                            </div>
                                            <div class="chart-caption">
                                                <p class="caption">
                                                    Curabitur blandit tempus. Maecenas sed diam eget risus varius blandit sit porta felis euismod semper.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

							<div class="home-funcfacts-inner">
								<div class="row">
									<div class="col-lg-3 col-md-6 col-sm-12 funcfacts-content">
										<div class="funcfacts-caption-group">
											<p class="funcfacts-count">7</p>
											<p class="funcfacts-caption">Year of experiences</p>
										</div>
									</div>
									
									<div class="col-lg-3 col-md-6 col-sm-12 funcfacts-content">
										<div class="funcfacts-caption-group">
											<p class="funcfacts-count">115k</p>
											<p class="funcfacts-caption">Detox Smoothies</p>
										</div>
									</div>
									
									<div class="col-lg-3 col-md-6 col-sm-12 funcfacts-content">
										<div class="funcfacts-caption-group">
											<p class="funcfacts-count">22k</p>
											<p class="funcfacts-caption">Happy Customers</p>
										</div>
									</div>
									
									<div class="col-lg-3 col-md-6 col-sm-12 funcfacts-content">
										<div class="funcfacts-caption-group">
											<p class="funcfacts-count">115k</p>
											<p class="funcfacts-caption">100% Satisfaction</p>
										</div>
									</div>
								</div>
							</div>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="section blog-news">
                    <div class="container">
                        <div class="title text-center">
                            <div class="page-title color">
                                <h3 class="title-main">Our Blog News</h3>
                                <div class="title title-icon">
                                    <h2 class="title-h2">Latest News From Blog</h2>
                                    <p class="description">Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel
                                        scelerisque nisl consectetur et.</p>
                                </div>
                            </div>
                        </div>

                        <div class="block-content m-top">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="product-container gallery-wrap">
                                        <div class="left-block item-img">
                                            <div class="product-image-container ">
                                                <a class="product-img-link" href="blog-detail.html" title="">
                                                    <img src="{{asset('frontend/img/blog/blog1.png')}}" alt="img" class="w-100 image-effect">
                                                </a>
                                            </div>
                                            <div class="gallery-action" data-toggle="modal" data-target="#myModal">
                                                <i class="fa fa-picture-o"></i>
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
                                                    <a href="blog-detail.html" class="title-black">Broad bean and goats’ cheese</a>
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

                                        <div class="modal fadeIn zoomIn animated" id="myModal" data-animate="zoomIn" data-delay="50">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="close text-center" data-dismiss="modal">
                                                        <i class="float-right" aria-hidden="true">×</i>
                                                    </div>

                                                    <div class="modal-body fadeInDownBig">
                                                        <img src="{{asset('frontend/img/blog/blog1.png')}}" alt="" class="w-100">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="product-container gallery-wrap">
                                        <div class="left-block item-img">
                                            <div class="product-image-container">
                                                <a class="product-img-link" href="blog-detail.html" title="">
                                                    <img src="{{asset('frontend/img/blog/blog2.png')}}" alt="img" class="w-100 image-effect">
                                                </a>
                                            </div>
                                            <div class="gallery-action" data-toggle="modal" data-target="#myModal1">
                                                <i class="fa fa-picture-o"></i>
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
                                                    <a href="blog-detail.html" class="title-black">Tomato: Nature’s Sweet Summer Treat</a>
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

                                        <div class="modal fadeIn zoomIn animated" id="myModal1" data-animate="zoomIn" data-delay="50">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="close text-center" data-dismiss="modal">
                                                        <i class="float-right" aria-hidden="true">×</i>
                                                    </div>

                                                    <div class="modal-body fadeInDownBig">
                                                        <img src="{{asset('frontend/img/blog/blog2.png')}}" alt="" class="w-100">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="blog-carousel owl-carousel navigation">
                                        <div class="item">
                                            <div class="product-container">
                                                <div class="left-block item-img">
                                                    <div class="product-image-container">
                                                        <a class="product-img-link" href="blog-detail.html" title="">
                                                            <img src="{{asset('frontend/img/blog/blog3.png')}}" alt="img" class="w-100 image-effect">
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
                                                            <a href="blog-detail.html" class="title-black">A Better Way to Get Vitamin C</a>
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
                                                        <a class="product-img-link" href="product-detail.html" title="">
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
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="m-bottom-0">
                <div class="store">
                    <div class="row m-0 d-flex flex-wrap justify-content-center align-items-center">
                        <div class="col-lg-6 col-md-12 col-sm-12 pd-0">
							<div class="item-img m-top d-flex justify-content-end img-left">
								<a class="product-img-link" href="product-detail.html" title="">
									<img src="{{asset('frontend/img/home2-banner2.png')}}" alt="img" class="image-effect">
								</a>
							</div>
                        </div>

                        <div class="col-lg-6 col-md-12 col-sm-12 pd-0">
							<div class="inner">
								<div class="inner-content">
									<div class="title item-content clearfix">
										<div class=" page-title color">
											<h3 class="title-main">Pay Vie iPhone App</h3>
											<div class="title-icon text-left">
												<h2 class="title-h2 background-position-left">Oars Application</h2>
												<p class="description text-left">Cras mattis consectetur purus sit amet fermentum. Praesent vel scelerisque nisl
													consectetur et.
												</p>
											</div>
										</div>
									</div>

									<div class="item-toggle">
										<div class="panel panel-default click1">
											<div class="show-description d-flex align-items-center">
												<i class="fa fa-angle-right"></i>
												<p class="title-black">Get creative with courgettes</p>
											</div>

											<div class="show1 display-none">
												<p>Ut fermentum massa justo sit amet risus tellus ac cursus commodo, tortor mauris
													condimentum nibh, ut fermentum massa.</p>
											</div>
										</div>
										<div class="panel panel-default click1">
											<div class="show-description d-flex align-items-center">
												<i class="fa fa-angle-right"></i>
												<p class="title-black">Italian style meatballs with courgette ‘tagliatelle’</p>
											</div>

											<div class="show1 display-none">
												<p>Aenean lacinia bibendum nulla sed consectetur. Vestibulum id ligula porta felis
													euismod semper. Fusce dapibus, tellus ac cursus.</p>
											</div>
										</div>
										<div class="panel panel-default click1">
											<div class="show-description d-flex align-items-center">
												<i class="fa fa-angle-right"></i>
												<p class="title-black">How to fillet round fish (mackerel, trout, etc.)</p>
											</div>

											<div class="show1 display-none">
												<p>Ut fermentum massa justo sit amet risus tellus ac cursus commodo, tortor mauris
													condimentum nibh, ut fermentum massa.</p>
											</div>
										</div>
									</div>

									<span class="d-block">
										<a href="#" class="btn view button-main">
											<i class="fa fa-apple"></i>
											Download the app
										</a>
									</span>
								</div>
							</div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="testimonial-home">
                <div class="section testimonials">
                    <div class="container">
                        <div class="title text-center">
                            <div class="page-title color">
                                <h3 class="title-main">Testimonials</h3>
                                <div class="title title-icon">
                                    <h2 class="title-h2">What Our Customer Saying?</h2>
                                    <p class="description">Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel
                                        scelerisque nisl consectetur et.</p>
                                </div>
                            </div>
                        </div>

                        <div class="m-top">
                            <div class="home-testimonials-inner">
                                <div class="row home-testimonials-content">
                                    <div class="col-md-4 col-sm-12 testimonials-item">
                                        <div class="group">
                                            <span class="group-img">
                                                <img src="{{asset('frontend/img/testimonial1.jpg')}}" alt="img">
                                            </span>
                                            <div class="testimonials-caption-group">
                                                <p class="testimonials-caption">
                                                    Aenean lacinia bibendum nulla sed consectetur. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac
                                                    cursus commodo, tortor mauris condimentum nibh,
                                                </p>
                                                <p class="testimonials-name">
                                                    Zin’s Nguyen
                                                </p>
                                                <p class="testimonials-position">
                                                    Smoothie Bartender
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 col-sm-12 testimonials-item">
                                        <div class="group">
                                            <span class="group-img">
                                                <img src="{{asset('frontend/img/testimonial2.jpg')}}" alt="img">
                                            </span>
                                            <div class="testimonials-caption-group">
                                                <p class="testimonials-caption">
                                                    Aenean lacinia bibendum nulla sed consectetur. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac
                                                    cursus commodo, tortor mauris condimentum nibh,
                                                </p>
                                                <p class="testimonials-name">
                                                    Vinfrank Ceaser
                                                </p>
                                                <p class="testimonials-position">
                                                    Farmer Store
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 col-sm-12 testimonials-item">
                                        <div class="group">
                                            <span class="group-img">
                                                <img src="{{asset('frontend/img/testimonial3.jpg')}}" alt="img">
                                            </span>
                                            <div class="testimonials-caption-group">
                                                <p class="testimonials-caption">
                                                    Aenean lacinia bibendum nulla sed consectetur. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac
                                                    cursus commodo, tortor mauris condimentum nibh,
                                                </p>
                                                <p class="testimonials-name">
                                                    Will DogTooh
                                                </p>
                                                <p class="testimonials-position">
                                                    Smoothie Bartender
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
			
			<section>
				<div class="container">
					<div class="home-brand-logo m-top">
						<div class="container">
							<div class="home-brand-inner">
								<div class="home-brand-content owl-carousel owl-theme">
									<div class="brand-item brand-item-two fadeInUp animated d-flex justify-content-center" data-animate="fadeInUp" data-delay="100">
										<div>
											<a href="#">
												<img class="img-fluid" src="{{asset('frontend/img/partner3.png')}}" alt="img">
												<img class="img-fluid logo-hover" src="{{asset('frontend/img/partner3-active.png')}}" alt="img">
											</a>
										</div>
									</div>

									<div class="brand-item brand-item-two fadeInUp animated d-flex justify-content-center" data-animate="fadeInUp" data-delay="200">
										<div>
											<a href="#">
												<img class="img-fluid" src="{{asset('frontend/img/partner2.png')}}" alt="img">
												<img class="img-fluid logo-hover" src="{{asset('frontend/img/partner2-active.png')}}" alt="img">
											</a>
										</div>
									</div>

									<div class="brand-item brand-item-two fadeInUp animated d-flex justify-content-center" data-animate="fadeInUp" data-delay="300">
										<div>
											<a href="#">
												<img class="img-fluid" src="{{asset('frontend/img/partner4.png')}}" alt="img">
												<img class="img-fluid logo-hover" src="{{asset('frontend/img/partner4-active.png')}}" alt="img">
											</a>
										</div>
									</div>

									<div class="brand-item brand-item-two fadeInUp animated d-flex justify-content-center" data-animate="fadeInUp" data-delay="400">
										<div>
											<a href="#">
												<img class="img-fluid" src="{{asset('frontend/img/partner1.png')}}" alt="img">
												<img class="img-fluid logo-hover" src="{{asset('frontend/img/partner1-active.png')}}" alt="img">
											</a>
										</div>
									</div>

									<div class="brand-item brand-item-two fadeInUp animated d-flex justify-content-center" data-animate="fadeInUp" data-delay="500">
										<div>
											<a href="#">
												<img class="img-fluid" src="{{asset('frontend/img/partner5.png')}}" alt="img">
												<img class="img-fluid logo-hover" src="{{asset('frontend/img/partner5-active.png')}}" alt="img">
											</a>
										</div>
									</div>

									<div class="brand-item brand-item-two fadeInUp animated d-flex justify-content-center" data-animate="fadeInUp" data-delay="600">
										<div>
											<a href="#">
												<img class="img-fluid" src="{{asset('frontend/img/partner6.png')}}" alt="img">
												<img class="img-fluid logo-hover" src="{{asset('frontend/img/partner6-active.png')}}" alt="img">
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section>
				<div>
					<div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.758097774219!2d106.92124561100584!3d10.753117489349977!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31751898278539a9%3A0xfeb22bb24309e0e!2zMjY3IMSQLiBUcuG6p24gUGjDuiwgUGjGsOG7m2MgVGhp4buBbiwgTmjGoW4gVHLhuqFjaCwgxJDhu5NuZyBOYWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1722587783475!5m2!1svi!2s" 
                        style="border:0;width:100%;height:380px;" allowfullscreen="" ></iframe>					
                    </div>
				</div>
			</section>
        </main>
@endsection