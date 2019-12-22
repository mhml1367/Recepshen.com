<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class indexController extends Controller
{
    public function index()
    {

        $city = city();

        return view('/index')->with(compact('$city'));

    }
}
