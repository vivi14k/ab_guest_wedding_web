<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\CouponController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/guest', [GuestController::class, 'index']);
Route::get('/guest/create', [GuestController::class, 'create']);
Route::get('/guest/pilihKupon/{id}', [GuestController::class, 'pilihKupon']);
Route::post('/guest/tambahKupon', [GuestController::class, 'tambahKupon']);
Route::post('/guest/store', [GuestController::class, 'store']);

Route::get('/coupon', [CouponController::class, 'index'])->name("kupon");
Route::get('/coupon/create', [CouponController::class, 'create']);
Route::post('/coupon/store', [CouponController::class, 'store']);