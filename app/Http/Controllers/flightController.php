<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Filesystem\Cache;

class flightController extends Controller
{
    public function index()
    {


        $city = city();
        return view('flight/flight',compact('city'));

    }

}
