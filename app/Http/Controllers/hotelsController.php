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
        $city = city();
        $hotelTypes = hotelTypes();
        $hotelSpecifications = hotelSpecifications();
        return view('hotel')->with(compact('IDHotel','city','hotelTypes','hotelSpecifications'));
    }
}
