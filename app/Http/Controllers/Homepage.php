<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class Homepage extends Controller
{
    public function index(){
        return view("index");
    }

    public function booking(){
        return view("booking");
    }

    public function viewBooking(){

        $bookings = Booking::all();

        return view("view-booking")
            ->with(compact("bookings",$bookings));

    }
}
