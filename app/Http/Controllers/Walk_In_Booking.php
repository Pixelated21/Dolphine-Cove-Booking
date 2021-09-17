<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Guest;
use App\Models\Hotel;
use App\Models\Payment_Activity;
use App\Models\Payment_info;
use App\Models\Payment_Type;
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

        $booking = new Booking();
        $booking->programme_id = $request->get('prog_nm');
        $booking->payment_type_id  = Payment_Type::where("payment_type","=","Cash")->get()->first()->payment_type_id;
        $booking->date_booked = strtotime(now("Jamaica"));
        $guest = new Guest();
        $guest->first_nm = $request->get('first_nm');
        $guest->last_nm = $request->get('last_nm');
        $guest->guest_type_id = 1 ;
        $guest->hotel_id = $request->get('hotel');


        $progCost = Program::find($request->get("prog_nm"))
            ->where("programme_id","=",$request->get("prog_nm"))
            ->get("programme_cost");

        $newActivity = new Payment_Activity();
        $newActivity->amount_paid = $progCost[0]->programme_cost;

        $newPayment = new Payment_info();
        $newPayment->entity_type_id = 1;
        $guest->save();
        $guest->payment_info()->save($newPayment);
        $newPayment->payment_activity()->save($newActivity);
        $guest->booking()->save($booking);

        return redirect('/booking');
    }
}
