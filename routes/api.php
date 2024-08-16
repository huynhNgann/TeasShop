<?php

use Illuminate\Http\Request;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Auth\PasswordController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth'=>'web', 'verified'])->name('dashboard');
    // Route::get('/danh-sach-user',[UserController::class,'index'])->name('user.list');

Route::middleware(['auth'=>'web'])->group(function () {
    Route::resource('user', UserController::class);
    Route::put('user/{id}/update-info', [UserController::class,'updateLoginDetails'])->name('user.update-pass');
    Route::put('user/{id}/update-pass', [UserController::class,'updatePassword'])->name('user.update-info');
    //test UI form-upload
    Route::get('user/test-upload-img', [UserController::class,'upload_img'])->name('user.upload_img');
    Route::get('/test-upload-img', function(){
        return view('backend.user.test-upload');
    });


 // Profile Routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::get('/update-pass', [ProfileController::class, 'editPassword'])->name('profile.edit-pass');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::patch('/update-pass', [ProfileController::class, 'updatePassword'])->name('profile.update-pass');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    //password
    Route::get('edit-password', function(){
        return '123';
    });
    Route::get('password', [PasswordController::class, 'edit'])->name('password.edit');
    Route::put('password', [PasswordController::class, 'update'])->name('password.update');
});
require __DIR__.'/auth.php';

