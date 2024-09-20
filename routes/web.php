<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/user',[UserController::class, 'user'])->name('user.view');

Route::get('/create',[UserController::class, 'user_create'])->name('user.create');

Route::post('/store',[UserController::class, 'store'])->name('user.store');

