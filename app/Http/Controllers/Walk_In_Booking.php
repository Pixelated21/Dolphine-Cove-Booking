<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Guest;
use App\Models\Hotel;
use App\Models\Program;
use Illuminate\Http\Request;

class Walk_In_Booking extends Controller
{
    public function index(){

        $hotels = Hotel::all();
        $programs = Program::all();

//        dd($hotel);

        return view("guest_type.walk-in")
            ->with(compact("hotels",$hotels))
            ->with(compact("programs",$programs));
    }

    public function bookGuest(Request $request){
//        dd($request->all());

        $booking = new Booking();
        $booking->programme_id = $request->get('prog_nm');
        $booking->booking_type = "Walk-In";
        $booking->payment_type = "Cash";
        $booking->date_booked = now("Jamaica");
        $guest = new Guest();
        $guest->first_nm = $request->get('first_nm');
        $guest->last_nm = $request->get('last_nm');
        $guest->guest_type = "Walk-In" ;
        $guest->hotel_id = $request->get('hotel');
        $guest->save();
        $guest->booking()->save($booking);

        return redirect('/booking');
    }
}
