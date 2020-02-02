<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Filesystem\Cache;

class trainController extends Controller
{
    public function index()
    {


        $city = city();
        return view('train/trains',compact('city'));

    }

}
