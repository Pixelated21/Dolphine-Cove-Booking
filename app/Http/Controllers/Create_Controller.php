<?php

namespace App\Http\Controllers;

use App\Models\Entities;
use App\Models\Guest_Type;
use App\Models\Hotel;
use App\Models\Payment_info;
use App\Models\Payment_Type;
use App\Models\Program;
use App\Models\Tour_Company;
use Illuminate\Http\Request;

class Create_Controller extends Controller
{
    public function addHotel(Request $request){

//        dd($request->all());

        $hotel = new Hotel();
        $hotel->hotel_name = $request->get("hotel_nm");
        $hotel->save();

        return redirect()->back();

    }

    public function addTourCompany(Request $request){

//        dd($request->all());

        $tourCompany = new Tour_Company();
        $tourCompany->company_name = $request->get("tour_company_nm");
        $tourCompany->save();

        return redirect()->back();




    }

    public function addProgramme(Request $request){

//                dd($request->all());

        $addProgramme = new Program();
        $addProgramme->programme_name = $request->get("prog_nm");
        $addProgramme->programme_cost = $request->get("prog_cost");
        $addProgramme->capacity = $request->get("prog_cap");
        $addProgramme->excursion_date = $request->get("excur_dt");

        $addProgramme->save();

        return redirect()->back();


    }


    public function addEntityType(Request $request){

//        dd($request->all());

        $addEntity = new Entities();
        $addEntity->entity_type = $request->get("entity_type");
        $addEntity->save();

        return redirect()->back();

    }

    public function addGuestType(Request $request){

//        dd($request->all());

        $addGuestType = new Guest_Type();
        $addGuestType->guest_type = $request->get("guest_type");
        $addGuestType->save();

        return redirect()->back();

    }

    public function addPaymentType(Request $request){

//        dd($request->all());

        $addPaymentType = new Payment_Type();
        $addPaymentType->payment_type = $request->get("payment_type");
        $addPaymentType->save();

        return redirect()->back();

    }
}
