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
                        <h4 class="page-title">Cập nhật thông tin người dùng</h4>
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
                                        <form id="send-verification" method="post" action="{{ route('verification.send') }}">
                                            @csrf
                                        </form>

                                        <form class="form-horizontal" method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
                                            @csrf
                                            @method('patch')
                                            <div class="form-group row">
                                                <label class="col-lg-2 col-form-label" for="name">{{ __('Name') }}</label>
                                                <div class="col-lg-10">
                                                <input id="name" name="name" type="text" class="form-control" value="{{ old('name', $user->name) }}" required autofocus autocomplete="name" />
                                                </div>
                                                @error('name')
                                                <span class="text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                                <!-- <x-input-error class="mt-2" :messages="$errors->get('name')" /> -->
                                            </div>
                                            <div class="form-group row">
                                            <label class="col-lg-2 col-form-label" for="email">{{ __('Email') }}</label>
                                            <div class="col-lg-10">
                                            <input id="email" name="email" type="email" class="form-control" value="{{ old('email', $user->email) }}" required autofocus autocomplete="email" />
                                            </div>
                                            @error('email')
                                                <span class="text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                                <!-- <x-input-error class="mt-2" :messages="$errors->get('email')" /> -->
                                                @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                                                <div class="form-group row">
                                                    <p class="text-sm mt-2 text-gray-800">
                                                        {{ __('Your email address is unverified.') }}
                                                        <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                            {{ __('Click here to re-send the verification email.') }}
                                                        </button>
                                                    </p>

                                                    @if (session('status') === 'verification-link-sent')
                                                    <p class="mt-2 font-medium text-sm text-green-600">
                                                        {{ __('A new verification link has been sent to your email address.') }}
                                                    </p>
                                                    @endif
                                                </div>
                                                @endif
                                                <div class="form-group text-right mb-0">
                                                  <button class="btn btn-primary waves-effect waves-light mr-1" type="submit">
                                                    {{ __('Lưu') }}
                                                  </button>
                                                  @if (session('status') === 'profile-updated')
                                                  <p
                                                      x-data="{ show: true }"
                                                      x-show="show"
                                                      x-transition
                                                      x-init="setTimeout(() => show = false, 2000)"
                                                      class="text-sm text-gray-600">{{ __('Saved.') }}</p>
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