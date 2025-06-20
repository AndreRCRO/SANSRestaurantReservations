<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\RestaurantPanelController;
use App\Http\Controllers\RestaurantAuthController;


Route::get('/registrar-restaurante', function () {
    return view('restaurant_register');
});

Route::post('/register-restaurant', [RestaurantController::class, 'store'])->name('register.restaurant');

Route::get('/', function () {
    return view('index');
});

Route::get('/admin', [RestaurantPanelController::class, 'adminPanel'])->name('admin.panel');

Route::get('/restaurant/login', [RestaurantAuthController::class, 'showLoginForm'])->name('login.restaurant.form');
Route::post('/restaurant/login', [RestaurantAuthController::class, 'login'])->name('login.restaurant');
Route::post('/restaurant/logout', [RestaurantAuthController::class, 'logout'])->name('logout.restaurant');
Route::post('/reservar-mesa', [RestaurantController::class, 'reservarMesa'])->name('reservar.mesa');
Route::get('/restaurantes-disponibles', [RestaurantController::class, 'disponibles'])->name('restaurantes.disponibles');


