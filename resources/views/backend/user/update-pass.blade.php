@extends('backend.layout.main')

@section('content')
<div class="content-page">
    <div class="content">
        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Cập nhật mật khẩu</h4>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-10">
                                    <div class="">
                                        <form method="POST" action="{{ route('password.update') }}">
                                            @csrf
                                            @method('PUT')

                                            <div class="form-group row">
                                                <label class="col-lg-2 col-form-label" for="current_password">{{ __('Mật khẩu hiện tại') }}</label>
                                                <div class="col-lg-10">
                                                    <input id="current_password" name="current_password" type="password" class="form-control" required autofocus autocomplete="current-password" />
                                                </div>
                                                @error('current_password')
                                                    <span class="text-danger" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-lg-2 col-form-label" for="password">{{ __('Mật khẩu mới') }}</label>
                                                <div class="col-lg-10">
                                                    <input id="password" name="password" type="password" class="form-control" required autocomplete="new-password" />
                                                </div>
                                                @error('password')
                                                    <span class="text-danger" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-lg-2 col-form-label" for="password_confirmation">{{ __('Nhập lại mật khẩu') }}</label>
                                                <div class="col-lg-10">
                                                    <input id="password_confirmation" name="password_confirmation" type="password" class="form-control" required autocomplete="new-password" />
                                                </div>
                                                @error('password_confirmation')
                                                    <span class="text-danger" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <!-- Email Verification Message -->
                                            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
                                                <div class="form-group row">
                                                    <p class="text-sm mt-2 text-gray-800">
                                                        {{ __('Email của bạn chưa được xác minh.') }}
                                                        <button type="button" form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                            {{ __('Nhấp vào đây để gửi lại email xác minh.') }}
                                                        </button>
                                                    </p>

                                                    @if (session('status') === 'verification-link-sent')
                                                        <p class="mt-2 font-medium text-sm text-green-600">
                                                            {{ __('Một liên kết xác minh mới đã được gửi đến địa chỉ email của bạn.') }}
                                                        </p>
                                                    @endif
                                                </div>
                                            @endif

                                            <div class="form-group text-right mb-0">
                                                <button class="btn btn-primary waves-effect waves-light mr-1" type="submit">
                                                    {{ __('Lưu') }}
                                                </button>
                                                @if (session('status') === 'password-updated')
                                                    <p
                                                        x-data="{ show: true }"
                                                        x-show="show"
                                                        x-transition
                                                        x-init="setTimeout(() => show = false, 2000)"
                                                        class="text-sm text-gray-600">{{ __('Đã lưu.') }}</p>
                                                @endif
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->
                        </div>
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->

        </div>
        <!-- end container-fluid -->

    </div>
</div>
@endsection
