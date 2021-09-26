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

        return view("guest_type.walk-in")
            ->with(compact("hotels",$hotels))
            ->with(compact("programs",$programs));
    }

    public function bookGuest(Request $request){

        $guest = new Guest();
        $guest->first_nm = $request->get('first_nm');
        $guest->last_nm = $request->get('last_nm');
        $guest->guest_type_id = 1 ;
        $guest->hotel_id = $request->get('hotel');

        $totalCost = 0;
        $getPayment_type_id = explode(',',$request->hidden_prog_nm);
        foreach ($getPayment_type_id as $index => $value) {
            if ($value != "") {

                $getProgram = Program::find($value);
                $totalCost = $totalCost + $getProgram->programme_cost;
            }
        }
        
        $newActivity = new Payment_Activity();
        $newActivity->amount_paid = $totalCost;

        $newPayment = new Payment_info();
        $newPayment->entity_type_id = 1;
        $guest->save();
        $guest->payment_info()->save($newPayment);
        $newPayment->payment_activity()->save($newActivity);

        $getPayment_type_id = explode(',',$request->hidden_prog_nm);
        foreach ($getPayment_type_id as $index => $value) {
            if ($value != "") {

                $getProgram = Program::find($value);
                $totalCost = $totalCost + $getProgram->programme_cost;
                $booking = new Booking();
                $booking->programme_id = $value;
                $booking->tour_company_id = $request->get("tour_comp");
                $booking->payment_type_id = 2;
                $booking->date_booked = $request->get("date_booked");
                $guest->booking()->save($booking);
            }
        }

        return redirect('/booking');
    }
}
