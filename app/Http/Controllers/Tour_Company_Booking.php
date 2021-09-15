<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Guest;
use App\Models\Hotel;
use App\Models\Program;
use App\Models\Tour_Company;
use Illuminate\Http\Request;

class Tour_Company_Booking extends Controller
{
    public function index(){

        $tour_companies = Tour_Company::all();
        $hotels = Hotel::all();
        $programs = Program::all();

//        dd($programs);


        return view("guest_type.tour-booking")
            ->with(compact("tour_companies",$tour_companies))
            ->with(compact("hotels",$hotels))
            ->with(compact("programs",$programs));
    }

    public function bookGuest(Request $request) {

//        dd($request->all());
        $booking = new Booking();
        $booking->programme_id = $request->get('prog_nm');
        $booking->booking_type = "Tour";
        $booking->tour_company_id = $request->get("tour_comp");
        $booking->payment_type = $request->get("payment_type");


        $booking->date_booked = now("Jamaica");
        $guest = new Guest();
        $guest->first_nm = $request->get('first_nm');
        $guest->last_nm = $request->get('last_nm');
        $guest->guest_type = "Tour" ;
        $guest->hotel_id = $request->get('hotel');
        $guest->save();
        $guest->booking()->save($booking);


        $price = 5000;

        if ($request->get("payment_type") === "Credit") {

            $findCredit = Tour_Company::find(($request->get("tour_comp")))
                ->where("tour_company_id","=",$request->get("tour_comp"))
                ->get("credit_amt");

            $addCredit = Tour_Company::find($request->get("tour_comp"))
                ->update(["credit_amt" => $findCredit[0]->credit_amt += $price]);
        }


        return redirect("/booking");

    }
}
