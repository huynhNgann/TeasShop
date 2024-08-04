@extends('frontend.layouts.layouts')
@section('content')
        <main>
            <div class="page-title-breadcrumbs">
                <div class="breadcrumbs-container container">
                    <div class="breadcrumbs_wrapper">
                        <div class="page-title-container">
                            <h1 class="text-center">Account Page</h1>
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
                                    <span>Login</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container section check-out">
                <div class="row check-out-wrap">
                    <div class="col-lg-5 col-md-6 col-sm-12 m-b-50">
                        <div class="descrip-title">
                            <h3 class="title-black">Login</h3>
                            <p>Donec ullamcorper nulla non metus auctor fringilla. Nullam quis risus eget urna mollis ornare
                                vel eu leo. </p>
                        </div>

                        <form name="checkout" method="post" class="form-checkout" action="#" enctype="multipart/form-data" novalidate="novalidate">
                            <div class="billing-fields">
                                <div class="form-input">
                                    <div class="form-row">
                                        <p> Username or Email Address
                                            <abbr class="required" title="required">*</abbr>
                                        </p>
                                        <span class="input-wrapper w-100">
                                            <input type="text" class="input-text spr-form-input">
                                        </span>
                                    </div>

                                    <div class="form-row">
                                        <p>Password
                                            <abbr class="required" title="required">*</abbr>
                                        </p>
                                        <span class="input-wrapper w-100">
                                            <input type="text" class="input-text spr-form-input">
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="check-box">
                                <label class="check">
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                                <span class="title-black">Remember me</span>

                                <a href="user-reset-password.html" class="float-right">Forgot your password?</a>
                            </div>

                            <div class="d-flex justify-content-star align-items-center m-bottom-20">
                                <button type="submit" class="btn-submit btn button-main">Login</button>
                            </div>
                        </form>
                    </div>

                    <div class="col-lg-2 d-xs-none"></div>

                    <div class="col-lg-5 col-md-6 col-sm-12">
                        <div class="descrip-title">
                            <h3 class="title-black">Register</h3>
                            <p>Donec ullamcorper nulla non metus auctor fringilla. Nullam quis risus eget urna mollis ornare
                                vel eu leo. </p>
                        </div>

                        <form name="checkout" method="post" class="form-checkout" action="#" enctype="multipart/form-data" novalidate="novalidate">
                            <div class="billing-fields">
                                <div class="form-input">
                                    <div class="form-row">
                                        <p>Full name&nbsp;
                                            <abbr class="required" title="required">*</abbr>
                                        </p>
                                        <span class="input-wrapper w-100">
                                            <input type="text" class="input-text spr-form-input">
                                        </span>
                                    </div>

                                    <div class="form-row">
                                        <p>Phone&nbsp;
                                            <abbr class="required" title="required">*</abbr>
                                        </p>
                                        <span class="input-wrapper w-100">
                                            <input type="text" class="input-text spr-form-input">
                                        </span>
                                    </div>

                                    <div class="form-row">
                                        <p>Email Address&nbsp;
                                            <abbr class="required" title="required">*</abbr>
                                        </p>
                                        <span class="input-wrapper w-100">
                                            <input type="text" class="input-text spr-form-input">
                                        </span>
                                    </div>

                                    <div class="form-row">
                                        <p>Password&nbsp;
                                            <abbr class="required" title="required">*</abbr>
                                        </p>
                                        <span class="input-wrapper w-100">
                                            <input type="text" class="input-text spr-form-input">
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex justify-content-star m-bottom-20">
                                <button type="submit" class="btn-submit btn button-main">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>

    