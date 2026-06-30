<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PerabotController;
use App\Http\Controllers\OrderController;


/*
|--------------------------------------------------------------------------
| FRONTEND
|--------------------------------------------------------------------------
*/

Route::get('/', [
    PerabotController::class,
    'publicIndex'
])->name('home');


Route::get(
    '/detail/{id}',
    [PerabotController::class, 'show']
)->name('perabot.show');


/*
|--------------------------------------------------------------------------
| ORDER
|--------------------------------------------------------------------------
*/

Route::get(
    '/order/{id}',
    [OrderController::class, 'create']
)->name('order.create');


Route::post(
    '/order',
    [OrderController::class, 'store']
)->name('order.store');


/*
|--------------------------------------------------------------------------
| AUTH
|--------------------------------------------------------------------------
*/

Route::get('/login', [
    AuthController::class,
    'showLogin'
])->name('login');


Route::post('/login', [
    AuthController::class,
    'login'
]);


Route::post('/logout', [
    AuthController::class,
    'logout'
])->name('logout');


/*
|--------------------------------------------------------------------------
| ADMIN
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    Route::view(
        '/dashboard',
        'dashboard'
    )->name('dashboard');


    /*
    |--------------------------------------------------------------------------
    | Profile
    |--------------------------------------------------------------------------
    */

    Route::view(
        '/profile',
        'profile'
    )->name('profile');


    /*
    |--------------------------------------------------------------------------
    | CRUD Perabot
    |--------------------------------------------------------------------------
    */

    Route::resource(
        'perabot',
        PerabotController::class
    )->except('show');


    /*
    |--------------------------------------------------------------------------
    | Data Pesanan
    |--------------------------------------------------------------------------
    */

    Route::get(
        '/orders',
        [OrderController::class, 'index']
    )->name('orders.index');


    /*
    |--------------------------------------------------------------------------
    | Export PDF
    |--------------------------------------------------------------------------
    */

    Route::get(
        '/perabot-pdf',
        [PerabotController::class, 'exportPdf']
    )->name('perabot.exportPdf');

});