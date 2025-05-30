<?php

use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\LogoutController;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::middleware('guest')->group(function () {

    Route::get('/login', [LoginController::class, 'index'])->name('login.index');
    Route::post('/login', [LoginController::class,'login'])->name('login.submit');

    Route::get('/register', [RegisterController::class, 'index'])->name('register.index');
    Route::post('/register', [RegisterController::class, 'register'])->name('register.submit');

});


Route::middleware('auth')->group(function () {

    Route::get('/logout', LogoutController::class)->name('logout');
    Route::get('/dashboard', DashboardController::class)->name('dashboard');

    Route::get('/links/create', [LinkController::class,'create'])->name('links.create');
    Route::post('/links/create', [LinkController::class,'store']);

    Route::delete('/links/{link}', [LinkController::class,'delete'])->name('links.delete');
    Route::get('/links/{link}', [LinkController::class,'edit'])->name('links.edit');
    Route::put('/links/{link}', [LinkController::class, 'update'])->name('links.update');
    Route::patch('/links/{link}/up', [LinkController::class, 'up'])->name('links.up');
    Route::patch('/links/{link}/down', [LinkController::class, 'down'])->name('links.down');

    Route::get('/profile', [ProfileController::class,'create'])->name('profile.index');
    Route::put('/profile', [ProfileController::class,'update'])->name('profile.update');
});

Route::get('/', [LoginController::class,'index'])->name('welcome');
