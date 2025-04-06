<?php

use App\Http\Controllers\Admin\DeleteUserController;
use App\Http\Controllers\Admin\RegisterUserController;
use App\Http\Controllers\Admin\UpdateUserController;
use App\Http\Controllers\Admin\ViewUserController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('blog/main-page');
});

Route::get('/dash',function(){
    return view('dashboard/index');
});

// Show Registration Form
Route::get('/register',[RegisterUserController::class,'showRegisterForm']);

// Register User
Route::post('/register',[RegisterUserController::class,'registerUser'])->name('register-user');

// View Single User
Route::get('/user/view/{user}',[ViewUserController::class,'viewSingleUser'])->name('view-user');

// Show Update User Form
Route::get('/user/edit/{user}',[UpdateUserController::class,'showUserEditForm'])->name('show-update-user');

// Edit User
Route::put('/user/edit/{user}',[UpdateUserController::class,'updateUser'])->name('update-user');

// Show Delete User
Route::get('/user/delete/{user}',[DeleteUserController::class,'showDeleteUserForm'])->name('show-delete-user');
// Delete User
Route::delete('/user/delete/{user}',[DeleteUserController::class,'deleteUser'])->name('delete-user');
