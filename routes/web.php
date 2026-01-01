<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\AuthAdmin;
use Illuminate\Support\Facades\Auth;

// Route::get('/lay', function () {
//     return view('layouts.app');
// });
// Route::post('register',[UserController::class , 'store'])->name('register_user');

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('homepage');

Route::middleware(['auth'])->group(function(){
   Route::get('/user-account',[UserController::class ,'index'])->name('useraccount');
});
Route::middleware(['auth',AuthAdmin::class])->group(function(){
    Route::get('/admin-account',[AdminController::class ,'index'])->name('adminaccount');
 });