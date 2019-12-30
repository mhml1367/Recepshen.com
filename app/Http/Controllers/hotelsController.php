<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Filesystem\Cache;

class hotelsController extends Controller
{
    public function index()
    {
        $city = city();
        $hotelTypes = hotelTypes();
        $hotelSpecifications = hotelSpecifications();
        return view('hotels')->with(compact('city','hotelTypes','hotelSpecifications'));
    }
    
    public function Hotel($Hotels,$IDHotel)
    {
        if (request()->input('DateFrom') == null) {
            $from = "";
            $to = "";
        }else{
            $from = request()->input('DateFrom');
            $to = request()->input('DateEnd');
        }
        // dd($from);
        $city = city();
        $hotelTypes = hotelTypes();
        $hotelSpecifications = hotelSpecifications();
        return view('hotel')->with(compact('to','from','IDHotel','city','hotelTypes','hotelSpecifications'));
    }
}
