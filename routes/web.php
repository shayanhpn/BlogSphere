<?php

use App\Http\Controllers\Admin\AuthenticateUserController;
use App\Http\Controllers\Admin\DeleteUserController;
use App\Http\Controllers\Admin\RegisterUserController;
use App\Http\Controllers\Admin\ShowAllUsersController;
use App\Http\Controllers\Admin\UpdateUserController;
use App\Http\Controllers\Admin\ViewUserController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Home\HomeController;
use Illuminate\Support\Facades\Route;
use function Pest\Laravel\get;

// Show HomePage
Route::get('/',[HomeController::class,'showHomePage']);


// Show Dashboard Page
Route::get('/dash',[DashboardController::class,'showDashboard']);


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

// Show All Users
Route::get('/users',[ShowAllUsersController::class,'showAllUsers'])->name('show-all-users');


// Show Login Page
Route::get('/login',[AuthenticateUserController::class,'showLoginForm'])->name('login');

// Login User
Route::post('/login',[AuthenticateUserController::class,'loginUser'])->name('login-user');


Route::post('/logout',[AuthenticateUserController::class,'logoutUser'])->name('logout');