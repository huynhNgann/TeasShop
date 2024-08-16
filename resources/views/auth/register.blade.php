
@extends('auth.layout.main')
@section('title')
Đăng kí
@endsection
@section('content')
                                    <form method="POST" action="{{ route('register') }}" class="p-2">
                                        @csrf
                                    <div class="form-group mb-3">
                                        <label for="emailaddress">Email</label>
                                        <input class="form-control" name="email" type="email" id="emailaddress" required="" placeholder="Email">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="username">User name</label>
                                        <input class="form-control" type="text" name="name" id="username" required="" placeholder="Enter your user">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="password">Password</label>
                                        <input class="form-control" type="password" name="password" id="password" required="" placeholder="Enter your password">
                                    </div>

                                    <div class="form-group mb-4">
                                        <div class="checkbox checkbox-success">
                                            <input id="remember" type="checkbox" checked="">
                                            <label for="remember">
                                                I accept <strong><a href="#">Terms and Conditions</a></strong>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="form-group text-center mt-4 mb-4">
                                        <div class="col-12">
                                            <button class="btn btn-md btn-primary waves-effect waves-light" type="submit">Đăng kí</button>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-0">
                                        <div class="col-sm-12 text-center">
                                            <a href="{{route('login')}}">Đăng nhập nếu bạn có tài khoản?</a>
                                        </div>
                                    </div>
                                </form>
@endsection