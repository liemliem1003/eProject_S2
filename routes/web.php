<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\ProductsController;

use App\Http\Controllers\guest\GuestController;
use App\Http\Controllers\guest\LoginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



// Phan route cua guest (khach)
Route::prefix('/')->group(function () {
    Route::get('/', [
        GuestController::class,
        'getHome'
    ]);

    Route::get('login', [
        LoginController::class,
        'login'
    ])->name('login');

});


// Phan route cua admin (quan ly)
Route::prefix('/admin')->group(function () {
    // goi home addmin
    Route::get('/', [
        AdminController::class,
        'getHome'
    ])->name('getHome');

    Route::get('/product', [
        ProductsController::class,
        'getHome'
    ])->name('product');

});
