<?php

use App\Http\Controllers\Homepage;
use App\Http\Controllers\Tour_Company_Booking;
use App\Http\Controllers\Walk_In_Booking;
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

Route::get('/',[Homepage::class,'index']);

Route::get('/booking', [Homepage::class, 'booking']);
Route::get('/booking/tour-company-booking', [Tour_Company_Booking::class, 'index']);
Route::get('/booking/walk-in-booking', [Walk_In_Booking::class, 'index']);


Route::post('/walk-in-booking-book', [Walk_In_Booking::class, 'bookGuest']);
Route::post('/tour-booking-book', [Tour_Company_Booking::class, 'bookGuest']);

