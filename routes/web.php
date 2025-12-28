<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('agropages.dashboard');
});
Route::post('register',[UserController::class , 'store'])->name('register_user');
