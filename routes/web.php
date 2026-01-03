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

// Auth::routes(['verify' => true]);
// Route::get('/test',function(){
//    return view('auth.verify');
// });
Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('homepage');

Route::middleware(['auth'])->group(function(){
   Route::get('/user-account',[UserController::class ,'index'])->name('useraccount');
});
Route::middleware(['auth',AuthAdmin::class])->group(function(){
    Route::get('/admin-account',[AdminController::class ,'index'])->name('adminaccount');
    Route::get('/admin/category-list',[AdminController::class ,'category'])->name('categorylist');
    Route::post('/admin/addcategory',[AdminController::class , 'addcategory'])->name('addcategory');
    Route::delete('/admin/categories/{id}', [AdminController::class, 'deleteCategory'])->name('admin.categories.deleteCategory');
    Route::post('/admin/categories/{id}/update', [AdminController::class, 'updateCategory'])->name('admin.categories.update');

 });