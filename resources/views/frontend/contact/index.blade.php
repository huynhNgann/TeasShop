@extends('frontend.layouts.main')
@section('content')
        <main>
            <div class="page-title-breadcrumbs">
                <div class="breadcrumbs-container container">
                    <div class="breadcrumbs_wrapper">
                        <div class="page-title-container">
                            <h1 class="text-center">Contact Us</h1>
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
                                    <span>Liên hệ với chúng tôi</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section main-contact-us">
                <div class="section container">
                    <div class="row">
                        <div class="col-md-7 col-sm-12 m-b-30">
                            <img src="{{asset('frontend/img/contact.jpg')}}" alt="" class="img-fluid">
                        </div>

                        <div class="col-md-5 col-sm-12">
                            <div class="page-title color m-bottom-2">
                                <h3 class="title-main">Contact Form</h3>
                                <div class="title title-icon">
                                    <h2 class="title-h2">Get In Touch</h2>
                                    <p class="description">Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel
                                        scelerisque nisl consectetur et.</p>
                                </div>
                            </div>

                            <div id="review">
                                <form method="post" action="index.html" class="new-review-form">
                                    <fieldset class="spr-form-contact">
                                        <div class="spr-form-contact-name">
                                            <input class="spr-form-input spr-form-input-text form-control" value="" placeholder="Name">
                                        </div>
                                        <div class="spr-form-contact-email">
                                            <input class="spr-form-input spr-form-input-text form-control" value="" placeholder="Email">
                                        </div>
                                        <div class="spr-form-contact-phone">
                                            <input class="spr-form-input spr-form-input-text form-control" value="" placeholder="Phone">
                                        </div>
                                        <div class="spr-form-contact-subject">
                                            <input class="spr-form-input spr-form-input-text form-control" value="" placeholder="Subject">
                                        </div>
                                    </fieldset>

                                    <fieldset>
                                        <div class="spr-form-review-body">
                                            <div class="spr-form-input">
                                                <textarea class="spr-form-input-textarea" rows="5" placeholder="Message"></textarea>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <div class="submit">
                                        <button class="add-to-cart" type="submit">
                                            <span class="btn view button-main">Submit Now</span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="header-contact section">
                    <div class="container">
                        <div class="row m-0 border-top">
                            <div class="col-md-4 col-sm-12 pd-left-0 m-b-10">
                                <div class="item d-flex">
                                    <div class="item-left">
                                        <div class="icon">
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <div class="contact-content">
                                        <div class="title title-black">Address</div>
                                        <p>25 Pandan Crescent #02-10 TIC
                                            <br>Tech Centre Singapore
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-12 pd-l-0 m-b-10">
                                <div class="item d-flex">
                                    <div class="item-left">
                                        <div class="icon">
                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <div class="item-right">
                                        <div class="title title-black">Hotline</div>
                                        <p class="contact-content">
                                            (1200) 989 91 94 - (1100) 891 743
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-12 pd-l-0 pd-right-0">
                                <div class="item d-flex last">
                                    <div class="item-left">
                                        <div class="icon">
                                            <i class="fa fa-paper-plane" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <div class="item-right">
                                        <div class="title title-black">Email</div>
                                        <div class="contact-content">
                                            <a href="mailto:tivatheme@gmail.com">tivatheme@gmail.com</a>
                                            <br>
                                            <a href="mailto:supportoars@gmail.com">supportoars@gmail.com</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

			<div class="contact-map">
				<div class="map">
					<iframe src="../../maps/embed.html?pb=!1m18!1m12!1m3!1d3724.3785754726428!2d105.78134315594316!3d21.01753304734255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454ab43c0c4db%3A0xdb6effebd6991106!2sKeangnam+Hanoi+Landmark+Tower!5e0!3m2!1svi!2s!4v1530175498947" style="border:0;width:100%;height:380px;" allowfullscreen=""></iframe>
				</div>
			</div>
        </main>
@endsection