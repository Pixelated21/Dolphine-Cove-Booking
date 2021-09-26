<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Guest;
use App\Models\Hotel;
use App\Models\Payment_Activity;
use App\Models\Payment_info;
use App\Models\Payment_Type;
use App\Models\Program;
use App\Models\Tour_Company;
use Illuminate\Http\Request;

class Tour_Company_Booking extends Controller
{
    public function index(){

        $tour_companies = Tour_Company::all();
        $hotels = Hotel::all();
        $programs = Program::all();
        $payment_types = Payment_Type::all();


        return view("guest_type.tour-booking")
            ->with(compact("tour_companies",$tour_companies))
            ->with(compact("hotels",$hotels))
            ->with(compact("programs",$programs))
            ->with(compact("payment_types",$payment_types));

    }

    public function bookGuest(Request $request) {

    //    dd($request->all());

        $guest = new Guest();
        $guest->first_nm = $request->get('first_nm');
        $guest->last_nm = $request->get('last_nm');
        $guest->guest_type_id = 2 ;
        $guest->hotel_id = $request->get('hotel');
        $guest->push();

        $totalCost = 0;
        $getPayment_type_id = explode(',',$request->hidden_prog_nm);
        foreach ($getPayment_type_id as $index => $value) {
            if ($value != "") {

                $getProgram = Program::find($value);
                $totalCost = $totalCost + $getProgram->programme_cost;
            }
        }
        // dd(Payment_Type::where('payment_type_id','=',$request->payment_type)->first()->payment_type);
        if(Payment_Type::where('payment_type_id','=',$request->payment_type)->first()->payment_type === "Credit" ) {


            $findCredit = Tour_Company::find(($request->get("tour_comp")))
                ->where("tour_company_id","=",$request->get("tour_comp"))
                ->first("credit_amt")->credit_amt;


            $addCredit = Tour_Company::find($request->get("tour_comp"))
                ->update(["credit_amt" => $findCredit += $totalCost]);


        }
        else if(Payment_Type::where('payment_type_id','=',$request->payment_type)->first()->payment_type === "Cash"){
            $newActivity = new Payment_Activity();
            $newActivity->amount_paid = $totalCost;

            $newPayment = new Payment_info();
            $newPayment->entity_type_id = 2;
            $guest->save();
            $guest->payment_info()->save($newPayment);
            $newPayment->payment_activity()->save($newActivity);


        }
        
        $getPayment_type_id = explode(',',$request->hidden_prog_nm);
        foreach ($getPayment_type_id as $index => $value) {

            if ($value != "") {
                $booking = new Booking();
                $booking->programme_id = $value;
                $booking->tour_company_id = $request->get("tour_comp");
                $booking->payment_type_id = $request->get("payment_type");
                $booking->date_booked = $request->get("date_booked");
                $guest->booking()->save($booking);
            }

        }

        return redirect("/booking");

    }
}
