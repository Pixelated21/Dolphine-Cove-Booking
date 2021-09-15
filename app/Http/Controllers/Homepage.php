<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homepage extends Controller
{
    public function index(){
        return view("index");
    }

    public function booking(){
        return view("booking");
    }
}
