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

//        dd($request->all());


        $guest = new Guest();
        $guest->first_nm = $request->get('first_nm');
        $guest->last_nm = $request->get('last_nm');
        $guest->guest_type_id = 1 ;
        $guest->hotel_id = $request->get('hotel');


        $progCost = [];

        foreach ($request->get("prog_nm") as $index => $value) {
            $progCost[] = Program::find($value)
                ->where("programme_id", "=", $value)
                ->first()->programme_cost;
        }

        $totalCost = array_sum($progCost);

        $newActivity = new Payment_Activity();
        $newActivity->amount_paid = $totalCost;

        $newPayment = new Payment_info();
        $newPayment->entity_type_id = 1;
        $guest->save();
        $guest->payment_info()->save($newPayment);
        $newPayment->payment_activity()->save($newActivity);

        foreach ($request->get("prog_nm") as $index => $value) {

            $booking = new Booking();
            $booking->programme_id = $value;
            $booking->tour_company_id = $request->get("tour_comp");
            $booking->payment_type_id = 2;
            $booking->date_booked = $request->get("date_booked");
            $guest->booking()->save($booking);

        }

        return redirect('/booking');
    }
}
