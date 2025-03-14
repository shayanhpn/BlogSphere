<?php

use App\Http\Controllers\Admin\RegisterUserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('blog/main-page');
});

Route::get('/dash',function(){
    return view('dashboard/index');
});

Route::get('/register',[RegisterUserController::class,'showRegisterForm']);
Route::post('/register',[RegisterUserController::class,'registerUser'])->name('register-user');
