<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class hotelsController extends Controller
{
    public function index()
    {

        
        $city = city();
        $hotelTypes = hotelTypes();
        return view('hotels')->with(compact('city','hotelTypes'));
    }
}
