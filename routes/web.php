<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestaurantController;


Route::get('/registrar-restaurante', function () {
    return view('restaurant_register');
});

Route::post('/register-restaurant', [RestaurantController::class, 'store'])->name('register.restaurant');

Route::get('/', function () {
    return view('index');
});

Route::get('/admin', function () {
    return view('admin_panel');
})->name('admin.panel');
