<?php

use App\Http\Controllers\Create_Controller;
use App\Http\Controllers\Homepage;
use App\Http\Controllers\Settings;
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

Route::get('/',[Homepage::class,'index'])->name("Homepage");

Route::get('/booking', [Homepage::class, 'booking'])->name("Booking");
Route::get('/view-booking', [Homepage::class, 'viewBooking'])->name("View_Project");


Route::get('/booking/tour-company-booking', [Tour_Company_Booking::class, 'index'])->name("Walk-In-Booking");
Route::get('/booking/walk-in-booking', [Walk_In_Booking::class, 'index'])->name("Tour_Company_Booking");


Route::post('/walk-in-booking-book', [Walk_In_Booking::class, 'bookGuest'])->name("Walk-In-Book");
Route::post('/tour-booking-book', [Tour_Company_Booking::class, 'bookGuest'])->name("Tour_Company_Book");


Route::get('/settings', [Settings::class,"index"])->name("Settings");

Route::post('/add-hotel', [Create_Controller::class, 'addHotel'])->name("Add_Hotel");
Route::post('/add-tour-company', [Create_Controller::class, 'addTourCompany'])->name("Add_Tour_Company");
Route::post('/add-programme', [Create_Controller::class, 'addProgramme'])->name("Add_Programme");
Route::post('/add-entity-type', [Create_Controller::class, 'addEntityType'])->name("Add_Entity_Type");
Route::post('/add-guest-type', [Create_Controller::class, 'addGuestType'])->name("Add_Guest_Type");
Route::post('/add-payment-type', [Create_Controller::class, 'addPaymentType'])->name("Add_Payment_Type");


