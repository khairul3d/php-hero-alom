<?php

use App\Http\Controllers\FontendController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;



Auth::routes();

Route:: get('/', [FontendController::class,'index'])->name('root');

// dashboard

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

// profile

Route::get('/home/profile', [ProfileController::class, 'index'])->name('home.profile');
