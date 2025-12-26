<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pagecontroller;
use App\Http\Controllers\AuthController; 


route::get('/', [PageController::class, 'home'])->name('home');


route::get('/product', [AuthController::class, 'product'])->name('product');


Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'form_data'])->name('login.submit');


route::get('/reg', [AuthController::class, 'showRegister'])->name('register');
route::post('/register', [AuthController::class, 'form'])->name('register.submit');
route::post('/contact', [AuthController::class, 'contactform'])->name('contact.submit');






Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
