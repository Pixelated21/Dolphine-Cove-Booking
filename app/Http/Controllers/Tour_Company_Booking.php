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

//        dd($programs);



        return view("guest_type.tour-booking")
            ->with(compact("tour_companies",$tour_companies))
            ->with(compact("hotels",$hotels))
            ->with(compact("programs",$programs))
            ->with(compact("payment_types",$payment_types));


    }

    public function bookGuest(Request $request) {

//        dd($request->all());

        $booking = new Booking();
        $booking->guest_id = 1;
        $booking->programme_id = $request->get('prog_nm');
        $booking->tour_company_id = $request->get("tour_comp");
        $booking->payment_type_id = $request->get("payment_type");
        $booking->date_booked = strtotime(date("Y-m-d"));
        $guest = new Guest();
        $guest->first_nm = $request->get('first_nm');
        $guest->last_nm = $request->get('last_nm');
        $guest->guest_type_id = 2 ;
        $guest->hotel_id = $request->get('hotel');
        $guest->push();

        $progCost = Program::find($request->get("prog_nm"))
            ->where("programme_id","=",$request->get("prog_nm"))
            ->get("programme_cost");

        if ($request->get("payment_type") === "1") {

            $findCredit = Tour_Company::find(($request->get("tour_comp")))
                ->where("tour_company_id","=",$request->get("tour_comp"))
                ->get("credit_amt");


            $addCredit = Tour_Company::find($request->get("tour_comp"))
                ->update(["credit_amt" => $findCredit[0]->credit_amt += ((int)$progCost[0]->programme_cost)]);

        }
        else if($request->get("payment_type") === "2"){

            $newActivity = new Payment_Activity();
            $newActivity->amount_paid = $progCost[0]->programme_cost;

            $newPayment = new Payment_info();
            $newPayment->entity_type_id = 1;

            $guest->payment_info()->save($newPayment);
            $newPayment->payment_activity()->save($newActivity);



        }
        $guest->booking()->save($booking);

        return redirect("/booking");

    }
}
