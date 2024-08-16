@extends('auth.layout.main')
@section('title')
Đăng nhập
@endsection
@section('content')
                        <form method="POST" action="{{ route('login') }}" class="p-2">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="emailaddress">Email</label>
                                <input class="form-control" name="email" type="email" id="emailaddress" required="" placeholder="Email">
                            </div>

                            <div class="form-group mb-3">
                                <label for="password">Password</label>
                                <input class="form-control" name="password" type="password" required="" id="password" placeholder="Password">
                            </div>                                    
                            <div class="form-group row text-center mt-4 mb-4">
                                <div class="col-12">
                                    <button class="btn btn-md btn-block btn-primary waves-effect waves-light" type="submit">Đăng nhập</button>
                                </div>
                            </div>

                        </form>
@endsection