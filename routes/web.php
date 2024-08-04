<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\AboutController;
use App\Http\Controllers\frontend\ProductController;
use App\Http\Controllers\frontend\CategoryProductController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\BlogController;



Route::get('/',[HomeController::class,'index']);
Route::get('/gioi-thieu',[AboutController::class,'index']);
Route::get('/chi-tiet-san-pham',[ProductController::class,'index']);
Route::get('/cua-hang',[CategoryProductController::class,'index']);
Route::get('/tin-tuc',[BlogController::class,'index']);
Route::get('/chi-tiet-tin-tuc',[BlogController::class,'details_blog']);
Route::get('/lien-he',[ContactController::class,'index']);
Route::get('/dang-ky',function(){
    return view('frontend.user.register');
});
Route::get('/dang-nhap',function(){
    return view('frontend.user.login');
});

