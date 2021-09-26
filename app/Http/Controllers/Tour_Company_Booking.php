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

        $progCost = [];

        foreach ($request->get("prog_nm") as $index => $value) {
            $progCost[] = Program::find($value)
                ->where("programme_id", "=", $value)
                ->first()->programme_cost;
        }

        $totalCost = array_sum($progCost);

//        dd($totalCost);

//        dd(Payment_Type::find($request->get("payment_type"))->get()[0]->payment_type);
        if(Payment_Type::find($request->get("payment_type"))->get()[0]->payment_type === "credit" ) {


            $findCredit = Tour_Company::find(($request->get("tour_comp")))
                ->where("tour_company_id","=",$request->get("tour_comp"))
                ->first("credit_amt")->credit_amt;

//            dd($findCredit);

//            dd(Tour_Company::find($request->get("tour_comp"))->first()->credit_amt);


            $addCredit = Tour_Company::find($request->get("tour_comp"))
                ->update(["credit_amt" => $findCredit += $totalCost]);


        }
        else if(Payment_Type::find($request->get("payment_type"))->get()[0]->payment_type === "2"){

            $newActivity = new Payment_Activity();
            $newActivity->amount_paid = $progCost[0]->programme_cost;

            $newPayment = new Payment_info();
            $newPayment->entity_type_id = 1;

            $guest->payment_info()->save($newPayment);
            $newPayment->payment_activity()->save($newActivity);



        }
        
        $getPayment_type_id = explode(',',$request->hidden_prog_nm);
        // dd($getPayment_type_id);
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
